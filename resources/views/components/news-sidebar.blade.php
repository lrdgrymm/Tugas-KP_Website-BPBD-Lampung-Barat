<aside class="space-y-8">
    
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden sticky top-24">
        
        <div class="px-6 py-4 border-b border-gray-100 bg-gray-50/50 flex items-center justify-between">
            <h3 class="font-bold text-gray-900 text-lg">
                <i class="far fa-newspaper text-emerald-500 mr-2"></i> Berita Lainnya
            </h3>
            <span class="relative flex h-3 w-3">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
            </span>
        </div>

        <div class="divide-y divide-gray-100">
            @forelse($beritaTerbaru as $berita)
                <a href="{{ $berita->external_link ?: route('berita.show', $berita) }}" 
                   target="{{ $berita->external_link ? '_blank' : '_self' }}" 
                   class="block p-4 hover:bg-emerald-50/40 transition-all duration-300 group">
                    
                    <div class="flex gap-4 items-start">
                        
                        <div class="flex-shrink-0 w-20 h-20 rounded-xl overflow-hidden relative shadow-sm">
                            @if($berita->gambar)
                                <img src="{{ asset('storage/berita/' . $berita->gambar) }}" 
                                     alt="{{ $berita->judul }}" 
                                     class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            @else
                                <div class="w-full h-full bg-gray-100 flex items-center justify-center text-gray-400">
                                    <i class="fas fa-image"></i>
                                </div>
                            @endif
                            
                            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-300"></div>
                        </div>

                        <div class="flex-1 min-w-0"> <h4 class="text-sm font-bold text-gray-800 group-hover:text-emerald-700 leading-snug mb-2 line-clamp-2 transition-colors">
                                {{ $berita->judul }}
                            </h4>
                            
                            <div class="flex items-center gap-2">
                                <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-medium bg-gray-100 text-gray-600">
                                    <i class="far fa-calendar-alt mr-1"></i>
                                    {{ \Carbon\Carbon::parse($berita->tanggal_publikasi)->format('d M Y') }}
                                </span>
                                
                                {{-- Jika ada external link, kasih icon panah kecil --}}
                                @if($berita->external_link)
                                    <span class="text-gray-400">
                                        <i class="fas fa-external-link-alt text-[10px]"></i>
                                    </span>
                                @endif
                            </div>
                        </div>

                    </div>
                </a>
            @empty
                <div class="p-8 text-center">
                    <div class="w-12 h-12 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="far fa-folder-open text-gray-400 text-xl"></i>
                    </div>
                    <p class="text-sm text-gray-500">Belum ada berita lain.</p>
                </div>
            @endforelse
        </div>

        <div class="p-4 border-t border-gray-100 bg-gray-50/30 text-center">
            <a href="{{ url('/berita') }}" class="text-xs font-bold text-emerald-600 hover:text-emerald-700 uppercase tracking-wider transition-colors">
                Lihat Indeks Berita <i class="fas fa-arrow-right ml-1"></i>
            </a>
        </div>

    </div>

</aside>