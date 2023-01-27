<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create([
            'name' => 'Acre',
            'code' => 'AC',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Alagoas',
            'code' => 'AL',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Amapá',
            'code' => 'AP',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Amazonas',
            'code' => 'AM',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Bahia',
            'code' => 'BA',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Ceará',
            'code' => 'CE',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Distrito Federal',
            'code' => 'DF',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Espírito Santo',
            'code' => 'ES',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Goiás',
            'code' => 'GO',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Maranhão',
            'code' => 'MA',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Mato Grosso',
            'code' => 'MT',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Mato Grosso do Sul',
            'code' => 'MS',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Minas Gerais',
            'code' => 'MG',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Pará',
            'code' => 'PA',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Paraíba',
            'code' => 'PB',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Paraná',
            'code' => 'PR',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Pernambuco',
            'code' => 'PE',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Piauí',
            'code' => 'PI',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Rio de Janeiro',
            'code' => 'RJ',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Rio Grande do Norte',
            'code' => 'RN',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Rio Grande do Sul',
            'code' => 'RS',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Rondônia',
            'code' => 'RO',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Roraima',
            'code' => 'RR',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Santa Catarina',
            'code' => 'SC',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'São Paulo',
            'code' => 'SP',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Sergipe',
            'code' => 'SE',
            'country_code' => 'BR',
        ]);
        State::create([
            'name' => 'Tocantins',
            'code' => 'TO',
            'country_code' => 'BR',
        ]);


    }
}
