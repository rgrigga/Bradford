<?php

class SurlsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('surls')->delete();


        // $surls = array(
        //         ['caption' => 'The Thinker',
        //         'path' => 'img/thinker/thinker.png',
        //         'created_at' => new DateTime,
        //         'updated_at' => new DateTime],
                
        //         ['caption' => 'Columbus, Ohio',
        //         'path' => 'img/columbus.png',
        //         'created_at' => new DateTime,
        //         'updated_at' => new DateTime]
        // );

        // Uncomment the below to run the seeder
    
    DB::table('photos')->insert($photos);
    

        $surls = array(
        	['url' => 'http://google.com', 'surl'=>'abc1'],
        	['url' => 'http://yahoo.com', 'surl'=>'abc2']
        );

        // Uncomment the below to run the seeder
         DB::table('surls')->insert($surls);
    }

}