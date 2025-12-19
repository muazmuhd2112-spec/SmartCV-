<?php
require 'dompdf/vendor/autoload.php';
include 'conn.php';

use Dompdf\Dompdf;

$id = $_GET['user_id'];

ob_start();
include 'template1.php'; // your HTML CV file (the one you already made)
$html = ob_get_clean();

$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("User_CV.pdf", ["Attachment" => true]);
?>
