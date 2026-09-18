<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MetaTag;

class MetaTagBcaFintechBlockchainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MetaTag::updateOrCreate(
            ['slug1' => 'online-bca-fintech-blockchain'],
            [
                'page_name' => 'Online BCA in FinTech & Blockchain',
                'slug2' => 'na',
                'slug3' => 'na',
                'slug4' => 'na',
                'slug5' => 'na',
                'title' => 'Online BCA in FinTech & Blockchain',
                'meta_title' => 'Online BCA in FinTech & Blockchain | Specialisation & Scope',
                'meta_description' => 'Study Online BCA in FinTech & Blockchain at TMU. Gain expertise in smart contracts, blockchain architecture, DeFi, digital banking, and financial analytics.',
                'meta_keywords' => 'Online BCA FinTech, BCA Blockchain, Financial Technology course online, Blockchain degree online TMU, Smart Contracts DeFi course after 12th',
                'og_title' => 'Online BCA in FinTech & Blockchain | Specialisation & Scope',
                'og_site_name' => 'TMU-Online',
                'og_url' => 'https://tmuonline.ac.in/online-bca-fintech-blockchain',
                'og_description' => 'Study Online BCA in FinTech & Blockchain at TMU. Gain expertise in smart contracts, blockchain architecture, DeFi, digital banking, and financial analytics.',
                'og_type' => 'website',
                'og_image' => 'assets/img/programmes/online_bca_fintech_blockchain_desktop.webp',
                'canonical_tag' => 'https://tmuonline.ac.in/online-bca-fintech-blockchain',
                'image_alt_tag' => 'Online BCA in FinTech & Blockchain',
                'schema_markup' => null,
                'no_index_status' => 'N',
                'sitemap_url' => null,
                'status' => 'active',
                'priority' => 1,
            ]
        );
    }
}
