<ol class="breadcrumb">
    {{-- <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li> --}}
    @foreach ($breadcrumbs as $key => $breadcrumb)
    <li><a href="{{ url().$breadcrumb['link'] }}">{{ $breadcrumb['alias'] }}</a></li>
    @endforeach
</ol>