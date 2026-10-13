@extends('layouts.app')

@section('title', 'Tentang Aplikasi - Tugas Rutin 9')

@section('content')
<div class="space-y-6">
    <div class="bg-white border border-slate-200 rounded-lg p-6 shadow-sm">
        <h1 class="text-2xl font-bold text-slate-900 mb-2">Tentang Aplikasi</h1>
        <p class="text-slate-600 text-sm">Halaman ini menampilkan informasi profil aplikasi dari array data dinamis controller.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white border border-slate-200 rounded-lg p-6 shadow-sm space-y-4">
            <h2 class="text-lg font-semibold text-slate-800 border-b border-slate-100 pb-2">Informasi Akademik</h2>
            <div class="space-y-2 text-sm">
                <div class="flex justify-between py-1 border-b border-slate-50">
                    <span class="text-slate-500">Aplikasi</span>
                    <span class="font-medium text-slate-800">{{ $profil['nama_aplikasi'] }}</span>
                </div>
                <div class="flex justify-between py-1 border-b border-slate-50">
                    <span class="text-slate-500">Mata Kuliah</span>
                    <span class="font-medium text-slate-800">{{ $profil['mata_kuliah'] }}</span>
                </div>
                <div class="flex justify-between py-1 border-b border-slate-50">
                    <span class="text-slate-500">Semester</span>
                    <span class="font-medium text-slate-800">{{ $profil['semester'] }}</span>
                </div>
                <div class="flex justify-between py-1">
                    <span class="text-slate-500">Pengembang</span>
                    <span class="font-medium text-slate-800">{{ $profil['pengembang']['nama'] }} ({{ $profil['pengembang']['status'] }})</span>
                </div>
            </div>
        </div>

        <div class="bg-white border border-slate-200 rounded-lg p-6 shadow-sm space-y-4">
            <h2 class="text-lg font-semibold text-slate-800 border-b border-slate-100 pb-2">Teknologi yang Digunakan</h2>
            <ul class="space-y-2 text-sm text-slate-700">
                @foreach ($profil['teknologi'] as $tech)
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                        <span>{{ $tech }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
