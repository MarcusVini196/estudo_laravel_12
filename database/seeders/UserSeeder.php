<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert(
        [
            'imagem' => null,
            'nome' => 'Cliente',
            'username' => 'cliente',
            'telefone' => null,
            'nivel' => 'cliente',
            'status' => 'ativo',
            'email' => 'cliente@cliente',
            'password' => bcrypt('password'),
        ]
        );
    }
}
