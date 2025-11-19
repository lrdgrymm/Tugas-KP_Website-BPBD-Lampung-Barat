@extends('layouts.admin')

@section('title', 'Tambah Pegawai')

@section('content')

{{-- Header Page --}}
<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
    <div>
        <h2 class="text-2xl font-bold text-gray-800">Tambah Pegawai Baru</h2>
        <p class="text-sm text-gray-500">Input data ASN atau Tenaga Kontrak baru ke dalam sistem.</p>
    </div>
    <a href="{{ route('admin.pegawai.index') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-200 text-gray-700 rounded-xl hover:bg-gray-50 transition-colors text-sm font-medium">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

{{-- Alert Error --}}
@if ($errors->any())
    <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-100 text-red-700 flex items-start gap-3 shadow-sm">
        <div class="flex-shrink-0 mt-0.5">
            <i class="fas fa-exclamation-circle text-red-500"></i>
        </div>
        <div>
            <h3 class="font-bold text-sm mb-1">Gagal Menyimpan</h3>
            <ul class="list-disc list-inside text-sm space-y-1 opacity-90">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

{{-- Form Wrapper --}}
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
        
        <form action="{{ route('admin.pegawai.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            {{-- 1. Foto Profil (Avatar Upload) --}}
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-4">Foto Profil</label>
                <div class="flex items-center gap-6">
                    
                    <div class="relative w-28 h-28 flex-shrink-0">
                        <div class="w-full h-full rounded-full border-4 border-emerald-50 bg-gray-100 overflow-hidden shadow-sm relative group">
                            <div id="avatar-placeholder" class="absolute inset-0 flex items-center justify-center text-gray-400">
                                <i class="fas fa-user text-4xl"></i>
                            </div>
                            <img id="avatar-preview" src="#" class="absolute inset-0 w-full h-full object-cover hidden">
                            
                            <div class="absolute inset-0 bg-black/20 hidden group-hover:flex items-center justify-center text-white transition-all">
                                <i class="fas fa-camera"></i>
                            </div>
                        </div>
                    </div>

                    <div class="flex-1">
                        <input type="file" name="foto" id="foto-input" 
                            class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100 transition-all cursor-pointer"
                            accept="image/*"
                            onchange="previewAvatar(this)">
                        <p class="text-xs text-gray-400 mt-2">Format: JPG, PNG. Maksimal 2MB. Disarankan rasio 1:1 (Kotak).</p>
                    </div>
                </div>
            </div>

            <hr class="border-gray-100">

            {{-- 2. Nama Lengkap --}}
            <div>
                <label for="nama" class="block text-sm font-bold text-gray-700 mb-2">Nama Lengkap & Gelar</label>
                <div class="relative">
                    <span class="absolute left-4 top-3 text-gray-400"><i class="fas fa-id-card"></i></span>
                    <input type="text" name="nama" id="nama" value="{{ old('nama') }}" required
                        class="w-full pl-10 pr-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-gray-900 focus:bg-white focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10 transition-all outline-none placeholder-gray-400"
                        placeholder="Contoh: Dr. Arnest Ganteng, S.Kom.">
                </div>
            </div>

            {{-- 3. NIP (Validasi Angka) --}}
            <div>
                <label for="nip" class="block text-sm font-bold text-gray-700 mb-2">Nomor Induk Pegawai (NIP)</label>
                <div class="relative">
                    <span class="absolute left-4 top-3 text-gray-400"><i class="fas fa-barcode"></i></span>
                    <input type="text" name="nip" id="nip" value="{{ old('nip') }}" required
                        maxlength="18" pattern="[0-9]{18}"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                        class="w-full pl-10 pr-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-gray-900 font-mono tracking-wide focus:bg-white focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10 transition-all outline-none placeholder-gray-400"
                        placeholder="19xxxxxxxxxxxxxxxx">
                </div>
                <p class="text-xs text-gray-400 mt-1 flex justify-between">
                    <span><i class="fas fa-info-circle mr-1"></i> Wajib 18 digit angka tanpa spasi.</span>
                    <span id="nip-counter" class="font-mono text-emerald-600">0/18</span>
                </p>
            </div>

            {{-- 4. Jabatan --}}
            <div>
                <label for="jabatan" class="block text-sm font-bold text-gray-700 mb-2">Jabatan</label>
                <div class="relative">
                    <span class="absolute left-4 top-3 text-gray-400"><i class="fas fa-briefcase"></i></span>
                    <input type="text" name="jabatan" id="jabatan" value="{{ old('jabatan') }}" required
                        class="w-full pl-10 pr-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-gray-900 focus:bg-white focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10 transition-all outline-none placeholder-gray-400"
                        placeholder="Contoh: Kepala Bidang Kedaruratan">
                </div>
            </div>

            <hr class="border-gray-100">

            {{-- Submit Button --}}
            <button type="submit" class="w-full py-3.5 px-4 bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-white font-bold rounded-xl shadow-lg shadow-emerald-500/30 transition-all transform hover:scale-[1.01]">
                <i class="fas fa-save mr-2"></i> Simpan Data Pegawai
            </button>

        </form>
    </div>
</div>

@endsection

@push('scripts')
<script>
    // 1. Preview Avatar
    function previewAvatar(input) {
        const placeholder = document.getElementById('avatar-placeholder');
        const preview = document.getElementById('avatar-preview');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
                placeholder.classList.add('hidden');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    // 2. Counter NIP
    const nipInput = document.getElementById('nip');
    const nipCounter = document.getElementById('nip-counter');
    
    if(nipInput) {
        nipInput.addEventListener('input', function() {
            const len = this.value.length;
            nipCounter.textContent = len + "/18";
            
            if(len === 18) {
                nipCounter.classList.remove('text-gray-400');
                nipCounter.classList.add('text-emerald-600', 'font-bold');
            } else {
                nipCounter.classList.add('text-gray-400');
                nipCounter.classList.remove('text-emerald-600', 'font-bold');
            }
        });
    }
</script>
@endpush