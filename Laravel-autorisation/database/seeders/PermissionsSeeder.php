<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
  
        public function run(): void
        {
            $controllers = ['Blog'];
    
            foreach ($controllers as $controller) {
                $this->createPermissionsForController($controller);
            }
        }
    
        private function createPermissionsForController($controller)
        {
            $actions = ['create', 'store', 'show', 'edit', 'update', 'destroy', 'index'];
        
            foreach ($actions as $action) {
                $permissionName = $action . '-' . $controller . 'Controller';
                Permission::create(['name' => $permissionName, 'guard_name' => 'web']);
            }
        }
    }

