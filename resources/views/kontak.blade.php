@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')

<section class="relative bg-gradient-to-br from-emerald-900 via-teal-900 to-cyan-900 py-20 md:py-28 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('aset/slider-2.jpg') }}" alt="Contact BPBD" class="w-full h-full object-cover opacity-20 mix-blend-overlay">
        <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/90 to-transparent"></div>
    </div>

    <div class="absolute top-0 right-0 w-64 h-64 bg-teal-500/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-10 w-80 h-80 bg-emerald-500/20 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-4 relative z-10 text-center">
        <span class="inline-block py-1 px-3 rounded-full bg-emerald-500/20 border border-emerald-400/30 text-emerald-300 text-xs font-bold tracking-wider uppercase mb-4">
            Layanan Masyarakat
        </span>
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Hubungi Kami</h1>
        <p class="text-emerald-100 text-lg max-w-2xl mx-auto leading-relaxed">
            Kami siap menerima laporan, pertanyaan, serta masukan Anda demi pelayanan penanggulangan bencana yang lebih baik.
        </p>
    </div>
</section>

<section class="py-16 md:py-24 bg-slate-50 relative">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
            
            <div class="space-y-8">
                
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">Informasi Kontak</h2>
                    <p class="text-gray-600">Silakan kunjungi kantor kami atau hubungi melalui saluran resmi di bawah ini.</p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-start gap-4 group">
                        <div class="flex-shrink-0 w-12 h-12 bg-emerald-100 rounded-2xl flex items-center justify-center text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300 shadow-sm">
                            <i class="fas fa-map-marker-alt text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">Alamat Kantor</h4>
                            <p class="text-gray-600 text-sm leading-relaxed mt-1">
                                Way Mengaku, Balik Bukit,<br>Kabupaten Lampung Barat, Lampung
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 group">
                        <div class="flex-shrink-0 w-12 h-12 bg-red-100 rounded-2xl flex items-center justify-center text-red-600 group-hover:bg-red-600 group-hover:text-white transition-all duration-300 shadow-sm animate-pulse">
                            <i class="fas fa-phone-alt text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">Pusdalops (Darurat 24/7)</h4>
                            <p class="text-gray-600 text-sm leading-relaxed mt-1">
                                (0728) 123-456
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 group">
                        <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-sm">
                            <i class="fas fa-envelope text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">Email Resmi</h4>
                            <p class="text-gray-600 text-sm leading-relaxed mt-1">
                                kontak@bpbd.lambar.go.id
                            </p>
                        </div>
                    </div>
                </div>

                <div class="relative rounded-3xl overflow-hidden shadow-lg border-4 border-white h-80 w-full group">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d810.7437678466487!2d104.05864447025634!3d-5.018062795822504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e478f1c90763ed1%3A0x5aaf8c45a40f3f92!2sBPBD%20KAB.%20LAMPUNG%20BARAT!5e1!3m2!1sen!2sid!4v1763579580572!5m2!1sen!2sid" 
                        class="w-full h-full grayscale group-hover:grayscale-0 transition-all duration-500" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                    
                    <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur px-4 py-2 rounded-xl shadow-md text-xs font-bold text-gray-700 pointer-events-none">
                        <i class="fas fa-location-arrow text-emerald-500 mr-1"></i> Lokasi Kami
                    </div>
                </div>

            </div>

            <div class="bg-white rounded-3xl shadow-xl p-8 md:p-10 border border-gray-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-50 rounded-bl-full -mr-10 -mt-10 z-0"></div>
                
                <div class="relative z-10">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Kirim Pesan Langsung</h3>
                    
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" id="name" name="name" required 
                                class="w-full px-5 py-3 rounded-xl bg-gray-50 border border-gray-200 text-gray-900 focus:bg-white focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/20 transition-all duration-300 outline-none"
                                placeholder="Masukkan nama anda">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Alamat Email</label>
                            <input type="email" id="email" name="email" required 
                                class="w-full px-5 py-3 rounded-xl bg-gray-50 border border-gray-200 text-gray-900 focus:bg-white focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/20 transition-all duration-300 outline-none"
                                placeholder="contoh@email.com">
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Pesan Anda</label>
                            <textarea id="message" name="message" rows="5" required 
                                class="w-full px-5 py-3 rounded-xl bg-gray-50 border border-gray-200 text-gray-900 focus:bg-white focus:border-emerald-500 focus:ring-4 focus:ring-emerald-500/20 transition-all duration-300 outline-none resize-none"
                                placeholder="Tuliskan laporan atau pertanyaan anda disini..."></textarea>
                        </div>

                        <button type="submit" class="w-full group relative overflow-hidden rounded-xl bg-gradient-to-r from-emerald-600 to-teal-600 px-8 py-4 text-white shadow-lg shadow-emerald-500/30 transition-all duration-300 hover:scale-[1.02] hover:shadow-emerald-500/50 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">
                            <div class="relative flex items-center justify-center gap-2 font-bold tracking-wide">
                                <span>Kirim Pesan</span>
                                <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </div>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection