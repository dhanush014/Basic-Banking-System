<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<?php
    include 'connection.php';
    $id=$_GET['id'];
    $sql = "SELECT * FROM customer where id=$id";
    $result = mysqli_query($conn,$sql);
    $rows=mysqli_fetch_assoc($result);
?>

<header>
  <div class="nav">
    <div class="logo">
      <h2>Banking System</h2></div>
<div class="navitems">
  <ul>
    <li><a href="home.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="customer.php">Customer</a></li>
  </ul>
</div>
  </div>
</header>
<div class="about">
<table>
      <tr>
        <th colspan="5"><h2>CUSTOMER</h2></th>
      </tr>  
      <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>EMAIL</th>
          <th>BALANCE</th>
          <th></th>
      </tr>

          <tr>
            <td><?php echo $rows['id']; ?></td>
            <td><?php echo $rows['name']; ?></td>
            <td><?php echo $rows['email']; ?></td>
            <td><?php echo $rows['balance']; ?></td>
	    <td><a href="transfermoney.php?id= <?php echo $rows['id'];?>"> <button class="btn">Transact</button></a></td>
          </tr>   
  </table>
  </div>    

  <footer id="footer">
    <p>Copyright &copy 2021. All right reserved.</p>
  </footer>

</body>
</html>