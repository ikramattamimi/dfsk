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

                    {{-- Promo --}}
                    <div class="col-12 col-lg-7">
                        <div class="nv-content-wrap entry-content">
                            <h2 class="wp-block-heading"><strong>Promo DFSK Bandung Agustus 202</strong>4</h2>
                            <p><strong></strong>Promo khusus DFSK di bulan Agustus untuk setiap pembelian cash dan kredit mobil baru DFSK hanya di DFSK Bandung. Dapatkan Harga terbaik di setiap pembelian cash dan kredit mulai dari DP 30 Jutaan unit DFSK Glory 560, Glory 580, Gelora dan supercab.</p>
                            <ul class="wp-block-list">
                                <li>
                                    <strong>GELORA BLIND VAN</strong>
                                    <br>TDP 30 Juta’an
                                    <br>Angsuran 4 Juta’an
                                </li>
                                <li>
                                    <strong>GELORA AMBULANCE JENAZAH</strong>
                                    <br>TDP 40 Juta’an
                                    <br>Angsuran 5 Juta’an
                                </li>
                                <li>
                                    <strong>GELORA AMBULANCE EKONOMI</strong>
                                    <br>TDP 40 Juta’an
                                    <br>Angsuran 4 Juta’an
                                </li>
                                <li>
                                    <strong>SUPER CAB 1.5 L GASOLINE AC</strong>
                                    <br>TDP 30 Juta’an
                                    <br>Angsuran 3 Juta’an
                                </li>
                                <li>
                                    <strong>SUPER CAB 1.3L TURBO DIESEL AC</strong>
                                    <br>TDP 30 Juta’an
                                    <br>Angsuran 4 Juta’an
                                </li>
                            </ul>
                            <p>Sebelum promo berakhir, segera kunjungi&nbsp;<strong><em>Dealer Mobil DFSK Bandung</em></strong>&nbsp;hubungi&nbsp;<strong>Bejat Sales Executive DFSK</strong>&nbsp;di no&nbsp;<a href="tel:+6289647918986"><strong>089647918986</strong>&nbsp;</a>yang siap membantu Anda.</p>
                            <ul class="wp-block-list">
                                <li><em>Promo DFSK Bandung Spesial Kemerdekaan Agustus 2024</em></li>
                                <li><em>Promo khusus area Bandung dan sekitarnya</em></li>
                                <li><em>Syarat dan ketentuan berlaku</em></li>
                            </ul>
                            <p>Informasi lebih lengkapnya, silahkan hubungi :</p>
                            <a href="https://wa.me/+6289647918986" target="_blank">
                                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                                    <div class="d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                                        <img src="{{ asset('img/dfsk/whatsapp_icon.png') }}" alt="whatsapp" width="60px">
                                    </div>
                                    <div class="ps-4">
                                        <h5 class="mb-2">Bejat</h5>
                                        <h4 class="text-primary mb-0">089647918986</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    {{-- End Promo --}}

                    {{-- Kalkulator --}}
                    <div class="col-12 col-lg-5">
                        <h2>Kalkulator Kredit DFSK</h2>
                        <div class="card bg-light p-3">
                            <div class="row mb-3">
                                <div class="col-3 col-form-label">
                                    <label for="model">Model :</label>
                                </div>
                                <div class="col">
                                    <select class="form-select" id="model" name="model" aria-required="true" required="required" onchange="ftipe(this)">
                                        <option value="Pilih Model">Pilih Model</option>
                                        <option value="Glory I-Auto">Glory I-Auto</option>
                                        <option value="Glory 580">Glory 580</option>
                                        <option value="Gelora">Gelora</option>
                                        <option value="Glory 560">Glory 560</option>
                                        <option value="Super Cab">Super Cab</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-3 col-form-label">
                                    <label for="tipe">Tipe :</label>
                                </div>
                                <div class="col">
                                    <select class="form-select" id="tipe" name="tipe" aria-required="true" required="required" onchange="fharga(this)"></select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-3 col-form-label">
                                    <label for="harga">Harga :</label>
                                </div>
                                <div class="col">
                                    <input class="form-control" id="harga" name="harga" value="" aria-required="true" aria-invalid="false" readonly="readonly" required="required">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-3 col-form-label">
                                    <label for="tdpin">Total DP :</label>
                                </div>
                                <div class="col">
                                    <input class="form-control" id="tdpin" name="tdpin" type="tel" value="" aria-required="true" aria-invalid="false" style="text-align: right;" onkeyup="convertToRupiah(this);" required="required">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-3 col-form-label">
                                    <label for="tenor">Tenor :</label>
                                </div>
                                <div class="col">
                                    <select class="form-select" id="tenor" name="tenor" aria-required="true" required="required" onchange="ftenor(this)">
                                        <option value="Pilih">Pilih</option>
                                        <option value="06">6 Bulan</option>
                                        <option value="1">1 Tahun</option>
                                        <option value="2">2 Tahun</option>
                                        <option value="3">3 Tahun</option>
                                        <option value="4">4 Tahun</option>
                                        <option value="5">5 Tahun</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-3 col-form-label">
                                    <label for="asur">Asuransi :</label>
                                </div>
                                <div class="col">
                                    <select class="form-select" id="asur" name="asur" aria-required="true" required="required" onchange="asurt(this)">
                                        <option value="allr">BCAF</option>
                                        <option value="komb">Maybank</option>
                                        <option value="tlo">MTF</option>
                                        <option value="komb">CIMB</option>
                                        <option value="tlo">MUF</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-3 col-form-label">
                                    <input class="btn btn-primary" id="tblcalc" name="tblcalc" type="button" value="Kalkulasi" onclick="getcalc()" readonly="readonly">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div id="kalkulasi"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Kalkulator --}}
                </div>
            </div>
        </div>
        <!-- About End -->
    </section>
    <!-- Carousel End -->

    <section id="type">
        @include('components.type')
    </section>

    <!-- Test Drive Start -->
    <section id="testdrive">
        @include('components.testdrive')
    </section>
    <!-- Test Drive End -->

    <!-- Blog Start -->
    {{-- <section id="promo">
        @include('components.promo')
    </section> --}}
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

    {{-- Kalkulator --}}
    <script>
        // Sample prices for each model and type
        const prices = {
            "Glory I-Auto": {
                "type1": 250000000,
                "type2": 270000000,
            },
            "Glory 580": {
                "type1": 300000000,
                "type2": 320000000,
            },
            "Gelora": {
                "type1": 150000000,
            },
            "Glory 560": {
                "type1": 260000000,
            },
            "Super Cab": {
                "type1": 200000000,
            }
        };

        // Update type options based on selected model
        function ftipe(selectElement) {
            const model = selectElement.value;
            const tipeSelect = document.getElementById('tipe');

            tipeSelect.innerHTML = ''; // Clear previous options

            if (prices[model]) {
                Object.keys(prices[model]).forEach((type) => {
                    const option = document.createElement('option');
                    option.value = type;
                    option.textContent = type;
                    tipeSelect.appendChild(option);
                });
            }
        }

        // Update price based on selected type
        function fharga(selectElement) {
            const model = document.getElementById('model').value;
            const tipe = selectElement.value;
            const hargaInput = document.getElementById('harga');

            if (prices[model] && prices[model][tipe]) {
                hargaInput.value = prices[model][tipe];
            } else {
                hargaInput.value = '';
            }
        }

        // Convert input value to Rupiah format
        function convertToRupiah(input) {
            let value = input.value.replace(/[^0-9]/g, ''); // Remove non-numeric characters
            input.value = value.replace(/\B(?=(\d{3})+(?!\d))/g, "."); // Add dots for thousands
        }

        // Calculate the monthly installment and display the result
        function getcalc() {
            const harga = parseInt(document.getElementById('harga').value);
            const totalDP = parseInt(document.getElementById('tdpin').value.replace(/\./g, '')); // Remove dots
            const tenor = parseInt(document.getElementById('tenor').value);

            if (!harga || !totalDP || !tenor) {
                alert("Silakan lengkapi semua informasi.");
                return;
            }

            const sisaPinjaman = harga - totalDP;
            const bunga = 0.05; // Example interest rate of 5%
            const monthlyInstallment = (sisaPinjaman * (1 + bunga * tenor)) / (tenor * 12);

            document.getElementById('kalkulasi').innerHTML = `Angsuran per bulan: Rp ${monthlyInstallment.toLocaleString('id-ID')}`;
        }

        // Update the calculation based on selected tenor (optional)
        function ftenor(selectElement) {
            // Additional functionality can be added here if needed
        }

        // Update the insurance selection (optional)
        function asurt(selectElement) {
            // Additional functionality can be added here if needed
        }
    </script>
@endsection
