@php
    $active = $active ?? 'home';
    $links = [
        'home'     => ['label' => 'Home', 'url' => route('home')],
        'about'    => ['label' => 'About', 'url' => route('about')],
        'services' => ['label' => 'Services', 'url' => route('services')],
        'contact'  => ['label' => 'Contact', 'url' => route('contact')],
    ];
@endphp

<header class="sticky top-0 z-50 bg-void/80 backdrop-blur-md border-b border-white/[0.06]">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="flex items-center justify-between h-20">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <img
                    src="{{ asset('images/heurisk-logo.png') }}"
                    alt="Heurisk Solutions"
                    class="h-10 w-auto rounded-lg bg-white transition-opacity group-hover:opacity-90"
                >
                <span class="text-lg font-bold text-white group-hover:text-slate transition-colors">
                    Heurisk<span class="text-blue-400"> Solutions</span>
                </span>
            </a>

            {{-- Desktop nav --}}
            <nav class="hidden md:flex items-center gap-1">
                @foreach ($links as $key => $link)
                    <a
                        href="{{ $link['url'] }}"
                        class="px-5 py-2.5 rounded-full text-sm font-medium transition-colors
                            {{ $active === $key
                                ? 'bg-white/10 text-white'
                                : 'text-slate hover:text-white' }}"
                    >
                        {{ $link['label'] }}
                    </a>
                @endforeach
            </nav>

            {{-- Mobile toggle --}}
            <button
                type="button"
                onclick="document.getElementById('mobile-nav').classList.toggle('hidden')"
                class="md:hidden flex h-10 w-10 items-center justify-center rounded-lg border border-white/10 text-white"
                aria-label="Toggle navigation"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        {{-- Mobile nav --}}
        <nav id="mobile-nav" class="hidden md:hidden pb-5 flex flex-col gap-1">
            @foreach ($links as $key => $link)
                <a
                    href="{{ $link['url'] }}"
                    class="px-4 py-3 rounded-lg text-sm font-medium
                        {{ $active === $key ? 'bg-white/10 text-white' : 'text-slate hover:bg-white/5' }}"
                >
                    {{ $link['label'] }}
                </a>
            @endforeach
        </nav>
    </div>
</header>
