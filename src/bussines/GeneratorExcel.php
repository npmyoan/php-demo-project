<?php 

namespace app\bussines;


use app\interface\DataInterface;
use app\interface\ExcelInterface;


class GeneratorExcel {
  

  public function __construct(private DataInterface $repository,private  ExcelInterface $excel)
  {
  }

  public function generate(string $filePath){
    $data = $this->repository->get();
    $this->excel->create($data, $filePath);
  }
}