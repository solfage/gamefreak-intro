@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-5xl px-6 py-14">
    <div class="mb-8">
        <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Package Installer</div>
        <h1 class="mt-2 text-4xl font-black text-white">Upload Package</h1>
        <p class="mt-3 max-w-2xl text-slate-400">Unified upload screen for plugins, modules, and themes with version-aware preview before installation.</p>
    </div>

    <div class="grid gap-6 lg:grid-cols-[1fr_0.9fr]">
        <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-6">
            <label class="mb-3 block text-sm text-slate-300">Upload ZIP Package</label>
            <input type="file" class="block w-full rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-300">
            <p class="mt-3 text-sm text-slate-400">Supported types: plugin, module, theme.</p>
        </div>
        <div class="rounded-3xl border border-slate-800 bg-slate-900 p-6">
            <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Preview</div>
            <p class="mt-3 text-sm leading-7 text-slate-400">Manifest preview, compatibility result, and installation summary will appear here before final installation.</p>
        </div>
    </div>
</section>
@endsection
