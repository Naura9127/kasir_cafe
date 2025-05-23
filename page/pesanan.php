<style type="text/css">
  body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color:rgb(236, 211, 178);
}
</style>

<div class="row">
    <center>
        <h2>Pesanan</h2>
    </center>
    <div class="col-lg-5">
        <div class="panel panel-primary">
            <div class="panel-heading">form pesanan</div>
            <div class="panel-body">
        <from>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>ID Pelanggan</label>
                        <input type="text" name="" class="form-control" readonly="readonly" value="PELANGGAN001">
                    </div>

                    <div class="form-group">
                        <label>Nama Pelanggan</label>
                        <input type="text" name="" class="form-control" value="PELANGGAN001">
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="" class="form-control">
                            <option value="">- Jenis Kelamin - </option>
                            <option value="P">Perempuan</option>
                            <option value="L">Laki-Laki</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>No Telepon</label>
                        <input type="number" name="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="" class="form-control"></textarea>
                    </div>

            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Menu</label>
                    <select name="" class="form-control">
                        <option value="">- Pilih Menu -</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="number" name="" class="form-control">
                </div>

                <div class="form-group">
                    <input type="submit" name="" class="btn btn-md btn-primary" value="Simpan">
                </div>

            </div>
        </form>
            </div>
        </div>
    </div>

    <div class="col-lg-7">
        <div class="panel panel-default">
            <div class="panel-heading">
                Daftar Pesanan Hari ini
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Menu</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                            <th>Opsi</th>
                            
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

    </div>

</div>