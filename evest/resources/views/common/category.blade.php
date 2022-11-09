<ul>
    @foreach($category as $row)
    <a href=" {{'http://localhost/laraval/evest/public/dishwasher/'.$row->id}}">
        <li>{{$row->categories}}</li>
    </a>
    @endforeach
</ul>