<?php

class Prodotto
{
    public $name;
    public $immagine;
    public $prezzo;
    public $categoria;

    function __construct(
        string $_name,
        string $_immagine,
        int $_prezzo,
        Categoria $_categoria
    ) {
        $this->name = $_name;
        $this->immagine = $_immagine;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
    }
}