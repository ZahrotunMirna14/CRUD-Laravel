@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h4>Detail Buku</h4>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="form-group">
			<strong>Judul Buku</strong> {{$buku->judul}}
		</div>
		<div class="form-group">
			<strong>Tahun Terbit : </strong> {{$buku->judul}}
		</div>
		<div class="form-group">
			<strong>Penerbit : </strong> {{$buku->judul}}
		</div>
		<div class="form-group">
			<strong>Pengarang : </strong> {{$buku->judul}}
		</div>
	</div>
	<div class="col-md-12">
		<a href="{{route('buku.index')}}" class="btn btn-sm btn-success">Back</a>
	</div>
</div>
@endsection