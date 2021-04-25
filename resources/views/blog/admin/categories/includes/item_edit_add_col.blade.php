@php
/** @var \App\Models\BlogCategory $item */
@endphp

@if ($item->exists)
<div class="card">
    <div class="card-body">
        <ul class="list-group">
            <li class="list-group-item">ID: {{$item->id}}</li>
        </ul>
    </div>
</div>

<div class="card mt-4">
    <div class="card-body">
        <ul class="list-group">
            <li class="list-group-item"><b>Date created:</b> <br> {{$item->created_at}}</li>
            <li class="list-group-item"><b>Date updated:</b> <br> {{$item->updated_at}}</li>
            <li class="list-group-item"><b>Date deleted:</b>: <br> {{$item->deleted_at}}</li>
        </ul>
    </div>
</div>
@endif
