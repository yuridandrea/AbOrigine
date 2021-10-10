@extends('layouts.dashboard')

{{-- TUTTI I TAG DEL DB --}}
{{-- @dd($tags) --}}
{{-- TUTTE LE CATEGORIE DEL DB --}}
{{-- @dd($categories) --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Creazione nuovo post</h1>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><line x1="20" y1="12" x2="4" y2="12"></line><polyline points="10 18 4 12 10 6"></polyline></svg> Tutti i posts
                </a>
            </div>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
                @csrf
				@method('POST') {{-- si può sottintendere se form method="post"? --}}
                <div class="form-group">
                    <label>Titolo</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Inserisci il titolo" value="{{ old('title') }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Inserisci immagine</label>
                    <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror" value="{{ old('image') }}">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

				<div class="form-group">
                    <label>Inserisci immagine per sfondo</label>
                    <input type="file" name="image_url" class="form-control-file @error('image_url') is-invalid @enderror" value="{{ old('image_url') }}">
                    @error('image_url')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>really short description of the "image"</label>
                    <textarea name="alt" class="form-control @error('alt') is-invalid @enderror" rows="10" placeholder="alt picture" required>{{ old('alt') }}</textarea>
                    @error('alt')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>a little description of the article</label>
                    <textarea name="abstract" class="form-control @error('abstract') is-invalid @enderror" rows="10" placeholder="little description of the article" required>{{ old('abstract') }}</textarea>
                    @error('abstract')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Contenuto</label>
                    <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="10" placeholder="Inizia a scrivere qualcosa..." required>{{ old('content') }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<p>Seleziona i tag:</p>
							@foreach ($tags as $tag)
								<div class="form-check @error('tags') is-invalid @enderror">
									{{-- 
										$tags       : Collection di Model Tag >> tutti i tag del DB
										$post->tags : Collection di Model Tag >> tag associati al $post
										$tag        : Model Tag >> ogni tag del DB
										qui uso $post->tags e non $post->tags() (classi diverse >> metodi diversi)
										name = 'tags' è l'array che raccoglie i valori di value = $tag->id
									--}}	
									{{-- {{'$tags'}} @dump($tags) --}}
									{{-- {{'$post->tags'}} @dump($post->tags) --}}
									{{-- {{'$tag'}} @dd($tag) --}}
									<input name="tags[]" class="form-check-input" type="checkbox" value="{{ $tag->id }}"
									{{ in_array($tag->id, old('tags', [])) ? 'checked=checked' : '' }}>
									<label class="form-check-label">
										{{ $tag->name }}
									</label>
								</div>
							@endforeach
							@error('tags')
								<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>		
					</div>
					<div class="col-6">
						<div class="form-group">
							<label>Categoria</label>
							<select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
								<option value="">-- seleziona categoria --</option>
								@foreach ($categories as $category)
									{{-- 
										$categories : Collection di Model Category >> tutte le categorie del DB
										$category   : Model Category >> ogni categoria del DB
									--}}	
									{{-- {{'$categories'}} @dump($categories) --}}
									{{-- {{'$category'}} @dd($category) --}}
									<option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected=selected' : '' }}>
										{{ $category->name }}
									</option>
								@endforeach
							</select>
							@error('category_id')
								<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
					</div>
				</div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg> Crea post
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
