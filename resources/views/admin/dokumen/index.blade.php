@extends('layouts.admin')

@section('title', 'Manajemen Dokumen')

@section('content')

{{-- 1. HEADER & TOOLS --}}
<div class="flex flex-col md:flex-row justify-between items-center gap-4 mb-8">
    
    {{-- Kiri: Judul --}}
    <div>
        <h2 class="text-2xl font-bold text-gray-800">Arsip Dokumen</h2>
        <p class="text-sm text-gray-500">Kelola file publik, regulasi, dan laporan kinerja.</p>
    </div>

    {{-- Kanan: Tombol Tambah & Search --}}
    <div class="flex items-center gap-3">
        <div class="relative hidden md:block">
            <input type="text" placeholder="Cari dokumen..." class="pl-9 pr-4 py-2.5 rounded-xl bg-white border border-gray-200 text-sm focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/10 outline-none w-64 transition-all shadow-sm">
            <i class="fas fa-search absolute left-3 top-3 text-gray-400 text-xs"></i>
        </div>

        <a href="{{ route('admin.dokumen.create') }}" class="inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold rounded-xl shadow-lg shadow-blue-500/30 transition-all transform hover:scale-105">
            <i class="fas fa-cloud-upload-alt"></i>
            <span>Upload Baru</span>
        </a>
    </div>
</div>

{{-- 2. NOTIFIKASI --}}
@if(session('success'))
    <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-100 text-emerald-700 flex items-center gap-3 shadow-sm animate-fade-in-down">
        <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center flex-shrink-0">
            <i class="fas fa-check"></i>
        </div>
        <p class="font-medium">{{ session('success') }}</p>
    </div>
@endif

{{-- 3. TABEL DATA --}}
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            
            {{-- Table Head --}}
            <thead>
                <tr class="bg-gray-50/50 border-b border-gray-100 text-xs uppercase tracking-wider text-gray-500 font-semibold">
                    <th class="px-6 py-4">Nama File</th>
                    <th class="px-6 py-4">Kategori</th>
                    <th class="px-6 py-4">Tanggal Upload</th>
                    <th class="px-6 py-4 text-center">Aksi</th>
                </tr>
            </thead>

            {{-- Table Body --}}
            <tbody class="divide-y divide-gray-50">
                @forelse ($dokumens as $dokumen)
                    <tr class="group hover:bg-gray-50 transition-colors duration-200">
                        
                        {{-- Kolom Nama Dokumen --}}
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                    <i class="fas fa-file-lines text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-800 group-hover:text-blue-600 transition-colors">
                                        {{ $dokumen->nama_dokumen }}
                                    </p>
                                    <p class="text-xs text-gray-400 truncate max-w-[200px]" title="{{ basename($dokumen->file_path) }}">
                                        <i class="fas fa-paperclip mr-1"></i> {{ basename($dokumen->file_path) }}
                                    </p>
                                </div>
                            </div>
                        </td>

                        {{-- Kolom Kategori --}}
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-lg text-xs font-medium bg-indigo-50 text-indigo-700 border border-indigo-100">
                                {{ $dokumen->kategori }}
                            </span>
                        </td>

                        {{-- Kolom Tanggal --}}
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="far fa-clock text-gray-400"></i>
                                {{ $dokumen->created_at->format('d M Y') }}
                            </div>
                        </td>

                        {{-- Kolom Aksi --}}
                        <td class="px-6 py-4 text-center">
                            <div class="flex items-center justify-center gap-2">
                                
                                {{-- Download --}}
                                <a href="{{ route('admin.dokumen.download', $dokumen) }}" 
                                   class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 hover:bg-emerald-500 hover:text-white flex items-center justify-center transition-all shadow-sm" 
                                   title="Download File">
                                    <i class="fas fa-download text-xs"></i>
                                </a>

                                {{-- Edit --}}
                                <a href="{{ route('admin.dokumen.edit', $dokumen) }}" 
                                   class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600 hover:bg-amber-500 hover:text-white flex items-center justify-center transition-all shadow-sm" 
                                   title="Edit Info">
                                    <i class="fas fa-pencil-alt text-xs"></i>
                                </a>

                                {{-- Hapus --}}
                                <form action="{{ route('admin.dokumen.destroy', $dokumen->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="w-8 h-8 rounded-lg bg-red-50 text-red-600 hover:bg-red-500 hover:text-white flex items-center justify-center transition-all shadow-sm"
                                            onclick="return confirm('Yakin ingin menghapus dokumen ini?\n\n{{ $dokumen->nama_dokumen }}')"
                                            title="Hapus Permanen">
                                        <i class="fas fa-trash-alt text-xs"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    {{-- Empty State --}}
                    <tr>
                        <td colspan="4" class="px-6 py-12 text-center">
                            <div class="flex flex-col items-center justify-center">
                                <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mb-4">
                                    <i class="far fa-folder-open text-2xl text-gray-300"></i>
                                </div>
                                <h3 class="text-lg font-bold text-gray-800">Arsip Kosong</h3>
                                <p class="text-gray-500 text-sm mt-1 mb-4">Belum ada dokumen yang diupload.</p>
                                <a href="{{ route('admin.dokumen.create') }}" class="text-sm font-medium text-blue-600 hover:text-blue-700 hover:underline">
                                    + Upload Dokumen Baru
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="px-6 py-4 border-t border-gray-100 bg-gray-50 flex justify-end">
        {{ $dokumens->links() }}
    </div>
</div>

@endsection