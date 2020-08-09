<?php
    include('server.php');
?>
<html>
    <head>
        <title>
        </title> 
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form action="" method="post">
            <label for="task"><b>Task:</b></label>
            <input type="text" name="etask" class="etask" value="<?php echo $row['tasks'];?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Update" class="button" name="update">
        </form>
    </body>
</html>