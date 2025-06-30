<x-layout>
<form action="{{route('people.store')}}" method="POST">
    @csrf

  <h2>Add a new person</h2>

  <label for="name">Person Name:</label>
  <input 
    type="text" 
    id="name" 
    name="name" 
    value="{{ old('name') }}" 
    required
  >

  <label for="age">Person age(0-100):</label>
  <input 
    type="number" 
    id="age" 
    name="age" 
     value="{{ old('age') }}" 
    required
  >

  <label for="bio">Biography:</label>
  <textarea
    rows="5"
    id="bio" 
    name="bio" 
    required
  >{{old('bio')}}</textarea>

  <label for="workplace_id">Workplace:</label>
  <select id="workplace_id" name="workplace_id" required>
    <option value="" disabled selected>Select a workplace</option>
    @foreach($workplaces as $workplace)
        <option value = "{{$workplace->id}}"  {{$workplace->id == old('workplace_id') ? 'selected' : ''}}>
            {{$workplace->name}}
        </option>
    @endforeach
  </select>

  <button type="submit" class="btn mt-4">Add person</button>

  <!-- validation errors -->
  @if($errors->any())
  <ul class="px-4 py-2 bg-red-100">
    @foreach($errors->all() as $error)
        <li class="my-2 text-red-500">{{$error}}</li>
    @endforeach
  </ul>
  @endif
</form>

</x-layout>