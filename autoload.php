<?php
function autoload($path)
{
    switch($path)
    {
        case 'Authentification';
         require_once './controllers/auth.controller.php';
        break;
        case 'TemplateLoading';
         require_once './models/auth.model.php';
        break;
    }
}
spl_autoload_register('autoload');