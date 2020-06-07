    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.4/dist/sweetalert2.all.min.js"></script>
      <?php if ($this->session->flashdata('message')): ?>
        <script type="text/javascript">
          swal({
            title: "BERHASIL !!!",
            text: "<?php echo $this->session->flashdata('message'); ?>",
            showConfirmButton: true,
            type: 'success'
          });
        </script>
      <?php endif; ?>
      <?php if ($this->session->flashdata('abort')): ?>
        <script type="text/javascript">
          swal({
            title: "ERROR !!!",
            text: "<?php echo $this->session->flashdata('abort'); ?>",
            showConfirmButton: true,
            type: 'error'
          });
        </script>
      <?php endif; ?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Kelas B'Smart</h2>
            </div>

             <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="font-size: 22px;color:#ad1455;font-weight: bold;">
                              <center>List Kelas</center>
                            </h2> <br><br>
                            <a href="#">
	                            <button type="button" class="btn btn-info waves-effect">
		                            <i class="material-icons">add</i>
		                            <span>TAMBAH</span>
	                        	</button>
                        	</a>
                        </div>

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>A</th>
                                            <th>B</th>
                                            <th>C</th>
                                            <th>D</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <a href="" data-toggle="tooltip" data-placement="top" title="Edit"><i style="color:#00b0e4;" class="material-icons">description</i></a>&nbsp;&nbsp;
                                                <a href="" data-toggle="tooltip" data-placement="top" title="Delete" onclick="javasciprt: return confirm('Yakin Ingin Menghapus ?')"><i style="color:red;" class="material-icons">delete</i></a>
                                            </td>
                                        </tr>
                                     <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- #END# Basic Examples -->
            </div>
        </div>
    </section>





