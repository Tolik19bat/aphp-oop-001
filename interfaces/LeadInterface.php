<?php

declare(strict_types=1);

namespace interfaces;

// Интерфейс для руководства командой
interface LeadInterface
{
    // Метод, который должен реализовывать любой класс, имплементирующий данный интерфейс
    public function leadTeam(): string;
}
