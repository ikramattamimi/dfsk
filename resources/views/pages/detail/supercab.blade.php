@extends('layouts.master')

@section('content')
    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Galeri</h5>
                <h1 class="mb-0">SUPER CAB</h1>
            </div>
            <div class="mb-5">
                <div class="row justify-content-center my-4 g-5 border rounded">
                    <h4 class="text-center">Warna</h4>
                    <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-transparent rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <a data-fancybox="warna-supercab" href="{{ asset('img/dfsk/supercab/warna/1.png') }}">
                                    <img class="w-100" src="{{ asset('img/dfsk/supercab/warna/1.png') }}" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-transparent rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <a data-fancybox="warna-supercab" href="{{ asset('img/dfsk/supercab/warna/2.png') }}">
                                    <img class="w-100" src="{{ asset('img/dfsk/supercab/warna/2.png') }}" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <nav>
                    <div class="nav nav-tabs nav-fill mb-3" id="myTab0" role="tablist">
                        <button class="nav-link active" id="exterior-tab0" data-bs-toggle="tab" data-bs-target="#exterior0" type="button" role="tab" aria-controls="exterior" aria-selected="true">
                            Exterior
                        </button>
                        <button class="nav-link" id="interior-tab0" data-bs-toggle="tab" data-bs-target="#interior0" type="button" role="tab" aria-controls="interior" aria-selected="false">
                            Interior
                        </button>
                        </ul>

                    </div>
                    <div class="tab-content" id="myTabContent0">
                        <div class="tab-pane fade show active" id="exterior0" role="tabpanel" aria-labelledby="exterior-tab0">
                            <div class="row g-5">
                                <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                                    <div class="team-item bg-transparent rounded overflow-hidden">
                                        <div class="team-img position-relative overflow-hidden">
                                            <a data-fancybox="exterior-gelora" href="{{ asset('img/dfsk/supercab/exterior/1.png') }}">
                                                <img class="w-100" src="{{ asset('img/dfsk/supercab/exterior/1.png') }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                                    <div class="team-item bg-transparent rounded overflow-hidden">
                                        <div class="team-img position-relative overflow-hidden">
                                            <a data-fancybox="exterior-gelora" href="{{ asset('img/dfsk/supercab/exterior/2.png') }}">
                                                <img class="w-100" src="{{ asset('img/dfsk/supercab/exterior/2.png') }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                                    <div class="team-item bg-transparent rounded overflow-hidden">
                                        <div class="team-img position-relative overflow-hidden">
                                            <a data-fancybox="exterior-gelora" href="{{ asset('img/dfsk/supercab/exterior/3.png') }}">
                                                <img class="w-100" src="{{ asset('img/dfsk/supercab/exterior/3.png') }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                                    <div class="team-item bg-transparent rounded overflow-hidden">
                                        <div class="team-img position-relative overflow-hidden">
                                            <a data-fancybox="exterior-gelora" href="{{ asset('img/dfsk/supercab/exterior/4.png') }}">
                                                <img class="w-100" src="{{ asset('img/dfsk/supercab/exterior/4.png') }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="interior0" role="tabpanel" aria-labelledby="interior-tab0">
                            <div class="row g-5">
                                <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                                    <div class="team-item bg-transparent rounded overflow-hidden">
                                        <div class="team-img position-relative overflow-hidden">
                                            <a data-fancybox="interior-gelora" href="{{ asset('img/dfsk/supercab/interior/1.jpeg') }}">
                                                <img class="w-100" src="{{ asset('img/dfsk/supercab/interior/1.jpeg') }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                                    <div class="team-item bg-transparent rounded overflow-hidden">
                                        <div class="team-img position-relative overflow-hidden">
                                            <a data-fancybox="interior-gelora" href="{{ asset('img/dfsk/supercab/interior/2.jpeg') }}">
                                                <img class="w-100" src="{{ asset('img/dfsk/supercab/interior/2.jpeg') }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                                    <div class="team-item bg-transparent rounded overflow-hidden">
                                        <div class="team-img position-relative overflow-hidden">
                                            <a data-fancybox="interior-gelora" href="{{ asset('img/dfsk/supercab/interior/3.jpeg') }}">
                                                <img class="w-100" src="{{ asset('img/dfsk/supercab/interior/3.jpeg') }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                                    <div class="team-item bg-transparent rounded overflow-hidden">
                                        <div class="team-img position-relative overflow-hidden">
                                            <a data-fancybox="interior-gelora" href="{{ asset('img/dfsk/supercab/interior/4.jpeg') }}">
                                                <img class="w-100" src="{{ asset('img/dfsk/supercab/interior/4.jpeg') }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="container mt-md-4 mb-5 pt-md-4">
                <div class="py-4">
                    <div>
                        <h4 class="text-uppercase pr-3 mt-4" style="text-align: left">
                            <span class="fw-bold" style="font-size: 28px; color: #58595B;">Test Drive</span>
                        </h4>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <form class="w-100" id="formTestDrive" action="#" method="POST">
                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label fw-bold" for="name">Nama<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input class="form-control" id="name" name="name" type="text" required placeholder="Nama">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label fw-bold" for="phone">No Telp<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-text"><i class="fa fa-phone"></i></div>
                                    <input class="form-control" id="phone" name="phone" type="text" required placeholder="Telp">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label fw-bold" for="email">Email</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                                    <input class="form-control" id="email" name="email" type="email" placeholder="Email">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label fw-bold" for="address">Alamat<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label fw-bold" for="date">Tanggal Test Drive<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input class="form-control" id="date" name="date" type="date" required placeholder="Tanggal">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label fw-bold" for="source">Tipe Mobil<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <select class="form-select" id="car_type" name="car_type" required>
                                    <option>GELORA</option>
                                    <option>GELORA ELECTRIC</option>
                                    <option>GLORY i-AUTO</option>
                                    <option>GLORY 560</option>
                                    <option selected>SUPER CAB</option>
                                    <option>SERES E1</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label fw-bold" for="source">Sumber</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="source" name="source" type="text" placeholder="Dari mana Anda mendapatkan informasi terkait DFSK">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <!-- Button to trigger WhatsApp message -->
                                <button class="btn btn-danger btn-block" type="submit">Kirim via WhatsApp</button>
                            </div>
                        </div>


                    </form>

                </div>
            </div>

            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Spesifikasi</h5>
                <h1 class="mb-0">SUPER CAB</h1>
            </div>

            <div class="container mt-5">
                <table class="table table-bordered mb-0 tbl-accordion">
                    <tbody>
                        <tr>
                            <td class="border-right border-left fw-bold">Model Parameter</td>
                            <td class="text-center border-right fw-bold">1.5L Gasoline</td>
                        </tr>
                        <tr>
                            <td class="border-right border-left">Price</td>
                            <td class="text-center border-right">Rp. 153,500,000<br><span class="text-danger price-info">* Jabodetabek</span></td>
                        </tr>

                        <!-- Dimension and Mass Section -->
                        <tr class="section-row" data-bs-toggle="collapse" data-bs-target="#collapseDimension" aria-expanded="false" aria-controls="collapseDimension">
                            <td class="border-right border-left fw-bold" colspan="5">
                                <a href="#collapseDimension" class="text-decoration-none" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseDimension">Dimension and Mass</a>
                            </td>
                        </tr>
                        <tr class="collapse" id="collapseDimension">
                            <td class="border-right border-left">LengthxWidthxHeight (mm)</td>
                            <td class="text-center border-right">4440x1810x1890</td>
                        </tr>
                        <tr class="collapse" id="collapseDimension">
                            <td class="border-right border-left">Cargo Space Size (mm)</td>
                            <td class="text-center border-right">2470x1670x340</td>
                        </tr>
                        <tr class="collapse" id="collapseDimension">
                            <td class="border-right border-left">Wheelbase (mm)</td>
                            <td class="text-center border-right">200</td>
                        </tr>
                        <tr class="collapse" id="collapseDimension">
                            <td class="border-right border-left">Thread (Front/Rear) (mm)</td>
                            <td class="text-center border-right">2750</td>
                        </tr>
                        <tr class="collapse" id="collapseDimension">
                            <td class="border-right border-left">Thread (Front/Rear) (mm)</td>
                            <td class="text-center border-right">1500/1500</td>
                        </tr>
                        <tr class="collapse" id="collapseDimension">
                            <td class="border-right border-left">Passengers</td>
                            <td class="text-center border-right">3</td>
                        </tr>
                        <tr class="collapse" id="collapseDimension">
                            <td class="border-right border-left">Curb Weight (kg)</td>
                            <td class="text-center border-right">1192</td>
                        </tr>
                        <tr class="collapse" id="collapseDimension">
                            <td class="border-right border-left">Loading Capacity (kg)</td>
                            <td class="text-center border-right">1268</td>
                        </tr>

                        <!-- Power Train Section -->
                        <tr class="section-row" data-bs-toggle="collapse" data-bs-target="#collapsePower" aria-expanded="true" aria-controls="collapsePower">
                            <td class="border-right border-left fw-bold" colspan="5">
                                <a href="#collapsePower" class="text-decoration-none" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapsePower">Power Train</a>
                            </td>
                        </tr>
                        <tr class="collapse" id="collapsePower">
                            <td class="border-right border-left">Engine Model</td>
                            <td class="text-center border-right">DK15</td>
                        </tr>
                        <tr class="collapse" id="collapsePower">
                            <td class="border-right border-left">Fuel Type</td>
                            <td class="text-center border-right">Gasoline</td>
                        </tr>
                        <tr class="collapse" id="collapsePower">
                            <td class="border-right border-left">Displacement (L)</td>
                            <td class="text-center border-right">1.5</td>
                        </tr>
                        <tr class="collapse" id="collapsePower">
                            <td class="border-right border-left">Power (KW) / Horse Power (ps)</td>
                            <td class="text-center border-right">75/102</td>
                        </tr>
                        <tr class="collapse" id="collapsePower">
                            <td class="border-right border-left">Max Torque (N-m/rpm)</td>
                            <td class="text-center border-right">140±5%/3200-4000</td>
                        </tr>
                        <tr class="collapse" id="collapsePower">
                            <td class="border-right border-left">Clutch</td>
                            <td class="text-center border-right">Hydraulic</td>
                        </tr>
                        <tr class="collapse" id="collapsePower">
                            <td class="border-right border-left">Fuel Tank Volume (L)</td>
                            <td class="text-center border-right">55</td>
                        </tr>
                        <tr class="collapse" id="collapsePower">
                            <td class="border-right border-left">Transmission</td>
                            <td class="text-center border-right">5MT</td>
                        </tr>

                        <!-- Chassis Section -->
                        <tr class="section-row" data-bs-toggle="collapse" data-bs-target="#collapseChassis" aria-expanded="true" aria-controls="collapseChassis">
                            <td class="border-right border-left fw-bold" colspan="5">
                                <a href="#collapseChassis" class="text-decoration-none" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseChassis">Chassis</a>
                            </td>
                        </tr>
                        <tr class="collapse" id="collapseChassis">
                            <td class="border-right border-left">Steering System</td>
                            <td class="text-center border-right">EPS</td>
                        </tr>
                        <tr class="collapse" id="collapseChassis">
                            <td class="border-right border-left">Brake</td>
                            <td class="text-center border-right">Front Disc; Rear Drum</td>
                        </tr>
                        <tr class="collapse" id="collapseChassis">
                            <td class="border-right border-left">Drive Mode</td>
                            <td class="text-center border-right">Mid Engine; Rear Drive</td>
                        </tr>
                        <tr class="collapse" id="collapseChassis">
                            <td class="border-right border-left">Suspension</td>
                            <td class="text-center border-right">Front MacPherson Independent Suspension; Rear 6-piece Leaf, Spring Suspension Non-Independent Suspension</td>
                        </tr>
                        <tr class="collapse" id="collapseChassis">
                            <td class="border-right border-left">Tire Model</td>
                            <td class="text-center border-right">185 R14C 8PR</td>
                        </tr>
                        <tr class="collapse" id="collapseChassis">
                            <td class="border-right border-left">Turning Radius (m)</td>
                            <td class="text-center border-right">5.5</td>
                        </tr>
                        <tr class="collapse" id="collapseChassis">
                            <td class="border-right border-left">Ground Clearance (mm)</td>
                            <td class="text-center border-right">174</td>
                        </tr>

                        <!-- Color Section -->
                        <tr class="section-row" data-bs-toggle="collapse" data-bs-target="#collapseColor" aria-expanded="true" aria-controls="collapseColor">
                            <td class="border-right border-left border-bottom fw-bold" colspan="5">
                                <a href="#collapseColor" class="text-decoration-none" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseColor">Color</a>
                            </td>
                        </tr>
                        <tr class="collapse" id="collapseColor">
                            <td class="border-right border-left">Color</td>
                            <td class="text-center border-right">Black (Hitam), Silver (Silver) dan White (Putih)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection

@section('js')
    <script>
        Fancybox.bind("[data-fancybox]", {});

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
    </script>
@endsection
