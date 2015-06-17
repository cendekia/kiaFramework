@extends('admin.layouts.master')

@section('content')

	<h1>Create New Page</h1>
	<br>
	{!! Form::open(['url' => 'admin/pages']) !!}

		@include ('admin.forms.form', ['submitBtnLabel' => 'Add new'])

	{!! Form::close() !!}

@stop

@section('script')

  <script type="text/javascript">
    $(function () {
      $("input[name='name']").on('keyup', function(){
      	var slug = ($(this).val().toLowerCase()).replace(/ /g, '-');
      	$("input[name='slug']").val(slug);
      });
    });
  </script>

@endsection