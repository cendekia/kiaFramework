@if ($errors->any())
    <div class="alert alert-danger alert-important">
        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
        @foreach ($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    </div>
@endif