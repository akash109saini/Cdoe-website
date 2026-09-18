<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MetaTag;

class MetaTagBcaCloudDevopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MetaTag::updateOrCreate(
            ['slug1' => 'online-bca-cloud-computing-devops'],
            [
                'page_name' => 'Online BCA in Cloud Computing & DevOps',
                'slug2' => 'na',
                'slug3' => 'na',
                'slug4' => 'na',
                'slug5' => 'na',
                'title' => 'Online BCA in Cloud Computing & DevOps',
                'meta_title' => 'Online BCA in Cloud Computing & DevOps | Careers',
                'meta_description' => 'Explore Online BCA in Cloud Computing & DevOps, covering cloud technologies, automation, CI/CD, eligibility, career opportunities and future scope.',
                'meta_keywords' => 'BCA Cloud Computing & DevOps, Online BCA Cloud Computing, BCA in Cloud Computing and DevOps, Online BCA DevOps, BCA DevOps Course, Cloud Computing Course After 12th, DevOps Course After 12th, Cloud Computing and DevOps Career, Online BCA Specialisation',
                'og_title' => 'Online BCA in Cloud Computing & DevOps | Careers',
                'og_site_name' => 'TMU-Online',
                'og_url' => 'https://tmuonline.ac.in/online-bca-cloud-computing-devops',
                'og_description' => 'Explore Online BCA in Cloud Computing & DevOps, covering cloud technologies, automation, CI/CD, eligibility, career opportunities and future scope.',
                'og_type' => 'website',
                'og_image' => 'assets/img/programmes/online_bca_cloud_devops_desktop.webp',
                'canonical_tag' => 'https://tmuonline.ac.in/online-bca-cloud-computing-devops',
                'image_alt_tag' => 'Online BCA in Cloud Computing & DevOps',
                'schema_markup' => null,
                'no_index_status' => 'N',
                'sitemap_url' => null,
                'status' => 'active',
                'priority' => 1,
            ]
        );
    }
}
