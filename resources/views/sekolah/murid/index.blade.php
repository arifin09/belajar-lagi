<!DOCTYPE html>
<html>
<head>
  <style>
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
  }
  th, td {
    padding: 5px;
    text-align: left;
  }
</style>
</head>

<h1>Data Siswa</h1>
 <a href="{{route('murid.create')}}"><input type="submit" value="create"></a>
 <a href="{{route('sekolah.index')}}"><button>back</button></a><br><br>
<body>

	@foreach($murids as $murid)

  <table style="width:100%">
    <caption>DATA SISWA</caption>
    <tr>
      <th>Nama Siwa</th>
      <th>{{$murid->nama_siswa}}</th>
    </tr><br>
    <tr>
      <td>Jenis Kelamin</td>
      <td>{{$murid->kelamin}}</td>
    </tr><br>
    <tr>
      <td>Tempat Lahir</td>
      <td>{{$murid->tempat_lahir}}</td>
    </tr><br>
    <tr>
      <td>Alamat</td>
      <td>{{$murid->alamat}}</td>
    </tr><br>
    <tr>
      <td>Nomor HP</td>
      <td>{{$murid->nohp}}</td>
    </tr><br>
      <tr>
      <td>Tahun Masuk</td>
      <td>{{$murid->tahun_masuk}}</td>
    </tr>
    </tr><br>
      <tr>
      <td>Kelas</td>
      <td>{{$murid->kelas}}</td>
    </tr><br>
    <tr>
      <td>Sma</td>
      <td>{{$tampil}}</td>
    </tr>
   
    <a href="{{route('murid.edit',$murid->id)}}"><input type="submit" value="edit"></a>
    <a href="{{route('murid.destroy',$murid->id)}}"><input type="button" value="hapus"></a>


   

  </table>
   @endforeach

</body>
</html>


