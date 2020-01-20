<?php

use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Permiso de Usuarios
        Permission::create ([
            'name' => 'Navegar usuarios',
            'slug' => 'users.index',
            'description' => 'Lista y navega todos los usuarios del sistema'
        ]);
        Permission::create ([
            'name' => 'Ver detalle de usuario',
            'slug' => 'users.show',
            'description' => 'ver en detalle cada usuario del sistema'
        ]);
        Permission::create ([
            'name' => 'Edicion de usuarios',
            'slug' => 'users.edit',
            'description' => 'Editar cualquier dato un usuario del sistema'
        ]);
        Permission::create ([
            'name' => 'Eliminar usuarios',
            'slug' => 'users.destroy',
            'description' => 'Eliminar cualquier usuario del sistema'
        ]);

        //Roles
        Permission::create ([
            'name' => 'Navegar roles',
            'slug' => 'roles.index',
            'description' => 'Lista y navega todos los roles del sistema'
        ]);
        Permission::create ([
            'name' => 'Ver detalle de roles',
            'slug' => 'roles.show',
            'description' => 'ver en detalle cada rol del sistema'
        ]);
        Permission::create ([
            'name' => 'Creacion de roles',
            'slug' => 'roles.create',
            'description' => 'Crear cualquier dato un rol del sistema'
        ]);
        Permission::create ([
            'name' => 'Edicion de roles',
            'slug' => 'roles.edit',
            'description' => 'Editar cualquier dato un rol del sistema'
        ]);
        Permission::create ([
            'name' => 'Eliminar rol',
            'slug' => 'roles.destroy',
            'description' => 'Eliminar cualquier rol del sistema'
        ]);

        // Permiso de Alumnos
        Permission::create ([
            'name' => 'Ver bimestre uno',
            'slug' => 'bimestreuno.bimuno',
            'description' => 'Ver toda la informacion de bimestre uno'
        ]);
        Permission::create ([
            'name' => 'Ver bimestre dos',
            'slug' => 'bimestredos.bimdos',
            'description' => 'Ver toda la informacion de bimestre dos'
        ]);
        Permission::create ([
            'name' => 'Ver bimestre tres',
            'slug' => 'bimestretres.bimtres',
            'description' => 'Ver toda la informacion de bimestre tres'
        ]);
        Permission::create ([
            'name' => 'Ver bimestre cuatro',
            'slug' => 'bimestrecuatro.bimcuatro',
            'description' => 'Ver toda la informacion de bimestre cuatro'
        ]);

        // Permiso maestro
        Permission::create ([
            'name' => 'Navegar Maestros',
            'slug' => 'teachers.index',
            'description' => 'Lista y navega todos los maestros registrados en el sistema'
        ]);
        Permission::create ([
            'name' => 'Ver detalle del maestro',
            'slug' => 'teachers.show',
            'description' => 'ver en detalle cada maestro del sistema'
        ]);
        Permission::create ([
            'name' => 'Creacion de maestro',
            'slug' => 'teachers.create',
            'description' => 'Crear cualquier dato de maestro en el sistema'
        ]);
        Permission::create ([
            'name' => 'Edicion de maestro',
            'slug' => 'teachers.edit',
            'description' => 'Editar cualquier dato un rol del sistema'
        ]);
        Permission::create ([
            'name' => 'Eliminar maestro',
            'slug' => 'teachers.destroy',
            'description' => 'Eliminar cualquier maestro del sistema'
        ]);
    }
}
