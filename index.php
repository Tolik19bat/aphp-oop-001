<?php

// Подключаем автозагрузчик
require_once __DIR__ . '/autoloader.php';

use classes\Director;
use classes\Manager;
use classes\Programmer;
use classes\Tester;
use interfaces\LeadInterface;
use interfaces\ApplicationCreatorInterface;
use interfaces\WebinarSpeakerInterface;


// Создаём массив сотрудников, инициализируя объекты классов с данными
$employees = [
    new Director("Иван", "Иванов", 50),
    new Manager("Сергей", "Сергеев", 30),
    new Programmer("Петр", "Петров", 40),
    new Tester("Алексей", "Алексеев", 25),
];

// Переменная для хранения общей суммы зарплат
$totalSalary = 0;

// Перебираем массив сотрудников для вывода информации
foreach ($employees as $employee) {
    // Выводим полное имя сотрудника, его должность и зарплату
    echo $employee->getFullName() . ", позиция: " . $employee->getPosition() . ", зарплата: " . $employee->getSalary() . " попугаев";

    // Добавляем зарплату к общей сумме
    $totalSalary += $employee->getSalary();

    // Проверяем, реализует ли сотрудник интерфейс LeadInterface
    if ($employee instanceof LeadInterface) {
        echo ", " . $employee->leadTeam();
    }

    // Проверяем, реализует ли сотрудник интерфейс ApplicationCreatorInterface
    if ($employee instanceof ApplicationCreatorInterface) {
        echo ", может заниматься разработкой приложения: " . $employee->createApplication();
    }

    // Проверяем, реализует ли сотрудник интерфейс WebinarSpeakerInterface
    if ($employee instanceof WebinarSpeakerInterface) {
        echo ", может проводить вебинары: " . $employee->conductWebinar();
    }

    // Переход на новую строку
    echo PHP_EOL;
}

// Выводим общее количество сотрудников
echo "Общее количество сотрудников: " . count($employees) . PHP_EOL;

// Выводим общую сумму зарплат
echo "Общая сумма зарплат: " . $totalSalary . " попугаев" . PHP_EOL;
