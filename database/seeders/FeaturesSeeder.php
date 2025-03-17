<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('features')->insert([
            ['name' => 'Model', 'description' => 'A model represents the data structure within the MVC architecture. Models interact with database tables to fetch, save, update, or delete data', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'View', 'description' => 'Views contain the HTML served by your application, and serve as a convenient method of separating your controller and domain logic from your presentation logic.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Controller', 'description' => 'Controllers are classes that contain methods to handle various HTTP requests. These controllers typically group related request handling logic together. Each method within a controller corresponds to a specific route or endpoint in the application.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Routes', 'description' => 'A route tells an application how it should respond to different HTTP requests. For instance, what happens when the GET request is made to specific URLs. Routes sit between the request of the user and the action your application will perform.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Middleware', 'description' => 'Middleware allows developers to run number of tasks before the request reaches the core logic of your application or after the response is generated.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Blade Templates', 'description' => 'The Blade Template is the default templating engine for the Laravel framework. It lets you use variables, loops, conditional statements, and other PHP features directly in your HTML code.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Migrations', 'description' => 'Migrations provide a structured and version-controlled way to manage database schema changes, ensuring consistency across environments.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Seeders', 'description' => 'A seeder is a blueprint for injecting pre-defined data sets into your database. These classes define the logic for data insertion using methods like DB::table or Eloquent models within the run method.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Database', 'description' => 'In Laravel, it makes it so that interacting with databases is extremely simple across a variety of database backends using either raw SQL, the fluent query builder, and the Eloquent ORM.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Eloquent ORM', 'description' => 'In Laravel, an Eloquent ORM provides a beautiful, simple ActiveRecord implementation for working with your database. Each database table has a corresponding "Model" which is used to interact with that table.', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
