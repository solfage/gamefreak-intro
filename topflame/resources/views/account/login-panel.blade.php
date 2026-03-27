@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-md px-6 py-16">
    <div class="rounded-[2rem] border border-orange-500/20 bg-slate-900 p-8 shadow-2xl shadow-orange-900/10">
        <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Account</div>
        <h1 class="mt-3 text-3xl font-black text-white">Login Panel</h1>
        <p class="mt-4 text-slate-400">Foundation account panel for login flow, server management access, and vote gateway access.</p>

        <div class="mt-8 space-y-4">
            <input type="email" placeholder="Email" class="w-full rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-orange-400">
            <input type="password" placeholder="Password" class="w-full rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-orange-400">
            <button class="w-full rounded-2xl bg-orange-500 px-5 py-3 font-semibold text-slate-950 transition hover:bg-orange-400">Login</button>
        </div>
    </div>
</section>
@endsection
