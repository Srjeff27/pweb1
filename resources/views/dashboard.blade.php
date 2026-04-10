@php
    $studentCount = \App\Models\Student::count();
    $latestStudents = \App\Models\Student::latest()->take(5)->get();
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-2xl text-slate-800 leading-tight tracking-tight">
            {{ __('Dashboard PortalSIA') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-slate-50/30">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-10">
            
            <div class="relative overflow-hidden bg-gradient-to-br from-indigo-600 to-blue-700 rounded-[2.5rem] p-10 shadow-2xl shadow-indigo-200">
                <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 rounded-full bg-white opacity-10 blur-3xl scale-125 transition-transform duration-1000 group-hover:scale-150"></div>
                <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-96 h-96 rounded-full bg-indigo-400 opacity-20 blur-3xl"></div>
                
                <div class="relative z-10 flex flex-col sm:flex-row items-center justify-between gap-8 text-center sm:text-left">
                    <div>
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md text-white text-xs font-extrabold mb-6 border border-white/20 shadow-sm">
                            <span class="w-2.5 h-2.5 rounded-full bg-green-400 animate-pulse border-2 border-green-200/50"></span>
                            Sistem Utama Aktif
                        </div>
                        <h3 class="text-4xl font-extrabold text-white mb-4 tracking-tight drop-shadow-md">
                            Halo, {{ explode(' ', Auth::user()->name)[0] }}! 👋
                        </h3>
                        <p class="text-indigo-100 font-medium text-lg max-w-xl leading-relaxed opacity-90">
                            Kelola ekosistem data mahasiswa dengan antarmuka yang lebih cerdas, modern, dan sangat efisien.
                        </p>
                    </div>
                    
                    <a href="{{ route('students.create') }}" class="shrink-0 px-8 py-4 bg-white text-indigo-700 font-extrabold rounded-2xl shadow-xl hover:bg-slate-50 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 flex items-center gap-2 group active:scale-95">
                        <div class="p-1.5 bg-indigo-50 rounded-lg group-hover:bg-indigo-100 transition-colors">
                            <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"></path></svg>
                        </div>
                        Tambah Mahasiswa
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="bg-white rounded-[2rem] p-8 shadow-[0_8px_30px_rgb(0,0,0,0.03)] border border-slate-100 group hover:border-indigo-200 transition-all duration-500 hover:shadow-indigo-100/50">
                    <div class="flex justify-between items-start mb-6">
                        <div class="w-14 h-14 rounded-2xl bg-indigo-50 flex items-center justify-center group-hover:bg-indigo-600 transition-all duration-500 shadow-sm overflow-hidden relative">
                            <div class="absolute inset-0 bg-gradient-to-br from-white/20 to-transparent"></div>
                            <svg class="w-7 h-7 text-indigo-600 group-hover:text-white transition-colors relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <div class="text-right">
                            <p class="text-xs font-extrabold text-slate-400 uppercase tracking-widest mb-1">Database</p>
                            <h4 class="text-4xl font-black text-slate-800 group-hover:text-indigo-600 transition-colors">{{ number_format($studentCount) }}</h4>
                        </div>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-slate-500 mb-2">Total Mahasiswa</p>
                        <div class="w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-indigo-600 h-full rounded-full transition-all duration-1000" style="width: 75%"></div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-[2rem] p-8 shadow-[0_8px_30px_rgb(0,0,0,0.03)] border border-slate-100 group hover:border-emerald-200 transition-all duration-500 hover:shadow-emerald-100/50">
                    <div class="flex justify-between items-start mb-6">
                        <div class="w-14 h-14 rounded-2xl bg-emerald-50 flex items-center justify-center group-hover:bg-emerald-500 transition-all duration-500 shadow-sm overflow-hidden relative">
                            <div class="absolute inset-0 bg-gradient-to-br from-white/20 to-transparent"></div>
                            <svg class="w-7 h-7 text-emerald-500 group-hover:text-white transition-colors relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                        </div>
                        <div class="text-right">
                            <p class="text-xs font-extrabold text-slate-400 uppercase tracking-widest mb-1">Verifikasi</p>
                            <h4 class="text-4xl font-black text-slate-800 group-hover:text-emerald-500 transition-colors">{{ number_format($studentCount) }}</h4>
                        </div>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-slate-500 mb-2">Status Aktif</p>
                        <div class="flex items-center gap-2">
                            <span class="flex-1 text-xs font-bold text-emerald-600 bg-emerald-50 px-2.5 py-1 rounded-lg border border-emerald-100">Semester Genap 2023/2024</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-[2rem] p-8 shadow-[0_8px_30px_rgb(0,0,0,0.03)] border border-slate-100 group hover:border-amber-200 transition-all duration-500 hover:shadow-amber-100/50">
                    <div class="flex justify-between items-start mb-6">
                        <div class="w-14 h-14 rounded-2xl bg-amber-50 flex items-center justify-center group-hover:bg-amber-500 transition-all duration-500 shadow-sm overflow-hidden relative">
                            <div class="absolute inset-0 bg-gradient-to-br from-white/20 to-transparent"></div>
                            <svg class="w-7 h-7 text-amber-500 group-hover:text-white transition-colors relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                        <div class="text-right">
                            <p class="text-xs font-extrabold text-slate-400 uppercase tracking-widest mb-1">Struktur</p>
                            <h4 class="text-4xl font-black text-slate-800 group-hover:text-amber-500 transition-colors">4</h4>
                        </div>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-slate-500 mb-2">Program Studi</p>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['SI', 'TI', 'TE', 'TS'] as $prodi)
                                <span class="text-[10px] font-black text-slate-400 bg-slate-50 px-2 py-0.5 rounded-md border border-slate-100 group-hover:border-amber-100 group-hover:text-amber-600 transition-colors">{{ $prodi }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>

            <div class="bg-white rounded-[2.5rem] shadow-[0_8px_30px_rgb(0,0,0,0.03)] border border-slate-100 overflow-hidden group">
                <div class="px-10 py-8 border-b border-slate-50 flex justify-between items-center bg-white">
                    <div>
                        <h3 class="text-xl font-extrabold text-slate-800 tracking-tight mb-1">Riwayat Mahasiswa</h3>
                        <p class="text-sm font-medium text-slate-400 transition-all group-hover:text-slate-500">Menampilkan 5 data terbaru yang baru saja didaftarkan.</p>
                    </div>
                    <a href="{{ route('students.index') }}" class="px-5 py-2.5 text-sm font-extrabold text-indigo-600 hover:text-white hover:bg-indigo-600 border-2 border-indigo-50 hover:border-indigo-600 rounded-xl transition-all duration-300 active:scale-95 shadow-sm">
                        Kelola Semua Data
                    </a>
                </div>
                
                @if($latestStudents->count() > 0)
                    <div class="overflow-x-auto p-2">
                        <table class="w-full text-left border-separate border-spacing-y-2">
                            <thead>
                                <tr class="text-slate-400">
                                    <th class="px-8 py-4 text-[10px] font-black uppercase tracking-[0.2em]">Identitas Mahasiswa</th>
                                    <th class="px-8 py-4 text-[10px] font-black uppercase tracking-[0.2em]">NIM</th>
                                    <th class="px-8 py-4 text-[10px] font-black uppercase tracking-[0.2em]">Email Instansi</th>
                                    <th class="px-8 py-4 text-[10px] font-black uppercase tracking-[0.2em] text-right">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($latestStudents as $student)
                                    <tr class="group/row">
                                        <td class="px-8 py-4 bg-white group-hover/row:bg-slate-50 rounded-l-2xl transition-all duration-300 border-y border-l border-transparent group-hover/row:border-slate-100">
                                            <div class="flex items-center gap-4">
                                                <div class="relative">
                                                    @if($student->photo)
                                                        <img src="{{ asset('storage/' . $student->photo) }}" class="w-12 h-12 rounded-xl object-cover ring-2 ring-slate-50 shadow-sm">
                                                    @else
                                                        <div class="w-12 h-12 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center font-black text-lg border border-indigo-100 shadow-sm">
                                                            {{ substr($student->name, 0, 1) }}
                                                        </div>
                                                    @endif
                                                    <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-emerald-500 border-2 border-white rounded-full"></div>
                                                </div>
                                                <span class="font-bold text-slate-700 text-sm group-hover/row:text-indigo-600 transition-colors">{{ $student->name }}</span>
                                            </div>
                                        </td>
                                        <td class="px-8 py-4 bg-white group-hover/row:bg-slate-50 transition-all duration-300 border-y border-transparent group-hover/row:border-slate-100">
                                            <span class="text-xs font-black text-slate-400 bg-slate-50 px-2 py-1 rounded-lg group-hover/row:bg-white group-hover/row:text-slate-600 transition-all">{{ $student->nim }}</span>
                                        </td>
                                        <td class="px-8 py-4 bg-white group-hover/row:bg-slate-50 transition-all duration-300 border-y border-transparent group-hover/row:border-slate-100">
                                            <span class="text-sm font-semibold text-slate-500">{{ $student->email }}</span>
                                        </td>
                                        <td class="px-8 py-4 bg-white group-hover/row:bg-slate-50 rounded-r-2xl text-right transition-all duration-300 border-y border-r border-transparent group-hover/row:border-slate-100">
                                            <a href="{{ route('students.edit', $student) }}" class="inline-flex items-center gap-1 text-indigo-600 hover:text-indigo-800 font-black text-xs uppercase tracking-widest transition-all hover:gap-2">
                                                Detail
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5-5 5M6 7l5 5-5 5"/></svg>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="p-20 flex flex-col items-center justify-center text-center">
                        <div class="w-24 h-24 bg-indigo-50 rounded-[2.5rem] flex items-center justify-center mb-8 border border-indigo-100 shadow-inner">
                            <svg class="w-10 h-10 text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                        <h4 class="text-2xl font-extrabold text-slate-800 mb-3 tracking-tight">Database Masih Steril</h4>
                        <p class="text-slate-400 font-medium max-w-sm mb-10 leading-relaxed text-sm">Belum ada jejak data mahasiswa yang terekam dalam sistem. Publikasikan data pertama Anda sekarang.</p>
                        <a href="{{ route('students.create') }}" class="px-10 py-4 bg-indigo-600 text-white font-extrabold rounded-2xl shadow-2xl shadow-indigo-200 hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-300 active:scale-95 text-xs uppercase tracking-widest">
                            Inisialisasi Data Baru
                        </a>
                    </div>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>ut>