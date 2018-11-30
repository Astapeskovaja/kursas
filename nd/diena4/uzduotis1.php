<?php
class Zmogus{
  public $vardas;
  public $pavarde ;
  public $pasisveikinimas;

  public function labas() {
    return $this -> pasisveikinimas .' aš esu <i>'. $this -> vardas . '</i>, mano pavardė: '. $this -> pavarde. '<br>';
  }
}

$zmogus1 = new Zmogus();
$zmogus2 = new Zmogus();

$zmogus1 -> vardas="Petras";
$zmogus1 -> pavarde = "Petraitis";
$zmogus1 -> pasisveikinimas = "Labas";

$zmogus2 -> vardas="Jerrod";
$zmogus2 -> pavarde = "Justice";
$zmogus2 -> pasisveikinimas = "HI!";



echo $zmogus1 -> labas();
echo $zmogus2 -> labas();


 ?>
