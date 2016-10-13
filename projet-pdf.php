<?php


if(!empty($_POST['submit']))

{
    $f_projet = $_POST['Projet'];
    $f_nom = $_POST['t1'];
    $f_prenom = $_POST['t2'];
    $f_adresse = $_POST['t3'];
    $f_mail = $_POST['Mail'];
    $f_site = $_POST['Site'];
    $f_objectifSmart = $_POST['ObjectifSmart'];

    require("fpdf/fpdf.php");
    $pdf = new FPDF ();
    $pdf->AddPage();
    $pdf->SetFont("Arial","B",16);
    $pdf->Cell(0,10,"Projet {$f_projet}",1,0,C);

    $pdf->Ln(14);

    $pdf->Cell(0,10,"Information client",1,0,C);
    $pdf->Ln(10);
    $pdf->Cell(50,10,"Nom :",1,0);
    $pdf->Cell(50,10,$f_nom,1,0);
    $pdf->Ln(10);
    $pdf->Cell(50,10,"Prenom :",1,0);
    $pdf->Cell(50,10,$f_prenom,1,0);
    $pdf->Ln(10);
    $pdf->Cell(50,10,"Adresse :",1,0);
    $pdf->Cell(50,10,$f_adresse,1,0);
    $pdf->Ln(10);
    $pdf->Cell(50,10,"Mail :",1,0);
    $pdf->Cell(50,10,$f_mail,1,0);
    $pdf->Ln(10);
    $pdf->Cell(50,10,"Site :",1,0);
    $pdf->Cell(50,10,$f_site,1,0);

    $pdf->Ln(14);
    $pdf->Cell(0,10,"Objectif Smart",1,0,C);
    $pdf->Ln(10);
    $pdf->Cell(0,10,$f_objectifSmart,1,0);


    $pdf->output();


}