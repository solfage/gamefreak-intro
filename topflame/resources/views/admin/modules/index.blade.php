@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-7xl px-6 py-14">
    <div class="mb-8">
        <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Modules</div>
        <h1 class="mt-2 text-4xl font-black text-white">Manage Modules</h1>
        <p class="mt-3 max-w-2xl text-slate-400">Module manager shell for future upload, install, enable, disable, and version-aware validation.</p>
    </div>

    <div class="grid gap-4 md:grid-cols-3">
        <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-5"><div class="text-sm text-slate-500">Installed</div><div class="mt-2 text-3xl font-black text-white">0</div></div>
        <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-5"><div class="text-sm text-slate-500">Enabled</div><div class="mt-2 text-3xl font-black text-white">0</div></div>
        <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-5"><div class="text-sm text-slate-500">Compatible</div><div class="mt-2 text-3xl font-black text-white">0</div></div>
    </div>
</section>
@endsection
