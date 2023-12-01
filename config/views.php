<?php
class views
{
    public function getView($controller, $vista)
    {
        $controller = get_class($controller);
        if ($controller == "home") {
            $vista = "views/" . $vista . ".php";
        } else {
            $vista = "views/" . $controller . "/" . $vista . ".php";
        }
    }
}
