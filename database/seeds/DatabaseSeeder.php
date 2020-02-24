<?php

use App\Model\user\Tag;
use App\Model\user\Post;
use App\Model\user\User;
use App\Model\Admins\Role;
use App\Model\Admins\Admin;
use App\Model\user\Categorie;
use Illuminate\Database\Seeder;
use App\Model\Admins\Permission;

class DatabaseSeeder extends Seeder
{
    
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // debut des tags
            Tag::create([
                'name' => 'Politique ',
                'slug' => 'Election',
              
            ]);
            Tag::create([
                'name' => 'Cultuer ',
                'slug' => 'Lutte',
                
            ]);

            Tag::create([
                'name' => 'Religion ',
                'slug' => 'Tidjanya',
                
            ]);

            Tag::create([
                'name' => 'Education ',
                'slug' => 'Etude_Superieur',
                
            ]);
        // fin des tags

      
        // debut des categorie
        Categorie::create([
            'name' => 'Politique ',
            'slug' => 'Election',
          
        ]);
        Categorie::create([
            'name' => 'Cultuer ',
            'slug' => 'Lutte',
            
        ]);

        Categorie::create([
            'name' => 'Religion ',
            'slug' => 'Tidjanya',
            
        ]);

        Categorie::create([
            'name' => 'Education ',
            'slug' => 'Etude_Superieur',
            
        ]);
    // fin des categorie

        Permission::create([
            'name' => 'Post-Create',
            'for' => 'post'
        ]);

        Permission::create([
            'name' => 'Post-Update',
            'for' => 'post'
        ]);

        Permission::create([
            'name' => 'Post-Delete',
            'for' => 'post'
        ]);

        Permission::create([
            'name' => 'Post-Publish',
            'for' => 'post'
        ]);


        Permission::create([
            'name' => 'User-Create',
            'for' => 'user'
        ]);

        Permission::create([
            'name' => 'User-Update',
            'for' => 'user'
        ]);

        Permission::create([
            'name' => 'User-Delete',
            'for' => 'user'
        ]);

        Permission::create([
            'name' => 'User-Publish',
            'for' => 'user'
        ]);

        Permission::create([
            'name' => 'Tag-Crud',
            'for' => 'other'
        ]);

        Permission::create([
            'name' => 'Categorie-Crud',
            'for' => 'other'
        ]);


        // la connexion des user
        User::create([
            'name' => 'Diallo Ousmane',
            'email' => 'blog@gmail.com',
            'password' => '$2y$10$LarTzuP2Ib0LTheXzGn6Y.7.a8rnE03wbDhkwM9Kdam5D6hF24u2.' // 11111111
        ]);
        // fin de la connexion des admin

        Admin::create([
            'name' => 'Diallo Ousmane',
            'email' => 'blog@gmail.com',
            'phone' => '00000000',
            'status' => 1,
            'password' => '$2y$10$LarTzuP2Ib0LTheXzGn6Y.7.a8rnE03wbDhkwM9Kdam5D6hF24u2.' // 11111111
        ]);
        // fin de la connexion des admin
       
        // les roles
        Role::create([
            'name' => 'Editor',
        ]);

        Role::create([
            'name' => 'Publish',
        ]);

        Role::create([
            'name' => 'Write',
        ]);

        Role::create([
            'name' => 'Create',
        ]);
        // fin des role

    }
        
}
