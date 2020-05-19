<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();
        
    	for ($i=0; $i <10 ; $i++) { 
    		DB::table('posts')->insert([
	            'title' => $faker->sentence($nbWords = 4, $variableNbWords = true),
	            'content' => $faker->paragraph($nbSentences = 15, $variableNbSentences = true),
	            'autor'=>$faker->name
        	]);

            $name= $faker->firstName($gender ='male');
            $passwd=$faker->password;
            $is_admin=false;
            
            if($i==1||$i==4){
                $is_admin=true;
                $name="Admin";
                $passwd="12345678";
                if($i==4)
                    $name="Administrator";
            }
            
            DB::table('users')->insert([
                'name' => $name,
                'email' => $faker->email,
                'password'=>md5($passwd),
                'is_admin'=>$is_admin
            ]);
    	}
    }
}
