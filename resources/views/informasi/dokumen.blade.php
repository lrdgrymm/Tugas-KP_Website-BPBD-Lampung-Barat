@extends('layouts.app')

@section('title', 'Dokumen Publik')

@section('content')

<section class="relative bg-gradient-to-br from-teal-900 via-emerald-900 to-green-900 py-20 md:py-28 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('aset/bg-sejarah.jpg') }}" alt="Background Dokumen" class="w-full h-full object-cover opacity-20 mix-blend-overlay">
        <div class="absolute inset-0 bg-gradient-to-t from-teal-900/90 via-teal-900/40 to-transparent"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 mb-4 bg-white/10 backdrop-blur-md border border-white/20 px-4 py-2 rounded-full">
            <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
            <span class="text-emerald-100 text-sm font-semibold tracking-wide">Arsip Digital BPBD</span>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Pusat Dokumen & Regulasi</h1>
        <p class="text-emerald-100 text-lg max-w-2xl mx-auto leading-relaxed">
            Transparansi informasi publik. Unduh laporan kinerja, renstra, regulasi kebencanaan, dan materi sosialisasi resmi disini.
        </p>
    </div>
</section>

<section class="py-12 md:py-20 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4">
        
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
            
            <div class="px-6 py-5 border-b border-gray-100 bg-gray-50/50 flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <h2 class="text-xl font-bold text-gray-800">Daftar File</h2>
                    <p class="text-sm text-gray-500">Silakan unduh sesuai kebutuhan Anda.</p>
                </div>
                <div class="relative w-full md:w-64">
                    <input type="text" placeholder="Cari dokumen..." class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none text-sm transition-all" disabled style="cursor: not-allowed; opacity: 0.7;">
                    <div class="absolute left-3 top-2.5 text-gray-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-100 text-xs uppercase tracking-wider text-gray-500 font-semibold">
                            <th class="px-6 py-4">Nama Dokumen</th>
                            <th class="px-6 py-4">Kategori</th>
                            <th class="px-6 py-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse ($dokumens as $dokumen)
                            <tr class="group hover:bg-emerald-50/50 transition-colors duration-200">
                                <td class="px-6 py-4">
                                    <div class="flex items-start gap-3">
                                        <div class="flex-shrink-0 w-10 h-10 rounded-lg bg-emerald-100 text-emerald-600 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                            <i class="fas fa-file-alt text-lg"></i>
                                        </div>
                                        <div>
                                            <div class="font-semibold text-gray-900 group-hover:text-emerald-700 transition-colors">
                                                {{ $dokumen->nama_dokumen }}
                                            </div>
                                            <div class="text-xs text-gray-500 mt-0.5">
                                                Diunggah: {{ $dokumen->created_at ? $dokumen->created_at->format('d M Y') : '-' }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700 border border-blue-100">
                                        {{ $dokumen->kategori }}
                                    </span>
                                </td>

                                <td class="px-6 py-4 text-center">
                                    <a href="{{ asset('storage/dokumen/' . $dokumen->file_path) }}" target="_blank" 
                                       class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-emerald-200 text-emerald-600 text-sm font-medium rounded-lg shadow-sm hover:bg-emerald-600 hover:text-white hover:border-emerald-600 transition-all duration-300 group/btn">
                                        <span>Unduh</span>
                                        <svg class="w-4 h-4 transform group-hover/btn:translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="px-6 py-12 text-center">
                                    <div class="flex flex-col items-center justify-center">
                                        <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mb-4">
                                            <svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                            </svg>
                                        </div>
                                        <h3 class="text-lg font-medium text-gray-900">Belum Ada Dokumen</h3>
                                        <p class="text-gray-500 mt-1">Saat ini belum ada dokumen publik yang tersedia untuk diunduh.</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($dokumens->hasPages())
                <div class="px-6 py-4 border-t border-gray-100 bg-gray-50">
                    {{ $dokumens->links() }}
                </div>
            @endif

        </div>
    </div>
</section>

@endsection