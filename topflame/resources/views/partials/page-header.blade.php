<div class="mb-10 flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
    <div>
        <div class="text-sm uppercase tracking-[0.3em] text-orange-300">{{ $eyebrow ?? 'TopFlame' }}</div>
        <h1 class="mt-2 text-4xl font-black text-white">{{ $title ?? 'Page Title' }}</h1>
        @if (!empty($description ?? null))
            <p class="mt-3 max-w-2xl text-slate-400">{{ $description }}</p>
        @endif
    </div>

    @if (!empty($aside ?? null))
        <div class="rounded-2xl border border-orange-500/20 bg-slate-900 px-5 py-4 text-sm text-slate-300">
            {{ $aside }}
        </div>
    @endif
</div>
