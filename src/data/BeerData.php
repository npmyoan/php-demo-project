<?php

namespace app\data;

use PDO;
use app\interface\DataInterface;


class BeerData extends BaseData implements DataInterface {
  const TABLE = 'beer';
  public function get(): array{
    $sql = "SELECT id, name, alcohol FROM " . self::TABLE;
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
