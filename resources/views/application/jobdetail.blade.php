@extends('layout.main')

@section('content')
<div class="content">
    <div class="d-flex justify-content-between mx-5 mt-5 px-5">
        <div>
            <h5 class="fw-bold"><i class="fas fa-arrow-left fa-xs me-2"></i>
                Detail Lowongan
            </h5>
        </div>
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        Lowongan
                    </li>
                    <li class="breadcrumb-item" aria-current="page"><a href="/lowongan" class="text-secondary">
                        Daftar Lowongan
                    </a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Detail Lowongan
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="d-flex mx-5 mt-5 px-5">
        <div class="w-75 me-4">
            <div class="d-flex justify-content-between mb-4">
                <div>
                    <h4 class="fw-bold">
                        PT. NeuronWorks Indonesia
                    </h4>
                    <h3 class="fw-bold mt-4">
                        Graphic Designer
                    </h3>
                    <span>
                        Bandung, Jawa Barat - DiPosting Pada 03 Oktober 2022
                    </span>
                </div>
                <div class="">
                    <span class="text-secondary">Desain & Kreatif</span>
                </div>
            </div>
            <hr>
            <div class="mt-4">
                <h6 class="fw-bold">
                    Deskripsi Tugas
                </h6>
                <ul class="mb-5">
                    <li>Membuat dan mendesain berbagai materi untuk media cetak dan digital</li>
                    <li>Membangun komunikasi visual yang kuat</li>
                    <li>Bekerja sama dengan divisi pemasaran</li>
                    <li>Menetapkan arahan kreatif untuk perusahaan serta pedoman merek</li>
                    <li>Memastikan hasil akhir grafis dan tata letak menarik secara visual dan sesuai merek</li>
                    <li>3 Tahun pengalaman dalam Desain Grafis atau peran serupa</li>
                    <li>Lebih disukai Gelar Sarjana dalam jurusan terkait desain</li>
                    <li>mahir dalam Adobe Photoshop da Coreldraw</li>
                    <li>Portofolio dalam desain</li>
                    <li>Perhatian yang tinggi terhadap detail dan rasa estetika desain</li>
                    <li>Mampu menerjemahkan desain singkat ke hasil visual yang sebenarnya</li>
                    <li>Berbahasa inggris aktif dan pasif</li>
                </ul>
                <h6 class="fw-bold mb-3">
                    Informasi Lainnya
                </h6>
                <div class="d-flex">
                    <div class="me-5">
                        <h6 class="fw-bold mb-2">
                            Tingkat Sederajat
                        </h6>
                        <p>
                            Uang Tunjangan, BPJS, BPJSTK, Work Life Balance
                        </p>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-2">
                            Ukuran Perusahaan
                        </h6>
                        <p class="mb-4">
                            50 - 200 Karyawan
                        </p>
                        <h6 class="fw-bold mb-2">
                            Tingkat & Jenis Pekerjaan
                        </h6>
                        <p class="mb-4">
                        Pegawai tetap (Non-manajemen)
                        </p>
                    </div>
                </div>
                <h6 class="fw-bold">Skill Yang Harus DiKuasai</h6>
                <span class="badge bg-light m-1 text-dark">#design</span>
                <span class="badge bg-light m-1 text-dark">#uiux</span>
                <span class="badge bg-light m-1 text-dark">#marvelapp</span>
                <span class="badge bg-light m-1 text-dark">#adobe</span>
                <span class="badge bg-light m-1 text-dark">#photoshop</span>
                <span class="badge bg-light m-1 text-dark">#illustrator</span>
                <hr class="my-4">
                <div class="d-flex justify-content-between">
                    <div>
                        <button class="btn bg-primary text-white py-3 px-4 rounded-pill">
                            <i class="fas fa-arrow-up-right-from-square me-2"></i>
                            Kirim Lamaran Pekerjaan
                        </button>
                    </div>
                    <div>
                        <button class="btn bg-warning text-white py-3 px-4 rounded-pill me-3" data-bs-toggle="modal" data-bs-target="#formModal">
                            <i class="fas fa-pen-to-square me-2"></i>
                            Edit Lowongan
                        </button>
                        <button class="btn bg-danger text-white py-3 px-4 rounded-pill me-3" data-bs-toggle="modal" data-bs-target="#formModal">
                            <i class="fas fa-trash me-2"></i>
                            Hapus
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div style="width: 350px">
            <div class="mt-5 p-4 bg-light rounded">
                <h6 class="fw-bold mb-4">
                    Pekerjaan serupa
                </h6>
                <div>
                    <p>
                        PT. Kalbe Farma
                    </p>
                    <h5 class="fw-bold">
                        UX Engineer
                    </h5>
                    <p class="text-secondary">IDR 6.000.000 - 12.000.000</p>
                    <button class="btn bg-light-2 rounded-pill py-1 px-3">
                        Pelajari Selengkapnya
                    </button>
                    <hr>
                </div>
                <div>
                    <p>
                        PT. Kalbe Farma
                    </p>
                    <h5 class="fw-bold">
                        UX Engineer
                    </h5>
                    <p class="text-secondary">IDR 6.000.000 - 12.000.000</p>
                    <button class="btn bg-light-2 rounded-pill py-1 px-3">
                        Pelajari Selengkapnya
                    </button>
                    <hr>
                </div>
                <div>
                    <p>
                        PT. Kalbe Farma
                    </p>
                    <h5 class="fw-bold">
                        UX Engineer
                    </h5>
                    <p class="text-secondary">IDR 6.000.000 - 12.000.000</p>
                    <button class="btn bg-light-2 rounded-pill py-1 px-3">
                        Pelajari Selengkapnya
                    </button>
                    <hr>
                </div>
                <div>
                    <p>
                        PT. Kalbe Farma
                    </p>
                    <h5 class="fw-bold">
                        UX Engineer
                    </h5>
                    <p class="text-secondary">IDR 6.000.000 - 12.000.000</p>
                    <button class="btn bg-light-2 rounded-pill py-1 px-3">
                        Pelajari Selengkapnya
                    </button>
                    <hr>
                </div>
            </div>
        </div>
        <div class=""></div>
    </div>
</div>
@endsection