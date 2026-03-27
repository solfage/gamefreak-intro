@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-5xl px-6 py-14">
    <div class="grid gap-8 lg:grid-cols-[0.85fr_1.15fr]">
        <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-8">
            <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Installer</div>
            <h1 class="mt-3 text-3xl font-black text-white">TopFlame Setup Wizard</h1>
            <p class="mt-4 leading-8 text-slate-300">A step-by-step installer will prepare the environment, database, admin account, and base settings before the platform goes live.</p>
            <div class="mt-6 space-y-3 text-sm text-slate-400">
                <p>1. Welcome</p>
                <p>2. Requirements Check</p>
                <p>3. Permissions Check</p>
                <p>4. Database Setup</p>
                <p>5. App Configuration</p>
                <p>6. Admin Account</p>
                <p>7. Finish & Lock</p>
            </div>
        </div>
        <div class="rounded-3xl border border-slate-800 bg-slate-900 p-8">
            <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Current State</div>
            <h2 class="mt-3 text-2xl font-black text-white">Installer skeleton placeholder</h2>
            <p class="mt-4 leading-8 text-slate-300">This is the initial installer entry view for TopFlame 1.0. The logic is not wired yet, but the structure is now reserved in the project foundation.</p>
            <div class="mt-8 flex gap-4">
                <button class="rounded-2xl bg-orange-500 px-6 py-3 font-semibold text-slate-950 transition hover:bg-orange-400">Start Installation</button>
                <button class="rounded-2xl border border-slate-700 px-6 py-3 font-semibold text-slate-200 transition hover:border-orange-400 hover:text-orange-300">Read Requirements</button>
            </div>
        </div>
    </div>
</section>
@endsection
