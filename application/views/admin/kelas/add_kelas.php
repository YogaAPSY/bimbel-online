            <!-- Bootstrap Select Css -->
            <link href="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

            <section class="content">
                <div class="container-fluid">
                    <div class="block-header">
                        <h2>B'SMART RUANG KELAS</h2>
                    </div>

                    <!-- Input -->
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2 style="font-weight: bold;color: #ad1455;font-size: 22px;">
                                        <center>FORM RUANG KELAS</center>
                                        <br>
                                    </h2>
                                </div>

                                <div class="body">
                                    <form action="#" method="post" enctype="multipart/form-data">
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                <h4 style="font-size: 17.1px;">Kode Kelas</h4>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Kode Kelas" name="kode_kelas" required autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                <h4 style="font-size: 17.1px;">Jenis Kelas</h4>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <select style="font-size: 14px;" class="form-control show-tick" name="jenis_kelas" required autocomplete="off">
                                                            <option value="" selected="" disabled="">-- Pilih Jenis Kelas --</option>
                                                            <option value="Cinta Matika Pagi">Cinta Matika Pagi</option>
                                                            <option value="Cinta Matika Siang">Cinta Matika Siang</option>
                                                            <option value="Cinta Baca Pagi">Cinta Baca Pagi</option>
                                                            <option value="Cinta Baca Siang">Cinta Baca Siang</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                <h4 style="font-size: 17.1px;">Jadwal Kelas</h4>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Jadwal Kelas" name="jadawl_kelas" required autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                <h4 style="font-size: 17.1px;">Judul Kelas</h4>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="judul Kelas" name="judul_kelas" required autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                <h4 style="font-size: 17.1px;">Deskripsi Kelas</h4>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea id="ckeditor" class="form-control" name="deskripsi_kelas" required autocomplete="off" /></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <button class="btn btn-primary pull-right" style="margin-right: 20px;font-size: 16px;height: 40px;width: 100px;">SIMPAN</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #END# Input -->

                </div>
                </div>
            </section>

            <!-- Select Plugin Js -->
            <script src="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-select/js/bootstrap-select.js"></script>