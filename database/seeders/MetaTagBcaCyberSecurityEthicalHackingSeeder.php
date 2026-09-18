<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MetaTag;

class MetaTagBcaCyberSecurityEthicalHackingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MetaTag::updateOrCreate(
            ['slug1' => 'online-bca-cyber-security-ethical-hacking'],
            [
                'page_name' => 'Online BCA in Cyber Security & Ethical Hacking',
                'slug2' => 'na',
                'slug3' => 'na',
                'slug4' => 'na',
                'slug5' => 'na',
                'title' => 'Online BCA in Cyber Security & Ethical Hacking',
                'meta_title' => 'Online BCA in Cyber Security & Ethical Hacking | Careers & Scope',
                'meta_description' => 'Earn an Online BCA in Cyber Security & Ethical Hacking at TMU. Master network defense, ethical hacking, cyber forensics, and incident response.',
                'meta_keywords' => 'Online BCA Cyber Security, BCA Ethical Hacking, Cyber Security degree online, Online BCA Information Security TMU, ethical hacker courses after 12th',
                'og_title' => 'Online BCA in Cyber Security & Ethical Hacking | Careers & Scope',
                'og_site_name' => 'TMU-Online',
                'og_url' => 'https://tmuonline.ac.in/online-bca-cyber-security-ethical-hacking',
                'og_description' => 'Earn an Online BCA in Cyber Security & Ethical Hacking at TMU. Master network defense, ethical hacking, cyber forensics, and incident response.',
                'og_type' => 'website',
                'og_image' => 'assets/img/programmes/online_bca_cyber_security_ethical_hacking_desktop.webp',
                'canonical_tag' => 'https://tmuonline.ac.in/online-bca-cyber-security-ethical-hacking',
                'image_alt_tag' => 'Online BCA in Cyber Security & Ethical Hacking',
                'schema_markup' => null,
                'no_index_status' => 'N',
                'sitemap_url' => null,
                'status' => 'active',
                'priority' => 1,
            ]
        );
    }
}
