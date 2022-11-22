
<a {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-zinc-900
    border border-transparent rounded-md font-semibold
    text-xs text-slate-50 tracking-widest
    hover:bg-slate-50 hover:text-zinc-900 hover:outline hover:outline-2 hover:outline-zinc-900
    active:bg-zinc-900 active:text-slate-50
    focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-200
    disabled:opacity-25 transition']) }}>
    {{$slot}}
</a>