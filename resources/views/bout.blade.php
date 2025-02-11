<x-layout>
   <ul>
      @foreach($bout->wrestlers as $wrestler)
         <li><a href="/wrestler/{{$wrestler->id}}">{{$wrestler->name}}</a></li>
      @endforeach
   </ul>
</x-layout>