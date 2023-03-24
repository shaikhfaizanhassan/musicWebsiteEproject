<?php 
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container" style="background-color:white; padding:20px">
        <h1>Add New Albam</h1>
        <form action="" method="POST" style="width:600px" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td>NAME</td>
                    <td><input type="text" name="name" class="form-control"></td>
                </tr>
                <tr>
                    <td>Albam Image</td>
                    <td><input type="file" name="filename" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="btn" class="btn btn-success"></td>
                </tr>
            </table>
        </form>
        <?php 
            if(isset($_POST["btn"]))
            {
                $name = $_POST["name"];
                $imagename = $_FILES["filename"]["name"];
                $tmp_name = $_FILES["filename"]["tmp_name"];

                move_uploaded_file($tmp_name,"albamimage/".$imagename);
                 $query =mysqli_query($con,"insert into albam (name,image) 
                values
                ('$name','$imagename')");

                if($query>0)
                {
                    echo "<h1>Albam Save</h1>";
                }
                else
                {
                    echo "<h1>Albam not Save</h1>";
                }
            }
        ?>
    </div>
</body>

</html>