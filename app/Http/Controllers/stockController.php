<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class stockController extends Controller
{
    //
    function store(Request $req) {
        $stock = new Stock();
        $stock->name = $req->name;
        $stock->quantity = $req->quantity;
        $stock->price = $req->price;
        $stock->type = $req->type;
        $stock->save();
        return redirect('/admin/inventory/stock');
    }

    function view() {
        $data = Stock::all();
        return view('Inventory.Stocks.stocks', ['data' => $data]);
    }

    function editView(Request $req) {
        $id = $req->id;
        $data = Stock::find($id);
        return view('Inventory.Stocks.editStock', ['data' => $data]);
    }

    function edit(Request $req) {
        $id = $req->ID;
        $stock = Stock::where("ID", "=", $id)->update(
            [
                "name" => $req->name,
                "quantity" => $req->quantity,
                "price" => $req->price,
                "type" => $req->type,
            ]
        );
        return redirect('/admin/inventory/stock');
    }

    function delete($id) {
        Stock::where("ID", "=", $id)->delete();
        return redirect('/admin/inventory/stock');
    }
}
