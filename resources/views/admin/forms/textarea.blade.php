<!-- {{$field}} Form Input -->
<div class="form-group">
	{!! Form::label($field, ( isset($rules[1]) ) ? $rules[1] : ucfirst($field).' :' ) !!}
	{!! Form::{$rules[0]}($field, null, ['class' => 'form-control']) !!}
</div>