@extends('psb')

@section('content')

	@include('_step', ['step' => 2])

	<hr />

	@if ($psb->status_pembayaran == 0)

		<div class="alert alert-success text-center">
			<h4>
				Data telah kami simpan di database kami. 
				Pembayaran Anda sedang dikonfirmasi. 
				Setelah pembayaran kami terima Anda dapat melengkapi formulir pendaftaran di halaman ini.
				Gunakan informasi berikut untuk login untuk melanjutkan ke proses berikutnya:
				<br /><br />

				<strong>Username/Password : {{$psb->calonSiswa->nama}}/{{strtotime($psb->calonSiswa->created_at)}}</strong>

				@if ($psb->metode_pembayaran ==  'Tunai')
				<br /><br />
				Silakan klik tombol di bawah ini untuk mencetak nomor pendaftaran untuk diserahkan ke bagian keuangan
				<br /><br />
				<a href="/psb/printNomor/{{$psb->id}}" class="btn btn-success" target="_blank"><span class="fa fa-print"></span> Cetak Nomor Pendaftaran</a>
				@endif
			</h4>
		</div>

	@include('psb._show')

	@else

		<div class="alert alert-success text-center">
			<h4>
				Pembayaran telah kami verifikasi. Silakan lengkapi formulir di bawah ini.
			</h4>
		</div>

		@include('_error1')

		@include('psb/_formStep2', ['method' => 'PATCH', 'url' => '/psb/step2/'.$psb->id])

	@endif
	

@stop