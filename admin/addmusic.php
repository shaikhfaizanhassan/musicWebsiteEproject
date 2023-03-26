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
        <h1>Add New Music</h1>
        <form action="" method="POST" style="width:600px" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td>NAME</td>
                    <td><input type="text" name="name" class="form-control"></td>
                </tr>
                <tr>
                    <td>select artest</td>
                    <td>
                        <select name="selectartest" id="" class="form-control">
                            <?php 
                                $artest = mysqli_query($con,"select * from artest");
                                while($row = mysqli_fetch_array($artest))
                                {
                            ?>
                                <option value="" hidden="true">Select Artest</option>
                                <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>select albem</td>
                    <td>
                    <select name="selectalbam" id="" class="form-control">
                            <?php 
                                $artest = mysqli_query($con,"select * from albam");
                                while($row = mysqli_fetch_array($artest))
                                {
                            ?>
                                <option value="" hidden="true">Select Albam</option>
                                <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Uploal music</td>
                    <td><input type="file" name="musicfile" class="form-control"></td>
                </tr>
                <tr>
                    <td>Upload Video</td>
                    <td><input type="file" name="videofile" class="form-control"></td>
                </tr>
                <tr>
                    <td> Upload Music Image</td>
                    <td><input type="file" name="imagefile" class="form-control"></td>
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
                $artest = $_POST["selectartest"];
                $albam = $_POST["selectalbam"];
                $musicname = $_FILES["musicfile"]["name"];
                $musictemplocation = $_FILES["musicfile"]["tmp_name"];
                
                $videoname = $_FILES["videofile"]["name"];
                $videotemplocation = $_FILES["videofile"]["tmp_name"];
                
                $musicbanner = $_FILES["imagefile"]["name"];
                $musicbannertemplocation = $_FILES["imagefile"]["tmp_name"];

                move_uploaded_file($musictemplocation,"uploadmusic/".$musicname);
                move_uploaded_file($videotemplocation,"uploadvideo/".$videoname);
                move_uploaded_file($musicbannertemplocation,"uploadmusicbanner/".$musicbanner);

                $music = mysqli_query($con,"INSERT INTO `music`(`name`, `artiestID`, `albamID`, `musicfile`, `videofile`, `image`) 
                VALUES ('$name','$artest','$albam','$musicname','$videoname','$musicbanner')");

                if($music>0)
                {
                    echo "<h1>Music Save</h1>";
                }
                else
                {
                    echo "<h1>Albam Not Save</h1>";
                }
                
                
                
                
                
            }
        ?>
    </div>
</body>
</html>