<div class="modal fade" id="formGuruModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Form input Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="form-group row">
                                <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nip" class="col-sm-4 col-form-label">Nip</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nip" placeholder="NIP" name="nip">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jk" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="jk" id="jkl" value="L">
                                        <label for="jkl" class="form-check-label">Laki-laki</label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="radio" name="jk" id="jkp" value="P">
                                        <label for="jkp" class="form-check-label">Perempuan</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tempatLahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="tempatLahir" placeholder="Tempat Lahir" name="tempatLahir">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nik" class="col-sm-4 col-form-label">NIK</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nik" placeholder="Nik" name="nik">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="agama" class="col-sm-4 col-form-label">Agama</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="agama" placeholder="Agama" name="agama">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" id="alamat" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>