@extends('layouts.admin')

@section('title', 'Edit Data Pegawai')

@section('content')

{{-- Header Page --}}
<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
    <div>
        <h2 class="text-2xl font-bold text-gray-800">Edit Data Pegawai</h2>
        <p class="text-sm text-gray-500">Perbarui informasi profil, jabatan, atau foto pegawai.</p>
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
            <h3 class="font-bold text-sm mb-1">Gagal Menyimpan Perubahan</h3>
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
        
        <form action="{{ route('admin.pegawai.update', $pegawai->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT') {{-- Method PUT wajib untuk update --}}

            {{-- 1. Area Foto Profil (Smart Preview) --}}
            <div class="flex flex-col sm:flex-row items-center gap-6 p-4 bg-emerald-50/50 rounded-2xl border border-emerald-100">
                
                <div class="relative group">
                    <div class="w-24 h-24 rounded-full border-4 border-white shadow-md overflow-hidden bg-gray-200">
                        @if($pegawai->foto)
                            <img id="avatar-preview" src="{{ asset('storage/pegawai/' . $pegawai->foto) }}" class="w-full h-full object-cover">
                        @else
                            <img id="avatar-preview" src="https://ui-avatars.com/api/?name={{ urlencode($pegawai->nama) }}&background=random" class="w-full h-full object-cover">
                        @endif
                    </div>
                    
                    <div class="absolute bottom-0 right-0 w-8 h-8 bg-emerald-500 text-white rounded-full flex items-center justify-center border-2 border-white shadow-sm">
                        <i class="fas fa-camera text-xs"></i>
                    </div>
                </div>

                <div class="flex-1 text-center sm:text-left">
                    <h3 class="font-bold text-gray-800 text-sm mb-1">Foto Profil</h3>
                    <p class="text-xs text-gray-500 mb-3">Klik tombol di bawah untuk mengganti foto saat ini.</p>
                    
                    <input type="file" name="foto" id="foto-input" 
                        class="block w-full text-xs text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-bold file:bg-emerald-100 file:text-emerald-700 hover:file:bg-emerald-200 transition-all cursor-pointer"
                        accept="image/*"
                        onchange="previewAvatar(this)">
                </div>
            </div>

            <hr class="border-gray-100">

            {{-- 2. Nama Lengkap --}}
            <div>
                <label for="nama" class="block text-sm font-bold text-gray-700 mb-2">Nama Lengkap</label>
                <div class="relative">
                    <span class="absolute left-4 top-3 text-gray-400"><i class="fas fa-id-card"></i></span>
                    <input type="text" name="nama" id="nama" 
                        value="{{ old('nama', $pegawai->nama) }}" required
                        class="w-full pl-10 pr-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-gray-900 focus:bg-white focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10 transition-all outline-none font-medium">
                </div>
            </div>

            {{-- 3. NIP --}}
            <div>
                <label for="nip" class="block text-sm font-bold text-gray-700 mb-2">NIP</label>
                <div class="relative">
                    <span class="absolute left-4 top-3 text-gray-400"><i class="fas fa-barcode"></i></span>
                    <input type="text" name="nip" id="nip" 
                        value="{{ old('nip', $pegawai->nip) }}" required
                        maxlength="18" pattern="[0-9]{18}"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                        class="w-full pl-10 pr-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-gray-900 font-mono tracking-wide focus:bg-white focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10 transition-all outline-none">
                </div>
                <div class="flex justify-between mt-1">
                    <p class="text-xs text-gray-400">Wajib 18 digit angka.</p>
                    <p id="nip-counter" class="text-xs font-mono text-emerald-600 font-bold">{{ strlen($pegawai->nip) }}/18</p>
                </div>
            </div>

            {{-- 4. Jabatan --}}
            <div>
                <label for="jabatan" class="block text-sm font-bold text-gray-700 mb-2">Jabatan</label>
                <div class="relative">
                    <span class="absolute left-4 top-3 text-gray-400"><i class="fas fa-briefcase"></i></span>
                    <input type="text" name="jabatan" id="jabatan" 
                        value="{{ old('jabatan', $pegawai->jabatan) }}" required
                        class="w-full pl-10 pr-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-gray-900 focus:bg-white focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/10 transition-all outline-none">
                </div>
            </div>

            <hr class="border-gray-100">

            {{-- Submit Button --}}
            <button type="submit" class="w-full py-3.5 px-4 bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-white font-bold rounded-xl shadow-lg shadow-emerald-500/30 transition-all transform hover:scale-[1.01]">
                <i class="fas fa-check-circle mr-2"></i> Simpan Perubahan
            </button>

        </form>
    </div>
</div>

@endsection

@push('scripts')
<script>
    // 1. Live Preview saat ganti foto
    function previewAvatar(input) {
        const preview = document.getElementById('avatar-preview');
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result; // Ganti source gambar lama dengan yang baru
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    // 2. NIP Counter (Update saat ngetik)
    const nipInput = document.getElementById('nip');
    const nipCounter = document.getElementById('nip-counter');
    
    if(nipInput) {
        nipInput.addEventListener('input', function() {
            const len = this.value.length;
            nipCounter.textContent = len + "/18";
            
            if(len === 18) {
                nipCounter.classList.add('text-emerald-600', 'font-bold');
                nipCounter.classList.remove('text-red-500');
            } else {
                nipCounter.classList.remove('text-emerald-600', 'font-bold');
                // Opsional: kasih warna merah kalau belum 18
            }
        });
    }
</script>
@endpush