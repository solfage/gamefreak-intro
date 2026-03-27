@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-3xl px-6 py-14">
    <div class="rounded-3xl border border-orange-500/20 bg-slate-900 p-8 shadow-xl shadow-orange-900/10">
        <div class="text-sm uppercase tracking-[0.3em] text-orange-300">Submit Rules</div>
        <h1 class="mt-3 text-3xl font-black text-white">Before you add your server</h1>
        <div class="mt-6 space-y-3 text-slate-300">
            <p>• Only Lineage 2 servers are allowed.</p>
            <p>• Server name and hostname must be unique.</p>
            <p>• Hostname and ports are required.</p>
            <p>• New submissions go pending for approval.</p>
            <p>• Updates for normal servers return to pending. Premium servers can skip reapproval.</p>
        </div>
        <div class="mt-8 flex flex-wrap gap-4">
            <label class="flex items-start gap-3 rounded-2xl border border-slate-800 bg-slate-950 px-4 py-3 text-sm text-slate-300">
                <input type="checkbox" class="mt-1 h-4 w-4 rounded border-slate-700 bg-slate-900 text-orange-500">
                <span>I have read the rules and I am authorized to submit this server.</span>
            </label>
        </div>
        <div class="mt-6">
            <a href="/submit-server" class="inline-flex rounded-2xl bg-orange-500 px-6 py-3 font-semibold text-slate-950 transition hover:bg-orange-400">Continue to Submit</a>
        </div>
    </div>
</section>
@endsection
