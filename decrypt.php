<?php

error_reporting(0);

require __DIR__ . '/vendor/autoload.php';

$pesan = $_FILES['pesan']['tmp_name'];

$ext = end((explode('.', $_FILES['pesan']['name'])));
$allowed = array('png');

if (! in_array($ext, $allowed)) {
	echo "<script type='text/javascript'>alert('Pastikan Anda mengupload gambar yang terenkripsi'); window.history.go(-1);</script>";
	exit();
}

$processor = new KzykHys\Steganography\Processor();
$message = $processor->decode($pesan);

$pesan = unserialize($message);

if ($pesan) {
	header (sprintf('Content-Type: image/%s', $pesan['type']));
	header(sprintf('Content-Disposition: attachment;filename= decrypted.%s', $pesan['type']));
	echo base64_decode($pesan['data']);
} else {
	echo "<script type='text/javascript'>alert('Gambar tidak mengandung pesan'); window.history.go(-1);</script>";
}
