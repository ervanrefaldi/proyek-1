<!DOCTYPE html>
<html>
<head>
    <title>Login Pelanggan</title>
</head>
<body>

<h2>Login Pelanggan</h2>

@if ($errors->any())
    <p style="color:red">{{ $errors->first() }}</p>
@endif

<form method="POST" action="/login">
    @csrf
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit">Login</button>
</form>

<p>
    Belum punya akun?
    <a href="/register">Daftar di sini</a>
</p>

</body>
</html>
