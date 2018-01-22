
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
<body>

	@foreach($kelass as $kelas)

  <table style="width:100%">
    <caption>DATA KELAS</caption>
    <tr>
      <th>Nama Kelas</th>
      <th>{{$kelas->nama_kelas}}</th>
    </tr><br>
    <tr>
      <td>Jumlah Murid</td>
      <td>{{$kelas->jumlah_murid}}</td>
    </tr><br>
    <tr>
      <td>Nama Wali Kelas</td>
      <td>{{$kelas->nama_wali_kelas}}</td>
    </tr><br>
      <td>Sma</td>
      <td>{{$tampil}}</td>
    </tr>
    <a href="{{route('kelas.create')}}"><input type="submit" value="create"></a>
    <a href="{{route('kelas.edit',$kelas->id)}}"><input type="submit" value="edit"></a>
    <a href="{{route('kelas.destroy',$kelas->id)}}"><input type="button" value="hapus"></a>
    

  </table>

</body>
</html>

@endforeach
