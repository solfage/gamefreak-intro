@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-7xl px-6 py-14">
    <div class="mb-10 flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
        <div>
            <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Admin Panel</div>
            <h1 class="mt-2 text-4xl font-black text-white">Dashboard</h1>
            <p class="mt-3 max-w-2xl text-slate-400">Beautiful admin foundation with a cleaner management layout for TopFlame.</p>
        </div>
        <div class="rounded-2xl border border-orange-500/20 bg-slate-900 px-5 py-4 text-sm text-slate-300">
            Core management shell for servers, users, premium, packages, and settings.
        </div>
    </div>

    <div class="grid gap-6 xl:grid-cols-[260px_1fr]">
        <aside class="rounded-3xl border border-orange-500/20 bg-slate-900 p-5">
            <div class="mb-4 text-xs uppercase tracking-[0.3em] text-orange-300">Navigation</div>
            <nav class="space-y-2 text-sm">
                <a href="#" class="block rounded-2xl bg-orange-500 px-4 py-3 font-semibold text-slate-950">Dashboard</a>
                <a href="#" class="block rounded-2xl px-4 py-3 text-slate-300 transition hover:bg-slate-950 hover:text-orange-300">Servers</a>
                <a href="#" class="block rounded-2xl px-4 py-3 text-slate-300 transition hover:bg-slate-950 hover:text-orange-300">Users</a>
                <a href="#" class="block rounded-2xl px-4 py-3 text-slate-300 transition hover:bg-slate-950 hover:text-orange-300">Roles & Permissions</a>
                <a href="#" class="block rounded-2xl px-4 py-3 text-slate-300 transition hover:bg-slate-950 hover:text-orange-300">Plugins</a>
                <a href="#" class="block rounded-2xl px-4 py-3 text-slate-300 transition hover:bg-slate-950 hover:text-orange-300">Modules</a>
                <a href="#" class="block rounded-2xl px-4 py-3 text-slate-300 transition hover:bg-slate-950 hover:text-orange-300">Themes</a>
                <a href="#" class="block rounded-2xl px-4 py-3 text-slate-300 transition hover:bg-slate-950 hover:text-orange-300">Installer</a>
                <a href="#" class="block rounded-2xl px-4 py-3 text-slate-300 transition hover:bg-slate-950 hover:text-orange-300">Settings</a>
            </nav>
        </aside>

        <div class="space-y-6">
            <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-4">
                <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-5">
                    <div class="text-sm text-slate-500">Servers</div>
                    <div class="mt-2 text-3xl font-black text-white">0</div>
                    <div class="mt-2 text-sm text-slate-400">Awaiting live data wiring</div>
                </div>
                <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-5">
                    <div class="text-sm text-slate-500">Pending</div>
                    <div class="mt-2 text-3xl font-black text-white">0</div>
                    <div class="mt-2 text-sm text-slate-400">Approval queue placeholder</div>
                </div>
                <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-5">
                    <div class="text-sm text-slate-500">Premium</div>
                    <div class="mt-2 text-3xl font-black text-white">0</div>
                    <div class="mt-2 text-sm text-slate-400">Premium system foundation pending</div>
                </div>
                <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-5">
                    <div class="text-sm text-slate-500">Packages</div>
                    <div class="mt-2 text-3xl font-black text-white">0</div>
                    <div class="mt-2 text-sm text-slate-400">Plugins/modules/themes registry</div>
                </div>
            </div>

            <div class="grid gap-6 lg:grid-cols-2">
                <div class="rounded-3xl border border-slate-800 bg-slate-900 p-6">
                    <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Foundation Status</div>
                    <ul class="mt-4 space-y-3 text-sm text-slate-300">
                        <li>• Laravel-oriented structure started</li>
                        <li>• Frontend pages scaffolded</li>
                        <li>• Roles and permissions migrations added</li>
                        <li>• Servers and package tables added</li>
                    </ul>
                </div>
                <div class="rounded-3xl border border-slate-800 bg-slate-900 p-6">
                    <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Next Build Targets</div>
                    <ul class="mt-4 space-y-3 text-sm text-slate-300">
                        <li>• Installer step views</li>
                        <li>• User panel base</li>
                        <li>• Auth structure integration</li>
                        <li>• Package managers shell pages</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
