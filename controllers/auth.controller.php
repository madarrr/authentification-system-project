<?php

class Authentification{
    
    public function checkUrl()
    {
        $url=$_GET['page'];
        $templateLoading = new TemplateLoading;

        if($url=='login')
        {
            $templateLoading->loading('./views/auth.view.phtml');
        }
        
    }
}