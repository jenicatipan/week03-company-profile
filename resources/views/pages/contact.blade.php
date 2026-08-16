@extends('layouts.app')

@section('title', 'Contact')

@section('content')

    <section class="relative overflow-hidden py-32 bg-void circuit-bg">
        <div class="glow-field"></div>
        <div class="relative max-w-7xl mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-5 gap-8">

                {{-- ================= FORM ================= --}}
                <div class="lg:col-span-3">
                    <div class="rounded-2xl bg-panel border border-white/10 p-10 sm:p-12 shadow-card hover:shadow-glow transition-shadow duration-300">
                        <p class="inline-flex items-center gap-2 text-xs font-semibold tracking-widest uppercase text-cyan-400 mb-6">
                            <span class="h-px w-6 bg-cyan-400"></span> Get in Touch
                        </p>
                        <h1 class="font-display text-3xl sm:text-5xl font-bold text-white leading-tight">Get in Touch with Heurisk Solutions</h1>
                        <p class="mt-4 text-base text-slate/80 leading-relaxed">Have a project in mind? Our team in Pasay City is ready to help you build the right solution.</p>

                        {{-- Success state --}}
                        <div id="form-success" class="mt-8 hidden rounded-2xl border border-green-400/30 bg-green-400/10 p-8 text-center animate-in fade-in" role="status" aria-live="polite">
                            <span class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-gradient-to-br from-green-400 to-emerald-400 text-void shadow-lg">
                                <x-icon name="check" class="h-7 w-7" />
                            </span>
                            <h3 class="mt-6 font-display text-xl font-bold text-white">Message Sent Successfully!</h3>
                            <p class="mt-3 text-sm text-slate/80 leading-relaxed">
                                Thanks for reaching out — we'll get back to you within 24 hours. We look forward to discussing your project.
                            </p>
                            <button type="button" onclick="resetContactForm()" class="mt-6 inline-flex items-center gap-2 rounded-full border border-cyan-400/30 bg-cyan-400/10 px-6 py-2.5 text-sm font-semibold text-cyan-300 hover:bg-cyan-400/20 hover:border-cyan-400/50 transition-all duration-300">
                                Send Another Message
                            </button>
                        </div>

                        <form id="contact-form" class="mt-10 space-y-6" novalidate>
                            @csrf
                            <div class="grid sm:grid-cols-2 gap-6">
                                <div>
                                    <label for="full_name" class="block text-sm font-semibold text-white mb-3">Full Name <span class="text-rose-400">*</span></label>
                                    <input type="text" id="full_name" name="full_name" placeholder="Alex Carter" required
                                        class="w-full rounded-xl bg-panel-light border border-white/10 px-4 py-3.5 text-sm text-white placeholder:text-slate/60 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/30 outline-none transition duration-300 hover:border-white/20">
                                    <p class="form-error mt-2 hidden text-xs font-medium text-rose-400" data-for="full_name">Please enter your full name.</p>
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-semibold text-white mb-3">Email Address <span class="text-rose-400">*</span></label>
                                    <input type="email" id="email" name="email" placeholder="name@email.com" required
                                        class="w-full rounded-xl bg-panel-light border border-white/10 px-4 py-3.5 text-sm text-white placeholder:text-slate/60 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/30 outline-none transition duration-300 hover:border-white/20">
                                    <p class="form-error mt-2 hidden text-xs font-medium text-rose-400" data-for="email">Please enter a valid email address.</p>
                                </div>
                            </div>

                            <div>
                                <label for="subject" class="block text-sm font-semibold text-white mb-3">Subject</label>
                                <input type="text" id="subject" name="subject" placeholder="Enterprise Infrastructure Audit"
                                    class="w-full rounded-xl bg-panel-light border border-white/10 px-4 py-3.5 text-sm text-white placeholder:text-slate/60 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/30 outline-none transition duration-300 hover:border-white/20">
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-semibold text-white mb-3">Message <span class="text-rose-400">*</span></label>
                                <textarea id="message" name="message" rows="6" placeholder="Provide a summary of your integration goals or project needs..." required
                                    class="w-full rounded-xl bg-panel-light border border-white/10 px-4 py-3.5 text-sm text-white placeholder:text-slate/60 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/30 outline-none transition duration-300 hover:border-white/20 resize-none"></textarea>
                                <p class="form-error mt-2 hidden text-xs font-medium text-rose-400" data-for="message">Please include a short message.</p>
                            </div>

                            <button type="submit" id="submit-btn"
                                class="w-full inline-flex items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-blue-500 to-cyan-400 px-6 py-4 text-sm font-semibold text-white shadow-glow hover:brightness-125 active:scale-95 transition-all duration-300 group">
                                Send Message
                                <x-icon name="arrow" class="h-4 w-4 group-hover:translate-x-1 transition-transform" />
                            </button>
                        </form>
                    </div>
                </div>

                {{-- ================= CONTACT INFO ================= --}}
                <div class="lg:col-span-2 flex flex-col gap-0 h-full lg:sticky lg:top-28">

                    {{-- Channels --}}
                    <div class="rounded-2xl bg-panel border border-white/10 p-8 sm:p-9 shadow-card hover:shadow-glow transition-shadow duration-300 flex flex-col">
                        <h2 class="font-display text-xl font-bold text-white mb-7">Contact Information</h2>
                        <ul class="space-y-6 flex-grow">
                            @foreach ($channels as $channel)
                                <li class="flex gap-4 group">
                                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br {{ $channel['gradient'] }} text-white shadow-md group-hover:shadow-lg group-hover:scale-110 transition-all duration-300">
                                        <x-icon name="{{ $channel['icon'] }}" class="h-5 w-5" />
                                    </span>
                                    <div class="min-w-0 flex-1">
                                        <p class="text-sm font-semibold text-white">{{ $channel['label'] }}</p>
                                        @if ($channel['href'])
                                            <a href="{{ $channel['href'] }}" class="text-sm text-slate/80 mt-1 inline-block hover:text-cyan-300 transition-colors duration-200 break-words">{{ $channel['value'] }}</a>
                                        @else
                                            <p class="text-sm text-slate/80 mt-1 leading-relaxed">{{ $channel['value'] }}</p>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                        <div class="mt-auto pt-7 border-t border-white/10">
                            <p class="text-sm font-semibold text-white mb-5">Connect on Social Media</p>
                            <div class="flex items-center gap-4">
                                @foreach (['facebook', 'twitter', 'linkedin', 'github'] as $social)
                                    <a href="#" aria-label="{{ ucfirst($social) }}" class="flex h-10 w-10 items-center justify-center rounded-full border border-white/15 text-slate hover:text-white hover:bg-gradient-to-br hover:from-blue-500 hover:to-cyan-400 hover:border-transparent transition-all duration-300 hover:scale-110 hover:shadow-md">
                                        <x-icon name="{{ $social }}" class="h-4.5 w-4.5" />
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- Google Map Embed --}}
                    <div class="relative overflow-hidden rounded-2xl border border-white/10 h-56 shadow-card hover:shadow-glow transition-shadow duration-300 group lg:flex-grow lg:min-h-64">
                        <iframe
                            src="https://www.google.com/maps?q=14.5376686,121.0008137&output=embed"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Heurisk Solutions location on Google Maps"
                            class="group-hover:scale-105 transition-transform duration-500">
                        </iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

{{-- ================= FORM INTERACTION ================= --}}
<script>
    (function () {
        const form = document.getElementById('contact-form');
        const success = document.getElementById('form-success');
        const submitBtn = document.getElementById('submit-btn');

        if (!form) return;

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        const fieldConfig = {
            full_name: (value) => value.trim().length > 0 ? '' : 'Please enter your full name.',
            email: (value) => {
                if (value.trim().length === 0) return 'Please enter your email address.';
                if (!emailRegex.test(value.trim())) return 'Please enter a valid email address.';
                return '';
            },
            message: (value) => value.trim().length >= 10 ? '' : 'Please include a short message (10+ characters).'
        };

        function setError(name, message) {
            const field = document.getElementById(name);
            const error = document.querySelector(`.form-error[data-for="${name}"]`);
            if (!field || !error) return;
            error.textContent = message;
            error.classList.toggle('hidden', !message);
            field.classList.toggle('border-rose-400/70', !!message);
            field.classList.toggle('border-white/10', !message);
            field.setAttribute('aria-invalid', message ? 'true' : 'false');
        }

        function validateField(name) {
            const field = document.getElementById(name);
            if (!field || !fieldConfig[name]) return true;
            const errorMessage = fieldConfig[name](field.value);
            setError(name, errorMessage);
            return !errorMessage;
        }

        function validateForm() {
            let valid = true;
            Object.keys(fieldConfig).forEach((name) => {
                if (!validateField(name)) valid = false;
            });
            return valid;
        }

        Object.keys(fieldConfig).forEach((name) => {
            const field = document.getElementById(name);
            if (field) {
                field.addEventListener('blur', () => validateField(name));
                field.addEventListener('input', () => {
                    if (field.classList.contains('border-rose-400/70')) validateField(name);
                });
            }
        });

        form.addEventListener('submit', function (event) {
            event.preventDefault();
            if (!validateForm()) return;

            const original = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.classList.add('opacity-60', 'cursor-not-allowed');
            submitBtn.innerHTML = '<span class="inline-flex items-center gap-2"><svg class="animate-spin h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>Sending...</span>';

            setTimeout(() => {
                form.classList.add('hidden');
                success.classList.remove('hidden');
                submitBtn.disabled = false;
                submitBtn.classList.remove('opacity-60', 'cursor-not-allowed');
                submitBtn.innerHTML = original;
            }, 1200);
        });
    })();

    function resetContactForm() {
        const form = document.getElementById('contact-form');
        const success = document.getElementById('form-success');
        if (!form || !success) return;

        form.reset();
        document.querySelectorAll('.form-error').forEach((el) => el.classList.add('hidden'));
        document.querySelectorAll('#contact-form input, #contact-form textarea').forEach((el) => {
            el.classList.remove('border-rose-400/70');
            el.classList.add('border-white/10');
            el.removeAttribute('aria-invalid');
        });
        success.classList.add('hidden');
        form.classList.remove('hidden');
        document.getElementById('full_name')?.focus();
    }
</script>
