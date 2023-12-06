<?php
class PaginacionController
{

    public $registros_por_pagina;
    public $numero_paginas;

    public function __construct($registros_por_pagina, $array)
    {
        $this->registros_por_pagina = $registros_por_pagina;
        $this->numero_paginas = ceil(sizeof($array) / $this->registros_por_pagina);
    }

    public function ctrPrimeraPagina()
    {
        $pagina_actual = 1;
        return $pagina_actual;
    }

    public function ctrPaginaAnterior($pagina_actual)
    {
        if ($pagina_actual > 1) {
            $pagina_actual--;
        }
        return $pagina_actual;
    }

    public function ctrPaginaSiguiente($pagina_actual, $numero_paginas)
    {
        if ($pagina_actual < $numero_paginas) {
            $pagina_actual++;
        }
        return $pagina_actual;
    }

    public function ctrUltimaPagina()
    {
        $pagina_actual = $this->numero_paginas;
        return $pagina_actual;
    }
}
