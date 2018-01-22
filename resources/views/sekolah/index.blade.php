<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sekolah</title>

    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
</head>
<body>
    <div class="navbar">
        <a href="{{ route('route_home') }}">Home</a>  <a href="{{route('route_profil')}}">Profil</a>  <a href="{{ route('route_about') }}">About</a>  <a href="{{route('route_contact')}}">Contact</a>||
        <a href="{{route('data.index')}}">Data Guru</a> 
        <a href="{{route('data.create')}}">Input Data Guru</a>||
        <a href="{{route('murid.index')}}">Data siswa</a>
        <a href="{{route('murid.create')}}">Input Data siswa</a>||
        <a href="{{route('kelas.index')}}">Data Kelas</a>

    </div>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore veritatis eaque mollitia, libero reiciendis nam praesentium? Eius harum cum sed quos at fuga saepe! Aspernatur soluta error, numquam, veritatis dolorem atque quos iste voluptatibus. Delectus explicabo nam doloremque officiis obcaecati eos animi possimus consequatur id odio asperiores voluptates iusto velit laborum repudiandae ad non necessitatibus soluta distinctio quo at, nisi nihil. Voluptas voluptatum, corporis culpa, blanditiis labore, perferendis soluta ea debitis eaque quam reiciendis. Magni totam, perspiciatis, quidem impedit vel enim voluptates laudantium tempora dolores numquam. Quibusdam fuga molestias delectus pariatur, id, nihil numquam magnam fugiat aliquid laudantium, dolore maxime!</p>
    <br>
    <br>

   

<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
<br>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Ben'] . " years old.";
?>


    <div class="main">
        @yield('content')        
    </div>
    @include('component.footer')
</body>
</html>