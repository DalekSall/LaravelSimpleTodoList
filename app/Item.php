<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function itemList() {
        return $this->belongsTo('App\ItemList', 'item_list_id');
    }
}
