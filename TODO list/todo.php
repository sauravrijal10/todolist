<?php
    include ("server.php");
?>
<!DOCTYPE html>
<html>
    <head>
    <title>
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
         <div class="page_header">
         <h1>TODO List</h1>
         </div>
         <div class="container">
            <div class="jumbotron">
                <form class="input-form" method="post">
                    <input type="text" name="task" class="form-control" required><br>
                    <button type="submit" name="submit" class="btn btn-primary">Add Task</button>
                </form>
            </div>
           <table class="table">
                <thead>
                    <tr>
                        <th class="th1">Num</th>
                        <th class="th2">Task</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $tasks = mysqli_query($conn, "SELECT * FROM todolist") or die( mysqli_error($conn)) ;
                        $i=1; 
                        while ($row=mysqli_fetch_array($tasks)){ ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td class="task"><?php echo $row['tasks'] ?> </td>
                                <td class="delete">
                                    <a href="todo.php?del_task=<?php echo $row['ID'] ?>">Delete</a>
                                    <a href="edit.php?edit_task=<?php echo $row['ID'] ?>">Edit</a>
                                </td>

                            </tr>
                            <?php $i++; } ?>	
                </tbody>
           </table>
         </div>
    </body>
</html>