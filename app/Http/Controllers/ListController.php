<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ItemList;
use App\Item;

class ListController extends Controller
{
    function index() {
        $lists = ItemList::all();
        return View('item_list.index', ['lists' => $lists]);
    }

    function get($id) {
        $list = ItemList::find($id);
        return View('item_list.list', ['list' => $list]);
    }

    function create(Request $request) {
        $list = new ItemList;
        $list-> name = $request->input('name');
        $list->save();
        return redirect()->action('ListController@index');
    }

    function addItem($id, Request $request) {
        $item = new Item;
        $item->name = $request->input('name');
        $item->item_list_id = $id;
        $item->active = 1;
        $item->save();
        return redirect()->action('ListController@get', $id);
    }

    function checkItem($listId, $itemId) {
        $item = Item::find($itemId);
        $item->active = 0;
        $item->save();

        return redirect()->action('ListController@get', $listId);
    }
}
