{{ $comment->user->user_name }} : {{ $comment->created_at }} {{ $comment->comment }} 
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="id" value="{{ $comment->id }}">