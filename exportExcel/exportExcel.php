<?php
require '../PHPExcel.php';
$excel = new PHPExcel();
$sheet = $excel->getActiveSheet();
$sheet->setTitle("Source");
$sheet->setCellValue("A1","Name");
$sheet->setCellValue("B1","Source");
$sheet->setCellValue("A2","ben");
$sheet->setCellValue("B2","30");
$write = new PHPExcel_Writer_Excel5($excel);
$write->save("C:\\Users\\larry\\Desktop\\logo.xls");