<?php

class Product {
    // TODO: Add properties
    public int $productId;
    public string $productName;
    public float $productPrice;
   
    
    public function __construct($id, $name, $price) {
        // TODO: Initialize properties
        $this->productId = $id;
        $this->productName = $name;
        $this->productPrice = $price;
   
    }

    public function getFormattedPrice() {
        // TODO: Return formatted price
        return number_format($this->productPrice, 2);  
    }

    // TODO: Add showDetails method
    public function showDetails() {
        // TODO: Show product details
        echo "Product ID: ". $this->productId. "\n";
        echo "Name: ". $this->productName. "\n";
        echo "Price: ". $this->getFormattedPrice(). "\n";
        
    }
    
}


// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();