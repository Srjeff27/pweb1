<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal Mahasiswa - FT UNIB</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-slate-800 overflow-x-hidden bg-slate-50 selection:bg-blue-600 selection:text-white">
    
    <div class="fixed top-0 -left-4 w-96 h-96 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-40 animate-blob z-0"></div>
    <div class="fixed top-0 -right-4 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-40 animate-blob animation-delay-2000 z-0"></div>
    <div class="fixed -bottom-8 left-40 w-96 h-96 bg-blue-400 rounded-full mix-blend-multiply filter blur-3xl opacity-40 animate-blob animation-delay-4000 z-0"></div>

    <div class="relative z-10 min-h-screen flex flex-col justify-between">
        
        <nav class="flex justify-between items-center py-6 px-8 md:px-16 w-full max-w-7xl mx-auto">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-800 rounded-xl flex items-center justify-center shadow-lg shadow-blue-600/30">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                    </svg>
                </div>
                <span class="text-2xl font-extrabold text-slate-800 tracking-tight">Portal<span class="text-blue-600">SIA</span></span>
            </div>

            <div class="flex items-center gap-6">
                <a href="{{ route('public.students') }}" class="text-sm font-bold text-blue-600 hover:text-blue-800 transition-colors">Direktori Mahasiswa</a>
                @if (Route::has('login'))
                    <div class="flex items-center gap-4 border-l border-slate-200 pl-6">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="px-6 py-2.5 text-sm font-bold text-white bg-blue-600 rounded-full hover:bg-blue-700 transition-all duration-300 shadow-md shadow-blue-600/20 hover:shadow-lg hover:shadow-blue-600/40 hover:-translate-y-0.5">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition-colors">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-6 py-2.5 text-sm font-bold text-blue-600 bg-white border border-blue-100 rounded-full hover:bg-blue-50 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5">Register</a>
                        @endif
                    @endauth
                    </div>
                @endif
            </div>
        </nav>

        <main class="flex-1 flex items-center justify-center px-6 py-12 w-full max-w-7xl mx-auto">
            <div class="w-full grid lg:grid-cols-2 gap-16 lg:gap-8 items-center">
                
                <div class="max-w-2xl pr-0 lg:pr-8">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-100/80 backdrop-blur-sm text-blue-700 text-sm font-bold mb-6 border border-blue-200/50">
                        <span class="w-2.5 h-2.5 rounded-full bg-blue-600 animate-pulse"></span>
                        Sistem Informasi UNIB
                    </div>
                    <h1 class="text-5xl lg:text-6xl font-extrabold text-slate-900 leading-tight mb-6 tracking-tight">
                        Kelola Data <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-400">Mahasiswa</span> Lebih Mudah
                    </h1>
                    <p class="text-lg text-slate-600 mb-10 leading-relaxed font-medium">
                        Platform CRUD modern terintegrasi untuk pengelolaan basis data mahasiswa Fakultas Teknik. Dibangun dengan kecepatan, keamanan, dan standar industri terkini.
                    </p>
                    <div class="flex flex-wrap items-center gap-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="px-8 py-4 text-base font-bold text-white bg-blue-600 rounded-full hover:bg-blue-700 transition-all duration-300 shadow-lg shadow-blue-600/30 hover:shadow-xl hover:-translate-y-1 flex items-center gap-2 group">
                                Masuk ke Panel
                                <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="px-8 py-4 text-base font-bold text-white bg-blue-600 rounded-full hover:bg-blue-700 transition-all duration-300 shadow-lg shadow-blue-600/30 hover:shadow-xl hover:-translate-y-1 flex items-center gap-2 group">
                                Mulai Sekarang
                                <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                            </a>
                            <a href="https://github.com/laravel/laravel" target="_blank" class="px-8 py-4 text-base font-bold text-slate-700 bg-white/50 backdrop-blur-md border border-slate-200 rounded-full hover:bg-white transition-all duration-300 hover:shadow-md">
                                Dokumentasi
                            </a>
                        @endauth
                    </div>
                </div>

                <div class="relative w-full aspect-square max-w-lg mx-auto lg:ml-auto">
                    <div class="absolute inset-0 bg-gradient-to-tr from-blue-600 to-blue-300 rounded-[2.5rem] rotate-3 opacity-20 transition-transform duration-700 hover:rotate-6"></div>
                    
                    <div class="absolute inset-0 bg-white/60 backdrop-blur-xl border border-white/80 shadow-[0_8px_30px_rgb(0,0,0,0.08)] rounded-[2.5rem] p-8 flex flex-col transform transition-all duration-500 hover:-translate-y-2 z-10">
                        
                        <div class="flex justify-between items-center border-b border-slate-200/60 pb-5 mb-6">
                            <div class="flex space-x-2.5">
                                <div class="w-3.5 h-3.5 rounded-full bg-red-400"></div>
                                <div class="w-3.5 h-3.5 rounded-full bg-amber-400"></div>
                                <div class="w-3.5 h-3.5 rounded-full bg-green-400"></div>
                            </div>
                            <div class="text-xs font-bold text-slate-400 uppercase tracking-widest">Database Preview</div>
                        </div>

                        <div class="flex-1 flex flex-col gap-4">
                            @for ($i = 0; $i < 4; $i++)
                            <div class="w-full bg-white/80 rounded-2xl p-4 flex items-center gap-4 shadow-sm border border-slate-100/50 hover:shadow-md transition-shadow">
                                <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                </div>
                                <div class="flex-1">
                                    <div class="w-24 h-2.5 bg-slate-200 rounded-full mb-2"></div>
                                    <div class="w-16 h-2 bg-slate-100 rounded-full"></div>
                                </div>
                                <div class="w-8 h-8 rounded-full bg-green-50 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                            </div>
                            @endfor
                        </div>

                        <div class="mt-6 pt-6 border-t border-slate-200/60 flex justify-between items-center">
                            <div class="flex items-center gap-2">
                                <span class="relative flex h-3 w-3">
                                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                  <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                                </span>
                                <span class="text-sm font-bold text-slate-500">System Online</span>
                            </div>
                            <div class="text-sm font-bold text-blue-600 bg-blue-50 px-3 py-1 rounded-full">Breeze Auth</div>
                        </div>

                    </div>
                </div>
            </div>
        </main>


        <footer class="py-8 text-center relative z-10 w-full">
            <p class="text-sm text-slate-500 font-semibold">
                &copy; {{ date('Y') }} Sistem Informasi - Fakultas Teknik Universitas Bengkulu.
            </p>
        </footer>
    </div>

    <style>
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .animate-blob {
            animation: blob 7s infinite;
        }
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>
</body>
</html>