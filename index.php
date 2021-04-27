<?php

include_once "database/Database.php";

$database = new Database();
$conn = $database->connect();

// b1: viet lenh sql
$sql = 'SELECT * FROM customers';

// b2: Vi la cau lenh select -> thuc thi cau lenh

$stmt = $conn->query($sql);
$customers = $stmt->fetchAll();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1" style="border-collapse: collapse; width: 800px">
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Address</td>
        <td></td>
    </tr>
    <?php  foreach ($customers as $key => $customer):?>
    <tr>
        <td><?php echo $key + 1 ?></td>
        <td><?php echo $customer['name'] ?></td>
        <td><?php echo $customer['email'] ?></td>
        <td><?php echo $customer['phone'] ?></td>
        <td><?php echo $customer['address'] ?></td>
        <td><a href="function/delete.php?id=<?php echo $customer['id'] ?>" onclick="return confirm('Are your sure?')">Delete</a></td>
    </tr>

    <?php endforeach; ?>
</table>
</body>
</html>
