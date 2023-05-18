<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TipoUsuario extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_usuarios')->insert([
            [
                'descricao' => 'admin',
            ],
            [
                'descricao' => 'colab',
            ]
        ]);
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('default'),
                'tipo_usuario_id' => 1
            ]
        ]);
    }
}
