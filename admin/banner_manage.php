<link rel="stylesheet" href="admin.css">
<?php include '../config.php';

if(isset($_POST['add'])){
    $img = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],"../uploads/".$img);
    mysqli_query($conn,"INSERT INTO banners (title,image) VALUES ('$_POST[title]','$img')");
}
?>

<form method="post" enctype="multipart/form-data">
    Banner Title: <input type="text" name="title"><br>
    Image: <input type="file" name="image"><br>
    <button name="add">Add Banner</button>
</form>
