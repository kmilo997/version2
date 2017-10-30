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

$factory->define(App\Product::class, function (Faker $faker) {
   

    return [
        'id' => $faker->int(),
        'nombre' => $faker->string(),
        'minimo' => $faker->int(),  
        'precio_venta' => $faker->int(),
        'fecha_vencimiento' => $faker->date(),
        
        
    ];
});


$factory->define(App\Cliente::class, function (Faker $faker) {
   

    return [
        'id' => $faker->int(),
        'nombre' => $faker->string(),
        'ciudad' => $faker->int(),
        'direccion' => $faker->int(),
        'telefono' => $faker->int(),
        'email' => $faker->int(),
        
        
    ];
});



$factory->define(App\Proveedor::class, function (Faker $faker) {
   

    return [
    'id'=> $faker->int(),
        'Nombre' => $faker->string(),
        'Telefono' => $faker->string(),
        'Direccion' => $faker->string(),
        'Correo' => $faker->string(),
        'Ciudad' => $faker->string()
        
        
    ];
});


$factory->define(App\Venta::class, function (Faker $faker) {
   

    return [
    
         'id'=> $faker->int(),
         'fecha'=> $faker->date(),
         'producto'=> $faker->int(),
         'cliente'=> $faker->string(),
         'unidades'=> $faker->int(),
         'total' => $faker->int(),
    ];
});


$factory->define(App\Pedido::class, function (Faker $faker) {
    
 
     return [
     
          'id'=> $faker->int(),
          'fecha'=> $faker->date(),
          'producto'=> $faker->int(),
          'cliente'=> $faker->string(),
          'unidades'=> $faker->int(),
          'total' => $faker->int(),
          'tipo' => $faker->enum('choices', array('pendiente','completado','cancelado'));,
     ];
 });

