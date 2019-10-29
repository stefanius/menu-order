<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\Models\Menu::class, function (Faker $faker) {
    $prefix = ['', 'Vegetarische', 'Veganistische', 'Surinaamse', 'Chinese', 'Hollandse', 'Gezonde', 'Italiaanse'];
    $maindishes = ['Nasi', 'Bami', 'Groentesoep', 'Tomatensoep', 'Boerenkool', 'Sperzieboontjes', 'Pizza', 'Shoarma', 'Bloemkool', 'Pannenkoeken', 'Kip', 'Patat'];
    $addons = ['met ballen', 'met saté', 'met tofu', 'met saus', 'zonder saus', 'met kippenpoten', 'met biefstuk', 'met varkenshaas', 'met kikkerbilletjes'];
    $deserts = ['', 'en vla toe', 'en ijsje toe', 'en yogurt toe', 'en spekkoek toe', 'en geflambeerde kersentaart toe', 'en creme brulee toe', 'en appelmoes toe', 'en fruitsalade toe'];

    $description = "{$faker->randomElement($prefix)} {$faker->randomElement($maindishes)} {$faker->randomElement($addons)} {$faker->randomElement($deserts)} ";

    return [
        'description' => str_replace('  ', ' ', trim($description)) . '.',
        'closed_at' => \Carbon\Carbon::createFromTimestamp($faker->dateTime->getTimestamp())->toDateTimeString(),
    ];
});
