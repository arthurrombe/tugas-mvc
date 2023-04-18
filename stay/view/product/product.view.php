<?php
class ProductView extends ProductController
{
    public function show()
    {
        $products = $this->getProducts();

        foreach ($products as $product) { ?> 
     <tr>
        <td><?php echo $product['id']; ?></td>
        <td><?php echo $product['name']; ?></td>
        <td><?php echo $product['status']; ?></td>
        <td><?php echo $product['jumlah anak']; ?></td>
       
     </tr>
     <?php
     
        
        }
    }

    public function find()
    {
        $detailProduct = $this->getProductBy();
        if (empty($detailProduct))
        return;
        foreach ($detailProduct as $detail) {  ?>
          <div>
            <h3><?php echo $detail['name']; ?></h3>
            <P>status <?php echo $detail['status'];?></P>
            <P>jumlah anak: <?php echo $detail['jumlah anak'];?></P>
          </div>
          <?php
        }
    }
}
