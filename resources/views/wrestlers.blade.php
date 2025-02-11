<x-layout>
    <h1>{{formatCode($wrestlers)}}</h1>

    @if (Session::has('success'))
        <span>{{Session::get('success')}}</span>
    @endif

    <a href="add/wrestler">Add Wrestlers</a>
        <ul>
            @foreach($wrestlers as $wrestler)
                <li><a href="/wrestler/{{$wrestler->id}}">{{$wrestler->name}}</a></li>
                <li><a href="/wrestler/{{$wrestler->id}}/edit">EDIT</a></li>
            @endforeach   
        </ul>
</x-layout>