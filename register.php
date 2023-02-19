<?php include('includes/header.php'); // header .. ?>
<div class="container">
   <div class="row">
        <div class="col-lg-4">
            <form action="action/register.php" method="post">
                <div class="card mt-2">
                    <div class="card-header">
                        Register Here
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" />
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email" />
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" />
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-danger">Register</button>
                    </div>
                </div>
            </form>
        </div>
   </div>
</div>
<?php include('includes/footer.php'); // footer .. ?>

