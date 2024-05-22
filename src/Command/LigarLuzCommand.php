<?php

namespace Command;

class LigarLuzCommand implements CommandInterface
{
    protected Luz $luz;

    /**
     */
    public function __construct()
    {
        $this->luz = new Luz();
    }


    function execute(): void
    {
        $this->luz->ligar();
    }
}