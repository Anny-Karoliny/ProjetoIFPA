<?php

require 'vendor/autoload.php';

use \PhpOffice\PhpSpreadsheet\Spreadsheet;
use \PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();


//Definindo linhas

$rowArray = ['243', '343', '324', '67'];
$sheet->fromArray(
    $rowArray, 
    NULL,
    'B2'
);


//Definindo colunas


$columnArray = array_chunk(['column','column2', 'column3', 'column4'], 1);
$sheet->fromArray(
    $columnArray, 
    NULL, 
    'b4'
);

// definindo celula com formular

$sheet->setCellValue('a1', '=SUM(B2:E2)');


//recuperando valor de celula por coordenada
$valorDaCelula = $sheet->getCell('b6')->getValue();
echo 'O valor da celula B6 é: '.$valorDaCelula.PHP_EOL;

//recuperar valor de uma formula

$valueFormula = $sheet->getCell('A1')->getCalculatedValue();
echo 'O valor da formula na celula A1 é: '.$valueFormula.PHP_EOL;

//definindo formatação de hora na celula A6

$dateTimeNow = time();
$excelDateValue = \PhpOffice\PhpSpreadsheet\Shared\Date::PHPToExcel( $dateTimeNow );
$sheet->setCellValue('a6', $excelDateValue);
$sheet->getStyle('a6')
    ->getNumberFormat()
    ->setFormatCode(
        \PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_DATE_DATETIME
    );
//pegando valor formatado em hora na celula a6

$hourFormated = $sheet->getCell('A6')->getFormattedValue();
echo 'Hora da celula A6: '.$hourFormated .PHP_EOL;



// pegar valor da formatação de hora aplicada (legivel para humanos)

$hour = $sheet->getCell('a6')->getFormattedValue();

$writer = new Xlsx($spreadsheet);
$writer->save('rowandcolumn.xlsx');
