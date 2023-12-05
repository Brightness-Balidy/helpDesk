<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Solucao;

class SolucaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Solucao::create([
            'descricao'=>' o problema foi resolvido activando a opção de actualizações com trafego limitado'
        ]);
    }
}
