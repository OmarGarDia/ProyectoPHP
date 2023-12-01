<?php

class home extends controller
{

    public function index()
    {
        $this->vista->getViews($this, "index");
    }
}
