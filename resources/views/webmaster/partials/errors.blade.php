@if($errors->count() > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{  $error }}</div>
    @endforeach
@endif

@error('') {{  $message }} @enderror
