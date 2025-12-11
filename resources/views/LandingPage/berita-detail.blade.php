@extends('LandingPage.layouts.main')

@php
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
@endphp

@section('banner')
<section class="page-banner-section" style="background: linear-gradient(135deg, #c90016 0%, #76000d 100%); padding: 90px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="page-banner-box text-white">
                    {{-- <span class="badge bg-light text-danger px-3 py-2" style="border-radius: 40px; font-weight: 600; color:#c90016 !important;">
                        {{ $berita->kategori == 'berita' ? 'Berita' : 'Materi Belajar' }}
                    </span> --}}
                    <h1 class="mt-3 mb-3" style="font-weight: 700;color: #fff">{{ $berita->judul }}</h1>
                        <span><i class="material-icons" style="font-size:18px; vertical-align: middle;">person</i> {{ $berita->penulis }}</span>
                        <br>
                        <span><i class="material-icons" style="font-size:18px; vertical-align: middle;">access_time</i> {{ $berita->created_at->format('d F Y') }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section style="padding: 80px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <article class="blog-post-detail">
                    @if($berita->gambar)
                        <div class="mb-4">
                            <img src="{{ Storage::url($berita->gambar) }}" 
                                alt="{{ $berita->judul }}" 
                                style="width: 100%; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        </div>
                    @endif
                    
                    <div class="post-content" style="line-height: 1.8; color: #333;">
                        {!! $berita->isi !!}
                    </div>
                </article>

                <div class="mt-5">
                    <a href="{{ route('berita.index', ['kategori' => $berita->kategori]) }}" class="button-one">
                        <i class="material-icons" style="vertical-align: middle; margin-right: 5px;">arrow_back</i>
                        Kembali ke Daftar {{ $berita->kategori == 'berita' ? 'Berita' : 'Materi Belajar' }}
                    </a>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="widget">
                        <h3 class="widget-title">{{ $berita->kategori == 'berita' ? 'Berita' : 'Materi Belajar' }} Terkini</h3>
                        <ul class="post-list">
                            @php
                                $latestBeritas = \App\Models\Berita::where('status', true)
                                    ->where('kategori', $berita->kategori)
                                    ->where('id', '!=', $berita->id)
                                    ->latest()
                                    ->limit(5)
                                    ->get();
                            @endphp
                            @forelse($latestBeritas as $latest)
                                <li>
                                    <a href="{{ route('berita.show', $latest->slug) }}">
                                        <h4>{{ Str::limit($latest->judul, 60) }}</h4>
                                        <span>{{ $latest->created_at->format('d M Y') }}</span>
                                    </a>
                                </li>
                            @empty
                                <li>Tidak ada {{ $berita->kategori == 'berita' ? 'berita' : 'materi belajar' }} lainnya</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.post-content img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin: 20px 0;
}
.post-content p {
    margin-bottom: 15px;
}
.post-content h1, .post-content h2, .post-content h3 {
    margin-top: 25px;
    margin-bottom: 15px;
}
.widget {
    background: #f8f9fa;
    padding: 25px;
    border-radius: 12px;
    margin-bottom: 30px;
}
.widget-title {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #c90016;
}
.post-list {
    list-style: none;
    padding: 0;
}
.post-list li {
    padding: 15px 0;
    border-bottom: 1px solid #e0e0e0;
}
.post-list li:last-child {
    border-bottom: none;
}
.post-list a {
    color: #333;
    text-decoration: none;
}
.post-list h4 {
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 5px;
}
.post-list span {
    font-size: 12px;
    color: #999;
}
</style>
@endsection

