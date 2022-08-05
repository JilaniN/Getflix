<?php
session_start();
require 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <script src="https://kit.fontawesome.com/6c36406174.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
<div class="my-5 conatiner">
<?php include('message.php'); ?>
            <div class="text-center">
            <h4> Details
                    <!-- <a href="message-create.php" class="btn btn-primary float-end">Add Messages</a> -->
                </h4>
            </div>
            <div class=" d-flex align-items-center justify-content-center">
                <div class="bg-white col-md-6 rounded-5">
                    <div class="p-4 rounded shadow-md ">
                    <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM messages";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $message)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $message['id']; ?></td>
                                        <td><?= $message['name']; ?></td>
                                        <td><?= $message['email']; ?></td>
                                        <td><?= $message['subject']; ?></td>
                                        <td><?= $message['message']; ?></td>
                                        <td>
                                            <!-- <a href="message-view.php?id=<?= $message['id']; ?>" class="btn btn-info btn-sm">View</a> -->
                                            <a href="message-edit.php?id=<?= $message['id']; ?>" class="btn btn-primary btn-sm">Update</a>
                                            <form action="code.php" method="POST" class="d-inline">
                                                <button type="submit" name="delete_message" value="<?=$message['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "<h5> No Record Found </h5>";
                            }
                        ?>
                        
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        </div>

</form>













<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>

</body>
</html>