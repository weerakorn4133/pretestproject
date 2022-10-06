<?php
//connect to database 
$objConnect = mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "dbdvd");
mysqli_query($objConnect, "SET NAMES utf8");
$sql = "SELECT id, firstname_us, lastname_us , address_us , tel_us FROM users";
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
     echo "<tr bgcolor='purple'>";   echo "<th width='200px'>รหัสสมาชิก "; echo "</th>";echo "<th width='200px'> ชื่อ: ";echo "</th>"; echo "<th width='200px'> นามสกุล"; echo "</th>"; echo "<th width='300px'>ที่อยู่ "; echo "</th>";echo "<th width='200px'> เบอร์โทร ";echo "</th>"; 
     echo "</tr>"; 
    // output data of each row
     while($row = $result->fetch_assoc()) {
     echo "<td><a href='editpromo.php?id=$row[id]'>".$row["id"]."</td>"."</a><td>"."</a>".$row["firstname_us"]."</td>"."<td>".$row["lastname_us"]."</td>"."<td>".$row["address_us"]."</td>"."<td>".$row["tel_us"]."</td>";
     echo "</tr>"."<br>";    
    
      }
      echo "</table>";
    }
    else {
        echo "0 results";
      }
    
      //menu add data to table
      echo "<br>";
      echo "<a href='insertusers.php' class='btn btn-success'>Add New Users</a>";
      echo "<br>";
      echo "<br>";
      
      $objConnect->close();



      
    ?>
    </body>
</html>