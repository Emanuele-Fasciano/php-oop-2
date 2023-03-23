<?php
class Categoria
{
    public $name;

    function __construct(
        string $_name
    ) {
        $this->name = $_name;
    }
}

$categoria_1 = new Categoria("fa-solid fa-dog");
$categoria_2 = new Categoria("fa-solid fa-cat");