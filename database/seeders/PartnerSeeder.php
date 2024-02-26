<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Partner::factory()
        //     ->count(5)
        //     ->create();

        $images = [
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607761/ddn/img/partner/logo_kemenparekraf_rfr6af.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607737/ddn/img/partner/logo_ryu_bzod1u.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607736/ddn/img/partner/logo_dba_jdcwob.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607736/ddn/img/partner/logo_ums_lgam3t.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607734/ddn/img/partner/logo_propan_aykyjx.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607733/ddn/img/partner/logo_kemendikbud_kyimtf.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607731/ddn/img/partner/logo_bpk_penabur_ggjvm7.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607730/ddn/img/partner/logo_kemenkumham_spsoy4.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607729/ddn/img/partner/logo_jawabarat_iar8ap.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607728/ddn/img/partner/logo_bpk_ob6tmh.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607728/ddn/img/partner/logo_sma_qg5aeu.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607726/ddn/img/partner/logo_samsung_nrquxj.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607725/ddn/img/partner/logo_nipon_paint_ytafco.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607724/ddn/img/partner/logo_leder_haus_gkh9qz.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607723/ddn/img/partner/logo_japfa_ri8auv.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607722/ddn/img/partner/logo_itenas_bh83yw.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607721/ddn/img/partner/logo_itb_tfch1w.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607719/ddn/img/partner/logo_hallway_smii2f.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607717/ddn/img/partner/logo_bri_wuenky.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607717/ddn/img/partner/logo_bosch_lnypwk.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607715/ddn/img/partner/logo_bandung_connect_it0nks.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607714/ddn/img/partner/logo_bandung_art_month_iuer1c.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607713/ddn/img/partner/logo_asia_tile_hmltw4.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607712/ddn/img/partner/logo_asalam_tcvyb2.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607711/ddn/img/partner/logo_arsitag_e3cvb5.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607710/ddn/img/partner/logo_archify_hyleur.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607709/ddn/img/partner/logo_aica_mv6vry.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607707/ddn/img/partner/logo_taco_ussqag.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607706/ddn/img/partner/logo_sunsafe_m1fam0.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607705/ddn/img/partner/logo_shopee_b5j4fa.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607704/ddn/img/partner/logo_roman_mexehv.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607703/ddn/img/partner/logo_purva_nmep3k.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607702/ddn/img/partner/logo_kreasi_jabar_jqtbfw.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607701/ddn/img/partner/logo_kopitiam_uuzvt6.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607700/ddn/img/partner/logo_iwapi_is9g4o.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607699/ddn/img/partner/logo_hdii_fhvt48.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607698/ddn/img/partner/logo_dulux_ubgjyh.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607697/ddn/img/partner/logo_disparbud_mcjcgj.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607696/ddn/img/partner/logo_alazhar_kj94hm.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607695/ddn/img/partner/logo_aidi_k3i1xg.jpg",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607694/ddn/img/partner/Universitas_Muhammadiyah_Yogyakarta_Logo_wqvid4.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607693/ddn/img/partner/logo_telu_lhkvo8.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607693/ddn/img/partner/logo_upi_hf2ljp.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607692/ddn/img/partner/logo_stp_lixxkw.png",
            "https://res.cloudinary.com/djzee3t99/image/upload/v1708607692/ddn/img/partner/logo_starbucks_qrmgfm.png"

        ];

        foreach ($images as $index => $imgurl) {
            Partner::create([
                'imgurl' => $images[$index % count($images)],
            ]);
        }
    }
}