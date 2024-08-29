<?php
interface interfaccia {
    public function stampa();
}

class Uno implements interfaccia {
    public function stampa() {
        echo "Stampa Interfaccia";
    }
}

class Due implements interfaccia {
    public function stampa() {
        echo "Stampa un'altra interfaccia";
    }
}

class gestore implements interfaccia {
    public interfaccia $interfaccia;
    public function __construct(interfaccia $interfaccia) {
        $this->interfaccia = $interfaccia;
    }
    public function stampa() {
        $this->interfaccia->stampa();
    }
}

$oggettoUno = new Uno();
$gestore = new Gestore($oggettoUno);
echo $gestore->stampa();