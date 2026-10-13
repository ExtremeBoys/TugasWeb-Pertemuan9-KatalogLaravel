@extends('layouts.app')

@section('title', 'Beranda - Tugas Rutin 9')

@section('content')
<div class="space-y-6">
    <div class="bg-white border border-slate-200 rounded-lg p-8 shadow-sm">
        <h1 class="text-3xl font-bold text-slate-900 mb-3">{{ $judul }}</h1>
        <p class="text-slate-600 text-base mb-6 leading-relaxed">{{ $deskripsi }}</p>
        <div class="flex flex-wrap gap-3">
            <a href="{{ route('about') }}" class="px-5 py-2.5 bg-blue-600 text-white font-medium text-sm rounded hover:bg-blue-700 transition">Lihat Halaman About</a>
            <a href="{{ route('contact') }}" class="px-5 py-2.5 bg-slate-100 text-slate-700 font-medium text-sm rounded border border-slate-300 hover:bg-slate-200 transition">Hubungi Kami</a>
        </div>
    </div>

    <div class="bg-white border border-slate-200 rounded-lg p-6 shadow-sm">
        <h2 class="text-lg font-semibold text-slate-800 mb-4">Fitur dan Modul yang Diimplementasikan:</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ($fitur as $item)
                <div class="p-4 bg-slate-50 border border-slate-200 rounded text-sm text-slate-700 flex items-start gap-3">
                    <span class="w-2 h-2 rounded-full bg-blue-500 mt-1.5 flex-shrink-0"></span>
                    <span>{{ $item }}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
