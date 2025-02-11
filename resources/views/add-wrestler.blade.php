<x-layout>

<h1>Create Wrestler</h1>
	
	@if (Session::has('fail'))
		<span>{{Session::get('fail')}}</span>
	@endif
	<form class="add-wrestler-form" action="{{route('addWrestler')}}" method="post">
		@csrf
		<label for="full_name">Wrestler Name</label>
		<input type="text" value="{{old('name')}}" name="name" class="@error('name') is-invalid @enderror">
		
		<label for="promotion" placeholder="promotion_id">Promotion</label>
		{{-- <input type="number" name="promotion_id" value="{{old('promotion_id')}}"> --}}

		<select name="promotion_id" id="">
			@foreach($promotions as $promotion)
			<option name="promotion_id" value="{{ $promotion->id}}">{{ $promotion->name }}</option>
			@endforeach
		</select>

		<button type="submit">Save</button>
	</form>

		@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

</x-layout>