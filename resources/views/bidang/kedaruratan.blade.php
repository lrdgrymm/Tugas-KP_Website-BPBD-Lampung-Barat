@extends('layouts.app')

@section('title', 'Kedaruratan & Logistik')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-red-900 via-red-800 to-orange-900 py-20 md:py-32 overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('aset/slider-1.jpg') }}" alt="Emergency Response" class="w-full h-full object-cover opacity-20">
        <div class="absolute inset-0 bg-gradient-to-br from-red-900/90 via-red-800/85 to-orange-900/80"></div>
    </div>
    
    <!-- Decorative Elements -->
    <div class="absolute top-0 right-0 w-72 h-72 bg-orange-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-red-500/10 rounded-full blur-3xl"></div>
    
    <!-- Content -->
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 mb-4 bg-red-500/20 text-red-300 px-4 py-2 rounded-full backdrop-blur-sm border border-red-400/30">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
                <span class="text-sm font-semibold">Siaga 24/7</span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 leading-tight">
                Bidang Kedaruratan & Logistik
            </h1>
            <p class="text-red-100 text-lg md:text-xl">
                Garda terdepan dalam respon cepat dan tanggap darurat bencana
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
                
                <!-- Introduction Card -->
                <div class="bg-white rounded-2xl shadow-lg p-8 md:p-10 border-l-4 border-red-600">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-red-500 to-orange-600 rounded-xl flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Ujung Tombak Respon Bencana</h2>
                        </div>
                    </div>
                    
                    <div class="prose prose-lg max-w-none">
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Bidang Kedaruratan dan Logistik adalah garda terdepan BPBD pada saat fase tanggap darurat berlangsung. Tugas kami adalah memastikan respons yang cepat, tepat, dan terkoordinasi untuk menyelamatkan jiwa, meringankan penderitaan korban, serta memenuhi kebutuhan dasar para penyintas bencana.
                        </p>
                        <p class="text-gray-700 leading-relaxed">
                            Kecepatan dan akurasi menjadi prinsip utama kerja kami, didukung oleh manajemen logistik yang andal dan personel Tim Reaksi Cepat (TRC) yang selalu siaga 24/7.
                        </p>
                    </div>
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-4 mt-8 pt-8 border-t border-gray-200">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-red-600 mb-1">24/7</div>
                            <div class="text-sm text-gray-600">Siaga Penuh</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-red-600 mb-1">TRC</div>
                            <div class="text-sm text-gray-600">Tim Reaksi Cepat</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-red-600 mb-1">100%</div>
                            <div class="text-sm text-gray-600">Responsif</div>
                        </div>
                    </div>
                </div>

                <!-- Scope of Work -->
                <div class="bg-white rounded-2xl shadow-lg p-8 md:p-10">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 flex items-center gap-3">
                        <div class="w-1 h-8 bg-gradient-to-b from-red-500 to-orange-600 rounded-full"></div>
                        Lingkup Tugas
                    </h2>
                    
                    <div class="space-y-6">
                        
                        <!-- Task Card 1 -->
                        <div class="group relative bg-gradient-to-br from-red-50 to-orange-50 rounded-xl p-6 border border-red-100 hover:border-red-300 transition-all duration-300 hover:shadow-md">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-lg flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-red-600 transition-colors duration-300">
                                        Kaji Cepat dan Penyelamatan
                                    </h3>
                                    <p class="text-gray-700 leading-relaxed">
                                        Melakukan pengkajian secara cepat dan tepat terhadap lokasi, kerusakan, kerugian, dan sumber daya. Serta melaksanakan operasi pencarian, pertolongan, dan evakuasi korban bencana.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Task Card 2 -->
                        <div class="group relative bg-gradient-to-br from-orange-50 to-yellow-50 rounded-xl p-6 border border-orange-100 hover:border-orange-300 transition-all duration-300 hover:shadow-md">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-orange-500 to-orange-600 rounded-lg flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-orange-600 transition-colors duration-300">
                                        Manajemen Logistik dan Peralatan
                                    </h3>
                                    <p class="text-gray-700 leading-relaxed">
                                        Mengelola penerimaan, penyimpanan, dan pendistribusian bantuan logistik serta peralatan penanggulangan bencana secara transparan dan akuntabel untuk memastikan bantuan sampai kepada yang membutuhkan.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Task Card 3 -->
                        <div class="group relative bg-gradient-to-br from-yellow-50 to-red-50 rounded-xl p-6 border border-yellow-100 hover:border-yellow-300 transition-all duration-300 hover:shadow-md">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-lg flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-yellow-600 transition-colors duration-300">
                                        Aktivasi Pos Komando (Posko)
                                    </h3>
                                    <p class="text-gray-700 leading-relaxed">
                                        Mendirikan dan mengoperasikan Pos Komando Lapangan sebagai pusat kendali operasi tanggap darurat untuk mengoordinasikan seluruh sumber daya yang terlibat.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Emergency Contact Card -->
                <div class="bg-gradient-to-br from-red-600 to-orange-600 rounded-2xl shadow-2xl p-8 md:p-10 text-white">
                    <div class="flex items-center gap-3 mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <h3 class="text-2xl font-bold">Kontak Darurat</h3>
                    </div>
                    <p class="text-red-100 mb-6">
                        Hubungi kami segera jika terjadi bencana atau situasi darurat
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="tel:112" class="flex items-center justify-center gap-2 bg-white text-red-600 px-6 py-3 rounded-lg font-bold hover:bg-red-50 transition-colors duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            112 - Hotline Bencana
                        </a>
                        <a href="https://wa.me/6281234567890" target="_blank" class="flex items-center justify-center gap-2 bg-white/20 backdrop-blur-sm text-white px-6 py-3 rounded-lg font-bold hover:bg-white/30 transition-colors duration-300 border border-white/30">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            WhatsApp Posko
                        </a>
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