<?php

declare(strict_types=1);

namespace classes;

use interfaces\LeadInterface;
use interfaces\WebinarSpeakerInterface;

// Класс Director, который наследуется от Employee и реализует два интерфейса
class
Director extends Employee implements LeadInterface, WebinarSpeakerInterface
{
    // Реализация метода управления командой
    public function leadTeam(): string
    {
        return "управляет командой и принимает стратегические решения";
    }

    // Реализация метода проведения вебинара
    public function conductWebinar(): string
    {
        return "проводит вебинары по управлению и бизнес-процессам";
    }

    // Реализация метода получения должности
    public function getPosition(): string
    {
        return "директор";
    }
}
