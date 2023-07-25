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
            ['id' => 1, 'code' => 'AC', 'name' => 'Acre', 'country_id' => 32],
            ['id' => 2, 'code' => 'AL', 'name' => 'Alagoas', 'country_id' => 32],
            ['id' => 3, 'code' => 'AM', 'name' => 'Amazonas', 'country_id' => 32],
            ['id' => 4, 'code' => 'AP', 'name' => 'Amapá', 'country_id' => 32],
            ['id' => 5, 'code' => 'BA', 'name' => 'Bahia', 'country_id' => 32],
            ['id' => 6, 'code' => 'CE', 'name' => 'Ceará', 'country_id' => 32],
            ['id' => 7, 'code' => 'DF', 'name' => 'Distrito Federal', 'country_id' => 32],
            ['id' => 8, 'code' => 'ES', 'name' => 'Espírito Santo', 'country_id' => 32],
            ['id' => 9, 'code' => 'GO', 'name' => 'Goiás', 'country_id' => 32],
            ['id' => 10, 'code' => 'MA', 'name' => 'Maranhão', 'country_id' => 32],
            ['id' => 11, 'code' => 'MG', 'name' => 'Minas Gerais', 'country_id' => 32],
            ['id' => 12, 'code' => 'MS', 'name' => 'Mato Grosso do Sul', 'country_id' => 32],
            ['id' => 13, 'code' => 'MT', 'name' => 'Mato Grosso', 'country_id' => 32],
            ['id' => 14, 'code' => 'PA', 'name' => 'Pará', 'country_id' => 32],
            ['id' => 15, 'code' => 'PB', 'name' => 'Paraíba', 'country_id' => 32],
            ['id' => 16, 'code' => 'PE', 'name' => 'Pernambuco', 'country_id' => 32],
            ['id' => 17, 'code' => 'PI', 'name' => 'Piauí', 'country_id' => 32],
            ['id' => 18, 'code' => 'PR', 'name' => 'Paraná', 'country_id' => 32],
            ['id' => 19, 'code' => 'RJ', 'name' => 'Rio de Janeiro', 'country_id' => 32],
            ['id' => 20, 'code' => 'RN', 'name' => 'Rio Grande do Norte', 'country_id' => 32],
            ['id' => 21, 'code' => 'RO', 'name' => 'Rondônia', 'country_id' => 32],
            ['id' => 22, 'code' => 'RR', 'name' => 'Roraima', 'country_id' => 32],
            ['id' => 23, 'code' => 'RS', 'name' => 'Rio Grande do Sul', 'country_id' => 32],
            ['id' => 24, 'code' => 'SC', 'name' => 'Santa Catarina', 'country_id' => 32],
            ['id' => 25, 'code' => 'SE', 'name' => 'Sergipe', 'country_id' => 32],
            ['id' => 26, 'code' => 'SP', 'name' => 'São Paulo', 'country_id' => 32],
            ['id' => 27, 'code' => 'TO', 'name' => 'Tocantins', 'country_id' => 32],
        ];

        DB::table('states')->insert($states);
    }
}
