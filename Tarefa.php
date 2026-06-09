<?php
declare(strict_types=1);
class Tarefa implements Concluivel
{
    private bool $concluida = false;
    private array $comentarios = [];

    public function __construct(
        private string $titulo,
        private Usuario $usuario,
        private Categoria $categoria
    ) {
    }

    public function adicionarComentario(string $texto): void
    {
        $this->comentarios[] = new Comentario($texto);
    }

    public function concluir(): void
    {
        $this->concluida = true;
    }

    public function estaConcluido(): bool
    {
        return $this->concluida;
    }

    public function exibir(): void
    {
        echo "Tarefa: {$this->titulo}\n";
        echo "Usuario: {$this->usuario->getNome()}\n";
        echo "Categoria: {$this->categoria->getNome()}\n";

        echo "Status: ";

        if ($this->concluida) {
            echo "Concluida\n";
        } else {
            echo "Pendente\n";
        }

        echo "\nComentarios:\n";

        foreach ($this->comentarios as $comentario) {
            echo "- " . $comentario->getTexto() . "\n";
        }

        echo "\n";
    }
}
