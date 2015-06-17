@extends('admin.layouts.master')

@section('content')
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Hover Data Table</h3>
          <a href="{{ url().'/admin/pages/create' }}" class="btn btn-primary pull-right">Add New</a>
        </div>
        <div class="box-body">
          <table id="datatable" class="table table-bordered table-striped">
            <thead>
              <tr>
              @foreach($fields as $field => $rules)
                <th>{{ ucfirst($field) }}</th>
              @endforeach
              </tr>
            </thead>
            <tbody>
            	@foreach ($pages as $page)
            		<tr>
            			<td>{{ $page->name }}</td>
            			<td>{{ $page->slug }}</td>
            			<td>{{ $page->parent_id }}</td>
            			<td>{{ $page->description }}</td>
            			<td>{{ $page->order }}</td>
            			<td>
            				<a href="{{ url().'/admin/pages/'.$page->id.'/edit' }}" class="btn btn-info">Edit</a>
            			</td>
            		</tr>
            	@endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('script')

  <script type="text/javascript">
    $(function () {
      $("#datatable").dataTable();
    });
  </script>

@endsection