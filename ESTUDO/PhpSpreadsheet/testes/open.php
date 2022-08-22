<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

$spreadsheet = IOFactory::load('mensagen.Ods'); // carrega a planilha em um obj php
$sheet = $spreadsheet->getActiveSheet(); //retornando a aba ativa

$cellA1 = $sheet->getCell('A1')->getValue(); // cellA1 recebe dados da celula A1
$cellB1 = $sheet->getCell('B1')->getValue(); 
$cellC1 = $sheet->getCell('C1')->getValue(); 

echo('O valor da celula A1 = '.$cellA1 . PHP_EOL);
echo('O valor da céular B1 = '.$cellB1 . PHP_EOL);
echo('O valor da céular C1 = '.$cellC1 . PHP_EOL);
