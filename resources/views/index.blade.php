<!DOCTYPE html>
<html>
<head>
    <title>Bufet Coffee</title>
</head>
<body>

<header>
    @auth
        <p>Halo, {{ auth()->user()->name }}</p>

        <form action="/logout" method="POST" style="display:inline;">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @else
        <a href="/login">Login</a>
        |
        <a href="/register">Register</a>
    @endauth
</header>

<hr>

<main>
    <h1>Selamat Datang di Bufet Coffee</h1>
    <p>Website resmi penjualan biji kopi dan bubuk kopi.</p>
    <p>(Konten akan dikembangkan)</p>
</main>

</body>
</html>
