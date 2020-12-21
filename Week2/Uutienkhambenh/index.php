<?php
class Patient
{
    public $queue = [];
    public $limit;
    public $name;
    public $code;

    //* Hàm khởi tạo *//
    public function __construct($limit)
    {
        $this->limit = $limit;
    }

    //* Thêm phần tử vào queue *//
    public function enqueue($nameParam, $codeParam)
    {
        if ($this->isFull()) {
            throw new Exception("Queue is full , can't push Item");
        } else {
            $this->queue[] = [
                'name' => $nameParam,
                'code' => $codeParam,
            ];
        }
    }

    //* Xóa phần tử khỏi queue *//
    public function dequeue()
    {
        if ($this->isEmpty()) {
            throw new Exception("Queue is Empty , can't delete Item");
        }
        return array_shift($this->queue);
    }

    //* Lấy phần tử đầu tiên của queue mà không xóa nó *//
    public function peek()
    {
        if ($this->isEmpty()) {
            throw new Exception("Queue is Empty, can't show this Item");
        } else {
            return current($this->queue);
        }
    }

    public function isEmpty()
    {
        if (count($this->queue) == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function isFull()
    {
        if (count($this->queue) == $this->limit) {
            return true;
        } else {
            return false;
        }
    }

    //sắp xếp theo độ ưu tiên
    public function sortByCode()
    {
        $code         = array_column($this->queue, 'code');
        array_multisort($code, SORT_ASC, $this->queue);
        //return $this->queue;
    }

    public function toArray()
    {
        return $this->queue;
    }
}

$objPatient = new Patient(5);
try {
    $objPatient->enqueue('Smith', 5);
    $objPatient->enqueue('Jones', 4);
    $objPatient->enqueue('Fehrenbach', 6);
    $objPatient->enqueue('Brown', 1);
    $objPatient->enqueue('Ingram', 1);

    //sap xep
    $objPatient->sortByCode();

    //Hiển thị danh sách bệnh nhân
    $patients = $objPatient->toArray();
    echo '<hr>';
    echo 'Dánh sách sau khi sắp xếp';
    echo '<pre>';
    print_r($patients);
    echo '</pre>';

    //thực hiện khám và cho bệnh nhân về
    $firstPatien = $objPatient->dequeue();

    echo '<hr>';
    echo 'Thông tin bệnh nhân đã khám';
    echo '<pre>';
    print_r($firstPatien);
    echo '</pre>';

    //Hiển thị danh sách bệnh nhân, sau khi khám
    $patients = $objPatient->toArray();
    echo '<hr>';
    echo 'Dánh sách sau khi khám';
    echo '<pre>';
    print_r($patients);
    echo '</pre>';
} catch (Exception $e) {
    echo $e->getMessage();
}
