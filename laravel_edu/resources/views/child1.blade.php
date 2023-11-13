
{{-- 상속 --}}
@extends('inc.layout')

{{-- section : 부모 템플릿에 해당하는 yield 부분에 삽입 --}}
@section('title', '자식1 타이틀')

{{-- @section ~ @endsection : 처리해야 될 코드가 많을 경우 --}}
@section('main')
<h2>자식1 화면입니다</h2>
<p>여러 데이터를 표시합니다</p>

{{--  조건문 --}}
@if($gender === '1')
	<span>성별 : 남자</span>
@elseif($gender === '2') 
 	<span>성별 : 여자</span>
@else 
	<span>당신은 : 홍석천</span>
@endif
<hr>

{{-- 반복문 --}}
@for($i =0; $i < 5; $i++)
{{-- {{$i}} 화면에 변수를 출력하는 방법  --}}
	<span>{{$i}}</span>
@endfor
<hr>
<h3>foreach문</h3>
@foreach ($data as $key => $val)
	<p>{{$loop->count.' >> '.$loop->iteration}}</p>
	<span>{{$key.' : '.$val}}</span>
	<br>
@endforeach

<hr>

<h3>forelse</h3>
@forelse($data2 as $key => $val)
	<span>{{$key.' : '.$val}}</span>
	<br>
@empty

<span>빈배열입니다.</span>

@endforelse

<hr>
@endsection

{{-- 부모 show test --}}
@section('show')
<h2>자식1 show입니다.</h2>
<p>자식1자식1자식1자식1</p>

@endsection