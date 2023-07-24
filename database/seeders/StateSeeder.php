<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            ['id' => 1, 'code' => 'AC', 'name' => 'Acre'],
            ['id' => 2, 'code' => 'AL', 'name' => 'Alagoas'],
            ['id' => 3, 'code' => 'AM', 'name' => 'Amazonas'],
            ['id' => 4, 'code' => 'AP', 'name' => 'Amapá'],
            ['id' => 5, 'code' => 'BA', 'name' => 'Bahia'],
            ['id' => 6, 'code' => 'CE', 'name' => 'Ceará'],
            ['id' => 7, 'code' => 'DF', 'name' => 'Distrito Federal'],
            ['id' => 8, 'code' => 'ES', 'name' => 'Espírito Santo'],
            ['id' => 9, 'code' => 'GO', 'name' => 'Goiás'],
            ['id' => 10, 'code' => 'MA', 'name' => 'Maranhão'],
            ['id' => 11, 'code' => 'MG', 'name' => 'Minas Gerais'],
            ['id' => 12, 'code' => 'MS', 'name' => 'Mato Grosso do Sul'],
            ['id' => 13, 'code' => 'MT', 'name' => 'Mato Grosso'],
            ['id' => 14, 'code' => 'PA', 'name' => 'Pará'],
            ['id' => 15, 'code' => 'PB', 'name' => 'Paraíba'],
            ['id' => 16, 'code' => 'PE', 'name' => 'Pernambuco'],
            ['id' => 17, 'code' => 'PI', 'name' => 'Piauí'],
            ['id' => 18, 'code' => 'PR', 'name' => 'Paraná'],
            ['id' => 19, 'code' => 'RJ', 'name' => 'Rio de Janeiro'],
            ['id' => 20, 'code' => 'RN', 'name' => 'Rio Grande do Norte'],
            ['id' => 21, 'code' => 'RO', 'name' => 'Rondônia'],
            ['id' => 22, 'code' => 'RR', 'name' => 'Roraima'],
            ['id' => 23, 'code' => 'RS', 'name' => 'Rio Grande do Sul'],
            ['id' => 24, 'code' => 'SC', 'name' => 'Santa Catarina'],
            ['id' => 25, 'code' => 'SE', 'name' => 'Sergipe'],
            ['id' => 26, 'code' => 'SP', 'name' => 'São Paulo'],
            ['id' => 27, 'code' => 'TO', 'name' => 'Tocantins'],
        ];

        DB::table('states')->insert($states);
    }
}
