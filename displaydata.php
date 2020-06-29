<?php
include('connection.php');
$query="select * from enterdata";
$result=mysqli_query($query);
?>
<!DOCTYPE html>
<html>
<head>
<link href="displaydata.css" rel="stylesheet" type="text/css">
</head>
<body>

<table align="center" border="1px" style="width:600px; line-height:40px;">
     <tr>
         <th colspan="6"><h2>Student Record</h2></th>
     </tr>
     <t>
         <th> First Name </th>
         <th> Last Name </th>
         <th> Email </th>
         <th> Working hours</th>
         <th> Internships done</th>
         <th> Successful projects</th>
         <th> Experience</th>
     </t>
 <?php
     while($rows=mysqli_fetch_assoc($result))
     {
 ?>
         <tr>
             <td><?php echo $rows['first_name']; ?></td>
             <td><?php echo $rows['last_name']; ?></td>
             <td><?php echo $rows['your_email']; ?></td>
             <td><?php echo $rows['working_hours']; ?></td>
             <td><?php echo $rows['internships_done']; ?></td>
             <td><?php echo $rows['successful_projects']; ?></td>
             <td><?php echo $rows['experience']; ?></td>

         </tr>
 <?php      }
    ?>
    </table>
 </body>
 </html>
