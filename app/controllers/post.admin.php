<?php require "pages/page.post.admin.php";?>
<?php require "dash/head.php";?>
<?php require "dash/header.php";?>
<?php require "dash/sidebar.php";?>    

<div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">

          <div class='row'>
            <div class='col-md-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>Post Your Article <small>Simple and fast</small></h3>
                </div><!-- /.box-header -->
                <?php if (!empty($errors)):?>
                  <div class='alert alert-danger text-center'>
                      Please fix errors below!
                  </div><!-- /.box-header -->
                <?php endif;?>
                <div class='box-body pad'>

                <form class="row g-3" method="POST" enctype="multipart/form-data">
                    <div class="col-md-6" style="margin-bottom: 30px;">
                      <label for="inputEmail4" class="form-label">Title</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="Title" name="title" value="<?= OLD_VALUES('title');?>">
                      <?php if (!empty($errors['title'])):?>
                        <div class="alert alert-danger" style="margin-top: 10px;">
                            <?= $errors['title']; ?>
                        </div>
                      <?php endif;?>
                    </div>

                    <div class="col-md-6" style="margin-bottom: 30px;">
                      <label for="inputEmail4" class="form-label">Description</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="Description" name="description" value="<?= OLD_VALUES('description');?>">
                      <?php if (!empty($errors['description'])):?>
                        <div class="alert alert-danger" style="margin-top: 10px;">
                            <?= $errors['description']; ?>
                        </div>
                      <?php endif;?>
                    </div>
                   
                    <div class="col-md-6" style="margin-bottom: 30px;">
                      <label for="inputPassword4" class="form-label">Image Front</label>
                      <input type="file" class="form-control" id="inputPassword4" name="main_image" value="">
                      <?php if (!empty($errors['main_image'])):?>
                      <div class="alert alert-danger" style="margin-top: 10px;">
                          <?= $errors['main_image']; ?>
                      </div>
                      <?php endif;?>
                    </div>
                    <div class="col-md-6" style="margin-top: 30px; margin-left:0;">
                      <label for="inputState" class="form-label">Categories</label>
                      <select id="inputState" class="form-select" name="category">
                        <option selected value="choose">Choose...</option>
                        <option value="business">Business</option>
                        <option value="technologies">Technologies</option>
                        <option value="sports">Sports</option>
                        <option value="cultures">Cultures</option>
                      </select>
                      <?php if(!empty($errors['category'])):?>
                      <div class="alert alert-danger" style="margin-top: 10px;">
                          <?= $errors['category'];?>
                      </div>
                      <?php endif; ?>
                    </div>    
                    <div class="form-group col-md-12">
                      <label for="exampleFormControlTextarea1">Your article</label>                       
                      <textarea class="form-control"  name="editordata" id="summernote" rows="10">Hello There</textarea>
                    </div>
                          
                    <div class="col-md-12 form-group">
                      <button type="submit" class="btn btn-primary">Post Your Article</button>
                    </div>
                </form>
                </div>
              </div>
            </div><!-- /.col-->
          </div><!-- ./row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <script>
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>

<?php require "dash/footer.php";?>