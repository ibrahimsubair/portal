
<?php
include "connect.php";
$msg = "";
if(isset($_POST['but_upload'])){
    // Get image name
    $name = $_FILES['id']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir .basename($_FILES["id"]["name"]);
   
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENTION));

    $extention_arr = array("jpg", "jpeg", "png", "gif" );
    if( in_array($imageFileType, $extention_arr)){
      $query = "insert into users (photo) values('.$name')";
      mysqli_query($conn, $query);
      move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$name);

    }
}

  $sql = "select name from images where id=1";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  $photo = $row['name'];
  $photo_src = "upload/".$photo

?>
<form method="post" action="" enctype="multipart/form-data">
  <input type="file" name="file" />
  <input type="submit" value="save" name="but_upload">
  
</form>
