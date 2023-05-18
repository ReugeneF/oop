<?php
class Product
{
    public $name;
    public $color;
    public $price;
    public $category;
    public $rating;


    public function __construct($name, $color,$price,$category = "Hoodie",$rating = 3)
    {
        $this->name = strtolower($name);
        $this->color = $color;
        $this->price = $price;
        $this->category = strtoupper($category);
        $this->rating = $rating;
    }

//    public function showSalesPrice()
//    {
//        return number_format($this->price * 1.09, 2);
//    }

    public function getProduct()
    {
        return "Het product ". $this->name. " ". $this->category . " kost " . $this->price;
    }
}

$shirt1 = new Product("kenzo", "Black", 155,"T-Shirt");
$shirt2 = new Product("gucci", "Green", 55,category: "T-Shirt", rating: 1);
$shirt3 = new Product("crampus", "Red", 130,rating: 5);


//echo $shirt1->name."&nbsp";
//echo $shirt1->color ."&nbsp";
//echo $shirt1->category."&nbsp";
//echo $shirt1->showSalesPrice() ."&nbsp";
//echo $shirt1->rating."&nbsp";
//echo "<br>";
//
//echo $shirt2->name."&nbsp";
//echo $shirt2->color ."&nbsp";
//echo $shirt2->category."&nbsp";
//echo $shirt2->showSalesPrice()."&nbsp";
//echo $shirt2->rating."&nbsp";
//echo "<br>";
//
//echo $shirt3->name."&nbsp";
//echo $shirt3->color ."&nbsp";
//echo $shirt3->category."&nbsp";
//echo $shirt3->showSalesPrice()."&nbsp";
//echo $shirt3->rating."&nbsp";
//echo "<br>";
//
//echo "<br> <br>";
//var_dump($shirt3);
//echo "<br>";





