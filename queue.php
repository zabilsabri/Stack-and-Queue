<?php

class queue{
    public $data = array();
    private $pointer = 0;

    public function push($data) // Menambahkan data ke dalam array, ke indeks yang paling terakhir
    {
        $this->data[$this->pointer++] = $data;
    }

    public function peek() // Mengakses data/element yang paling pertama(indeks yang paling rendah) di dalam array
    {
        return reset($this->data);
    }

    public function isEmpty() // Mengecek apakah data di dalam array masih ada atau sudah habis
    {
        return empty($this->data);
    }

    public function shift() // Menghapus data yang paling Pertama di dalam array
    {
        return array_shift($this->data);
    }
}

$queue = new queue();

$queue->push('Minuman');
$queue->push('Makanan');
$queue->push('Cemilan');
$queue->push('Soda');
// $queue->shift();

echo ($queue->peek());
//var_dump($queue->data);