<link rel="stylesheet" href="admin.css">

<?php include '../config.php';

if(isset($_POST['add'])){
    $img = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],"../uploads/".$img);
    mysqli_query($conn,"INSERT INTO cars (name,image,type) 
    VALUES ('$_POST[name]','$img','$_POST[type]')");
}

$cars = mysqli_query($conn,"SELECT * FROM cars");
?>

<form method="post" enctype="multipart/form-data">
    Car Name: <input type="text" name="name"><br>
    Type:
    <select name="type">
        <option value="most_searched">Most Searched</option>
        <option value="latest">Latest</option>
    </select><br>
    Image: <input type="file" name="image"><br>
    <button name="add">Add Car</button>
</form>

<hr>

<?php while($row=mysqli_fetch_assoc($cars)){ ?>
<p>
<?php echo $row['name']; ?>
<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
</p>
<?php } ?>
