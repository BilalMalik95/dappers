<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TeamMember::updateOrCreate(
            ['slug' => 'bilal-malik'],
            [
                'name' => 'Bilal Malik',
                'designation' => 'Founder',
                'experience' => '7+ Years',
                'bio' => 'Backend systems, SaaS platforms, AI integration, payment systems, workflow automation, and project rescue. 40+ systems shipped, 5-star Upwork rating.',
                'image' => 'image.jpg',
                'email' => 'imbilalmalik95@gmail.com',
                'phone' => '+923339302731',
                'linkedin' => 'https://linkedin.com/in/bilal-malik95/',
                'github' => null,
                'website' => 'https://malikbilal.com',
                'skills' => 'Laravel, PHP, MySQL, REST APIs, OpenAI / Claude AI, SaaS Architecture',
                'is_founder' => true,
                'is_placeholder' => false,
                'sort_order' => 0,
                'status' => true,
            ]
        );

        $placeholders = [
            [
                'slug' => 'planning-delivery',
                'name' => 'Planning & Delivery',
                'designation' => 'Project Management',
                'bio' => 'Requirement analysis, timeline planning, task management, and delivery coordination on every engagement.',
                'skills' => 'Agile Planning, Scope Control, Status Reporting',
                'sort_order' => 1,
            ],
            [
                'slug' => 'product-design',
                'name' => 'Product Design',
                'designation' => 'UI/UX Design',
                'bio' => 'Premium layouts, wireframes, user flows, visual design, and customer experience.',
                'skills' => 'Figma, Wireframing, Prototyping',
                'sort_order' => 2,
            ],
            [
                'slug' => 'interfaces-performance',
                'name' => 'Interfaces & Performance',
                'designation' => 'Frontend Engineering',
                'bio' => 'Responsive websites, clean interfaces, animations, frontend integration, and UI performance.',
                'skills' => 'Vue.js, Responsive CSS, Animations',
                'sort_order' => 3,
            ],
            [
                'slug' => 'laravel-api-systems',
                'name' => 'Laravel & API Systems',
                'designation' => 'Backend Engineering',
                'bio' => 'Backend logic, database structure, APIs, admin panels, integrations, and secure systems.',
                'skills' => 'Laravel, MySQL, REST APIs',
                'sort_order' => 4,
            ],
            [
                'slug' => 'search-marketing',
                'name' => 'Search & Marketing',
                'designation' => 'SEO & Growth',
                'bio' => 'SEO strategy, content planning, analytics, search visibility, and digital growth campaigns.',
                'skills' => 'Keyword Research, Analytics, Content Strategy',
                'sort_order' => 5,
            ],
        ];

        foreach ($placeholders as $placeholder) {
            TeamMember::updateOrCreate(
                ['slug' => $placeholder['slug']],
                array_merge($placeholder, [
                    'experience' => null,
                    'image' => null,
                    'email' => null,
                    'phone' => null,
                    'linkedin' => null,
                    'github' => null,
                    'website' => null,
                    'is_founder' => false,
                    'is_placeholder' => true,
                    'status' => true,
                ])
            );
        }
    }
}
