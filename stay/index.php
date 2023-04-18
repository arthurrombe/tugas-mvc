<?php
include "connection.php";
include "./model/product.model.php";
include "./controller/product.controller.php";
include "./view/product/product.view.php";
$products = new ProductView();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php $products->find(); ?>

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>status</th>
            <th>jumlah anak</th>
        </tr>
  <?php $products->show() ?>  
    </table>
   
</body>
</html>