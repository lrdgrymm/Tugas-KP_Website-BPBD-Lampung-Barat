@extends('layouts.admin')

@section('title', 'Upload Dokumen Baru')

@section('content')

{{-- Header Page --}}
<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
    <div>
        <h2 class="text-2xl font-bold text-gray-800">Upload Dokumen</h2>
        <p class="text-sm text-gray-500">Tambahkan file arsip, regulasi, atau laporan untuk publik.</p>
    </div>
    <a href="{{ route('admin.dokumen.index') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-200 text-gray-700 rounded-xl hover:bg-gray-50 transition-colors text-sm font-medium">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

{{-- Alert Error (Styling Tailwind) --}}
@if ($errors->any())
    <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-100 text-red-700 flex items-start gap-3 shadow-sm">
        <div class="flex-shrink-0 mt-0.5">
            <i class="fas fa-exclamation-circle text-red-500"></i>
        </div>
        <div>
            <h3 class="font-bold text-sm mb-1">Gagal Mengupload</h3>
            <ul class="list-disc list-inside text-sm space-y-1 opacity-90">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

{{-- Form Upload Wrapper --}}
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
        
        <form action="{{ route('admin.dokumen.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            {{-- Input Nama Dokumen --}}
            <div>
                <label for="nama_dokumen" class="block text-sm font-bold text-gray-700 mb-2">Nama Dokumen</label>
                <input type="text" id="nama_dokumen" name="nama_dokumen" 
                    class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-gray-900 focus:bg-white focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10 transition-all outline-none placeholder-gray-400"
                    value="{{ old('nama_dokumen') }}" 
                    placeholder="Contoh: Laporan Kinerja 2025" required>
            </div>

            {{-- Input Kategori --}}
            <div>
                <label for="kategori" class="block text-sm font-bold text-gray-700 mb-2">Kategori</label>
                <div class="relative">
                    <span class="absolute left-4 top-3 text-gray-400"><i class="fas fa-tag"></i></span>
                    <input type="text" id="kategori" name="kategori" 
                        class="w-full pl-10 pr-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-gray-900 focus:bg-white focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10 transition-all outline-none placeholder-gray-400"
                        value="{{ old('kategori') }}" 
                        placeholder="Contoh: Perencanaan, Regulasi, Laporan" required>
                </div>
                <p class="text-xs text-gray-400 mt-1 ml-1">Gunakan kategori umum agar mudah dicari.</p>
            </div>

            {{-- Custom File Upload Area --}}
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">File Dokumen</label>
                
                <div class="relative w-full h-48 rounded-xl border-2 border-dashed border-emerald-300 bg-emerald-50/50 hover:bg-emerald-50 transition-colors group flex flex-col items-center justify-center text-center cursor-pointer overflow-hidden">
                    
                    <input type="file" id="file" name="file" required 
                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20"
                        onchange="updateFileName(this)">
                    
                    <div id="file-placeholder" class="z-10 transition-all duration-300">
                        <div class="w-14 h-14 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto mb-3 shadow-sm group-hover:scale-110 transition-transform">
                            <i class="fas fa-cloud-upload-alt text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-700 mb-1">Klik atau Seret file kesini</h4>
                        <p class="text-xs text-gray-500">PDF, DOCX, XLSX (Maks. 5MB)</p>
                    </div>

                    <div id="file-info" class="hidden z-10 absolute inset-0 bg-emerald-50 flex-col items-center justify-center w-full h-full">
                        <i class="fas fa-file-alt text-4xl text-emerald-600 mb-2"></i>
                        <p id="filename-display" class="font-bold text-gray-800 px-4 truncate max-w-full">nama_file.pdf</p>
                        <p class="text-xs text-emerald-600 font-medium mt-1">Klik untuk ganti file</p>
                    </div>
                </div>
            </div>
            
            <hr class="border-gray-100">

            {{-- Submit Button --}}
            <button type="submit" class="w-full py-3.5 px-4 bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-white font-bold rounded-xl shadow-lg shadow-emerald-500/30 transition-all transform hover:scale-[1.01]">
                <i class="fas fa-upload mr-2"></i> Mulai Upload
            </button>

        </form>
    </div>
</div>

{{-- Script untuk Menampilkan Nama File setelah dipilih --}}
<script>
    function updateFileName(input) {
        const placeholder = document.getElementById('file-placeholder');
        const fileInfo = document.getElementById('file-info');
        const filenameDisplay = document.getElementById('filename-display');

        if (input.files && input.files[0]) {
            // Ambil nama file
            filenameDisplay.textContent = input.files[0].name;
            
            // Sembunyikan placeholder, Tampilkan Info File
            placeholder.classList.add('opacity-0', 'scale-90'); // Animasi keluar
            setTimeout(() => {
                placeholder.classList.add('hidden');
                fileInfo.classList.remove('hidden');
                fileInfo.classList.add('flex'); // Biar centering jalan
            }, 200);
        }
    }
</script>

@endsection