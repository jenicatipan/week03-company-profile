<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function home()
    {
        $active = 'home';

        $services = [
            [
                'icon'  => 'code',
                'title' => 'Cloud Infrastructure & Migration',
                'desc'  => 'Cloud deployment, migration, storage, and infrastructure solutions for modern businesses.',
            ],
            [
                'icon'  => 'shield',
                'title' => 'Cybersecurity & Compliance',
                'desc'  => 'Comprehensive protection of systems, networks, applications, and sensitive data.',
            ],
            [
                'icon'  => 'cube',
                'title' => 'Custom Software Development',
                'desc'  => 'Custom web, mobile, and business software solutions tailored to your unique needs.',
            ],
        ];

        $trusted = [
            ['icon' => 'globe', 'name' => 'Meridian Bank'],
            ['icon' => 'bolt', 'name' => 'NovaRetail'],
            ['icon' => 'building', 'name' => 'PortLogix'],
            ['icon' => 'shield', 'name' => 'Solace Health'],
        ];

        $testimonial = [
            'quote' => 'Heurisk rebuilt our cloud backbone in under a quarter. Downtime dropped to near zero and our engineers finally trust the infrastructure.',
            'name'  => 'Isabel Cruz',
            'role'  => 'CIO, Meridian Bank',
            'photo' => 'https://i.pravatar.cc/120?img=45',
        ];

        return view('pages.home', compact('active', 'services', 'trusted', 'testimonial'));
    }

    public function about()
    {
        $active = 'about';

        $stats = [
            ['icon' => 'clock', 'value' => '8+', 'label' => 'Years of Experience'],
            ['icon' => 'users', 'value' => '120+', 'label' => 'Clients Served'],
            ['icon' => 'globe', 'value' => '4', 'label' => 'Regions Across SEA'],
            ['icon' => 'check', 'value' => '99.9%', 'label' => 'Client Retention'],
        ];

        $milestones = [
            ['year' => '2018', 'title' => 'Founded in Pasay City', 'desc' => 'Started as a small IT consulting firm with a five-person team and a big ambition.'],
            ['year' => '2020', 'title' => 'Cloud Practice Launch', 'desc' => 'Completed our first enterprise cloud migration and opened a 24/7 managed services desk.'],
            ['year' => '2022', 'title' => 'Regional Expansion', 'desc' => 'Expanded into Singapore and crossed 50 active clients across Southeast Asia.'],
            ['year' => '2024', 'title' => 'Cybersecurity Practice', 'desc' => 'Launched ISO 27001 and PCI-DSS readiness offerings backed by a dedicated security team.'],
            ['year' => '2026', 'title' => 'Trusted by 120+ Clients', 'desc' => 'Now serving 120+ organizations with 40+ specialists across four regions.'],
        ];

        $values = [
            [
                'title' => 'Innovation',
                'desc'  => "We push the boundaries of what's possible through research, experimentation, and continuous learning. Turning complex problems into elegant, scalable solutions that drive real business impact.",
            ],
            [
                'title' => 'Integrity',
                'desc'  => 'We operate with transparency, ethics, and uncompromising integrity. Protecting client trust, data, and reputation through every engagement, recommendation, and delivery milestone.',
            ],
            [
                'title' => 'Collaboration',
                'desc'  => 'We collaborate as one team. We align goals, workflows, and outcomes to ensure seamless execution, clear communication, and a partnership that feels like an extension of your organization.',
            ],
            [
                'title' => 'Excellence',
                'desc'  => 'We set high standards for quality, reliability, and delivery. Measuring success by tangible results, client satisfaction, and the long-term value we create for every organization we serve.',
            ],
        ];

        $leaders = [
            [
                'name'    => 'Marco Reyes',
                'role'    => 'CEO & Founder',
                'desc'    => 'Visionary leader with 15+ years scaling tech companies.',
                'photo'   => 'https://i.pravatar.cc/300?img=13',
                'socials' => ['linkedin', 'twitter', 'mail'],
            ],
            [
                'name'    => 'Sofia Mendoza',
                'role'    => 'CTO',
                'desc'    => 'Cloud orchestration specialist and open-source contributor.',
                'photo'   => 'https://i.pravatar.cc/300?img=32',
                'socials' => ['linkedin', 'github', 'mail'],
            ],
            [
                'name'    => 'Carlos Villanueva',
                'role'    => 'VP of Operations',
                'desc'    => 'Expert on ultra-low latency frameworks and data streams.',
                'photo'   => 'https://i.pravatar.cc/300?img=51',
                'socials' => ['linkedin', 'twitter', 'mail'],
            ],
            [
                'name'    => 'Ana Santos',
                'role'    => 'Head of Client Success',
                'desc'    => 'Designing complex dashboards with architectural simplicity.',
                'photo'   => 'https://i.pravatar.cc/300?img=47',
                'socials' => ['linkedin', 'github', 'mail'],
            ],
        ];

        return view('pages.about', compact('active', 'values', 'leaders', 'stats', 'milestones'));
    }

    public function services()
    {
        $active = 'services';

        $services = [
            [
                'icon'     => 'cloud',
                'gradient' => 'from-blue-500 to-cyan-400',
                'title'    => 'Cloud Infrastructure & Migration',
                'desc'     => 'Scalable cloud environments on AWS, Azure, and GCP. Designed, migrated, and optimized to cut costs and boost performance.',
            ],
            [
                'icon'     => 'shield',
                'gradient' => 'from-violet-500 to-blue-500',
                'title'    => 'Cybersecurity & Compliance',
                'desc'     => 'Enterprise-grade protection — threat detection, penetration testing, and readiness for ISO 27001, PCI-DSS, and the Data Privacy Act.',
            ],
            [
                'icon'     => 'code',
                'gradient' => 'from-rose-500 to-orange-400',
                'title'    => 'Custom Software Development',
                'desc'     => 'Tailored web, mobile, and enterprise software built with modern frameworks and agile delivery.',
            ],
            [
                'icon'     => 'compass',
                'gradient' => 'from-teal-400 to-cyan-500',
                'title'    => 'IT Consulting & Strategy',
                'desc'     => 'Strategic technology advisory services including digital transformation roadmaps, IT infrastructure audits, vendor evaluation, and technology stack modernization planning.',
            ],
            [
                'icon'     => 'settings',
                'gradient' => 'from-emerald-400 to-teal-400',
                'title'    => 'Managed IT Services',
                'desc'     => '24/7 monitoring, maintenance, and support for your entire IT infrastructure. Proactive issue resolution, SLA-backed response times, and dedicated account management for peace of mind.',
            ],
            [
                'icon'     => 'chart',
                'gradient' => 'from-orange-400 to-amber-400',
                'title'    => 'Data Analytics & Business Intelligence',
                'desc'     => 'Transform raw data into actionable insights with custom dashboards, automated reporting, data warehousing, and predictive analytics solutions powered by modern BI platforms.',
            ],
        ];

        $process = [
            ['icon' => 'compass', 'step' => '01', 'title' => 'Discover', 'desc' => 'We audit your infrastructure, workflows, and goals to map exactly where technology can move the needle.'],
            ['icon' => 'settings', 'step' => '02', 'title' => 'Design', 'desc' => 'You get a clear roadmap — architecture, timeline, and budget — before any code or hardware is touched.'],
            ['icon' => 'code', 'step' => '03', 'title' => 'Deliver', 'desc' => 'Our engineers build, migrate, and integrate in focused sprints with regular demos and zero surprises.'],
            ['icon' => 'check', 'step' => '04', 'title' => 'Support', 'desc' => 'Every engagement ships with monitoring, documentation, and a support channel that actually answers.'],
        ];

        return view('pages.services', compact('active', 'services', 'process'));
    }

    public function contact()
    {
        $active = 'contact';

        $channels = [
            [
                'icon'     => 'pin',
                'gradient' => 'from-rose-500 to-orange-400',
                'label'    => 'Address',
                'value'    => 'Unit 12B, Aseana Business Park, Macapagal Blvd, Pasay City 1302, Philippines',
                'href'     => 'https://www.google.com/maps/search/?api=1&query=Unit+12B%2C+Aseana+Business+Park%2C+Macapagal+Blvd%2C+Pasay+City+1302%2C+Philippines',
            ],
            [
                'icon'     => 'mail',
                'gradient' => 'from-violet-500 to-blue-500',
                'label'    => 'Email Address',
                'value'    => 'info@heurisksolutions.com',
                'href'     => 'mailto:info@heurisksolutions.com',
            ],
            [
                'icon'     => 'phone',
                'gradient' => 'from-cyan-500 to-blue-500',
                'label'    => 'Phone Number',
                'value'    => '+639212345678',
                'href'     => 'tel:+639212345678',
            ],
        ];

        return view('pages.contact', compact('active', 'channels'));
    }
}
