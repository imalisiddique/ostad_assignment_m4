<?php

class Product {
    // TODO: Add properties
    public $id;
    public $name;
    public $price;

    public function __construct( $id, $name, $price ) {
        // TODO: Initialize properties
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // TODO: Add getFormattedPrice method
    public function getFormattedPrice() {

    }

    // TODO: Add showDetails method
    public function showDetails() {
        echo "Product Details: \n- ID: $this->id \n- Name: $this->name \n- Price: $this->price";
    }
}

// Test the Product class

$product = new Product( 1, 'T-shirt', 19.99 );
$product->showDetails();
// print_r( $product );
