<?php

class Product {
    // Add properties
    public $id;
    public $name;
    public $price;

    public function __construct( $id, $name, $price ) {
        // Initialize properties
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // Add getFormattedPrice method
    public function getFormattedPrice() {
        return sprintf( "$%0.2f", $this->price );
    }

    // Add showDetails method
    public function showDetails() {
        $FormattedPrice = $this->getFormattedPrice();
        echo "Product Details: \n- ID: $this->id\n- Name: $this->name\n- Price: {$FormattedPrice}\n";
    }
}

$product = new Product( 1, 'T-shirt', 19.99 );
$product->showDetails();
