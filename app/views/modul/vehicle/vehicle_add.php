  <!-- Content Header (Page header) -->
  <section class="content-header">
  <h1>
         Kendaraan
        <small>Manajemen</small>
  </h1>
  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Vehicle</a></li>
        <li class="active">Add</li>
  </ol>
</section>
    <!-- Main content -->
    <section class="content">
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-12 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tambah Kendaraan</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <form role="form" id="vehicle-add-form">
                <div class="form-group">
                  <label for="vehicle-add-number">Nomor Polisi</label>
                  <input type="text" class="form-control" name="vehicle-add-number" id="vehicle-add-number" placeholder="">
                </div>

                <div class="form-group">
                <label>Merk Kendaraan</label>
                <select class="form-control" name="vehicle-add-brand" id="vehicle-add-brand">
                  <option value="Honda">Honda</option>
                  <option value="Suzuki">Suzuki</option>
                  <option value="Kawasaki">Kawasaki</option>
                  <option value="Yamaha">Yamaha</option>
                  <option value="Lainnya">Lainnya..</option>
                </select>
                </div>
                
                <div class="form-group">
                  <label for="vehicle-add-name">Nama Kendaraan</label>
                  <input type="text" class="form-control" name="vehicle-add-name" id="vehicle-add-name" placeholder="Nama motor dan warna, misal : BeAt FI Merah, New Vario 125 FI Hitam">
                </div>

                <div class="form-group">
                <label>Jenis Transmisi</label>
                <select class="form-control" name="vehicle-add-transmission" id="vehicle-add-transmission">
                  <option value="Matic">Matic</option>
                  <option value="Manual">Manual</option>
                  <option value="Kopling">Kopling</option>
                </select>
                </div>
                
                <div class="form-group">
                  <label for="vehicle-add-year">Tahun Keluaran</label>
                  <input type="text" class="form-control" name="vehicle-add-year" id="vehicle-add-year" placeholder="Tahun pabrikan. Misal : 2007, 2010">
                </div>
                
                <div class="form-group  ">
                  <label for="vehicle-add-rentalrates">Harga Sewa</label>
                  <input type="text" class="form-control" name="vehicle-add-rentalrates" id="vehicle-add-rentalrates" placeholder="Harga per 24 jam sesuai ketentuan">
                </div>

                <div class="form-group">
                    <label for="vehicle-add-kilometer">Kilometer</label>
                    <input type="text" class="form-control" name="vehicle-add-kilometer" id="vehicle-add-kilometer" placeholder="Kilometer saat data diinputkan">
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" id="vehicle-add-submit" class="btn btn-primary pull-right">Simpan</button>
              </div>
            </form>
          </div>
        <!-- /.box-body -->
      </div>
        <!-- /.nav-tabs-custom -->



      </section>
      <!-- /.Left col -->
    </div>
    <!-- /.row (main row) -->

  </section>
  <!-- /.content -->