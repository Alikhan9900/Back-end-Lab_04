<?php
class Circle {
    private $x; // координата x центру кола
    private $y; // координата y центру кола
    private $radius; // радіус кола

    // Конструктор класу
    public function __construct($x, $y, $radius) {
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }

    // Метод GET для координати x
    public function getX() {
        return $this->x;
    }

    // Метод SET для координати x
    public function setX($x) {
        $this->x = $x;
    }

    // Метод GET для координати y
    public function getY() {
        return $this->y;
    }

    // Метод SET для координати y
    public function setY($y) {
        $this->y = $y;
    }

    // Метод GET для радіуса
    public function getRadius() {
        return $this->radius;
    }

    // Метод SET для радіуса
    public function setRadius($radius) {
        $this->radius = $radius;
    }

    // Метод, що повертає рядок з інформацією про коло
    public function __toString() {
        return "Коло з центром в ({$this->x}, {$this->y}) і радіусом {$this->radius}";
    }

    // Метод для перевірки перетину з іншим колом
    public function intersects(Circle $otherCircle) {
        // Відстань між центрами кіл
        $distance = sqrt(pow($this->x - $otherCircle->getX(), 2) + pow($this->y - $otherCircle->getY(), 2));
        // Перевірка на перетин
        return $distance < ($this->radius + $otherCircle->getRadius());
    }
}

// Створення двох об'єктів класу Circle
$circle1 = new Circle(0, 0, 5);
$circle2 = new Circle(8, 8, 4);

// Перевірка перетину кіл
if ($circle1->intersects($circle2)) {
    echo "Кола перетинаються\n";
} else {
    echo "Кола не перетинаються\n";
}
