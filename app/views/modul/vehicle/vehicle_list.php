  <!-- Content Header (Page header) -->
  <section class="content-header">
  <h1>
         Kendaraan
        <small>Manajemen</small>
  </h1>
  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Vehicle</a></li>
        <li class="active">List</li>
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
          <h3 class="box-title">Kendaraan Rental</h3>
          <div class="pull-right"><button type="button" class="btn btn-success btn-flat" id="vehicle-add">Tambah Kendaraan Baru</button></div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="vehicle-table" class="table table-bordered table-hover table-responsive">
            <thead>
            <tr>
              <th>Nomor Polisi</th>
              <th>Merk Kendaraan</th>
              <th>Jenis Kendaraan</th>
              <th>Tipe Transmisi</th>
              <th>Tahun Kendaraan</th>
              <th>Kilometer</th>
              <th>Harga Rental</th>
              <th>Sunting</th>
              <th>Hapus</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($vehicles as $vehicle){ ?>
                <tr id="vehicle-list">
                    <td id="vehicle-number"><?php echo $vehicle->number; ?></td>
                    <td id="vehicle-brand"><?php echo $vehicle->brand; ?></td>
                    <td id="vehicle-name"><?php echo $vehicle->name; ?></td>
                    <td id="vehicle-transmission"><?php echo $vehicle->transmission; ?></td>
                    <td id="vehicle-year"><?php echo $vehicle->year; ?></td>
                    <td id="vehicle-kilometer"><?php echo $vehicle->kilometer; ?></td>
                    <td id="vehicle-rentalrates"><?php echo $vehicle->rentalrates; ?></td>
                    <td id="vehicle-edit"><button type="button" class="btn btn-success btn-flat" id="vehicle-edit-button" data-vehicleid="<?php echo $vehicle->id; ?>">Sunting</button></td>
                    <td><button type="button" class="btn btn-danger btn-flat" id="vehicle-remove-button" data-vehicleid="<?php echo $vehicle->id; ?>">Hapus</button></td>
                </tr>
            <?php } ?>
            </tbody>
            <tfoot>
            <tr>
                <th>Nomor Polisi</th>
                <th>Merk Kendaraan</th>
                <th>Jenis Kendaraan</th>
                <th>Tipe Transmisi</th>
                <th>Tahun Kendaraan</th>
                <th>Kilometer</th>
                <th>Harga Rental</th>
                <th>Sunting</th>
                <th>Hapus</th>
            </tr>
            </tfoot>
          </table>
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