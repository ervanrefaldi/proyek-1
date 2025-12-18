<!DOCTYPE html>
<html>
<head>
    <title>Register Pelanggan</title>
</head>
<body>

<h2>Register Pelanggan</h2>

@if ($errors->any())
    <ul style="color:red">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="/register">
    @csrf
    <input type="text" name="name" placeholder="Nama" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="text" name="phone" placeholder="No HP" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required><br><br>
    <button type="submit">Register</button>
</form>

<p>
    Sudah punya akun?
    <a href="/login">Login di sini</a>
</p>

</body>
</html>
