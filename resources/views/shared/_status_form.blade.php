<form method="post" action="{{route('statuses.store')}}">
    @include('shared._errors')
    {{csrf_field()}}
    <textarea class="form-control" name="content"  rows="3">
        {{old('content')}}
    </textarea>
    <button type="submit" class="btn btn-primary mt-3">发布</button>
</form>