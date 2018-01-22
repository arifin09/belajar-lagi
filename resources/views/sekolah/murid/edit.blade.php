<h1>EDIT DATA SISWA </h1>


<form method="post" action="{{route('murid.update',$murid->id)}}">
	NAMA SISWA :<br>
	<input type="text" name="nama_siswa" value="{{$murid->nama_siswa}}"><br>
	JENIS KELAMIN :<br>
	<input type="text" name="kelamin" value="{{$murid->kelamin}}" ><br>
	TEMPAT LAHIR:<br>
	<input type="text" name="tempat_lahir" value="{{$murid->tempat_lahir}}"><br>
	ALAMAT<br>
	<input type="text" name="alamat" value="{{$murid->alamat}}"><br>
	NO HP<br>
	<input type="text" name="nohp" value="{{$murid->nohp}}"><br>
	TAHUN MASUK<br>
	<input type="text" name="tahun_masuk" value="{{$murid->tahun_masuk}}"><br>
	KELAS<br>
	<input type="text" name="kelas" value="{{$murid->kelas}}"><br>

	<input type="submit" value="edit">


	{{csrf_field()}}
	
</form>