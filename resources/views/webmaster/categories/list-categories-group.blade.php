<ul class="list-group list-group-flush">
    @foreach($categories as $category)
        <li class="list-group-item">
            <div class="d-flex">
                <span>{{  $category->name }}</span>
                <div class="actions mr-2">
                    <a class="badge badge-primary">حذف</a>
                    <a class="badge badge-primary">حذف</a>
                    <a class="badge badge-primary">حذف</a>
                </div>
            </div>
            @if($category->children()->count())
                @include('webmaster.categories.list-categories-group', ['categories' => $category->children])
            @endif
        </li>
    @endforeach
</ul>
