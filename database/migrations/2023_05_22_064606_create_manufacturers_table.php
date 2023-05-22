<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('manufacturer');
            $table->decimal('price', 8, 2);
            $table->date('production_date');
            $table->timestamps();
        });

        // Вставка даних
        DB::table('products')->insert([
            [
                'title' => 'Назва1',
                'manufacturer' => 'Виробник1',
                'price' => 10.99,
                'production_date' => '2023-01-01',
            ],
            [
                'title' => 'Назва2',
                'manufacturer' => 'Виробник2',
                'price' => 19.99,
                'production_date' => '2023-02-15',
            ],
            // мош добавити більше при потребі
        ]);
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manufacturers');
    }
};
