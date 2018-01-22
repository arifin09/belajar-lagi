<h1>Edit Data Guru</h1><br><br>

<a href="{{route('data.index')}}"><input type="submit" value="back"></a><br><br>

<form method="post" action="{{route('data.update',$guru->id)}}">
	NIk :<br>
	<input type="text" name="nik" value="{{$guru->nik}}"><br>
	NAMA GURU :<br>
	<input type="text" name="nama_guru" value="{{$guru->nama_guru}}" ><br>
	MATA PELAJARAN:<br>
	<input type="text" name="mata_pelajaran" value="{{$guru->mata_pelajaran}}"><br>
	KELAS<br>
	<input type="text" name="kelas" value="{{$guru->kelas}}"><br>
	USIA<br>
	<input type="text" name="usia" value="{{$guru->usia}}"><br>
	ALAMAT<br>
	<input type="text" name="alamat" value="{{$guru->alamat}}"><br>
	NO HP<br>
	<input type="text" name="nohp" value="{{$guru->nohp}}"><br>

	<input type="submit" value="edit">


	{{csrf_field()}}
	
</form>