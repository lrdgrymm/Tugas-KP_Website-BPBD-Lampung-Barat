@extends('layouts.app')

@section('title', $berita->judul)

@section('content')

<section class="relative bg-gradient-to-br from-emerald-900 via-teal-900 to-gray-900 py-20 md:py-24 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('storage/berita/' . $berita->gambar) }}" alt="Background" class="w-full h-full object-cover opacity-10 blur-sm mix-blend-overlay">
        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10 mb-6">
        <a href="{{ route('berita.index') }}" class="inline-flex items-center gap-2 text-emerald-300 hover:text-white transition-colors text-sm font-medium">
            <i class="fas fa-arrow-left"></i> Kembali ke Indeks Berita
        </a>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl">
            <span class="inline-block py-1 px-3 rounded-lg bg-emerald-500/20 border border-emerald-400/30 text-emerald-300 text-xs font-bold tracking-wider uppercase mb-4">
                Berita Terkini
            </span>
            
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                {{ $berita->judul }}
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-gray-300 text-sm md:text-base border-t border-white/10 pt-6">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-emerald-600 flex items-center justify-center text-white shadow-lg">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wide">Penulis</p>
                        <p class="font-semibold text-white">{{ $berita->penulis ?? 'Admin BPBD' }}</p>
                    </div>
                </div>
                <div class="w-px h-10 bg-white/10 hidden sm:block"></div>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-teal-600 flex items-center justify-center text-white shadow-lg">
                        <i class="far fa-calendar-alt"></i>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wide">Tanggal</p>
                        <p class="font-semibold text-white">{{ \Carbon\Carbon::parse($berita->tanggal_publikasi)->format('d F Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-12 md:py-20 bg-gray-50 relative min-h-screen">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            
            <article class="lg:col-span-2">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    
                    <div class="relative w-full aspect-video overflow-hidden bg-gray-200">
                        <img src="{{ asset('storage/berita/' . $berita->gambar) }}" 
                             alt="{{ $berita->judul }}" 
                             class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                    </div>

                    <div class="p-8 md:p-10">
                        <div class="prose prose-lg prose-emerald max-w-none text-gray-700 leading-relaxed">
                            {!! nl2br(e($berita->isi_berita)) !!}
                        </div>

                        <div class="mt-10 pt-8 border-t border-gray-100">
                            <h4 class="text-sm font-bold text-gray-900 mb-4 flex items-center gap-2">
                                <i class="fas fa-share-alt text-emerald-500"></i> Bagikan Informasi Ini:
                            </h4>
                            <div class="flex gap-2">
                                <a href="#" class="px-4 py-2 rounded-lg bg-blue-600 text-white text-sm font-medium hover:bg-blue-700 transition-colors">
                                    <i class="fab fa-facebook-f mr-2"></i> Facebook
                                </a>
                                <a href="#" class="px-4 py-2 rounded-lg bg-green-500 text-white text-sm font-medium hover:bg-green-600 transition-colors">
                                    <i class="fab fa-whatsapp mr-2"></i> WhatsApp
                                </a>
                                <button class="px-4 py-2 rounded-lg bg-gray-100 text-gray-600 text-sm font-medium hover:bg-gray-200 transition-colors" onclick="navigator.clipboard.writeText(window.location.href); alert('Link disalin!')">
                                    <i class="fas fa-link mr-2"></i> Salin Link
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <aside class="lg:col-span-1">
                <div class="sticky top-24 space-y-8">
                    
                    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-100 bg-gray-50/50 flex items-center justify-between">
                            <h3 class="font-bold text-gray-900">Berita Lainnya</h3>
                            <span class="flex h-2 w-2 relative">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                            </span>
                        </div>
                        
                        <div class="divide-y divide-gray-100">
                            @forelse($beritaLainnya as $item)
                                <a href="{{ $item->external_link ?: route('berita.show', $item) }}" 
                                   target="{{ $item->external_link ? '_blank' : '_self' }}" 
                                   class="block p-4 hover:bg-emerald-50/30 transition-all duration-300 group">
                                    <div class="flex gap-4 items-start">
                                        <div class="flex-shrink-0 w-20 h-20 rounded-xl overflow-hidden bg-gray-200">
                                            <img src="{{ asset('storage/berita/' . $item->gambar) }}" 
                                                 alt="{{ $item->judul }}" 
                                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <h4 class="text-sm font-bold text-gray-800 group-hover:text-emerald-700 line-clamp-2 mb-1 leading-snug">
                                                {{ $item->judul }}
                                            </h4>
                                            <span class="text-xs text-gray-400">
                                                {{ \Carbon\Carbon::parse($item->tanggal_publikasi)->format('d M Y') }}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            @empty
                                <div class="p-6 text-center text-gray-500">
                                    <p class="text-sm">Tidak ada berita lain.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>

                    <div class="rounded-2xl p-6 bg-gradient-to-br from-teal-500 to-emerald-600 text-white shadow-lg relative overflow-hidden">
                        <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
                        <h3 class="font-bold text-lg mb-2 relative z-10">Siap Siaga Bencana</h3>
                        <p class="text-sm text-white/90 mb-4 relative z-10">Pantau terus informasi terkini dari BPBD Lampung Barat.</p>
                        <a href="{{ url('/') }}" class="inline-block w-full py-2.5 bg-white text-emerald-600 font-bold text-center rounded-lg hover:bg-emerald-50 transition-colors shadow-sm relative z-10">
                            Kembali ke Beranda
                        </a>
                    </div>

                </div>
            </aside>

        </div>
    </div>
</section>

@endsection