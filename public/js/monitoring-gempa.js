document.addEventListener('DOMContentLoaded', function() {
    fetchDataGempa();
    
    // Atur interval untuk memperbarui data setiap 60 detik (60000 milidetik)
    setInterval(fetchDataGempa, 60000);
});

// Menyeleksi elemen container di file Blade
// ID di file blade kamu adalah "gempa-widget"
const gempaContainer = document.getElementById('gempa-widget');

// Fungsi utama untuk mengambil dan merender data
async function fetchDataGempa() {
    
    // Tampilkan pesan loading HANYA jika container belum ada isinya
    if (gempaContainer && gempaContainer.innerHTML.includes('loading-text')) {
        gempaContainer.innerHTML = '<p class="loading">Sedang memuat data...</p>';
    }

    try {
        // 1. Ambil data dari API
        const response = await fetch('https://data.bmkg.go.id/DataMKG/TEWS/autogempa.json');
        
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        
        // 2. Ubah response menjadi format JSON
        const data = await response.json();
        const gempa = data.Infogempa.gempa;
        
        // 3. Panggil fungsi untuk menampilkan data ke halaman
        renderData(gempa);

    } catch (error) {
        // 4. Jika terjadi error
        console.error("Gagal mengambil data gempa:", error);
        if (gempaContainer) {
            gempaContainer.innerHTML = `<div class="loading" style="color: red;">Gagal memuat data. Silakan coba lagi nanti.</div>`;
        }
    }
}

// Fungsi untuk menampilkan data ke dalam elemen HTML
function renderData(gempa) {
    if (!gempaContainer) return;

    // URL gambar Peta Guncangan (Shakemap)
    // Pastikan nama file shakemap ada, jika tidak, jangan tampilkan
    const shakemapUrl = gempa.Shakemap ? `https://data.bmkg.go.id/DataMKG/TEWS/${gempa.Shakemap}` : null;
    
    // Tentukan kelas CSS untuk potensi tsunami
    const tsunamiClass = gempa.Potensi.toLowerCase().includes('tidak') ? '' : 'yes';

    // Format HTML yang akan ditampilkan
    // PENTING: Kita tidak menyertakan <h1>Info Gempa Terkini</h1>
    // karena itu sudah ada di file Blade kamu (<h3>Gempa Bumi Terkini</h3>)
    const htmlContent = `
        <div class="gempa-content">
            <div class="data-item">
                <span class="label">Waktu</span>
                <span class="value">${gempa.Tanggal} | ${gempa.Jam}</span>
            </div>
            <div class="data-item">
                <span class="label">Kekuatan</span>
                <span class="value magnitude">M ${gempa.Magnitude}</span>
            </div>
            <div class="data-item">
                <span class="label">Kedalaman</span>
                <span class="value">${gempa.Kedalaman}</span>
            </div>
            <div class="data-item">
                <span class="label">Lokasi</span>
                <span class="value">${gempa.Wilayah}</span>
            </div>
            
            <div class="tsunami ${tsunamiClass}">
                ${gempa.Potensi}
            </div>

            ${shakemapUrl ? `
            <div class="shakemap">
                <p><strong>Peta Guncangan (Shakemap)</strong></p>
                <a href="${shakemapUrl}" target="_blank" rel="noopener noreferrer">
                    <img src="${shakemapUrl}" alt="Peta Guncangan Gempa (Shakemap)">
                </a>
            </div>
            ` : ''}
            
            <div class="gempa-footer">
                Sumber: BMKG (Data diperbarui otomatis)
            </div>
        </div>
    `;
    
    // Masukkan HTML yang sudah diformat ke dalam container
    gempaContainer.innerHTML = htmlContent;
}