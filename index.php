<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Cars</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- HEADER -->
<?php
$header = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM header LIMIT 1"));
?>
<header>
    <h1><?php echo $header['logo_text']; ?></h1>
    <nav>
        <a href="#"><?php echo $header['item1']; ?></a>
        <a href="#"><?php echo $header['item2']; ?></a>
        <a href="#"><?php echo $header['item3']; ?></a>
    </nav>
</header>

<!-- BANNER -->
<section class="banner">
<?php
$banner = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM banners ORDER BY id DESC LIMIT 1"));
?>
    <img src="uploads/<?php echo $banner['image']; ?>">
    <h2><?php echo $banner['title']; ?></h2>
</section>

<!-- MOST SEARCHED CARS -->
<section>
    <h2>Most Searched Cars</h2>
    <div class="cars">
    <?php
    $cars = mysqli_query($conn,"SELECT * FROM cars WHERE type='most_searched'");
    while($row = mysqli_fetch_assoc($cars)){
    ?>
        <div class="car">
            <img src="uploads/<?php echo $row['image']; ?>">
            <p><?php echo $row['name']; ?></p>
        </div>
    <?php } ?>
    </div>
</section>

<!-- LATEST CARS -->
<section>
    <h2>Latest Cars</h2>
    <div class="cars">
    <?php
    $cars = mysqli_query($conn,"SELECT * FROM cars WHERE type='latest'");
    while($row = mysqli_fetch_assoc($cars)){
    ?>
        <div class="car">
            <img src="uploads/<?php echo $row['image']; ?>">
            <p><?php echo $row['name']; ?></p>
        </div>
    <?php } ?>
    </div>
</section>

<!-- FOOTER -->
<footer>
    <p>© 2026 Cars</p>
</footer>

</body>
</html>
