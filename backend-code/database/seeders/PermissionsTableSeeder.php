<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2022-05-15 22:05:16',
                'updated_at' => '2022-05-15 22:05:16',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2022-05-15 22:05:17',
                'updated_at' => '2022-05-15 22:05:17',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2022-05-15 22:05:17',
                'updated_at' => '2022-05-15 22:05:17',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2022-05-15 22:05:17',
                'updated_at' => '2022-05-15 22:05:17',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2022-05-15 22:05:17',
                'updated_at' => '2022-05-15 22:05:17',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2022-05-15 22:05:17',
                'updated_at' => '2022-05-15 22:05:17',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_assigned_challenges',
                'table_name' => 'assigned_challenges',
                'created_at' => '2022-05-15 22:07:15',
                'updated_at' => '2022-05-15 22:07:15',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'read_assigned_challenges',
                'table_name' => 'assigned_challenges',
                'created_at' => '2022-05-15 22:07:15',
                'updated_at' => '2022-05-15 22:07:15',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'edit_assigned_challenges',
                'table_name' => 'assigned_challenges',
                'created_at' => '2022-05-15 22:07:15',
                'updated_at' => '2022-05-15 22:07:15',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'add_assigned_challenges',
                'table_name' => 'assigned_challenges',
                'created_at' => '2022-05-15 22:07:15',
                'updated_at' => '2022-05-15 22:07:15',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'delete_assigned_challenges',
                'table_name' => 'assigned_challenges',
                'created_at' => '2022-05-15 22:07:15',
                'updated_at' => '2022-05-15 22:07:15',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'browse_challenge_types',
                'table_name' => 'challenge_types',
                'created_at' => '2022-05-15 22:08:19',
                'updated_at' => '2022-05-15 22:08:19',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'read_challenge_types',
                'table_name' => 'challenge_types',
                'created_at' => '2022-05-15 22:08:19',
                'updated_at' => '2022-05-15 22:08:19',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'edit_challenge_types',
                'table_name' => 'challenge_types',
                'created_at' => '2022-05-15 22:08:19',
                'updated_at' => '2022-05-15 22:08:19',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'add_challenge_types',
                'table_name' => 'challenge_types',
                'created_at' => '2022-05-15 22:08:19',
                'updated_at' => '2022-05-15 22:08:19',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'delete_challenge_types',
                'table_name' => 'challenge_types',
                'created_at' => '2022-05-15 22:08:19',
                'updated_at' => '2022-05-15 22:08:19',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'browse_challenges',
                'table_name' => 'challenges',
                'created_at' => '2022-05-15 22:08:41',
                'updated_at' => '2022-05-15 22:08:41',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'read_challenges',
                'table_name' => 'challenges',
                'created_at' => '2022-05-15 22:08:41',
                'updated_at' => '2022-05-15 22:08:41',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'edit_challenges',
                'table_name' => 'challenges',
                'created_at' => '2022-05-15 22:08:41',
                'updated_at' => '2022-05-15 22:08:41',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'add_challenges',
                'table_name' => 'challenges',
                'created_at' => '2022-05-15 22:08:41',
                'updated_at' => '2022-05-15 22:08:41',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'delete_challenges',
                'table_name' => 'challenges',
                'created_at' => '2022-05-15 22:08:41',
                'updated_at' => '2022-05-15 22:08:41',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'browse_competence_users',
                'table_name' => 'competence_users',
                'created_at' => '2022-05-15 22:11:44',
                'updated_at' => '2022-05-15 22:11:44',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'read_competence_users',
                'table_name' => 'competence_users',
                'created_at' => '2022-05-15 22:11:44',
                'updated_at' => '2022-05-15 22:11:44',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'edit_competence_users',
                'table_name' => 'competence_users',
                'created_at' => '2022-05-15 22:11:44',
                'updated_at' => '2022-05-15 22:11:44',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'add_competence_users',
                'table_name' => 'competence_users',
                'created_at' => '2022-05-15 22:11:44',
                'updated_at' => '2022-05-15 22:11:44',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'delete_competence_users',
                'table_name' => 'competence_users',
                'created_at' => '2022-05-15 22:11:44',
                'updated_at' => '2022-05-15 22:11:44',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'browse_competences',
                'table_name' => 'competences',
                'created_at' => '2022-05-15 22:12:09',
                'updated_at' => '2022-05-15 22:12:09',
            ),
            61 => 
            array (
                'id' => 62,
                'key' => 'read_competences',
                'table_name' => 'competences',
                'created_at' => '2022-05-15 22:12:09',
                'updated_at' => '2022-05-15 22:12:09',
            ),
            62 => 
            array (
                'id' => 63,
                'key' => 'edit_competences',
                'table_name' => 'competences',
                'created_at' => '2022-05-15 22:12:09',
                'updated_at' => '2022-05-15 22:12:09',
            ),
            63 => 
            array (
                'id' => 64,
                'key' => 'add_competences',
                'table_name' => 'competences',
                'created_at' => '2022-05-15 22:12:09',
                'updated_at' => '2022-05-15 22:12:09',
            ),
            64 => 
            array (
                'id' => 65,
                'key' => 'delete_competences',
                'table_name' => 'competences',
                'created_at' => '2022-05-15 22:12:09',
                'updated_at' => '2022-05-15 22:12:09',
            ),
            65 => 
            array (
                'id' => 66,
                'key' => 'browse_document_types',
                'table_name' => 'document_types',
                'created_at' => '2022-05-15 22:12:30',
                'updated_at' => '2022-05-15 22:12:30',
            ),
            66 => 
            array (
                'id' => 67,
                'key' => 'read_document_types',
                'table_name' => 'document_types',
                'created_at' => '2022-05-15 22:12:30',
                'updated_at' => '2022-05-15 22:12:30',
            ),
            67 => 
            array (
                'id' => 68,
                'key' => 'edit_document_types',
                'table_name' => 'document_types',
                'created_at' => '2022-05-15 22:12:30',
                'updated_at' => '2022-05-15 22:12:30',
            ),
            68 => 
            array (
                'id' => 69,
                'key' => 'add_document_types',
                'table_name' => 'document_types',
                'created_at' => '2022-05-15 22:12:30',
                'updated_at' => '2022-05-15 22:12:30',
            ),
            69 => 
            array (
                'id' => 70,
                'key' => 'delete_document_types',
                'table_name' => 'document_types',
                'created_at' => '2022-05-15 22:12:30',
                'updated_at' => '2022-05-15 22:12:30',
            ),
            70 => 
            array (
                'id' => 71,
                'key' => 'browse_tasks',
                'table_name' => 'tasks',
                'created_at' => '2022-05-15 22:12:56',
                'updated_at' => '2022-05-15 22:12:56',
            ),
            71 => 
            array (
                'id' => 72,
                'key' => 'read_tasks',
                'table_name' => 'tasks',
                'created_at' => '2022-05-15 22:12:56',
                'updated_at' => '2022-05-15 22:12:56',
            ),
            72 => 
            array (
                'id' => 73,
                'key' => 'edit_tasks',
                'table_name' => 'tasks',
                'created_at' => '2022-05-15 22:12:56',
                'updated_at' => '2022-05-15 22:12:56',
            ),
            73 => 
            array (
                'id' => 74,
                'key' => 'add_tasks',
                'table_name' => 'tasks',
                'created_at' => '2022-05-15 22:12:56',
                'updated_at' => '2022-05-15 22:12:56',
            ),
            74 => 
            array (
                'id' => 75,
                'key' => 'delete_tasks',
                'table_name' => 'tasks',
                'created_at' => '2022-05-15 22:12:56',
                'updated_at' => '2022-05-15 22:12:56',
            ),
            75 => 
            array (
                'id' => 76,
                'key' => 'browse_teams',
                'table_name' => 'teams',
                'created_at' => '2022-05-15 22:13:45',
                'updated_at' => '2022-05-15 22:13:45',
            ),
            76 => 
            array (
                'id' => 77,
                'key' => 'read_teams',
                'table_name' => 'teams',
                'created_at' => '2022-05-15 22:13:45',
                'updated_at' => '2022-05-15 22:13:45',
            ),
            77 => 
            array (
                'id' => 78,
                'key' => 'edit_teams',
                'table_name' => 'teams',
                'created_at' => '2022-05-15 22:13:45',
                'updated_at' => '2022-05-15 22:13:45',
            ),
            78 => 
            array (
                'id' => 79,
                'key' => 'add_teams',
                'table_name' => 'teams',
                'created_at' => '2022-05-15 22:13:45',
                'updated_at' => '2022-05-15 22:13:45',
            ),
            79 => 
            array (
                'id' => 80,
                'key' => 'delete_teams',
                'table_name' => 'teams',
                'created_at' => '2022-05-15 22:13:45',
                'updated_at' => '2022-05-15 22:13:45',
            ),
        ));
        
        
    }
}