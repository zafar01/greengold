<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first(); // Get the first user as author
        
        if (!$user) {
            return; // No users exist yet
        }

        $blogs = [
            [
                'title' => 'The Benefits of Organic Vermicompost for Your Garden',
                'content' => 'Organic vermicompost is one of the most effective natural fertilizers available for gardeners and farmers. Made from earthworms breaking down organic waste, it provides numerous benefits that chemical fertilizers simply cannot match.

**What Makes Vermicompost Special?**

Vermicompost contains a rich blend of essential nutrients including nitrogen, phosphorus, and potassium, along with micronutrients that are crucial for plant health. Unlike chemical fertilizers, these nutrients are released slowly, providing sustained nourishment to your plants.

**Environmental Benefits**

- 100% natural and chemical-free
- Improves soil structure and water retention
- Promotes beneficial soil microorganisms
- Reduces the need for synthetic fertilizers
- Helps combat soil erosion

**How to Use Vermicompost**

For best results, mix vermicompost into your soil before planting. You can also use it as a top dressing around existing plants. The recommended application rate is 1-2 tons per acre for agricultural use, or a handful per plant for home gardens.

**Results You Can Expect**

Gardeners who switch to vermicompost often report:
- Healthier, more vigorous plants
- Increased flower and fruit production
- Better resistance to pests and diseases
- Improved soil quality over time

Start your organic gardening journey today with Green Gold Vermicompost!',
                'excerpt' => 'Discover why organic vermicompost is the best choice for your garden. Learn about its benefits, proper usage, and the amazing results you can achieve.',
                'status' => 'published',
                'published_at' => now(),
                'meta_title' => 'Organic Vermicompost Benefits - Green Gold',
                'meta_description' => 'Learn about the amazing benefits of organic vermicompost for your garden. Improve soil health and plant growth naturally.',
                'tags' => ['organic gardening', 'vermicompost', 'natural fertilizer', 'soil health']
            ],
            [
                'title' => 'Understanding the Vermicomposting Process',
                'content' => 'Vermicomposting is a fascinating natural process that transforms organic waste into nutrient-rich fertilizer using earthworms. Let\'s explore how this amazing process works and why it\'s so effective.

**The Science Behind Vermicomposting**

Earthworms are nature\'s ultimate recyclers. They consume organic matter and break it down through their digestive system, creating a highly concentrated form of nutrients that plants can easily absorb.

**The Process Steps**

1. **Organic Waste Collection**: We start with high-quality cow dung and organic materials
2. **Earthworm Introduction**: Red wiggler earthworms are added to the waste
3. **Natural Breakdown**: Earthworms consume and process the organic matter
4. **Nutrient Concentration**: The resulting material is rich in essential nutrients
5. **Quality Control**: We ensure the final product meets our high standards

**Why Earthworms Are Essential**

Earthworms don\'t just break down waste - they also:
- Aerate the soil as they move
- Create channels for water and air
- Excrete beneficial microorganisms
- Neutralize soil pH naturally

**Quality Standards**

At Green Gold, we maintain strict quality control:
- Pure cow dung as the base material
- Optimal temperature and moisture conditions
- Regular monitoring of the composting process
- Testing for nutrient content and purity

**The Result**

The final product is a dark, crumbly material that smells like fresh earth. It\'s packed with nutrients and beneficial microorganisms that will transform your soil and plants.',
                'excerpt' => 'Learn how earthworms transform organic waste into powerful fertilizer. Discover the science behind vermicomposting and why it\'s so effective.',
                'status' => 'published',
                'published_at' => now()->subDays(2),
                'meta_title' => 'Vermicomposting Process Explained - Green Gold',
                'meta_description' => 'Understand how vermicomposting works and why earthworms are essential for creating natural, nutrient-rich fertilizer.',
                'tags' => ['vermicomposting', 'earthworms', 'organic waste', 'natural process']
            ],
            [
                'title' => 'Comparing Vermicompost vs Chemical Fertilizers',
                'content' => 'When it comes to fertilizing your plants, you have two main options: natural vermicompost or synthetic chemical fertilizers. Let\'s examine the key differences and help you make an informed decision.

**Chemical Fertilizers: The Quick Fix**

Chemical fertilizers provide nutrients in a form that plants can immediately absorb. They work quickly and can produce rapid results, but they come with several drawbacks:

**Problems with Chemical Fertilizers:**
- Can burn plant roots if over-applied
- Leach into groundwater and cause pollution
- Kill beneficial soil microorganisms
- Create dependency on regular applications
- May contain harmful chemicals

**Vermicompost: The Natural Solution**

Vermicompost works differently and provides numerous advantages:

**Benefits of Vermicompost:**
- Releases nutrients slowly over time
- Improves soil structure and water retention
- Promotes beneficial soil life
- Safe for plants, animals, and the environment
- Builds long-term soil fertility

**Cost Comparison**

While chemical fertilizers may seem cheaper initially, consider the long-term costs:
- Chemical fertilizers require regular reapplication
- Soil degradation may require soil replacement
- Environmental cleanup costs
- Health impacts on humans and animals

**Making the Switch**

Transitioning to vermicompost is easy:
1. Start by mixing vermicompost with your existing soil
2. Gradually increase the amount over time
3. Reduce chemical fertilizer applications
4. Monitor your plants\' health and growth

**The Bottom Line**

Vermicompost may cost slightly more upfront, but it\'s an investment in your soil\'s future. You\'ll enjoy healthier plants, better soil, and peace of mind knowing you\'re not harming the environment.',
                'excerpt' => 'Discover why vermicompost is better than chemical fertilizers. Learn about the long-term benefits and environmental advantages of going natural.',
                'status' => 'draft',
                'published_at' => null,
                'meta_title' => 'Vermicompost vs Chemical Fertilizers - Green Gold',
                'meta_description' => 'Compare vermicompost with chemical fertilizers. Learn why natural solutions are better for your plants and the environment.',
                'tags' => ['vermicompost', 'chemical fertilizers', 'comparison', 'natural gardening']
            ]
        ];

        foreach ($blogs as $blog) {
            $blog['slug'] = Str::slug($blog['title']);
            $blog['author_id'] = $user->id;
            Blog::create($blog);
        }
    }
}
