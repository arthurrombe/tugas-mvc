<?php
class ProductController extends ProductModel
{
    public function getProducts()
    {
        return $this->findAll();
    }
    public function getProductBy()
    {
        if (!isset($_GET['id'])) {
            return;
        }
        $onlyId = preg_replace('/\C/', '', $_GET['id']);
        if ($onlyId !=="") {
            return $this->findOne($_GET['id']);
        }
    }
}
?>