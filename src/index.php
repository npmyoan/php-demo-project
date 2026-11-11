<?php 

require __DIR__ . '/../vendor/autoload.php';

use app\bussines\GeneratorExcel;
use app\interface\DataInterface;
use app\interface\ExcelInterface;
use app\data\BeerData;
use app\excel\CreatorExcel;


$now = date("Y-m-d");
$filePath = __DIR__ . "/files/beer-{$now}.xlsx";

$repository = new BeerData();
$excel = new CreatorExcel();
$generatorExcel = new GeneratorExcel($repository, $excel);
$generatorExcel->generate($filePath);