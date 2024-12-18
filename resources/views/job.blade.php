<x-layout>
    <x-slot:heading>
        {{$job['title']}}
    </x-slot:heading>
    <h1> {{$job['title']}}</h1>
    
    
                <!--/*This anchor tag sends an href which has a wildcard {id} here it is represented by 
                accessing the $job['id'] variable
                */-->
                <a href="/jobs/{{$job['id']}}">
                    <strong>{{$job['title']}}</strong>Pays {{$job['salary']}} per year.
                </a>
    
    
    
</x-layout>