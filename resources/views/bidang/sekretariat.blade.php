@extends('layouts.app')

@section('title', 'Sekretariat')

@section('content')

<section class="relative bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 py-20 md:py-32 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('aset/bg-sejarah.jpg') }}" alt="Sekretariat BPBD" class="w-full h-full object-cover opacity-20 mix-blend-overlay">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900/95 via-blue-900/90 to-indigo-900/80"></div>
    </div>
    
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-indigo-500/10 rounded-full blur-3xl"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 mb-4 bg-blue-500/20 text-blue-300 px-4 py-2 rounded-full backdrop-blur-sm border border-blue-400/30">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
                <span class="text-sm font-semibold">Administrasi & Tata Kelola</span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 leading-tight">
                Sekretariat BPBD
            </h1>
            <p class="text-blue-100 text-lg md:text-xl leading-relaxed">
                Pusat kendali administrasi yang memastikan roda organisasi berjalan efisien, transparan, dan akuntabel untuk mendukung pelayanan kebencanaan.
            </p>
        </div>
    </div>
</section>

<section class="py-12 md:py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <article class="lg:col-span-2 space-y-8">
                
                <div class="bg-white rounded-2xl shadow-lg p-8 md:p-10 border-l-4 border-blue-600 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50 rounded-bl-full -mr-8 -mt-8"></div>
                    
                    <div class="relative z-10">
                        <div class="flex items-start gap-4 mb-6">
                            <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center shadow-blue-200 shadow-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Motor Penggerak Organisasi</h2>
                            </div>
                        </div>
                        
                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                            <p>
                                Sekretariat merupakan unit kerja strategis yang berfungsi sebagai <span class="font-semibold text-blue-600">tulang punggung administrasi</span> dan pendukung utama bagi seluruh bidang teknis di lingkungan BPBD Kabupaten Lampung Barat.
                            </p>
                            <p>
                                Peran utama kami adalah memfasilitasi kelancaran operasional, mulai dari perencanaan strategis, pengelolaan sumber daya manusia, hingga akuntabilitas keuangan dan aset daerah.
                            </p>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-2">
                        <div class="w-1 h-8 bg-blue-600 rounded-full"></div>
                        Lingkup Tugas Utama
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        
                        <div class="group bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg hover:border-blue-200 transition-all duration-300">
                            <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600 mb-4 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                            <h4 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-blue-700">Perencanaan & Evaluasi</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Menyusun rencana strategis (Renstra), rencana kerja tahunan, penganggaran, serta melakukan monitoring dan evaluasi kinerja instansi (LAKIP/SAKIP).
                            </p>
                        </div>

                        <div class="group bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg hover:border-indigo-200 transition-all duration-300">
                            <div class="w-12 h-12 bg-indigo-50 rounded-xl flex items-center justify-center text-indigo-600 mb-4 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <h4 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-indigo-700">Umum & Kepegawaian</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Mengelola tata naskah dinas, kearsipan, layanan umum kantor, serta pengembangan kapasitas dan disiplin aparatur sipil negara.
                            </p>
                        </div>

                        <div class="md:col-span-2 group bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg hover:border-slate-200 transition-all duration-300 flex flex-col md:flex-row gap-4 items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-slate-100 rounded-xl flex items-center justify-center text-slate-600 mb-2 md:mb-0 group-hover:bg-slate-600 group-hover:text-white transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-slate-700">Keuangan & Aset</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Melaksanakan penatausahaan keuangan yang akuntabel (SPP/SPM), pelaporan realisasi anggaran, serta inventarisasi dan pemeliharaan aset milik daerah (Barang Milik Daerah).
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-6 border border-blue-100 flex items-center gap-4">
                    <i class="fas fa-check-circle text-3xl text-blue-500"></i>
                    <div>
                        <h4 class="font-bold text-gray-900">Komitmen Pelayanan</h4>
                        <p class="text-sm text-gray-600">Mewujudkan tata kelola pemerintahan yang baik (Good Governance) dalam penanggulangan bencana.</p>
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