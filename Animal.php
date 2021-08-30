<?php

class Animal {
    public $name = 'Animal genérico';
    protected $protected = 'protected';
    private $private = 'private';

    public function locomover() {
        print('caminhar');
    }
}

class Papagaio extends Animal {
    public $name = 'Louro José';
    public $locomove = '';

    public function __construct($locomove) {
        $this->locomove = $locomove;
    }

    public function locomover() {
        print($this->locomove);
    }

    public function showVar() {
        print($this->protected);
    }
}

$animal = new Animal;
//$animal->locomover();

$papagaio_louro = new Papagaio('Voar');
#$papagaio_louro->locomover();
// $papagaio_louro->showVar();


$arr_int = [1, 2, 3, 4, 5];
foreach($arr_int as $item) {
    print($item);
}

print('<br>');
print('<br>');

$arr_nomes = [
    'nome0' => 'Gabriel Novais',
    'nome1' => 'Joaquina Bentina',
    'nome2' => 'Juca Uzumaki',
];

print($arr_nomes['nome0']);
print('<br>');
print('<br>');

foreach($arr_nomes as $key => $nome) {
    print($key . ' -> ' . $nome);
    print('<br>');
}

