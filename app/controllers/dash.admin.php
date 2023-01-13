<?php is_logged_admin();?>
<?php require "dash/head.php";?>
<?php require "dash/header.php";?>
<?php require "dash/sidebar.php";?> 

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?= AdminCalcul(); ?></h3>
                  <p>Admin</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?= UsersCalcul(); ?></h3>
                  <p>Users</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>44</h3>
                  <p>Admin Posts</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>
                  <p>Users Posts</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-xs-12">
                <div class="box">                  
                    <div class="box-header">
                      <h3 class="box-title">Users List</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>User Name</th>
                            <th>Full Names</th>
                            <th>Email</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                            $query = "SELECT * FROM users";
                            $result = query($query);
                        ?>
                        <?php foreach($result as $data): ?>
                          <tr>
                            <td><?= $data['user_name'];  ?></td>
                            <td><?= $data['first_name'] . " " . $data['last_name'];  ?></td>
                            <td><?= $data['email']; ?></td>
                            <td><a href="dash.admin/dash.delete/$id"><button  class="btn btn-danger">Delete</button></a></td>
                          </tr>
                        <?php endforeach; ?>
                        <?php

                          // useURL();

                           $URL1 = $URL[1] ?? ""; 
                          $FILENAME = "../app/controllers/" . $URL1 . ".php";
                          echo $FILENAME;

                          // if()

                          
                        ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>User Name</th>
                            <th>Full Names</th>
                            <th>Email</th>
                            <th>Action</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div><!-- /.box-body -->
                  </div><!-- /.box -->
              </div><!-- /.row (main row) -->
            </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php require "dash/footer.php";?>