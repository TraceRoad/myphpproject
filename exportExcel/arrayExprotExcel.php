<?php
require '../PHPExcel.php';
$excel = new PHPExcel();
$sheet = $excel->getActiveSheet();
$sheet->setTitle("Source");
$letter = array("A","B","C","D","E","F","G");
$data = array(
		array("1","ben","20","30"),
		array("2","lucy","30","40"),
		array("3","ace","28","48"),
		array("4","sunny","26","36"),
		array("5","molly","27","57")
);
$head = array("id","name","age","source");
for ($i=0;$i<count($head);$i++){
	$sheet->setCellValue("$letter[$i]1","$head[$i]");
}
for ($j=2;$j<=count($data)+1;$j++){
	$n=0;
	$key = $data[$j-2];
	for ($m=0;$m<count($key);$m++){
		$sheet->setCellValue("$letter[$m]$j","$key[$m]");
	}
	$n++;
}
$write = new PHPExcel_Writer_Excel5($excel);
$write->save("C:\\Users\\larry\\Desktop\\logo.xls");
