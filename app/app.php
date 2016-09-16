<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Sentence.php';

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
      'twig.path' => __DIR__.'/../views'
    ));

    $app->get('/', function() use($app){
        return $app['twig']->render('home.html.twig');
    });

    $app->get('/output', function() use($app){
        $new_Sentence = new Sentence;
        $result = $new_Sentence->validate($_GET['input1'], $_GET['input2']);
        return $app['twig']->render('output.html.twig', array('result' => $result));
    });

    return $app;
?>
