<?php

// fazer o download do DomPDF e colocar na pasta do seu projeto
//Extrair o arquvio e deixar tudo dentro da pasta dompdf/ (cuidado com a subpastas)

//incluir o autoloader
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

$relatorio = "<!DOCTYPE html><html lang='pt-br'><head><meta charset='UTF-8'><meta name='viewport'       content='width=device-width, initial-scale=1.0'><title>Gerar PDF</title><style>
        body{ font-family:Arial, sans-serif }
        h1{ color:#006699 ; text-align: center}
        p{ font-size: 16px; line-height:1.5 }
    </style></head><body><h1>Relatório de Vendas do Trimestre</h1><p>Este relatório contém as informações dos meses Janeiro, Fevereiro e Março de 2026</p></body></html>
";




// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($relatorio);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');//portrait = folha de pé, 

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
//$dompdf->stream('mudaraqui.pdf');
$dompdf->stream("mudaraqui.pdf",array("Attachment" => false));//true= download, false = navegador



?>