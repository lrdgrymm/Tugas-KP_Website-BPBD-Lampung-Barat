@extends('layouts.admin')

@section('title', 'Daftar Galeri')

@section('content')

{{-- 1. HEADER & TOOLS --}}
<div class="flex flex-col md:flex-row justify-between items-center gap-4 mb-8">
    
    {{-- Kiri: Judul --}}
    <div>
        <h2 class="text-2xl font-bold text-gray-800">Galeri Media</h2>
        <p class="text-sm text-gray-500">Kelola dokumentasi foto dan video kegiatan.</p>
    </div>

    {{-- Kanan: Tombol Tambah --}}
    <a href="{{ route('admin.gallery.create') }}" class="inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-white font-bold rounded-xl shadow-lg shadow-emerald-500/30 transition-all transform hover:scale-105">
        <i class="fas fa-plus"></i>
        <span>Tambah Galeri</span>
    </a>
</div>

{{-- 2. NOTIFIKASI --}}
@if(session('success'))
    <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-100 text-emerald-700 flex items-center gap-3 shadow-sm animate-fade-in-down">
        <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center flex-shrink-0">
            <i class="fas fa-check"></i>
        </div>
        <p class="font-medium">{{ session('success') }}</p>
    </div>
@endif

{{-- 3. GRID GALLERY --}}
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    
    @forelse($galleries as $gallery)
        {{-- Card Item --}}
        <div class="group bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col">
            
            {{-- Media Preview Area (Aspect Ratio 16:9) --}}
            <div class="relative aspect-video bg-gray-100 border-b border-gray-50 overflow-hidden">
                
                {{-- Badge Tipe --}}
                <div class="absolute top-3 left-3 z-20">
                    @if($gallery->tipe == 'foto')
                        <span class="px-2.5 py-1 rounded-lg bg-emerald-500/90 text-white text-[10px] font-bold uppercase tracking-wider backdrop-blur-sm shadow-sm">
                            <i class="fas fa-camera mr-1"></i> Foto
                        </span>
                    @else
                        <span class="px-2.5 py-1 rounded-lg bg-rose-500/90 text-white text-[10px] font-bold uppercase tracking-wider backdrop-blur-sm shadow-sm">
                            <i class="fas fa-video mr-1"></i> Video
                        </span>
                    @endif
                </div>

                {{-- Logic Tampilan Media --}}
                @php
                    $src = $gallery->sumber_tipe == 'upload' ? asset('storage/' . $gallery->path) : $gallery->path;
                @endphp

                @if($gallery->tipe == 'foto')
                    <img src="{{ $src }}" alt="{{ $gallery->judul }}" 
                         class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                @else
                    <video class="w-full h-full object-cover" controls preload="metadata">
                        <source src="{{ $src }}" type="video/mp4">
                        Browser Anda tidak mendukung tag video.
                    </video>
                @endif

                {{-- Tombol Hapus (Overlay di pojok kanan atas saat hover) --}}
                <form action="{{ route('admin.gallery.destroy', $gallery->id) }}" method="POST" class="absolute top-3 right-3 z-20 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="w-8 h-8 rounded-lg bg-white text-red-500 hover:bg-red-500 hover:text-white flex items-center justify-center shadow-md transition-colors"
                            onclick="return confirm('Hapus item galeri ini permanen?')"
                            title="Hapus Item">
                        <i class="fas fa-trash-alt text-xs"></i>
                    </button>
                </form>
            </div>

            {{-- Info Content --}}
            <div class="p-5 flex-1 flex flex-col">
                <h3 class="font-bold text-gray-800 mb-1 line-clamp-1 group-hover:text-emerald-600 transition-colors" title="{{ $gallery->judul }}">
                    {{ $gallery->judul }}
                </h3>
                
                @if($gallery->keterangan)
                    <p class="text-sm text-gray-500 line-clamp-2 mb-3 flex-1">
                        {{ $gallery->keterangan }}
                    </p>
                @else
                    <p class="text-sm text-gray-400 italic mb-3 flex-1">Tidak ada keterangan.</p>
                @endif

                <div class="flex items-center justify-between pt-3 border-t border-gray-50 text-xs text-gray-400">
                    <span class="flex items-center gap-1">
                        <i class="far fa-clock"></i> {{ $gallery->created_at->format('d M Y') }}
                    </span>
                    <span class="flex items-center gap-1">
                        @if($gallery->sumber_tipe == 'upload')
                            <i class="fas fa-cloud-upload-alt"></i> Upload
                        @else
                            <i class="fas fa-link"></i> Eksternal
                        @endif
                    </span>
                </div>
            </div>
        </div>

    @empty
        {{-- Empty State --}}
        <div class="col-span-full py-16 text-center bg-white rounded-2xl border border-dashed border-gray-200">
            <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="far fa-images text-2xl text-gray-300"></i>
            </div>
            <h3 class="text-lg font-bold text-gray-800">Galeri Masih Kosong</h3>
            <p class="text-gray-500 text-sm mt-1 mb-4">Belum ada dokumentasi kegiatan yang diupload.</p>
            <a href="{{ route('admin.gallery.create') }}" class="text-sm font-medium text-emerald-600 hover:text-emerald-700 hover:underline">
                + Tambah Dokumentasi Baru
            </a>
        </div>
    @endforelse

</div>

{{-- Pagination --}}
@if($galleries->hasPages())
    <div class="mt-8 flex justify-end">
        {{ $galleries->links() }}
    </div>
@endif

@endsection