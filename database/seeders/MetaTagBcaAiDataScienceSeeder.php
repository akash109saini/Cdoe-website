<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MetaTag;

class MetaTagBcaAiDataScienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MetaTag::updateOrCreate(
            ['slug1' => 'online-bca-ai-data-science'],
            [
                'page_name' => 'Online BCA in AI & Data Science',
                'slug2' => 'na',
                'slug3' => 'na',
                'slug4' => 'na',
                'slug5' => 'na',
                'title' => 'Online BCA in AI & Data Science',
                'meta_title' => 'Online BCA in AI & Data Science | Syllabus, Fees, Careers',
                'meta_description' => 'Pursue an Online BCA in AI & Data Science from TMU. Explore AI models, machine learning, Python, data analytics, career paths, and eligibility.',
                'meta_keywords' => 'Online BCA AI and Data Science, BCA Artificial Intelligence, BCA Data Science, Online BCA AI DS TMU, AI degree online, machine learning BCA course',
                'og_title' => 'Online BCA in AI & Data Science | Syllabus, Fees, Careers',
                'og_site_name' => 'TMU-Online',
                'og_url' => 'https://tmuonline.ac.in/online-bca-ai-data-science',
                'og_description' => 'Pursue an Online BCA in AI & Data Science from TMU. Explore AI models, machine learning, Python, data analytics, career paths, and eligibility.',
                'og_type' => 'website',
                'og_image' => 'assets/img/programmes/online_bca_ai_data_science_desktop.webp',
                'canonical_tag' => 'https://tmuonline.ac.in/online-bca-ai-data-science',
                'image_alt_tag' => 'Online BCA in AI & Data Science',
                'schema_markup' => null,
                'no_index_status' => 'N',
                'sitemap_url' => null,
                'status' => 'active',
                'priority' => 1,
            ]
        );
    }
}
