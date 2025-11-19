@extends('layouts.app')

@section('title', 'Struktur Organisasi & Tupoksi')

@section('content')

<section class="relative bg-gradient-to-br from-cyan-900 via-teal-900 to-emerald-900 py-20 md:py-28 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('aset/slider-2.jpg') }}" alt="Background Struktur" class="w-full h-full object-cover opacity-20 mix-blend-overlay">
        <div class="absolute inset-0 bg-gradient-to-t from-cyan-900/90 via-teal-900/40 to-transparent"></div>
    </div>

    <div class="absolute top-1/4 left-10 w-40 h-40 bg-white/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-10 right-10 w-80 h-80 bg-emerald-500/20 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-4 relative z-10 text-center">
        <span class="inline-block py-1 px-3 rounded-full bg-teal-500/20 border border-teal-400/30 text-teal-300 text-xs font-bold tracking-wider uppercase mb-4">
            Profil Instansi
        </span>
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Struktur Organisasi & Tupoksi</h1>
        <p class="text-teal-100 text-lg max-w-2xl mx-auto leading-relaxed">
            Gambaran hierarki kepemimpinan dan pembagian tugas pokok serta fungsi di lingkungan BPBD Kabupaten Lampung Barat.
        </p>
    </div>
</section>

<section class="py-16 md:py-24 bg-gray-50 relative">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <article class="lg:col-span-2 space-y-12">
                
                <div>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="h-10 w-1 bg-emerald-500 rounded-full"></div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Bagan Organisasi</h2>
                    </div>
                    
                    <div class="bg-white p-4 rounded-3xl shadow-lg border border-gray-100 group cursor-zoom-in relative overflow-hidden">
                        <div class="rounded-2xl overflow-hidden border border-gray-100 relative">
                            <img src="{{ asset('aset/struktur-organisasi.png') }}" 
                                 alt="Bagan Struktur Organisasi BPBD" 
                                 class="w-full h-auto transform transition-transform duration-500 group-hover:scale-105">
                            
                            <a href="{{ asset('aset/struktur-organisasi.png') }}" target="_blank" class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <div class="bg-white/20 backdrop-blur-md border border-white/30 text-white px-6 py-2 rounded-full font-semibold flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                                    Lihat Ukuran Penuh
                                </div>
                            </a>
                        </div>
                        <div class="mt-3 text-center">
                            <p class="text-sm text-gray-500">Ketuk gambar untuk memperbesar tampilan struktur.</p>
                        </div>
                    </div>
                </div>

                <hr class="border-gray-200 border-dashed">

                <div>
                    <div class="flex items-center gap-4 mb-8">
                        <div class="h-10 w-1 bg-teal-500 rounded-full"></div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Tugas Pokok & Fungsi</h2>
                    </div>

                    <div class="space-y-6">
                        
                        <div class="bg-gradient-to-r from-emerald-600 to-teal-600 rounded-2xl p-8 text-white shadow-lg shadow-emerald-500/20 relative overflow-hidden">
                            <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-white/10 rounded-full blur-2xl"></div>
                            
                            <div class="relative z-10 flex flex-col md:flex-row gap-6 items-start">
                                <div class="flex-shrink-0 w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center backdrop-blur-sm border border-white/10">
                                    <i class="fas fa-user-tie text-3xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold mb-2">1. Kepala Pelaksana</h3>
                                    <p class="text-emerald-50 leading-relaxed opacity-90">
                                        Memimpin komando strategis dan mengoordinasikan seluruh penyelenggaraan penanggulangan bencana secara terpadu, mulai dari tahap perencanaan, komando saat darurat, hingga pelaporan pertanggungjawaban kepada Kepala Daerah.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            
                            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 hover:border-blue-200 group">
                                <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                                    <i class="fas fa-briefcase text-xl"></i>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-blue-700 transition-colors">2. Sekretariat</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Pusat administrasi yang mengelola perencanaan program, keuangan, serta sumber daya manusia (kepegawaian) untuk menunjang operasional seluruh bidang.
                                </p>
                            </div>

                            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 hover:border-green-200 group">
                                <div class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center text-green-600 mb-4 group-hover:bg-green-600 group-hover:text-white transition-colors">
                                    <i class="fas fa-shield-alt text-xl"></i>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-green-700 transition-colors">3. Pencegahan & Kesiapsiagaan</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Fokus pada pra-bencana: mitigasi risiko, penyusunan peta rawan bencana, serta edukasi dan pelatihan masyarakat agar siap siaga.
                                </p>
                            </div>

                            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 hover:border-red-200 group">
                                <div class="w-12 h-12 bg-red-50 rounded-xl flex items-center justify-center text-red-600 mb-4 group-hover:bg-red-600 group-hover:text-white transition-colors">
                                    <i class="fas fa-ambulance text-xl"></i>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-red-700 transition-colors">4. Kedaruratan & Logistik</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Garda terdepan saat bencana: kaji cepat kerusakan, operasi SAR, evakuasi korban, serta manajemen distribusi logistik bantuan.
                                </p>
                            </div>

                            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 hover:border-amber-200 group">
                                <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center text-amber-600 mb-4 group-hover:bg-amber-600 group-hover:text-white transition-colors">
                                    <i class="fas fa-hammer text-xl"></i>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-amber-700 transition-colors">5. Rehabilitasi & Rekonstruksi</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Pemulihan pasca-bencana: perbaikan infrastruktur fisik dan sosial, serta pembangunan kembali dengan prinsip "Build Back Better".
                                </p>
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