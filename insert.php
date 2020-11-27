<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'it63070024-itf-lab13-database-php.mysql.database.azure.com', 'it630070024@it63070024-itf-lab13-database-php', 'TMRpti62', 'ITFLAB_TEST', 3306);if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$product = $_POST['Product'];
$price = $_POST['Price'];
$discount = $_POST['Discount'];


$sql = "INSERT INTO lab_data (Product, Price, Discount, Total) VALUE ('$product', '$price','$discount', '$price'-('$discount'/100))";

if (mysqli_query($conn, $sql)) {
    header('Location: ./');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
