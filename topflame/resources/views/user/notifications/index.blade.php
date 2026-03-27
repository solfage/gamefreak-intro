@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-6xl px-6 py-14">
    <div class="mb-8 flex items-end justify-between gap-4">
        <div>
            <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Notifications</div>
            <h1 class="mt-2 text-4xl font-black text-white">Live & Account Alerts</h1>
            <p class="mt-3 max-w-2xl text-slate-400">This is the foundation area for user notifications such as approvals, rejections, pending updates, and future package-related alerts.</p>
        </div>
    </div>

    <div class="space-y-4">
        <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-6">
            <div class="flex items-center justify-between gap-4">
                <div>
                    <div class="text-sm font-semibold text-white">Server approved</div>
                    <div class="mt-1 text-sm text-slate-400">Your server has been approved and is now visible in the list.</div>
                </div>
                <div class="text-xs uppercase tracking-[0.25em] text-orange-300">Demo</div>
            </div>
        </div>
        <div class="rounded-3xl border border-slate-800 bg-slate-900 p-6">
            <div class="flex items-center justify-between gap-4">
                <div>
                    <div class="text-sm font-semibold text-white">Pending again</div>
                    <div class="mt-1 text-sm text-slate-400">A normal-server update may return your listing to pending review.</div>
                </div>
                <div class="text-xs uppercase tracking-[0.25em] text-slate-500">Demo</div>
            </div>
        </div>
    </div>
</section>
@endsection
