@extends('layouts.admin')

@section('title', 'Edit Dokumen')

@section('content')

{{-- Header Page --}}
<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
    <div>
        <h2 class="text-2xl font-bold text-gray-800">Edit Dokumen</h2>
        <p class="text-sm text-gray-500">Perbarui nama, kategori, atau ganti file dokumen.</p>
    </div>
    <a href="{{ route('admin.dokumen.index') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-200 text-gray-700 rounded-xl hover:bg-gray-50 transition-colors text-sm font-medium">
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
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
        
        <form action="{{ route('admin.dokumen.update', $dokumen->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            {{-- Input Nama Dokumen --}}
            <div>
                <label for="nama_dokumen" class="block text-sm font-bold text-gray-700 mb-2">Nama Dokumen</label>
                <input type="text" id="nama_dokumen" name="nama_dokumen" 
                    class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-gray-900 focus:bg-white focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10 transition-all outline-none placeholder-gray-400"
                    value="{{ old('nama_dokumen', $dokumen->nama_dokumen) }}" required>
            </div>

            {{-- Input Kategori --}}
            <div>
                <label for="kategori" class="block text-sm font-bold text-gray-700 mb-2">Kategori</label>
                <div class="relative">
                    <span class="absolute left-4 top-3 text-gray-400"><i class="fas fa-tag"></i></span>
                    <input type="text" id="kategori" name="kategori" 
                        class="w-full pl-10 pr-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-gray-900 focus:bg-white focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10 transition-all outline-none placeholder-gray-400"
                        value="{{ old('kategori', $dokumen->kategori) }}" required>
                </div>
            </div>

            <hr class="border-gray-100 my-2">

            {{-- Area File --}}
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-4">Pengaturan File</label>
                
                <div class="mb-4 p-4 bg-blue-50 rounded-xl border border-blue-100 flex items-center gap-3">
                    <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center text-blue-500 shadow-sm">
                        <i class="fas fa-file-alt text-lg"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-xs text-blue-600 font-bold uppercase mb-0.5">File Saat Ini:</p>
                        <p class="text-sm text-gray-800 font-medium truncate" title="{{ $dokumen->file_path }}">
                            {{ basename($dokumen->file_path) }} </p>
                    </div>
                    <a href="{{ asset('storage/dokumen/' . $dokumen->file_path) }}" target="_blank" class="text-blue-600 hover:text-blue-800 text-xs font-bold underline">
                        Cek File
                    </a>
                </div>

                <p class="text-xs font-bold text-gray-500 uppercase mb-2">Ganti File (Opsional):</p>
                <div class="relative w-full h-40 rounded-xl border-2 border-dashed border-gray-300 bg-gray-50 hover:bg-gray-100 transition-colors group flex flex-col items-center justify-center text-center cursor-pointer overflow-hidden">
                    
                    <input type="file" id="file" name="file" 
                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20"
                        onchange="updateFileName(this)">
                    
                    <div id="file-placeholder" class="z-10 transition-all duration-300">
                        <div class="w-12 h-12 bg-gray-200 text-gray-500 rounded-full flex items-center justify-center mx-auto mb-2 shadow-sm group-hover:scale-110 transition-transform">
                            <i class="fas fa-exchange-alt text-xl"></i>
                        </div>
                        <h4 class="font-medium text-gray-600 text-sm mb-1">Klik untuk mengganti file</h4>
                        <p class="text-xs text-gray-400">Biarkan kosong jika tidak ingin mengubah</p>
                    </div>

                    <div id="file-info" class="hidden z-10 absolute inset-0 bg-emerald-50 flex-col items-center justify-center w-full h-full">
                        <i class="fas fa-file-upload text-3xl text-emerald-600 mb-2"></i>
                        <p id="filename-display" class="font-bold text-gray-800 px-4 truncate max-w-full text-sm">nama_file.pdf</p>
                        <p class="text-xs text-emerald-600 font-medium mt-1">File baru akan diupload</p>
                    </div>
                </div>
            </div>
            
            {{-- Submit Button --}}
            <button type="submit" class="w-full mt-6 py-3 px-4 bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-white font-bold rounded-xl shadow-lg shadow-emerald-500/30 transition-all transform hover:scale-[1.01]">
                <i class="fas fa-save mr-2"></i> Simpan Perubahan
            </button>

        </form>
    </div>
</div>

{{-- Script Preview Nama File --}}
<script>
    function updateFileName(input) {
        const placeholder = document.getElementById('file-placeholder');
        const fileInfo = document.getElementById('file-info');
        const filenameDisplay = document.getElementById('filename-display');

        if (input.files && input.files[0]) {
            filenameDisplay.textContent = input.files[0].name;
            placeholder.classList.add('opacity-0', 'scale-90');
            setTimeout(() => {
                placeholder.classList.add('hidden');
                fileInfo.classList.remove('hidden');
                fileInfo.classList.add('flex');
            }, 200);
        }
    }
</script>

@endsection