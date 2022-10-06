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
<form action="insertsuccess.php" method="get">
<p>
<label for="id">รหัสสมาชิก </label>
<input type="text" name="id" id="id" value=""/>
</p>
<p>
<label for="firstname_us">ชื่อสมาชิก</label>
<input type="text" name="firstname_us" id="firstname_us" value=""/>
</p>
<p>
<label for="lastname_us">นามสกุลสมาชิก</label>
<input type="text" name="lastname_us" id="lastname_us" value="" />
</p>
<p>
<label for="address_us">ที่อยู่สมาชิก</label>
<input type="text" name="address_us" id="address_us" value="" />
</p>
<p>
<label for="tel_us">เบอร์โทรสมาชิก</label>
<input type="text" name="tel_us" id="tel_us" value="" />
</p>

<p>
        <button type="submit" class="btn btn-success">ยืนยัน</button>
</p>
</form>

    </body>
</html>