@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-7xl px-6 py-14">
    <div class="mb-10 flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
        <div>
            <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Settings</div>
            <h1 class="mt-2 text-4xl font-black text-white">Platform Settings</h1>
            <p class="mt-3 max-w-2xl text-slate-400">Admin settings foundation for branding, voting rules, premium behavior, and system-level configuration.</p>
        </div>
        <div class="rounded-2xl border border-orange-500/20 bg-slate-900 px-5 py-4 text-sm text-slate-300">
            Settings persistence scaffold is already present in the foundation.
        </div>
    </div>

    <div class="grid gap-6 lg:grid-cols-2">
        <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-6">
            <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Voting</div>
            <div class="mt-4 space-y-4">
                <div>
                    <label class="mb-2 block text-sm text-slate-300">Vote Cooldown</label>
                    <input type="text" value="12 hours" class="w-full rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-orange-400">
                </div>
                <div>
                    <label class="mb-2 block text-sm text-slate-300">Require Login For Voting</label>
                    <select class="w-full rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-orange-400">
                        <option>Yes</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="rounded-3xl border border-slate-800 bg-slate-900 p-6">
            <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Server Rules</div>
            <div class="mt-4 space-y-4">
                <div>
                    <label class="mb-2 block text-sm text-slate-300">Normal Update Requires Reapproval</label>
                    <select class="w-full rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-orange-400">
                        <option>Yes</option>
                    </select>
                </div>
                <div>
                    <label class="mb-2 block text-sm text-slate-300">Premium Update Requires Reapproval</label>
                    <select class="w-full rounded-2xl border border-slate-700 bg-slate-950 px-4 py-3 text-white outline-none focus:border-orange-400">
                        <option>No</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
