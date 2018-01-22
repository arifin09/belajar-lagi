<h1>Tambah Data Siswa</h1><br>

<a href="{{route('murid.index')}}"><button>back</button></a><br><br>


<form method="post" action="{{route('murid.store')}}">
	NAMA SISWA :<br>
	<input type="text" name="nama_siswa"><br>
	JENIS KELAMIN :<br>
	<select name="kelamin">
  		<option value="laki-laki">laki-laki</option>
 		<option value="perempuan">Perempuan</option>
 		 
	</select><br>

	TEMPAT LAHIR:<br>
	<input type="text" name="tempat_lahir"><br>
	ALAMAT<br>
	<input type="text" name="alamat"><br>
	NOMOR HP<br>
	<input type="text" name="nohp"><br>
	TAHUN MASUK<br>
	<input type="text" name="tahun_masuk"><br>
	KELAS<br>
	<input type="text" name="kelas"><br>

	<input type="submit" value="tambah">


	{{csrf_field()}}
	
</form>