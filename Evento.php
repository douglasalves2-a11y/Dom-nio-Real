<?php
declare(strict_types=1);
class Evento implements Concluivel
{
    private bool $concluido = false;
    public function __construct(
        private string $nome
    ) {
    }
    public function concluir(): void
    {
        $this->concluido = true;
    }
    public function estaConcluido(): bool
    {
        return $this->concluido;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
}
