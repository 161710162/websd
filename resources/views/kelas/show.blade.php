@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Lihat Data Kelas 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Kelas</label>	
			  			<input type="text" name="title" class="form-control" value="{{ $kelas->nama_kelas }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Wali Kelas</label>
						<input type="text" name="title" class="form-control" value="{{ $kelas->Guru->nama_guru }}"  readonly>
			  		</div>

			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection