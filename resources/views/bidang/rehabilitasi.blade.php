@extends('layouts.app')

@section('title', 'Rehabilitasi & Rekonstruksi')

@section('content')

<section class="relative bg-gradient-to-br from-orange-900 via-amber-800 to-yellow-900 py-20 md:py-32 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('aset/slider-2.jpg') }}" alt="Rehabilitation & Reconstruction" class="w-full h-full object-cover opacity-20">
        <div class="absolute inset-0 bg-gradient-to-br from-orange-900/90 via-amber-800/85 to-yellow-900/80"></div>
    </div>
    
    <div class="absolute top-0 right-0 w-72 h-72 bg-yellow-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-orange-500/10 rounded-full blur-3xl"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 mb-4 bg-amber-500/20 text-amber-300 px-4 py-2 rounded-full backdrop-blur-sm border border-amber-400/30">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
                <span class="text-sm font-semibold">Pasca Bencana</span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 leading-tight">
                Bidang Rehabilitasi & Rekonstruksi
            </h1>
            <p class="text-amber-100 text-lg md:text-xl">
                Memulihkan kehidupan dan membangun kembali infrastruktur dengan prinsip yang lebih baik dan lebih aman.
            </p>
        </div>
    </div>
</section>

<section class="py-12 md:py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <article class="lg:col-span-2 space-y-8">
                
                <div class="bg-white rounded-2xl shadow-lg p-8 md:p-10 border-l-4 border-amber-500">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl flex items-center justify-center shadow-amber-200 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Build Back Better</h2>
                        </div>
                    </div>
                    
                    <div class="prose prose-lg max-w-none">
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Fase pasca-bencana adalah tahap krusial untuk memulihkan kehidupan masyarakat dan membangun kembali lingkungan yang terdampak. Bidang Rehabilitasi dan Rekonstruksi (RR) bertugas untuk merencanakan dan melaksanakan program pemulihan secara terukur.
                        </p>
                        <p class="text-gray-700 leading-relaxed">
                            Kami menerapkan prinsip <span class="font-bold text-amber-600">"Build Back Better and Safer"</span>, memastikan bahwa setiap infrastruktur yang dibangun kembali memiliki ketahanan yang lebih tinggi terhadap potensi bencana di masa depan.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <div class="group bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">
                        <div class="h-2 bg-amber-400"></div>
                        <div class="p-6 md:p-8">
                            <div class="w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-amber-500 transition-colors duration-300">
                                <svg class="w-6 h-6 text-amber-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Rehabilitasi</h3>
                            <p class="text-gray-600 leading-relaxed text-sm">
                                Upaya pemulihan yang berfokus pada perbaikan layanan publik, pengembalian kondisi sosial-ekonomi masyarakat, pemulihan psikologis (trauma healing), dan perbaikan sarana dasar.
                            </p>
                        </div>
                    </div>

                    <div class="group bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">
                        <div class="h-2 bg-orange-500"></div>
                        <div class="p-6 md:p-8">
                            <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-orange-600 transition-colors duration-300">
                                <svg class="w-6 h-6 text-orange-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Rekonstruksi</h3>
                            <p class="text-gray-600 leading-relaxed text-sm">
                                Pembangunan kembali semua prasarana dan sarana secara permanen, baik fisik maupun non-fisik, dengan standar bangunan tahan gempa dan perencanaan tata ruang yang lebih aman.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="bg-gradient-to-r from-amber-50 to-orange-50 rounded-xl p-6 border border-amber-100 flex items-start gap-4">
                    <svg class="w-8 h-8 text-amber-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-1">Komitmen Berkelanjutan</h4>
                        <p class="text-gray-700 text-sm">
                            Kami memastikan proses transisi dari tanggap darurat ke pemulihan berjalan lancar tanpa meninggalkan kelompok rentan.
                        </p>
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