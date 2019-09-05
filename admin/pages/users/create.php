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
            <i class="fa fa-user"></i> Create user
            <a href="<?php echo URL;?>/pages/users/index.php"class="btn btn-success btn-xs"><i class="fa fa-mail-reply"></i>Back</a>
        </h1>
      
</section>

<?php

    $fname="";
    $lname="";
    $email="";
    $phone="";
    $uname="";
    $success="";
    $fail ="";
    if(isset($_POST['btnsave']))
    {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $uname=$_POST['username'];
        $pass=md5($_POST['password']);
        $sql="INSERT INTO users(first_name,last_name,email,phone,username,password)
         values('{$fname}','{$lname}','{$email}','{$phone}','{$uname}','{$pass}')";
        $i = non_query($sql);
        if($i>0)
        {
            $success ="Data has been saved successfully";

        }
        else{
            $fail="Fail to save data,please check again!";
        }
    }

?>
<section class="content">
        <div class="box">
        
            <div class="box-body">
                <form class="form-horizontal" metho="POST">

                        <?php if($success!=""){ ?>
                            <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <?php echo $success;?>
                            </div>
                        <?php }?>
                        <?php if($fail=""){ ?>
                            <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <?php echo $fail;?>
                            </div>
                        <?php }?>
                
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="fname" class="col-sm-3">First Name <span class="text-danger">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="fname" name="fname" required
                                    value="<?php echo $fname;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lname" class="col-sm-3">last Name <span class="text-danger">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="lname" name="lname" required
                                    value="<?php echo $lname;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-3">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" id="email" name="email" required
                                    value="<?php echo $email;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-3">Photo</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="phone" name="phone"
                                    value="<?php echo $phone;?>">                         </div>
                            </div>
                            <div class="form-group">
                                <label for="username" class="col-sm-3">Username <span class="text-danger">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="username" name="username" required
                                    value="<?php echo $uname;?>">                        </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-3">Password<span class="text-danger">*</span></label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="password" name="password" required>                         </div>
                            </div>
                            
                            </div>
                            <div class="col-sm-4">
                                <p>Photo</p>
                                <input type="file" class="form-control" name="photo">
                                <br>
                                <p>
                                    <button class="btn btn-primary btn-sm" name='btnsave'>Save</button>
                                </p>
                            </div>
                    </div>
                
                </form>
            </div>
            

        </div>

</section>
<?php include "../../template/footer.php";?>
