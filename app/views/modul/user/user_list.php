  <!-- Content Header (Page header) -->
  <section class="content-header">
  <h1>
         Pengguna
        <small>Manajemen</small>
  </h1>
  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>User</a></li>
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
          <h3 class="box-title">Pengguna Sistem</h3>
          <div class="pull-right"><button type="button" class="btn btn-success btn-flat" id="user-add">Tambah Pengguna Baru</button></div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="user-table" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Username</th>
              <th>Nama Lengkap</th>
              <th>Email</th>
              <th>Jabatan</th>
              <th>Reset Password</th>
              <th>Hapus Pengguna</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($users as $user){ ?>
                <tr id="user-list">
                    <td><?php echo $user->username; ?></td>
                    <td id="user-name"><?php echo $user->name; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td><?php echo $user->role; ?></td>
                    <td><button type="button" class="btn btn-primary btn-flat" id="user-reset-password-button" data-userid="<?php echo $user->id; ?>">Reset</button></td>
                    <td><button type="button" class="btn btn-danger btn-flat" id="user-remove-button" data-userid="<?php echo $user->id; ?>">Hapus</button></td>
                </tr>
            <?php } ?>
            </tbody>
            <tfoot>
            <tr>
                <th>Username</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Jabatan</th>
                <th>Reset Password</th>
                <th>Hapus Pengguna</th>
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