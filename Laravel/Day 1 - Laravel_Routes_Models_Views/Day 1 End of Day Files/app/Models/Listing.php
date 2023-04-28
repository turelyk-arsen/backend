<?php

namespace App\Models;

// lets create the Class

class Listing
{
    //function I called all() becauee I want all the listings
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => ' Lorem Lorem Lorem Lorem Lorem LoremLorem 
            Lorem Lorem Lorem Lorem Lorem Lorem Lorem LoremLorem Lorem 
            LoremLorem Lorem Lorem Lorem Lorem LoremLorem Lorem LoremLorem 
            Lorem Lorem Lorem Lorem LoremLorem Lorem LoremLorem Lorem Lorem '
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => ' Lorem Lorem Lorem Lorem Lorem LoremLorem 
            Lorem Lorem Lorem Lorem Lorem Lorem Lorem LoremLorem Lorem 
            LoremLorem Lorem Lorem Lorem Lorem LoremLorem Lorem LoremLorem 
            Lorem Lorem Lorem Lorem LoremLorem Lorem LoremLorem Lorem Lorem '
            ]
        ];
    } // end of function all()

    //single listing
    public static function find($id)
    {
        $listings = self::all();
        // we want the one with the current id
        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}// end of the class Listing
