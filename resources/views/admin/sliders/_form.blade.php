@php
    $slider = $slider ?? null;
@endphp
<div class="row">
    <div class="col-lg-8">
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h5 class="card-title mb-3">Slide Content</h5>

                <div class="mb-3">
                    <label class="form-label">Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                           name="title" value="{{ old('title', $slider->title ?? '') }}" required>
                    @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Subtitle</label>
                    <input type="text" class="form-control @error('subtitle') is-invalid @enderror"
                           name="subtitle" value="{{ old('subtitle', $slider->subtitle ?? '') }}">
                    @error('subtitle')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-0">
                    <label class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror"
                              name="description" rows="4">{{ old('description', $slider->description ?? '') }}</textarea>
                    @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
        </div>

        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h5 class="card-title mb-3">Call to Action</h5>
                <div class="row">
                    <div class="col-md-5 mb-3 mb-md-0">
                        <label class="form-label">Button Text</label>
                        <input type="text" class="form-control @error('button_text') is-invalid @enderror"
                               name="button_text" value="{{ old('button_text', $slider->button_text ?? '') }}">
                        @error('button_text')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-md-7">
                        <label class="form-label">Button Link</label>
                        <input type="text" class="form-control @error('button_link') is-invalid @enderror"
                               name="button_link" value="{{ old('button_link', $slider->button_link ?? '') }}"
                               placeholder="/quote">
                        @error('button_link')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h5 class="card-title mb-3">Publish</h5>

                <div class="mb-3">
                    <label class="form-label">Display Order</label>
                    <input type="number" class="form-control @error('order') is-invalid @enderror"
                           name="order" value="{{ old('order', $slider->order ?? 0) }}" min="0">
                    @error('order')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="is_active" value="1" id="is_active"
                           {{ old('is_active', $slider->is_active ?? true) ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">Active</label>
                </div>

                <button type="submit" class="btn btn-primary w-100 mb-2">
                    <i class="fas fa-save me-2"></i>{{ $slider ? 'Update Slider' : 'Create Slider' }}
                </button>
                <a href="{{ route('admin.sliders.index') }}" class="btn btn-light w-100">Cancel</a>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title mb-3">Images</h5>

                <div class="mb-3">
                    <label class="form-label">Background Image <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('background_image') is-invalid @enderror"
                           name="background_image" value="{{ old('background_image', $slider->background_image ?? '') }}"
                           placeholder="img/banner/page-banner.jpg" required>
                    @error('background_image')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    <small class="text-muted">Path under public/ or a full URL</small>
                </div>

                <div class="mb-0">
                    <label class="form-label">Dark Mode Image</label>
                    <input type="text" class="form-control @error('background_image_dark') is-invalid @enderror"
                           name="background_image_dark" value="{{ old('background_image_dark', $slider->background_image_dark ?? '') }}">
                    @error('background_image_dark')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
        </div>
    </div>
</div>
