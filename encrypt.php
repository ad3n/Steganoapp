<?php

error_reporting(0);

require __DIR__ . '/vendor/autoload.php';

$background = $_FILES['background']['tmp_name'];
$pesan = $_FILES['pesan']['tmp_name'];

$extBackground = end((explode('.', $_FILES['background']['name'])));
$extPesan = end((explode('.', $_FILES['pesan']['name'])));
$allowed = array('png', 'gif', 'jpg', 'jpeg');

if (in_array($extBackground, $allowed) && in_array($extPesan, $allowed)) {
	echo "<script type='text/javascript'>alert('Pastikan Anda mengupload gambar'); window.history.go(-1);</script>";
	exit();
}

if ($_FILES['background']['size'] <= $_FILES['pesan']['size']) {
	echo "<script type='text/javascript'>alert('Gambar background harus lebih besar ukurannya dari gambar pesan'); window.history.go(-1);</script>";
	exit();
}

$type = pathinfo($pesan, PATHINFO_EXTENSION);
$message = base64_encode(file_get_contents($pesan));

$pesan = serialize(array('data' => $message, 'type' => $type));

$processor = new KzykHys\Steganography\Processor();
$image = $processor->encode($background, $pesan);

header ('Content-Type: image/png');
header("Content-Disposition: attachment;filename= encrypted.png");
$image->render();
