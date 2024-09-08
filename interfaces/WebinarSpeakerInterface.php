<?php

declare(strict_types=1);

// Пространство имён для интерфейсов
namespace interfaces;

// Интерфейс для проведения вебинаров
interface WebinarSpeakerInterface
{
    // Метод, описывающий процесс проведения вебинаров
    public function conductWebinar(): string;
}
