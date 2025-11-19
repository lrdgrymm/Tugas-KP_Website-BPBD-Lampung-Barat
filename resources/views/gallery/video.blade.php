@extends('layouts.app')

@section('title', 'Galeri Video')

@section('content')

<section class="relative bg-gradient-to-br from-slate-900 via-teal-900 to-emerald-900 py-20 md:py-28 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('aset/slider-2.jpg') }}" alt="Video Background" class="w-full h-full object-cover opacity-20 mix-blend-overlay">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/95 via-slate-900/50 to-transparent"></div>
    </div>

    <div class="absolute top-10 right-10 w-32 h-32 bg-red-500/10 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-10 left-10 w-64 h-64 bg-emerald-500/10 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-4 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 mb-4 bg-white/10 backdrop-blur-md border border-white/20 px-4 py-2 rounded-full">
            <div class="w-2 h-2 bg-red-500 rounded-full animate-ping"></div>
            <span class="text-emerald-100 text-sm font-semibold tracking-wide">Arsip Audio Visual</span>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Galeri Video</h1>
        <p class="text-emerald-100 text-lg max-w-2xl mx-auto leading-relaxed">
            Kumpulan liputan kegiatan, edukasi bencana, dan dokumentasi lapangan BPBD Lampung Barat dalam format video.
        </p>
    </div>
</section>

<section class="py-12 md:py-20 bg-slate-50 min-h-screen">
    <div class="container mx-auto px-4">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            @foreach($videos as $video)
                <div class="group bg-white rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 overflow-hidden transition-all duration-300 flex flex-col">
                    
                    <div class="relative w-full aspect-video bg-black group-hover:ring-4 ring-emerald-500/20 transition-all">
                        @if($video->sumber_tipe === 'upload')
                            <video class="w-full h-full object-cover" controls preload="metadata">
                                <source src="{{ asset('storage/' . $video->path) }}" type="video/mp4">
                                Browser Anda tidak mendukung tag video.
                            </video>
                        @else
                            <iframe class="w-full h-full" 
                                    src="{{ $video->path }}" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                    allowfullscreen>
                            </iframe>
                        @endif
                    </div>

                    <div class="p-6 flex-1 flex flex-col">
                        <div class="flex items-start justify-between gap-4 mb-3">
                            <h3 class="font-bold text-lg text-gray-900 leading-tight line-clamp-2 group-hover:text-emerald-700 transition-colors">
                                {{ $video->judul }}
                            </h3>
                            <div class="flex-shrink-0 text-gray-300">
                                @if($video->sumber_tipe === 'upload')
                                    <i class="fas fa-file-video text-lg" title="Uploaded File"></i>
                                @else
                                    <i class="fab fa-youtube text-lg text-red-500" title="External Link"></i>
                                @endif
                            </div>
                        </div>

                        @if(!empty($video->keterangan))
                            <p class="text-gray-500 text-sm line-clamp-2 mb-4 flex-1">
                                {{ $video->keterangan }}
                            </p>
                        @else
                            <div class="flex-1"></div> @endif

                        <div class="pt-4 border-t border-gray-100 flex items-center text-xs text-gray-400 font-medium">
                            <i class="far fa-clock mr-2"></i> 
                            Dipublikasikan: {{ $video->created_at->format('d M Y') }}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        @if($videos->isEmpty())
            <div class="col-span-full py-16 text-center">
                <div class="inline-block p-6 rounded-full bg-white shadow-sm mb-4">
                    <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800">Belum Ada Video</h3>
                <p class="text-gray-500 mt-2">Arsip video kegiatan belum tersedia saat ini.</p>
            </div>
        @endif

        <div class="mt-12 flex justify-center">
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 px-4 py-2">
                {{ $videos->links() }}
            </div>
        </div>

    </div>
</section>

@endsection