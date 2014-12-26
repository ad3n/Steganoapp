<?php

error_reporting(0);

require __DIR__ . '/vendor/autoload.php';

$pesan = $_FILES['pesan']['tmp_name'];

$processor = new KzykHys\Steganography\Processor();
$message = $processor->decode($pesan);

$pesan = unserialize($message);

if ($pesan) {
	header (sprintf('Content-Type: image/%s', $pesan['type']));
	header("Content-Disposition: attachment;filename= decrypted.png");
	echo base64_decode($pesan['data']);
} else {
	echo "<script type='text/javascript'>alert('Gambar tidak mengandung pesan'); window.history.go(-1);</script>";
}
