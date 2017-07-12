{{ Form::open(array('url' => '/create')) }}
    <input type="text" name="name" />
    <input type="submit" value="New List">
{{ Form::close() }}
<ul>
@foreach($lists as $list)
    <li>
        <a href="/{{$list->id}}">{{$list->name}}</a>
    </li>
@endforeach
</ul>