<?php
declare(strict_types=1);
interface Concluivel
{
    public function concluir(): void;
    public function estaConcluido(): bool;
}
