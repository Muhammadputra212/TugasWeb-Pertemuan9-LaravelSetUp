<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home — {{ $name }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800">
    <nav class="bg-white border-b px-6 py-4 flex gap-6">
        <a href="/" class="font-semibold text-slate-900">Home</a>
        <a href="/about" class="text-slate-600 hover:text-slate-900">About</a>
        <a href="/contact" class="text-slate-600 hover:text-slate-900">Contact</a>
    </nav>

    <main class="max-w-2xl mx-auto px-6 py-16">
        <p class="text-sm font-semibold text-amber-600 mb-2">{{ $tagline }}</p>
        <h1 class="text-3xl font-bold mb-6">{{ $name }}</h1>

        <h2 class="text-lg font-semibold mb-3">Skill & Level</h2>
        <ul class="space-y-2">
            @foreach ($skills as $skill)
                <li class="flex justify-between bg-white border rounded-lg px-4 py-3">
                    <span>{{ $skill['name'] }}</span>
                    <span class="text-slate-500">{{ $skill['level'] }}</span>
                </li>
            @endforeach
        </ul>
    </main>
</body>
</html>
