<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield("title") - Sistem Perpustakaan</title>
</head>

<body>
    <header>
        <h1>Sistem Perpustakaan</h1>
        <nav>
            <a href="/">Home</a> |
            <a href="/dashboard">Dashboard</a> |
            <a href="/about">About</a> |
            <a href="/mahasiswa">Mahasiswa</a>
        </nav>
        <hr>
    </header>

    <div class="content">
        @yield("content")
    </div>
    <footer>
        <hr>
        <p>&copy; 2025 Sistem Perpustakaan</p>
    </footer>

</body>

</html>