




hello buddy
<h1>
    Welcome {{$name ?? "time"}}
    {{date('d-m-y')}} ||
    {{time()}}

||
<!-- {!! $demo !!}  used to decode html entities -->

@if ($name != "")
{{"name is not empty"}}
@elseif($name == "saksham")
{{"name is not empty"}}
@endif

||

@unless($name == "saksham")
{{"this is not equal to saksham"}}
@endunless

||

@isset($name)
{{$name}}
@endisset

<!-- ------------while loop------ -->
<!-- @php 
$i = 1;
@endphp

@while($i <= 10)
<h2>{{$i}}</h2>
@php $i++; @endphp
@endwhile -->

<!-- ---------for each loop------ -->
@php
$arr = [1,2,3,4,5];
@endphp
@foreach ($arr as $i)
<h2>{{$i}}</h2>
@endforeach
</h1>


