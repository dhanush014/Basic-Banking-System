<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<?php
    include 'connection.php';
    $sql = "SELECT * FROM transaction";
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
        <th colspan="5"><h2>TRANSACTION HISTORY</h2></th>
      </tr>  
      <tr>
          <th>SNO</th>
          <th>SENDER</th>
          <th>RECEIVER</th>
          <th>AMOUNT</th>
          <th>DATE/TIME</th>
      </tr>
    <?php
      while($rows=mysqli_fetch_assoc($result))
      {
    ?>
          <tr>
            <td><?php echo $rows['sno']; ?></td>
            <td><?php echo $rows['sender']; ?></td>
            <td><?php echo $rows['receiver']; ?></td>
            <td><?php echo $rows['balance']; ?></td>
            <td><?php echo $rows['datetime']; ?></td>
          </tr>
    <?php
      }
    ?>
  </table>

  <footer id="footer">
    <p>Copyright &copy 2021. All right reserved.</p>
  </footer>



</body>
</html>