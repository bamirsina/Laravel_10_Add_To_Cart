<?php

namespace App\Http\Controllers;
use App\Models\Product;


class RemoveController extends Controller
{
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->back()->with('success', 'Product deleted successfully!');
    }
}
