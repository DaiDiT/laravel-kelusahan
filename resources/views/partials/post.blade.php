<div class="container">
	<div class="col-7 mt-5 pt-5">
<div class="post mt-3">
				<div class="post-header d-flex align-items-center pt-2 px-3 text-blueish">
					<span class="fs-6 fw-bold">{{ $post->user->name }}</span>
					<span class="fs-7 fst-italic ms-auto">{{ $post->created_at->locale('id_ID')->diffForHumans() }}</span>
				</div>    
				<div class="post-body px-3">
					<hr class="mt-n1 mb-2"><p class="fs-7 lh-sm fw-medium text-justify">{{ strip_tags(nl2br($post->body), '<br>') }}</p>
				</div>
				<div class="post-btn d-flex p-3 align-items-center text-black bg-blueish1">
					<div class="btn-heart ms-2 @if (auth()->user()->likes->where('post_id', $post->id)->count()) liked @endif">
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-heart z-3 mx-auto cursor-pointer" viewBox="0 0 16 16">
							<path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" id="heartIcon" class="bi bi-heart-fill @if (auth()->user()->likes->where('post_id', $post->id)->count()) color-red @endif" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
						</svg>
						<span class="ms-2 fs-6 fw-semibold mx-auto cursor-default">{{ $post->likeCountShortened() }}</span>
						<div class="btn-info fs-8 fw-semibold px-2">Aku bersamamu!</div>
						
						@if($post->likes->count())
						<div class="count-info fs-8 fw-semibold px-2">{{ $post->likeCountFormatted() }} orang mendukung {{ $post->user->name }}</div>
						@endif

					</div>
					<div class="btn-cmt ms-2 pe-auto" >
						<svg xmlns="http://www.w3.org/2000/svg" data-href="/posts/{{ $post->id }}" width="30" height="30" fill="black" class="bi bi-chat-square-text z-3 cursor-pointer" viewBox="0 0 16 16">
							<path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
							<path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-chat-square-text-fill" viewBox="0 0 16 16">
							<path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z"/>
						</svg>
						<span class="ms-2 fs-6 fw-semibold mx-auto cursor-default">{{ $post->commentCountShortened() }}</span>
						<div class="btn-info fs-8 fw-semibold px-2">Lihat komentar</div>
						
						@if($post->comments->count())
						<div class="count-info fs-8 fw-semibold px-2">{{ $post->commentCountFormatted() }} orang mengomentari ini</div>
						@endif	

					</div>
					<div class="btn-ops cursor-pointer ms-auto">
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
							<path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
						</svg>
						<ul class="menu fs-7 fw-semibold">
							@if (auth()->user()->id == $post->user->id)
							<a class="text-decoration-none text-black" href="/posts/{{ $post->id }}/edit#body"><li><i class="bi bi-pencil"></i> Edit</li></a>
							<form action="/posts/{{ $post->id }}" method="post">
								@method('delete')
								@csrf
								<button class="btn-none w-100 fw-semibold" onclick="return confirm('Yakin ingin menghapus postingan?')"><li class="text-start"><i class="bi bi-trash3"></i>  Hapus</li></button>
							</form>
							
							@else
							<li><i class="bi bi-flag"></i>  Laporkan</li>
							@endif
						</ul>
					</div>
				</div>
				{{-- <div class="post-header d-flex align-items-center >
					<span class="fs-6 fw-bold">{{ $post->user->name }}</span>
					<span class="fs-7 fst-italic ms-auto">{{ $post->created_at->locale('id_ID')->diffForHumans() }}</span>
				</div>    
				<div class="post-body px-3">
					<hr class="mt-n1 mb-2"><p class="fs-7 lh-sm fw-medium text-justify">{{ strip_tags(nl2br($post->body), '<br>') }}</p>
				</div> --}}
				@foreach($post->comments as $comment)
				<div class="cmt-section mt-2 mx-3 mb-0">
					<div class="d-flex text-blueish align-items-center">
						<span class="fs-6 fw-bold">{{ $comment->user->name }}</span>
						<span class="fs-8 fst-italic ms-2">{{ $comment->created_at->locale('id_ID')->diffForHumans() }}</span>
						<span class="btn-ops ms-auto">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-three-dots" viewBox="0 0 16 16">
							 	<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
							</svg>
						</span>
					</div>
					<p class="lh-1">
						{{ $comment->body }}
					</p>
				</div>
				@endforeach
				<div class="form-cmt p-3 bg-blueish2">
					<form role="comment">
						<div class="input-group">
							<textarea class="form-control shadow lh-1" type="search" placeholder="Beri komentar..." rows="1"></textarea>
							<button class="btn d-flex align-items-center" type="submit">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-send-fill position-absolute" viewBox="0 0 16 16">
									<path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
								</svg>
							</button>
						</div>
					</form>
				</div>
			</div>
		
	</div>
	
</div>