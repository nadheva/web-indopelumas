<?php

namespace Database\Seeders;

use App\Models\Testimonials;
use Illuminate\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonials::create([
            'id' => '1',
            'nama' => 'Ibu Yuli & M.Rofiq',
            'perusahaan' => 'PT. KINGSUM TECH INDONESIA',
            'isi' => 'Sebagai Dealer resmi dari beberapa produk alat berat tentu kami memperhatikan kualitas atau mutu oli yang kami suplai agar jangan sampai ada complaint dari customer kami, dan selama memakai oli Nebula dengan item Nebula Premium Racing SAE 40 & SAE 10 serta Nebula ATF Dextron belum ada keluhan dari customer. Takaran kuantitas oli dalam drum Nebula sesuai dengan yang tertulis di kemasan, pengiriman selalu on-time dengan harga yang relatif terjangkau dengan kualitas terjamin. Marketing-nya selalu standby kapanpun dibutuhkan untuk informasi terkait produk, semoga kedepan dapat lebih baik dan mutu tetap dijaga.',
            'foto' => 'testi1',
        ]);
        Testimonials::create([
            'id' => '2',
            'nama' => 'Ko A’ik',
            'perusahaan' => 'PINUS DIESEL (Distributor Nebula Padang)',
            'isi' => 'Sebelumnya saya ucapkan terima kasih atas support selama ini. Sebagai distributor dari produk Nebula Grease dengan item Nebula Chassis Green dan Nebula Chassis Brown-Red, kami merasa tidak ada kendala di kuantitas karena sesuai dengan yang tertera di kemasan pail.Untuk spesifikasi produk sesuai dengan yang kami minta dan ketepatan waktu pengiriman termasuk baik sekalipun domisili kami ada di luar pulau Jawa. Dengan harga produk yang cukup bersaing ditambah dengan keterbukaan dari tim marketing untuk berdiskusi soal produk, tentu saja perusahaan ini bisa menjadi referensi untuk semua. Kami sangat puas atas kualitas produk dan pelayanannya, sukses selalu!!!',
            'foto' => 'testi2',
        ]);
        Testimonials::create([
            'id' => '3',
            'nama' => 'Shintawati',
            'perusahaan' => 'PT. SAMUDERA SINERGI INDUSTRI',
            'isi' => 'Selama kami bekerja sama dengan perusahaan ini, kami mempercayakan mereka untuk men-supply oli dan grease untuk Perusahaan kami. Kami mengunakan Oli Nebula Sky Hydro 68 dan Nebula Grease Lithium EP 2 RED, kami selalu diberikan pelayanan terbaik seperti Produk original dan berkualitas, pengiriman tepat waktu, hari ini kami pesan besok sudah diantar ke Pabrik Kami, harga yang terbaik dan mayoritas lebih murah, Fast Response dan tidak pernah ada complaint, pelayanan sangat ramah.',
            'foto' => 'testi3',
        ]);
    }
}
