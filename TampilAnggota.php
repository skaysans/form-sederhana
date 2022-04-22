<?php
$nim;
$nama;
$jenisKelamin;
$alamat;
$jenisMahasiswa;

foreach ($_POST as $key => $value) {
    if ($key == 'nim') {
        $nim = $_POST['nim'];
    } else if ($key == 'nama') {
        $nama = $_POST['nama'];
    } else if ($key == 'jenisKelamin') {
        $jenisKelamin = $_POST['jenisKelamin'];
    } else if ($key == 'alamat') {
        $alamat = $_POST['alamat'];
    } else {
        $jenisMahasiswa = $_POST['jenisMahasiswa'];
    }
}

$maxChar = 42;
$alamatParse = "";
$indexCounter = 0;
$spaceAfterLine = "                  ";

while ($indexCounter <= $maxChar - 1) {
    if ($indexCounter == strlen($alamat)) {
        break;
    }
    if ($indexCounter == $maxChar - 1) {
        $alamatParse = $alamatParse . $alamat[$indexCounter] . "\n" . $spaceAfterLine;

        if (strlen($alamat) > $maxChar) {
            $maxChar *= 2;
        }
        $indexCounter++;
    } else {
        $alamatParse = $alamatParse . $alamat[$indexCounter];
        $indexCounter++;
    }
}


?>

<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="tampil-anggota.css" rel="stylesheet" type="text/css">
	<title>Tampil Anggota Perpustakaan UBSI</title>
</head>
<body>
<div class="container">
	<marquee id="title">Selamat Datang di Perpustakaan UBSI</marquee>
	<hr id="line-under-title">

	<table id="data">
		<tr id="nim">
			<td>
				<pre>NIM             : <?php echo $nim ?></pre>
			</td>
		</tr>
		<tr id="nama">
			<td>
				<pre>Nama            : <?php echo $nama ?></pre>
			</td>
		</tr>
		<tr id="jenis-kelamin">
			<td>
				<pre>Jenis Kelamin   : <?php echo $jenisKelamin ?></pre>
			</td>
		</tr>
		<tr id="alamat">
			<td>
				<pre>Alamat          : <?php echo $alamatParse ?></pre>
			</td>
		</tr>
		<tr id="mahasiswa">
			<td>
				<pre>Jenis Mahasiswa : <?php echo $jenisMahasiswa ?></pre>
			</td>
		</tr>
	</table>

	<br>

	<button id="submit"><a id="back" href="InputDataAnggota.html">Keluar</a></button>
</div>
</body>
</html>

