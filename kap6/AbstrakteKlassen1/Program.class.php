<?php
function my_autoloader($class)
{
    require_once $class . ".class.php";
}
new class

{
    public function __construct()
    {
        spl_autoload_register("my_autoloader");
        $this->main();
    }
    private function main()
    {
        // Geht nicht, weil Konto abstract
     //   $konto1 = new Konto();
     //   var_dump($konto1);
    }
};
