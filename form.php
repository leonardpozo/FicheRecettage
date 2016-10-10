<?php


if(!empty($_POST['submit']))

{
    $f_name = $_POST['prenom'];

    require("fpdf/fpdf.php");
    $pdf = new FPDF ();
    $pdf->AddPage();
    $pdf->SetFont("Arial","B",16);
    $pdf->Cell(0,10,"welcome {$f_name}",1,0,C);
    $pdf->output();
}
?>