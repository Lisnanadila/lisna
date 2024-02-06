 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTd2cFieSmgBRQ3nkBmYOhLZ5z2QM5Uc5EV8_XltxmA8g&s height="40px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lihat_tabel.php">Data Pengguna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lihat_tabel.php">Data Buku</a>
        </li>

      </ul>
      <form class="d-flex" action="login.php"> 
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<form class="row g-3 contoh" action="simpan.php" method="post">
  <div class="col-121">
    <label for="inputAddress" class="form-label">nama</label>
    <input type="text" class="form-control" id="inputAddress" name="nama">
  </div>
  <div class="col-121">
    <label for="inputAddress2" class="form-label">tgl</label>
    <input type="text"class="form-control" id="inputAddress2" name="tgl">
  </div>
 <div class="col-121">
    <label for="inputAddress2" class="form-label">alamat</label>
    <input type="text" class="form-control" id="inputAddress2" name="alamat">
  </div>
  <div class="col-121">
    <label for="inputAddress2" class="form-label">username</label>
    <input type="text" class="form-control" id="inputAddress2" name="username">
  </div>
  <div class="col-121">
    <label for="inputAddress2" class="form-label">password</label>
    <input type="text" class="form-control" id="inputAddress2" name="password">
  </div>  
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">kirim</button>
  </div>
</form>
<div class="container">
  <h2>Buku Tamu</h2>
  <form action="simpan.php" method="post">
    <label for="nama">Nama</label>
    <input type="text" id="nama" name="nama" required>

    <label for="email">Email</label>
    <input type="text" id="email" name="email" required>

    <label for="pesan">Pesan</label>
    <input type="text" id="pesan" name="pesan" required>

    

    <label><button type="submit">Kirim</button></label>
    

  </form>
</div>

</body>
</html>