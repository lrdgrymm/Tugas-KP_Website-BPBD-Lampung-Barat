<footer class="relative bg-gradient-to-br from-slate-900 via-gray-900 to-emerald-950 text-gray-300 overflow-hidden">
    
    {{-- Decorative Background Elements --}}
    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-green-500 via-emerald-500 to-teal-600"></div>
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-emerald-500/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-teal-500/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="container mx-auto px-4 pt-16 pb-8 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
            
            {{-- Kolom 1: Brand & About (Lebih lebar di desktop) --}}
            <div class="lg:col-span-2 space-y-6">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('aset/logo.png') }}" alt="Logo BPBD" class="h-12 w-auto brightness-0 invert opacity-90"> <div>
                        <h3 class="text-xl font-bold text-white leading-none">BPBD</h3>
                        <span class="text-xs text-emerald-500 tracking-widest uppercase font-semibold">Kabupaten Lampung Barat</span>
                    </div>
                </div>
                <p class="text-gray-400 leading-relaxed max-w-md">
                    Lembaga pemerintah non-departemen yang melaksanakan tugas penanggulangan bencana secara terintegrasi. Kami hadir di setiap fase: pra-bencana, tanggap darurat, hingga pasca-bencana demi masyarakat yang tangguh.
                </p>
                
                {{-- Social Media Buttons --}}
                <div class="flex gap-4 pt-2">
                    <a href="#" class="w-10 h-10 rounded-full bg-white/5 hover:bg-emerald-600 flex items-center justify-center text-white transition-all duration-300 group">
                        <i class="fab fa-instagram text-lg group-hover:scale-110 transition-transform"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white/5 hover:bg-blue-600 flex items-center justify-center text-white transition-all duration-300 group">
                        <i class="fab fa-facebook-f text-lg group-hover:scale-110 transition-transform"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white/5 hover:bg-red-600 flex items-center justify-center text-white transition-all duration-300 group">
                        <i class="fab fa-youtube text-lg group-hover:scale-110 transition-transform"></i>
                    </a>
                </div>
            </div>

            {{-- Kolom 2: Tautan Cepat --}}
            <div>
                <h4 class="text-lg font-bold text-white mb-6 relative pl-4 border-l-4 border-emerald-500">
                    Akses Cepat
                </h4>
                <ul class="space-y-3">
                    <li>
                        <a href="https://www.bmkg.go.id" target="_blank" class="flex items-center gap-2 hover:text-emerald-400 transition-colors group">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 group-hover:w-3 transition-all duration-300"></span>
                            BMKG Indonesia
                        </a>
                    </li>
                    <li>
                        <a href="https://www.bnpb.go.id" target="_blank" class="flex items-center gap-2 hover:text-emerald-400 transition-colors group">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 group-hover:w-3 transition-all duration-300"></span>
                            BNPB Indonesia
                        </a>
                    </li>
                    <li>
                        <a href="https://lampungbaratkab.go.id" target="_blank" class="flex items-center gap-2 hover:text-emerald-400 transition-colors group">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 group-hover:w-3 transition-all duration-300"></span>
                            Pemkab Lampung Barat
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/berita') }}" class="flex items-center gap-2 hover:text-emerald-400 transition-colors group">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 group-hover:w-3 transition-all duration-300"></span>
                            Berita & Terkini
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/informasi/dokumen') }}" class="flex items-center gap-2 hover:text-emerald-400 transition-colors group">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 group-hover:w-3 transition-all duration-300"></span>
                            Dokumen Publik
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Kolom 3: Kontak Darurat --}}
            <div>
                <h4 class="text-lg font-bold text-white mb-6 relative pl-4 border-l-4 border-red-500">
                    Hubungi Kami
                </h4>
                
                {{-- Emergency Box --}}
                <div class="bg-white/5 rounded-xl p-4 border border-white/10 mb-6 hover:border-red-500/50 transition-colors">
                    <div class="text-xs text-gray-400 mb-1 uppercase tracking-wider font-semibold">Pusdalops 24/7</div>
                    <div class="flex items-center gap-3 text-white">
                        <div class="w-8 h-8 rounded-lg bg-red-500/20 flex items-center justify-center text-red-500 animate-pulse">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <span class="text-xl font-bold tracking-wide">(0728) 123-456</span>
                    </div>
                </div>

                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <i class="fas fa-map-marker-alt mt-1.5 text-emerald-500"></i>
                        <span class="text-sm leading-relaxed">Jl. Raden Intan No. 1, Liwa,<br>Kabupaten Lampung Barat</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fab fa-whatsapp text-emerald-500"></i>
                        <span class="text-sm hover:text-emerald-400 cursor-pointer">+62 812 3456 7890</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fas fa-envelope text-emerald-500"></i>
                        <span class="text-sm hover:text-emerald-400 cursor-pointer">kontak@bpbd.lambar.go.id</span>
                    </li>
                </ul>
            </div>

        </div>

        {{-- Copyright Area --}}
        <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-gray-500">
            <p>Copyright © {{ date('Y') }} <span class="text-emerald-400 font-semibold">BPBD Lampung Barat</span>. All rights reserved.</p>
            <div class="flex gap-6">
                <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                <a href="#" class="hover:text-white transition-colors">Sitemap</a>
            </div>
        </div>
    </div>
</footer>