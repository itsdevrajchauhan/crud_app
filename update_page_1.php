<?php include('header.php'); ?>
<?php include('dbconnection.php'); ?>

<?php

$row = [];

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} elseif (isset($_GET['id_new'])) {
    $id = $_GET['id_new'];
}

if (isset($id)) {

    $query = "select * from students where id=$id";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query failed  " . mysqli_error($connection));
    } else {
        $row = mysqli_fetch_assoc($result);
    }
}

?>

<?php

if (isset($_POST['update_students'])) {
    if (isset($_GET['id_new'])) {
        $idnew = $_GET['id_new'];
    }

    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $age   = $_POST['age'];


    $query = "update students set firstName='$fname', lastName='$lname', age='$age' where id=$idnew";

    $update_result = mysqli_query($connection, $query);

    if (!$update_result) {
        die("Query failed  " . mysqli_error($connection));
    } else {
header('location:index.php?update_msg=Update successful');


        exit;
    }
}

?>

<form action="update_page_1.php?id_new=<?php echo $id; ?>" method="post">
    <div class="form-group">
        <label for="f_name">First Name</label>
        <input type="text" name="f_name" class="form-control"
               value="<?php echo isset($row['firstName']) ? $row['firstName'] : ''; ?>">
    </div>

    <div class="form-group">
        <label for="l_name">last Name</label>
        <input type="text" name="l_name" class="form-control"
               value="<?php echo isset($row['lastName']) ? $row['lastName'] : ''; ?>">
    </div>

    <div class="form-group">
        <label for="age">Age</label>
        <input type="number" name="age" class="form-control"
               value="<?php echo isset($row['age']) ? $row['age'] : ''; ?>">
    </div>

    <input type="submit" class="btn btn-success" name="update_students" value="UPDATE">
</form>

<?php include('footer.php'); ?>
