<?php

class stack{
    public $data = array();
    private $pointer = 0;

    public function push($data) // Menambahkan data ke dalam array, ke indeks yang paling terakhir
    {
        $this->data[$this->pointer++] = $data;
    }

    public function peek() // Mengakses data/element yang paling terakhir(indeks yang paling tinggi) di dalam array
    {
        return end($this->data);
    }

    public function pop() // Menghapus data yang paling terakhir di dalam array
    {
        return array_pop($this->data);
    }
}

$stack = new stack();

$stack->push('Minuman');
$stack->push('Makanan');
$stack->push('Cemilan');
$stack->push('Soda');

# Last In First Out (LIFO)
$stack->pop(); // mengeluarkan soda
$stack->pop(); // mengeluarkan cemilan
$stack->pop(); // mengeluarkan makanan


echo($stack->peek()); // minuman
