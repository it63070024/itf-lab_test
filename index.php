<html>
<head>
  <title>ITF Lab Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-dark" style="margin:20px;">
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'it63070024-itf-lab13-database-php.mysql.database.azure.com', 'it630070024@it63070024-itf-lab13-database-php', 'TMRpti62', 'ITFLAB_TEST', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT *,FORMAT(Total,2) FROM lab_data');
?>
<div class="table-responsive">
<table class="table table-dark table-striped">
  <thead>
    <th> <center>Product Name</center></th>
    <th> <center>Price/Unit</center></th>
    <th> <center>Discount</center></th>
    <th> <center>Dis. Price</center><th>
    <th> </th>
  </thead>
<?php
while($row = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><div align="center"><?php echo $row['Product'];?></div></td>
    <td><div align="center"><?php echo $row['Price'];?></div></td>
    <td><div align="center"><?php echo $row['Discount'];?><a>%</a></div></td>
    <td><div align="center"><?php echo $row['Total'];?></div></td>
    <td><a align="center" href="edit.php?id=<?php echo $row['ID'];?>" class="btn btn-primary">EDIT</a>
    <a align="center" href="delete.php?id=<?php echo $row['ID'];?>" class="btn btn-primary">DELETE</a></td>
  </tr>
<?php
}
?>
</table>
</div>
</div>
<div class="btn btn-primary" align="center"><a href="form.html" class="btn btn-primary">Comment</a>

</div>
<?php
mysqli_close($conn);
?>
</body>
</html>
