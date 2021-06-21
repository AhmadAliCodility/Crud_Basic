<?php include "includes/header.php";


$id = $_GET['id'];

$select = "SELECT * FROM `students` where id = $id";
$result = mysqli_query($conn, $select) or die("Query Failed");
?>

<div class="container" style="width:50%">
    <h3 style="text-align: center;" class="mt-5 nb-5">Your Details</h3>
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

    ?>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
       
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input disabled class="form-control" name="name" id="name" value="<?php echo $row['name'] ?>" aria-describedby="name">

                </div>
                <div class="mb-3">
                    <label for="father_name" class="form-label">Father Name</label>
                    <input disabled class="form-control" name="father_name" value="<?php echo $row['father_name'] ?>" id="father_name">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input disabled class="form-control" name="phone" id="phone" value="<?php echo $row['phone'] ?>" aria-describedby="phone">

                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input disabled class="form-control" name="address" id="address" value="<?php echo $row['address'] ?>" aria-describedby="address">

                </div>

                <a href="index.php" type="button"  class="btn btn-primary">Back</a>
            </form>

    <?php
        }
    }
    ?>
</div>



<?php

include "includes/footer.php";
?>