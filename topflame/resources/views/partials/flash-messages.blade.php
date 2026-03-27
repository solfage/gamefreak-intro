@if (session('success'))
    <div class="mx-auto mb-6 max-w-7xl rounded-2xl border border-emerald-500/20 bg-emerald-500/10 px-5 py-4 text-sm text-emerald-300">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="mx-auto mb-6 max-w-7xl rounded-2xl border border-red-500/20 bg-red-500/10 px-5 py-4 text-sm text-red-300">
        {{ session('error') }}
    </div>
@endif
