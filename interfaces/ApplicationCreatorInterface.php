<?php

declare(strict_types=1);

namespace interfaces;

// Интерфейс для создания приложений
interface ApplicationCreatorInterface
{
    // Метод, описывающий процесс создания приложения
    public function createApplication(): string;
}
