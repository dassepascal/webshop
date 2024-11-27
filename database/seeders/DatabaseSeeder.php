<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       Product::factory(4)
            ->hasVariants(3)
            ->has(Image::factory(3)->sequence(fn(Sequence $sequence)=>['features' => $sequence->index === 0]))
            ->create();
    }
}
