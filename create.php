<?php include "includes/header.php";?>

<div class="container" style="width:50%">
    <h3 style="text-align: center;" class="mt-5 nb-5">Please Add Your Details</h3>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="name">

        </div>
        <div class="mb-3">
            <label for="father_name" class="form-label">Father Name</label>
            <input type="text" class="form-control" name="father_name" id="father_name">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" aria-describedby="phone">

        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" id="address" aria-describedby="address">

        </div>
    
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



<?php

    if(isset($_POST["submit"])){
        $name = $_POST['name'];
        $father = $_POST['father_name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];


        $insert = "INSERT INTO `students` (`name`, `father_name`, `phone`, `address`) VALUES ('{$name}','{$father}','{$phone}','{$address}')";

        $result = mysqli_query($conn, $insert) or die("Query Failed");

        header("Location: http://localhost/codility/tasks/PHP/CRUD/index.php");
        mysqli_close($conn);
        

   }
include "includes/footer.php";
?>