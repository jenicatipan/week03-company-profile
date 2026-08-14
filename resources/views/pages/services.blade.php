@extends('layouts.app')

@section('title', 'Services')

@section('content')

    {{-- ================= PAGE HERO ================= --}}
    <section class="relative overflow-hidden bg-void circuit-bg py-20">
        <div class="glow-field"></div>
        <div class="relative max-w-2xl mx-auto px-6 text-center">
            <p class="inline-flex items-center gap-2 text-xs font-semibold tracking-widest uppercase text-cyan-400 mb-4">
                <span class="h-px w-6 bg-cyan-400"></span> What Heurisk Delivers <span class="h-px w-6 bg-cyan-400"></span>
            </p>
            <h1 class="font-display text-4xl sm:text-5xl font-bold text-white tracking-tight">Our Services</h1>
            <p class="mt-6 text-slate leading-relaxed">
                Comprehensive IT solutions tailored for businesses in the Philippines and Southeast Asia. From cloud infrastructure to custom development, we deliver enterprise-grade technology with local expertise.
            </p>
        </div>
    </section>

    {{-- ================= SERVICES GRID ================= --}}
    <section class="py-24 bg-void">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($services as $service)
                    <div class="group flex flex-col rounded-2xl bg-panel border border-white/10 p-8 shadow-card hover:shadow-cardHover hover:-translate-y-1 hover:border-white/20 transition-all duration-300">
                        <span class="relative flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br {{ $service['gradient'] }} text-white shadow-lg transition-transform duration-300 group-hover:scale-110 group-hover:-rotate-6 mb-6">
                            <span class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-white/25"></span>
                            <x-icon name="{{ $service['icon'] }}" class="h-6 w-6" />
                        </span>
                        <h3 class="font-display font-semibold text-lg text-white">{{ $service['title'] }}</h3>
                        <p class="mt-3 text-sm text-slate leading-relaxed">{{ $service['desc'] }}</p>

                        <a href="{{ route('contact') }}" class="mt-auto pt-7 inline-flex items-center gap-1.5 text-sm font-semibold text-cyan-400 hover:gap-2.5 transition-all">
                            Learn more
                            <x-icon name="arrow" class="h-3.5 w-3.5" />
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================= PROCESS ================= --}}
    <section class="py-24 bg-void border-t border-white/[0.06]">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="text-center max-w-xl mx-auto mb-16">
                <p class="inline-flex items-center gap-2 text-xs font-semibold tracking-widest uppercase text-cyan-400 mb-4">
                    <span class="h-px w-6 bg-cyan-400"></span> How We Work
                </p>
                <h2 class="font-display text-3xl sm:text-4xl font-bold text-white">From First Call to Full Support</h2>
                <p class="mt-4 text-slate leading-relaxed">
                    A proven, transparent process that keeps you in control at every step.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($process as $step)
                    <div class="relative rounded-2xl bg-panel border border-white/10 p-8 shadow-card hover:shadow-cardHover hover:border-white/20 hover:-translate-y-1 transition-all duration-300">
                        <span class="absolute top-6 right-7 font-display text-4xl font-bold text-white/5 select-none">{{ $step['step'] }}</span>
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-blue-500/20 to-cyan-400/10 text-cyan-400 border border-cyan-400/20 mb-6">
                            <x-icon name="{{ $step['icon'] }}" class="h-5 w-5" />
                        </div>
                        <h3 class="font-display font-semibold text-lg text-white">{{ $step['title'] }}</h3>
                        <p class="mt-3 text-sm text-slate leading-relaxed">{{ $step['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================= CTA ================= --}}
    <section class="py-24 bg-void">
        <div class="max-w-5xl mx-auto px-6">
            <div class="relative overflow-hidden rounded-3xl border border-white/10 bg-gradient-to-br from-panel via-panel to-violet-500/10 px-8 py-16 sm:px-16 text-center">
                <div class="absolute -top-24 -right-16 h-64 w-64 rounded-full bg-blue-500/10 blur-3xl"></div>
                <div class="absolute -bottom-24 -left-16 h-64 w-64 rounded-full bg-cyan-400/10 blur-3xl"></div>
                <div class="relative">
                    <h2 class="font-display text-3xl sm:text-4xl font-bold text-white">Not Sure Which Service You Need?</h2>
                    <p class="mt-5 text-slate leading-relaxed max-w-xl mx-auto">
                        Talk to our consulting team — we'll assess your infrastructure and recommend the right mix of solutions for your goals.
                    </p>
                    <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-full bg-white px-8 py-3.5 text-sm font-semibold text-void shadow-glow hover:bg-white/90 transition-colors">
                            Talk to Us
                        </a>
                        <a href="{{ route('about') }}" class="inline-flex items-center gap-2 rounded-full border border-white/15 px-8 py-3.5 text-sm font-semibold text-white hover:bg-white/5 transition-colors">
                            About Heurisk
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
