@extends('layouts.app')

@section('title', 'Galeri Foto')

@section('content')

<section class="relative bg-gradient-to-br from-emerald-900 via-teal-900 to-cyan-900 py-20 md:py-28 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('aset/slider-1.jpg') }}" alt="Galeri Background" class="w-full h-full object-cover opacity-20 mix-blend-overlay">
        <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/90 via-emerald-900/40 to-transparent"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 mb-4 bg-white/10 backdrop-blur-md border border-white/20 px-4 py-2 rounded-full">
            <svg class="w-5 h-5 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            <span class="text-emerald-100 text-sm font-semibold tracking-wide">Dokumentasi Kegiatan</span>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Galeri Foto</h1>
        <p class="text-emerald-100 text-lg max-w-2xl mx-auto leading-relaxed">
            Rekam jejak visual kegiatan penanggulangan bencana, sosialisasi, dan aksi kemanusiaan BPBD Lampung Barat.
        </p>
    </div>
</section>

<section class="py-12 md:py-20 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            
            @forelse($fotos as $foto)
                @php
                    // Logic path gambar
                    $src = $foto->sumber_tipe == 'upload' ? asset('storage/' . $foto->path) : $foto->path;
                @endphp

                <a href="{{ $src }}" 
                   class="group relative block bg-gray-900 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 aspect-[4/3]"
                   data-fancybox="gallery"
                   data-caption="{{ $foto->judul }} - {{ $foto->keterangan ?? '' }}">
                    
                    <img src="{{ $src }}" 
                         alt="{{ $foto->judul }}" 
                         class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out opacity-90 group-hover:opacity-100">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                        
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transform scale-50 group-hover:scale-100 transition-all duration-500 delay-100">
                            <i class="fas fa-search-plus text-lg"></i>
                        </div>

                        <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <h3 class="text-white font-bold text-lg leading-tight mb-1 line-clamp-2">
                                {{ $foto->judul }}
                            </h3>
                            @if($foto->keterangan)
                                <p class="text-gray-300 text-xs line-clamp-1">{{ $foto->keterangan }}</p>
                            @endif
                        </div>
                    </div>
                </a>

            @empty
                <div class="col-span-full py-16 text-center">
                    <div class="inline-block p-6 rounded-full bg-gray-100 mb-4">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">Belum Ada Foto</h3>
                    <p class="text-gray-500 mt-2">Dokumentasi kegiatan belum tersedia saat ini.</p>
                </div>
            @endforelse

        </div>

        @if($fotos->hasPages())
            <div class="mt-12 flex justify-center">
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 px-4 py-2">
                    {{ $fotos->links() }}
                </div>
            </div>
        @endif

    </div>
</section>

@endsection

@push('scripts')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

<script>
  // Inisialisasi lightbox dengan opsi modern
  Fancybox.bind("[data-fancybox]", {
    Toolbar: {
      display: ["zoom", "slideshow", "fullscreen", "download", "thumbs", "close"],
    },
    Thumbs: {
      autoStart: false,
    },
  });
</script>
@endpush