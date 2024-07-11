<?php

class HomeController {

    public function index()
    {
        $loader = new Twig\Loader\FilesystemLoader('templates');
        $twig = new Twig\Environment($loader);
        $template = $twig->load('templates/index.html.twig');
        echo $template->render ([
            'base_url' => BASE_URL,
        ]);
    }

}