<?Php

include "connection.php"; ?> 
<table border='1'>
        <tr>
        <th>Subject</th>
        <th>Mark1</th>
        <th>Mark2</th>
        <th>Mark3</th>
        <th>Sum Marks</th>
        </tr>

<?php
    $query2 = "SELECT  students_info.s_name, subjects.subject, marks.*
            FROM  subjects
            RIGHT JOIN  (students_info
            RIGHT JOIN  marks  ON students_info.s_id = marks.s_id
                )  ON subjects.sub_id = marks.sub_id
            WHERE  students_info.s_id = '".$s_id."'";

    $result2=mysqli_query($link,$query2) OR die(mysqli_error($link));   

        while ($row=mysqli_fetch_array($result2))
        {
 ?>
        <tr>
            <td><?php echo $row['subject'];?></td>
            <td><?php echo $row['n1'];?></td>
            <td><?php echo $row['n2'];?></td>
            <td><?php echo $row['n3'];?></td>
            <td><?php echo $row['n1']+$row['n2']+$row['n3'];?></td>
        </tr>
<?php
        }
?>
        </table>
 <?php

?>


