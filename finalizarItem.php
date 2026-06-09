<?php
declare(strict_types=1);
function finalizarItem(Concluivel $item): void
{
    $item->concluir();
}
