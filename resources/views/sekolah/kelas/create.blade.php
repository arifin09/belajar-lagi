<h1>Tambah Data Kelas</h1>


<form method="post" action="{{route('kelas.store')}}">
	NAMA KELAS :<br>
	<input type="text" name="nama_kelas"><br>
	JUMLAH MURID :<br>
	<input type="text" name="jumlah_murid"><br>
	NAMA WALI KELAS:<br>
	<input type="text" name="nama_wali_kelas"><br>

	<input type="submit" value="tambah">

	



	{{csrf_field()}}
	
</form>