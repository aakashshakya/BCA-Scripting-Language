<?php
class Products {
    private $productName;
    private $productPrice;
    private $productDescription;
    private $categoryName;

    public function getProductName(){
        return $this->productName;
    }
    public function setProductName($productName){
        $this->productName = $productName;
    }

    public function getProductPrice(){
        return $this->productPrice;
    }
    public function setProductPrice($productPrice){
        $this->productPrice = $productPrice;
    }

    public function getProductDescription(){
        return $this->productDescription;
    }
    public function setProductDescription($productDescription){
        $this->productDescription = $productDescription;
    }

    public function getCategoryName(){
        return $this->categoryName;
    }
    public function setCategoryName($categoryName){
        $this->categoryName = $categoryName;
    }
}

$watch = new Products();
$watch->setProductName("Alma Artes");
$watch->setProductPrice(1000);
$watch->setProductDescription("This watch is assembled in Nepal");
$watch->setCategoryName("Accessories");


echo $watch->getProductName()."<br>";
echo $watch->getProductPrice()."<br>";
echo $watch->getProductDescription()."<br>";
echo $watch->getCategoryName()."<br>";

?>