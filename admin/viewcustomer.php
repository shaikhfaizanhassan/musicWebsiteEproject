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
        <h1>View All Customer</h1>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>GANDER</th>
                <th>ACTION</th>
            </tr>
            <?php 
            $fetch = mysqli_query($con,"select * from customer");
            while($row = mysqli_fetch_array($fetch))
            {
                echo '   
                <tr>
                    <td>'.$row[0].'</td>
                    <td>'.$row[1].'</td>
                    <td>'.$row[2].'</td>
                    <td>'.$row[3].'</td>
                    <td>'.$row[4].'</td>
                    
                <td>
                    <a href="" class="btn btn-success">Edit</a>
                    <a href="" class="btn btn-info">Detail</a>
                    <a href="" class="btn btn-danger">Delete</a>
                    
            </td>
            </tr>
            ';
            }
        ?>
        </table>
    </div>
</body>

</html>