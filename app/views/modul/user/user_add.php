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
          <h3 class="box-title">Tambah Pengguna</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <form role="form" id="user-add-form">
                <div class="form-group">
                  <label for="user-add-username">Username</label>
                  <input type="text" class="form-control" name="user-add-username" id="user-add-username" placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="user-add-email">Email address</label>
                  <input type="email" class="form-control" name="user-add-email" id="user-add-email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="user-add-password">Password</label>
                  <input type="password" class="form-control" name="user-add-password"  id="user-add-password" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="user-add-name">Nama Lengkap</label>
                  <input type="text" class="form-control" name="user-add-name" id="user-add-name" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                <label>Jabatan</label>
                <select class="form-control" name="user-add-role" id="user-add-role">
                  <option value="1">Administrator/Pemilik</option>
                  <option value="2">Karyawan</option>
                </select>
              </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" id="user-add-submit" class="btn btn-primary pull-right">Simpan</button>
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