@extends('LandingPage.layouts.main')

@php
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
@endphp

@section('content')
    		<!-- home-section 
			================================================== -->
		<section id="home-section" style="height: 100%">
			<div id="rev_slider_202_1_wrapper" class="rev_slider_wrapper" data-alias="concept1" style="background-color:#000000;padding:0px;">
				<!-- START REVOLUTION SLIDER 5.1.1RC fullscreen mode -->
				<div id="rev_slider_202_1" class="rev_slider" data-version="5.1.1RC">
					<ul>
					<!-- SLIDE  -->
					<li data-index="rs-672" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="upload/slider/slider-image-1.jpg" data-rotate="0" data-saveperformance="off" data-title="unique" data-description="">
						<img src="/images/foto1.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
						<!-- LAYER NR. 1 -->
						<div class="tp-caption tp-resizeme" 
							id="slide-672-layer-1" 
							data-x="center" 
							data-hoffset=""
							data-y="center" 
							data-voffset="" 
							data-width="['auto','auto','auto','auto']"
							data-height="['auto','auto','auto','auto']"
							data-transform_idle="o:1;"
							data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
							data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
							data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
							data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
							data-start="1000" 
							data-splitin="none" 
							data-splitout="none" 
							data-responsive_offset="on" 
							style="z-index: 5; white-space: nowrap; font-size: 48px; line-height: 60px; font-weight: 700; color: #ffffff; letter-spacing: 0px; text-align: center; background-color: rgba(0,0,0,0.5); padding: 20px 40px; border-radius: 10px;">
							Selamat Datang di SDN Kemayoran 1 Surabaya
						</div>
					</li>
					<!-- SLIDE  -->
					<li data-index="rs-673" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="upload/slider/slider-image-2.jpg" data-rotate="0" data-saveperformance="off" data-title="ideas" data-description="">
						<img src="/images/foto2.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
						<!-- LAYER NR. 1 -->
						<div class="tp-caption tp-resizeme" 
							id="slide-673-layer-1" 
							data-x="center" 
							data-hoffset="" 
							data-y="center" 
							data-voffset="" 
							data-width="['auto','auto','auto','auto']"
							data-height="['auto','auto','auto','auto']"
							data-transform_idle="o:1;"
							data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
							data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
							data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
							data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
							data-start="1000" 
							data-splitin="none" 
							data-splitout="none" 
							data-responsive_offset="on" 
							style="z-index: 5; white-space: nowrap; font-size: 48px; line-height: 60px; font-weight: 700; color: #ffffff; letter-spacing: 0px; text-align: center; background-color: rgba(0,0,0,0.5); padding: 20px 40px; border-radius: 10px;">
							Selamat Datang di SDN Kemayoran 1 Surabaya
						</div>
					</li>
						<!-- SLIDE  -->
						{{-- <li data-index="rs-674" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="upload/slider/slider-image-3.jpg" data-rotate="0" data-saveperformance="off" data-title="ideas" data-description="">
							<img src="/images/foto1.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
						</li>
						<!-- SLIDE  -->
						<li data-index="rs-675" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="upload/slider/slider-image-4.jpg" data-rotate="0" data-saveperformance="off" data-title="ideas" data-description="">
							<img src="/images/foto1.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
						</li> --}}
					</ul>
					<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
				</div>
			</div>
			<!-- END REVOLUTION SLIDER -->
		</section>
		<!-- End home section -->


		<!-- feature-section 
		================================================== -->
		<section class="feature-section">
			<div class="container">
				<div class="feature-box">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="feature-post">
								<div class="icon-holder">
									<i class="fa fa-bank"></i>
								</div>
								<div class="feature-content">
									<h2>
										Sejarah dan Visi Misi
									</h2>
									<p>Menampilkan Sejarah dan Visi Misi yang dipegang teguh oleh Sekolah</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="feature-post">
								<div class="icon-holder color2">
									<i class="fa fa-newspaper-o "></i>
								</div>
								<div class="feature-content">
									<h2>
										Pengumuman dan Berita
									</h2>
									<p>Berita terkini dan pengumuman penting dari sekolah. Tetap terupdate dengan informasi terbaru.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="feature-post">
								<div class="icon-holder color3">
									<i class="fa fa-briefcase"></i>
								</div>
								<div class="feature-content">
									<h2>
										Lowongan Kerja
									</h2>
									<p>Informasi tentang berbagai lowongan pekerjaan yang tersedia. Dapatkan peluang karir yang sesuai dengan bidang keahlian Anda</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End feature section -->



        <!-- news-section 
		================================================== -->
		<section class="news-section">
			<div class="container">
				<div class="title-section">
					<div class="left-part">
						<span>Berita</span>
						<h1>Berita Terbaru</h1>
					</div>
					<div class="right-part">
						<a class="button-one" href="{{ route('berita.index') }}">Lihat Semua Berita</a>
					</div>
				</div>
				<div class="news-box">
					<div class="row">
						@php
							$beritas = \App\Models\Berita::where('status', true)->latest()->limit(4)->get();
						@endphp
						@forelse($beritas as $berita)
							<div class="col-lg-3 col-md-6">
								<div class="blog-post">
									<a href="{{ route('berita.show', $berita->slug) }}">
										@if($berita->gambar)
											<img src="{{ Storage::url($berita->gambar) }}" 
												style="height:200px; width: 100%; object-fit: cover;" 
												alt="{{ $berita->judul }}">
										@else
											<img src="/LP/assets/images/placeholder.jpg" 
												style="height:200px; width: 100%; object-fit: cover;" 
												alt="{{ $berita->judul }}">
										@endif
									</a>
									<div class="post-content">
										<a class="category" href="{{ route('berita.show', $berita->slug) }}">Berita</a>
										<h2><a href="{{ route('berita.show', $berita->slug) }}">{{ Str::limit($berita->judul, 50) }}</a></h2>
										<div class="post-meta date">
											<i class="material-icons">access_time</i> Diposting {{ $berita->created_at->locale('id')->diffForHumans() }}
										</div>
									</div>
								</div>
							</div>
						@empty
							<div class="col-12">
								<p class="text-center text-muted">Belum ada berita yang dipublikasikan</p>
							</div>
						@endforelse
					</div>
				</div>
			</div>
		</section>
		<!-- End news section -->
        
@endsection