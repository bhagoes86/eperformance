@extends('layout.main')

@section('content')
<div class="content">
	<h3>Tambah Sasaran</h3>

	{{Form::model($sasaran, array('route' => ['sasaran.update', $sasaran->id], 'method' => 'PUT'))}}

	<div class="form-group">
    	{{ Form::label('sasaran', 'Sasaran Strategis') }}
		{{ Form::text('sasaran', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group">
    	{{ Form::label('sasaran_desc', 'Deskripsi Sasaran') }}
		{{ Form::textarea('sasaran_desc', null, ['class' => 'form-control summernote'])}}
	</div>    

    {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}

	{{Form::close()}}
</div>
@stop


@section('script')
<script type="text/javascript">
$(document).ready(function() {
	$('.summernote').summernote({height:70, width:770});
});
</script>
@stop