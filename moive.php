<?php
//connect to database 
$objConnect = mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "dbdvd");
mysqli_query($objConnect, "SET NAMES utf8");
$sql = "SELECT id_movie, namemovie, price , type , time FROM movie";
$result = $objConnect->query($sql);

echo "<br>";

?>

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
    if ($result->num_rows > 0) {
      // head of table
     echo "<table border='2px'>";
     echo "<tr bgcolor='purple'>";   echo "<th width='200px'>รหัสภาพยนต์ "; echo "</th>";echo "<th width='200px'> ชื่อภาพยนต์: ";echo "</th>"; echo "<th width='200px'> ราคาภาพยนต์"; echo "</th>"; echo "<th width='300px'>ประเภทภาพยนต์ "; echo "</th>";echo "<th width='200px'> เวลา ";echo "</th>"; 
     echo "</tr>"; 
    // output data of each row
     while($row = $result->fetch_assoc()) {
     echo "<td><a href='editmovie.php?id_movie=$row[id_movie]'>".$row["id_movie"]."</td>"."</a><td>"."</a>".$row["namemovie"]."</td>"."<td>".$row["price"]."</td>"."<td>".$row["type"]."</td>"."<td>".$row["time"]."</td>";
     echo "</tr>"."<br>";    
    
      }
      echo "</table>";
    }
    else {
        echo "0 results";
      }
    
      //menu add data to table
      echo "<br>";
      echo "<a href='insertmovie.php' class='btn btn-success'>Add New Movie</a>";
      echo "<br>";
      echo "<br>";
      
      $objConnect->close();



      
    ?>
    </body>
</html>