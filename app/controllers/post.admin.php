<?php require "dash/head.php";?>
<?php require "dash/header.php";?>
<?php require "dash/sidebar.php";?>    

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Text Editors
            <small>Advanced form element</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Editors</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class='row'>
            <div class='col-md-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>Bootstrap WYSIHTML5 <small>Simple and fast</small></h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                  </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class='box-body pad'>

                <form class="row g-3">
                    <div class="col-md-6" style="margin-bottom: 30px;">
                      <label for="inputEmail4" class="form-label">Title</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="Title">
                    </div>
                    <div class="col-md-6" style="margin-bottom: 30px;">
                      <label for="inputPassword4" class="form-label">Image Front</label>
                      <input type="file" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-4">
                      <label for="inputState" class="form-label">Categories</label>
                      <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>Business</option>
                        <option>Technologies</option>
                        <option>Sports</option>
                        <option>Cultures</option>
                      </select>
                    </div>
                      <br><br><br><br>                  
                      <div class="form-group col-md-12">
                        <label for="exampleFormControlTextarea1">Your article</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>

                    <div class="col-md-12 form-group">
                      <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </form>
                </div>
              </div>
            </div><!-- /.col-->
          </div><!-- ./row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<?php require "dash/footer.php";?>