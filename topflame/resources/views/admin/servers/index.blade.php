@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-7xl px-6 py-14">
    <div class="mb-8 flex items-end justify-between gap-4">
        <div>
            <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Servers</div>
            <h1 class="mt-2 text-4xl font-black text-white">Manage Servers</h1>
            <p class="mt-3 max-w-2xl text-slate-400">Admin moderation foundation for pending, approved, premium, and hidden servers.</p>
        </div>
    </div>

    <div class="grid gap-4 md:grid-cols-4">
        <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-5"><div class="text-sm text-slate-500">All</div><div class="mt-2 text-3xl font-black text-white">0</div></div>
        <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-5"><div class="text-sm text-slate-500">Pending</div><div class="mt-2 text-3xl font-black text-white">0</div></div>
        <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-5"><div class="text-sm text-slate-500">Approved</div><div class="mt-2 text-3xl font-black text-white">0</div></div>
        <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-5"><div class="text-sm text-slate-500">Premium</div><div class="mt-2 text-3xl font-black text-white">0</div></div>
    </div>
</section>
@endsection
