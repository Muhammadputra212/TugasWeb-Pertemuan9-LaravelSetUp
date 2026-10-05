<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800">
    <nav class="bg-white border-b px-6 py-4 flex gap-6">
        <a href="/" class="text-slate-600 hover:text-slate-900">Home</a>
        <a href="/about" class="text-slate-600 hover:text-slate-900">About</a>
        <a href="/contact" class="font-semibold text-slate-900">Contact</a>
    </nav>

    <main class="max-w-2xl mx-auto px-6 py-16">
        <h1 class="text-2xl font-bold mb-4">Hubungi Saya</h1>
        <p class="text-slate-600 mb-6">Bisa langsung kirim email ke:</p>
        <a href="mailto:{{ $email }}" class="inline-block bg-slate-900 text-white px-5 py-3 rounded-lg font-medium">
            {{ $email }}
        </a>
    </main>
</body>
</html>
