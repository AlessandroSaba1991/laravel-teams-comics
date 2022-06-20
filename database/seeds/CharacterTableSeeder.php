<?php

use App\Character;
use Illuminate\Database\Seeder;

class CharacterTableSeeder extends Seeder
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
            $new_character->name = $character['name'];
            $new_character->description = $character['description'];
            $new_character->image = $character['image'];
            $new_character->save();
        }
    }
}
