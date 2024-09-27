@extends('layouts.master')

@section('content')
    <!-- Carousel Start -->
    <section id="home">
        <div class="container-fluid p-0 mt-lg-5 pt-lg-4">

            <div class="carousel slide carousel-fade" id="header-carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="{{ asset('img/dfsk/carousel-1.jpg') }}" alt="Image">
                        <!-- <div class="carousel-caption"></div> -->
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="{{ asset('img/dfsk/carousel-2.jpg') }}" alt="Image">
                        <!-- <div class="carousel-caption"></div> -->

                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="{{ asset('img/dfsk/carousel-3.jpg') }}" alt="Image">
                        <!-- <div class="carousel-caption"></div> -->

                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="{{ asset('img/dfsk/carousel-4.jpg') }}" alt="Image">
                        <!-- <div class="carousel-caption"></div> -->

                    </div>
                </div>
                <button class="carousel-control-prev" data-bs-target="#header-carousel" data-bs-slide="prev" type="button">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" data-bs-target="#header-carousel" data-bs-slide="next" type="button">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


        <!-- About Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="section-title position-relative pb-3 mb-5">
                            <h5 class="fw-bold text-primary text-uppercase">DFSK Bejat</h5>
                            <h1 class="mb-0">Info Harga, Kalkulator Kredit, Promo & Diskon</h1>
                        </div>
                        <p class="mb-4">DFSK Bejat melayani pembelian mobil DFSK Glory I-Auto, Glory 560, Glory 580, Gelora, Super Cab.
                            Proses Pembelian Bisa Dilakukan Dirumah Tanpa Keluar Rumah, Diproses Cepat, Mudah dan Aman.
                            Area Layanan : Kota Bandung, Kab.Bandung Barat, Cimahi, Kab.Bandung, dan Kota lainnya.
                        </p>
                        <div class="row g-0 mb-3">
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Pembelian Tunai atau Kredit</i></h5>
                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Program Promo dan Diskon Dealer</h5>
                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Simulasi Kalkulator Kredit dan Paket Kredit Murah</h5>
                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Daftar Harga Terupdate</h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Test Drive</h5>
                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Brosur DFSK</h5>
                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Tukar Tambah</h5>
                            </div>
                        </div>
                        <a href="https://wa.me/+6289647918986" target="_blank">
                        <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                                <div class="d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                                    <img src="{{ asset('img/dfsk/whatsapp_icon.png') }}" alt="whatsapp" width="60px">
                                </div>
                                <div class="ps-4">
                                    <h5 class="mb-2">Info Marketing</h5>
                                    <h4 class="text-primary mb-0">089647918986</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-5" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('img/dfsk/kantor.jpg') }}" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    </section>
    <!-- Carousel End -->

    <section id="harga">
        @include('components.type')
    </section>

    <!-- Test Drive Start -->
    <section id="testdrive">
        @include('components.testdrive')
    </section>
    <!-- Test Drive End -->

    <!-- Blog Start -->
    <section id="promo">
        @include('components.promo')
    </section>
    <!-- Blog Start -->
@endsection

@section('js')
    <script>
        document.querySelector('#formTestDrive').addEventListener('submit', (e) => {
            e.preventDefault();

            // Get form values
            const carType = document.getElementById('car_type').value;
            const name = document.getElementById('name').value;
            const phone = document.getElementById('phone').value;
            const email = document.getElementById('email').value;
            const address = document.getElementById('address').value;
            const date = document.getElementById('date').value;
            const source = document.getElementById('source').value;

            // Format the message template
            const whatsappMessage =
                `Halo, saya ingin mengajukan test drive, dengan detail sebagai berikut:\n` +
                `Nama: ${name}\n` +
                `No Telp: ${phone}\n` +
                `Email: ${email}\n` +
                `Alamat: ${address}\n` +
                `Tanggal: ${date}\n` +
                `Tipe Mobil: ${carType}`;
            `Sumber: ${source}\n`

            // Encode the message to be URL-safe
            const encodedMessage = encodeURIComponent(whatsappMessage);

            // WhatsApp API URL with the pre-filled message
            const whatsappURL = `https://wa.me/+6289647918986?text=${encodedMessage}`;

            // Redirect the user to the WhatsApp URL
            window.open(whatsappURL, '_blank');

            return false
        })

        document.addEventListener('DOMContentLoaded', function() {
            const menuItems = document.querySelectorAll('.nav-item');
            const sections = document.querySelectorAll('section');
            let isScrolling = false;

            // Function to activate the menu item
            function setActiveMenuItem(id) {
                menuItems.forEach(item => {
                    item.classList.toggle('active', item.dataset.target === id);
                });
            }

            // Function to handle menu item click
            function handleMenuClick(event) {
                event.preventDefault();
                const targetId = this.getAttribute('data-target');
                document.getElementById(targetId).scrollIntoView({
                    behavior: 'smooth'
                });
                setActiveMenuItem(targetId);
            }

            // Attach click event listeners to menu items
            menuItems.forEach(item => {
                item.addEventListener('click', handleMenuClick);
            });

            // Handle scroll event
            window.addEventListener('scroll', function() {
                if (isScrolling) return;
                isScrolling = true;

                let currentSectionId = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.offsetHeight;
                    if (window.scrollY >= sectionTop - sectionHeight / 3 && window.scrollY < sectionTop + sectionHeight / 3) {
                        currentSectionId = section.id;
                    }
                });
                setActiveMenuItem(currentSectionId);

                // Allow scrolling event to trigger again
                setTimeout(() => {
                    isScrolling = false;
                }, 100);
            });
        });
    </script>

    </script>
@endsection
