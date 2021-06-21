<?php

include "includes/header.php";
?>


<div class="container">

    <h3 style="text-align:center" class="mt-5 mb-5">Student Records</h3>
    <?php
    $select = "SELECT * FROM `students`";
    $result = mysqli_query($conn, $select) or die("Query Failed");
    if (mysqli_num_rows($result) > 0) {
    ?>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Father Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php


                $i = 0;

                while ($row = mysqli_fetch_assoc($result)) {

                ?>
                    <tr>
                        <th scope="row"><?php echo $i = $i + 1 ?></th>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['father_name'] ?></td>
                        <td><?php echo $row['phone'] ?></td>
                        <td><?php echo $row['address'] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="show.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-dark">Show</a>
                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>

                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    <?php
    } else {
        echo "<h3 style='text-align:center; color:red; border:5px dotted red; padding:30px'>No Records Found</h3>";
    }
    ?>
</div>
<?php

include "includes/footer.php";
?>