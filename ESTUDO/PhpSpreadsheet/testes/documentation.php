<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Hello Word');
$sheet->setCellValue('A2', 'hey, babay');
$sheet->getCell('B8')
    ->setValue('some value');
$sheet->setCellValue('C7', 'hey');

//$sheet->getCell('C8')
//    ->getStyle()->setQuotePrefix(true);

// Get the current date/time and convert to an Excel date/time
$dateTimeNow = time();
$excelDateValue = \PhpOffice\PhpSpreadsheet\Shared\Date::PHPToExcel( $dateTimeNow );
// Set cell A6 with the Excel date/time value
$spreadsheet->getActiveSheet()->setCellValue(
    'A6',
    $excelDateValue
);
// Set the number format mask so that the excel timestamp will be displayed as a human-readable date/time
$spreadsheet->getActiveSheet()->getStyle('A6')
    ->getNumberFormat()
    ->setFormatCode(
        \PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_DATE_DATETIME
    );

$sheet->fromArray(
    [1,2,3],
    null,
    'A4'
);


$writer = new Xlsx($spreadsheet);
$writer->save('DOCUMENTATION.xlsx');