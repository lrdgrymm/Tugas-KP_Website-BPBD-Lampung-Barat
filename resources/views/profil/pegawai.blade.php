@extends('layouts.app')

@section('title', 'Data Pegawai')

@section('content')

<section class="relative bg-gradient-to-br from-teal-900 via-emerald-900 to-green-900 py-20 md:py-28 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('aset/slider-3.jpg') }}" alt="Background Pegawai" class="w-full h-full object-cover opacity-20 mix-blend-overlay">
        <div class="absolute inset-0 bg-gradient-to-t from-teal-900/90 via-teal-900/40 to-transparent"></div>
    </div>

    <div class="absolute top-10 left-10 w-32 h-32 bg-white/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-10 right-10 w-64 h-64 bg-emerald-500/20 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-4 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 mb-4 bg-white/10 backdrop-blur-md border border-white/20 px-4 py-2 rounded-full">
            <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
            </svg>
            <span class="text-emerald-100 text-sm font-semibold tracking-wide">SDM Berkualitas</span>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Data Pegawai BPBD</h1>
        <p class="text-emerald-100 text-lg max-w-2xl mx-auto leading-relaxed">
            Daftar Aparatur Sipil Negara (ASN) dan Tenaga Kontrak yang berdedikasi dalam pelayanan penanggulangan bencana di Kabupaten Lampung Barat.
        </p>
    </div>
</section>

<section class="py-12 md:py-20 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            
            <div class="lg:col-span-2 space-y-8">
                
                <div class="bg-white p-4 rounded-2xl shadow-sm border border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <h2 class="text-xl font-bold text-gray-800 flex items-center gap-2">
                        <span class="w-1 h-6 bg-emerald-500 rounded-full"></span>
                        Direktori Pegawai
                    </h2>
                    <div class="relative w-full sm:w-64">
                        <input type="text" placeholder="Cari nama atau NIP..." class="w-full pl-10 pr-4 py-2 rounded-xl bg-gray-50 border border-gray-200 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none text-sm transition-all">
                        <div class="absolute left-3 top-2.5 text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @forelse ($pegawais as $pegawai)
                        <div class="group bg-white rounded-2xl p-6 shadow-md hover:shadow-xl border border-gray-100 hover:border-emerald-200 transition-all duration-300 relative overflow-hidden">
                            
                            <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-emerald-400 to-teal-500"></div>
                            
                            <div class="flex flex-col items-center text-center">
                                <div class="relative mb-4">
                                    <div class="w-24 h-24 rounded-full p-1 bg-gradient-to-br from-gray-100 to-gray-200 group-hover:from-emerald-400 group-hover:to-teal-500 transition-all duration-300">
                                        @if($pegawai->foto)
                                            <img src="{{ asset('storage/' . $pegawai->foto) }}" alt="{{ $pegawai->nama }}" class="w-full h-full rounded-full object-cover border-2 border-white">
                                        @else
                                            <img src="https://ui-avatars.com/api/?name={{ urlencode($pegawai->nama) }}&background=d1fae5&color=059669" alt="No Photo" class="w-full h-full rounded-full object-cover border-2 border-white">
                                        @endif
                                    </div>
                                    <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 bg-gray-800 text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow-md">
                                        No. {{ $loop->iteration }}
                                    </div>
                                </div>

                                <h3 class="text-lg font-bold text-gray-900 group-hover:text-emerald-700 transition-colors mb-1 line-clamp-1">
                                    {{ $pegawai->nama }}
                                </h3>
                                
                                <div class="mb-3">
                                    <span class="inline-block px-3 py-1 rounded-full bg-emerald-50 text-emerald-700 text-xs font-semibold border border-emerald-100">
                                        {{ $pegawai->jabatan }}
                                    </span>
                                </div>

                                <div class="w-full pt-3 border-t border-gray-100 flex items-center justify-center gap-2 text-gray-500 text-xs font-mono">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0c0 .667.333 1 1 1v1m2-2c0 .667-.333 1-1 1v1"/></svg>
                                    NIP: {{ $pegawai->nip }}
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full flex flex-col items-center justify-center py-12 text-center bg-white rounded-2xl border border-dashed border-gray-300">
                            <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900">Data Kosong</h3>
                            <p class="text-gray-500 mt-1">Belum ada data pegawai yang tersedia.</p>
                        </div>
                    @endforelse
                </div>

                <div class="mt-6">
                    {{-- Jika pakai pagination, aktifkan ini --}}
                    {{-- {{ $pegawais->links() }} --}}
                </div>
            </div>

            <aside class="lg:col-span-1">
                <x-news-sidebar />
            </aside>

        </div>
    </div>
</section>

@endsection