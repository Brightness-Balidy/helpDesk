<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Requisicoe;
class RequisicoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Requisicoe::create([
            'titulo'=>'Pc nao funciona',
            'descricao'=> 'o computador caiu da mesa e toda vez que liga fica a tela preta',
            'id_categoria'=> '2',
            'id_estado'=> '2',
            'id_user'=> '2'
        ]);
    }
}
