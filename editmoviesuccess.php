<html>
    <head class="navbar">
        <meta charset="UTF-8">
        <title>Main</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>

    <body >
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="users.php">รายชื่อสมาชิก
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="moive.php">ภาพยนตร์</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "dbdvd");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE movie SET id_movie='$_GET[id_movie]',namemovie='$_GET[namemovie]',price='$_GET[price]',type='$_GET[type]',time='$_GET[time]'
 WHERE id_movie='$_GET[id_movie]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='moive.php' class='btn btn-success'>กลับหน้าหลัก</a>";
}
?>


    </body>
</html>