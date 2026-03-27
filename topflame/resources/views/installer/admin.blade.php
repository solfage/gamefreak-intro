@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-5xl px-6 py-14">
    <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-8">
        <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Installer Step 6</div>
        <h1 class="mt-3 text-3xl font-black text-white">Create Admin Account</h1>
        <p class="mt-4 max-w-3xl leading-8 text-slate-300">This installer step will later create the first administrator account and prepare default access for the platform.</p>
        <div class="mt-8 grid gap-5 md:grid-cols-2">
            <input type="text" placeholder="Admin Username" class="rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-orange-400">
            <input type="email" placeholder="Admin Email" class="rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-orange-400">
            <input type="password" placeholder="Password" class="rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-orange-400">
            <input type="password" placeholder="Confirm Password" class="rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-orange-400">
        </div>
    </div>
</section>
@endsection
