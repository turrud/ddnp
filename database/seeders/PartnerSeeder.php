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

        $logos = [

            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607761/ddn/img/partner/logo_kemenparekraf_rfr6af.png',
                'url' => 'https://kemenparekraf.go.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607737/ddn/img/partner/logo_ryu_bzod1u.jpg',
                'url' => 'https://ryupowertools.com/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607736/ddn/img/partner/logo_dba_jdcwob.png',
                'url' => 'https://assalaam.or.id/islamic-senior-high-school-ma/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607736/ddn/img/partner/logo_ums_lgam3t.png',
                'url' => 'https://www.ums.ac.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607734/ddn/img/partner/logo_propan_aykyjx.jpg',
                'url' => 'https://www.propanraya.com/id/v2/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607733/ddn/img/partner/logo_kemendikbud_kyimtf.png',
                'url' => 'https://www.kemdikbud.go.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607731/ddn/img/partner/logo_bpk_penabur_ggjvm7.png',
                'url' => 'https://bpkpenabur.or.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607730/ddn/img/partner/logo_kemenkumham_spsoy4.png',
                'url' => 'https://www.kemenkumham.go.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607729/ddn/img/partner/logo_jawabarat_iar8ap.png',
                'url' => 'https://jabarprov.go.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607728/ddn/img/partner/logo_bpk_ob6tmh.png',
                'url' => 'https://www.bpk.go.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607728/ddn/img/partner/logo_sma_qg5aeu.png',
                'url' => 'https://assalaam.or.id/senior-high-school-sma/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607726/ddn/img/partner/logo_samsung_nrquxj.png',
                'url' => 'https://www.samsung.com/id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1709224759/ddn/img/partner/smk_wlyqic.png',
                'url' => 'https://smkassalaam.sch.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607725/ddn/img/partner/logo_nipon_paint_ytafco.png',
                'url' => 'https://www.nipponpaint-indonesia.com/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607724/ddn/img/partner/logo_leder_haus_gkh9qz.png',
                'url' => 'https://www.leder-haus.com/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607723/ddn/img/partner/logo_japfa_ri8auv.png',
                'url' => 'https://www.japfacomfeed.co.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607722/ddn/img/partner/logo_itenas_bh83yw.png',
                'url' => 'https://www.itenas.ac.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607721/ddn/img/partner/logo_itb_tfch1w.png',
                'url' => 'https://www.itb.ac.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607719/ddn/img/partner/logo_hallway_smii2f.png',
                'url' => 'https://www.instagram.com/thehallwayspace_/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607717/ddn/img/partner/logo_bri_wuenky.png',
                'url' => 'https://bri.co.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607717/ddn/img/partner/logo_bosch_lnypwk.png',
                'url' => 'https://www.bosch-pt.co.id/id/id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607715/ddn/img/partner/logo_bandung_connect_it0nks.png',
                'url' => 'https://www.bdgconnex.net/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607714/ddn/img/partner/logo_bandung_art_month_iuer1c.jpg',
                'url' => 'https://www.bandung.go.id/information/read/408/bandung-art-month-2023',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607713/ddn/img/partner/logo_asia_tile_hmltw4.png',
                'url' => 'https://www.asia-file.com/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607712/ddn/img/partner/logo_asalam_tcvyb2.png',
                'url' => 'https://assalaam.or.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607711/ddn/img/partner/logo_arsitag_e3cvb5.png',
                'url' => 'https://www.arsitag.com/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607710/ddn/img/partner/logo_archify_hyleur.png',
                'url' => 'https://www.archify.com/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607709/ddn/img/partner/logo_aica_mv6vry.png',
                'url' => 'https://www.aica.co.id/?lang=id',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607707/ddn/img/partner/logo_taco_ussqag.jpg',
                'url' => 'https://www.taco.co.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607706/ddn/img/partner/logo_sunsafe_m1fam0.jpg',
                'url' => 'https://sunsafe.suneducationgroup.com/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607705/ddn/img/partner/logo_shopee_b5j4fa.jpg',
                'url' => 'https://shopee.co.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607704/ddn/img/partner/logo_roman_mexehv.jpg',
                'url' => 'https://roman.co.id/id/granit-products/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607703/ddn/img/partner/logo_purva_nmep3k.jpg',
                'url' => 'https://www.purva.co.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607702/ddn/img/partner/logo_kreasi_jabar_jqtbfw.jpg',
                'url' => 'https://kreasijabar.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607701/ddn/img/partner/logo_kopitiam_uuzvt6.jpg',
                'url' => 'https://www.instagram.com/kopitiamid/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607700/ddn/img/partner/logo_iwapi_is9g4o.jpg',
                'url' => 'https://gow.kepulauanselayarkab.go.id/iwapi/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607699/ddn/img/partner/logo_hdii_fhvt48.jpg',
                'url' => 'https://hdiidki.org/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607698/ddn/img/partner/logo_dulux_ubgjyh.jpg',
                'url' => 'https://www.dulux.co.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607697/ddn/img/partner/logo_disparbud_mcjcgj.jpg',
                'url' => 'https://janari.jabarprov.go.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607696/ddn/img/partner/logo_alazhar_kj94hm.jpg',
                'url' => 'https://www.al-azhar.or.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607695/ddn/img/partner/logo_aidi_k3i1xg.jpg',
                'url' => 'https://aidi.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607694/ddn/img/partner/Universitas_Muhammadiyah_Yogyakarta_Logo_wqvid4.png',
                'url' => 'https://www.umy.ac.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607693/ddn/img/partner/logo_telu_lhkvo8.png',
                'url' => 'https://telkomuniversity.ac.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607693/ddn/img/partner/logo_upi_hf2ljp.png',
                'url' => 'https://www.upi.edu/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607692/ddn/img/partner/logo_stp_lixxkw.png',
                'url' => 'https://www.japfacomfeed.co.id/',
            ],
            [
                'imgurl' => 'https://res.cloudinary.com/djzee3t99/image/upload/v1708607692/ddn/img/partner/logo_starbucks_qrmgfm.png',
                'url' => 'https://www.starbucks.co.id/',
            ]
        ];

        // foreach ($logos as $partner) {
        //     Partner::create($partner);
        // }

    }
}