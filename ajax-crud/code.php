<?php

$conn = mysqli_connect("localhost","root","","library");

if(isset($_POST['checking_add'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $class = $_POST['class'];
    $section = $_POST['section'];
    $book_name = $_POST['book_name'];
    $issue_date = $_POST['issue_date'];
    $expiry_date = $_POST['expiry_date'];

    $query = "INSERT INTO students(fname,lname,class,section,book_name,issue_date,`expiry_date`) Values('$fname','$lname','$class','$section','$book_name','$issue_date','$expiry_date')";
    $query_run = mysqli_query($conn, $query);


    if($query_run){
        echo $return = "Successfully Stored";
    }else{
        echo $return = "Something Went Wrong";
    }
}


if(isset($_POST["checking_view"])){

    $result_array = [];

    $stud_id = $_POST['stud_id'];
    $query = "SELECT * FROM students WHERE id = '$stud_id'";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) > 0){

        foreach($query_run as $row){
            array_push($result_array,$row);
        }
        header('content-type: application/json');
        echo json_encode($result_array);
    }else 
    echo $return = "No Record Found.!";

}


// if(isset($_POST["checking_edit"])){
//     $result_array = [];

//     $stud_id = $_POST['stud_id'];
//     $query = "SELECT * FROM students WHERE id = '$stud_id'";
//     $query_run = mysqli_query($conn, $query);

//     if(mysqli_num_rows($query_run) > 0){
//         foreach($query_run as $row){
//             array_push($result_array,$row);
//             echo json_encode($result_array);
//         }

//     }else
//     echo $return = "No Record Found.!";
// }




if(isset($_POST["checking_edit"])){


    $result_array =[];


    $stud_id = $_POST['stud_id'];
    $query = "SELECT * FROM students where id = '$stud_id'";
    $query_run = mysqli_query($conn,$query);

    if(mysqli_num_rows($query_run)> 0){
        
        foreach($query_run as $row){

            array_push($result_array, $row);
        }
        header('Content-type: application/json');
        echo json_encode($result_array);

    }else {
        echo $return = "No Record Found.!";
    }
}



if(isset($_POST["checking_update"])){
    $id = $_POST['stud_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $class = $_POST['class'];
    $section = $_POST['section'];
    $book_name = $_POST['book_name'];

    $query = "UPDATE students SET fname = '$fname', lname = '$lname', class = '$class', section = '$section', book_name = '$book_name'";
    $query_run = mysqli_query($conn,$query);


    if(mysqli_num_rows($query_run)> 0){
        echo $return = "Successfully Update";
    }else{
        echo $return = "Something Went Wrong!!";
    }
}

