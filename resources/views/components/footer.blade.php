<footer class="bg-void circuit-bg text-white border-t border-white/[0.06]">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 pt-16 pb-8">
        <div class="grid md:grid-cols-3 gap-12 pb-12 border-b border-white/10">

            {{-- Brand --}}
            <div>
                <a href="{{ route('home') }}" class="inline-block mb-4">
                    <img
                        src="{{ asset('images/heurisk-logo.png') }}"
                        alt="Heurisk Solutions"
                        class="h-9 w-auto rounded-lg bg-white"
                    >
                </a>
                <p class="text-sm text-white/60 leading-relaxed max-w-xs">
                    Heurisk Solutions is an IT solutions company delivering enterprise-grade technology services across the World.
                </p>
            </div>

            {{-- Contact channels --}}
            <div>
                <h4 class="font-display font-semibold text-sm uppercase tracking-wide text-white/50 mb-4">Contact Channels</h4>
                <ul class="space-y-3 text-sm text-white/70">
                    <li class="flex items-center gap-3">
                        <x-icon name="mail" class="h-4 w-4 text-blue shrink-0" />
                        info@heurisksolutions.com
                    </li>
                    <li class="flex items-center gap-3">
                        <x-icon name="phone" class="h-4 w-4 text-blue shrink-0" />
                        +63 9212345678
                    </li>
                    <li class="flex items-start gap-3">
                        <x-icon name="pin" class="h-4 w-4 text-blue shrink-0 mt-0.5" />
                        Unit 12B, Aseana Business Park, Macapagal Blvd, Pasay City 1302, Philippines
                    </li>
                </ul>
            </div>

            {{-- Social --}}
            <div>
                <h4 class="font-display font-semibold text-sm uppercase tracking-wide text-white/50 mb-4">Stay Connected</h4>
                <p class="text-sm text-white/60 mb-4 leading-relaxed">
                    Follow our insights on tech transformations, cloud methodologies, and operational engineering.
                </p>
                <div class="flex items-center gap-3">
                    @foreach (['facebook', 'twitter', 'linkedin', 'github'] as $social)
                        <a href="#" aria-label="{{ ucfirst($social) }}" class="flex h-9 w-9 items-center justify-center rounded-full border border-white/15 text-white/70 hover:bg-blue hover:border-blue hover:text-white transition-colors">
                            <x-icon name="{{ $social }}" class="h-4 w-4" />
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <p class="pt-8 text-xs text-white/40">&copy; {{ date('Y') }} Heurisk Solutions. All rights reserved.</p>
    </div>
</footer>
