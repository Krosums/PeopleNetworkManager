<x-layout>
    <h2>Person name and id</h2>
    <h2>{{$people->name}}</h2>
    <div class="bg-gray-200 p-4 rounded">
    <p><strong>Age: {{$people->age}}</strong>
        <p><strong>About me</strong></p>
        <p>{{$people->bio}}</p>
    </div>

<div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
    <h3>Workplace Information</h3>
    <p><strong>Workplace name:</strong> {{ $people->workplace->name }}</p>
    <p><strong>Location:</strong> {{ $people->workplace->location }}</p>
    <p><strong>About the workplace:</strong></p>
    <p>{{ $people->workplace->description }}</p>
  </div>

  <form action="{{route('people.destroy', $people->id)}}" method="POST">
    @csrf
    @method('DELETE')


    <button type ="submit" class="btn my-4">Delete person</button>
  </form>

</x-layout>