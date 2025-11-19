@extends('layouts.app')

@section('title', 'Peringatan Dini')

@section('content')

<section class="relative bg-gradient-to-br from-slate-900 via-cyan-900 to-emerald-900 py-20 md:py-28 overflow-hidden">
    <div class="absolute inset-0 flex items-center justify-center opacity-20 pointer-events-none">
        <div class="absolute w-[500px] h-[500px] border border-emerald-500/30 rounded-full animate-ping" style="animation-duration: 3s;"></div>
        <div class="absolute w-[700px] h-[700px] border border-emerald-500/20 rounded-full animate-ping" style="animation-duration: 3s; animation-delay: 1s;"></div>
    </div>
    
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('aset/slider-3.jpg') }}" alt="EWS Background" class="w-full h-full object-cover opacity-10 mix-blend-overlay">
    </div>

    <div class="container mx-auto px-4 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 mb-6 bg-cyan-500/10 backdrop-blur-md border border-cyan-400/30 px-4 py-2 rounded-full">
            <span class="relative flex h-3 w-3">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-3 w-3 bg-cyan-500"></span>
            </span>
            <span class="text-cyan-300 text-sm font-bold tracking-wide uppercase">Sistem Pemantauan 24 Jam</span>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Peringatan Dini Bencana</h1>
        <p class="text-gray-300 text-lg max-w-2xl mx-auto leading-relaxed">
            Informasi aktual mengenai potensi ancaman bencana di wilayah Kabupaten Lampung Barat untuk kesiapsiagaan masyarakat.
        </p>
    </div>
</section>

<section class="py-12 md:py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        
        <div class="mb-12">
            <div class="bg-white rounded-3xl shadow-xl border-l-8 border-amber-500 overflow-hidden relative">
                <div class="absolute top-0 right-0 p-6 opacity-10">
                    <i class="fas fa-exclamation-triangle text-9xl text-amber-500"></i>
                </div>
                
                <div class="p-8 md:p-10 relative z-10">
                    <div class="flex flex-col md:flex-row gap-8 items-start">
                        <div class="flex-shrink-0">
                            <div class="w-20 h-20 bg-amber-100 rounded-2xl flex items-center justify-center animate-pulse">
                                <svg class="w-10 h-10 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                </svg>
                            </div>
                        </div>
                        
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-3 mb-2">
                                <span class="px-3 py-1 rounded-full bg-amber-100 text-amber-700 text-xs font-bold uppercase tracking-wider">Status: Waspada</span>
                                <span class="text-sm text-gray-500"><i class="far fa-clock mr-1"></i> Diperbarui: {{ date('d M Y, H:i') }} WIB</span>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-900 mb-4">Peringatan Cuaca Ekstrem</h2>
                            <p class="text-gray-700 text-lg leading-relaxed mb-6">
                                Terdeteksi potensi hujan dengan intensitas sedang hingga lebat yang dapat disertai kilat/petir dan angin kencang.
                            </p>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 bg-amber-50 rounded-xl p-5 border border-amber-100">
                                <div>
                                    <span class="block text-xs font-semibold text-amber-600 uppercase mb-1">Wilayah Terdampak</span>
                                    <p class="font-medium text-gray-800">Kec. Balik Bukit, Kec. Sukau, dan sekitarnya.</p>
                                </div>
                                <div>
                                    <span class="block text-xs font-semibold text-amber-600 uppercase mb-1">Waktu Berlaku</span>
                                    <p class="font-medium text-gray-800">30 Juli 2025 - 01 Agustus 2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 pt-6 border-t border-gray-100 flex flex-wrap gap-4">
                        <a href="#" class="inline-flex items-center gap-2 px-6 py-3 bg-amber-500 hover:bg-amber-600 text-white font-bold rounded-xl transition-all shadow-lg shadow-amber-500/30">
                            <i class="fas fa-book-open"></i> Lihat Panduan Keselamatan
                        </a>
                        <a href="https://wa.me/6281234567890" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 bg-white border border-gray-200 text-gray-700 font-bold rounded-xl hover:bg-gray-50 transition-all">
                            <i class="fas fa-phone"></i> Lapor Kejadian
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100 opacity-70 hover:opacity-100 transition-opacity">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-3 h-3 rounded-full bg-green-500 shadow-[0_0_10px_rgba(34,197,94,0.5)]"></div>
                    <h3 class="font-bold text-gray-900">Level 1: Normal</h3>
                </div>
                <p class="text-sm text-gray-600">Tidak ada ancaman bencana yang signifikan. Aktivitas masyarakat dapat berjalan seperti biasa.</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-lg border border-amber-200 ring-2 ring-amber-100">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-3 h-3 rounded-full bg-amber-500 shadow-[0_0_10px_rgba(245,158,11,0.5)] animate-pulse"></div>
                    <h3 class="font-bold text-gray-900">Level 2: Waspada</h3>
                </div>
                <p class="text-sm text-gray-600">Terdeteksi peningkatan aktivitas alam. Masyarakat diminta meningkatkan kehati-hatian dan memantau informasi.</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100 opacity-70 hover:opacity-100 transition-opacity">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-3 h-3 rounded-full bg-red-600 shadow-[0_0_10px_rgba(220,38,38,0.5)]"></div>
                    <h3 class="font-bold text-gray-900">Level 3: Awas</h3>
                </div>
                <p class="text-sm text-gray-600">Ancaman bencana nyata/sedang terjadi. Segera lakukan evakuasi dan ikuti arahan petugas.</p>
            </div>

        </div>

    </div>
</section>

@endsection