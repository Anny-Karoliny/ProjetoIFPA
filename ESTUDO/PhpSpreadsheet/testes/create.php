<?php
// criando planilhas e definindo valores e posições

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet; //clase responsavel pela manipulação da planilha
use PhpOffice\PhpSpreadsheet\Writer\Ods; //classe que salvara a planilha em xlsx ou pode em Ods

$spreadsheet = new Spreadsheet(); //instanciando uma nova planilha  
$sheet = $spreadsheet->getActiveSheet();  // retornando aba ativa
$sheet->setCellValue('A1', 'Hello Word !');
$sheet->setCellValue('B1', 3);
$sheet->setCellValue('C1', 2);
$sheet->setCellValue('D1', '=(B1+C1)'); //formula do calculo de soma

$writer = new Ods($spreadsheet); //Instanciando uma nova planilha
$writer->save('mensagen.Ods'); // salvando planilha na extensao definida
