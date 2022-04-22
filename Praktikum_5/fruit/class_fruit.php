<?php

    class Fruit {
        public $nama;
        public $warna;
        public $berat;

        public function set_nama($nama) {
            $this->nama = $nama;
            echo "Hello saya bernama {$this->nama}" . PHP_EOL;
        }

        public function set_warna($w) {
            $this->warna = $w;
        }

        public function set_berat($b) {
            $this->berat = $b;
        }
    }




    class Anggur extends Fruit {
        public function getBuah() {
            echo "Saya adalah buah {$this->nama}";
        }
    }


    $mangga = new Fruit();
    $mangga->set_nama("Mangga");



    $anggur = new Anggur();
    $anggur->nama = "Anggur";
    $anggur->getBuah();

?>
