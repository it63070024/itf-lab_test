<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'it63070024-itf-lab13-database-php.mysql.database.azure.com', 'it630070024@it63070024-itf-lab13-database-php', 'TMRpti62', 'ITFLAB_TEST', 3306);
if (mysqli_connect_errno($conn)){
	die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM lab_data WHERE ID=$id");
$row = mysqli_fetch_array($result);
?>

<title>Update</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="container">
	<div class="row">
		<div  class="col-sm-5">
			<br>
			<h3>Edit</h3>
		

			<form action="insert_edit.php" method="post">
				<input type="hidden" name="ID" value="<?php echo $row['ID']; ?>"> 
				<div class="form-group">
					A : <input type="int" name="A" required value="<?php echo $row['A'];?>" class="form-control" > 
				</div>
				<div class="form-group">
					B : <input type="int" name="B" required value="<?php echo $row['B'];?>" class="form-control" >
				</div>
				<input type="hiden" name="C" value="<?php echo $row['A']+$row['B'];?>">
				<div class="form-group">
					<button class="btn btn-success" type="submit" >Save</button>
				</div>
			</form>
		</div>

	</div>
</div>
<?php
