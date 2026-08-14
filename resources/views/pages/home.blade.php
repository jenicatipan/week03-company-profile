@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{-- ================= HERO ================= --}}
    <section class="relative overflow-hidden bg-void circuit-bg">
        <div class="glow-field"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-10 pt-20 pb-20 lg:pt-28 lg:pb-28 grid lg:grid-cols-2 gap-16 items-center">

            {{-- Copy --}}
            <div class="reveal">
                <p class="inline-flex items-center gap-2 text-xs font-semibold tracking-widest uppercase text-cyan-400 mb-6">
                    <span class="h-px w-6 bg-cyan-400"></span> Enterprise IT Partner
                </p>
                <h1 class="font-display text-4xl sm:text-5xl lg:text-[3.3rem] leading-[1.08] font-bold text-white tracking-tight">
                    Build the Future.
                </h1>
                <p class="mt-6 text-slate text-lg leading-relaxed max-w-xl">
                    Drive smarter operations with enterprise-grade cloud, cybersecurity, and custom software — built and supported by a team based in Pasay City, serving clients across Southeast Asia.
                </p>
                <div class="mt-10 flex flex-wrap items-center gap-4">
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-blue-500 to-cyan-400 px-7 py-3.5 text-sm font-semibold text-white shadow-glow hover:brightness-110 transition">
                        Request a Demo
                    </a>
                    <a href="{{ route('services') }}" class="inline-flex items-center gap-2 rounded-full border border-white/15 px-7 py-3.5 text-sm font-semibold text-white hover:bg-white/5 transition-colors">
                        Learn More
                    </a>
                </div>
            </div>

            {{-- Dashboard mockup graphic --}}
            <div class="relative reveal hidden sm:block" aria-hidden="true">
                <div class="absolute -inset-10 rounded-[2.5rem] bg-gradient-to-br from-blue-500/20 via-violet-500/10 to-cyan-400/20 blur-2xl"></div>

                <div class="relative rounded-2xl border border-white/10 bg-panel/80 backdrop-blur shadow-glow p-5">
                    <div class="flex items-center gap-1.5 mb-4">
                        <span class="h-2.5 w-2.5 rounded-full bg-red-400/70"></span>
                        <span class="h-2.5 w-2.5 rounded-full bg-yellow-400/70"></span>
                        <span class="h-2.5 w-2.5 rounded-full bg-green-400/70"></span>
                    </div>

                    <div class="grid grid-cols-3 gap-4">
                        <div class="col-span-2 rounded-xl bg-panel-light border border-white/10 p-4">
                            <p class="text-[11px] uppercase tracking-wide text-slate mb-3">Infrastructure Uptime</p>
                            <svg viewBox="0 0 220 90" class="w-full h-20">
                                <polyline points="0,70 30,55 60,60 90,35 120,42 150,20 180,28 220,10" fill="none" stroke="url(#lineGrad)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <defs>
                                    <linearGradient id="lineGrad" x1="0" y1="0" x2="1" y2="0">
                                        <stop offset="0%" stop-color="#3B82F6"/>
                                        <stop offset="100%" stop-color="#22D3EE"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div class="rounded-xl bg-panel-light border border-white/10 p-4 flex flex-col justify-between">
                            <p class="text-[11px] uppercase tracking-wide text-slate">Uptime</p>
                            <p class="font-display text-2xl font-bold text-white">99.98<span class="text-sm text-cyan-400">%</span></p>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-4 mt-4">
                        <div class="rounded-xl bg-panel-light border border-white/10 p-4">
                            <p class="text-[11px] uppercase tracking-wide text-slate mb-3">Threats Blocked</p>
                            <p class="font-display text-xl font-bold text-white">12,480</p>
                        </div>
                        <div class="rounded-xl bg-panel-light border border-white/10 p-4">
                            <div class="flex items-end gap-1 h-12">
                                <span class="w-2.5 rounded-t bg-blue-500/70 h-4"></span>
                                <span class="w-2.5 rounded-t bg-blue-500/70 h-7"></span>
                                <span class="w-2.5 rounded-t bg-cyan-400 h-10"></span>
                                <span class="w-2.5 rounded-t bg-blue-500/70 h-6"></span>
                                <span class="w-2.5 rounded-t bg-violet-500/70 h-9"></span>
                            </div>
                        </div>
                        <div class="rounded-xl bg-panel-light border border-white/10 p-4 flex items-center justify-center">
                            <svg viewBox="0 0 36 36" class="h-14 w-14">
                                <circle cx="18" cy="18" r="15.5" fill="none" stroke="#1E2A52" stroke-width="4"/>
                                <circle cx="18" cy="18" r="15.5" fill="none" stroke="#22D3EE" stroke-width="4" stroke-dasharray="70 100" stroke-linecap="round" transform="rotate(-90 18 18)"/>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Floating stat pill --}}
                <div class="absolute -left-8 bottom-10 rounded-xl bg-panel border border-white/10 shadow-glow px-4 py-3 flex items-center gap-3 hidden lg:flex">
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-gradient-to-br from-green-400 to-cyan-400 text-void">
                        <x-icon name="check" class="h-4 w-4" />
                    </span>
                    <div>
                        <p class="text-xs text-slate">Migration status</p>
                        <p class="text-sm font-semibold text-white">Complete</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= TRANSFORM YOUR BUSINESS ================= --}}
    <section class="py-24 bg-void">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="text-center max-w-xl mx-auto mb-14">
                <p class="inline-flex items-center gap-2 text-xs font-semibold tracking-widest uppercase text-cyan-400 mb-4">
                    <span class="h-px w-6 bg-cyan-400"></span> Some of our Specialties <span class="h-px w-6 bg-cyan-400"></span>
                </p>
                <h2 class="font-display text-3xl sm:text-4xl font-bold text-white">Transform Your Operations</h2>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($services as $service)
                    <div class="rounded-2xl bg-panel border border-white/10 p-8 shadow-card hover:shadow-cardHover hover:-translate-y-1 hover:border-white/20 transition-all duration-300">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-blue-500 to-violet-500 text-white">
                                <x-icon name="{{ $service['icon'] }}" class="h-5 w-5" />
                            </span>
                            <x-icon name="arrow" class="h-4 w-4 text-slate" />
                        </div>
                        <h3 class="font-display font-semibold text-lg text-white">{{ $service['title'] }}</h3>
                        <p class="mt-3 text-sm text-slate leading-relaxed">{{ $service['desc'] }}</p>
                        <a href="{{ route('services') }}" class="mt-5 inline-flex items-center gap-1.5 text-sm font-semibold text-cyan-400 hover:gap-2.5 transition-all">
                            Explore Feature
                            <x-icon name="arrow" class="h-3.5 w-3.5" />
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    {{-- ================= CTA ================= --}}
    <section class="py-24 bg-void">
        <div class="max-w-5xl mx-auto px-6">
            <div class="relative overflow-hidden rounded-3xl border border-white/10 bg-gradient-to-br from-panel via-panel to-blue-500/10 px-8 py-16 sm:px-16 text-center">
                <div class="absolute -top-24 -right-16 h-64 w-64 rounded-full bg-cyan-400/10 blur-3xl"></div>
                <div class="absolute -bottom-24 -left-16 h-64 w-64 rounded-full bg-violet-500/10 blur-3xl"></div>
                <div class="relative">
                    <h2 class="font-display text-3xl sm:text-4xl font-bold text-white">Ready to Innovate?</h2>
                    <p class="mt-5 text-slate leading-relaxed max-w-xl mx-auto">
                        Schedule your personalized Heurisk solution consultation today and see where your infrastructure can go.
                    </p>
                    <a href="{{ route('contact') }}" class="mt-10 inline-flex items-center gap-2 rounded-full bg-white px-8 py-3.5 text-sm font-semibold text-void shadow-glow hover:bg-white/90 transition-colors">
                        Book a Call
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
