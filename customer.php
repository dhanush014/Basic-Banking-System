<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>

<body>
<?php
    include 'connection.php';
    $sql = "SELECT * FROM customer";
    $result = mysqli_query($conn,$sql);
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

<table>
      <tr>
        <th colspan="5"><h2>CUSTOMERS</h2></th>
      </tr>  
      <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>EMAIL</th>
          <th>BALANCE</th>
          <th></th>
      </tr>
    <?php
      while($rows=mysqli_fetch_assoc($result))
      {
    ?>
          <tr>
            <td><?php echo $rows['id']; ?></td>
            <td><?php echo $rows['name']; ?></td>
            <td><?php echo $rows['email']; ?></td>
            <td><?php echo $rows['balance']; ?></td>
	    <td><a href="viewcustomer.php?id= <?php echo $rows['id'] ;?>"> <button class="btn">View</button></a></td>
          </tr>
    <?php
      }
    ?>    
  </table>
</body>
<footer >
    <p>Copyright &copy 2021. All right reserved.</p>
  </footer>
</html>