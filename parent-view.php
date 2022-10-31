<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Parents details</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4>
                            <a href="home.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    </div>
                    <h1 class="text-center">Parents Details - Maths Class Students</h1>  
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Student Name</th>
                                    <th>Subject</th>
                                    <th>Guardian Occupation</th>
                                    <th>Relationship with the Student</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM guardians WHERE subject='maths'";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $guardian)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $guardian['pId']; ?></td>
                                                <td><?= $guardian['pName']; ?></td>
                                                <td><?= $guardian['sName']; ?></td>
                                                <td><?= $guardian['subject']; ?></td>
                                                <td><?= $guardian['pOccupation']; ?></td>
                                                <td><?= $guardian['pRelation']; ?></td>
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
                    <!--second table-->
                    <h1 class="text-center">Parents Details - Sinhala Class Students</h1> 
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Student Name</th>
                                    <th>Subject</th>
                                    <th>Guardian Occupation</th>
                                    <th>Relationship with the Student</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM guardians WHERE subject='sinhala'";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $guardian)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $guardian['pId']; ?></td>
                                                <td><?= $guardian['pName']; ?></td>
                                                <td><?= $guardian['sName']; ?></td>
                                                <td><?= $guardian['subject']; ?></td>
                                                <td><?= $guardian['pOccupation']; ?></td>
                                                <td><?= $guardian['pRelation']; ?></td>
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
                    <!---->
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>