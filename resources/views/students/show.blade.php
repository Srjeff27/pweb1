<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <h2 class="font-semibold text-2xl text-slate-800 leading-tight">
                {{ __('Detail Mahasiswa') }}
            </h2>
            <div class="flex items-center gap-3">
                <a href="{{ route('students.index') }}" 
                   class="inline-flex items-center px-4 py-2 bg-slate-100 border border-transparent rounded-lg font-semibold text-xs text-slate-600 uppercase tracking-widest hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Kembali
                </a>
                @can('update', $student)
                <a href="{{ route('students.edit', $student) }}" 
                   class="inline-flex items-center px-4 py-2 bg-amber-50 border border-amber-200 rounded-lg font-semibold text-xs text-amber-600 uppercase tracking-widest hover:bg-amber-100 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                    Edit
                </a>
                @endcan
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] sm:rounded-[2rem] border border-slate-100">
                <div class="p-8 sm:p-10">
                    <div class="flex flex-col md:flex-row gap-8 items-start">
                        <!-- Photo Section -->
                        <div class="shrink-0 flex flex-col items-center">
                            @if($student->photo)
                                <img class="h-48 w-48 object-cover rounded-3xl border-8 border-slate-50 shadow-md" src="{{ asset('storage/' . $student->photo) }}" alt="Foto {{ $student->name }}" />
                            @else
                                <div class="h-48 w-48 rounded-3xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white font-extrabold text-6xl shadow-md border-8 border-slate-50">
                                    {{ strtoupper(substr($student->name, 0, 1)) }}
                                </div>
                            @endif
                        </div>

                        <!-- Info Section -->
                        <div class="flex-grow w-full">
                            <div class="border-b border-slate-100 pb-6 mb-6">
                                <h3 class="text-3xl font-bold text-slate-800">{{ $student->name }}</h3>
                                <div class="mt-2 flex items-center gap-3">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-bold bg-indigo-50 text-indigo-700 border border-indigo-100">
                                        NIM: {{ $student->nim }}
                                    </span>
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold bg-slate-100 text-slate-600 border border-slate-200">
                                        ID: #{{ str_pad($student->id, 4, '0', STR_PAD_LEFT) }}
                                    </span>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-6 gap-x-8">
                                <div>
                                    <div class="text-sm font-medium text-slate-400 uppercase tracking-wider mb-1">Email</div>
                                    <div class="flex items-center text-slate-700 font-semibold text-lg">
                                        <svg class="w-5 h-5 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                        {{ $student->email }}
                                    </div>
                                </div>

                                <div>
                                    <div class="text-sm font-medium text-slate-400 uppercase tracking-wider mb-1">No. Telepon</div>
                                    <div class="flex items-center text-slate-700 font-semibold text-lg">
                                        <svg class="w-5 h-5 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                        {{ $student->phone }}
                                    </div>
                                </div>

                                <div class="md:col-span-2">
                                    <div class="text-sm font-medium text-slate-400 uppercase tracking-wider mb-1">Alamat Lengkap</div>
                                    <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100 text-slate-700 font-medium leading-relaxed">
                                        {{ $student->address ?? 'Alamat belum diatur untuk mahasiswa ini.' }}
                                    </div>
                                </div>

                                <div class="md:col-span-2 pt-4 border-t border-slate-100 flex items-center justify-between text-sm text-slate-400 font-medium">
                                    <div>Ditambahkan pada: {{ $student->created_at->format('d M Y, H:i') }}</div>
                                    @if($student->updated_at != $student->created_at)
                                        <div>Terakhir diubah: {{ $student->updated_at->diffForHumans() }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
