<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
*,html,body{
  background-color: aliceblue;
}
a{
    text-decoration: none;
    background: none;
    color: white;
}
:hover a{
    color: white;
}
</style>
<body>

    <div class="container mt-4">
       
        
        <div id="stylish">
            <h1>TAMBAH PRODUK</h1>
            <p>form ini digunakan untuk tambah data produk</p>
            <form action="../api/api_tambah.php" method="post" id="form">
                <div class="mr-3 p-3">
                    <label class="form-label" for="">Nama Produk</label>
                    <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Nama Produk" aria-describedby="helpId">
                </div>
                <div class="mr-3 p-3">
                    <label class="form-label" for="">Tipe Produk</label>
                    <input type="text" class="form-control" name="tipe_produk" id="tipe_produk" placeholder="Tipe Produk" aria-describedby="helpId">
                </div>
                <div class="mr-3 p-3">
                    <label class="form-label" for="">Harga</label>
                    <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" aria-describedby="helpId">
                </div>
                <div class="mr-3 p-3">
                    <label class="form-label" for="">Stok</label>
                    <input type="text" class="form-control" name="stok" id="stok" placeholder="Stok" aria-describedby="helpId">
                </div>
                <div >
                    <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                    <button class="btn btn-primary mb-3"><a href="../readapi/tampil.php">Kembali</a></button>
                </div>
            </form>
        </div>
        
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>