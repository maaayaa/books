@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
	<div class="col-md-4">
		<div class="cord mb50">
			<div class="image-wrapper"><img class="book-image" src="{{ asset('images/dummy.png') }}"></div>
			<h3 class="h3 book-title">タイトル</h3>
				<p class="description">
					レビュー本文
				</p>
				<a href="" class="btn btn-secondary detail-btn">詳細を読む</a>
		</div>
	</div>
</div>
@endsection 



