<x-layout>
    <ul>
        @foreach($promotions as $promotion)
            <li><a href='/promotions/{{$promotion->id}}'>{{$promotion->name}}</a></li>
        @endforeach   
    </ul>
</x-layout>