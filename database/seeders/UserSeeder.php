<?php
namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'John';
        $user->last_name = 'Doe';
        $user->email = 'John.Doe@example.com';
        $user->password = '123456';
        $user->gender = 'male';
        $user->role = 'customer';
        $user->phone = '1122334455';
        $user->save();

        $user = new User;
        $user->name = 'Jordi';
        $user->last_name = 'Pérez';
        $user->email = 'jjpergui@gmail.com';
        $user->password = '123456';
        $user->role = 'admin';
        $user->gender = 'male';
        $user->phone = '1122334455';
        $user->address = 'Apdo. Correos 83';
        $user->save();

        $user = new User;
        $user->name = 'Ismael';
        $user->last_name = 'Renovell';
        $user->email = 'irenovellb@servinform.es';
        $user->role = 'chef';
        $user->password = '123456';
        $user->gender = 'male';
        $user->phone = '1122334455';
        $user->address = 'C/ Fila 8 46550 Albuixech';
        $user->save();
    }
}
