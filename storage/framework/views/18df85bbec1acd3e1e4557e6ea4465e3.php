
<?php $__env->startSection('content'); ?>
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Pegawai</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="nip_nuptk">NiP/NUPTK</label>
                                                <input type="text" id="nip_nuptk" class="form-control" name="nip_nuptk"
                                                    placeholder="Masukkan NIP/NUPTK" />
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="nama_pegawai">Nama Pegawai</label>
                                                    <input type="text" id="nama_pegawai" class="form-control"
                                                        name="nama_pegawai" placeholder="Masukkan Nama Pegawai" />
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="tempat_lahir">Tempat Lahir</label>
                                                        <input type="text" id="tempat_lahir" class="form-control"
                                                            name="tempat_lahir" placeholder="Masukkan Tempat Lahir" />
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                                            <input type="date" id="tanggal_lahir" class="form-control"
                                                                name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" />
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="agama">Agama</label>
                                                                <input type="text" id="agama" class="form-control"
                                                                    name="agama" placeholder="Masukkan Agama" />
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="jk">Jenis Kelamin</label>
                                                                    <input type="text" id="jk"
                                                                        class="form-control" name="jk"
                                                                        placeholder="Masukkan Jenis Kelamin" />
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="alamat">Alamat</label>
                                                                        <input type="text" id="alamat"
                                                                            class="form-control" name="alamat"
                                                                            placeholder="Masukkan Alamat" />
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label for="no_telp">No Telp</label>
                                                                            <input type="number" id="no_telp"
                                                                                class="form-control" name="no_telp"
                                                                                placeholder="Masukkan No Telp" />
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label for="id_jabatan">Nama Jabatan</label>
                                                                                <input type="text" id="id_jabatan"
                                                                                    class="form-control" name="id_jabatan"
                                                                                    placeholder="Masukkan Nama Jabatan" />
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <label for="foto">Foto</label>
                                                                                    <input type="text" id="foto"
                                                                                        class="form-control" name="foto"
                                                                                        placeholder="Pilih Foto" />
                                                                                </div>
                                                                                <div
                                                                                    class="col-sm-12 d-flex justify-content-end">
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary me-1 mb-1">
                                                                                        Simpan
                                                                                    </button>
                                                                                    <button type="reset"
                                                                                        class="btn btn-light-secondary me-1 mb-1">
                                                                                        Reset
                                                                                    </button>
                                                                                    <button type="reset"
                                                                                        class="btn btn-light-secondary me-1 mb-1">
                                                                                        Batal
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Kuliah\Tugas Akhir\sipika\resources\views/inputdatapegawai.blade.php ENDPATH**/ ?>