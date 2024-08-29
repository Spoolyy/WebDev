<?php
class veicolo
{
    public int $cavalli = 0;
    public string $marca = "";
    public string $modello = "";
    public int $cilindrata = 0;

    public function __construct(int $cavalli, string $marca, string $modello, int $cilindrata)
    {
        $this->cavalli = $cavalli;
        $this->marca = $marca;
        $this->modello = $modello;
        $this->cilindrata = $cilindrata;
        var_dump($this->test());
    }

    public function getName(): string
    {
        return $this->marca . " " . $this->modello;
    }

    public function calcolaBollo(): int
    {
        return $this->cavalli * 2;
    }

    private function test(): void
    {
        
    }
}

$macchina1 = new veicolo(276, "Nissan", "Skyline", 2600);
$macchina2 = new veicolo(276, "Toyota", "Supra", 3000);
var_dump($macchina1->getName());
var_dump($macchina2->getName());
var_dump($macchina2->calcolaBollo());

class Animale
{
    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function verso()
    {
        return $this->name . " fa un verso generico";
    }
}

$animale = new Animale("cane");
var_dump($animale->verso());

class Cane extends Animale
{
    public string $cognome;
    public function __construct(string $name, string $cognome) {
        $this->cognome = $cognome;
        parent::__construct($name);
    }
    public function verso()
    {
        return $this->name . " " .  $this->cognome .  " abbaia";
    }
}

$cane = new Cane("Fuffy", "Franco");
var_dump($cane->verso());
