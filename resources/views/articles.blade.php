<x-layout>
   <ul>
      @foreach($articles as $article)
         <li>{{$article->title}}</li>
      @endforeach   
   </ul>  
</x-layout>
      
 