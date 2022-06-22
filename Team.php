<?php

class Team
{
    protected string $name;

    protected array $members;

    /**
     * @param String $name
     */
    public function __construct(string $name, array $members)
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(... $params)
    {
        // It returns the instant of the class;
        return new static(... $params);
    }

    public function name()
    {

    }

    public function add($name)
    {
        $this->members[] = $name;
    }

    public function members()
    {
        return $this->members;
    }

    public function cancel()
    {
    }
}

$team = Team::start("Barcalona", [
    'Asmit Nepali',
    'Jhon Doe'
]);
var_dump($team->members());