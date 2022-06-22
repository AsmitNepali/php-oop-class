<?php

class CoffeeMaker
{
    public function brew()
    {
        var_dump("Brewing the Coffee");
    }
}

// is a
class SpecialityCoffeeMaker extends CoffeeMaker
{
    public function brewLatte()
    {
        var_dump("Brewing the Latte");
    }
}

(new SpecialityCoffeeMaker())->brew();