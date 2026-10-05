<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800">
    <nav class="bg-white border-b px-6 py-4 flex gap-6">
        <a href="/" class="text-slate-600 hover:text-slate-900">Home</a>
        <a href="/about" class="font-semibold text-slate-900">About</a>
        <a href="/contact" class="text-slate-600 hover:text-slate-900">Contact</a>
    </nav>

    <main class="max-w-2xl mx-auto px-6 py-16">
        <h1 class="text-2xl font-bold mb-4">Tentang Saya</h1>
        <p class="text-slate-600 leading-relaxed mb-8">{{ $bio }}</p>

        <div class="bg-white border rounded-lg divide-y">
            @foreach ($facts as $label => $value)
                <div class="flex justify-between px-4 py-3">
                    <span class="text-slate-500">{{ $label }}</span>
                    <span class="font-medium">{{ $value }}</span>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>
