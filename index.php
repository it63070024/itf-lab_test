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
$res = mysqli_query($conn, 'SELECT * FROM lab_data');
?>
<div class="table-responsive">
<table class="table table-dark table-striped">
  <thead>
    <th> <center>A</center></th>
    <th> <center>B</center></th>
    <th> <center>C</center></th>
    <th> <center>Action</center></th>
  </thead>
<?php
while($row = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><div align="center"><?php echo $row['A'];?></div></td>
    <td><div align="center"><?php echo $row['B'];?></div></td>
    <td><div align="center"><?php echo $row['C'];?></div></td>
    <form action="edit.php" method="POST">
    <td><div align="center">
    <button class="btn btn-warning" type="button" value="<?php echo $row['ID']; ?>">Edit</button>
    
    <button class="btn btn-danger" type="button" value="<?php echo $row['ID']; ?>">Delele</button>
    </div></td>
  </tr>
<?php
}
?>
</table>
</div>
<div class="btn btn-primary" align="center"><a href="form.html" class="btn btn-primary">Add</a>

</div>
<?php
mysqli_close($conn);
?>
</body>
</html>