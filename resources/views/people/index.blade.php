<x-layout>
    <h2>Currently available people</h2>

    
            <ul> 
        @foreach($people as $person)
        <li>
            <x-card href="{{route('people.show', $person->id)}}" :highlight="$person->age>25">
                <div><h3>
                    {{$person->name}}</h3>
                  <p>  {{$person->workplace->name}}</p>
                </div>
            </x-card>
        </li>
        @endforeach
    </ul>
    {{  $people->links()}}
</x-layout>