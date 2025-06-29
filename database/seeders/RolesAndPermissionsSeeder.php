<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = ['ver produtos', 'ver categorias', 'ver marcas', 'gerenciar usuários', 'gerenciar permissões'];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole = Role::firstOrCreate(['name' => 'comum']);

        $adminRole->givePermissionTo(['gerenciar usuários', 'gerenciar permissões']);

        $admin = User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole($adminRole);

        $user = User::factory()->create([
            'name' => 'Usuário Comum',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
        ]);
        $user->assignRole($userRole);
        $user->givePermissionTo(['ver produtos', 'ver categorias']);
    }
}
