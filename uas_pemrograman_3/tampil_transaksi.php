<?php
require 'functions.php';
$query = query("SELECT * FROM transaksi");

?>

<?php
include "header.php";
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Tampil Transaksi</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Transaksi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>id_transaksi</th>
                                        <th>nama_transaksi</th>
                                        <th>harga</th>
                                        <th>quantity</th>
                                        <th>id_barang</th>
                                        <th>diskon</th>
                                        <th>nama pelanggan</th>
                                    </tr>
                                    <?php forEach($query as $q) :?>
                                        <tr>
                                            <td><?= $q["id_transaksi"] ?></td>
                                            <td><?= $q["nama_transaksi"] ?></td>
                                            <td>Rp.<?= $q["harga"] ?></td>
                                            <td><?= $q["qty"] ?></td>
                                            <td><?= $q["id_barang"] ?></td>
                                            <td><?= $q["diskon"] *100?>%</td>
                                            <td><?= $q["id_pelanggan"] ?></td>
                                        </tr>
                                    <?php endforeach ;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
           
            <div class="kategori-satuan">
                <a href="input_transaksi.php"><p>Input Transaksi</p></a>
            </div>

<?php
include "footer.php";
?>