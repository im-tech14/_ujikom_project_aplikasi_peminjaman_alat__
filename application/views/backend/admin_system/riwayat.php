            <div class="row">
              <div class="col-lg-12">
                <h1 class="page-header">Riwayat Peminjaman</h1>
              </div>
              <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="text-right">
                      <div class="pull-left panel-title">Riwayat Peminjaman Barang</div>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-eraser"></i> Clear History
                      </button>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Kelas</th>
                          <th>Alat</th>
                          <th>Merk</th>
                          <th>No.Seri</th>
                          <th>Jumlah</th>
                          <th>Satuan</th>
                          <th>Keterangan</th>
                          <th>Tanggal Pinjam</th>
                          <th>Tanggal Kembali</th>
                          <th>Status</th>
                          <th>Hapus</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $d1) { ?>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d1->name_peminjam ?></td>
                            <td><?php echo $d1->kelas ?></td>
                            <td><?php echo $d1->name_alat ?></td>
                            <td><?php echo $d1->merk ?></td>
                            <td><?php echo $d1->desc ?></td>
                            <td><?php echo $d1->jml ?></td>
                            <td><?php echo $d1->satuan ?></td>
                            <td><?php echo $d1->ket ?></td>
                            <td><?php echo $d1->tgl_pinjam ?></td>
                            <td class="text-center">
                              <?php if ($d1->tgl_kembali == '0000-00-00 00:00:00') echo 'N/A';
                              else echo $d1->tgl_kembali; ?>
                            </td>
                            <td>
                              <?php if ($d1->status == '0') echo "<div class='text-danger'>Pinjam Ditolak</div>";
                              elseif ($d1->status == '1') echo "<div class='text-success'>Dikembalikan</div>"; ?>
                            </td>
                            <td class="text-center">
                              <form onclick="javascript:return confirm('Anda Yakin Ingin Hapus Riwayat Ini?')" action="<?php echo base_url('admin_system/riwayat_delete') ?>" method="post">
                                <input type="hidden" name="id" value="<?php echo $d1->id_pinjam ?>">
                                <buttonn class="btn btn-danger btn-delete btn-xs" type="submit" title="Hapus" data-placement="top" data-toggle="tooltip"><i class="fas fa-trash"></i></buttonn>
                              </form>
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    <!-- /.table-responsive -->
                  </div>
                  <!-- /.panel-body -->
                  <div class="panel-footer">
                    <!-- <form action="<?php echo base_url('admin_system/exportExcel') ?>" method="post">
                      <button class="btn btn-info btn-add pull-left" href="<?php echo base_url('admin_system/exportExcel') ?>"><i class="fas fa-file-export"></i>
                        Export Excel</button>
                    </form>

                    <button class="btn btn-danger ml-4" href="<?php echo base_url('admin_system/riwayat_print') ?>"><i class="fas fa-print"></i> Print</button> -->
                    <a class="btn btn-danger ml-4" href="<?php echo base_url('admin_system/excel') ?>"><i class="fas fa-print"></i> Excel</a>
                  </div>
                  <!-- /.panel-footer -->
                </div>
                <!-- /.panel -->
              </div>
              <!-- /.col-lg-12 -->
            </div>



            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <h3>Apa anda yakin ingin menghapus riwayat ini?</h3>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a class="btn btn-danger btn-add" href="<?php echo base_url('admin_system/riwayat_clear') ?>"><i class="fas fa-eraser"></i> Clear History</a>
                  </div>
                </div>
              </div>
            </div>