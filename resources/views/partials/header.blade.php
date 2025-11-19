<header class="fixed top-0 w-full z-50 bg-white/90 backdrop-blur-md border-b border-gray-100 transition-all duration-300">
    <div class="container mx-auto px-4 h-20 flex items-center justify-between">
        
        {{-- Logo Section --}}
        <a href="{{ url('/') }}" class="flex items-center gap-3 group">
            <img src="{{ asset('aset/logo.png') }}" alt="Logo BPBD" class="h-10 w-auto transition-transform duration-300 group-hover:scale-105">
            <div class="hidden md:block">
                <span class="block text-sm font-bold text-gray-900 leading-tight">BPBD</span>
                <span class="block text-[10px] text-gray-500 tracking-wider">KABUPATEN LAMPUNG BARAT</span>
            </div>
        </a>

        {{-- Desktop Navigation --}}
        <nav class="hidden lg:block">
            <ul class="flex items-center gap-8">
                {{-- Home --}}
                <li>
                    <a href="{{ url('/') }}" 
                       class="text-sm font-medium transition-colors duration-300 {{ request()->is('/') ? 'text-emerald-600 font-bold' : 'text-gray-600 hover:text-emerald-600' }}">
                        Home
                    </a>
                </li>

                {{-- Dropdown: Profil --}}
                <li class="relative group">
                    <button class="flex items-center gap-1 text-sm font-medium transition-colors duration-300 {{ request()->is('profil/*') ? 'text-emerald-600 font-bold' : 'text-gray-600 hover:text-emerald-600' }}">
                        Profil
                        <svg class="w-3 h-3 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    {{-- Dropdown Menu --}}
                    <div class="absolute top-full left-0 pt-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                        <ul class="bg-white rounded-xl shadow-xl border border-gray-100 py-2 w-48 overflow-hidden">
                            <li><a href="{{ url('profil/sejarah') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-emerald-50 hover:text-emerald-600 transition-colors">Sejarah & Visi Misi</a></li>
                            <li><a href="{{ url('profil/struktur') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-emerald-50 hover:text-emerald-600 transition-colors">Struktur Organisasi</a></li>
                            <li><a href="{{ url('profil/pegawai') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-emerald-50 hover:text-emerald-600 transition-colors">Data Pegawai</a></li>
                        </ul>
                    </div>
                </li>

                {{-- Dropdown: Bidang (The Big Menu) --}}
                <li class="relative group">
                    <button class="flex items-center gap-1 text-sm font-medium transition-colors duration-300 {{ request()->is('bidang/*') ? 'text-emerald-600 font-bold' : 'text-gray-600 hover:text-emerald-600' }}">
                        Bidang
                        <svg class="w-3 h-3 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="absolute top-full -left-10 pt-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                        <ul class="bg-white rounded-xl shadow-xl border border-gray-100 py-2 w-64 overflow-hidden">
                            <li>
                                <a href="{{ url('/bidang/pencegahan') }}" class="block px-4 py-3 text-sm text-gray-600 hover:bg-green-50 hover:text-green-700 transition-colors border-l-2 border-transparent hover:border-green-500">
                                    Pencegahan & Kesiapsiagaan
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/bidang/kedaruratan') }}" class="block px-4 py-3 text-sm text-gray-600 hover:bg-red-50 hover:text-red-700 transition-colors border-l-2 border-transparent hover:border-red-500">
                                    Kedaruratan & Logistik
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/bidang/rehabilitasi') }}" class="block px-4 py-3 text-sm text-gray-600 hover:bg-amber-50 hover:text-amber-700 transition-colors border-l-2 border-transparent hover:border-amber-500">
                                    Rehabilitasi & Rekonstruksi
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/bidang/sekretariat') }}" class="block px-4 py-3 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 transition-colors border-l-2 border-transparent hover:border-blue-500">
                                    Sekretariat
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Berita --}}
                <li>
                    <a href="{{ url('/berita') }}" class="text-sm font-medium transition-colors duration-300 {{ request()->is('berita') ? 'text-emerald-600 font-bold' : 'text-gray-600 hover:text-emerald-600' }}">
                        Berita
                    </a>
                </li>

                {{-- Dropdown: Gallery --}}
                <li class="relative group">
                    <button class="flex items-center gap-1 text-sm font-medium transition-colors duration-300 {{ request()->is('gallery/*') ? 'text-emerald-600 font-bold' : 'text-gray-600 hover:text-emerald-600' }}">
                        Gallery
                        <svg class="w-3 h-3 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="absolute top-full left-0 pt-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                        <ul class="bg-white rounded-xl shadow-xl border border-gray-100 py-2 w-40 overflow-hidden">
                            <li><a href="{{ url('/gallery/foto') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-emerald-50 hover:text-emerald-600 transition-colors">Foto</a></li>
                            <li><a href="{{ url('/gallery/video') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-emerald-50 hover:text-emerald-600 transition-colors">Video</a></li>
                        </ul>
                    </div>
                </li>
                
                {{-- Dropdown: Informasi --}}
                <li class="relative group">
                    <button class="flex items-center gap-1 text-sm font-medium transition-colors duration-300 {{ request()->is('informasi/*') ? 'text-emerald-600 font-bold' : 'text-gray-600 hover:text-emerald-600' }}">
                        Informasi
                        <svg class="w-3 h-3 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="absolute top-full left-0 pt-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                        <ul class="bg-white rounded-xl shadow-xl border border-gray-100 py-2 w-48 overflow-hidden">
                            <li><a href="{{ url('/informasi/peringatan-dini') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-emerald-50 hover:text-emerald-600 transition-colors">Peringatan Dini</a></li>
                            <li><a href="{{ url('/informasi/dokumen') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-emerald-50 hover:text-emerald-600 transition-colors">Dokumen</a></li>
                        </ul>
                    </div>
                </li>

                {{-- Kontak --}}
                <li>
                    <a href="{{ url('/kontak') }}" class="text-sm font-medium transition-colors duration-300 {{ request()->is('kontak') ? 'text-emerald-600 font-bold' : 'text-gray-600 hover:text-emerald-600' }}">
                        Kontak
                    </a>
                </li>
            </ul>
        </nav>

        {{-- Auth / User Action --}}
        <div class="flex items-center gap-4">
            @auth
                <div class="relative group">
                    <button class="flex items-center gap-2 px-4 py-2 rounded-full bg-gray-100 hover:bg-emerald-50 text-gray-700 hover:text-emerald-700 transition-all">
                        <span class="text-sm font-semibold">{{ Auth::user()->name }}</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    
                    <div class="absolute top-full right-0 pt-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                        <div class="bg-white rounded-xl shadow-xl border border-gray-100 py-2 w-48 overflow-hidden">
                            <div class="px-4 py-2 border-b border-gray-50">
                                <p class="text-xs text-gray-500">Signed in as</p>
                                <p class="text-sm font-bold text-gray-900 truncate">{{ Auth::user()->name }}</p>
                            </div>
                            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-emerald-50 hover:text-emerald-600 transition-colors">Dashboard</a>
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-emerald-50 hover:text-emerald-600 transition-colors">Edit Profile</a>
                            <div class="border-t border-gray-50 mt-1 pt-1">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors">
                                        Log Out
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="hidden lg:inline-flex items-center justify-center px-5 py-2 text-sm font-medium text-white transition-all duration-200 bg-emerald-600 border border-transparent rounded-full hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-600 shadow-md shadow-emerald-500/20">
                    Login Pegawai
                </a>
            @endauth

            {{-- Mobile Menu Button (Hidden on Desktop) --}}
            <button class="lg:hidden p-2 text-gray-600 hover:text-emerald-600 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

    </div>
</header>