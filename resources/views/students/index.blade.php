<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <h2 class="font-semibold text-2xl text-slate-800 dark:text-slate-200 leading-tight">
                {{ __('Data Mahasiswa') }}
            </h2>
            <a href="{{ route('students.create') }}" 
               class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-slate-800 transition ease-in-out duration-150 shadow-lg shadow-indigo-500/30">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                Tambah Mahasiswa
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-8 p-5 rounded-2xl bg-emerald-50 border border-emerald-100 text-emerald-800 flex items-center shadow-sm animate-fade-in-down">
                    <div class="p-2 bg-emerald-100 rounded-lg mr-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <span class="font-bold">{{ session('success') }}</span>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] sm:rounded-[2rem] border border-slate-100 transition-all duration-300">
                <div class="p-0 overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50/50 border-b border-slate-100">
                                <th class="px-8 py-5 text-xs font-extrabold uppercase tracking-widest text-slate-400">Mahasiswa</th>
                                <th class="px-8 py-5 text-xs font-extrabold uppercase tracking-widest text-slate-400">NIM</th>
                                <th class="px-8 py-5 text-xs font-extrabold uppercase tracking-widest text-slate-400">Kontak</th>
                                <th class="px-8 py-5 text-xs font-extrabold uppercase tracking-widest text-slate-400">Alamat</th>
                                <th class="px-8 py-5 text-xs font-extrabold uppercase tracking-widest text-slate-400 text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            @forelse($students as $student)
                                <tr class="hover:bg-indigo-50/30 transition-all duration-200 group">
                                    <td class="px-8 py-6 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="h-14 w-14 flex-shrink-0 relative">
                                                @if($student->photo)
                                                    <img class="h-14 w-14 rounded-2xl object-cover ring-4 ring-slate-50 group-hover:ring-indigo-100 transition-all shadow-sm" src="{{ asset('storage/' . $student->photo) }}" alt="">
                                                @else
                                                    <div class="h-14 w-14 rounded-2xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white font-extrabold text-xl ring-4 ring-slate-50 group-hover:ring-indigo-100 transition-all shadow-md">
                                                        {{ strtoupper(substr($student->name, 0, 1)) }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-base font-bold text-slate-800 group-hover:text-indigo-600 transition-colors">{{ $student->name }}</div>
                                                <div class="text-xs font-medium text-slate-400">ID: #{{ str_pad($student->id, 4, '0', STR_PAD_LEFT) }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6 whitespace-nowrap">
                                        <span class="inline-flex items-center px-3 py-1 rounded-xl text-xs font-extrabold bg-slate-100 text-slate-600 border border-slate-200 group-hover:bg-indigo-100 group-hover:text-indigo-700 group-hover:border-indigo-200 transition-all">
                                            {{ $student->nim }}
                                        </span>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="flex flex-col gap-1 text-sm font-semibold text-slate-600">
                                            <div class="flex items-center gap-1.5">
                                                <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                                {{ $student->email }}
                                            </div>
                                            <div class="flex items-center gap-1.5 text-slate-400 text-xs">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                                {{ $student->phone }}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="text-sm font-medium text-slate-500 truncate max-w-[200px]" title="{{ $student->address }}">
                                            {{ $student->address ?? 'Alamat belum diatur' }}
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-8 py-20 text-center">
                                        <div class="flex flex-col items-center">
                                            <div class="w-20 h-20 bg-slate-50 rounded-[2rem] flex items-center justify-center mb-6 border border-slate-100">
                                                <svg class="w-10 h-10 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                                </svg>
                                            </div>
                                            <p class="text-xl font-bold text-slate-800 tracking-tight">Belum Ada Data</p>
                                            <p class="text-sm font-medium text-slate-400 max-w-xs mt-2">Daftar mahasiswa masih kosong. Silahkan tambahkan data baru menggunakan tombol di atas.</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if($students->hasPages())
                    <div class="px-8 py-6 bg-slate-50/50 border-t border-slate-100">
                        {{ $students->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
