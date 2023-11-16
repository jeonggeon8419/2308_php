@extends('layout.layout')

@section('title', 'Detail')

@section('main')
 <main class="justify-content-center align-items-center h-75">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<form action="{{route('board.store')}}" method="POST">
				@csrf
				<div class="modal-header">
					<input type="text" name="b_title" class="form-control" placeholder="제목을 입력하세요">
				</div>

				<div class="modal-body">
					<textarea name="b_content"  class="form-control" cols="30" rows="10" placeholder="내용을 입력하세요"></textarea>
				</div>
				<div class="modal-footer">
					<button type="submit">작성</button>
					<a href="{{route('board.index')}}">취소</a>
				</div>
			</form>
		</div>
	</div>
			

</main>
@endsection