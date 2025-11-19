<aside class="w-64 h-screen fixed left-0 top-0 bg-gradient-to-b from-slate-900 via-slate-900 to-emerald-950 text-white z-50 flex flex-col border-r border-white/5 shadow-2xl">
    
    {{-- BAGIAN HEADER: Logo & Brand --}}
    <div class="p-6 flex flex-col items-center justify-center border-b border-white/10 relative overflow-hidden">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-24 h-24 bg-emerald-500/20 rounded-full blur-2xl pointer-events-none"></div>
        
        <a href="{{ url('/') }}" target="_blank" title="Lihat Website Publik" class="relative z-10 group transition-transform duration-300 hover:scale-105">
            <img src="{{ asset('aset/logo.png') }}" alt="Logo BPBD" class="h-14 w-auto mb-3 drop-shadow-lg brightness-110">
        </a>
        
        <div class="text-center relative z-10">
            <h3 class="font-bold text-lg tracking-wide text-white">Admin Panel</h3>
            <span class="text-[10px] uppercase tracking-widest text-emerald-400 font-semibold bg-emerald-500/10 px-2 py-0.5 rounded-full border border-emerald-500/20">Administrator</span>
        </div>
    </div>

    {{-- DAFTAR MENU --}}
    <nav class="flex-1 overflow-y-auto py-6 px-3 space-y-1 custom-scrollbar">
        
        <div class="px-3 mb-2 mt-1 text-[10px] font-bold text-slate-500 uppercase tracking-wider">
            Menu Utama
        </div>

        <ul>
            {{-- Item: Dashboard --}}
            <li>
                <a href="{{ route('dashboard') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 group mb-1
                   {{ request()->routeIs('dashboard') 
                      ? 'bg-gradient-to-r from-emerald-600 to-teal-600 text-white shadow-lg shadow-emerald-900/50 font-semibold border border-emerald-500/50' 
                      : 'text-slate-400 hover:bg-white/5 hover:text-white' }}">
                    
                    <i class="fas fa-tachometer-alt fa-fw text-lg transition-colors 
                       {{ request()->routeIs('dashboard') ? 'text-white' : 'text-slate-500 group-hover:text-emerald-400' }}">
                    </i>
                    <span>Dashboard</span>
                </a>
            </li>

            {{-- Item: Berita --}}
            <li>
                <a href="{{ route('admin.berita.index') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 group mb-1
                   {{ request()->routeIs('admin.berita.*') 
                      ? 'bg-gradient-to-r from-emerald-600 to-teal-600 text-white shadow-lg shadow-emerald-900/50 font-semibold border border-emerald-500/50' 
                      : 'text-slate-400 hover:bg-white/5 hover:text-white' }}">
                    
                    <i class="fas fa-newspaper fa-fw text-lg transition-colors 
                       {{ request()->routeIs('admin.berita.*') ? 'text-white' : 'text-slate-500 group-hover:text-emerald-400' }}">
                    </i>
                    <span>Manajemen Berita</span>
                </a>
            </li>

            {{-- Item: Dokumen --}}
            <li>
                <a href="{{ route('admin.dokumen.index') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 group mb-1
                   {{ request()->routeIs('admin.dokumen.*') 
                      ? 'bg-gradient-to-r from-emerald-600 to-teal-600 text-white shadow-lg shadow-emerald-900/50 font-semibold border border-emerald-500/50' 
                      : 'text-slate-400 hover:bg-white/5 hover:text-white' }}">
                    
                    <i class="fas fa-file-alt fa-fw text-lg transition-colors 
                       {{ request()->routeIs('admin.dokumen.*') ? 'text-white' : 'text-slate-500 group-hover:text-emerald-400' }}">
                    </i>
                    <span>Manajemen Dokumen</span>
                </a>
            </li>

            {{-- Item: Pegawai --}}
            <li>
                <a href="{{ route('admin.pegawai.index') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 group mb-1
                   {{ request()->routeIs('admin.pegawai.*') 
                      ? 'bg-gradient-to-r from-emerald-600 to-teal-600 text-white shadow-lg shadow-emerald-900/50 font-semibold border border-emerald-500/50' 
                      : 'text-slate-400 hover:bg-white/5 hover:text-white' }}">
                    
                    <i class="fas fa-users fa-fw text-lg transition-colors 
                       {{ request()->routeIs('admin.pegawai.*') ? 'text-white' : 'text-slate-500 group-hover:text-emerald-400' }}">
                    </i>
                    <span>Manajemen Pegawai</span>
                </a>
            </li>

            {{-- Item: Galeri --}}
            <li>
                <a href="{{ route('admin.gallery.index') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 group mb-1
                   {{ request()->routeIs('admin.gallery.*') 
                      ? 'bg-gradient-to-r from-emerald-600 to-teal-600 text-white shadow-lg shadow-emerald-900/50 font-semibold border border-emerald-500/50' 
                      : 'text-slate-400 hover:bg-white/5 hover:text-white' }}">
                    
                    <i class="fas fa-images fa-fw text-lg transition-colors 
                       {{ request()->routeIs('admin.gallery.*') ? 'text-white' : 'text-slate-500 group-hover:text-emerald-400' }}">
                    </i>
                    <span>Manajemen Galeri</span>
                </a>
            </li>
        </ul>
    </nav>

    {{-- Footer Sidebar --}}
    <div class="p-4 border-t border-white/10 bg-black/20">
        <a href="{{ url('/') }}" target="_blank" class="flex items-center justify-center gap-2 w-full bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white py-3 rounded-xl transition-all duration-300 text-sm font-medium border border-white/5 shadow-lg group">
            <i class="fas fa-globe group-hover:text-emerald-400 transition-colors"></i>
            <span>Lihat Web Publik</span>
        </a>
    </div>
</aside>