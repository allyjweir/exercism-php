<?php

class Robot
{
    var $name;

    public function __construct()
    {
        $this->name = $this->generateName();
    }

    public function getName()
    {
        return $this->name;
    }

    public function reset()
    {
        $this->name = $this->generateName();
    }

    private function generateName() : string
    {
        $alpha = str_shuffle(implode("", range("A", "Z")));
        return substr($alpha, 0, 2) . rand(100, 999);
    }
}

?>
