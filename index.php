<?php
declare(strict_types=1);
require_once 'interfaces/Concluivel.php';
require_once 'classes/Usuario.php';
require_once 'classes/Categoria.php';
require_once 'classes/Comentario.php';
require_once 'classes/Tarefa.php';
require_once 'classes/Evento.php';
require_once 'funcoes/finalizarItem.php';

$usuario = new Usuario('Joao');
$categoria = new Categoria('Estudos');

$tarefa = new Tarefa(
    'Estudar PHP',
    $usuario,
    $categoria
);

$tarefa->adicionarComentario('Assistir aula de POO');
$tarefa->adicionarComentario('Fazer exercicios');

$evento = new Evento('Apresentacao do trabalho');

finalizarItem($tarefa);
finalizarItem($evento);

$tarefa->exibir();

echo "Evento: " . $evento->getNome() . "\n";

if ($evento->estaConcluido()) {
    echo "Status do evento: Concluido\n";
}
