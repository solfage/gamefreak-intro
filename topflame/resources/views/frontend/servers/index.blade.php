@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-7xl px-6 py-14">
    <div class="mb-10 flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
        <div>
            <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Top Servers</div>
            <h1 class="mt-2 text-4xl font-black text-white">Lineage 2 Server List</h1>
            <p class="mt-3 max-w-2xl text-slate-400">Beautiful listing layout foundation with premium, ranking, and chronicle-ready structure.</p>
        </div>
        <div class="grid gap-3 sm:grid-cols-3">
            <div class="rounded-2xl border border-orange-500/20 bg-slate-900 px-5 py-4 text-center">
                <div class="text-xs uppercase tracking-[0.25em] text-slate-500">Voting</div>
                <div class="mt-2 text-lg font-bold text-white">12h Gateway</div>
            </div>
            <div class="rounded-2xl border border-orange-500/20 bg-slate-900 px-5 py-4 text-center">
                <div class="text-xs uppercase tracking-[0.25em] text-slate-500">Chronicles</div>
                <div class="mt-2 text-lg font-bold text-white">Managed List</div>
            </div>
            <div class="rounded-2xl border border-orange-500/20 bg-slate-900 px-5 py-4 text-center">
                <div class="text-xs uppercase tracking-[0.25em] text-slate-500">Premium</div>
                <div class="mt-2 text-lg font-bold text-white">Highlighted</div>
            </div>
        </div>
    </div>

    <div class="mb-8 grid gap-4 rounded-3xl border border-slate-800 bg-slate-900 p-5 lg:grid-cols-5">
        <input type="text" placeholder="Search servers..." class="rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-orange-400 lg:col-span-2">
        <select class="rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-orange-400">
            <option>All Chronicles</option>
            <option>Interlude</option>
            <option>High Five</option>
            <option>Essence</option>
        </select>
        <select class="rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-orange-400">
            <option>All Types</option>
            <option>Normal</option>
            <option>Premium</option>
        </select>
        <button class="rounded-2xl bg-orange-500 px-5 py-3 font-semibold text-slate-950 transition hover:bg-orange-400">Filter</button>
    </div>

    <div class="grid gap-6">
        <article class="rounded-3xl border border-orange-500/20 bg-slate-900 p-6 shadow-lg shadow-orange-900/5">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
                <div class="flex items-center gap-5">
                    <div class="flex h-20 w-20 items-center justify-center rounded-2xl border border-orange-500/20 bg-slate-950 text-sm text-slate-500">Logo</div>
                    <div>
                        <div class="flex flex-wrap items-center gap-3">
                            <h2 class="text-2xl font-black text-white">Server Name</h2>
                            <span class="rounded-full border border-amber-500/30 bg-amber-500/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-amber-300">Premium</span>
                        </div>
                        <div class="mt-2 flex flex-wrap gap-3 text-sm text-slate-400">
                            <span>Chronicle: Interlude</span>
                            <span>EXP: x25</span>
                            <span>SP: x25</span>
                            <span>Adena: x10</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="/servers/server-name" class="rounded-2xl border border-slate-700 px-5 py-3 font-semibold text-slate-200 transition hover:border-orange-400 hover:text-orange-300">View Server</a>
                    <button class="rounded-2xl bg-orange-500 px-5 py-3 font-semibold text-slate-950 transition hover:bg-orange-400">Vote</button>
                </div>
            </div>
        </article>
    </div>
</section>
@endsection
