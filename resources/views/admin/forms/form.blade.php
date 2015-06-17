@foreach($fields as $field => $rules)
	<?php $rules = explode('|', $rules); ?>
	@include('admin.forms.'.$rules[0], [ 'field' => $field, 'rules' => $rules ])
@endforeach