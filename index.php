<?php

require_once 'vendor/fzaninotto/faker/src/autoload.php';

$faker = Faker\Factory::create();
$faker->addProvider(new Faker\Provider\fr_FR\Person($faker));

require 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./');

$twig = new Twig_Environment($loader);

echo $twig->render('index2.php', array(	'companyName'=>($faker->company) ,
										'photo'=>($faker->imageUrl),
										'companyPhrase'=>($faker->catchphrase),
										'productAdjective'=>($faker->word),
										'productName'=>($faker->word),
										'productMaterial'=>($faker->word),
										'mail'=>($faker->companyEmail),
										'photo2'=>($faker->imageUrl),
										'color'=>($faker->safeColorName),
										'price'=>($faker->randomNumber($nbDigits = 7)),
										'userName'=>($faker->name($gender = 'female')),
										'job'=>($faker->jobTitle),
										'phone'=>($faker->phoneNumber),
										'adress'=>($faker->streetAddress),
										'cp'=>($faker->postcode),
										'ville'=>($faker->city)
										));	

										

?>


	