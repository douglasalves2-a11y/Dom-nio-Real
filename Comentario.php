<?php
declare(strict_types=1);
class Comentario
{
    public function __construct(
        private string $texto
    ) {
    }
    public function getTexto(): string
    {
        return $this->texto;
    }
}
