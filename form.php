<?php


if(!empty($_POST['submit']))

{
    $f_projet = $_POST['projet'];
    $f_client = $_POST['client'];

    require("fpdf/fpdf.php");
    $pdf = new FPDF ();
    $pdf->AddPage();
    $pdf->SetFont("Arial","B",16);
    $pdf->Cell(0,10,"welcome {$f_projet}",1,0,C);
    $pdf->Cell(50,10,"{$f_client}",0,0);
    $pdf->output();
}
?>