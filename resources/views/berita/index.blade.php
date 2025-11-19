@extends('layouts.app')
@section('title', 'Arsip Berita')
@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 py-20 md:py-32 overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('aset/slider-3.jpg') }}" alt="Background" class="w-full h-full object-cover opacity-20">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900/90 via-blue-800/85 to-red-900/80"></div>
    </div>
    
    <!-- Decorative Elements -->
    <div class="absolute top-0 right-0 w-72 h-72 bg-red-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>
    
    <!-- Content -->
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-block mb-4">
                <span class="bg-red-500/20 text-red-300 px-4 py-2 rounded-full text-sm font-semibold backdrop-blur-sm border border-red-400/30">
                    BPBD Lampung Barat
                </span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 leading-tight">
                Arsip Berita
            </h1>
            <p class="text-blue-100 text-lg md:text-xl">
                Informasi terkini seputar penanggulangan bencana dan kegiatan BPBD
            </p>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="py-12 md:py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        
        <!-- News Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @forelse($semua_berita as $berita)
                <article class="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
                    <a href="{{ $berita->external_link ?: route('berita.show', $berita) }}" 
                       target="{{ $berita->external_link ? '_blank' : '_self' }}"
                       class="block">
                        
                        <!-- Image Container -->
                        <div class="relative h-52 overflow-hidden bg-gray-200">
                            <img src="{{ asset('storage/berita/' . $berita->gambar) }}" 
                                 alt="{{ $berita->judul }}"
                                 class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            
                            <!-- Overlay Gradient -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            
                            <!-- External Link Badge -->
                            @if($berita->external_link)
                                <div class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-semibold flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                    Link Eksternal
                                </div>
                            @endif
                        </div>
                        
                        <!-- Content -->
                        <div class="p-6">
                            <!-- Title -->
                            <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-blue-600 transition-colors duration-300">
                                {{ $berita->judul }}
                            </h3>
                            
                            <!-- Summary -->
                            <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3">
                                {{ $berita->ringkasan }}
                            </p>
                            
                            <!-- Read More Button -->
                            <div class="flex items-center text-blue-600 font-semibold text-sm group-hover:text-blue-700">
                                <span>Baca Selengkapnya</span>
                                <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-2 transition-transform duration-300" 
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </div>
                    </a>
                </article>
            @empty
                <!-- Empty State -->
                <div class="col-span-full">
                    <div class="bg-white rounded-2xl shadow-md p-12 text-center">
                        <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Belum Ada Berita</h3>
                        <p class="text-gray-600">Belum ada berita untuk ditampilkan saat ini.</p>
                    </div>
                </div>
            @endforelse
        </div>
        
        <!-- Pagination -->
        @if($semua_berita->hasPages())
            <div class="mt-12">
                <div class="flex justify-center">
                    {{ $semua_berita->links() }}
                </div>
            </div>
        @endif
    </div>
</section>

<!-- Custom Pagination Styling (Add to your CSS or in a style block) -->
<style>
    /* Line clamp utilities for text truncation */
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    /* Custom pagination styling to match Tailwind design */
    .pagination {
        display: flex;
        gap: 0.5rem;
        align-items: center;
        justify-content: center;
    }
    
    .pagination .page-link {
        padding: 0.5rem 1rem;
        border-radius: 0.5rem;
        background-color: white;
        color: #4B5563;
        font-weight: 500;
        transition: all 0.3s;
        border: 1px solid #E5E7EB;
    }
    
    .pagination .page-link:hover {
        background-color: #3B82F6;
        color: white;
        border-color: #3B82F6;
    }
    
    .pagination .page-item.active .page-link {
        background-color: #2563EB;
        color: white;
        border-color: #2563EB;
    }
    
    .pagination .page-item.disabled .page-link {
        opacity: 0.5;
        cursor: not-allowed;
    }
</style>

@endsection