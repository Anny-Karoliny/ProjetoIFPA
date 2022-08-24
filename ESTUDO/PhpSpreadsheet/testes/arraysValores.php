<?php

require 'vendor/autoload.php';

use \PhpOffice\PhpSpreadsheet\Spreadsheet;
use \PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();



//DEFININDO VALORES POR ARRAYS

$arrayData = [
    [NULL, 2010, 2011, 2012],
    ['Q1',   12,   16,   467],
    ['Q2',  323,  222,   65],
    ['Q3', 3333,  212,  233],
    ['Q4',    3,   32,   265]
];

$sheet->fromArray(
    $arrayData,         //OS DADOS A SEREM DEFINIDOS
    NULL,               // VALORES DE ARRAYS COM ESTE VALOR NAO SERÃO DEFINIDOS
    'C2'                // ONDE COMEÇA A DEFINIR OS VALORES (O PADRAO É A1)
);

$write = new Xlsx($spreadsheet);
$write->save('testeArrays.xlsx');