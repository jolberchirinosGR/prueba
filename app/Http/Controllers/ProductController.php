<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
class ProductController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $products = Product::paginate($perPage); 
        
        return view('products.index', compact('products'));
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
    }

    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);

        $validatedData = $request->validated();

        $product->update([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'stock' => $validatedData['stock'],
        ]);

        return redirect()->route('products.index')->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Producto eliminado correctamente.');
    }
}