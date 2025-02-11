<x-layout>
   <ul>
      @foreach($bouts as $bout)
         <li><a href="/bout/{{$bout->id}}">{{$bout->title}}</a></li>    
      @endforeach
   </ul>      
</x-layout>