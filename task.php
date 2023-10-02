<?php

class Product {
    // TODO: Add properties

    public function __construct( $id, $name, $price ) {
        // TODO: Initialize properties
    }

    // TODO: Add getFormattedPrice method
    public function getFormattedPrice() {}

    // TODO: Add showDetails method
    public function showDetails() {}
}

// Test the Product class

$product = new Product( 1, 'T-shirt', 19.99 );
$product->showDetails();
print_r( $product );