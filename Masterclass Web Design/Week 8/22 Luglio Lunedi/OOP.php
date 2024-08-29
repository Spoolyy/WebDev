<?php
    //static: la variabile o il metodo e riferito alla classe e non all'oggetto che viene creato dalla classe
    //private: puoi vedere la proprieta o il metodo solo all'interno della classe
    //public: una volta creata l'istanza dell'oggetto, puoi vederlo anche al di fuori della classe, istanziando un oggetto
    //protected: puo essere visto solo O da dentro la classe O da una classe ereditaria
class Automobile {
    public static $numeroAutomobili = 0;
    public $marca;
    public $modello;
    public $anno;
    public function __construct($marca, $modello, $anno) {
        $this->marca = $marca;
        $this->modello = $modello;
        $this->anno = $anno;
        self::$numeroAutomobili++;
    }
    public function getInfo () {
        return "Marca: " . $this->marca . " Modello: " . $this->modello . " Anno: " . $this->anno;
    }

    public static function getTotaleAutomobili () {
        return self::$numeroAutomobili;
    }
}
$auto1 = new Automobile("Nissan", "Skyline", 1999);
$auto2 = new Automobile("Ferrari", "LaFerrari", 2014);
echo $auto1->getInfo();
echo "\n";
echo $auto2->getInfo();
echo "\n";
echo "Totale Auto: " . Automobile::getTotaleAutomobili();




class Singleton {
    private static $instance = null;
    private function __construct() {

    }
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
$Singleton = Singleton::getInstance();