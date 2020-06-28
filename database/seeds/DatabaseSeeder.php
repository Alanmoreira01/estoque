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
        // $this->call(UserSeeder::class);
		$this->call(UserTableSeeder::class);//implementa a classe UserTableSeeder criada para gerar um usuário admin assim que o laravel for instalado para produção
    }
}
