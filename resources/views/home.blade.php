@extends('layouts.app')
@section('title', 'Beranda')
@section('content')

<section id="hero-slider" class="relative h-[600px] md:h-[700px] overflow-hidden bg-slate-900">
    
    <div class="relative h-full w-full" id="slider-wrapper">
        
        <div class="slide absolute inset-0 opacity-100 transition-opacity duration-1000 ease-in-out z-10" data-index="0">
            <div class="absolute inset-0 bg-cover bg-center transform scale-100 animate-kenburns" 
                 style="background-image: url('{{ asset('aset/slider-1.jpg') }}');">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/40 to-transparent"></div>
            
            <div class="absolute inset-0 flex items-center justify-center text-center p-4">
                <div class="max-w-4xl animate-fade-up">
                    <span class="inline-block py-1 px-4 rounded-full bg-emerald-500/20 border border-emerald-400/30 text-emerald-300 text-xs md:text-sm font-bold tracking-widest uppercase mb-4 backdrop-blur-md">
                        BPBD Lampung Barat
                    </span>
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight drop-shadow-lg">
                        Tanggap, Tangkas, <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-teal-300">Tangguh</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-200 max-w-2xl mx-auto leading-relaxed drop-shadow-md">
                        Hadir terdepan membangun resiliensi dan ketangguhan masyarakat dalam menghadapi setiap tantangan bencana.
                    </p>
                    <div class="mt-8">
                        <a href="#layanan" class="inline-flex items-center gap-2 px-8 py-3 rounded-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold transition-all transform hover:scale-105 shadow-lg shadow-emerald-500/30">
                            Pelajari Lebih Lanjut <i class="fas fa-arrow-down animate-bounce"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out z-0" data-index="1">
            <div class="absolute inset-0 bg-cover bg-center transform scale-100 animate-kenburns" 
                 style="background-image: url('{{ asset('aset/slider-2.jpg') }}'); animation-delay: -5s;">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/40 to-transparent"></div>
            
            <div class="absolute inset-0 flex items-center justify-center text-center p-4">
                <div class="max-w-4xl">
                    <span class="inline-block py-1 px-4 rounded-full bg-blue-500/20 border border-blue-400/30 text-blue-300 text-xs md:text-sm font-bold tracking-widest uppercase mb-4 backdrop-blur-md">
                        Pencegahan Dini
                    </span>
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight drop-shadow-lg">
                        Edukasi & <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-300">Mitigasi</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-200 max-w-2xl mx-auto leading-relaxed drop-shadow-md">
                        Mengenali ancaman adalah langkah pertama. Kami berkomitmen meningkatkan pemahaman masyarakat akan risiko bencana.
                    </p>
                </div>
            </div>
        </div>

        <div class="slide absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out z-0" data-index="2">
            <div class="absolute inset-0 bg-cover bg-center transform scale-100 animate-kenburns" 
                 style="background-image: url('{{ asset('aset/slider-3.jpg') }}'); animation-delay: -10s;">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/40 to-transparent"></div>
            
            <div class="absolute inset-0 flex items-center justify-center text-center p-4">
                <div class="max-w-4xl">
                    <span class="inline-block py-1 px-4 rounded-full bg-amber-500/20 border border-amber-400/30 text-amber-300 text-xs md:text-sm font-bold tracking-widest uppercase mb-4 backdrop-blur-md">
                        Kolaborasi
                    </span>
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight drop-shadow-lg">
                        Kesiapsiagaan <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 to-orange-300">Komunitas</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-200 max-w-2xl mx-auto leading-relaxed drop-shadow-md">
                        Gotong royong adalah kunci. Mewujudkan desa tangguh bencana melalui partisipasi aktif seluruh elemen masyarakat.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <button id="prev-slide" class="absolute left-4 md:left-8 top-1/2 -translate-y-1/2 z-20 w-12 h-12 rounded-full bg-white/10 hover:bg-emerald-600/80 backdrop-blur-md border border-white/20 text-white flex items-center justify-center transition-all duration-300 group hover:scale-110">
        <i class="fas fa-chevron-left group-hover:-translate-x-1 transition-transform"></i>
    </button>
    <button id="next-slide" class="absolute right-4 md:right-8 top-1/2 -translate-y-1/2 z-20 w-12 h-12 rounded-full bg-white/10 hover:bg-emerald-600/80 backdrop-blur-md border border-white/20 text-white flex items-center justify-center transition-all duration-300 group hover:scale-110">
        <i class="fas fa-chevron-right group-hover:translate-x-1 transition-transform"></i>
    </button>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20 flex gap-3">
        <button class="indicator w-3 h-3 rounded-full bg-white transition-all duration-300 hover:bg-emerald-400 scale-125 shadow-lg" data-slide="0"></button>
        <button class="indicator w-3 h-3 rounded-full bg-white/40 transition-all duration-300 hover:bg-emerald-400 hover:scale-110" data-slide="1"></button>
        <button class="indicator w-3 h-3 rounded-full bg-white/40 transition-all duration-300 hover:bg-emerald-400 hover:scale-110" data-slide="2"></button>
    </div>

</section>

<style>
    @keyframes kenburns {
        0% { transform: scale(1); }
        100% { transform: scale(1.15); }
    }
    .animate-kenburns {
        animation: kenburns 20s ease-out infinite alternate;
    }
    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-up {
        animation: fadeUp 1s ease-out forwards;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slides = document.querySelectorAll('.slide');
        const indicators = document.querySelectorAll('.indicator');
        const prevBtn = document.getElementById('prev-slide');
        const nextBtn = document.getElementById('next-slide');
        
        let currentSlide = 0;
        const totalSlides = slides.length;
        let slideInterval;

        // Fungsi Ganti Slide
        function goToSlide(index) {
            // Reset semua slide & indicator
            slides.forEach(s => {
                s.classList.remove('opacity-100', 'z-10');
                s.classList.add('opacity-0', 'z-0');
            });
            indicators.forEach(i => {
                i.classList.remove('bg-white', 'scale-125');
                i.classList.add('bg-white/40');
            });

            // Aktifkan slide target
            slides[index].classList.remove('opacity-0', 'z-0');
            slides[index].classList.add('opacity-100', 'z-10');
            
            // Aktifkan indicator target
            indicators[index].classList.remove('bg-white/40');
            indicators[index].classList.add('bg-white', 'scale-125');

            // Re-trigger animasi teks (opsional, biar efek fade-up jalan lagi)
            const content = slides[index].querySelector('.animate-fade-up');
            if(content) {
                content.style.animation = 'none';
                content.offsetHeight; /* trigger reflow */
                content.style.animation = null; 
            }

            currentSlide = index;
        }

        function next() {
            let newIndex = (currentSlide + 1) % totalSlides;
            goToSlide(newIndex);
        }

        function prev() {
            let newIndex = (currentSlide - 1 + totalSlides) % totalSlides;
            goToSlide(newIndex);
        }

        // Event Listeners
        nextBtn.addEventListener('click', () => {
            next();
            resetTimer();
        });

        prevBtn.addEventListener('click', () => {
            prev();
            resetTimer();
        });

        indicators.forEach((indicator, idx) => {
            indicator.addEventListener('click', () => {
                goToSlide(idx);
                resetTimer();
            });
        });

        // Auto Play (5 Detik)
        function startTimer() {
            slideInterval = setInterval(next, 5000);
        }

        function resetTimer() {
            clearInterval(slideInterval);
            startTimer();
        }

        // Mulai
        startTimer();
    });
</script>

<section class="relative py-16 md:py-24 bg-slate-50 overflow-hidden">
    
    {{-- Background Decoration --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full overflow-hidden pointer-events-none">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-emerald-200/20 rounded-full blur-3xl mix-blend-multiply"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-200/20 rounded-full blur-3xl mix-blend-multiply"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        
        {{-- Section Title --}}
        <div class="text-center mb-12 max-w-2xl mx-auto">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-red-100 text-red-600 text-xs font-bold uppercase tracking-wider mb-4">
                <span class="relative flex h-2 w-2">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
                </span>
                Real-time Monitoring
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Pantauan Kebencanaan</h2>
            <p class="text-gray-600">Integrasi data langsung dari BMKG untuk pemantauan kondisi terkini di wilayah Lampung dan sekitarnya.</p>
        </div>

        {{-- Grid Cards --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            {{-- CARD 1: Gempa Bumi (Theme: Red/Rose) --}}
            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-300 group flex flex-col h-[500px]">
                {{-- Card Header --}}
                <div class="px-6 py-4 bg-gradient-to-r from-rose-50 to-white border-b border-rose-100 flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-rose-100 flex items-center justify-center text-rose-600 group-hover:bg-rose-600 group-hover:text-white transition-all duration-300">
                            <i class="fas fa-rss text-lg"></i>
                        </div>
                        <h3 class="font-bold text-gray-900">Gempa Bumi Terkini</h3>
                    </div>
                    <span class="text-[10px] font-bold bg-rose-100 text-rose-700 px-2 py-1 rounded uppercase">Live</span>
                </div>
                {{-- Card Body --}}
                <div class="relative flex-1 bg-white p-4 overflow-y-auto">
                    <div id="gempa-widget" class="h-full w-full flex items-center justify-center">
                        {{-- Placeholder Loading Animation --}}
                        <div class="text-center space-y-3">
                            <svg class="animate-spin h-8 w-8 text-rose-500 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            <p class="text-sm text-gray-500 font-medium animate-pulse">Mengambil data BMKG...</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- CARD 2: Cuaca (Theme: Blue/Sky) --}}
            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-300 group flex flex-col h-[500px]">
                <div class="px-6 py-4 bg-gradient-to-r from-blue-50 to-white border-b border-blue-100 flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                            <i class="fas fa-cloud-sun-rain text-lg"></i>
                        </div>
                        <h3 class="font-bold text-gray-900">Prakiraan Cuaca</h3>
                    </div>
                    <span class="text-[10px] font-bold bg-blue-100 text-blue-700 px-2 py-1 rounded uppercase">Visklim</span>
                </div>
                {{-- Wrapper Tableau agar responsif --}}
                <div class="flex-1 relative bg-gray-50 w-full overflow-hidden">
                    <div class="tableau-container w-full h-full absolute inset-0">
                        <tableau-viz id='tableau-viz' src='https://visklim.bmkg.go.id/views/PDIE/PDCurahHujanTinggi' toolbar='bottom' device='desktop' class="w-full h-full"></tableau-viz>
                    </div>
                </div>
            </div>

            {{-- CARD 3: Banjir (Theme: Amber/Orange) --}}
            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-300 group flex flex-col h-[500px]">
                <div class="px-6 py-4 bg-gradient-to-r from-amber-50 to-white border-b border-amber-100 flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center text-amber-600 group-hover:bg-amber-600 group-hover:text-white transition-all duration-300">
                            <i class="fas fa-water text-lg"></i>
                        </div>
                        <h3 class="font-bold text-gray-900">Prediksi Banjir</h3>
                    </div>
                    <span class="text-[10px] font-bold bg-amber-100 text-amber-700 px-2 py-1 rounded uppercase">Dasarian</span>
                </div>
                {{-- Wrapper Iframe agar responsif --}}
                <div class="flex-1 relative bg-gray-50 w-full">
                    <iframe 
                        src="https://visklim.bmkg.go.id/views/DashboardBulanan__Dasarian/PrakiraanDasarian?:embed=y&:showVizHome=no&:host_url=https%3A%2F%2Fvisklim.bmkg.go.id%2F&:embed_code_version=3&:tabs=no&:toolbar=no" 
                        frameborder="0" 
                        class="absolute inset-0 w-full h-full"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-16 md:py-24 bg-slate-50 relative">
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-gray-200 to-transparent"></div>

    <div class="container mx-auto px-4">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-100 text-emerald-700 text-xs font-bold uppercase tracking-wider mb-4">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                Update Informasi
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Berita & Artikel Terkini</h2>
            <p class="text-gray-600 text-lg">
                Pantau perkembangan terbaru seputar kegiatan, penanggulangan bencana, dan informasi publik dari BPBD Lampung Barat.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            
            @forelse($beritaTerkini as $berita)
                <article class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl border border-gray-100 overflow-hidden transition-all duration-300 hover:-translate-y-2 flex flex-col h-full">
                    
                    <a href="{{ $berita->external_link ?: route('berita.show', $berita) }}" 
                       target="{{ $berita->external_link ? '_blank' : '_self' }}"
                       class="block h-full flex flex-col">
                        
                        <div class="relative aspect-[16/10] overflow-hidden bg-gray-200">
                            @if($berita->gambar)
                                <img src="{{ asset('storage/berita/' . $berita->gambar) }}" 
                                     alt="{{ $berita->judul }}" 
                                     class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-gray-400 bg-gray-100">
                                    <i class="fas fa-newspaper text-4xl"></i>
                                </div>
                            @endif
                            
                            <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-3 py-1.5 rounded-lg shadow-sm text-xs font-bold text-gray-800 border border-white/50 flex flex-col items-center text-center min-w-[50px]">
                                <span class="text-emerald-600 text-lg leading-none mb-0.5">{{ \Carbon\Carbon::parse($berita->tanggal_publikasi)->format('d') }}</span>
                                <span class="uppercase tracking-wider text-[10px]">{{ \Carbon\Carbon::parse($berita->tanggal_publikasi)->format('M') }}</span>
                            </div>

                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>

                        <div class="p-6 flex-1 flex flex-col">
                            <div class="flex items-center gap-2 text-xs text-gray-400 mb-3">
                                <i class="fas fa-user-circle"></i>
                                <span>{{ $berita->penulis ?? 'Admin' }}</span>
                            </div>

                            <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-emerald-600 transition-colors leading-snug">
                                {{ $berita->judul }}
                            </h3>

                            <p class="text-gray-600 text-sm leading-relaxed line-clamp-3 mb-6 flex-1">
                                {{ $berita->ringkasan ?? Str::limit(strip_tags($berita->isi_berita), 120) }}
                            </p>

                            <div class="mt-auto pt-4 border-t border-gray-50 flex items-center text-emerald-600 font-bold text-sm group/link">
                                Baca Selengkapnya
                                <svg class="w-4 h-4 ml-2 transform group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </div>
                        </div>
                    </a>
                </article>
            @empty
                <div class="col-span-full py-12 text-center bg-white rounded-2xl border border-dashed border-gray-300">
                    <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4 text-gray-400">
                        <i class="far fa-newspaper text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">Belum Ada Berita</h3>
                    <p class="text-gray-500 mt-1">Informasi terbaru akan segera ditampilkan disini.</p>
                </div>
            @endforelse
            
        </div>

        <div class="text-center">
            <a href="{{ url('/berita') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-white border-2 border-emerald-600 text-emerald-700 font-bold rounded-full hover:bg-emerald-600 hover:text-white transition-all duration-300 shadow-sm hover:shadow-lg hover:-translate-y-1">
                Lihat Semua Arsip
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>

    </div>
</section>
</section>
@endsection