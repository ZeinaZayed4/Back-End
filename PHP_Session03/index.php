<?php
// 1.1
class Circle {
    private float $radius;
    private string $color;

    public function __construct(float $radius, string $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    public function getRadius() : float {
        return $this->radius;
    }
    public function getColor() : string {
        return $this->color;
    }
    public function setRadius(float $radius) : void {
        $this->$radius = $radius;
    }
    public function setColor(string $color) : void {
        $this->color = $color;
    }
    public function getArea() : float {
        return pi() * pow($this->radius, 2);
    }
    public function toString() : void {
        echo "Radius: {$this->getRadius()} <br> Color: {$this->getColor()} <br> Area: {$this->getArea()}";
    }
}

$circle = new Circle(1.0, "green");
$circle->setRadius(2.2);
$circle->setColor("blue");
$circle->toString();
echo '<br>';
echo '------------------';
echo '<br>';

// 1.2
class Circle2 {
    private float $r;

    public function __construct(float $r)
    {
        $this->r = $r;
    }
    public function getRadius() : float {
        return $this->r;
    }
    public function setRadius(float $r) : void {
        $this->r = $r;
    }
    public function getArea() : float {
        return pi() * pow($this->r, 2);
    }
    public function getCircumference() : float {
        return 2 * pi() * $this->r;
    }
    public function toString() : void {
        echo "Radius: {$this->getRadius()} <br> Area: {$this->getArea()} <br> Circumference: {$this->getCircumference()}";
    }
}

$circle2 = new Circle2(1.1);
$circle2->setRadius(1.0);
$circle2->setRadius(2.2);
$circle2->toString();
echo '<br>';
echo '------------------';
echo '<br>';

// 1.3
class Rectangle {
    private float $length;
    private float $width;

    public function __construct(float $length, float $width)
    {
        $this->length = $length;
        $this->width = $width;
    }
    public function getLength() : float {
        return $this->length;
    }
    public function setLength(float $length) : void {
        $this->length = $length;
    }
    public function getWidth() : float {
        return $this->width;
    }
    public function setWidth(float $width) : void{
        $this->width = $width;
    }
    public function getArea() : float {
        return $this->length * $this->width;
    }
    public function getPerimeter() : float {
        return ($this->length + $this->width) * 2;
    }
    public function toString() : string {
        return "Length: {$this->getLength()} <br> Width: {$this->getWidth()} <br> Area: {$this->getArea()} <br> Perimeter: {$this->getPerimeter()}";
    }
}

$rectangle = new Rectangle(1.2, 3.4);
$rectangle->setLength(5.6);
$rectangle->setWidth(7.8);
echo $rectangle->toString();
echo '<br>';
echo '------------------';
echo '<br>';

// 1.4
class Employee {
    private int $id;
    private string $firstName;
    private string $lastName;
    private int $salary;

    public function __construct(int $id, string $firstName, string $lastName, int $salary) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->salary = $salary;
    }
    public function getId() : int {
        return $this->id;
    }
    public function getFirstName() : string {
        return $this->firstName;
    }
    public function getLastName() : string {
        return $this->lastName;
    }
    public function getName() : string {
        return "$this->firstName $this->lastName";
    }
    public function getSalary() : int {
        return $this->salary;
    }
    public function setSalary(int $salary) : void {
        $this->salary = $salary;
    }
    public function getAnnualSalary() : int {
        return $this->salary * 12;
    }
    public function raiseSalary(int $percent) : int {
        return ($this->salary / $percent) + $this->salary;
    }
    public function toString() : string {
        return "ID: {$this->getId()} <br> First Name: {$this->getFirstName()} <br> Last name: {$this->getLastName()} <br> Salary: {$this->getSalary()} <br> 
                Name: {$this->getName()} <br> Annual salary: {$this->getAnnualSalary()} <br> {$this->raiseSalary(10)}";
    }
}
$employee = new Employee(4, "Zeina", "Zayed", 2500);
$employee->setSalary(999);
echo $employee->toString();
echo '<br>';
echo '------------------';
echo '<br>';

// 1.5
class InvoiceItem {
    private string $id;
    private string $desc;
    private int $qty;
    private float $unitPrice;

    public function __construct(string $id, string $desc, int $qty, float $unitPrice)
    {
        $this->id = $id;
        $this->desc = $desc;
        $this->qty = $qty;
        $this->unitPrice = $unitPrice;
    }
    public function getId() : string {
        return $this->id;
    }
    public function getDesc() : string {
        return $this->desc;
    }
    public function getQty() : int {
        return $this->qty;
    }
    public function setQty(int $qty) : void {
        $this->qty = $qty;
    }
    public function getUnitPrice() : float {
        return $this->unitPrice;
    }
    public function setUnitPrice(float $unitPrice) : void {
        $this->unitPrice = $unitPrice;
    }
    public function getTotal() : float {
        return $this->unitPrice * $this->qty;
    }
    public function toString() : string {
        return "ID: {$this->getId()} <br> Desc: {$this->getDesc()} <br> Qty: {$this->getQty()} <br> UnitPrice: {$this->getUnitPrice()} <br> Total: {$this->getTotal()}";
    }
}

$invoiceItem = new InvoiceItem("A101", "Pen blue", 888, 0.08);
$invoiceItem->setQty(999);
$invoiceItem->setUnitPrice(0.99);
echo $invoiceItem->toString();


