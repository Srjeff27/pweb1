<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Direktori Mahasiswa - PortalSIA</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-slate-800 overflow-x-hidden bg-slate-50 selection:bg-blue-600 selection:text-white">
    
    <div class="fixed top-0 -left-4 w-96 h-96 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-40 animate-blob z-0"></div>
    <div class="fixed top-0 -right-4 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-40 animate-blob animation-delay-2000 z-0"></div>

    <div class="relative z-10 min-h-screen flex flex-col">
        
        <nav class="flex justify-between items-center py-6 px-8 md:px-16 w-full max-w-7xl mx-auto border-b border-slate-200/50">
            <a href="{{ route('welcome') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-blue-800 rounded-xl flex items-center justify-center shadow-lg shadow-blue-600/30 group-hover:scale-105 transition-transform">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                </div>
                <span class="text-xl font-extrabold text-slate-800 tracking-tight group-hover:text-blue-600 transition-colors">Portal<span class="text-blue-600">SIA</span></span>
            </a>

            @if (Route::has('login'))
                <div class="flex items-center gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-6 py-2 text-sm font-bold text-white bg-blue-600 rounded-full hover:bg-blue-700 transition-all duration-300 shadow-md shadow-blue-600/20 hover:-translate-y-0.5">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition-colors">Log in</a>
                    @endauth
                </div>
            @endif
        </nav>

        <main class="flex-1 w-full max-w-7xl mx-auto px-6 py-12">
            <div class="mb-12 text-center max-w-2xl mx-auto">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-100/80 text-blue-700 text-sm font-bold mb-4 border border-blue-200/50">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    Public View
                </div>
                <h1 class="text-4xl lg:text-5xl font-extrabold text-slate-900 leading-tight mb-4 tracking-tight">
                    Direktori <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-400">Mahasiswa</span>
                </h1>
                <p class="text-lg text-slate-500 font-medium">
                    Daftar lengkap profil mahasiswa aktif Fakultas Teknik Universitas Bengkulu.
                </p>
            </div>

            @if($students->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @foreach($students as $student)
                    <div class="bg-white/80 backdrop-blur-xl rounded-[2rem] p-6 border border-white shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 group">
                        <div class="flex flex-col items-center text-center">
                            <div class="w-24 h-24 rounded-full mb-4 overflow-hidden border-4 border-white shadow-md bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center group-hover:scale-105 transition-transform duration-300">
                                @if($student->photo)
                                    <img src="{{ asset('storage/' . $student->photo) }}" alt="{{ $student->name }}" class="w-full h-full object-cover">
                                @else
                                    <span class="text-white font-extrabold text-3xl">{{ strtoupper(substr($student->name, 0, 1)) }}</span>
                                @endif
                            </div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1 group-hover:text-blue-600 transition-colors">{{ $student->name }}</h3>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-blue-50 text-blue-700 border border-blue-100 mb-4">
                                {{ $student->nim }}
                            </span>
                            
                            <div class="w-full pt-4 border-t border-slate-200/60 flex flex-col gap-2 text-left">
                                <div class="flex items-center text-sm text-slate-500 font-medium">
                                    <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    <span class="truncate">{{ $student->email }}</span>
                                </div>
                                <div class="flex items-center text-sm text-slate-500 font-medium">
                                    <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    <span class="truncate">{{ $student->phone }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="w-full bg-white/60 backdrop-blur-md rounded-3xl p-16 text-center border border-white shadow-sm">
                    <div class="w-20 h-20 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-800 mb-2">Belum Ada Data</h3>
                    <p class="text-slate-500">Direktori mahasiswa masih kosong. Silakan tambahkan data melalui Dashboard.</p>
                </div>
            @endif
        </main>

        <footer class="py-8 text-center relative z-10 w-full mt-auto">
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
    </style>
</body>
</html>
