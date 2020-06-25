<?php

use App\Employee;
use App\Location;
use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Location::class, 12) -> create() -> each(function($location){

            $employees = Employee::inRandomOrder() -> take(rand(1,5)) -> get();
            $location -> employees() -> attach($employees);
            
        });
    }
}
