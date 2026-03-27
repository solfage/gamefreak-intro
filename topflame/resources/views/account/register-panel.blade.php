@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-xl px-6 py-16">
    <div class="rounded-[2rem] border border-orange-500/20 bg-slate-900 p-8 shadow-2xl shadow-orange-900/10">
        <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Account</div>
        <h1 class="mt-3 text-3xl font-black text-white">Register Panel</h1>
        <p class="mt-4 text-slate-400">Foundation account panel for registration with compact agreement support.</p>

        <div class="mt-8 grid gap-4 md:grid-cols-2">
            <input type="text" placeholder="Username" class="rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-orange-400 md:col-span-2">
            <input type="email" placeholder="Email" class="rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-orange-400 md:col-span-2">
            <input type="password" placeholder="Password" class="rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-orange-400">
            <input type="password" placeholder="Confirm Password" class="rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-orange-400">
        </div>

        <label class="mt-6 flex items-start gap-3 rounded-2xl border border-slate-800 bg-slate-950 px-4 py-3 text-sm text-slate-300">
            <input type="checkbox" class="mt-1 h-4 w-4 rounded border-slate-700 bg-slate-900 text-orange-500">
            <span>I agree to the Terms of Service and Privacy Policy.</span>
        </label>

        <button class="mt-6 w-full rounded-2xl bg-orange-500 px-5 py-3 font-semibold text-slate-950 transition hover:bg-orange-400">Create Account</button>
    </div>
</section>
@endsection
