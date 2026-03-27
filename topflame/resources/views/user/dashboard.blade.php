@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-7xl px-6 py-14">
    <div class="mb-10 flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
        <div>
            <div class="text-sm uppercase tracking-[0.3em] text-orange-300">User Panel</div>
            <h1 class="mt-2 text-4xl font-black text-white">My Dashboard</h1>
            <p class="mt-3 max-w-2xl text-slate-400">Beautiful user panel foundation for managing servers, promotion tools, and future notifications.</p>
        </div>
        <div class="rounded-2xl border border-orange-500/20 bg-slate-900 px-5 py-4 text-sm text-slate-300">
            Server owners will manage vote banners, vote links, renewals, and premium status here.
        </div>
    </div>

    <div class="grid gap-6 xl:grid-cols-[1fr_320px]">
        <div class="space-y-6">
            <div class="grid gap-4 md:grid-cols-3">
                <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-5">
                    <div class="text-sm text-slate-500">My Servers</div>
                    <div class="mt-2 text-3xl font-black text-white">0</div>
                </div>
                <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-5">
                    <div class="text-sm text-slate-500">Pending</div>
                    <div class="mt-2 text-3xl font-black text-white">0</div>
                </div>
                <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-5">
                    <div class="text-sm text-slate-500">Premium</div>
                    <div class="mt-2 text-3xl font-black text-white">0</div>
                </div>
            </div>

            <div class="rounded-3xl border border-slate-800 bg-slate-900 p-6">
                <div class="flex items-center justify-between gap-4">
                    <div>
                        <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Server Management</div>
                        <h2 class="mt-2 text-2xl font-black text-white">Your servers will appear here</h2>
                    </div>
                    <a href="/submit-server/rules" class="rounded-2xl bg-orange-500 px-5 py-3 font-semibold text-slate-950 transition hover:bg-orange-400">Add Server</a>
                </div>
                <p class="mt-4 text-slate-400">After a server is approved, this area will show status, renewal actions, pending flow, and owner controls.</p>
            </div>
        </div>

        <div class="space-y-5">
            <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-6">
                <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Vote Promotion</div>
                <p class="mt-3 text-sm leading-7 text-slate-400">After approval, users will get vote links, vote banners, and promotional tools for each owned server.</p>
            </div>
            <div class="rounded-3xl border border-slate-800 bg-slate-900 p-6">
                <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Notifications</div>
                <p class="mt-3 text-sm leading-7 text-slate-400">Live notifications will later show approval updates, pending changes, and useful account alerts.</p>
            </div>
        </div>
    </div>
</section>
@endsection
