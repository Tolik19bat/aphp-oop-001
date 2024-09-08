<?php

declare(strict_types=1);

namespace classes;

// Абстрактный класс Employee, от которого будут наследоваться конкретные типы сотрудников
abstract class Employee
{
    // Свойства для имени, фамилии и зарплаты сотрудника
    protected string $firstName;
    protected string $lastName;
    protected int $salary;

    // Конструктор для инициализации имени, фамилии и зарплаты
    public function __construct(string $firstName, string $lastName, int $salary)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->salary = $salary;
    }

    // Метод для получения полного имени сотрудника
    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    // Метод для получения зарплаты сотрудника
    public function getSalary(): int
    {
        return $this->salary;
    }

    // Абстрактный метод для получения должности, который будет реализован в подклассах
    abstract public function getPosition(): string;
}
