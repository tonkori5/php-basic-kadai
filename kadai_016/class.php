<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php

    class Food {

      public $name;

      public $price;
      
      public function __construct(string $name, int $price) {

        $this->name = $name;

        $this->price = $price;
      }

      public function show_price() {
        echo $this->price . '<br>';
      }

    }

    class Animal {
      
      public $name;

      public $height;

      public $weight;

      public function __construct(string $name, int $height, int $weight) {

          $this->name = $name;

          $this->height = $height;

          $this->weight = $weight;
      }

      public function show_height() {
        echo $this->height . '<br>';
      }

    }

    $pan = new Food('pan',300);

    $dog = new Animal('dog', 100, 7);

    print_r($pan);

    print_r($dog);

    $pan->show_price();

    $dog->show_height();
    ?>
  </p>
  <p>
    <?php