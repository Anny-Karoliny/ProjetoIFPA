<?php

require 'vendor/autoload.php';

use \PhpOffice\PhpSpreadsheet\Spreadsheet;
use \PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet(); 
$sheet = $spreadsheet->getActiveSheet();


$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
$reader->setReadDataOnly(TRUE);
$spreadsheet = $reader->load('rowandcolumn.xlsx');

$worksheet = $spreadsheet->getActiveSheet();

echo '<table>'.PHP_EOL;
foreach ($worksheet->getRowIterator() as $row){
    echo '<tr>'.PHP_EOL;
    $cellIterator = $row->getCellIterator();
    $cellIterator->setIterateOnlyExistingCells(FALSE);


    foreach ($cellIterator as $cell){
        echo '<td>' . $cell->getValue().'</td>' . PHP_EOL;
    }

    echo '</tr>'.PHP_EOL;
}

echo '</table>'.PHP_EOL;

// // CODE ---------------------------------

// $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
// $reader->setReadDataOnly(TRUE);
// $spreadsheet = $reader->load("test.xlsx");

// $worksheet = $spreadsheet->getActiveSheet();

// echo '<table>' . PHP_EOL;
// foreach ($worksheet->getRowIterator() as $row) {
//     echo '<tr>' . PHP_EOL;
//     $cellIterator = $row->getCellIterator();
//     $cellIterator->setIterateOnlyExistingCells(FALSE); // Isso pecorre todas as celulas
//                                                        // mesmo se um valor de celula nao estiver definido
//                                                        // Para 'TRUE' pecorrendo as celulas
//                                                        // somente quando seu valor é definido
//                                                        // Se este metodo nao for chamado
//                                                        // O valor é padrao é 'false'
//     foreach ($cellIterator as $cell) {
//         echo '<td>' .
//              $cell->getValue() .
//              '</td>' . PHP_EOL;
//     }
//     echo '</tr>' . PHP_EOL;
// }
// echo '</table>' . PHP_EOL;




// CODE ---------------------------------


$writer = new Xlsx($spreadsheet);
$writer->save('pecorrendoCelulas.xlsx');