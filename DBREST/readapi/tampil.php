<?php

function http_request($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$data = http_request("http://localhost/dbrest/api/api_tampil.php");
$data = json_decode($data, TRUE); ?>

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
    <h1>DATA PRODUK</h1> <button class="btn btn-primary mb-3"><a href="../readapi/tambah.php">Tambah Data</a></button>
    <table  class="table mt-4" style="width:100%;" >
        <tr class="table-dark">
            <td>id</td>
            <td>Nama</td>
            <td>Tipe Produk</td>
            <td>Aksi</td>
        </tr>
        <?php foreach ($data as $data) { ?>
            <tr>
                <td>
                    <?= $data["id"] ?>
                </td>
                <td>
                    <?= $data["nama_produk"] ?>
                </td>
                <td>
                    <?= $data["tipe_produk"] ?>
                </td>

                <td colspan="2"> <button class="btn btn-primary mb-3"><a href="../readapi/edit.php?id=<?= $data['id'] ?>">Edit</a></button>  <button class="btn btn-primary mb-3"><a href="../api/api_hapus.php?id=<?= $data['id'] ?>">Hapus</a></button> </td>
            </tr>
        <?php } ?>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>