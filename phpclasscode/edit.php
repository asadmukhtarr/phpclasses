<?php 
    include('includes/header.php'); // header .. 
    $id = $_GET['id'];
    include('action/cn.php'); // connection ..
    $query = "SELECT * FROM `users` WHERE id='$id'";
    $result = mysqli_query($cn,$query) or die('Cant Connect With DB'.mysqli_error($cn));
    $row = mysqli_fetch_array($result);
?>
<div class="container">
   <div class="row">
        <div class="col-lg-4">
            <form action="action/update.php?id=<?php echo $id ?>" method="post">
                <div class="card mt-2">
                    <div class="card-header">
                        Register Here
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" value="<?php echo $row['name']; ?>" class="form-control" name="name" />
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" value="<?php echo $row['email']; ?>" name="email" />
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" value="<?php echo $row['password']; ?>" name="password" />
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div>
   </div>
</div>
<?php include('includes/footer.php'); // footer .. ?>

