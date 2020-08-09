<?php
    $conn=mysqli_connect("localhost", "root", "", "test");
    if(isset($_POST['submit'])){
        $task=$_POST['task'];
        $sql="INSERT INTO todolist (tasks) VALUE ('$task')";
        $query=mysqli_query($conn, $sql);
        if($query){
            echo "task added";
        }
        else{
            echo "failed to add task";
        }
    }
    if (isset($_GET['del_task'])) {
        $id = $_GET['del_task'];
        mysqli_query($conn, "DELETE FROM todolist WHERE ID=$id");
        header('location: todo.php');
    }
    if (isset($_GET['edit_task'])){
        $id = $_GET['edit_task'];
        $result=mysqli_query($conn, "SELECT * FROM todolist WHERE ID=$id") or die("Error: " . mysqli_error($conn));
        $row=mysqli_fetch_assoc($result);
    }
    if(isset($_GET['update'])) {
        $etask = $_GET['etask'];
        $id = $_GET['edit_task'];
        mysqli_query($conn, "UPDATE todolist SET tasks='$etask' WHERE ID=$id");
        header('LOCATION: todo.php');
    }
?>