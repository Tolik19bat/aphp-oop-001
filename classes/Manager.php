<?php

declare(strict_types=1);

namespace classes;

use interfaces\LeadInterface;

// Класс Manager, который наследуется от Employee и реализует интерфейс LeadInterface
class Manager extends Employee implements LeadInterface
{
    // Реализация метода управления командой
    public function leadTeam(): string
    {
        return "координирует работу команды";
    }

    // Реализация метода получения должности
    public function getPosition(): string
    {
        return "менеджер";
    }
}
