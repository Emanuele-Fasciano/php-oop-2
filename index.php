<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende **prodotti** per animali.
I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, 
icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php
class Prodotto
{
    public $name;
    public $immagine;
    public $prezzo;

    function __construct(
        string $_name,
        string $_immagine,
        int $_prezzo,
    ) {
        $this->name = $_name;
        $this->immagine = $_immagine;
        $this->prezzo = $_prezzo;
    }
}

class Cibo extends Prodotto
{
    public $scadenza;
    public $gusto;

    function __construct(
        string $_name,
        string $_immagine,
        int $_prezzo,
        string $_scadenza,
        string $gusto
    ) {
        parent::__construct($_name, $_immagine, $_prezzo);
        $this->scadenza = $_scadenza;
        $this->gusto = $gusto;
    }
}

$cibo_1 = new Cibo("Croccantini", "img-croccantini", 12, "2025-06-23", "Carne");

var_dump($cibo_1);

class Gioco extends Prodotto
{
    public $colore;
    public $materiale;

    function __construct(
        string $_colore,
        string $_materiale,
    ) {
        $this->colore = $_colore;
        $this->materiale = $_materiale;
    }
}

class Cuccia extends Prodotto
{
    public $lunghezza;
    public $larghezza;

    function __construct(
        int $_lunghezza,
        int $_larghezza,
    ) {
        $this->lunghezza = $_lunghezza;
        $this->larghezza = $_larghezza;
    }
}

class Categoria
{
    public $name;

    function __construct(
        string $_name
    ) {
        $this->name = $_name;
    }
}

$categoria_1 = new Categoria("Cane");
$categoria_1 = new Categoria("Gatto");



?>