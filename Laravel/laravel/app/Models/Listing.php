<?php

namespace App\Models;

// we dont have to touch to much this file (for must of part)

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // create our scopeFilter()

    public function scopeFilter($query, array $filters)
    {
        // dd($filters['tag']);

        // null coalesciang operator
        // meaning if the is not false then move on
        // if this is a tag then do what is th here

        // Laravel Eliquent query builder > light query
        $query->where('tags', 'like', '%' . request('tag'). '%');
        // column name : tags
        // comparison operator : 'like'
        // value to compare with : '%'.request('tag').'%'
        // it filters the rows based on the tags column, using the like sql operator
        // the like operator is used to search for a specified pattern in a column
        // it will research whatever that tag is in that tags column in the DB

        if ($filters['search'] ?? false) {
         // 
         $query->where('title', 'like', '%' . request('search'). '%') 
         ->orWhere('description', 'like', '%' . request('search').'%')
         ->orWhere('tags', 'like', '%'. request('search').'%');      
          }
    }
}
