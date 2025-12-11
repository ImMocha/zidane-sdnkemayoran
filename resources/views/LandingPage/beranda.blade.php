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
							<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
								<div class="blog-post" style="display: flex; flex-direction: column; height: 100%; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.04); overflow: hidden;">
									<a href="{{ route('berita.show', $berita->slug) }}" style="display: block;">
										<div style="width: 100%; aspect-ratio: 16/10; background: #f5f5f5; display: flex; align-items: center; justify-content: center; overflow: hidden;">
											@if($berita->gambar)
												<img src="{{ Storage::url($berita->gambar) }}" 
													style="width: 100%; height: 100%; object-fit: cover; display: block;" 
													alt="{{ $berita->judul }}">
											@else
												<img src="/images/placeholder_berita.png" 
													style="width: 100%; height: 100%; object-fit: cover; display: block;" 
													alt="{{ $berita->judul }}">
											@endif
										</div>
									</a>
									<div class="post-content d-flex flex-column" style="flex: 1 1 auto; padding: 18px 15px 16px 15px; display: flex;">
										<a class="category" href="{{ route('berita.show', $berita->slug) }}" style="font-size: 13px; font-weight: 600; color: #c90016; margin-bottom: 5px;">Berita</a>
										<h2 style="font-size: 18px; font-weight: 700; line-height: 1.3; margin: 0 0 12px 0; flex-grow: 0;">
											<a href="{{ route('berita.show', $berita->slug) }}" style="color: #252525;">{{ Str::limit($berita->judul, 50) }}</a>
										</h2>
										<div class="post-meta date mt-auto" style="font-size: 13px; color: #888;">
											<i class="material-icons" style="font-size: 15px; vertical-align: middle;">access_time</i>
											<span style="vertical-align: middle;">Diposting {{ $berita->created_at->locale('id')->diffForHumans() }}</span>
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

		<!-- social-media-section 
		================================================== -->
		<section style="padding: 80px 0; background: linear-gradient(135deg, #fdf6f7 0%, #fff 100%);">
			<div class="container">
				<div style="text-align: center; margin-bottom: 50px;">
					<span style="color: #c90016; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; font-size: 14px; display: block; margin-bottom: 15px;">Terhubung Dengan Kami</span>
					<h1 style="font-weight: 700; color: #1f2d3d; margin: 0 0 20px 0; font-size: 36px;">Ikuti Update Terbaru</h1>
					<p style="color: #6c757d; max-width: 600px; margin: 0 auto; font-size: 16px; line-height: 1.6;">Follow media sosial kami untuk dapatkan info terbaru, kegiatan sekolah, dan konten edukatif lainnya.</p>
				</div>
				<div class="row" style="margin: 0 -15px;">
					<div class="col-lg-6 col-md-6" style="padding: 15px;">
						<a href="https://youtube.com/@sdnkemayoran1sby?si=Arh4He9v7uASapdM" target="_blank" style="text-decoration: none; display: block; height: 100%;">
							<div style="background: linear-gradient(135deg, #FF0000 0%, #CC0000 100%); border-radius: 20px; padding: 40px; text-align: center; color: white; box-shadow: 0 10px 30px rgba(255, 0, 0, 0.2); height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center; transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(255, 0, 0, 0.3)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(255, 0, 0, 0.2)'">
								<div style="font-size: 64px; margin-bottom: 20px;">
									<i class="fa fa-youtube-play"></i>
								</div>
								<h3 style="font-weight: 700; margin: 0 0 15px 0; font-size: 28px; color: white;">YouTube Channel</h3>
								<p style="opacity: 0.9; margin: 0 0 20px 0; font-size: 16px; line-height: 1.6; color: white;">Tonton video kegiatan sekolah, pembelajaran, dan konten edukatif lainnya</p>
								<span style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255,255,255,0.2); padding: 10px 20px; border-radius: 25px; font-weight: 600; color: white;">
									Kunjungi Channel <i class="fa fa-arrow-right"></i>
								</span>
							</div>
						</a>
					</div>
					<div class="col-lg-6 col-md-6" style="padding: 15px;">
						<a href="https://www.instagram.com/sdnkemayoran1sby?igsh=Nmx4YjkxOW5uNDk1" target="_blank" style="text-decoration: none; display: block; height: 100%;">
							<div style="background: linear-gradient(135deg, #E4405F 0%, #C13584 50%, #833AB4 100%); border-radius: 20px; padding: 40px; text-align: center; color: white; box-shadow: 0 10px 30px rgba(225, 48, 108, 0.2); height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center; transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(225, 48, 108, 0.3)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(225, 48, 108, 0.2)'">
								<div style="font-size: 64px; margin-bottom: 20px;">
									<i class="fa fa-instagram"></i>
								</div>
								<h3 style="font-weight: 700; margin: 0 0 15px 0; font-size: 28px; color: white;">Instagram</h3>
								<p style="opacity: 0.9; margin: 0 0 20px 0; font-size: 16px; line-height: 1.6; color: white;">Lihat foto dan update kegiatan sekolah terbaru di Instagram kami</p>
								<span style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255,255,255,0.2); padding: 10px 20px; border-radius: 25px; font-weight: 600; color: white;">
									Follow Instagram <i class="fa fa-arrow-right"></i>
								</span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-- End social media section -->

		<!-- map-section 
		================================================== -->
		<section style="padding: 80px 0; background: #fff;">
			<div class="container">
				<div style="text-align: center; margin-bottom: 50px;">
					<span style="color: #c90016; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; font-size: 14px; display: block; margin-bottom: 15px;">Lokasi Sekolah</span>
					<h1 style="font-weight: 700; color: #1f2d3d; margin: 0 0 20px 0; font-size: 36px;">Kunjungi Kami</h1>
					<p style="color: #6c757d; max-width: 600px; margin: 0 auto; font-size: 16px; line-height: 1.6;">Jl. Kemayoran Baru No 88 Surabaya, 60176</p>
				</div>
				<div class="row" style="margin: 0 -15px;">
					<div class="col-12" style="padding: 15px;">
						<div style="border-radius: 20px; overflow: hidden; box-shadow: 0 20px 60px rgba(0,0,0,0.1); border: 1px solid #f0f0f0;">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.004609952439!2d112.72803499999999!3d-7.240311199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f93a62dbe4d7%3A0x40da9853155015a8!2sSDN%20Kemayoran%20Surabaya!5e0!3m2!1sid!2sid!4v1765424534135!5m2!1sid!2sid" width="100%" height="450" style="border:0; display: block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End map section -->
        
@endsection