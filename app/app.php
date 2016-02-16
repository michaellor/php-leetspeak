<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Leetspeak.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->post("/", function() use ($app) {
        // $my_input = new Leetspeak();
        $input = $_POST['input'];
        $output = makeLeetspeak($input);
        return $app['twig']->render('form.html.twig', array('returns' => $output));
    });

    return $app;


?>
