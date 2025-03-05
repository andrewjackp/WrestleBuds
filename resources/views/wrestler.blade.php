
<x-layout>
  <main>
    <h3>
      {{$wrestler->name}}
    </h3>

    <h3>
      {{$wrestler->promotion->name}}
    </h3>
     <a href="/wrestler/{{$wrestler->id}}/edit">EDIT</a>
  </main>
</x-layout>