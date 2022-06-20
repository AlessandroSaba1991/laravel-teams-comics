<?php

use Illuminate\Database\Seeder;
use App\Character;
class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $characters = config('db.characters');


        foreach ($characters as $character) {
            $new_character = new Character();
            $new_character->title = $character['title'];
            $new_character->thumb = $character['thumb'];
            $new_character->description = $character['description'];
            $new_character->save();
        }
    }
}
