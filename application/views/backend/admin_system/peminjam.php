            <div class="row">
              <div class="col-lg-12">
                <h1 class="page-header">Data Peminjam</h1>
              </div>
              <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="text-right">
                      <div class="pull-left panel-title">Data User Peminjam</div>
                      <a class="btn btn-success btn-add" href="<?php echo base_url('admin_system/peminjam_form') ?>"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Email</th>
                          <th>Nama</th>
                          <th>Kelas</th>
                          <th>Edit</th>
                          <th>Hapus</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($data as $d1) { ?>
                          <tr>
                            <td><?php echo $d1->id_peminjam ?></td>
                            <td><?php echo $d1->email ?></td>
                            <td><?php echo $d1->name ?></td>
                            <td><?php echo $d1->kelas ?></td>
                            <td class="text-center">
                              <form action="<?php echo base_url('admin_system/peminjam_form') ?>" method="post">
                                <input type="hidden" name="id" value="<?php echo $d1->id_peminjam ?>">
                                <button class="btn btn-info btn-xs btn-edit" type="submit" title="Ubah" data-placement="top" data-toggle="tooltip"><i class="fa fa-edit"></i></button>
                              </form>
                            </td>
                            <td class="text-center">
                              <form onclick="javascript:return confirm('Anda Yakin Ingin Hapus User Ini?')" action="<?php echo base_url('admin_system/peminjam_delete') ?>" method="post">
                                <input type="hidden" name="id" value="<?php echo $d1->id_peminjam ?>">
                                <button class="btn btn-danger btn-xs btn-delete" type="submit" title="Hapus" data-placement="bottom" data-toggle="tooltip"><i class="fas fa-trash"></i></button>
                              </form>
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    <!-- /.table-responsive -->
                  </div>
                  <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
              </div>
              <!-- /.col-lg-12 -->
            </div>