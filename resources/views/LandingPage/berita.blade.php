@extends('LandingPage.layouts.main')

@php
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
@endphp

@section('banner')
<section class="page-banner-section" style="background: linear-gradient(135deg, #c90016 0%, #76000d 100%); padding: 90px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="page-banner-box text-white">
                    <span class="badge bg-light text-danger px-3 py-2" style="border-radius: 40px; font-weight: 600; color:#c90016 !important;">Berita & Materi Belajar</span>
                    <h1 class="mt-3 mb-3" style="font-weight: 700;color: #fff">Berita & Materi Belajar Terbaru</h1>
                    <p class="mb-0" style="max-width: 580px; font-size: 16px; line-height: 1.7;color: #fff">
                        Dapatkan informasi terkini, pengumuman penting, dan materi belajar dari sekolah.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="news-section" style="padding: 80px 0;">
    <div class="container">
        <div class="mb-5">
            <div class="d-flex justify-content-center align-items-center flex-wrap">
                <a href="{{ route('berita.index') }}" 
                   class="mr-3 btn {{ !request('kategori') ? 'btn-danger' : 'btn-outline-danger' }}" 
                   style="border-radius: 25px; padding: 10px 25px;">
                    Semua
                </a>
                <a href="{{ route('berita.index', ['kategori' => 'berita']) }}" 
                   class="mr-3 btn {{ request('kategori') == 'berita' ? 'btn-danger' : 'btn-outline-danger' }}" 
                   style="border-radius: 25px; padding: 10px 25px;">
                    Berita
                </a>
                <a href="{{ route('berita.index', ['kategori' => 'materi_belajar']) }}" 
                   class="btn {{ request('kategori') == 'materi_belajar' ? 'btn-danger' : 'btn-outline-danger' }}" 
                   style="border-radius: 25px; padding: 10px 25px;">
                    Materi Belajar
                </a>
            </div>
        </div>
        <div class="news-box">
            <div class="row">
                @forelse($beritas as $berita)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="blog-post" style="height: 100%; border-radius: 8px; box-shadow: 0 3px 14px 0 rgba(0,0,0,0.07); overflow: hidden; display: flex; flex-direction: column; background: #fff;">
                            <a href="{{ route('berita.show', $berita->slug) }}" style="display: block; width: 100%;">
                                @if($berita->gambar)
                                    <div style="width:100%; aspect-ratio: 16/9; background: #eee; display:flex; align-items:center; justify-content:center;">
                                        <img src="{{ Storage::url($berita->gambar) }}" 
                                            style="width: 100%; height: 100%; border-radius: 0; display:block; background: #fff;" 
                                            alt="{{ $berita->judul }}">
                                    </div>
                                @else
                                    <div style="width:100%; aspect-ratio: 16/9; background: #eee; display:flex; align-items:center; justify-content:center;">
                                        <img src="/images/placeholder_berita.png" 
                                            style="width: 100%; height: 100%; object-fit: contain; border-radius: 0; display:block; background: #fff;" 
                                            alt="{{ $berita->judul }}">
                                    </div>
                                @endif
                            </a>
                            <div class="post-content" style="padding: 20px; flex: 1 1 auto; display: flex; flex-direction: column;">
                                <a class="category" href="{{ route('berita.show', $berita->slug) }}">
                                    {{ $berita->kategori == 'berita' ? 'Berita' : 'Materi Belajar' }}
                                </a>
                                <h2 style="margin-top: 10px;">
                                    <a href="{{ route('berita.show', $berita->slug) }}">{{ $berita->judul }}</a>
                                </h2>
                                <p style="color: #666; margin: 10px 0;">
                                    {{ Str::limit(strip_tags($berita->isi), 100) }}
                                </p>
                                <div class="post-meta date" style="margin-top: auto;">
                                    <i class="material-icons">access_time</i> 
                                    Diposting {{ $berita->created_at->locale('id')->diffForHumans() }}
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="text-center py-5">
                            <h3 class="text-muted">Belum ada konten yang dipublikasikan</h3>
                            <p class="text-muted">Konten akan muncul di sini setelah dipublikasikan oleh admin.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
        @if($beritas->hasPages())
        <div class="mt-4 d-flex justify-content-center">
            {{ $beritas->links() }}
        </div>
        @endif
    </div>
</section>
@endsection

