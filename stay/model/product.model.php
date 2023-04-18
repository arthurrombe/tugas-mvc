<?php

class ProductModel extends Connection
{
    protected $name;
    protected $status;
    protected $jumlah_anak;

    protected function findAll()
    {
        $sql ="SELECT * FROM data karyawan";
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                $product[] =$data;
            }
        }
    }
    protected function findOne($id)
    {
        $sql = "SELECT * FROM data karyawan WHERE id=" . $id; 
        $result =$this->connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($result)){
                $product[] = $data;
            }
            return $product;
        }
    }
}
?>