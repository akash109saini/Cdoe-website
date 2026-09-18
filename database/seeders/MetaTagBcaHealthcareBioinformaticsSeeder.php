<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MetaTag;

class MetaTagBcaHealthcareBioinformaticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MetaTag::updateOrCreate(
            ['slug1' => 'online-bca-healthcare-it-bioinformatics'],
            [
                'page_name' => 'Online BCA in Healthcare IT & Bioinformatics',
                'slug2' => 'na',
                'slug3' => 'na',
                'slug4' => 'na',
                'slug5' => 'na',
                'title' => 'Online BCA in Healthcare IT & Bioinformatics',
                'meta_title' => 'Online BCA in Healthcare IT & Bioinformatics | Careers',
                'meta_description' => 'Explore Online BCA in Healthcare IT & Bioinformatics, covering healthcare technology, bioinformatics, eligibility, skills, careers and future scope.',
                'meta_keywords' => 'BCA Healthcare IT & Bioinformatics, Online BCA Healthcare IT, BCA in Healthcare Information Technology, Online BCA in Bioinformatics, BCA Bioinformatics, Healthcare IT Course After 12th, Bioinformatics Course After 12th, Online BCA Specialisation',
                'og_title' => 'Online BCA in Healthcare IT & Bioinformatics | Careers',
                'og_site_name' => 'TMU-Online',
                'og_url' => 'https://tmuonline.ac.in/online-bca-healthcare-it-bioinformatics',
                'og_description' => 'Explore Online BCA in Healthcare IT & Bioinformatics, covering healthcare technology, bioinformatics, eligibility, skills, careers and future scope.',
                'og_type' => 'website',
                'og_image' => 'assets/img/programmes/online_bca_healthcare_bioinformatics_desktop.webp',
                'canonical_tag' => 'https://tmuonline.ac.in/online-bca-healthcare-it-bioinformatics',
                'image_alt_tag' => 'Online BCA in Healthcare IT & Bioinformatics',
                'schema_markup' => null,
                'no_index_status' => 'N',
                'sitemap_url' => null,
                'status' => 'active',
                'priority' => 1,
            ]
        );
    }
}
