<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .animal {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .animal h2 {
            color: #333;
            margin-top: 0;
        }

        .info {
            color: #555;
        }

        .unique {
            color: #009688;
            font-style: italic;
        }
    </style>

    <?php

    class Animal
    {
        public $weight, $age, $paint;
        public function __construct($weight, $age, $paint)
        {
            $this->weight = $weight;
            $this->age = $age;
            $this->paint = $paint;
        }
        function displayInfo()
        {
            echo "Вес: $this->weight кг; Возраст: $this->age лет; Окраска: $this->paint<br>";
        }
    }

    class Lion extends Animal
    {
        public $maneSize;

        public function __construct($weight, $age, $color, $maneSize)
        {
            parent::__construct($weight, $age, $color);
            $this->maneSize = $maneSize;  // Уникальное свойство - размер гривы
        }

        public function roar()
        {
            return "Этот лев рычит громко! Размер гривы: {$this->maneSize} см";
        }
    }


    class Rabbit extends Animal
    {
        public $earLength;

        public function __construct($weight, $age, $color, $earLength)
        {
            parent::__construct($weight, $age, $color);
            $this->earLength = $earLength;
        }

        // Уникальный метод для кролика
        public function hop()
        {
            return " Длина ушей: {$this->earLength} см";
        }
    }

    class Wolf extends Animal
    {
        public $packSize;

        public function __construct($weight, $age, $color, $packSize)
        {
            parent::__construct($weight, $age, $color);
            $this->packSize = $packSize;
        }

        public function howl()
        {
            return "Этот волк воет на луну! В его стае {$this->packSize} волков.";
        }
    }

    $lion = new Lion(190, 8, "золотистый", 30);
    $rabbit = new Rabbit(2, 3, "серый", 10);
    $wolf = new Wolf(70, 5, "серо-белый", 12);

    echo "<div class='animal'>";
    echo "<h2>Лев</h2>";
    echo "<p class='info'>" . $lion->displayInfo() . "</p>";
    echo "<p class='unique'>" . $lion->roar() . "</p>";
    echo "</div>";

    echo "<div class='animal'>";
    echo "<h2>Кролик</h2>";
    echo "<p class='info'>" . $rabbit->displayInfo() . "</p>";
    echo "<p class='unique'>" . $rabbit->hop() . "</p>";
    echo "</div>";

    echo "<div class='animal'>";
    echo "<h2>Волк</h2>";
    echo "<p class='info'>" . $wolf->displayInfo() . "</p>";
    echo "<p class='unique'>" . $wolf->howl() . "</p>";
    echo "</div>";
    ?>
</body>

</html>