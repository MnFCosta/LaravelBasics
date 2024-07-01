<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;
use Illuminate\Support\Facades\Log;

class TodoListController
{

    public function index(){
        return view('home', ['listItems' => ListItem::all()]);
    }

    public function editItem($id){
        $item = ListItem::find($id);
        return view('edititem', compact('item'));
    }

    public function updateItem(Request $request, $id){
        $item = ListItem::find($id);
        $item->name = $request->name;
        $item->save();
        return redirect('/');
    }

    public function saveItem(Request $request){
        
        $newListItem = new ListItem;
        $newListItem->name = $request->listItem; 
        $newListItem->is_complete = 0; 
        $newListItem->save(); 

        return redirect('/');
    }

    public function deleteItem($id){
        $listItem = ListItem::find($id);
        $listItem->delete();

        return redirect('/');
    }

    public function markComplete($id){
        $listItem = ListItem::find($id);
        $listItem->is_complete == 0 ? $listItem->is_complete = 1 :  $listItem->is_complete = 0;
        $listItem->save();
        return redirect('/');
    }
}
