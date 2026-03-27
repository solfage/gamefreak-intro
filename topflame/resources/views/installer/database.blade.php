@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-5xl px-6 py-14">
    <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-8">
        <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Installer Step 4</div>
        <h1 class="mt-3 text-3xl font-black text-white">Database Setup</h1>
        <p class="mt-4 max-w-3xl leading-8 text-slate-300">This installer step will later collect connection data, validate access, and prepare migrations and seeders for TopFlame.</p>
        <div class="mt-8 grid gap-5 md:grid-cols-2">
            <input type="text" placeholder="Database Host" class="rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-orange-400">
            <input type="text" placeholder="Database Name" class="rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-orange-400">
            <input type="text" placeholder="Database User" class="rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-orange-400">
            <input type="password" placeholder="Database Password" class="rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-orange-400">
        </div>
    </div>
</section>
@endsection
