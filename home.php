<?php 
  include('includes/header.php'); // header ..
  if(empty($_SESSION['user'])){
    header('location:index.php');
  }
  include('action/cn.php');
  $query = "SELECT * FROM `users` ORDER BY `id` DESC";
  $result = mysqli_query($cn,$query) or die('Cant run query');
?>
<div class="container mt-4">
  <?php if(!empty($_GET['message'])){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Holy <?php echo $_SESSION['user']; ?>!</strong>   <?php echo $_GET['message']; ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php
  } ?>
  <div class="card">
    <div class="card-header">
        Welcome! <?php echo $_SESSION['user']; ?>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Actions</th>
        </tr>
        <?php 
          while($row=mysqli_fetch_array($result)){
        ?>
         <tr>
          <th><?php echo $row['id']; ?></th>
          <th><?php echo $row['name']; ?></th>
          <th><?php echo $row['email']; ?></th>
          <th>
            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">
              Edit
            </a>
            <a href="action/delete.php?id=<?php echo $row['id']; ?>">
              <button class="btn btn-danger">Delete</button>
            </a>
          </th>
        </tr>
        <?php 
          }
        ?>
      </table>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); // footer .. ?>

