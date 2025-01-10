<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php


class Food {
    
    public $name;
    public $price;

    
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    
    public function show_price() {
        echo "The price of {$this->name} is {$this->price}.<br>";
    }
}


class Animal {
    
    public $name;
    public $height;
    public $weight;

    
    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    
    public function show_height() {
        echo "The height of {$this->name} is {$this->height} cm.<br>";
    }
}


$food = new Food("Apple", 150);
echo "<br>";
print_r($food);  
echo "<br>";
$food->show_price();  


$animal = new Animal("Dog", 60, 5000);
echo "<br>";
print_r($animal);  
echo "<br>";
$animal->show_height();  

?>


</body>
</html>