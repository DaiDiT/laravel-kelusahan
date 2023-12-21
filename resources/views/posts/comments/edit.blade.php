@extends('layouts.main')

@section('container')
<section class="py-5 mt-5">
	<div class="container pt-2"> 
		<div class="col-7 d-block mx-auto">
			<div class="form-post post p-2 position-relative">
				<form action="/posts/{{ $post->id }}/comments/{{ $comment->id }}" method="post" class="m-1 h-auto d-flex flex-column">
					@method('put')
					@csrf
					<textarea type="text" class="form-control fs-7 lh-1" name="body" id="body" placeholder="Apa kelusahanmu hari ini?">{{ $comment->body }}</textarea>
					<button type="submit" class="btn-none position-absolute bottom-0 end-0 mb-4 me-4">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
							<path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
						</svg>
					</button>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection