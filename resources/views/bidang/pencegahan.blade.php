@extends('layouts.app')

@section('title', 'Pencegahan & Kesiapsiagaan')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-green-900 via-emerald-800 to-teal-900 py-20 md:py-32 overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('aset/slider-3.jpg') }}" alt="Prevention & Preparedness" class="w-full h-full object-cover opacity-20">
        <div class="absolute inset-0 bg-gradient-to-br from-green-900/90 via-emerald-800/85 to-teal-900/80"></div>
    </div>
    
    <!-- Decorative Elements -->
    <div class="absolute top-0 right-0 w-72 h-72 bg-teal-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-green-500/10 rounded-full blur-3xl"></div>
    
    <!-- Content -->
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 mb-4 bg-green-500/20 text-green-300 px-4 py-2 rounded-full backdrop-blur-sm border border-green-400/30">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
                <span class="text-sm font-semibold">Mitigasi & Preparedness</span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 leading-tight">
                Bidang Pencegahan & Kesiapsiagaan
            </h1>
            <p class="text-green-100 text-lg md:text-xl">
                Membangun budaya sadar bencana untuk masyarakat yang tangguh dan siap siaga
            </p>
        </div>
    </div>
</section>

<!-- Main Content Section -->
<section class="py-12 md:py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Main Content -->
            <article class="lg:col-span-2 space-y-8">
                
                <!-- Focus Card -->
                <div class="bg-white rounded-2xl shadow-lg p-8 md:p-10 border-l-4 border-green-600">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Fokus Utama Bidang</h2>
                        </div>
                    </div>
                    
                    <div class="prose prose-lg max-w-none">
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Bidang Pencegahan dan Kesiapsiagaan memiliki peran strategis sebagai garda terdepan dalam siklus penanggulangan bencana. Fokus utama kami adalah membangun budaya sadar bencana dan mengurangi tingkat risiko di masyarakat <span class="font-bold text-green-600">sebelum</span> bencana terjadi. Kami percaya bahwa investasi terbaik dalam penanggulangan bencana adalah pada tahap pencegahan.
                        </p>
                        <p class="text-gray-700 leading-relaxed">
                            Melalui serangkaian program yang terencana dan berkelanjutan, kami berupaya menciptakan komunitas yang tangguh, mandiri, dan siap menghadapi segala potensi ancaman bencana di Kabupaten Lampung Barat.
                        </p>
                    </div>
                    
                    <!-- Key Principles -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-8 pt-8 border-t border-gray-200">
                        <div class="text-center">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                            </div>
                            <div class="text-sm font-semibold text-gray-900">Edukasi</div>
                            <div class="text-xs text-gray-600">Berkelanjutan</div>
                        </div>
                        <div class="text-center">
                            <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <div class="text-sm font-semibold text-gray-900">Pemberdayaan</div>
                            <div class="text-xs text-gray-600">Masyarakat</div>
                        </div>
                        <div class="text-center">
                            <div class="w-12 h-12 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <div class="text-sm font-semibold text-gray-900">Mitigasi</div>
                            <div class="text-xs text-gray-600">Risiko Bencana</div>
                        </div>
                    </div>
                </div>

                <!-- Featured Programs -->
                <div class="bg-white rounded-2xl shadow-lg p-8 md:p-10">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 flex items-center gap-3">
                        <div class="w-1 h-8 bg-gradient-to-b from-green-500 to-emerald-600 rounded-full"></div>
                        Program Unggulan
                    </h2>
                    
                    <div class="space-y-6">
                        
                        <!-- Program Card 1 -->
                        <div class="group relative bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-100 hover:border-green-300 transition-all duration-300 hover:shadow-lg">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-green-600 transition-colors duration-300">
                                        Sosialisasi dan Edukasi Masyarakat
                                    </h3>
                                    <p class="text-gray-700 leading-relaxed mb-4">
                                        Menyebarluaskan informasi mengenai potensi risiko, cara-cara mitigasi, dan langkah penyelamatan diri kepada sekolah, komunitas, aparatur desa, dan masyarakat umum melalui berbagai media.
                                    </p>
                                    
                                    <!-- Target Groups -->
                                    <div class="flex flex-wrap gap-2">
                                        <span class="inline-flex items-center gap-1 bg-white px-3 py-1 rounded-full text-xs font-medium text-green-700 border border-green-200">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                            </svg>
                                            Sekolah
                                        </span>
                                        <span class="inline-flex items-center gap-1 bg-white px-3 py-1 rounded-full text-xs font-medium text-green-700 border border-green-200">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                            </svg>
                                            Komunitas
                                        </span>
                                        <span class="inline-flex items-center gap-1 bg-white px-3 py-1 rounded-full text-xs font-medium text-green-700 border border-green-200">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                            </svg>
                                            Aparatur Desa
                                        </span>
                                        <span class="inline-flex items-center gap-1 bg-white px-3 py-1 rounded-full text-xs font-medium text-green-700 border border-green-200">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            Masyarakat Umum
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Program Card 2 -->
                        <div class="group relative bg-gradient-to-br from-emerald-50 to-teal-50 rounded-xl p-6 border border-emerald-100 hover:border-emerald-300 transition-all duration-300 hover:shadow-lg">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-lg flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-emerald-600 transition-colors duration-300">
                                        Pembentukan Desa Tangguh Bencana (DESTANA)
                                    </h3>
                                    <p class="text-gray-700 leading-relaxed mb-4">
                                        Sebuah program untuk membangun desa yang memiliki kemampuan mandiri untuk beradaptasi dan menghadapi potensi ancaman bencana, serta memulihkan diri dengan segera dari dampak bencana.
                                    </p>
                                    
                                    <!-- DESTANA Features -->
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                        <div class="flex items-start gap-2">
                                            <svg class="w-5 h-5 text-emerald-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            <span class="text-sm text-gray-700">Mandiri & Adaptif</span>
                                        </div>
                                        <div class="flex items-start gap-2">
                                            <svg class="w-5 h-5 text-emerald-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            <span class="text-sm text-gray-700">Sistem Peringatan Dini</span>
                                        </div>
                                        <div class="flex items-start gap-2">
                                            <svg class="w-5 h-5 text-emerald-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            <span class="text-sm text-gray-700">Kapasitas Pemulihan</span>
                                        </div>
                                        <div class="flex items-start gap-2">
                                            <svg class="w-5 h-5 text-emerald-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            <span class="text-sm text-gray-700">Kolaborasi Komunitas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Info Card -->
                <div class="bg-gradient-to-br from-green-600 to-emerald-600 rounded-2xl shadow-2xl p-8 md:p-10 text-white">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="flex-shrink-0 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold mb-2">Investasi Terbaik</h3>
                            <p class="text-green-100 text-lg leading-relaxed">
                                "Pencegahan lebih baik daripada penanggulangan. Setiap rupiah yang diinvestasikan dalam pencegahan dapat menghemat hingga tujuh rupiah dalam biaya pemulihan pasca bencana."
                            </p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6 pt-6 border-t border-white/20">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm text-green-100">Rasio ROI</div>
                                <div class="text-xl font-bold">1 : 7</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm text-green-100">Pengurangan Risiko</div>
                                <div class="text-xl font-bold">Maksimal</div>
                            </div>
                        </div>
                    </div>
                </div>

            </article>
            
            <!-- Sidebar -->
            <aside class="lg:col-span-1">
                <x-news-sidebar />
            </aside>

        </div>
    </div>
</section>

@endsection