@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')

{{-- 1. Welcome Banner --}}
<div class="relative bg-gradient-to-r from-emerald-800 to-teal-700 rounded-3xl p-8 md:p-10 text-white mb-10 overflow-hidden shadow-xl shadow-emerald-900/20">
    <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -mr-16 -mt-16 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-40 h-40 bg-emerald-400/10 rounded-full blur-2xl -ml-10 -mb-10 pointer-events-none"></div>

    <div class="relative z-10 flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
        <div>
            <h1 class="text-3xl font-bold mb-2">Selamat Datang, {{ Auth::user()->name }}! 👋</h1>
            <p class="text-emerald-100 text-lg opacity-90">
                Sistem Manajemen Konten BPBD Lampung Barat siap digunakan.
            </p>
        </div>
        <div class="hidden md:block">
            <span class="bg-white/20 backdrop-blur-md border border-white/20 px-4 py-2 rounded-xl text-sm font-medium">
                <i class="far fa-calendar-alt mr-2"></i> {{ date('l, d F Y') }}
            </span>
        </div>
    </div>
</div>

{{-- 2. Statistik Grid --}}
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
    
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 group">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-sm font-medium text-gray-500 mb-1">Total Berita</p>
                <h3 class="text-3xl font-bold text-gray-800 group-hover:text-emerald-600 transition-colors">
                    {{ $jumlah_berita ?? 0 }}
                </h3>
            </div>
            <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                <i class="fas fa-newspaper text-xl"></i>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 group">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-sm font-medium text-gray-500 mb-1">Dokumen Publik</p>
                <h3 class="text-3xl font-bold text-gray-800 group-hover:text-blue-600 transition-colors">
                    {{ $jumlah_dokumen ?? 0 }}
                </h3>
            </div>
            <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                <i class="fas fa-file-alt text-xl"></i>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 group">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-sm font-medium text-gray-500 mb-1">Data Pegawai</p>
                <h3 class="text-3xl font-bold text-gray-800 group-hover:text-indigo-600 transition-colors">
                    {{ $jumlah_pegawai ?? 0 }}
                </h3>
            </div>
            <div class="w-12 h-12 bg-indigo-50 rounded-xl flex items-center justify-center text-indigo-600 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                <i class="fas fa-users text-xl"></i>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 group">
        <div class="flex justify-between items-start">
            <div>
                <p class="text-sm font-medium text-gray-500 mb-1">Galeri Foto/Video</p>
                <h3 class="text-3xl font-bold text-gray-800 group-hover:text-orange-600 transition-colors">
                    {{ $jumlah_galeri ?? 0 }}
                </h3>
            </div>
            <div class="w-12 h-12 bg-orange-50 rounded-xl flex items-center justify-center text-orange-600 group-hover:bg-orange-600 group-hover:text-white transition-colors">
                <i class="fas fa-images text-xl"></i>
            </div>
        </div>
    </div>
</div>

{{-- 3. Layout Bawah: Shortcut & Preview --}}
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    
    {{-- Kolom Kiri: Aksi Cepat --}}
    <div class="lg:col-span-1">
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 h-full">
            <h3 class="font-bold text-gray-800 mb-6 flex items-center gap-2">
                <i class="fas fa-bolt text-amber-500"></i> Aksi Cepat
            </h3>
            
            <div class="space-y-4">
                <a href="{{ route('admin.berita.create') }}" class="flex items-center gap-4 p-4 rounded-xl bg-gray-50 hover:bg-emerald-50 border border-transparent hover:border-emerald-200 transition-all group">
                    <div class="w-10 h-10 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center group-hover:bg-emerald-500 group-hover:text-white transition-colors">
                        <i class="fas fa-pen"></i>
                    </div>
                    <div>
                        <h5 class="font-bold text-gray-800 text-sm">Tulis Berita Baru</h5>
                        <p class="text-xs text-gray-500">Posting kegiatan terbaru</p>
                    </div>
                    <i class="fas fa-chevron-right ml-auto text-gray-300 group-hover:text-emerald-500"></i>
                </a>

                <a href="{{ route('admin.dokumen.create') }}" class="flex items-center gap-4 p-4 rounded-xl bg-gray-50 hover:bg-blue-50 border border-transparent hover:border-blue-200 transition-all group">
                    <div class="w-10 h-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center group-hover:bg-blue-500 group-hover:text-white transition-colors">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <div>
                        <h5 class="font-bold text-gray-800 text-sm">Upload Dokumen</h5>
                        <p class="text-xs text-gray-500">Arsip regulasi & laporan</p>
                    </div>
                    <i class="fas fa-chevron-right ml-auto text-gray-300 group-hover:text-blue-500"></i>
                </a>

                <a href="{{ route('admin.pegawai.index') }}" class="flex items-center gap-4 p-4 rounded-xl bg-gray-50 hover:bg-indigo-50 border border-transparent hover:border-indigo-200 transition-all group">
                    <div class="w-10 h-10 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center group-hover:bg-indigo-500 group-hover:text-white transition-colors">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <div>
                        <h5 class="font-bold text-gray-800 text-sm">Kelola Pegawai</h5>
                        <p class="text-xs text-gray-500">Update data SDM</p>
                    </div>
                    <i class="fas fa-chevron-right ml-auto text-gray-300 group-hover:text-indigo-500"></i>
                </a>
            </div>
        </div>
    </div>

    {{-- Kolom Kanan: Preview (Misal: Berita Terakhir) --}}
    <div class="lg:col-span-2">
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 h-full">
            <div class="flex items-center justify-between mb-6">
                <h3 class="font-bold text-gray-800">Terbaru Diposting</h3>
                <a href="{{ route('admin.berita.index') }}" class="text-sm text-emerald-600 hover:text-emerald-700 font-medium">Lihat Semua</a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="text-xs text-gray-400 uppercase tracking-wider border-b border-gray-100">
                            <th class="pb-3 font-semibold">Judul Berita</th>
                            <th class="pb-3 font-semibold">Tanggal</th>
                            <th class="pb-3 font-semibold text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        {{-- MOCKUP DATA (Nanti ganti loop dari controller) --}}
                        {{-- @foreach($recent_news as $news) --}}
                        <tr class="group hover:bg-gray-50/50 transition-colors">
                            <td class="py-3 pr-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-gray-200 overflow-hidden">
                                        <img src="{{ asset('aset/slider-1.jpg') }}" class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-gray-800 line-clamp-1">BPBD Gelar Simulasi Gempa Bumi</p>
                                        <p class="text-xs text-gray-500">Penulis: Admin</p>
                                    </div>
                                </div>
                            </td>
                            <td class="py-3 text-sm text-gray-600 whitespace-nowrap">
                                20 Nov 2025
                            </td>
                            <td class="py-3 text-center">
                                <span class="px-2 py-1 rounded-full bg-green-100 text-green-700 text-[10px] font-bold uppercase">
                                    Published
                                </span>
                            </td>
                        </tr>
                        <tr class="group hover:bg-gray-50/50 transition-colors">
                            <td class="py-3 pr-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-gray-200 overflow-hidden">
                                        <img src="{{ asset('aset/slider-2.jpg') }}" class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-gray-800 line-clamp-1">Peringatan Dini Cuaca Ekstrem</p>
                                        <p class="text-xs text-gray-500">Penulis: Admin</p>
                                    </div>
                                </div>
                            </td>
                            <td class="py-3 text-sm text-gray-600 whitespace-nowrap">
                                19 Nov 2025
                            </td>
                            <td class="py-3 text-center">
                                <span class="px-2 py-1 rounded-full bg-green-100 text-green-700 text-[10px] font-bold uppercase">
                                    Published
                                </span>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection