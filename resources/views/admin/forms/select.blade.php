<!-- {{$field}} Form Input -->
<div class="form-group">
	{!! Form::label($field, ( isset($rules[1]) ) ? $rules[1] : ucfirst($field).' :' ) !!}
	<?php $listName = ( isset($rules[2]) ) ? ${$rules[2]} : []; ?>
	{!! Form::{$rules[0]}($field, ['-- Please Select --'] + $listName, null, ['class' => 'form-control']) !!}
</div>
