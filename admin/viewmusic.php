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
        <h1>View All Music</h1>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>artiestID</th>
                <th>albamID</th>
                <th>musicfile</th>
                <th>videofile</th>
                <th>image</th>
                <th>ACTION</th>
            </tr>
            <?php 
            $fetch = mysqli_query($con,"select * from  music");
            while($row = mysqli_fetch_array($fetch))
            {
                echo '   
                <tr>
                    <td>'.$row[0].'</td>
                    <td>'.$row[1].'</td>
                    <td>'.$row[2].'</td>
                    <td>'.$row[3].'</td>
                    <td>
                    <audio controls>
                        <source src="uploadmusic/'.$row[4].'" type="audio/mp3">
                    </audio>
                    </td>
                    <td>
                    <video controls style="width:200px">
                        <source src="uploadvideo/'.$row[5].'" type="video/mp4" >
                    </video>
                    </td>
                    
                    <td><img src="uploadmusicbanner/'.$row[6].'" style="width:50px"></td>
                    
                    
                <td>
                    <a href="" class="btn btn-success btn-sm">Edit</a>
                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                    
            </td>
            </tr>
            ';
            }
        ?>
        </table>
    </div>
</body>
</html>