<div class="container mt-2 bg-light">
    <br>
    <h3 class="text-center mt-2 mb-2">Lengkapi Profile Pendaftaran</h3>
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <?php echo form_open_multipart('home/daftar'); ?>
        <div class="row">


            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap" value="<?= $this->session->flashdata('nama'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="nama">Alamat</label>
                    <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control"><?= $this->session->flashdata('alamat'); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="nowa">No WA</label>
                    <input type="number" name="nowa" id="nowa" class="form-control" placeholder="No WA" value="<?= $this->session->flashdata('nowa'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select name="jk" id="jk" class="form-control" required>
                        <option value="<?= $this->session->flashdata('jk'); ?>">Pilih Jenis Kelamin</option>
                        <option value="L">Laki - laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Example@email.com" value="<?= $this->session->flashdata('email'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="bidang">Bidang yang ingin digeluti</label>
                    <select name="bidang" id="bidang" class="form-control" required>
                        <option value="<?= $this->session->flashdata('bidang'); ?>">Pilih Bidang</option>
                        <option value="Programming">Programming</option>
                        <option value="Jaringan">Jaringan</option>
                        <option value="IoT">IoT</option>
                        <option value="Multimedia">Multimedia</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <div class="form-row">
                        <div class="form-group">
                            <img src="<?= base_url() ?>assets/img/user.png" width="160px" id="gambar_nodin" class="img-thumbnail rounded">
                        </div>
                        <div class="form-group">
                            <div class="custom-file" class="col-sm-12">
                                <input type="file" class="custom-file-input" id="preview_gambar" name="gambar" required>
                                <label class="custom-file-label" for="preview_gambar" id="preview">Pilih Gambar</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-block mb-3">Daftar</button>
        <br>
        </form>
    </div>
</div>
<script>
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#gambar_nodin').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#preview_gambar").change(function() {
        bacaGambar(this);
    });
</script>