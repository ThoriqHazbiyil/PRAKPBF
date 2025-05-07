<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    public function index()
    {
        $carousels = Carousel::all();
        return view('admin.carousel.index', compact('carousels'));
    }

    public function create()
    {
        return view('admin.carousel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
        ]);

        $path = $request->file('image')->store('carousels', 'public');

        Carousel::create([
            'image' => $path,
        ]);

        return redirect()->route('admin.carousel.index')->with('success', 'Image uploaded.');
    }

    public function edit($id)
    {
        $carousel = Carousel::findOrFail($id);
        return view('admin.carousel.edit', compact('carousel'));
    }

    public function update(Request $request, $id)
    {
        $carousel = Carousel::findOrFail($id);

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|max:2048',
            ]);

            // Hapus file lama
            Storage::disk('public')->delete($carousel->image);

            $path = $request->file('image')->store('carousels', 'public');
            $carousel->update(['image' => $path]);
        }

        return redirect()->route('admin.carousel.index')->with('success', 'Image updated.');
    }

    public function destroy($id)
    {
        $carousel = Carousel::findOrFail($id);
        Storage::disk('public')->delete($carousel->image);
        $carousel->delete();

        return redirect()->route('admin.carousel.index')->with('success', 'Image deleted.');
    }
}
