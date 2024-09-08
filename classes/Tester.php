<?php

declare(strict_types=1);

namespace classes;

// Класс Tester, который наследуется от Employee
class Tester extends Employee
{
    // Реализация метода получения должности
    public function getPosition(): string
    {
        return "тестировщик";
    }
}
