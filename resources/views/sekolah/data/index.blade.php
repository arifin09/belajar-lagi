
<!DOCTYPE html>
<html>
<head>
  <style>
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
  }
  th, td {
    padding: 2px;
    text-align: left;
  }
</style>
<a href="{{route('sekolah.index')}}"><input type="submit" value="back"></a><br><br>
</head>
 <a href="{{route('data.create')}}"><input type="submit" value="create"></a><br><br>
<body>

	@foreach($gurus as $guru)

  <table style="width:50%">

    <caption>DATA GURU</caption>
    <tr>
      <th>NIK</th>
      <th>{{$guru->nik}}</th>
    </tr><br>
    <tr>
      <td>Nama Guru</td>
      <td>{{$guru->nama_guru}}</td>
    </tr><br>
    <tr>
      <td>Mata Pelajaran</td>
      <td>{{$guru->mata_pelajaran}}</td>
    </tr><br>
    <tr>
      <td>Kelas</td>
      <td>{{$guru->kelas}}</td>
    </tr><br>
    <tr>
      <td>Usia</td>
      <td>{{$guru->usia}}</td>
    </tr><br>
      <tr>
      <td>Alamat</td>
      <td>{{$guru->alamat}}</td>
    </tr>
    </tr><br>
      <tr>
      <td>No Hp</td>
      <td>{{$guru->nohp}}</td>
    </tr><br>
    <tr>
      <td>Sma</td>
      <td>{{$tampil}}</td>
    </tr>
    
    <a href="{{route('data.edit',$guru->id)}}"><input type="submit" value="edit"></a>
    <a href="{{route('data.destroy',$guru->id)}}"><input type="button" value="hapus"></a>

  </table>

</body>
</html>

@endforeach
