
<?php

class M_Registro_AREAS extends \DB\SQL\Mapper
{
    public function __construct()
    {
        parent::__construct(\Base::instance()->get('DB'), 'registro_area');
    }    
}