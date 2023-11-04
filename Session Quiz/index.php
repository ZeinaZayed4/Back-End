<?php
// 4.2
class Person {
    protected string $name;
    protected string $address;

    public function __construct(string $name, string $address) {
        $this->name = $name;
        $this->address = $address;
    }
    public function getName() : string {
        return $this->name;
    }
    public function getAddress() : string {
        return $this->address;
    }
    public function setAddress(string $address) : void {
        $this->address = $address;
    }
    public function toString() : string {
        return "Person [Name = $this->name, Address = $this->address]";
    }
}

class Student extends Person {
    private string $program;
    private int $year;
    private float $fee;

    public function __construct(string $name, string $address,string $program, int $year, float $fee) {
        parent::__construct($name, $address);
        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }
    public function getProgram() : string {
        return $this->program;
    }
    public function setProgram(string $program) : void {
        $this->program = $program;
    }
    public function getYear() : int {
        return $this->year;
    }
    public function setYear(int $year) : void {
        $this->program = $year;
    }
    public function getFee() : float {
        return $this->fee;
    }
    public function setFee(float $fee) : void {
        $this->program = $fee;
    }
    public function toString(): string {
        return "Student [" . parent::toString() . ", Program = $this->program, Year = $this->year, Fee = $this->fee]";
    }
}

class Staff extends Person {
    private string $school;
    private float $pay;

    public function __construct(string $name, string $address, string $school, float $pay) {
        parent::__construct($name, $address);
        $this->school = $school;
        $this->pay = $pay;
    }
    public function getSchool() : string {
        return $this->school;
    }
    public function setSchool(string $school) : void {
        $this->school = $school;
    }
    public function getPay() : float {
        return $this->pay;
    }
    public function setPay(float $pay) : void {
        $this->pay = $pay;
    }
    public function toString(): string
    {
        return "Staff [" . parent::toString() . ", School = $this->school, Pay = $this->pay]";
    }
}

$p = new Person("Zeina", "Mansoura");
echo $p->toString() . '<br>' . '<br>';

$s = new Student("Zeina", "Mansoura", "Math", 2023, 2500);
echo $s->toString() . '<br>' . '<br>';

$st = new Staff("Zayed", "Mansoura", "CIS", 4000);
echo $st->toString() . '<br>' . '<br>';
echo "---------------------" . '<br>' . '<br>';

// 6.1
abstract class Shape {
    protected string $color = "red";
    protected bool $filled = true;

    public function __construct(string $color, bool $filled) {
        $this->color = $color;
        $this->filled = $filled;
    }
    public function getColor() : string {
        return $this->color;
    }
    public function setColor(string $color) : void {
        $this->color = $color;
    }
    public function getFilled() : string {
        return $this->filled;
    }
    public function setFilled(bool $filled) : void {
        $this->color = $filled;
    }
    public abstract function getArea() : float;
    public abstract function getPerimeter() : float;
    public function toString() : string {
        return "Shape [Color = $this->color, Filled = $this->filled]";
    }
}

class Circle extends Shape {
    protected float $radius = 1.0;

    public function __construct(float $radius, string $color, bool $filled)
    {
        parent::__construct($color, $filled);
        $this->radius = $radius;
    }
    public function getRadius() : string {
        return $this->radius;
    }
    public function setRadius(float $radius) : void {
        $this->radius = $radius;
    }
    public function getArea() : float {
        return pi() * pow($this->radius, 2);
    }
    public function getPerimeter(): float
    {
        return 2 * pi() * $this->radius;
    }
    public function toString(): string
    {
        return "Circle [" . parent::toString() . ", Radius = $this->radius]";
    }
}

class Rectangle extends Shape {
    protected float $width = 1.0;
    protected float $length = 1.0;

    public function __construct(float $width, float $length, string $color, bool $filled)
    {
        parent::__construct($color, $filled);
        $this->width = $width;
        $this->length = $length;
    }
    public function getWidth() : string {
        return $this->width;
    }
    public function setWidth(float $width) : void {
        $this->width = $width;
    }
    public function getLength() : string {
        return $this->length;
    }
    public function setLength(float $length) : void {
        $this->length = $length;
    }
    public function getArea(): float {
        return $this->length * $this->width;
    }
    public function getPerimeter(): float{
        return ($this->length + $this->width) * 2;
    }
    public function toString(): string
    {
        return "Rectangle [" . parent::toString() . ", Width = $this->width, Length = $this->length]";
    }
}

class Square extends Rectangle {

    public function __construct(float $length, float $width, string $color, bool $filled)
    {
        parent::__construct($length, $width, $color, $filled);
    }

    public function getSide() : float {
        return $this->getLength();
    }
    public function setSide(float $length) : void {
        $this->length = $length;
    }

    public function toString(): string
    {
        return "Square [" . parent::toString() . "]";
    }
}

$c = new Circle(5.5, "blue", true);
echo $c->toString() . '<br>' . '<br>';

$r = new Rectangle(1.0, 1.2, "blue", true);
echo $r->toString() . '<br>' . '<br>';

$sq = new Square(6.6, 6.6, "blue", true);
echo $sq->toString();