<!DOCTYPE html>
<html lang="ja">
<head>
  <meta cherset="utf-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // Foodクラスを定義する
    class Food {
      private $name;
      private $price;

      // メソッドを定義する
      public function show_price() {
        echo $this->price . '<br>';
      }

      // コンストラクタを定義する
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
    }

    // Animalクラスを定義する
    class Animal {
      private $name;
      private $height;
      private $weight;

      // メソッドを定義する
      public function show_height() {
        echo $this->height . '<br>';
      }

      // コンストラクタを定義する
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }

    // インスタンス化する
    $food = new Food('ラーメン', 500);
    $animal = new Animal('dog', 60, 5000);

    // インスタンスの各プロパティの値を出力する
    print_r($food);
    echo '<br>';
    print_r($animal);
    echo '<br>';

    // メソッドにアクセスして実行する
    $food->show_price();
    $animal->show_height();

    ?>
  </p>
</body>
</html>