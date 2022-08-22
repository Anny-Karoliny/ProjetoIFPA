<?php

require 'vendor/autoload.php'; //autoload do projeto

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$spreadsheet =  new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'Planilhas com PhpSpreadsheet');

//ESTILO DA CELULA A1
$styles = [
    'font'=>[
        'bold'=>true, 
        'color'=>[
            'rgb' => 'FF99FF'
        ],
        'size'=> 25,
        'name'=>'FreeMono'
    ]
];

$styles2 = [
    'font'=>[
        'bold'=>true,
        'color' => [ 'rgb' => '33CCFF'],
    ],
    'size'=>15,
    'name'=>'FreeMono'
];

//DEFINE O ESTILO DA CÉLULA A1
$sheet->getStyle('A1')->applyFromArray($styles);
$sheet->getStyle('A3:c3')->applyFromArray($styles2);

$cells = [
    ['id', 'nome', 'valor'],
    [1, 'pc', 3000],
    [2, 'cllr', 1500],
    [3, 'car', 70000]
];

$sheet->fromArray($cells, null, 'A3');

$writer = new Xlsx($spreadsheet);
$writer->save('spread.Xlsx');