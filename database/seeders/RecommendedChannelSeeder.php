<?php

namespace Database\Seeders;
use App\Models\RecommendedChannel;
use Illuminate\Database\Seeder;

class RecommendedChannelSeeder extends Seeder
{
    public function run(): void
    {
        $channels = [
            [
                'is_active' => true,
                'text' => 'Develoteca',
                'url' => 'https://www.youtube.com/@Develoteca',
                'logo' => 'https://yt3.googleusercontent.com/4aAlDho8u6cBHT1We22qXKoBXL0A2SZAAlecC6TOul3t4YVr0SN-wctT_07eGmj5_iNfcHZG=s900-c-k-c0x00ffffff-no-rj',
                'language' => 'es',
                ],
                [
                'is_active' => true,
                'text' => 'Hola mundo',
                'url' => 'https://www.youtube.com/@HolaMundoDev',
                'logo' => 'https://yt3.googleusercontent.com/Z69fhRL9_OaXsDz-XsCUe2sGIqU7G1F5Mwl0PwlBsx_ll13K0nLb47q7_RMen7NHvzMVDgd2=s900-c-k-c0x00ffffff-no-rj',
                'language' => 'es',
                ],
                [
                'is_active' => true,
                'text' => 'Moure Dev',
                'url' => 'https://www.youtube.com/@mouredevtv',
                'logo' => 'https://yt3.googleusercontent.com/BrHvTVuz3HnKJx656FpXzm_B8il50fI281AC0PtrE7RgHazzPqmUudw7yUzqmnuFsaCp6YkTEQ=s900-c-k-c0x00ffffff-no-rj',
                'language' => 'es',
                ],
                [
                'is_active' => true,
                'text' => 'Free Code Camp Español',
                'url' => 'https://www.youtube.com/@freecodecampes',
                'logo' => 'https://yt3.googleusercontent.com/TZe-s-tPv-GevP6HtzP4eEoILff8hD9KJCPCPV7_97mvMI0nGT3Lj9i0bmoJjWL2w_j_MK59fg=s900-c-k-c0x00ffffff-no-rj',
                'language' => 'es',
                ],
                [
                'is_active' => true,
                'text' => 'Fazt Tech',
                'url' => 'https://www.youtube.com/@FaztTech',
                'logo' => 'https://yt3.googleusercontent.com/ytc/AIdro_nlI29kkP3d2OAKZTdDVgkDA6D7g7TfNvSKNBGTY-5cQHY=s900-c-k-c0x00ffffff-no-rj',
                'language' => 'es',
                ],
                [
                'is_active' => true,
                'text' => 'Free Code Camp',
                'url' => 'https://www.youtube.com/@freecodecamp',
                'logo' => 'https://yt3.googleusercontent.com/ytc/AIdro_lGRc-05M2OoE1ejQdxeFhyP7OkJg9h4Y-7CK_5je3QqFI=s900-c-k-c0x00ffffff-no-rj',
                'language' => 'en',
                ],
                [
                'is_active' => true,
                'text' => 'Bro Codez',
                'url' => 'https://www.youtube.com/@BroCodez',
                'logo' => 'https://yt3.googleusercontent.com/ytc/AIdro_mPFVsxROj1dOtTWc9iNBwDYV4z42Q8LPokBSewiW9pCSg=s900-c-k-c0x00ffffff-no-rj',
                'language' => 'en',
                ],
                [
                'is_active' => true,
                'text' => 'Dani Krossing',
                'url' => 'https://www.youtube.com/@Dani_Krossing',
                'logo' => 'https://yt3.googleusercontent.com/ytc/AIdro_mSeayItmvVFloCRPRp-DIy2zt9uqfPHRfycx8CXGBAMvc=s900-c-k-c0x00ffffff-no-rj',
                'language' => 'en',
                ],
                [
                'is_active' => true,
                'text' => 'Fireship',
                'url' => 'https://www.youtube.com/@Fireship',
                'logo' => 'https://yt3.googleusercontent.com/ytc/AIdro_mKzklyPPhghBJQH5H3HpZ108YcE618DBRLAvRUD1AjKNw=s900-c-k-c0x00ffffff-no-rj',
                'language' => 'en',
                ],
                [
                'is_active' => true,
                'text' => 'Laracasts',
                'url' => 'https://www.youtube.com/@Laracastsofficial',
                'logo' => 'https://yt3.googleusercontent.com/34Z9NdKvWb-r25HIwoAqSgzmf1UYWb3ycWTVfQbOYJ_Jq2gPRpOZE5lnxRl1rR29RAdMRDbvSw=s900-c-k-c0x00ffffff-no-rj',
                'language' => 'en',
                ],
            
        ];

        foreach ($channels as $channel) {
            RecommendedChannel::create($channel);
        }
    }
}
