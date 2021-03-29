<?php

use App\PagesWithNoRepeatedFields;
use Illuminate\Database\Seeder;

class PagesWithNoRepeatedFieldsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        $data = array(
            [
                'id'                     => 1,
                'history'                => '',
                'short_history'          => '',
                'about_title'            => '',
                'about_subtitle'         => '',
                'footer_description'     => '',
                'social_media_facebook'  => '',
                'social_media_twitter'   => '',
                'social_media_instagram' => '',
                'social_media_youtube'   => '',
            
            ]
        );
        
        PagesWithNoRepeatedFields::insert( $data );
    }
}
