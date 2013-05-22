<?php

class PhotosTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('photos')->delete();

        $photos = array(
        		['caption' => 'The Thinker',
        		'path' => 'img/thinker/thinker.png',
        		'created_at' => new DateTime,
                'updated_at' => new DateTime],
                
        		['caption' => 'Columbus, Ohio',
        		'path' => 'img/columbus.png',
        		'created_at' => new DateTime,
                'updated_at' => new DateTime]
        );

        // Uncomment the below to run the seeder
         DB::table('photos')->insert($photos);
    }

}