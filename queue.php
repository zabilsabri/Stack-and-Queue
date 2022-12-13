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

# First In First Out (FIFO)
$queue->shift(); // Mengeluarkan Minuman
$queue->shift(); // Mengeluarkan Makanan
$queue->shift(); // Mengeluarkan Cemilan

echo ($queue->peek()); // Soda
