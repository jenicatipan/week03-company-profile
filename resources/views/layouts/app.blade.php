<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Heurisk Solutions') — Enterprise IT Partner</title>
    <meta name="description" content="Heurisk Solutions delivers cloud, cybersecurity, and custom software solutions for enterprises across the Philippines and Southeast Asia.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        void: '#080B1A',
                        panel: '#0F1630',
                        'panel-light': '#151E42',
                        blue: {
                            DEFAULT: '#3B82F6',
                            50: '#EEF2FF',
                        },
                        ink: '#F5F7FC',
                        slate: '#93A0C2',
                    },
                    fontFamily: {
                        display: ['"Space Grotesk"', 'sans-serif'],
                        sans: ['Inter', 'sans-serif'],
                    },
                    boxShadow: {
                        card: '0 1px 2px rgba(0,0,0,0.2), 0 12px 32px -12px rgba(0,0,0,0.5)',
                        cardHover: '0 8px 16px -4px rgba(0,0,0,0.3), 0 20px 48px -12px rgba(59,130,246,0.18)',
                        glow: '0 0 0 1px rgba(255,255,255,0.06), 0 20px 60px -12px rgba(56,189,248,0.25)',
                    },
                },
            },
        };
    </script>

    <style>
        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', sans-serif; }
        .font-display { font-family: 'Space Grotesk', sans-serif; }

        /* Faint circuit / node texture used behind dark sections */
        .circuit-bg {
            background-image:
                radial-gradient(circle at 1px 1px, rgba(255,255,255,0.05) 1px, transparent 0);
            background-size: 28px 28px;
        }

        /* Soft ambient glow blobs, layered behind hero/CTA content */
        .glow-field { position: absolute; inset: 0; overflow: hidden; pointer-events: none; }
        .glow-field::before, .glow-field::after {
            content: ''; position: absolute; border-radius: 9999px; filter: blur(90px);
        }
        .glow-field::before {
            width: 480px; height: 480px; top: -160px; left: -120px;
            background: radial-gradient(circle, rgba(59,130,246,0.28), transparent 70%);
        }
        .glow-field::after {
            width: 420px; height: 420px; bottom: -180px; right: -100px;
            background: radial-gradient(circle, rgba(139,92,246,0.22), transparent 70%);
        }

        @media (prefers-reduced-motion: no-preference) {
            .reveal { animation: reveal .6s ease-out both; }
        }
        @keyframes reveal {
            from { opacity: 0; transform: translateY(12px); }
            to { opacity: 1; transform: translateY(0); }
        }

        a, button { -webkit-tap-highlight-color: transparent; }
        :focus-visible { outline: 2px solid #3B82F6; outline-offset: 2px; }
    </style>

    @stack('head')
</head>
<body class="bg-void text-ink antialiased">

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>
