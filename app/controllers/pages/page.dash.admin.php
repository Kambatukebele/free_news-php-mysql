<?php if($section_one == "dash.admin"): ?>
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

                echo $section_one  . "<br>"; 
                echo $section_two . "<br>"; 
                echo $section_three . "<br>"; 
            ?>
            <?php foreach($result as $data): ?>
                <tr>
                <td><?= $data['user_name'];  ?></td>
                <td><?= $data['first_name'] . " " . $data['last_name'];  ?></td>
                <td><?= $data['email']; ?></td>
                <td><a href="<?= ROOT?>/dash.admin/dash.delete"><button  class="btn btn-danger">Delete</button></a></td>
                </tr>
            <?php endforeach; ?>
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

<?php endif; ?>





<?php if($section_two == "dash.delete"): ?>
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
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><?= $data['user_name'];  ?></td>
            <td><?= $data['first_name'] . " " . $data['last_name'];  ?></td>
            <td><?= $data['email']; ?></td>                           
            </tr>
        </tbody>
        <tfoot>
            <tr>
            <th>User Name</th>
            <th>Full Names</th>
            <th>Email</th>
            </tr>
        </tfoot>                        
        </table>
        <div style="display: flex; justify-content:space-between; align-items:center; margin-top:20px">
        <div>
            <a href="#"><button class="btn btn-primary">Cancel</button></a> 
        </div>
        <div>
            <a href="#"><button class="btn btn-danger">Delete</button></a>
        </div>
        </div>                      
    </div><!-- /.box-body -->
</div><!-- /.box -->

<?php endif; ?>
