<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $pageTitle ?? 'TopFlame' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-slate-950 text-slate-100">
    <header class="border-b border-orange-500/20 bg-slate-950/90 backdrop-blur">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">
            <div>
                <div class="text-xs uppercase tracking-[0.35em] text-orange-300">TopFlame</div>
                <div class="text-lg font-black text-white">Lineage 2 Server Platform</div>
            </div>
            <nav class="hidden items-center gap-6 text-sm md:flex">
                <a href="/" class="text-slate-300 transition hover:text-orange-300">Home</a>
                <a href="/servers" class="text-slate-300 transition hover:text-orange-300">Top Servers</a>
                <a href="/submit-server/rules" class="rounded-xl border border-orange-500/30 px-4 py-2 text-orange-200 transition hover:bg-orange-500/10">Submit Server</a>
            </nav>
        </div>
    </header>

    <main>
        {{ $slot ?? '' }}
        @yield('content')
    </main>

    <footer class="border-t border-orange-500/20 bg-slate-950/95">
        <div class="mx-auto flex max-w-7xl flex-col gap-3 px-6 py-8 text-sm text-slate-400 md:flex-row md:items-center md:justify-between">
            <div>
                <div class="font-semibold text-slate-200">TopFlame</div>
                <div>Advanced Lineage 2 server platform foundation.</div>
            </div>
            <div class="flex gap-6">
                <a href="/servers" class="hover:text-orange-300">Servers</a>
                <a href="/submit-server/rules" class="hover:text-orange-300">Submit</a>
            </div>
        </div>
    </footer>
</body>
</html>
