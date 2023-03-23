<?php

class Cibo extends Prodotto
{
    public $scadenza;
    public $gusto;

    function __construct(
        string $_name,
        string $_immagine,
        int $_prezzo,
        Categoria $_categoria,
        string $_scadenza,
        string $gusto
    ) {
        parent::__construct($_name, $_immagine, $_prezzo, $_categoria);
        $this->scadenza = $_scadenza;
        $this->gusto = $gusto;
    }
}

$cibo_1 = new Cibo("Croccantini", "https://www.petsplanet.it/714-large_default/green-for-dog-crocchette-per-tutti-i-cani-12-kg.jpg", 12, $categoria_1, "2025-06-23", "Carne");