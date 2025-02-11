<x-layout>
    <ul>
        @foreach($promotion->wrestlers as $wrestlers)
            <li><a href="/wrestler/{{$wrestlers->id}}">{{$wrestlers->name}}</a></li>
        @endforeach
    </ul>
</x-layout>