<?php
class Employee {
  // Attribute
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

  public function getId(): int {
    return $this->id;
  }
  public function getFirstName(): string {
    return $this->firstName;
  }
  public function getLastName(): string {
    return $this->lastName;
  }

  public function getNmae() :string {
    return $this->firstName . ' ' . $this->lastName;
}

  public function getSalary(): int {
    return $this->salary;
  }
  public function setSalary($salary):void {
      $this->salary = $salary;
  }
  public function getAnnualSalary():int {
    return $this->salary * 12;
    
  }
  public function raiseSalary(int $persent):int {
     $this->salary +=  $this->salary * $persent / 100; 
     return $this->salary;

  }


  public function toString():string {
    return "Employee[id = $this->id, name = $this->firstName, lastname = $this->lastName]";
}

}


$employee = new Employee(1, "Ahmed", "Ali", 5000); 
echo $employee->toString() . "<br>";

?>