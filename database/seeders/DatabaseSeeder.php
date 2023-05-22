<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Manufacturer;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        // Заповнення таблиці manufacturers
        Manufacturer::create([
            'brand' => 'Manufacturer 1',
            'country' => 'Country 1',
            'contact_phone' => '123456789',
            'email' => 'manufacturer1@example.com',
        ]);

        Manufacturer::create([
            'brand' => 'Manufacturer 2',
            'country' => 'Country 2',
            'contact_phone' => '987654321',
            'email' => 'manufacturer2@example.com',
        ]);

        // Додаткові записи

        Manufacturer::create([
            'brand' => 'Manufacturer 3',
            'country' => 'Country 3',
            'contact_phone' => '555555555',
            'email' => 'manufacturer3@example.com',
        ]);

        Manufacturer::create([
            'brand' => 'Manufacturer 4',
            'country' => 'Country 4',
            'contact_phone' => '444444444',
            'email' => 'manufacturer4@example.com',
        ]);

        Manufacturer::create([
            'brand' => 'Manufacturer 5',
            'country' => 'Country 5',
            'contact_phone' => '999999999',
            'email' => 'manufacturer5@example.com',
        ]);
    }
}
