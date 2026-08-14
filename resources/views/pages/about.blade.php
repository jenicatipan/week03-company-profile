@extends('layouts.app')

@section('title', 'About')

@section('content')

    {{-- ================= PAGE HERO ================= --}}
    <section class="relative overflow-hidden bg-void circuit-bg py-20">
        <div class="glow-field"></div>
        <div class="relative max-w-3xl mx-auto px-6 text-center">
            <p class="inline-flex items-center gap-2 text-xs font-semibold tracking-widest uppercase text-cyan-400 mb-4">
                <span class="h-px w-6 bg-cyan-400"></span> Our Culture & Team <span class="h-px w-6 bg-cyan-400"></span>
            </p>
            <h1 class="font-display text-4xl sm:text-5xl font-bold text-white tracking-tight">About Heurisk Solutions</h1>
            <p class="mt-6 text-slate leading-relaxed max-w-2xl mx-auto">
                Enterprise-grade technology, delivered with local expertise. We help organizations across Southeast Asia build infrastructure they can actually trust.
            </p>
        </div>
    </section>

    {{-- ================= STATS BAND ================= --}}
    <section class="bg-void">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-px rounded-2xl overflow-hidden border border-white/10 bg-white/10">
                @foreach ($stats as $stat)
                    <div class="bg-panel p-6 sm:p-8 text-center hover:bg-panel-light transition-colors duration-300">
                        <span class="mx-auto mb-3 flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-blue-500/20 to-cyan-400/10 text-cyan-400 border border-cyan-400/20">
                            <x-icon name="{{ $stat['icon'] }}" class="h-5 w-5" />
                        </span>
                        <p class="font-display text-3xl sm:text-4xl font-bold text-white stat-num">{{ $stat['value'] }}</p>
                        <p class="mt-1 text-xs sm:text-sm text-slate">{{ $stat['label'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================= OUR STORY ================= --}}
    <section class="py-24 bg-void">
        <div class="max-w-7xl mx-auto px-6 lg:px-10 grid lg:grid-cols-2 gap-14 items-center mb-20">
            <div>
                <p class="inline-flex items-center gap-2 text-xs font-semibold tracking-widest uppercase text-cyan-400 mb-4">
                    <span class="h-px w-6 bg-cyan-400"></span> Our Story
                </p>
                <h2 class="font-display text-3xl sm:text-4xl font-bold text-white leading-tight">
                    Founded in 2018 in Pasay City, Philippines
                </h2>
                <p class="mt-6 text-slate leading-relaxed">
                    Heurisk Solutions was founded in 2018 in Pasay City, Philippines, by a team of seasoned IT professionals who saw an opportunity to bridge the gap between enterprise-grade technology and the rapidly growing businesses in Southeast Asia. What started as a small consulting firm has evolved into a full-service IT solutions company, serving clients across the Philippines, Singapore, and beyond.
                </p>
                <p class="mt-4 text-slate leading-relaxed">
                    Our name — derived from "heuristic" — reflects our approach: practical, experience-driven problem solving that delivers real results.
                </p>

                <ul class="mt-8 space-y-4">
                    @foreach ([
                        'Practical, experience-driven problem solving',
                        'Full-service IT solutions under one roof',
                        'Serving the Philippines, Singapore & beyond'
                    ] as $point)
                        <li class="flex items-start gap-3 text-sm text-slate">
                            <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-gradient-to-br from-blue-500 to-cyan-400 text-white">
                                <x-icon name="check" class="h-3 w-3" />
                            </span>
                            {{ $point }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="relative rounded-2xl overflow-hidden border border-white/10 shadow-glow">
                <div class="absolute inset-0 bg-gradient-to-t from-void/60 to-transparent z-10"></div>
                <img
                    src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1000&q=80"
                    alt="City skyline representing Heurisk Solutions' growth"
                    class="w-full h-full object-cover"
                    loading="lazy"
                >
            </div>
        </div>

        {{-- Mission / Vision --}}
        <div class="max-w-7xl mx-auto px-6 lg:px-10 grid sm:grid-cols-2 gap-6">
            <div class="rounded-2xl bg-panel border border-white/10 p-8 shadow-card hover:border-white/20 hover:shadow-cardHover transition-all duration-300">
                <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-gradient-to-br from-blue-500 to-cyan-400 text-white mb-5">
                    <x-icon name="bolt" class="h-5 w-5" />
                </span>
                <h3 class="font-display font-semibold text-xl text-white">Our Mission</h3>
                <p class="mt-3 text-sm text-slate leading-relaxed">
                    To empower organizations with innovative, reliable, and scalable technology solutions that accelerate growth and operational excellence. We are committed to being the most trusted IT partner in the Philippines.
                </p>
            </div>
            <div class="rounded-2xl bg-panel border border-white/10 p-8 shadow-card hover:border-white/20 hover:shadow-cardHover transition-all duration-300">
                <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-gradient-to-br from-violet-500 to-blue-500 text-white mb-5">
                    <x-icon name="globe" class="h-5 w-5" />
                </span>
                <h3 class="font-display font-semibold text-xl text-white">Our Vision</h3>
                <p class="mt-3 text-sm text-slate leading-relaxed">
                    To be the leading IT solutions provider in Southeast Asia, recognized for technical excellence, client-centric innovation, and a culture of continuous improvement.
                </p>
            </div>
        </div>
    </section>

    {{-- ================= TIMELINE ================= --}}
    <section class="py-24 bg-void border-y border-white/[0.06]">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="text-center max-w-xl mx-auto mb-16">
                <p class="inline-flex items-center gap-2 text-xs font-semibold tracking-widest uppercase text-cyan-400 mb-4">
                    <span class="h-px w-6 bg-cyan-400"></span> The Journey
                </p>
                <h2 class="font-display text-3xl sm:text-4xl font-bold text-white">Milestones That Shaped Us</h2>
            </div>

            <div class="relative max-w-3xl mx-auto">
                {{-- vertical line --}}
                <span class="absolute left-4 sm:left-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-blue-500/50 via-cyan-400/30 to-violet-500/30 sm:-translate-x-1/2" aria-hidden="true"></span>

                <div class="space-y-10">
                    @foreach ($milestones as $index => $milestone)
                        <div class="relative flex gap-6 sm:gap-0 {{ $index % 2 === 0 ? 'sm:flex-row' : 'sm:flex-row-reverse' }}">
                            {{-- node --}}
                            <span class="absolute left-4 sm:left-1/2 top-1 -translate-x-1/2 flex h-4 w-4 items-center justify-center rounded-full bg-void ring-4 ring-blue-500/20" aria-hidden="true">
                                <span class="h-2 w-2 rounded-full bg-gradient-to-br from-blue-500 to-cyan-400"></span>
                            </span>

                            {{-- card --}}
                            <div class="ml-10 sm:ml-0 sm:w-1/2 {{ $index % 2 === 0 ? 'sm:pr-12' : 'sm:pl-12 sm:text-right' }}">
                                <div class="rounded-2xl bg-panel border border-white/10 p-6 shadow-card hover:border-white/20 hover:shadow-cardHover transition-all duration-300">
                                    <p class="font-display text-sm font-bold text-cyan-400">{{ $milestone['year'] }}</p>
                                    <h3 class="mt-1 font-display font-semibold text-white">{{ $milestone['title'] }}</h3>
                                    <p class="mt-2 text-sm text-slate leading-relaxed">{{ $milestone['desc'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ================= CORE VALUES ================= --}}
    <section class="py-24 bg-void">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <h2 class="font-display text-3xl sm:text-4xl font-bold text-white text-center mb-14">Our Core Values</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($values as $value)
                    <div class="rounded-2xl bg-panel border border-white/10 p-7 shadow-card hover:shadow-cardHover hover:-translate-y-1 hover:border-white/20 transition-all duration-300">
                        <span class="inline-block h-2 w-2 rounded-full bg-gradient-to-br from-blue-500 to-cyan-400 mb-4"></span>
                        <h3 class="font-display font-semibold text-base text-white mb-3">{{ $value['title'] }}</h3>
                        <p class="text-sm text-slate leading-relaxed">{{ $value['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================= LEADERS ================= --}}
    <section class="py-24 bg-void border-t border-white/[0.06]">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <h2 class="font-display text-3xl sm:text-4xl font-bold text-white text-center mb-14">Meet Our Leaders</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($leaders as $leader)
                    <div class="group rounded-2xl overflow-hidden bg-panel border border-white/10 shadow-card hover:shadow-cardHover hover:border-white/20 hover:-translate-y-1 transition-all duration-300">
                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-t from-panel via-transparent to-transparent z-10"></div>
                            <img src="{{ $leader['photo'] }}" alt="{{ $leader['name'] }}" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                        </div>
                        <div class="p-6">
                            <h3 class="font-display font-semibold text-white">{{ $leader['name'] }}</h3>
                            <p class="text-xs font-semibold uppercase tracking-wide text-cyan-400 mt-1">{{ $leader['role'] }}</p>
                            <p class="mt-3 text-sm text-slate leading-relaxed">{{ $leader['desc'] }}</p>
                            <div class="mt-4 flex items-center gap-2">
                                @foreach ($leader['socials'] as $social)
                                    <a href="#" aria-label="{{ ucfirst($social) }}" class="flex h-8 w-8 items-center justify-center rounded-full border border-white/10 text-slate hover:bg-gradient-to-br hover:from-blue-500 hover:to-cyan-400 hover:border-transparent hover:text-white transition-colors">
                                        <x-icon name="{{ $social }}" class="h-3.5 w-3.5" />
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================= CTA ================= --}}
    <section class="py-24 bg-void">
        <div class="max-w-5xl mx-auto px-6">
            <div class="relative overflow-hidden rounded-3xl border border-white/10 bg-gradient-to-br from-panel via-panel to-blue-500/10 px-8 py-16 sm:px-16 text-center">
                <div class="absolute -top-24 -right-16 h-64 w-64 rounded-full bg-blue-500/10 blur-3xl"></div>
                <div class="absolute -bottom-24 -left-16 h-64 w-64 rounded-full bg-cyan-400/10 blur-3xl"></div>
                <div class="relative">
                    <h2 class="font-display text-3xl sm:text-4xl font-bold text-white">Let's Build What's Next</h2>
                    <p class="mt-5 text-slate leading-relaxed max-w-xl mx-auto">
                        Whether you're modernizing infrastructure or starting from scratch, our team is ready to help you move forward.
                    </p>
                    <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-full bg-white px-8 py-3.5 text-sm font-semibold text-void shadow-glow hover:bg-white/90 transition-colors">
                            Get in Touch
                        </a>
                        <a href="{{ route('services') }}" class="inline-flex items-center gap-2 rounded-full border border-white/15 px-8 py-3.5 text-sm font-semibold text-white hover:bg-white/5 transition-colors">
                            Explore Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
