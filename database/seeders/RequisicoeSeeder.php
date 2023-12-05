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
            'titulo'=>'Mouse problem',
            'descricao'=> 'o mouse fica a piscar sem parar e as vezes desaparece da tela',
            'id_categoria'=> '1',
            'id_estado'=> '1',
            'id_user'=> '1'
        ]);
    }
}
