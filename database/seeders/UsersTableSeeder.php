<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Helpers\Qs;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $this->createNewUsers();
        $this->createManyUsers(3);
    }

    protected function createNewUsers()
    {
        $password = Hash::make('phin'); // Changed default password to 'phin'

        $d = [
            ['name' => 'Phin Super Admin',
                'email' => 'phin@nexatech.com',
                'username' => 'phin',
                'password' => $password,
                'user_type' => 'super_admin',
                'code' => strtoupper(Str::random(10)),
                'remember_token' => Str::random(10),
            ],

            ['name' => 'Phin Admin',
                'email' => 'phin_admin@nexatech.com',
                'password' => $password,
                'user_type' => 'admin',
                'username' => 'phin_admin',
                'code' => strtoupper(Str::random(10)),
                'remember_token' => Str::random(10),
            ],

            ['name' => 'Phin Teacher',
                'email' => 'phin_teacher@nexatech.com',
                'user_type' => 'teacher',
                'username' => 'phin_teacher',
                'password' => $password,
                'code' => strtoupper(Str::random(10)),
                'remember_token' => Str::random(10),
            ],

            ['name' => 'Phin Parent',
                'email' => 'phin_parent@nexatech.com',
                'user_type' => 'parent',
                'username' => 'phin_parent',
                'password' => $password,
                'code' => strtoupper(Str::random(10)),
                'remember_token' => Str::random(10),
            ],

            ['name' => 'Phin Accountant',
                'email' => 'phin_accountant@nexatech.com',
                'user_type' => 'accountant',
                'username' => 'phin_accountant',
                'password' => $password,
                'code' => strtoupper(Str::random(10)),
                'remember_token' => Str::random(10),
            ],
        ];
        DB::table('users')->insert($d);
    }

    protected function createManyUsers(int $count)
    {
        $data = [];
        $user_type = Qs::getAllUserTypes(['super_admin', 'librarian', 'student']);

        for($i = 1; $i <= $count; $i++){
            foreach ($user_type as $k => $ut){
                $data[] = ['name' => 'Phin '.ucfirst($user_type[$k]).' '.$i,
                    'email' => 'phin_'.$user_type[$k].$i.'@nexatech.com',
                    'user_type' => $user_type[$k],
                    'username' => 'phin_'.$user_type[$k].$i,
                    'password' => Hash::make('phin'), // Changed to 'phin'
                    'code' => strtoupper(Str::random(10)),
                    'remember_token' => Str::random(10),
                ];
            }
        }

        DB::table('users')->insert($data);
    }
}