<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <!-- Slick Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <style>
        .testimonial-item {
            transition: transform 0.3s ease-in-out;
            border: 1px solid #ddd;
            /* Tambahkan border untuk memperjelas kotaknya */
            border-radius: 10px;
            /* Sudut kotak lebih bulat */
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            /* Memberikan efek bayangan pada kotak */
            height: 100%;
        }

        .testimonial-item:hover {
            transform: scale(1.05);
            /* Membesarkan sedikit saat hover */
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            /* Menambah bayangan saat hover */
        }

        .testimonial-item img {
            transition: transform 0.3s ease-in-out;
        }

        .testimonial-item:hover img {
            transform: scale(1.1);
            /* Zoom gambar saat hover */
        }

        .testimonial-item .p-4 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /* Memusatkan konten dalam kotak */
            text-align: center;
            /* Memusatkan teks */
        }

        .testimonial-item .ps-3 h5 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .testimonial-item .ps-3 p {
            font-size: 16px;
            font-style: italic;
            margin-bottom: 0;
        }

        .testimoni-slider .slick-slide {
            display: flex;
            justify-content: center;
        }

        /* Mengatur tampilan border kotak */
        .testimoni-slider {
            max-width: 900px;
            /* Membatasi lebar slider */
            margin: 0 auto;
            /* Memusatkan slider */
        }
    </style>



</head>

<body>
    @extends('layouts.landing')

    @section('title', 'Landing Page')

    @section('content')
    <!-- HeroSection -->
    <div class="full-width-header py-5 mb-5" style="background-color: #1a1a1a;"> <!-- Dark background color -->
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                @foreach ($heroSections as $hero)
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 text-white animated slideInLeft">{{ $hero->judul }}</h1> <!-- Dynamic title -->
                    <p class="text-white animated slideInLeft mb-4 pb-2">{{ $hero->penjelasan }}</p> <!-- Dynamic description -->
                    <a href="{{ route('reservasi.create') }}" class="btn btn-primary">Buat Reservasi</a>
                </div>
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <!-- Display image dynamically -->
                    @if($hero->gambar)
                    <img class="img-fluid" src="{{ Storage::url($hero->gambar) }}" alt="Hero Image">
                    @else
                    <img class="img-fluid" src="img/hero.png" alt="Default Hero Image">
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- HeroSection End -->


    <!-- About Us Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center g-4">
                <div class="col-lg-8 col-md-10 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-info-circle text-primary mb-4"></i>
                            <h5 class="text-center">About Us</h5> <!-- Centered title -->
                            <p class="text-center">{{ $aboutus->penjelasan }}</p> <!-- Dynamically displaying the penjelasan -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us End -->



    <!-- Menu Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Popular Haircuts</h5>
                <h1 class="mb-5">Most Popular Haircuts</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <!-- Popular Tab (will display jenis_pangkas) -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                            <i class="fa fa-coffee fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Popular</small>
                                <h6 class="mt-n1 mb-0">Haircuts</h6>
                            </div>
                        </a>
                    </li>
                    <!-- Static tabs removed for simplicity -->
                </ul>
                <div class="tab-content">
                    <!-- Popular Haircuts Tab -->
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            @foreach($galeriPangkas as $item)
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <!-- Image of the haircut -->
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('storage/' . $item->gambar) }}" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <!-- Jenis Pangkas (Haircut type) -->
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>{{ $item->jenis_pangkas }}</span>
                                            <span class="text-primary">${{ $item->harga }}</span>
                                        </h5>
                                        <small class="fst-italic">{{ $item->penjelasan }}</small>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                @foreach ($services as $service) <!-- Loop untuk menampilkan setiap layanan -->
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <!-- Ikon layanan, bisa diganti sesuai dengan data -->
                            <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                            <h5>{{ $service->jenis_service }}</h5> <!-- Menampilkan jenis layanan -->
                            <p>{{ $service->detail }}</p> <!-- Menampilkan detail layanan -->
                            <p><strong>Harga:</strong> {{ $service->harga }}</p> <!-- Menampilkan harga layanan -->

                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->



    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation End -->

    <!-- Testimoni Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Our Clients</h5>
                <h1 class="mb-5 text-dark">What Our Clients Say</h1>
            </div>

            <!-- Tombol Tambah Testimoni -->
            <div class="text-center mb-4">
                <a href="{{ route('testimoni.create') }}" class="btn btn-primary">Tambah Testimoni</a>
            </div>

            <div class="testimoni-slider">
                @foreach($testimoni as $testimoni)
                <div class="testimonial-item rounded pt-3">
                    <div class="p-4" style="background-color: #f9f9f9;">
                        <div class="d-flex align-items-center mb-3">
                            <!-- Gambar Testimoni -->
                            
                            <div class="ps-3">
                                <h5 class="text-dark">{{ $testimoni->nama }}</h5>
                                <p class="fst-italic text-dark">"{{ $testimoni->pesansaran }}"</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimoni End -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                    <a class="btn btn-link" href="#">About Us</a>
                    <a class="btn btn-link" href="#">Contact Us</a>
                    <a class="btn btn-link" href="#">Reservation</a>
                    <a class="btn btn-link" href="#">Privacy Policy</a>
                    <a class="btn btn-link" href="#">Terms & Condition</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ $informasi->alamat }}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ $informasi->nomor }}</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ $informasi->email }}</p>
                </div>
                
                
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Dimensi Hair Studio</a>, All Right Reserved.
                        Designed By <a class="border-bottom" href="#">Kelompok 8</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="#">Home</a>
                            <a href="#">Cookies</a>
                            <a href="#">Help</a>
                            <a href="#">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <script>
        $(document).ready(function() {
            $('.testimoni-slider').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true, // Agar berjalan otomatis
                autoplaySpeed: 3000, // Waktu untuk berganti slide (3 detik)
                arrows: true, // Menampilkan navigasi panah
                dots: true, // Menampilkan navigasi dot
                pauseOnHover: true, // Menghentikan slide ketika mouse hover
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>
    @endsection



</body>

</html>