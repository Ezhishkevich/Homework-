<?php


namespace php;

require_once "vendor/autoload.php";




use php\Connection;



class cycle
{
    public $pdo;
    public function __construct()
    {
        $this->$pdo = new Connection();
        $this->$pdo->getConection();
    }

    public function insertDatatoDB(string $sql,)
    {
        return $this->pdo->db->exec($sql);
    }
    public function getdata(string $sql,)
    {
        $this->pdo->db->query($sql);
    }
}
$select = "SELECT * FROM New WHERE id=2";
$cycle = new cycle();
$getdata = $cycle->getdata($select);
while ($row = $getdata->fetch_assoc()) {
    $name = $row['name'];
    $text = $row['text'];
    $img = $row['img'];
}
$getdata = $cycle->getdata($select);
$select = "SELECT * FROM New WHERE id=1";


while ($row = $getdata->fetch_assoc()) {
    $name_two = $row['name'];
    $text_two = $row['text'];
    $img_two = $row['img'];
    $select = "SELECT * FROM New WHERE id=2";
    $getdata = $cycle->getdata($select);

    while ($row = $getdata->fetch_assoc()) {
        $name_three = $row['name'];
        $text_three = $row['text'];
        $img_three = $row['img'];

        $select = "SELECT * FROM New WHERE id=3";
        $result = $conn->query($sql);
    }
}
