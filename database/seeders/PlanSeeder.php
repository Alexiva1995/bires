<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayPlans = [

            [
              "id"=>"1",
              "name"=>"Plan Inicial",
              "price"=>"100",
              "Description"=>"Ideal para iniciar y tener acceso a la academia y servicios."
            ],
            [
              "id"=>"2",
              "name"=>"Plan Pro",
              "price"=>"200",
              "Description"=>"Ideal para iniciar y tener acceso a la academia y servicios."
            ],
            [
              "id"=>"3",
              "name"=>"Plan Business",
              "price"=>"1200",
              "Description"=>"Ideal para iniciar y tener acceso a la academia y servicios."
            ],
            [
              "id"=>"4",
              "name"=>"Plan Lider",
              "price"=>"2000",
              "Description"=>"Ideal para iniciar y tener acceso a la academia y servicios."
            ],
             [
              "id"=>"5",
              "name"=>"Plan Wolf",
              "price"=>"3000",
              "Description"=>"Ideal para iniciar y tener acceso a la academia y servicios."
            ],
            [
              "id"=>"6",
              "name"=>"Plan Inicial",
              "price"=>"5000",
              "Description"=>"Ideal para iniciar y tener acceso a la academia y servicios."
            ],
            [
              "id"=>"7",
              "name"=>"Plan Inicial",
              "price"=>"10.000",
              "Description"=>"Ideal para iniciar y tener acceso a la academia y servicios."
            ],
            [
              "id"=>"8",
              "name"=>"Plan Inicial",
              "price"=>"30.000",
              "Description"=>"Ideal para iniciar y tener acceso a la academia y servicios."
            ],
            [
              "id"=>"9",
              "name"=>"Plan Inicial",
              "price"=>"50.000",
              "Description"=>"Ideal para iniciar y tener acceso a la academia y servicios."
            ],
            [
              "id"=>"10",
              "name"=>"Plan Inicial",
              "price"=>"100.000",
              "Description"=>"Ideal para iniciar y tener acceso a la academia y servicios."
            ],

    ];
    foreach ($arrayPlans as $plans ) {
        Plan::create($plans);
    }

    }
}
