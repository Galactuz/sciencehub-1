<h1>The Page of {{{$theAuthor->first_name}}} {{{$theAuthor->last_name}}}</h1>

@foreach(Author::find($theAuthor->id)->publications as $pub)
	<h2>{{{ $pub->title }}}</h2>
	<p>{{{ $pub->source }}}</p>
@endforeach
