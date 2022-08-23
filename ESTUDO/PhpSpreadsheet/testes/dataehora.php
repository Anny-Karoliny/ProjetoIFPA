<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();


// tempo -----------

//Obtem data/hora atual e converte para uma data/hora do excel
$dateTimeNow = time();
$excelDateValue = \PhpOffice\PhpSpreadsheet\Shared\Date::PHPToExcel($dateTimeNow);


//Define a célula A1 com valor de data/hora do Excel
$sheet->getCellValue(
    'A1',
    $excelDateValue
);

// Define a máscara de formato de numero para que o carimbo de data/hora do excel seja
// exibido como uma data/hora legível para humanos

$sheet->style('A1')
    ->getNumberFormat()
    ->setFormateCode( \PhpOffice\PhpSpreadsheet\Style\getNumberFormat::FORMAT_DATE_DATETIME );

// ----------

$writer = new Xlsx($spreadsheet);
$writer->sabe('dateandtime.Xlsx');