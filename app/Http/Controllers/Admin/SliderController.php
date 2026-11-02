<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('order')->orderByDesc('id')->paginate(15);

        return view('admin.sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.sliders.create');
    }

    public function store(Request $request)
    {
        $validated = $this->validatedData($request);
        $validated['is_active'] = $request->boolean('is_active');
        $validated['order'] = $validated['order'] ?? ((int) Slider::max('order') + 1);

        Slider::create($validated);

        return redirect()->route('admin.sliders.index')
            ->with('success', 'Slider created successfully.');
    }

    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $validated = $this->validatedData($request);
        $validated['is_active'] = $request->boolean('is_active');

        $slider->update($validated);

        return redirect()->route('admin.sliders.index')
            ->with('success', 'Slider updated successfully.');
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();

        return redirect()->route('admin.sliders.index')
            ->with('success', 'Slider deleted successfully.');
    }

    private function validatedData(Request $request): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'button_text' => ['nullable', 'string', 'max:100'],
            'button_link' => ['nullable', 'string', 'max:255'],
            'background_image' => ['required', 'string', 'max:500'],
            'background_image_dark' => ['nullable', 'string', 'max:500'],
            'order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['sometimes', 'boolean'],
        ]);
    }
}
