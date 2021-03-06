<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProductosSeeder::class,
            ProveedorSeeder::class,
            UsuariosSeeder::class,
            EntradaStockSeeder::class,
            RetiroStockSeeder::class,
            StockProductosSeeder::class,
            ParametrosSeeder::class,
        ]);
    }
}
