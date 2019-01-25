<?php

use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'firstName' => 'John',
                'lastName' => 'Adams',
                'telephone' => '03698542365',
                'email' => 'john.adams@email.com',
                'company_id' => '1'                
            ],
            [
                'firstName' => 'Peter',
                'lastName' => 'Jinks',
                'telephone' => '05698523214',
                'email' => 'pete.jinjks@email.com',
                'company_id' => '2'                
            ],
            [
                'firstName' => 'Lindsey',
                'lastName' => 'Smith',
                'telephone' => '05659841023',
                'email' => 'lindseys@email.com',
                'company_id' => '3'                
            ],
            [
                'firstName' => 'Sarah',
                'lastName' => 'Kineton',
                'telephone' => '08971425855',
                'email' => 'sarahk@email.com',
                'company_id' => '4'                
            ],
            [
                'firstName' => 'Lisa',
                'lastName' => 'James',
                'telephone' => '03898542365',
                'email' => 'thebiglj@email.com',
                'company_id' => '5'                
            ],
        ]);
    }
}
