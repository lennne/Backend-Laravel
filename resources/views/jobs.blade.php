<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
    <h1>Job Listings</h1>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <!--/*This anchor tag sends an href which has a wildcard {id} here it is represented by 
           //     accessing the $job['id'] variable
                */ -->
                <a href="/job/{{$job['id']}}">
                    <strong>{{$job['title']}}</strong> Pays {{$job['salary']}} per year.
                </a>
            </li>  
        @endforeach
    </ul>
</x-layout>