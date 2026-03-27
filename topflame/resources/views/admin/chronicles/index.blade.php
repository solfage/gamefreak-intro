@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-7xl px-6 py-14">
    <div class="mb-8">
        <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Chronicles</div>
        <h1 class="mt-2 text-4xl font-black text-white">Manage Chronicles</h1>
        <p class="mt-3 max-w-2xl text-slate-400">Chronicles manager foundation for dropdown control, ordering, activation, and future translation support.</p>
    </div>

    <div class="grid gap-4 md:grid-cols-3">
        <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-5"><div class="text-sm text-slate-500">Total</div><div class="mt-2 text-3xl font-black text-white">0</div></div>
        <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-5"><div class="text-sm text-slate-500">Active</div><div class="mt-2 text-3xl font-black text-white">0</div></div>
        <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-5"><div class="text-sm text-slate-500">Inactive</div><div class="mt-2 text-3xl font-black text-white">0</div></div>
    </div>
</section>
@endsection
