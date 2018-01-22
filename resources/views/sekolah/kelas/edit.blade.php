<h1>Edit Data Kelas</h1>


<form method="post" action="{{route('kelas.update',$kelas->id)}}">
	NAMA KELAS :<br>
	<input type="text" name="nama_kelas" value="{{$kelas->nama_kelas}}"><br>
	JUMLAH MURID :<br>
	<input type="text" name="jumlah_murid" value="{{$kelas->jumlah_murid}}" ><br>
	NAMA WALI KELAS:<br>
	<input type="text" name="nama_wali_kelas" value="{{$kelas->nama_wali_kelas}}"><br>
	

	<input type="submit" value="edit">
	<a href="{{route('kelas.index')}}">lihat data</a>


	{{csrf_field()}}
	
</form>