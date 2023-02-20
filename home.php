<?php 
  include('includes/header.php'); // header ..
  if(empty($_SESSION['user'])){
    header('location:index.php');
  }
  include('action/cn.php');
  $query = "SELECT * FROM `users`";
  $result = mysqli_query($cn,$query) or die('Cant run query');
?>
<div class="container mt-4">
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
            <button class="btn btn-danger">Delete</button>
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

