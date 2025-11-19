@extends('layouts.app')

@section('title', 'Sejarah & Visi Misi')

@section('content')

<section class="relative bg-gradient-to-br from-emerald-900 via-teal-900 to-green-900 py-20 md:py-28 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('aset/bg-sejarah.jpg') }}" alt="Sejarah BPBD" class="w-full h-full object-cover opacity-20 mix-blend-overlay">
        <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/90 via-emerald-900/40 to-transparent"></div>
    </div>

    <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-10 w-80 h-80 bg-teal-500/10 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-4 relative z-10 text-center">
        <span class="inline-block py-1 px-3 rounded-full bg-emerald-500/20 border border-emerald-400/30 text-emerald-300 text-xs font-bold tracking-wider uppercase mb-4">
            Tentang Kami
        </span>
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Sejarah & Visi Misi</h1>
        <p class="text-emerald-100 text-lg max-w-2xl mx-auto leading-relaxed">
            Landasan pengabdian dan arah langkah BPBD Kabupaten Lampung Barat dalam melayani masyarakat tangguh bencana.
        </p>
    </div>
</section>

<section class="py-16 md:py-24 bg-gray-50 relative">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-16">
            
            <article class="lg:col-span-2 space-y-12">
                
                <div>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="h-10 w-1 bg-emerald-500 rounded-full"></div>
                        <h2 class="text-3xl font-bold text-gray-900">Sejarah Pembentukan</h2>
                    </div>
                    
                    <div class="prose prose-lg text-gray-600 leading-relaxed text-justify">
                        <p class="first-letter:text-5xl first-letter:font-bold first-letter:text-emerald-600 first-letter:mr-3 first-letter:float-left">
                            Badan Penanggulangan Bencana Daerah (BPBD) Kabupaten Lampung Barat dibentuk sebagai wujud komitmen pemerintah daerah dalam menyelenggarakan penanggulangan bencana secara serius, terencana, dan terpadu.
                        </p>
                        <p>
                            Seiring dengan dinamika potensi bencana di wilayah Lampung Barat, lembaga ini terus bertransformasi untuk meningkatkan kapasitas pelayanan, mulai dari fase pencegahan, tanggap darurat, hingga rehabilitasi dan rekonstruksi pasca bencana.
                        </p>
                    </div>
                </div>

                <hr class="border-gray-200">

                <div class="relative">
                    <div class="absolute -top-6 -left-4 text-8xl text-emerald-100 font-serif opacity-50">“</div>
                    
                    <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-3xl p-8 md:p-10 border border-emerald-100 text-center relative z-10 shadow-sm">
                        <h3 class="text-emerald-600 font-bold uppercase tracking-widest text-sm mb-4">Visi Kami</h3>
                        <blockquote class="text-2xl md:text-3xl font-serif font-medium text-gray-800 leading-snug">
                            "Terwujudnya Kabupaten Lampung Barat yang Tangguh dan Berketahanan dalam Menghadapi Bencana"
                        </blockquote>
                    </div>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Misi Utama</h3>
                    
                    <div class="space-y-4">
                        <div class="group flex items-start gap-4 bg-white p-5 rounded-2xl border border-gray-100 hover:border-emerald-200 hover:shadow-lg transition-all duration-300">
                            <div class="flex-shrink-0 w-10 h-10 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-lg group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                                1
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Penguatan Kelembagaan</h4>
                                <p class="text-gray-600">Meningkatkan kapasitas kelembagaan dan tata kelola penanggulangan bencana yang profesional.</p>
                            </div>
                        </div>

                        <div class="group flex items-start gap-4 bg-white p-5 rounded-2xl border border-gray-100 hover:border-emerald-200 hover:shadow-lg transition-all duration-300">
                            <div class="flex-shrink-0 w-10 h-10 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-lg group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                                2
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Edukasi & Mitigasi</h4>
                                <p class="text-gray-600">Menyelenggarakan program edukasi, sosialisasi, dan mitigasi bencana secara berkelanjutan kepada masyarakat.</p>
                            </div>
                        </div>

                        <div class="group flex items-start gap-4 bg-white p-5 rounded-2xl border border-gray-100 hover:border-emerald-200 hover:shadow-lg transition-all duration-300">
                            <div class="flex-shrink-0 w-10 h-10 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-lg group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                                3
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Sistem Peringatan Dini</h4>
                                <p class="text-gray-600">Memperkuat sistem peringatan dini (Early Warning System) dan respon cepat dalam menghadapi potensi bencana.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </article>

            <aside class="lg:col-span-1">
                <x-news-sidebar />
            </aside>

        </div>
    </div>
</section>

@endsection