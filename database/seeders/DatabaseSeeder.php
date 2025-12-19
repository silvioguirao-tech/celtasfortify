<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Criar roles
        $adminRole = \Spatie\Permission\Models\Role::firstOrCreate(['name' => 'admin']);
        $alunoRole = \Spatie\Permission\Models\Role::firstOrCreate(['name' => 'aluno']);

        // Criar usuário admin
        $admin = User::firstOrCreate([
            'email' => 'admin@celtas.com',
        ], [
            'name' => 'Administrador',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole('admin');

        // Criar usuário aluno de exemplo
        $aluno = User::firstOrCreate([
            'email' => 'aluno@celtas.com',
        ], [
            'name' => 'Aluno Exemplo',
            'password' => bcrypt('password'),
        ]);
        $aluno->assignRole('aluno');
    }
}
