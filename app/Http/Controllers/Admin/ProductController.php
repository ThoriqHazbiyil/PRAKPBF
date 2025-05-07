<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }
    public function create()
    {
        return view('products.create');
    }

    // Menyimpan produk baru
    public function store(Request $request)
    {
        // Validasi data yang dimasukkan
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'weight' => 'required|integer',
            'price' => 'required|integer',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'description' => 'required|string',
            'category' => 'required|string',
            'color' => 'required|string',
            'status' => 'required|boolean',
            'age' => 'required|integer|min:0',
        ], [
            'name.required' => 'Nama produk wajib diisi.',
            'weight.required' => 'Berat produk wajib diisi.',
            'price.required' => 'Harga produk wajib diisi.',
            'image.required' => 'Gambar produk wajib diunggah.',
            'description.required' => 'Deskripsi produk wajib diisi.',
            'category.required' => 'Kategori produk wajib diisi.',
            'color.required' => 'Warna produk wajib diisi.',
            'status.required' => 'Status produk wajib dipilih.',
            'age.required' => 'Umur produk wajib diisi.',
        ]);

        // Proses upload gambar
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
        }

        // Simpan data produk
        Product::create([
            'name' => $validated['name'],
            'weight' => $validated['weight'],
            'price' => $validated['price'],
            'image' => $path ?? null,
            'description' => $validated['description'],
            'category' => $validated['category'],
            'color' => $validated['color'],
            'status' => $validated['status'],
            'age' =>  $validated['age']
        ]);

        // Redirect ke daftar produk dengan pesan sukses
        return redirect()->route('admin.product.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit produk
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product'));
    }

    // Menyimpan perubahan produk
    public function update(Request $request, $id)
    {
        // Validasi data yang dimasukkan
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'weight' => 'required|integer',
            'price' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'description' => 'required|string',
            'category' => 'required|string',
            'color' => 'required|string',
            'status' => 'required|boolean',
        ], [
            'name.required' => 'Nama produk wajib diisi.',
            'weight.required' => 'Berat produk wajib diisi.',
            'price.required' => 'Harga produk wajib diisi.',
            'image.required' => 'Gambar produk wajib diunggah.',
            'description.required' => 'Deskripsi produk wajib diisi.',
            'category.required' => 'Kategori produk wajib diisi.',
            'color.required' => 'Warna produk wajib diisi.',
            'status.required' => 'Status produk wajib dipilih.',
        ]);

        // Temukan produk yang ingin diubah
        $product = Product::findOrFail($id);

        // Proses upload gambar jika ada gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($product->image) {
                Storage::delete($product->image);
            }

            // Simpan gambar baru
            $path = $request->file('image')->store('products', 'public');
        }

        // Update data produk
        $product->update([
            'name' => $validated['name'],
            'weight' => $validated['weight'],
            'price' => $validated['price'],
            'image' => $path ?? $product->image,
            'description' => $validated['description'],
            'category' => $validated['category'],
            'color' => $validated['color'],
            'status' => $validated['status'],
        ]);

        // Redirect ke daftar produk dengan pesan sukses
        return redirect()->route('admin.product.index')->with('success', 'Produk berhasil diperbarui.');
    }

    // Menghapus produk
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Hapus gambar produk jika ada
        if ($product->image) {
            Storage::delete($product->image);
        }

        // Hapus produk dari database
        $product->delete();

        // Redirect ke daftar produk dengan pesan sukses
        return redirect()->route('admin.product.index')->with('success', 'Produk berhasil dihapus.');
    }
}
