@extends('layout.layout')

@section('title', 'Detail')

@section('main')
 <main class="justify-content-center align-items-center h-75">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<form action="{{route('board.update', ['board' => $data -> b_id])}}" method="POST">
				@include('layout.errorlayout')
				@csrf
				@method('put')
				<div class="modal-header">
					{{-- input  value로 수정내용 출력--}}
					<input type="text" name="b_title" class="form-control" placeholder="제목을 입력하세요" value="{{$data->b_title}}">
				</div>

				<div class="modal-body">
					{{-- 텍스트 area는 바로 출력 --}}
					<textarea name="b_content"  class="form-control" cols="30" rows="10" placeholder="내용을 입력하세요">{{$data->b_content}}</textarea>
				</div>
				<div class="modal-footer">
					<button type="submit">작성</button>
					<a href="{{route('board.show', ['board' => $data->b_id])}}">취소</a>
				</div>
			</form>
		</div>
	</div>
			

</main>
@endsection