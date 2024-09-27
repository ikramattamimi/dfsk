<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5">
            <h5 class="fw-bold text-primary text-uppercase">Test Drive</h5>
            <h1 class="mb-0">Ajukan Test Drive</h1>
        </div>
        <div class="row justify-content-center mt-md-4 mb-5 pt-md-4">
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
                                <option value="">Pilih mobil</option>
                                <option>GELORA</option>
                                <option>GELORA ELECTRIC</option>
                                <option>GLORY i-AUTO</option>
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
    </div>
</div>
