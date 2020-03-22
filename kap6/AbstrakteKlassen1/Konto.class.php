<?php

abstract class Konto
{
  private $kontostand;
  private $kontoart;
  public abstract function einzahlen(float $betrag);
  public abstract function auszahlen(float $betrag){

  }

}
?>
