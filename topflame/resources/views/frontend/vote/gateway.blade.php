@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-4xl px-6 py-14">
    <div class="rounded-[2rem] border border-orange-500/20 bg-slate-900 p-8 shadow-2xl shadow-orange-900/10">
        <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Vote Gateway</div>
        <h1 class="mt-3 text-3xl font-black text-white">Confirm your vote</h1>
        <p class="mt-4 max-w-2xl leading-8 text-slate-300">
            Voting in TopFlame requires a logged-in account and follows a 12-hour cooldown. This page will later verify the current user's vote window, show availability, and complete the vote flow safely.
        </p>

        <div class="mt-8 grid gap-5 md:grid-cols-2">
            <div class="rounded-3xl border border-slate-800 bg-slate-950 p-6">
                <div class="text-sm uppercase tracking-[0.25em] text-orange-300">Server</div>
                <div class="mt-3 text-2xl font-black text-white">{{ $serverSlug }}</div>
                <p class="mt-3 text-sm text-slate-400">Server preview data will be wired here later.</p>
            </div>
            <div class="rounded-3xl border border-slate-800 bg-slate-950 p-6">
                <div class="text-sm uppercase tracking-[0.25em] text-orange-300">Vote Status</div>
                <div class="mt-3 text-lg font-bold text-white">Available in foundation mode</div>
                <p class="mt-3 text-sm text-slate-400">Cooldown checks and vote timestamps will be shown here once the vote logic is wired.</p>
            </div>
        </div>

        <div class="mt-8 flex flex-wrap gap-4">
            <button class="rounded-2xl bg-orange-500 px-6 py-3 font-semibold text-slate-950 transition hover:bg-orange-400">Confirm Vote</button>
            <a href="/servers/{{ $serverSlug }}" class="rounded-2xl border border-slate-700 px-6 py-3 font-semibold text-slate-200 transition hover:border-orange-400 hover:text-orange-300">Back to Server</a>
        </div>
    </div>
</section>
@endsection
