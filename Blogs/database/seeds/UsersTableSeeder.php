<?php

use App\Profile;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Dzulfikar Maulana',
            'email' => 'dzulfikar.maulana@gmail.com',
            'password' => bcrypt('secret'),
            'admin' => 1
        ]);

        Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.png',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias aliquam at aut deleniti eum exercitationem hic inventore, ipsa iusto nisi odio officia placeat, provident quod ratione reprehenderit tenetur vitae.',
            'facebook' => 'http://www.facebook.com',
            'youtube' => 'http://www.youtube.com'
        ]);
    }
}
