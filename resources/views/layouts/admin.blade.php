<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin Panel BPBD</title>
    <link rel="icon" href="{{ asset('aset/logo.jpg') }}" type="image/png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        /* Custom Scrollbar biar lebih tipis & cantik */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #0f172a; /* slate-900 */
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #334155; /* slate-700 */
            border-radius: 10px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #475569; /* slate-600 */
        }
    </style>
</head>
<body class="bg-slate-50 font-sans text-gray-800 antialiased selection:bg-emerald-500 selection:text-white">
    
    <div class="min-h-screen flex">
        
        {{-- 1. SIDEBAR (Include file sidebar admin yang tadi kita buat) --}}
        {{-- Pastikan file sidebar tadi ada di: resources/views/partials/admin-sidebar.blade.php --}}
        @include('partials.admin-sidebar')

        {{-- 2. MAIN CONTENT WRAPPER --}}
        {{-- ml-64 penting agar konten tidak tertutup sidebar yang fixed width-nya 64 --}}
        <div class="flex-1 ml-64 flex flex-col min-h-screen transition-all duration-300">
            
            {{-- HEADER ADMIN (Sticky Top) --}}
            <header class="sticky top-0 z-30 bg-white/80 backdrop-blur-md border-b border-gray-200 px-8 py-4 flex items-center justify-between shadow-sm">
                
                <div class="flex items-center gap-4">
                    <h2 class="text-xl font-bold text-gray-800 tracking-tight">@yield('title')</h2>
                </div>

                <div class="flex items-center gap-6">
                    
                    <div class="text-right hidden md:block">
                        <p class="text-sm font-bold text-gray-800">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-gray-500">Administrator</p>
                    </div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" 
                           onclick="event.preventDefault(); this.closest('form').submit();" 
                           class="w-10 h-10 rounded-full bg-red-50 text-red-500 hover:bg-red-500 hover:text-white flex items-center justify-center transition-all duration-300 shadow-sm" 
                           title="Keluar Aplikasi">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </form>
                </div>
            </header>

            {{-- AREA KONTEN (Padding biar lega) --}}
            <main class="p-8 flex-1 overflow-x-hidden">
                @yield('content')
            </main>

            {{-- FOOTER ADMIN (Simple) --}}
            <footer class="px-8 py-6 text-center text-xs text-gray-400 border-t border-gray-200">
                &copy; {{ date('Y') }} BPBD Kabupaten Lampung Barat. Admin System v1.0
            </footer>

        </div>
    </div>

    @stack('scripts')
</body>
</html>