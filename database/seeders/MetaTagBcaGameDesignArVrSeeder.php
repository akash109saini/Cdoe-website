<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MetaTag;

class MetaTagBcaGameDesignArVrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MetaTag::updateOrCreate(
            ['slug1' => 'online-bca-game-design-ar-vr'],
            [
                'page_name' => 'Online BCA in Game Design & AR/VR',
                'slug2' => 'na',
                'slug3' => 'na',
                'slug4' => 'na',
                'slug5' => 'na',
                'title' => 'Online BCA in Game Design & AR/VR',
                'meta_title' => 'Online BCA in Game Design & AR/VR | Careers & Scope',
                'meta_description' => 'Discover Online BCA in Game Design & AR/VR at TMU. Learn Unity, Unreal Engine, 3D modeling, game mechanics, and virtual reality development.',
                'meta_keywords' => 'Online BCA Game Design, BCA AR VR, Game Development degree online, Augmented Reality Virtual Reality course, BCA Game Design TMU',
                'og_title' => 'Online BCA in Game Design & AR/VR | Careers & Scope',
                'og_site_name' => 'TMU-Online',
                'og_url' => 'https://tmuonline.ac.in/online-bca-game-design-ar-vr',
                'og_description' => 'Discover Online BCA in Game Design & AR/VR at TMU. Learn Unity, Unreal Engine, 3D modeling, game mechanics, and virtual reality development.',
                'og_type' => 'website',
                'og_image' => 'assets/img/programmes/online_bca_game_design_ar_vr_desktop.webp',
                'canonical_tag' => 'https://tmuonline.ac.in/online-bca-game-design-ar-vr',
                'image_alt_tag' => 'Online BCA in Game Design & AR/VR',
                'schema_markup' => null,
                'no_index_status' => 'N',
                'sitemap_url' => null,
                'status' => 'active',
                'priority' => 1,
            ]
        );
    }
}
