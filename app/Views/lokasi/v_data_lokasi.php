<div class="row">
    <div class="col-12">
        <table class="table table-bordered" id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lokasi</th>
                    <th>Alamat Lokasi</th>
                    <th>Koordinat</th>
                    <th>Foto</th>
                    <th>Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php

                use Kint\Zval\Value;

                $no = 1;
                foreach ($lokasi as $key => $value) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value['nama_lokasi'] ?></td>
                        <td><?= $value['alamat_lokasi'] ?></td>
                        <td><?= $value['latitude'] ?>,<?= $value['longitude'] ?></td>
                        <td><img src="<?= base_url('foto/' . $value['foto_lokasi']) ?>" width="200px"></td>
                        <td>
                            <div style="display: flex; flex-direction: row; gap: 5px;">

                                <a href="<?= base_url('lokasi/editLokasi/' . $value['id_lokasi']) ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a><br><br>
                                <a href="<?= base_url('lokasi/deleteLokasi/' . $value['id_lokasi']) ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data?')"><i class="fa-solid fa-trash"></i></a>
                            </div>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

</div>