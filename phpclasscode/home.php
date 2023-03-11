<?php 
  include('includes/header.php'); // header ..
  if(empty($_SESSION['user'])){
    header('location:index.php');
  }
  include('action/cn.php');
  if(!empty($_GET['search'])){
    $search = $_GET['search'];
    $query = "SELECT * FROM `users` WHERE name like '%$search'";
  } else {
    $query = "SELECT * FROM `users` ORDER BY `id` DESC";
  }
  $result = mysqli_query($cn,$query) or die('Cant run query');
?>
<div class="container mt-4">
  <?php if(!empty($_GET['message'])){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Holy <?php echo $_SESSION['user']; ?>!</strong>   <?php echo $_GET['message']; ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php
  } ?>
  <?php if(!empty($_GET['delete'])){ ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Holy <?php echo $_SESSION['user']; ?>!</strong>   <?php echo $_GET['delete']; ?>
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
      <form action="home.php" method="get">
          <table class="table table-bordered">
            <tr>
              <th>Search Here</th>
            </tr>
            <tr>
              <td>
                <input type="text" class="form-control" name="search" />
              </td>
              <td>
                <button type="submit" class="btn btn-danger">Search</button>
              </td>
            </tr>
          </table>
      </form>
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Joining Date</th>
          <th>Resigning Date</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
        <?php 
          while($row=mysqli_fetch_array($result)){
        ?>
         <tr>
          <th><?php echo $row['id']; ?></th>
          <th><?php echo $row['name']; ?></th>
          <th><?php echo $row['email']; ?></th>
          <td><?php echo $row['jdate']; ?></td>
          <td>
            <?php if(empty($row['rdate'])){ ?>
              <span class="badge badge-success">Continue</span>
             <?php } else {
            ?>
              <?php echo $row['rdate']; ?>
            <?php
             } ?>
          </td>
          <td>
            <?php if($row['status'] == 0){
            ?>
              <span class="badge badge-success">Active</span>
            <?php
            } else {
            ?>
              <span class="badge badge-danger">Closed</span>
            <?php
            } ?>
          </td>
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

