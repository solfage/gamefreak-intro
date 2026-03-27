@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-7xl px-6 py-14">
    <div class="mb-10 flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
        <div>
            <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Package Managers</div>
            <h1 class="mt-2 text-4xl font-black text-white">Plugins, Modules & Themes</h1>
            <p class="mt-3 max-w-2xl text-slate-400">Unified installation logic with separate managers will live here.</p>
        </div>
        <div class="rounded-2xl border border-orange-500/20 bg-slate-900 px-5 py-4 text-sm text-slate-300">
            One installer engine, three managers, version-aware validation.
        </div>
    </div>

    <div class="grid gap-6 md:grid-cols-3">
        <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-6">
            <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Plugins</div>
            <p class="mt-3 text-sm leading-7 text-slate-400">Hook-based extensions, installable with compatibility checks.</p>
        </div>
        <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-6">
            <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Modules</div>
            <p class="mt-3 text-sm leading-7 text-slate-400">Feature packages with routes, views, permissions, and migrations.</p>
        </div>
        <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-6">
            <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Themes</div>
            <p class="mt-3 text-sm leading-7 text-slate-400">Visual packages with safe activation and default-theme fallback logic.</p>
        </div>
    </div>
</section>
@endsection
