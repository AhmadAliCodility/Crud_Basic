<?php include "includes/header.php";


$id = $_GET['id'];

$select = "SELECT * FROM `students` where id = $id";
$result = mysqli_query($conn, $select) or die("Query Failed");
?>

<div class="container" style="width:50%">
    <h3 style="text-align: center;" class="mt-5 nb-5">Please Edit Your Details</h3>
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

    ?>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['id'] ?>">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $row['name'] ?>" aria-describedby="name">

                </div>
                <div class="mb-3">
                    <label for="father_name" class="form-label">Father Name</label>
                    <input type="text" class="form-control" name="father_name" value="<?php echo $row['father_name'] ?>" id="father_name">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $row['phone'] ?>" aria-describedby="phone">

                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="address" value="<?php echo $row['address'] ?>" aria-describedby="address">

                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>

    <?php
        }
    }
    ?>
</div>



<?php

if (isset($_POST["submit"])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $father = $_POST['father_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];


    $update = "UPDATE `students` SET  name = '{$name}',father_name = '{$father}', phone ='{$phone}', address ='{$address}' WHERE id = $id ";
    // echo $update; die();

    $result = mysqli_query($conn, $update) or die("Query Failed");

    header("Location: http://localhost/codility/tasks/PHP/CRUD/index.php");
    mysqli_close($conn);
}
include "includes/footer.php";
?>