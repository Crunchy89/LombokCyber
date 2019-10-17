<div class="container mt-2 bg-light">
    <h1 class="text-center mt-2 mb-2">Daftar Calon Anggota</h1>


    <table class="table table-striped table-sm table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Foto</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">No WA</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Email</th>
                <th scope="col">Bidang</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($calon as $row) : ?>
                <tr>
                    <th scope="row"><?= $i++ ?></th>
                    <td><img src="<?= base_url('assets/img/foto/') . $row['gambar'] ?>" width="50px;" alt=""></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['alamat'] ?></td>
                    <td><?= $row['nowa'] ?></td>
                    <td><?= $row['jk'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['bidang'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>

</div>