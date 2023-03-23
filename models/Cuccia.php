<?php

class Cuccia extends Prodotto
{
    public $lunghezza;
    public $larghezza;

    function __construct(
        string $_name,
        string $_immagine,
        int $_prezzo,
        Categoria $_categoria,
        int $_lunghezza,
        int $_larghezza,
    ) {
        parent::__construct($_name, $_immagine, $_prezzo, $_categoria);
        $this->lunghezza = $_lunghezza;
        $this->larghezza = $_larghezza;
    }
}

$cuccia_1 = new Cuccia("Cuccia", "https://m.media-amazon.com/images/I/717089LX9LL._AC_SX522_.jpg", 32, $categoria_2, 80, 70);