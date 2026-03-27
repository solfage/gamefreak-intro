@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-5xl px-6 py-14">
    <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-8">
        <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Installer Final Step</div>
        <h1 class="mt-3 text-3xl font-black text-white">Finish Installation</h1>
        <p class="mt-4 max-w-3xl leading-8 text-slate-300">This final step will later save configuration, lock the installer, activate the default theme, and redirect the first admin to the platform.</p>
        <div class="mt-8 grid gap-4 md:grid-cols-3">
            <div class="rounded-2xl border border-slate-800 bg-slate-950 p-5">
                <div class="text-sm text-slate-500">Config</div>
                <div class="mt-2 text-lg font-bold text-white">Pending write</div>
            </div>
            <div class="rounded-2xl border border-slate-800 bg-slate-950 p-5">
                <div class="text-sm text-slate-500">Theme</div>
                <div class="mt-2 text-lg font-bold text-white">Default activation</div>
            </div>
            <div class="rounded-2xl border border-slate-800 bg-slate-950 p-5">
                <div class="text-sm text-slate-500">Lock</div>
                <div class="mt-2 text-lg font-bold text-white">Installer close</div>
            </div>
        </div>
    </div>
</section>
@endsection
