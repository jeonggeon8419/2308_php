@extends('layout.layout')

@section('title', 'List')

@section('main')
 <main class="justify-content-center align-items-center h-75">
	<div class="card">
			<div class="card-body">
				{{$data->b_id}}
				{{$data->b_title}}
				{{$data->b_content}}
				{{$data->b_created_at}}
				{{$data->b_updated_at}}
			</div>				
	</div>
</main>
@endsection