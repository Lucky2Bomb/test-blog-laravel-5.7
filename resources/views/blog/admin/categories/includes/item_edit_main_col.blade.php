@php
/** @var \App\Models\BlogCategory $item */
@endphp

<div class="card">
    <div class="card-body">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                    aria-controls="nav-home" aria-selected="true">Main data</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="pt-2">
                    <div class="pb-3">
                        <label for="title">Title</label>
                        <input name="title" type="text" value="{{$item->title}}" class="form-control" minlength="5"
                            aria-describedby="basic-addon1" required>
                    </div>

                    <div class="pb-3">
                        <label for="slug">Slug</label>
                        <input name="slug" type="text" value="{{$item->slug}}" class="form-control"
                            aria-describedby="basic-addon1">
                    </div>

                    <div class="pb-3">
                        <label for="parent_id">Parent</label>
                        <select name="parent_id" class="custom-select" id="inputGroupSelect01"
                            placeholder="Select parent...">
                            @foreach ($categoryList as $categoryOption)
                            <option value={{$categoryOption->id}} {@if ($categoryOption->id == $item->parent_id)
                                selected
                                @endif}>
                                {{$categoryOption->id}}.{{$categoryOption->title}}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="pb-3">
                        <label for="description">Description</label>
                        <textarea name="description" type="text" class="form-control" rows="4"
                            aria-label="With textarea">{{old('description', $item->description)}}</textarea>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
