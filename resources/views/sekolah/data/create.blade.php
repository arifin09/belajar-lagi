<h1>Tambah Data Guru</h1>

<a href="{{route('data.index')}}"><button>back</button></a><br><br>

<form method="post" action="{{route('data.store')}}">


	NIk :<br>
	<input type="text" name="nik"><br>
	NAMA GURU :<br>
	<input type="text" name="nama_guru"><br>
	MATA PELAJARAN:<br>
	<input type="text" name="mata_pelajaran"><br>
	KELAS<br>
	<input type="text" name="kelas"><br>
	USIA<br>
	<input type="text" name="usia"><br>
	ALAMAT<br>
	<input type="text" name="alamat"><br>
	NO HP<br>
	<input type="text" name="nohp"><br>

	<input type="submit" value="tambah">


	{{csrf_field()}}
	
</form>