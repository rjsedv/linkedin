<?php

abstract class Konto
{
  public static int $a = 42;
  protected $kontostand;
  protected $kontoart;
  public abstract function einzahlen(float $betrag);
  public abstract function auszahlen(float $betrag);


}
?>
