<?php
namespace Controllers;

class DisplayController {
    /**
     * Affiche les blocks header, main et footer des pages
     * le header et le footer auront un template de base il s'agit juste 
     * de pouvoir les modifier si besoin.
     * la variable permettra juste de passer des paramettre suplémentaire 
     */
    public function display(string $template, array $data = [],string $bandeau="bandeau", string $navBar='navbarre', string $footer='footer'){
        // Transforme les clés du tableau $data en variable
        extract($data);

        // On inclut les modèles
        require "App/MVC/Views/layout.phtml";
    }


}