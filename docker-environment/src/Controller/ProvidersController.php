<?php
declare(strict_types = 1);

require_once('./Model/CompanyManager.php');

class ProviderController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render()
    {
<<<<<<< HEAD
        global $url;
        $providers = new CompanyManager();

        $view = './View/providers.php';

        if (isset($url[1])) {
            if (ctype_digit($url[1])) {
                $detailCompanies = $providers->getDetails($url[1]);
                $employees = $providers->getEmployees($url[1]);
                $invoices = $providers->getInvoices($url[1]);
                $view =   $_SERVER['DOCUMENT_ROOT'] . '/View/detailCompany.php';
//génère ma variable view qui contient l'emplacement de la page. $_SERVER, prend le chemin complet du serveur.Donc le serveur document roots génère ma page. méthode universelle pour renvoyer vers le bon chemin, peut importe la config du serveur (dans notre cas la config d'Apache)
            } else {
                $view = './View/error404.php';
            }
        }

        //load the view
        require $view;
=======

        $providers = new CompanyManager();

        //load the view
        require './View/providers.php';
>>>>>>> origin/Charlotte
    }
}