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
<form action="insertmoviesuccess.php" method="get">
<p>
<label for="id_movie">รหัสภาพยนต์ </label>
<input type="text" name="id_movie" id="id_movie" value=""/>
</p>
<p>
<label for="namemovie">ชื่อภาพยนต์</label>
<input type="text" name="namemovie" id="namemovie" value=""/>
</p>
<p>
<label for="price">ราคาภาพยนต์</label>
<input type="text" name="price" id="price" value="" />
</p>
<p>
<label for="type">ประเภทภาพยนต์</label>
<input type="text" name="type" id="type" value="" />
</p>
<p>
<label for="time">เวลา</label>
<input type="text" name="time" id="time" value="" />
</p>

<p>
        <button type="submit" class="btn btn-success">ยืนยัน</button>
</p>
</form>

    </body>
</html>