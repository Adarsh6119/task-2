<link rel="stylesheet" href="admin.css">

<?php include '../config.php';

if(isset($_POST['update'])){
    mysqli_query($conn,"UPDATE header SET 
        logo_text='$_POST[logo]',
        item1='$_POST[m1]',
        item2='$_POST[m2]',
        item3='$_POST[m3]'
        WHERE id=1");
}
$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM header WHERE id=1"));
?>

<form method="post">
    Logo Text: <input type="text" name="logo" value="<?php echo $data['logo_text']; ?>"><br>
    Menu 1: <input type="text" name="m1" value="<?php echo $data['item1']; ?>"><br>
    Menu 2: <input type="text" name="m2" value="<?php echo $data['item2']; ?>"><br>
    Menu 3: <input type="text" name="m3" value="<?php echo $data['item3']; ?>"><br>
    <button name="update">Update</button>
</form>
