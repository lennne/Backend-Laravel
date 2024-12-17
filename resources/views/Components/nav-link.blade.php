@props(['active'=>false])
@php
    {{/*it is also possible to have this block of php code in your blade template*/}}
@endphp

<a class="{{$active ? 'bg-gray-900 text-white':'text-gray-300 hover:bg-gray-700 hover:text-white'}} block rounded-md  px-3 py-2 text-base font-medium text-white"
    aria-current="{{$active ? 'page':'false'}}" {{$attributes}}>
{{$slot}}
</a>