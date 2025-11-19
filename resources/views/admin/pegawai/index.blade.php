@extends('layouts.admin')

@section('title', 'Daftar Pegawai')

@section('content')

{{-- 1. HEADER & TOOLS --}}
<div class="flex flex-col md:flex-row justify-between items-center gap-4 mb-8">
    
    {{-- Kiri: Judul --}}
    <div>
        <h2 class="text-2xl font-bold text-gray-800">Direktori Pegawai</h2>
        <p class="text-sm text-gray-500">Kelola data ASN dan Tenaga Kontrak.</p>
    </div>

    {{-- Kanan: Tombol Tambah & Search --}}
    <div class="flex items-center gap-3">
        <div class="relative hidden md:block">
            <input type="text" placeholder="Cari nama atau NIP..." class="pl-9 pr-4 py-2.5 rounded-xl bg-white border border-gray-200 text-sm focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/10 outline-none w-64 transition-all shadow-sm">
            <i class="fas fa-search absolute left-3 top-3 text-gray-400 text-xs"></i>
        </div>

        <a href="{{ route('admin.pegawai.create') }}" class="inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-indigo-600 to-blue-600 hover:from-indigo-700 hover:to-blue-700 text-white font-bold rounded-xl shadow-lg shadow-indigo-500/30 transition-all transform hover:scale-105">
            <i class="fas fa-user-plus"></i>
            <span>Tambah Pegawai</span>
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

{{-- 3. TABEL PEGAWAI --}}
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            
            {{-- Table Head --}}
            <thead>
                <tr class="bg-gray-50/50 border-b border-gray-100 text-xs uppercase tracking-wider text-gray-500 font-semibold">
                    <th class="px-6 py-4">Profil Pegawai</th>
                    <th class="px-6 py-4">Jabatan</th>
                    <th class="px-6 py-4 text-center">Aksi</th>
                </tr>
            </thead>

            {{-- Table Body --}}
            <tbody class="divide-y divide-gray-50">
                @forelse($pegawais as $pegawai)
                    <tr class="group hover:bg-gray-50 transition-colors duration-200">
                        
                        {{-- Kolom Profil (Gabungan Foto, Nama, NIP) --}}
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                {{-- Avatar --}}
                                <div class="flex-shrink-0 w-12 h-12 rounded-full border-2 border-white shadow-sm overflow-hidden bg-gray-100 group-hover:scale-105 transition-transform duration-300">
                                    @if($pegawai->foto)
                                        <img src="{{ asset('storage/' . $pegawai->foto) }}" alt="{{ $pegawai->nama }}" class="w-full h-full object-cover">
                                    @else
                                        {{-- Placeholder Avatar dari UI Avatars --}}
                                        <img src="https://ui-avatars.com/api/?name={{ urlencode($pegawai->nama) }}&background=e0e7ff&color=4338ca" class="w-full h-full object-cover">
                                    @endif
                                </div>

                                {{-- Nama & NIP --}}
                                <div>
                                    <p class="text-sm font-bold text-gray-900 group-hover:text-indigo-600 transition-colors">
                                        {{ $pegawai->nama }}
                                    </p>
                                    <p class="text-xs text-gray-500 font-mono tracking-wide mt-0.5">
                                        <i class="fas fa-id-badge mr-1 text-gray-400"></i> {{ $pegawai->nip }}
                                    </p>
                                </div>
                            </div>
                        </td>

                        {{-- Kolom Jabatan --}}
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-50 text-blue-700 border border-blue-100">
                                {{ $pegawai->jabatan }}
                            </span>
                        </td>

                        {{-- Kolom Aksi --}}
                        <td class="px-6 py-4 text-center">
                            <div class="flex items-center justify-center gap-2">
                                {{-- Edit --}}
                                <a href="{{ route('admin.pegawai.edit', $pegawai) }}" 
                                   class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600 hover:bg-amber-500 hover:text-white flex items-center justify-center transition-all shadow-sm" 
                                   title="Edit Data">
                                    <i class="fas fa-pencil-alt text-xs"></i>
                                </a>

                                {{-- Hapus --}}
                                <form action="{{ route('admin.pegawai.destroy', $pegawai->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="w-8 h-8 rounded-lg bg-red-50 text-red-600 hover:bg-red-500 hover:text-white flex items-center justify-center transition-all shadow-sm"
                                            onclick="return confirm('Yakin ingin menghapus pegawai ini?\n\nNama: {{ $pegawai->nama }}')"
                                            title="Hapus Pegawai">
                                        <i class="fas fa-trash-alt text-xs"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    {{-- Empty State --}}
                    <tr>
                        <td colspan="3" class="px-6 py-12 text-center">
                            <div class="flex flex-col items-center justify-center">
                                <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mb-4">
                                    <i class="fas fa-user-tie text-2xl text-gray-300"></i>
                                </div>
                                <h3 class="text-lg font-bold text-gray-800">Data Pegawai Kosong</h3>
                                <p class="text-gray-500 text-sm mt-1 mb-4">Belum ada data ASN atau tenaga kontrak.</p>
                                <a href="{{ route('admin.pegawai.create') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-700 hover:underline">
                                    + Tambah Pegawai Baru
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination (Optional) --}}
    {{-- <div class="px-6 py-4 border-t border-gray-100 bg-gray-50 flex justify-end">
        {{ $pegawais->links() }}
    </div> --}}
</div>

@endsection