<?php
//Include database configuration file
include('dbConfig.php');

if(isset($_POST["group_id"]) && !empty($_POST["group_id"])){
    //Get all subject data
    $query = $db->query("SELECT * FROM subjects WHERE group_id = ".$_POST['group_id']." AND status = 1 ORDER BY subject_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display subjects list
    if($rowCount > 0){
        echo '<option value="">Select subject</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['subject_id'].'">'.$row['subject_name'].'</option>';
        }
    }else{
        echo '<option value="">subject not available</option>';
    }
}

if(isset($_POST["subject_id"]) && !empty($_POST["subject_id"])){
    //Get all lecture data
    $query = $db->query("SELECT * FROM lectures WHERE subject_id = ".$_POST['subject_id']." AND status = 1 ORDER BY lecture_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display lectures list
    if($rowCount > 0){
        echo '<option value="">Select lecture</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['lecture_id'].'">'.$row['lecture_name'].'</option>';
        }
    }else{
        echo '<option value="">lecture not available</option>';
    }
}
?>