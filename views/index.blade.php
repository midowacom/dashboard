@extends("layout.app")

@section("content")
<div id="show-web" class="mt-4">
	<div class="container">
		<div class="table-responsive">
			<table id="example" class="table table-striped table-bordered display">
				<thead>
					<tr>
						<th>URL</th>
						<th>Name</th>
					</tr>
				</thead>
				<tbody>
					@foreach($directories as $dir)
					<tr>
						<td>{{ $dir }}</td>
						<td><a href="http://{{ $dir }}.test" target="_blank" class="font_title">{{ $dir }}</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection