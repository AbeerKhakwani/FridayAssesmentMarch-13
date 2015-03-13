<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";


   $app= new Silex\Application();

   $app['debug'] = true;

   $app->register(new Silex\Provider\TwigServiceProvider(), array(
       'twig.path' => __DIR__.'/../views'
   ));

   $app->get("/", function() use ($app){
           return $app['twig']->render('home.twig');
       });


   $app->post("/repeat_result", function() use ($app){


               $input_word=$_POST['word'];
               $input_string=$_POST['repeat']

               $new_Repeat_counter= new RepeatCounter;

              $result= $new_Repeat_counter->countRepeats($input_word,$input_string);


               return $app['twig']->render('result.twig');
           });












 return $app;

?>