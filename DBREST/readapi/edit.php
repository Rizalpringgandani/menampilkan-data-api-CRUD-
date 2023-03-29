<?php

function http_request($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$data = http_request("http://localhost/dbrest/api/api_edit.php?id=" . $_GET["id"]);
$data = json_decode($data, TRUE);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    *,
    html,
    body {
        background-color: aliceblue;
    }

    a {
        text-decoration: none;
        background: none;
        color: white;
    }

    :hover a {
        color: white;
    }
</style>

<body>

    <div class="container mt-4">


        <div id="stylish">
            <h1>EDIT PRODUK</h1>
            <p>form ini digunakan untuk mengubah data produk</p>
            <form action="../api/api_ubah.php" method="post" id="form">
                <div class="mr-3 p-3">
                        <label for="">Kode produk</label>
                        <input type="text" class="form-control" value="<?= $data["id"] ?>" name="id" id="id" placeholder="Kode Produk">
                    </div>
                    <div class="mr-3 p-3">
                        <label for="">Nama produk</label>
                        <input type="text" class="form-control" value="<?= $data["nama_produk"] ?>" name="nama_produk" id="nama_produk" placeholder="Nama Produk">
                    </div>
                    <div class="mr-3 p-3">
                        <label for="">Tipe produk</label>
                        <input type="text" class="form-control" value="<?= $data["tipe_produk"] ?>" name="tipe_produk" id="tipe_produk" placeholder="Tipe Produk">
                    </div>
                    <div class="mr-3 p-3">
                        <label for="">Harga</label>
                        <input type="text" class="form-control" value="<?= $data["harga"] ?>" name="harga" id="harga" placeholder="Harga">
                    </div>
                    <div class="mr-3 p-3">
                        <label for="">Stok</label>
                        <input type="text" class="form-control" value="<?= $data["stok"] ?>" name="stok" id="stok" placeholder="Stok">
                    </div>
                    <div class="mr-3 p-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </form>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>