<?php

class Mahasiswa{
    private $prodi;

    public function setprodi($prodi){
        $this->prodi= $prodi;
    }
    public function getProdi(){
        return $this->prodi;
    }
}
$mhs1= new Mahasiswa();
$mhs1->setProdi("Sistem Informasi");
echo $mhs1->getProdi();
?>