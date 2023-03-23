<?php

class Gioco extends Prodotto
{
    public $colore;
    public $materiale;

    function __construct(
        string $_name,
        string $_immagine,
        int $_prezzo,
        Categoria $_categoria,
        string $_colore,
        string $_materiale,
    ) {
        parent::__construct($_name, $_immagine, $_prezzo, $_categoria);
        $this->colore = $_colore;
        $this->materiale = $_materiale;
    }
}

$gioco_1 = new Gioco("Tiragraffi", "https://cdn.geapetshop.it/uploads/2021/03/5738.jpg", 22, $categoria_2, "Beige", "Sisal");