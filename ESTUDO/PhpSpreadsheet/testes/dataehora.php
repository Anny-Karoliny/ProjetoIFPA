<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Obtém a data/hora atual e converte para uma data/hora do Excel
$dateTimeNow = time();
$excelDateValue = \PhpOffice\PhpSpreadsheet\Shared\Date::PHPToExcel( $dateTimeNow );

// Define a célula A1 com o valor de data/hora do Excel
$sheet->setCellValue(
    'A1',
    $excelDateValue
);

// Defina a máscara de formato de número para que o carimbo de data/hora do Excel seja exibido como uma data/hora legível por humanos
$sheet->getStyle('A1')
    ->getNumberFormat()
    ->setFormatCode(
        \PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_DATE_DATETIME
    );

//NUMEROS COM ZERO A ESQUERDA

//definir explicitamente como string ou

$sheet->setCellValue('A3','022948');
$sheet->setCellValue('B3', 'zero à esquerda');

// or

// Defina a célula A4 com um valor numérico, mas diga ao PhpSpreadsheet que ela deve ser tratada como uma string
$sheet->setCellValueExplicit(
    'A4',
    '02393932',
    \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING
);

//or

// Define a célula A9 com um valor numérico
$sheet->setCellValue('A8', 23432432);
// Define uma máscara de formato de número para exibir o valor como 11 dígitos com zeros à esquerda
$sheet->getStyle('A8')
    ->getNumberFormat()
    ->setFormatCode(
        '0000000000000000'
    );

// Define a célula A10 com um valor numérico
$sheet->setCellValue('A10', 1513789642);
// Define uma máscara de formato de número para exibir o valor como 11 dígitos com zeros à esquerda
$sheet->getStyle('A10')
    ->getNumberFormat()
    ->setFormatCode(
        '0000--00-00-00-00-00-00'
    );



//salvar arquivo
$writer = new Xlsx($spreadsheet);
$writer->save('dateandtime.xlsx');