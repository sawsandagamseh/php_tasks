<?php

include_once 'connectDB.php';
$id =  $_GET['id'];

$Sql2 = "SELECT itemID, itemNAME, itemPRICE FROM item WHERE itemID=$id ";

$result2 = $conn->query($Sql2);
$item_price;
$item_name;
if ($result2->num_rows > 0) {
    // output data of each row
    $row = $result2->fetch_assoc();
    $item_price =   $row["itemPRICE"]; 
    $item_name =  $row["itemNAME"]; 
}

if(isset ($_POST['update'])){

    $Id     = $_POST['item_id'];
    $Name   = $_POST['item_name'];
    $Price  = $_POST['item_price'];
  
  $sql = "UPDATE item SET  itemNAME = '$Name', itemPRICE = '$Price'
   WHERE itemID= $id";
  
  
  
  $result = mysqli_query($conn, $sql);

  header('location:insert.php');
  
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
  <form class="form-inline" method='post' action=''>
  <div class="form-group mx-sm-3 mb-2">
    <label for="item_id" class="sr-only">Item Id</label>
    <input type="number" class="form-control" id="item_id" name="item_id" value="<?php echo $id; ?>">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="item_name" class="sr-only">Item Name</label>
    <input type="text" class="form-control" id="item_name" name='item_name' placeholder="<?php echo $item_name; ?>" value="<?php echo $item_name; ?>">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="item_price" class="sr-only">Item Price</label>
    <input type="text" class="form-control" id="item_price" name='item_price' placeholder="<?php echo $item_price; ?>" value="<?php echo $item_price; ?>">
  </div>
  <button type="submit" name='update' value='add' class="btn btn-primary mb-2">update</button>
</form>

  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
