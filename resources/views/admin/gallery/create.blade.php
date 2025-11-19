@extends('layouts.admin')

@section('title', 'Tambah Galeri')

@section('content')

{{-- Header Page --}}
<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
    <div>
        <h2 class="text-2xl font-bold text-gray-800">Tambah Galeri Baru</h2>
        <p class="text-sm text-gray-500">Publikasikan foto kegiatan atau video dokumentasi.</p>
    </div>
    <a href="{{ route('admin.gallery.index') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-200 text-gray-700 rounded-xl hover:bg-gray-50 transition-colors text-sm font-medium">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

{{-- Alert Error --}}
@if ($errors->any())
    <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-100 text-red-700 flex items-start gap-3 shadow-sm">
        <div class="flex-shrink-0 mt-0.5">
            <i class="fas fa-exclamation-circle text-red-500"></i>
        </div>
        <div>
            <h3 class="font-bold text-sm mb-1">Gagal Menyimpan</h3>
            <ul class="list-disc list-inside text-sm space-y-1 opacity-90">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

{{-- Form Wrapper --}}
<div class="max-w-3xl mx-auto">
    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
            
            {{-- 1. Judul & Keterangan --}}
            <div class="space-y-4 mb-8">
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Judul / Caption</label>
                    <input type="text" name="judul" value="{{ old('judul') }}" required 
                        class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-gray-900 focus:bg-white focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10 transition-all outline-none placeholder-gray-400"
                        placeholder="Contoh: Evakuasi Korban Banjir...">
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Keterangan (Opsional)</label>
                    <textarea name="keterangan" rows="2" 
                        class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-gray-900 focus:bg-white focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10 transition-all outline-none placeholder-gray-400"
                        placeholder="Deskripsi singkat tentang media ini...">{{ old('keterangan') }}</textarea>
                </div>
            </div>

            <hr class="border-gray-100 mb-8">

            {{-- 2. Tipe Media (Visual Selector) --}}
            <div class="mb-8">
                <label class="block text-sm font-bold text-gray-700 mb-3">Tipe Media</label>
                <div class="grid grid-cols-2 gap-4">
                    <label class="cursor-pointer relative">
                        <input type="radio" name="tipe" value="foto" class="peer sr-only" {{ old('tipe', 'foto') == 'foto' ? 'checked' : '' }} onchange="toggleMediaType()">
                        <div class="p-4 rounded-xl border-2 border-gray-200 bg-gray-50 peer-checked:border-emerald-500 peer-checked:bg-emerald-50 hover:bg-gray-100 transition-all text-center">
                            <div class="w-10 h-10 mx-auto mb-2 rounded-full bg-white peer-checked:bg-emerald-200 flex items-center justify-center text-gray-500 peer-checked:text-emerald-700 shadow-sm">
                                <i class="fas fa-camera text-lg"></i>
                            </div>
                            <span class="block font-bold text-gray-700 peer-checked:text-emerald-800">Foto</span>
                        </div>
                    </label>

                    <label class="cursor-pointer relative">
                        <input type="radio" name="tipe" value="video" class="peer sr-only" {{ old('tipe') == 'video' ? 'checked' : '' }} onchange="toggleMediaType()">
                        <div class="p-4 rounded-xl border-2 border-gray-200 bg-gray-50 peer-checked:border-emerald-500 peer-checked:bg-emerald-50 hover:bg-gray-100 transition-all text-center">
                            <div class="w-10 h-10 mx-auto mb-2 rounded-full bg-white peer-checked:bg-emerald-200 flex items-center justify-center text-gray-500 peer-checked:text-emerald-700 shadow-sm">
                                <i class="fas fa-video text-lg"></i>
                            </div>
                            <span class="block font-bold text-gray-700 peer-checked:text-emerald-800">Video</span>
                        </div>
                    </label>
                </div>
            </div>

            {{-- 3. Sumber Media (Tabs) --}}
            <div class="mb-6">
                <label class="block text-sm font-bold text-gray-700 mb-3">Sumber Media</label>
                <div class="flex bg-gray-100 p-1 rounded-xl inline-flex w-full md:w-auto">
                    <label class="flex-1 md:flex-none cursor-pointer">
                        <input type="radio" name="sumber_tipe" value="upload" class="peer sr-only" {{ old('sumber_tipe', 'upload') == 'upload' ? 'checked' : '' }} onchange="toggleSourceType()">
                        <div class="px-6 py-2 rounded-lg text-sm font-bold text-gray-500 peer-checked:bg-white peer-checked:text-gray-900 peer-checked:shadow-sm transition-all text-center">
                            <i class="fas fa-cloud-upload-alt mr-2"></i> Upload File
                        </div>
                    </label>
                    <label class="flex-1 md:flex-none cursor-pointer">
                        <input type="radio" name="sumber_tipe" value="link" class="peer sr-only" {{ old('sumber_tipe') == 'link' ? 'checked' : '' }} onchange="toggleSourceType()">
                        <div class="px-6 py-2 rounded-lg text-sm font-bold text-gray-500 peer-checked:bg-white peer-checked:text-gray-900 peer-checked:shadow-sm transition-all text-center">
                            <i class="fas fa-link mr-2"></i> Link Eksternal
                        </div>
                    </label>
                </div>
            </div>

            {{-- AREA INPUT DINAMIS --}}
            
            <div id="input-upload" class="mb-6">
                <div class="relative w-full h-64 rounded-xl border-2 border-dashed border-emerald-300 bg-emerald-50/30 hover:bg-emerald-50 transition-colors group flex flex-col items-center justify-center text-center cursor-pointer overflow-hidden">
                    <input type="file" name="file_upload" id="file-input-accept" 
                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20"
                        onchange="previewFile(this)">
                    
                    <div id="upload-placeholder" class="z-10 pointer-events-none">
                        <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform">
                            <i class="fas fa-plus text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-700">Klik untuk memilih file</h4>
                        <p class="text-xs text-gray-500 mt-1" id="format-text">JPG, PNG (Maks. 5MB)</p>
                    </div>

                    <div id="file-preview-box" class="hidden absolute inset-0 z-10 w-full h-full bg-gray-900 flex items-center justify-center">
                        </div>
                </div>
            </div>

            <div id="input-link" class="hidden mb-6">
                <label class="block text-xs font-bold text-gray-500 uppercase mb-1">URL Media</label>
                <div class="relative">
                    <span class="absolute left-4 top-3 text-gray-400"><i class="fas fa-globe"></i></span>
                    <input type="url" name="link_url" value="{{ old('link_url') }}" 
                        class="w-full pl-10 pr-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-gray-900 focus:bg-white focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10 transition-all outline-none"
                        placeholder="https://youtube.com/watch?v=...">
                </div>
                <p class="text-xs text-gray-400 mt-2">
                    <i class="fas fa-info-circle mr-1"></i> Mendukung link YouTube atau direct link gambar/video.
                </p>
            </div>

            {{-- Submit Button --}}
            <button type="submit" class="w-full py-3.5 px-4 bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-white font-bold rounded-xl shadow-lg shadow-emerald-500/30 transition-all transform hover:scale-[1.01]">
                <i class="fas fa-save mr-2"></i> Simpan ke Galeri
            </button>

        </div>
    </form>
</div>

@endsection

@push('scripts')
<script>
    // Elements
    const fileInput = document.getElementById('file-input-accept');
    const inputUploadSection = document.getElementById('input-upload');
    const inputLinkSection = document.getElementById('input-link');
    const formatText = document.getElementById('format-text');
    const uploadPlaceholder = document.getElementById('upload-placeholder');
    const previewBox = document.getElementById('file-preview-box');

    // 1. Handle Perubahan Tipe Media (Foto/Video)
    function toggleMediaType() {
        const type = document.querySelector('input[name="tipe"]:checked').value;
        
        // Reset preview & input
        fileInput.value = '';
        previewBox.innerHTML = '';
        previewBox.classList.add('hidden');
        uploadPlaceholder.classList.remove('hidden');

        if (type === 'foto') {
            fileInput.accept = 'image/jpeg,image/png,image/gif,image/webp';
            formatText.textContent = 'JPG, PNG, WEBP (Maks. 5MB)';
        } else {
            fileInput.accept = 'video/mp4,video/quicktime,video/x-msvideo';
            formatText.textContent = 'MP4, AVI (Maks. 20MB)';
        }
    }

    // 2. Handle Perubahan Sumber (Upload/Link)
    function toggleSourceType() {
        const source = document.querySelector('input[name="sumber_tipe"]:checked').value;
        
        if (source === 'upload') {
            inputUploadSection.classList.remove('hidden');
            inputLinkSection.classList.add('hidden');
        } else {
            inputUploadSection.classList.add('hidden');
            inputLinkSection.classList.remove('hidden');
        }
    }

    // 3. Handle File Preview (Mekanisme Canggih)
    function previewFile(input) {
        const file = input.files[0];
        if (!file) return;

        const reader = new FileReader();
        
        reader.onload = function(e) {
            previewBox.innerHTML = ''; // Bersihkan preview lama
            previewBox.classList.remove('hidden');
            uploadPlaceholder.classList.add('hidden'); // Sembunyikan teks 'Klik disini'

            // Buat tombol reset kecil di pojok
            const resetBtn = document.createElement('div');
            resetBtn.className = 'absolute top-2 right-2 bg-black/50 hover:bg-red-600 text-white p-2 rounded-full cursor-pointer transition-colors z-50';
            resetBtn.innerHTML = '<i class="fas fa-times"></i>';
            resetBtn.onclick = function(ev) {
                ev.preventDefault(); // Mencegah trigger input file lagi
                fileInput.value = '';
                previewBox.classList.add('hidden');
                uploadPlaceholder.classList.remove('hidden');
            };
            previewBox.appendChild(resetBtn);

            // Cek tipe file untuk menampilkan elemen yang sesuai
            if (file.type.startsWith('image/')) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'w-full h-full object-contain';
                previewBox.appendChild(img);
            } else if (file.type.startsWith('video/')) {
                const video = document.createElement('video');
                video.src = e.target.result;
                video.controls = true;
                video.className = 'w-full h-full object-contain';
                previewBox.appendChild(video);
            }
        }

        reader.readAsDataURL(file);
    }

    // Jalankan saat load pertama kali (untuk handle old input jika ada error)
    document.addEventListener('DOMContentLoaded', () => {
        toggleMediaType();
        toggleSourceType();
    });
</script>
@endpush