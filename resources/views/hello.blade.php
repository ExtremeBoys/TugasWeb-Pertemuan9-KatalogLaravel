@extends('layouts.app')

@section('title', 'Sapaan - Tugas Rutin 9')

@section('content')
<div class="bg-white border border-slate-200 rounded-lg p-8 shadow-sm text-center max-w-lg mx-auto">
    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-lg">
        HI
    </div>
    <h1 class="text-2xl font-bold text-slate-900 mb-2">Halo, {{ $nama }}!</h1>
    <p class="text-slate-600 text-sm mb-6">Halaman ini membuktikan fitur bonus route parameter dinamis <code>/hello/{nama}</code> berjalan dengan baik.</p>
    <a href="{{ route('home') }}" class="px-4 py-2 bg-slate-100 text-slate-700 text-sm font-medium rounded hover:bg-slate-200 transition">Kembali ke Beranda</a>
</div>
@endsection
