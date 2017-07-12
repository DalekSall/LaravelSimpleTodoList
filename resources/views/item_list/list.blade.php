
{{ Form::open(array('url' => '/'.$list->id.'/addItem/')) }}
<input type="text" name="name" />
<input type="submit" value="New Item">
{{ Form::close() }}
<ul>
@foreach($list->items as $item)
    @if($item->active == 1)
    <li>
        <p>
            {{$item->name}} <a href="/{{ $list->id }}/checkItem/{{ $item->id }}">✔</a>
        </p>
    </li>
    @endif
@endforeach
</ul>