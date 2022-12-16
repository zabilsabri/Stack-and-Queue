# Stack-and-Queue

**Nama: Zabil Sabri Muhammad** <br/>
**NIM: H071211016** <br/>
**Kelas: Struktur Data A** <br/>

1. **Stack** <br/>
Stack adalah salah satu jenis struktur data yang mana elemennya hanya bisa dimasukkan dan dikeluarkan pada posisi akhir saja atau konsep ini lebih sering dikenal dengan 
Last In First Out (LIFO). Struktur data jenis ini sering kita temukan pada fitur `Undo` pada aplikasi. Jadi ketika memasukkan data, data tersebut akan diletakkan pada posisi
paling atas atau terakhir dan jika kita melakukan `Undo`, maka data yang paling terakhir masuk akan dihapus. <br /> <br />

Agar kita dapat memahami lebih mudah, berikut adalah ilustrasi dari struktur data stack: <br/>
<img src="https://user-images.githubusercontent.com/79674049/207994957-2b9083a8-d459-4037-97c8-3842c3c8b884.gif" width="200">

Berikut adalah salah satu contoh kode program bahasa PHP yang menggunakan konsep struktur data Stack:
```
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
```
<br/>
<br/>

2. **Queue** <br/>
Queue adalah jenis struktur data yang mana kebalikan dari struktur data Stack. Queue memiliki konsep First In First Out (FIFO) yang mana data yang pertama kali masuk akan
keluar terlebih dahulu. Salah satu contoh peng-aplikasian dari jenis struktur data ini adalah aplikasi pesanan makanan, yang mana orang yang pertama memesan akan
proses terlebih dahulu. <br /> <br />
Berikut adalah ilustrasi dari struktur data queue: <br/>
<img src="https://user-images.githubusercontent.com/79674049/207997182-692688a3-44eb-4481-a209-a3f5162fcdc2.gif" width="400">

Berikut adalah contoh kode program bahasa PHP yang menggunakan jenis struktur data Queue:
```
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
```
