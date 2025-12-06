<?php include('header.php'); ?>

<?php include('dbconnection.php'); ?>

<div class="box1">
    <h2>All Students</h2>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  ADD STUDENTS
</button>

</div>




<TABLE class="table table-hover table-bordered  table-striped">
    <thead>
        <TR>
            <TH>ID</TH>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
        </TR>
    </thead>
    <tbody>
        <?php
        $query = "select * from students ";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("Query failed  " . mysqli_error());
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['firstName']; ?> </td>
                    <td><?php echo $row['lastName']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                </tr>

                <?php
            }
        }
        ?>


    </tbody>

</TABLE>


<form>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD STUDENTS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form><div class="form-group">
<label for="f_name">First Name</label>
<input type="text " name="f_name" class="form-control">

        </div>  
        <div class="form-group">
<label for="l_name">last Name</label>
<input type="text " name="l_name" class="form-control">

        </div>  
        <div class="form-group">
<label for="age">Age</label>
<input type="Interger " name="age" class="form-control">

        </div>  
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">ADD</button>
      </div>
    </div>
  </div>
</div>

 </form>


<?php include('footer.php') ?>