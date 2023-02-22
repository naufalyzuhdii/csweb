<ul>
    @foreach ($subcategories as $subcategory)

        <li><a href="/view/sub-course/{{$subcategory->id}}">{{ $subcategory->name }}<i class="fa-sharp fa-solid fa-play"></i></a>
            @if (count($subcategory->subcategory))
                 @include('navigation.subcategory', ['subcategories' => $subcategory->subcategory])
            @endif
        </li>

    @endforeach
</ul>