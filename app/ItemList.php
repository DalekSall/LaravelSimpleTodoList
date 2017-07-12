<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemList extends Model
{
    public function items() {
        return $this->hasMany('App\Item', 'item_list_id');
    }
}
