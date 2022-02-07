<?php
include ('db_con.php');

//query to be executed.
$query = "SELECT * FROM `test`.`members` ";
//submit query
$customers = mysqli_query($con, $query);
?>

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD Example from scratch </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="newMember.html">Add Customer</a>
            </div>
        </div>
    </div>
   
    
   
    <table class="table table-bordered">
        <tr>
            <th>Cust. No.</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        <?php
             foreach ($customers as $customer){
                echo "<tr>".
                    "<td>".$customer['id']."</td>".
                    "<td>".$customer['username']."</td>".
                    "<td>".$customer['email']."</td>".
                    "<td>".

//                    "<form action='' method='POST' '>".
                    "<a class='btn btn-info' href='showMember.php?id=".$customer['id'].'&username='.$customer['username']."'>Show</a>".

                    "<a class='btn btn-primary' href='updateMember.php?id=".$customer['id'].'&username='.$customer['username']."'>Edit</a>".

                    "<a class='btn btn-danger' onclick='return confirm_delete()' href='deleteMember.php?id=".$customer['id'].'&username='.$customer['username']."'>Delete</a>".

                    "</td>".
                "</tr>";
                };
         ?>
       
    </table>