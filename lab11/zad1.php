<?php

class NoweAuto {
    protected $model;
    protected $cenaEuro;
    protected $kursEuroPLN;

    public function __construct($model, $cenaEuro, $kursEuroPLN) {
        $this->model = $model;
        $this->cenaEuro = $cenaEuro;
        $this->kursEuroPLN = $kursEuroPLN;
    }

    public function obliczCene() {
        return $this->cenaEuro * $this->kursEuroPLN;
    }

    public function getModel() {
        return $this->model;
    }

    public function getCenaEuro() {
        return $this->cenaEuro;
    }

    public function getKursEuroPLN() {
        return $this->kursEuroPLN;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function setCenaEuro($cenaEuro) {
        $this->cenaEuro = $cenaEuro;
    }

    public function setKursEuroPLN($kursEuroPLN) {
        $this->kursEuroPLN = $kursEuroPLN;
    }
}

class AutoZDodatkami extends NoweAuto {
    private $alarm;
    private $radio;
    private $klimatyzacja;

    public function __construct($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja) {
        parent::__construct($model, $cenaEuro, $kursEuroPLN);
        $this->alarm = $alarm;
        $this->radio = $radio;
        $this->klimatyzacja = $klimatyzacja;
    }

    public function obliczCene() {
        $cenaPodstawowa = parent::obliczCene();
        $cenaDodatkow = $this->alarm + $this->radio + $this->klimatyzacja;
        return $cenaPodstawowa + $cenaDodatkow;
    }

    public function getAlarm() {
        return $this->alarm;
    }

    public function getRadio() {
        return $this->radio;
    }

    public function getKlimatyzacja() {
        return $this->klimatyzacja;
    }

    public function setAlarm($alarm) {
        $this->alarm = $alarm;
    }

    public function setRadio($radio) {
        $this->radio = $radio;
    }

    public function setKlimatyzacja($klimatyzacja) {
        $this->klimatyzacja = $klimatyzacja;
    }
}

class Ubezpieczenie extends AutoZDodatkami {
    private $procentowaWartoscUbezpieczenia;
    private $liczbaLatPosiadania;

    public function __construct($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja, $procentowaWartoscUbezpieczenia, $liczbaLatPosiadania) {
        parent::__construct($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja);
        $this->procentowaWartoscUbezpieczenia = $procentowaWartoscUbezpieczenia;
        $this->liczbaLatPosiadania = $liczbaLatPosiadania;
    }

    public function obliczCene() {
        $cenaSamochoduZDodatkami = parent::obliczCene();
        $znizkaZaLata = (100 - $this->liczbaLatPosiadania) / 100;
        $wartoscUbezpieczenia = $this->procentowaWartoscUbezpieczenia * $cenaSamochoduZDodatkami * $znizkaZaLata;
        return $wartoscUbezpieczenia;
    }

    public function getProcentowaWartoscUbezpieczenia() {
        return $this->procentowaWartoscUbezpieczenia;
    }

    public function getLiczbaLatPosiadania() {
        return $this->liczbaLatPosiadania;
    }

    public function setProcentowaWartoscUbezpieczenia($procentowaWartoscUbezpieczenia) {
        $this->procentowaWartoscUbezpieczenia = $procentowaWartoscUbezpieczenia;
    }

    public function setLiczbaLatPosiadania($liczbaLatPosiadania) {
        $this->liczbaLatPosiadania = $liczbaLatPosiadania;
    }
}

$model = "Audi A4";
$cenaEuro = 30000;
$kursEuroPLN = 4.5;
$alarm = 500;
$radio = 800;
$klimatyzacja = 2000;
$procentowaWartoscUbezpieczenia = 0.05;
$liczbaLatPosiadania = 3;

$auto = new Ubezpieczenie($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja, $procentowaWartoscUbezpieczenia, $liczbaLatPosiadania);

echo "Cena auta: " . $auto->obliczCene() . " PLN";
