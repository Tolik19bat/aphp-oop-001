<?php

declare(strict_types=1);

namespace classes;

use interfaces\ApplicationCreatorInterface;
use interfaces\WebinarSpeakerInterface;

// Класс Programmer, который наследуется от Employee и реализует два интерфейса
class Programmer extends Employee implements ApplicationCreatorInterface, WebinarSpeakerInterface
{
    // Реализация метода создания приложений
    public function createApplication(): string
    {
        return "пишет код и создаёт приложения";
    }

    // Реализация метода проведения вебинара
    public function conductWebinar(): string
    {
        return "проводит вебинары на технические темы";
    }

    // Реализация метода получения должности
    public function getPosition(): string
    {
        return "программист";
    }
}
