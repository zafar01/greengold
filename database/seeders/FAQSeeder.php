<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FAQ;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'What is Vermicompost?',
                'answer' => 'Vermicompost is an organic fertilizer made by breaking down cow dung and organic waste using earthworms. It is rich in nitrogen, phosphorus, potassium, and micronutrients, which naturally improve soil health and crop yield.',
                'order' => 1,
                'status' => 'active'
            ],
            [
                'question' => 'Why should I use Vermicompost instead of chemical fertilizers?',
                'answer' => 'Unlike chemical fertilizers, vermicompost is 100% natural and eco-friendly. It: • Improves soil structure & fertility • Boosts crop yield and plant growth • Retains soil moisture and aeration • Protects the environment from harmful chemicals',
                'order' => 2,
                'status' => 'active'
            ],
            [
                'question' => 'How is Green Gold Vermicompost made?',
                'answer' => 'Our vermicompost is made from pure cow dung, processed naturally with earthworms. It goes through a controlled, chemical-free process, then dried and packed in eco-friendly bags (25kg, 50kg, or bulk).',
                'order' => 3,
                'status' => 'active'
            ],
            [
                'question' => 'What are the packaging options available?',
                'answer' => 'We supply in: • 25kg bags (for gardening, nurseries, small farms) • 50kg bags (for medium to large farms) • Bulk / Jumbo Bags (for wholesale & export orders)',
                'order' => 4,
                'status' => 'active'
            ],
            [
                'question' => 'Can you supply for export?',
                'answer' => 'Yes Green Gold Vermicompost is a trusted exporter from India. We supply to Nepal, UAE, Saudi Arabia, Africa, and other countries, with customized packaging & bulk pricing.',
                'order' => 5,
                'status' => 'active'
            ],
            [
                'question' => 'How do I use Vermicompost for my crops or plants?',
                'answer' => '• For Agriculture: Mix 1-2 tons per acre before sowing. • For Vegetables & Fruits: Apply around roots every 30–40 days. • For Gardens & Pots: Add a handful (100–200g) once every 15 days.',
                'order' => 6,
                'status' => 'active'
            ],
            [
                'question' => 'What is the price of Vermicompost?',
                'answer' => 'Price depends on quantity & location. • Retail (India): Around ₹8–12 per kg (25kg/50kg bags) • Bulk / Export: Custom pricing per ton (FOB / CIF basis) Contact us for today\'s best rates.',
                'order' => 7,
                'status' => 'active'
            ],
            [
                'question' => 'Is Vermicompost safe for all crops?',
                'answer' => 'Yes Vermicompost is safe and beneficial for all crops, fruits, vegetables, gardens, and lawns. It is chemical-free and improves soil for long-term fertility.',
                'order' => 8,
                'status' => 'active'
            ]
        ];

        foreach ($faqs as $faq) {
            FAQ::create($faq);
        }
    }
}
