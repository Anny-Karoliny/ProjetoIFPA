<?php

require 'vendor/autoload.php';

use \PhpOffice\PhpSpreadsheet\Spreadsheet;
use \PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

//DEFININDO VALORES POR ARRAYS

$arrayschedules = [
    [NULL,        NULL,       NULL,   'Informática', '-2020 Tarde',   NULL,      NULL],
    [NULL, '   SEGUNDA',    'TERÇA',       'QUARTA',     'QUINTA',  'SEXTA',  'SÁBADO'],
    ['HOR',    'EMPREE', 'PROJ INT',    'LING PROG',      'REDES',  'MANUT',   'MANUT'],
    ['HOR',    'EMPREE',  'GEOGRAF',    'LING PROG',      'REDES',  'MANUT',   'MANUT'],
    ['HOR', 'LING PORT',  'GEOGRAF',      'GEOGRAF',      'REDES',  'FISIC',   'FISIC'],
    ['HOR',       NULL,        NULL,           NULL,         NULL,     NULL,     NULL],
    ['HOR', 'LINF PORT',   'EMPREE',      'GEOGRAF',     'INGLES',  'FISIC',   'FISIC'],
    ['HOR',  'ENG SOFT',   'EMPREE',       'HISTOR',     'QUIMIC', 'MIDIAS',  'MIDIAS'],
    ['HOR',  'ENG SOFT',      NULL,        'HISTOR',     'QUIMIC', 'MIDIAS',  'MIDIAS'],

];


$sheet->fromArray(
    $arrayschedules,
    NULL,
    'B3'
);

$styles = [
    'font'=>[
        'bold'=>true, 
        'color'=>['rgb' => '33ccff'],
    ],
    'size'=>15,
    'name'=>'FreeMono'
];

$sheet->getStyle('C3:I3')->applyFromArray($styles);


$writer = new Xlsx($spreadsheet);
$writer->save('horario.xlsx');

