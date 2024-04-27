<?php
class Calculadora {
  private $numero1;
  private $numero2;

  public function __construct($numero1, $numero2) {
    $this->numero1 = $numero1;
    $this->numero2 = $numero2;
  }

  public function suma() {
    return $this->numero1 + $this->numero2;
  }

  public function resta() {
    return $this->numero1 - $this->numero2;
  }

  public function multiplicacion() {
    return $this->numero1 * $this->numero2;
  }

  public function division() {
    if ($this->numero2 != 0) {
      return $this->numero1 / $this->numero2;
    } else {
      return "No se puede dividir por cero, ingresa un numero que sea mayor a cero.";
    }
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $numero1 = $_POST['numero1'];
  $numero2 = $_POST['numero2'];

  
  $calculadora = new Calculadora($numero1, $numero2);

  //aqui se muestran los resultados de las operaciones
  echo "<h2>Resultados de los numeros ingresados:</h2>";
  echo "<div id='suma'>Suma: " . $calculadora->suma() . "</div>";
  echo "<div id='resta'>Resta: " . $calculadora->resta() . "</div>";
  echo "<div id='multiplicacion'>Multiplicación: " . $calculadora->multiplicacion() . "</div>";
  echo "<div id='division'>División: " . $calculadora->division() . "</div>";
}

?>