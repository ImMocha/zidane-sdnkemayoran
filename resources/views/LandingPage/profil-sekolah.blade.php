@extends('LandingPage.layouts.main')

@section('banner')
<section class="page-banner-section" style="background: linear-gradient(135deg, #c90016 0%, #76000d 100%); padding: 90px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="page-banner-box text-white">
                    <span class="badge bg-light text-danger px-3 py-2" style="border-radius: 40px; font-weight: 600; color:#c90016 !important;">Profil Sekolah</span>
                    <h1 class="mt-3 mb-3" style="font-weight: 700;color: #fff">SDN Kemayoran 1 Surabaya</h1>
                    <p class="mb-0" style="max-width: 580px; font-size: 16px; line-height: 1.7;color: #fff">
                        Sekilas identitas, visi, dan misi sekolah untuk kenalin karakter, arah, dan semangat belajar bareng.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
                <div class="text-lg-end">
                    <div class="p-4 rounded-3" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(6px); border: 1px solid rgba(255,255,255,0.15);">
                        <div class="d-flex align-items-center mb-3">
                            <i class="material-icons text-white me-2">school</i>
                            <h5 class="text-white mb-0">Sekolah Literasi & Ramah Anak</h5>
                        </div>
                        <p class="text-white-50 mb-0">Belajar nyaman, karakter kuat, prestasi mantap.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<style>
    :root {
        --primary: #c90016;
        --primary-dark: #76000d;
        --soft: #fff1f3;
    }
    .info-card {
        background: #ffffff;
        border-radius: 16px;
        box-shadow: 0 18px 48px rgba(31, 45, 61, 0.08);
        border: 1px solid #f3dce0;
    }
    .pill {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 14px;
        background: var(--soft);
        border-radius: 12px;
        font-weight: 600;
        color: var(--primary);
        font-size: 13px;
    }
    .list-dashed li {
        position: relative;
        padding-left: 22px;
        margin-bottom: 10px;
    }
    .list-dashed li::before {
        content: '';
        position: absolute;
        left: 0;
        top: 12px;
        width: 10px;
        height: 2px;
        background: var(--primary);
    }
    .section-soft {
        padding: 80px 0;
        background: #fdf6f7;
    }
    .icon-bubble {
        padding: 12px;
        border-radius: 12px;
        background: rgba(201, 0, 22, 0.08);
    }
</style>



<section style="padding: 70px 0;">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-12 mb-5">
                <div class="info-card p-4 p-lg-5 h-100">
                    <p class="pill mb-3"><i class="material-icons" style="font-size:16px;">visibility</i> Visi</p>
                    {{-- <h4 style="font-weight: 700;">Mewujudkan Sekolah Literasi, Ramah Anak, Berkarakter</h4>
                    <p class="text-muted">Berlandaskan ketakwaan, prestasi, keterampilan, dan kepedulian lingkungan.</p> --}}
                    <div class="mt-3">
                        {{-- <p class="mb-1 text-muted">Pernyataan lengkap:</p> --}}
                        <h1 class="mb-0" style="line-height: 1.7;text-align: center">
                            MEWUJUDKAN SEKOLAH LITERASI, RAMAH ANAK, BERKARAKTER, BERTAQWA, BERPRESTASI, TERAMPIL, DAN PEDULI LINGKUNGAN.
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="info-card p-4 p-lg-5 h-100">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <p class="pill mb-0"><i class="material-icons" style="font-size:16px;">flag</i> Misi</p>
                        <span class="badge text-white px-3 py-2" style="border-radius: 12px; background: var(--primary);">7 Fokus Aksi</span>
                    </div>
                    <ol class="mb-0" style="padding-left: 18px; line-height: 1.8;">
                        <li class="mb-4">Membiasakan membaca bagi warga sekolah.</li>
                        <li class="mb-4">Melaksanakan pelajaran secara inklusif.</li>
                        <li class="mb-4">Membudayakan perilaku dan budi pekerti luhur.</li>
                        <li class="mb-4">Meningkatkan IMTAQ peserta didik sesuai agama yang dianut.</li>
                        <li class="mb-4">Menggali dan membina potensi bakat serta minat siswa dalam mengembangkan IPTEK.</li>
                        <li class="mb-4">Membekali peserta didik dengan kecakapan dan keterampilan hidup.</li>
                        <li class="mb-4">Mengembangkan karakter peserta didik untuk peduli dan berbudaya lingkungan.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-soft">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="info-card p-4 p-lg-5 h-100">
                    <div class="d-flex justify-content-between flex-wrap align-items-start mb-3">
                        <div class="">
                            <p class="pill mb-2"> Identitas Sekolah</p>
                            <h3 class="mb-2" style="font-weight: 700;">SDN Kemayoran 1</h3>
                            <p class="text-muted mb-0">Update singkat tentang data resmi sekolah.</p>
                        </div>
                        <span class="badge text-white px-3 py-2" style="border-radius: 12px; background: var(--primary);">Akreditasi A</span>
                    </div>
                    <div class="row gy-3">
                        <div class="col-md-6">
                            <ul class="list-unstyled list-dashed mb-0">
                                <li class="mb-4"><strong>NSS</strong>: 101056003024</li>
                                <li class="mb-4"><strong>NPSN</strong>: 20533583</li>
                                <li class="mb-4"><strong>Nama</strong>: SDN Kemayoran 1</li>
                                <li class="mb-4"><strong>Alamat</strong>: Jl. Kemayoran Baru No 88 Surabaya</li>
                                <li class="mb-4"><strong>Kode Pos</strong>: 60176</li>
                                <li class="mb-4"><strong>Tgl Berdiri</strong>: 31 Desember 1959</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled list-dashed mb-0">
                                <li class="mb-4"><strong>Status</strong>: Negeri</li>
                                <li class="mb-4"><strong>Kepala Sekolah</strong>: Indah Suprihatin, S.Pd</li>
                                <li class="mb-4"><strong>Operator</strong>: Maluki</li>
                                <li class="mb-4"><strong>Telp</strong>: 031-3545314</li>
                                <li class="mb-4"><strong>Email</strong>: sdn.kmy1.24.sby@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="info-card p-4 p-lg-5 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <div class="pill mb-0"><i class="material-icons" style="font-size:16px;">room</i> Kontak & Lokasi</div>
                    </div>
                    <p class="text-muted mb-4">Tetap terhubung sama kami untuk info terbaru atau kunjungan sekolah.</p>
                    <div class="d-flex align-items-center gap-3 mb-5">
                        <div class="icon-bubble mr-3">
                            <i class="material-icons" style="color: var(--primary);">location_on</i>
                        </div>
                        <div>
                            <p class="mb-1 text-muted">Alamat</p>
                            <h6 class="mb-0">Jl. Kemayoran Baru No 88 Surabaya, 60176</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 mb-5">
                        <div class="icon-bubble mr-3">
                            <i class="material-icons" style="color: var(--primary);">call</i>
                        </div>
                        <div>
                            <p class="mb-1 text-muted">Telepon</p>
                            <h6 class="mb-0">031-3545314</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="icon-bubble mr-3">
                            <i class="material-icons" style="color: var(--primary);">mail</i>
                        </div>
                        <div>
                            <p class="mb-1 text-muted">Email</p>
                            <h6 class="mb-0">sdn.kmy1.24.sby@gmail.com</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

