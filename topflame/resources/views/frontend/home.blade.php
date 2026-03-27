@extends('layouts.app')

@section('content')
<section class="relative overflow-hidden">
    <div class="mx-auto grid max-w-7xl gap-10 px-6 py-16 lg:grid-cols-[1.25fr_0.75fr] lg:items-center">
        <div>
            <div class="mb-4 inline-flex rounded-full border border-orange-500/25 px-4 py-1 text-xs uppercase tracking-[0.35em] text-orange-300">
                TopFlame 1.0 Foundation
            </div>
            <h1 class="max-w-4xl text-4xl font-black uppercase leading-tight text-white md:text-6xl">
                Beautiful Lineage 2 server ranking platform with premium structure.
            </h1>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                TopFlame is being built as an advanced platform for Lineage 2 servers with secure submissions, vote gateway logic, premium systems, themes, plugins, modules, and a polished user experience.
            </p>
            <div class="mt-8 flex flex-wrap gap-4">
                <a href="/servers" class="rounded-2xl bg-orange-500 px-6 py-3 font-semibold text-slate-950 transition hover:bg-orange-400">Browse Servers</a>
                <a href="/submit-server/rules" class="rounded-2xl border border-orange-500/30 px-6 py-3 font-semibold text-orange-200 transition hover:bg-orange-500/10">Submit Server</a>
            </div>
        </div>

        <div class="grid gap-4">
            <div class="rounded-3xl border border-orange-500/20 bg-slate-900/80 p-6 shadow-2xl shadow-orange-900/10">
                <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Core</div>
                <div class="mt-3 text-2xl font-bold text-white">Backend + Frontend + Package Foundation</div>
                <p class="mt-3 text-sm leading-7 text-slate-400">
                    Clean Laravel architecture with English engine naming, beautiful UI direction, and extension-ready structure.
                </p>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <div class="rounded-2xl border border-slate-800 bg-slate-900 p-5">
                    <div class="text-sm text-slate-400">Voting</div>
                    <div class="mt-2 text-lg font-bold text-white">Gateway + 12h cooldown</div>
                </div>
                <div class="rounded-2xl border border-slate-800 bg-slate-900 p-5">
                    <div class="text-sm text-slate-400">Servers</div>
                    <div class="mt-2 text-lg font-bold text-white">Pending approval flow</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
