@extends('layouts.admin')

@section('title', 'Tambah Berita')

@section('content')

{{-- Header Page --}}
<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
    <div>
        <h2 class="text-2xl font-bold text-gray-800">Tambah Berita Baru</h2>
        <p class="text-sm text-gray-500">Buat postingan informasi atau kegiatan terbaru.</p>
    </div>
    <a href="{{ route('admin.berita.index') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-200 text-gray-700 rounded-xl hover:bg-gray-50 transition-colors text-sm font-medium">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

<form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        {{-- KOLOM KIRI: KONTEN UTAMA (Lebar 2/3) --}}
        <div class="lg:col-span-2 space-y-6">
            
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                
                <div class="mb-6">
                    <label for="judul" class="block text-sm font-bold text-gray-700 mb-2">Judul Berita</label>
                    <input type="text" name="judul" id="judul" 
                        class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-gray-900 text-lg font-semibold focus:bg-white focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10 transition-all outline-none placeholder-gray-400"
                        placeholder="Contoh: BPBD Salurkan Bantuan Logistik..." required>
                </div>

                <div>
                    <label for="isi_berita" class="block text-sm font-bold text-gray-700 mb-2">Konten Berita</label>
                    <div class="relative">
                        <textarea name="isi_berita" id="isi_berita" rows="15" 
                            class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-gray-900 leading-relaxed focus:bg-white focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10 transition-all outline-none placeholder-gray-400"
                            placeholder="Tuliskan detail berita disini..."></textarea>
                        
                        <div class="absolute bottom-3 right-3 text-xs text-gray-400 bg-white/80 px-2 py-1 rounded">
                            Tip: Gunakan Enter untuk paragraf baru
                        </div>
                    </div>
                </div>

            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <h3 class="text-sm font-bold text-gray-700 mb-4 flex items-center gap-2">
                    <i class="fas fa-link text-gray-400"></i> Referensi / Sumber Luar
                </h3>
                <div>
                    <label class="block text-xs text-gray-500 mb-1">External Link (Opsional)</label>
                    <div class="relative">
                        <span class="absolute left-4 top-3 text-gray-400"><i class="fas fa-globe"></i></span>
                        <input type="url" name="external_link" 
                            class="w-full pl-10 pr-4 py-2.5 rounded-xl bg-gray-50 border border-gray-200 text-gray-900 text-sm focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/10 transition-all outline-none"
                            placeholder="https://...">
                    </div>
                    <p class="text-xs text-gray-400 mt-1">Isi jika berita ini mengarah ke website lain (misal: berita nasional).</p>
                </div>
            </div>

        </div>

        {{-- KOLOM KANAN: METADATA & PUBLISH (Lebar 1/3) --}}
        <div class="lg:col-span-1 space-y-6">
            
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <h3 class="font-bold text-gray-800 mb-4">Terbitkan</h3>
                
                <div class="mb-4">
                    <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Tanggal Publikasi</label>
                    <input type="date" name="tanggal_publikasi" 
                        class="w-full px-4 py-2 rounded-lg bg-gray-50 border border-gray-200 text-gray-900 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/10 outline-none transition-all"
                        value="{{ date('Y-m-d') }}">
                </div>

                <div class="mb-6">
                    <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Penulis</label>
                    <div class="relative">
                        <span class="absolute left-3 top-2.5 text-gray-400"><i class="fas fa-user"></i></span>
                        <input type="text" name="penulis" 
                            class="w-full pl-9 pr-4 py-2 rounded-lg bg-gray-50 border border-gray-200 text-gray-900 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/10 outline-none transition-all"
                            value="{{ Auth::user()->name ?? 'Admin' }}"> </div>
                </div>

                <hr class="border-gray-100 mb-4">

                <button type="submit" class="w-full py-3 px-4 bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-white font-bold rounded-xl shadow-lg shadow-emerald-500/30 transition-all transform hover:scale-[1.02]">
                    <i class="fas fa-save mr-2"></i> Simpan & Terbitkan
                </button>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <h3 class="font-bold text-gray-800 mb-4">Gambar Utama</h3>
                
                <div class="relative w-full h-64 rounded-xl border-2 border-dashed border-gray-300 bg-gray-50 hover:bg-gray-100 transition-colors group overflow-hidden flex flex-col items-center justify-center text-center cursor-pointer">
                    
                    <input type="file" name="gambar" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" onchange="previewImage(this)">
                    
                    <div id="upload-placeholder" class="p-4">
                        <div class="w-12 h-12 bg-emerald-100 text-emerald-500 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform">
                            <i class="fas fa-cloud-upload-alt text-xl"></i>
                        </div>
                        <p class="text-sm font-medium text-gray-600">Klik atau seret gambar ke sini</p>
                        <p class="text-xs text-gray-400 mt-1">JPG, PNG, JPEG (Max. 2MB)</p>
                    </div>

                    <img id="image-preview" src="#" alt="Preview" class="absolute inset-0 w-full h-full object-cover hidden">
                </div>
            </div>

        </div>
    </div>

</form>

{{-- Script Sederhana untuk Preview Gambar --}}
<script>
    function previewImage(input) {
        const preview = document.getElementById('image-preview');
        const placeholder = document.getElementById('upload-placeholder');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
                placeholder.classList.add('opacity-0'); // Sembunyikan placeholder
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

@endsection