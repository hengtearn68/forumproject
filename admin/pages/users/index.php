<?php session_start(); ?>
<?php include "../../config.php";?>
<?php include "../../lib/functions.php"; ?>
<?php include "../../lib/db.php";?>






<?php include "../../template/header.php"; ?>
<?php

    $users=query("select * from users");
?>



    <section class="content-header">
        <h1>
               <i class="fa fa-user"></i>    User List
             
            <a href="<?php echo URL;?>/pages/users/create.php"class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i>Creat</a>
        </h1>
      
</section>
<section class="content">
        <div class="box">
        
            <div class="box-body">
            
                 <div class="inner">
                    <table class="table table-borderd table-sm">
                        <thead>
                            <tr>
                            
                                    <th>#</th>            
                                    <th>First Name </th>            
                                    <th>Last Name</th>            
                                    <th>Email</th>            
                                    <th>Phone</th>            
                                    <th>Username</th>            
                                    <th>Photo</th>    
                                    <th>Action</th>        
                            </tr>
                        </thead>
                        <tbody>
                        
                            <?php foreach($users as $u){?>
                                <tr>
                                    <td><?php echo $u['id'];?></td>
                                    <td><?php echo $u['first_name'];?></td>
                                    <td><?php echo $u['last_name'];?></td>
                                    <td><?php echo $u['email'];?></td>
                                    <td><?php echo $u['phone'];?></td>
                                    <td><?php echo $u['username'];?></td>
                                    <td>
                                        <img src="" alt="Poto">
                                    </td>
                                    <td>
                                        <a href= "#" title="Delete" class='btn btn-danger btn-xs' onclick="return comfirm('You want to Delete?')">
                                            <i class="fa fa-trash">
                                            </i>
                                        </a>&nbsp;
                                        <a href="#" class="btn btn-success btn-xs" title="Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>

                                </tr>

                                <?php

                            }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</section>

<?php include "../../template/footer.php";?>
