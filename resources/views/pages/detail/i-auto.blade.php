@extends('layouts.master')

@section('content')
    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Galeri</h5>
                <h1 class="mb-0">GLORY i-AUTO</h1>
            </div>
            <div class="mb-5">
                <div class="row justify-content-center my-4 g-5 border rounded">
                    <h4 class="text-center">Warna</h4>
                    <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-transparent rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <a data-fancybox="warna-i-auto" href="{{ asset('img/dfsk/i-auto/warna/1.png') }}">
                                    <img class="w-100" src="{{ asset('img/dfsk/i-auto/warna/1.png') }}" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-transparent rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <a data-fancybox="warna-i-auto" href="{{ asset('img/dfsk/i-auto/warna/2.png') }}">
                                    <img class="w-100" src="{{ asset('img/dfsk/i-auto/warna/2.png') }}" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-transparent rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <a data-fancybox="warna-i-auto" href="{{ asset('img/dfsk/i-auto/warna/3.png') }}">
                                    <img class="w-100" src="{{ asset('img/dfsk/i-auto/warna/3.png') }}" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-transparent rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <a data-fancybox="warna-i-auto" href="{{ asset('img/dfsk/i-auto/warna/4.png') }}">
                                    <img class="w-100" src="{{ asset('img/dfsk/i-auto/warna/4.png') }}" />
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
                                            <a data-fancybox="exterior-gelora" href="{{ asset('img/dfsk/i-auto/exterior/1.png') }}">
                                                <img class="w-100" src="{{ asset('img/dfsk/i-auto/exterior/1.png') }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                                    <div class="team-item bg-transparent rounded overflow-hidden">
                                        <div class="team-img position-relative overflow-hidden">
                                            <a data-fancybox="exterior-gelora" href="{{ asset('img/dfsk/i-auto/exterior/2.png') }}">
                                                <img class="w-100" src="{{ asset('img/dfsk/i-auto/exterior/2.png') }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                                    <div class="team-item bg-transparent rounded overflow-hidden">
                                        <div class="team-img position-relative overflow-hidden">
                                            <a data-fancybox="exterior-gelora" href="{{ asset('img/dfsk/i-auto/exterior/3.png') }}">
                                                <img class="w-100" src="{{ asset('img/dfsk/i-auto/exterior/3.png') }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                                    <div class="team-item bg-transparent rounded overflow-hidden">
                                        <div class="team-img position-relative overflow-hidden">
                                            <a data-fancybox="exterior-gelora" href="{{ asset('img/dfsk/i-auto/exterior/4.png') }}">
                                                <img class="w-100" src="{{ asset('img/dfsk/i-auto/exterior/4.png') }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                                    <div class="team-item bg-transparent rounded overflow-hidden">
                                        <div class="team-img position-relative overflow-hidden">
                                            <a data-fancybox="exterior-gelora" href="{{ asset('img/dfsk/i-auto/exterior/5.png') }}">
                                                <img class="w-100" src="{{ asset('img/dfsk/i-auto/exterior/5.png') }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                                    <div class="team-item bg-transparent rounded overflow-hidden">
                                        <div class="team-img position-relative overflow-hidden">
                                            <a data-fancybox="exterior-gelora" href="{{ asset('img/dfsk/i-auto/exterior/6.png') }}">
                                                <img class="w-100" src="{{ asset('img/dfsk/i-auto/exterior/6.png') }}" />
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
                                            <a data-fancybox="interior-gelora" href="{{ asset('img/dfsk/i-auto/interior/1.png') }}">
                                                <img class="w-100" src="{{ asset('img/dfsk/i-auto/interior/1.png') }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                                    <div class="team-item bg-transparent rounded overflow-hidden">
                                        <div class="team-img position-relative overflow-hidden">
                                            <a data-fancybox="interior-gelora" href="{{ asset('img/dfsk/i-auto/interior/2.png') }}">
                                                <img class="w-100" src="{{ asset('img/dfsk/i-auto/interior/2.png') }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                                    <div class="team-item bg-transparent rounded overflow-hidden">
                                        <div class="team-img position-relative overflow-hidden">
                                            <a data-fancybox="interior-gelora" href="{{ asset('img/dfsk/i-auto/interior/3.png') }}">
                                                <img class="w-100" src="{{ asset('img/dfsk/i-auto/interior/3.png') }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                                    <div class="team-item bg-transparent rounded overflow-hidden">
                                        <div class="team-img position-relative overflow-hidden">
                                            <a data-fancybox="interior-gelora" href="{{ asset('img/dfsk/i-auto/interior/4.png') }}">
                                                <img class="w-100" src="{{ asset('img/dfsk/i-auto/interior/4.png') }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                                    <div class="team-item bg-transparent rounded overflow-hidden">
                                        <div class="team-img position-relative overflow-hidden">
                                            <a data-fancybox="interior-gelora" href="{{ asset('img/dfsk/i-auto/interior/5.png') }}">
                                                <img class="w-100" src="{{ asset('img/dfsk/i-auto/interior/5.png') }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                                    <div class="team-item bg-transparent rounded overflow-hidden">
                                        <div class="team-img position-relative overflow-hidden">
                                            <a data-fancybox="interior-gelora" href="{{ asset('img/dfsk/i-auto/interior/7.png') }}">
                                                <img class="w-100" src="{{ asset('img/dfsk/i-auto/interior/7.png') }}" />
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
                                    <option selected>GLORY i-AUTO</option>
                                    <option>GLORY 560</option>
                                    <option>SUPER CAB</option>
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
                <h1 class="mb-0">GLORY i-AUTO</h1>
            </div>

            <div class="container mt-5">
                <table class="table table-bordered mb-0 tbl-accordion">
                    <tbody>
                        <!-- Model Information -->
                        <tr>
                            <td class="border-right border-left fw-bold">Model Parameter</td>
                            <td class="text-center border-right fw-bold">Glory I-AUTO</td>
                        </tr>
                        <tr>
                            <td class="border-right border-left">Price</td>
                            <td class="text-center border-right">Rp. 365,200,000<br><span class="text-danger price-info">* Jabodetabek</span></td>
                        </tr>

                        <!-- General Specifications Section -->
                        <tr class="section-row" data-bs-toggle="collapse" data-bs-target="#collapseGeneralSpec" aria-expanded="false" aria-controls="collapseGeneralSpec">
                            <td class="border-right border-left fw-bold" colspan="2">
                                <a href="#" class="text-decoration-none">General Specifications</a>
                            </td>
                        </tr>
                        <tr class="collapse" id="collapseGeneralSpec">
                            <td class="border-right border-left">Length x Width x Height (mm)</td>
                            <td class="text-center border-right">4680 x 1845 x 1715</td>
                        </tr>
                        <tr class="collapse" id="collapseGeneralSpec">
                            <td class="border-right border-left">Wheelbase (mm)</td>
                            <td class="text-center border-right">2780</td>
                        </tr>
                        <tr class="collapse" id="collapseGeneralSpec">
                            <td class="border-right border-left">Thread (Front/Rear) (mm)</td>
                            <td class="text-center border-right">1570/1572</td>
                        </tr>
                        <tr class="collapse" id="collapseGeneralSpec">
                            <td class="border-right border-left">Curb Weight (kg)</td>
                            <td class="text-center border-right">1510</td>
                        </tr>

                        <!-- Engine Section -->
                        <tr class="section-row" data-bs-toggle="collapse" data-bs-target="#collapseEngine" aria-expanded="true" aria-controls="collapseEngine">
                            <td class="border-right border-left fw-bold" colspan="2">
                                <a href="#" class="text-decoration-none">Engine</a>
                            </td>
                        </tr>
                        <tr class="collapse" id="collapseEngine">
                            <td class="border-right border-left">Displacement (L)</td>
                            <td class="text-center border-right">1498</td>
                        </tr>
                        <tr class="collapse" id="collapseEngine">
                            <td class="border-right border-left">Max Power (kW)</td>
                            <td class="text-center border-right">110(150/5600)</td>
                        </tr>
                        <tr class="collapse" id="collapseEngine">
                            <td class="border-right border-left">Max Torque (Nm/rpm)</td>
                            <td class="text-center border-right">220/1800-4000</td>
                        </tr>
                        <tr class="collapse" id="collapseEngine">
                            <td class="border-right border-left">Transmission Type</td>
                            <td class="text-center border-right">CVT</td>
                        </tr>
                        <tr class="collapse" id="collapseEngine">
                            <td class="border-right border-left">Fuel Tank Capacity (L)</td>
                            <td class="text-center border-right">58 L</td>
                        </tr>

                        <!-- Chassis Section -->
                        <tr class="section-row" data-bs-toggle="collapse" data-bs-target="#collapseChassis" aria-expanded="true" aria-controls="collapseChassis">
                            <td class="border-right border-left fw-bold" colspan="2"><a href="#" class="text-decoration-none">Chassis</a>
                            </td>
                        </tr>
                        <tr class="collapse" id="collapseChassis">
                            <td class="border-right border-left">Suspension Front/Rear</td>
                            <td class="text-center border-right">McPherson Independent Independent Suspension With Stabilizer / Torsional Beam With Stabilizer</td>
                        </tr>
                        <tr class="collapse" id="collapseChassis">
                            <td class="border-right border-left">Brake System (Front/Rear)</td>
                            <td class="text-center border-right">Disc Brake with Red Color Caliper / Disc brake with color caliper</td>
                        </tr>
                        <tr class="collapse" id="collapseChassis">
                            <td class="border-right border-left">EPS (Electric Power Steering)</td>
                            <td class="text-center border-right"><i class="fa fa-check"></i></td>
                        </tr>
                        <tr class="collapse" id="collapseChassis">
                            <td class="border-right border-left">Turning Radius (m)</td>
                            <td class="text-center border-right">5,75</td>
                        </tr>
                        <tr class="collapse" id="collapseChassis">
                            <td class="border-right border-left">Wheel Type / Tyres</td>
                            <td class="text-center border-right">Aluminium Sporty Wheels /225 /55 R18</td>
                        </tr>

                        <!-- Exterior Section -->
                        <tr class="section-row" data-bs-toggle="collapse" data-bs-target="#collapseExterior" aria-expanded="true" aria-controls="collapseExterior">
                            <td class="border-right border-left fw-bold" colspan="2"><a href="#" class="text-decoration-none">Exterior</a>
                            </td>
                        </tr>
                        <tr class="collapse" id="collapseExterior">
                            <td class="border-right border-left">Headlight Leveling</td>
                            <td class="text-center border-right">Electric Height Adjustment</td>
                        </tr>
                        <tr class="collapse" id="collapseExterior">
                            <td class="border-right border-left">Lamp Type</td>
                            <td class="text-center border-right">Full LED Technology</td>
                        </tr>
                        <tr class="collapse" id="collapseExterior">
                            <td class="border-right border-left">Foglamp</td>
                            <td class="text-center border-right">LED With Cornering light</td>
                        </tr>
                        <tr class="collapse" id="collapseExterior">
                            <td class="border-right border-left">LED Day Time Running Light</td>
                            <td class="text-center border-right">LED Equipped with Front Headlamp</td>
                        </tr>
                        <tr class="collapse" id="collapseExterior">
                            <td class="border-right border-left">Grille Design</td>
                            <td class="text-center border-right">Infinite Starlight Design</td>
                        </tr>
                        <tr class="collapse" id="collapseExterior">
                            <td class="border-right border-left">Side Mirror</td>
                            <td class="text-center border-right">Electronic and Heated , Auto Retractable with 360-degree surround view camera</td>
                        </tr>
                        <tr class="collapse" id="collapseExterior">
                            <td class="border-right border-left">Shark Fin Antenna</td>
                            <td class="text-center border-right"><i class="fa fa-check"></i></td>
                        </tr>
                        <tr class="collapse" id="collapseExterior">
                            <td class="border-right border-left">Rear Combination Lamp</td>
                            <td class="text-center border-right">LED Combination Lights (Hammer Design)</td>
                        </tr>
                        <tr class="collapse" id="collapseExterior">
                            <td class="border-right border-left">High Mount Stop Lamp</td>
                            <td class="text-center border-right">LED</td>
                        </tr>
                        <tr class="collapse" id="collapseExterior">
                            <td class="border-right border-left">Exhaust</td>
                            <td class="text-center border-right">Double Exhaust Decorative Cover</td>
                        </tr>
                        <tr class="collapse" id="collapseExterior">
                            <td class="border-right border-left">Rear Parking Sensor</td>
                            <td class="text-center border-right">4-Point</td>
                        </tr>
                        <tr class="collapse" id="collapseExterior">
                            <td class="border-right border-left">Rear Fog Lamp</td>
                            <td class="text-center border-right"><i class="fa fa-check"></i></td>
                        </tr>

                        <!-- Interior Section -->
                        <tr class="section-row" data-bs-toggle="collapse" data-bs-target="#collapseInterior" aria-expanded="true" aria-controls="collapseInterior">
                            <td class="border-right border-left border-bottom fw-bold" colspan="2"><a href="#" class="text-decoration-none">Interior</a>
                            </td>
                        </tr>
                        <tr class="collapse" id="collapseInterior">
                            <td class="border-right border-left">Material Dashboard</td>
                            <td class="text-center border-right">Black Soft Touch</td>
                        </tr>
                        <tr class="collapse" id="collapseInterior">
                            <td class="border-right border-left">Dashboard Panel</td>
                            <td class="text-center border-right">Wood Panel</td>
                        </tr>
                        <tr class="collapse" id="collapseInterior">
                            <td class="border-right border-left">Instrument Panel</td>
                            <td class="text-center border-right">9" Touch Screen Display</td>
                        </tr>
                        <tr class="collapse" id="collapseInterior">
                            <td class="border-right border-left">Interior Light Type</td>
                            <td class="text-center border-right">LED</td>
                        </tr>
                        <tr class="collapse" id="collapseInterior">
                            <td class="border-right border-left">Rear Console Box</td>
                            <td class="text-center border-right">With Cup Holder</td>
                        </tr>
                        <tr class="collapse" id="collapseInterior">
                            <td class="border-right border-left">Sun Visor</td>
                            <td class="text-center border-right">With Mirror</td>
                        </tr>
                        <tr class="collapse" id="collapseInterior">
                            <td class="border-right border-left">Seat Material</td>
                            <td class="text-center border-right">Leather</td>
                        </tr>
                        <tr class="collapse" id="collapseInterior">
                            <td class="border-right border-left">Driver Seat Adjustment</td>
                            <td class="text-center border-right">Electric</td>
                        </tr>
                        <tr class="collapse" id="collapseInterior">
                            <td class="border-right border-left">Passenger Seat Adjustment</td>
                            <td class="text-center border-right">Electric</td>
                        </tr>
                        <tr class="collapse" id="collapseInterior">
                            <td class="border-right border-left">Second Row Seat Adjustment</td>
                            <td class="text-center border-right">Adjustable</td>
                        </tr>
                        <tr class="collapse" id="collapseInterior">
                            <td class="border-right border-left">Third Row Seat Adjustment</td>
                            <td class="text-center border-right">Adjustable</td>
                        </tr>
                        <tr class="collapse" id="collapseInterior">
                            <td class="border-right border-left">Front Armrest</td>
                            <td class="text-center border-right">Yes</td>
                        </tr>
                        <tr class="collapse" id="collapseInterior">
                            <td class="border-right border-left">Rear Armrest</td>
                            <td class="text-center border-right">Yes</td>
                        </tr>
                        <tr class="collapse" id="collapseInterior">
                            <td class="border-right border-left">Luggage Capacity</td>
                            <td class="text-center border-right">Maximum 1400L with folded 2nd and 3rd row</td>
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
