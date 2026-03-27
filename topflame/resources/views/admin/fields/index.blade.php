@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-7xl px-6 py-14">
    <div class="mb-8">
        <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Server Fields</div>
        <h1 class="mt-2 text-4xl font-black text-white">Manage Submit & View Fields</h1>
        <p class="mt-3 max-w-2xl text-slate-400">Foundation area for controlling which fields appear in submit server and view server flows.</p>
    </div>

    <div class="grid gap-6 lg:grid-cols-2">
        <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-6">
            <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Submit Fields</div>
            <p class="mt-3 text-sm leading-7 text-slate-400">Required, optional, order, type, and validation rules will be managed here.</p>
        </div>
        <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-6">
            <div class="text-sm uppercase tracking-[0.3em] text-orange-300">View Fields</div>
            <p class="mt-3 text-sm leading-7 text-slate-400">Public-facing server presentation fields will be managed here with visibility and layout control.</p>
        </div>
    </div>
</section>
@endsection
