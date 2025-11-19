@extends('layouts.admin')

@section('title', 'Manajemen Berita')

@section('content')

{{-- 1. HEADER & TOOLS --}}
<div class="flex flex-col md:flex-row justify-between items-center gap-4 mb-8">
    
    {{-- Kiri: Judul & Search --}}
    <div class="w-full md:w-auto flex-1">
        <div class="flex flex-col md:flex-row gap-4">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Daftar Berita</h2>
                <p class="text-sm text-gray-500">Kelola semua publikasi berita dan artikel.</p>
            </div>
            
            <form action="{{ route('admin.berita.index') }}" method="GET" class="md:ml-8 flex-1 max-w-md relative">
                <input type="text" name="search" placeholder="Cari judul berita..." 
                    class="w-full pl-10 pr-4 py-2.5 rounded-xl bg-white border border-gray-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/10 outline-none text-sm transition-all shadow-sm"
                    value="{{ request('search') }}">
                <i class="fas fa-search absolute left-3.5 top-3 text-gray-400"></i>
            </form>
        </div>
    </div>

    {{-- Kanan: Tombol Tambah --}}
    <a href="{{ route('admin.berita.create') }}" class="inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-white font-bold rounded-xl shadow-lg shadow-emerald-500/30 transition-all transform hover:scale-105">
        <i class="fas fa-plus"></i>
        <span>Tambah Berita</span>
    </a>
</div>

{{-- 2. NOTIFIKASI (ALERTS) --}}
@if(session('success'))
    <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-100 text-emerald-700 flex items-center gap-3 shadow-sm animate-fade-in-down">
        <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center flex-shrink-0">
            <i class="fas fa-check"></i>
        </div>
        <p class="font-medium">{{ session('success') }}</p>
    </div>
@endif

@if(session('error'))
    <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-100 text-red-700 flex items-center gap-3 shadow-sm animate-fade-in-down">
        <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
            <i class="fas fa-times"></i>
        </div>
        <p class="font-medium">{{ session('error') }}</p>
    </div>
@endif

{{-- 3. TABEL DATA --}}
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            
            {{-- Table Head --}}
            <thead>
                <tr class="bg-gray-50/50 border-b border-gray-100 text-xs uppercase tracking-wider text-gray-500 font-semibold">
                    <th class="px-6 py-4 w-24 text-center">Gambar</th>
                    <th class="px-6 py-4">Judul & Info</th>
                    <th class="px-6 py-4 w-48">Tanggal</th>
                    <th class="px-6 py-4 w-32 text-center">Aksi</th>
                </tr>
            </thead>

            {{-- Table Body --}}
            <tbody class="divide-y divide-gray-50">
                @forelse ($semua_berita as $berita)
                    <tr class="group hover:bg-gray-50 transition-colors duration-200">
                        
                        {{-- Kolom Gambar --}}
                        <td class="px-6 py-4">
                            <div class="w-16 h-12 rounded-lg overflow-hidden bg-gray-100 border border-gray-200 shadow-sm relative">
                                <img src="{{ asset('storage/berita/' . $berita->gambar) }}" 
                                     alt="Thumbnail" 
                                     class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            </div>
                        </td>

                        {{-- Kolom Judul --}}
                        <td class="px-6 py-4">
                            <div class="flex flex-col">
                                <span class="text-sm font-bold text-gray-800 group-hover:text-emerald-600 transition-colors line-clamp-1" title="{{ $berita->judul }}">
                                    {{ $berita->judul }}
                                </span>
                                <div class="flex items-center gap-2 mt-1">
                                    <span class="text-xs text-gray-400">
                                        <i class="fas fa-user mr-1"></i> {{ $berita->penulis ?? 'Admin' }}
                                    </span>
                                    @if($berita->external_link)
                                        <span class="px-1.5 py-0.5 rounded text-[10px] bg-blue-50 text-blue-600 border border-blue-100">
                                            Eksternal
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </td>

                        {{-- Kolom Tanggal --}}
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="far fa-calendar-alt text-gray-400"></i>
                                {{ \Carbon\Carbon::parse($berita->tanggal_publikasi)->format('d M Y') }}
                            </div>
                        </td>

                        {{-- Kolom Aksi --}}
                        <td class="px-6 py-4 text-center">
                            <div class="flex items-center justify-center gap-2">
                                {{-- Edit --}}
                                <a href="{{ route('admin.berita.edit', $berita->id) }}" 
                                   class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600 hover:bg-amber-500 hover:text-white flex items-center justify-center transition-all shadow-sm" 
                                   title="Edit">
                                    <i class="fas fa-pencil-alt text-xs"></i>
                                </a>

                                {{-- Hapus --}}
                                <form action="{{ route('admin.berita.destroy', $berita->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="w-8 h-8 rounded-lg bg-red-50 text-red-600 hover:bg-red-500 hover:text-white flex items-center justify-center transition-all shadow-sm"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?\n\nJudul: {{ $berita->judul }}')"
                                            title="Hapus">
                                        <i class="fas fa-trash-alt text-xs"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    {{-- Empty State (Jika data kosong) --}}
                    <tr>
                        <td colspan="4" class="px-6 py-12 text-center">
                            <div class="flex flex-col items-center justify-center">
                                <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mb-4">
                                    <i class="far fa-newspaper text-2xl text-gray-300"></i>
                                </div>
                                <h3 class="text-lg font-bold text-gray-800">Belum ada berita</h3>
                                <p class="text-gray-500 text-sm mt-1 mb-4">Mulai tambahkan informasi terbaru untuk publik.</p>
                                <a href="{{ route('admin.berita.create') }}" class="text-sm font-medium text-emerald-600 hover:text-emerald-700 hover:underline">
                                    + Buat Berita Pertama
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination (Jika ada) --}}
    @if(method_exists($semua_berita, 'links'))
        <div class="px-6 py-4 border-t border-gray-100 bg-gray-50 flex justify-end">
            {{ $semua_berita->links() }}
        </div>
    @endif
</div>

@endsection