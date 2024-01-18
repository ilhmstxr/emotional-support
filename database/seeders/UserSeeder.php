<?php

namespace Database\Seeders;

use App\Models\consultantInfo;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $admin = [
            [
                'name' => 'admin',
                'email' => 'susantoo@gmail.com',
                'role_id' => '1',
                'password' => Bcrypt('susugede')
            ],
        ];

        $psikolog = [
            [
                'name' => 'Kim Bab',
                'email' => 'kimBau@gmail.com',
                'role_id' => '2',
                'password' => Bcrypt('shittyA$$')
            ],
            [
                'name' => 'Ram Yeon',
                'email' => 'tabrakyeon@gmail.com',
                'role_id' => '2',
                'password' => Bcrypt('shittyA$$')
            ],
            [
                'name' => 'Bul Dak',
                'email' => 'bulgembul@gmail.com',
                'role_id' => '2',
                'password' => Bcrypt('shittyA$$')
            ],
            [
                'name' => 'Bab i',
                'email' => 'bab@gmail.com',
                'role_id' => '2',
                'password' => Bcrypt('shittyA$$')
            ],
            [
                'name' => 'steven acumalaka',
                'email' => 'steve@gmail.com',
                'role_id' => '2',
                'password' => Bcrypt('shittyA$$')
            ],
            [
                'name' => 'putra kolot',
                'email' => 'puttt@gmail.com',
                'role_id' => '2',
                'password' => Bcrypt('shittyA$$')
            ],
            [
                'name' => 'taqiya sipul',
                'email' => 'taqoq@gmail.com',
                'role_id' => '2',
                'password' => Bcrypt('shittyA$$')
            ],
            [
                'name' => 'ilham ganteng',
                'email' => 'ilhmz@gmail.com',
                'role_id' => '2',
                'password' => Bcrypt('shittyA$$')
            ],
            [
                'name' => 'gataudweh',
                'email' => 'gtw@gmail.com',
                'role_id' => '2',
                'password' => Bcrypt('shittyA$$')
            ],
        ];
        $psikolog_info = [
            [
                'consultant_id' => 3,
                'price_meet' => 80000,
                'price_online' => 25000,
                'degree' => 'Mahasiswa Psikologi',
                'expert_in' => 'Penanganan Stress Kerja',
                'sessions' => 600,
                'helped' => 400,
                'bio' => "Saya adalah Mahasiswa S1 Psikologi di Universitas Hogwards Semester 5 yang Memiliki Minat dengan dunia psikologi. Sebagai mahasiswa semester 5 di jurusan psikologi, saya telah mengikuti berbagai mata kuliah yang berkaitan dengan psikologi klinis, psikologi pendidikan, dan psikologi industri.
Beberapa keterampilan yang saya miliki melibatkan penggunaan dan interpretasi tes psikologi seperti MBTI, tes kecerdasan, dan tes kepribadian. Saya juga memiliki keterampilan komunikasi yang baik, baik secara lisan maupun tulisan, serta keterampilan observasi untuk memahami perilaku dan pola pikir individu. Saya juga memiliki dasar pengetahuan dalam keterampilan konseling dan empati..",
                'case' => "Pengasuhan dan perkembangan anak hingga remaja, pengelolaan stres, depresi, masalah relasional (attachment), pengelolaan rasa marah, trauma.",
                'status' => 'online'
            ],
            [
                'consultant_id' => 4,
                'price_meet' => 70000,
                'price_online' => 20000,
                'degree' => 'Mahasiswa Psikologi',
                'expert_in' => 'Penanganan Stress ',
                'sessions' => 320,
                'helped' => 150,
                'bio' => "Saya adalah lulusan S2 Psikologi klinis tahun 2021 yang memiliki pengalaman menangani kasus pada klien anak-anak dan dewasa (praktek profesi di bawah supervisi Psikolog profesional secara online). Sejak menempuh masa studi S1 Psikologi, saya tertarik mendalami bidang minat psikologi klinis, khususnya tentang meningkatkan kesejahteraan manusia (well-being) dan penanganan kondisi emosi sedih yang mendalam (depresi).
                Selama kita hidup, kita tidak pernah lepas dari masalah. Saya percaya bahwa manusia sebagai pribadi yang unik memiliki potensi untuk menyelesaikan permasalahan dalam hidupnya, hanya saja seringkali kita tidak menyadari potensi itu. Oleh karena itu, bantuan dari kami tenaga profesional lulusan Psikologi Klinis Profesi akan membantu secara objektif menganalisis permasalahan klien.",
                'case' => "Pengasuhan dan perkembangan anak hingga remaja, pengelolaan stres, depresi, masalah relasional (attachment), pengelolaan rasa marah, trauma.",
                'status' => 'online'


            ],
            [
                'consultant_id' => 5,
                'price_meet' => 85000,
                'price_online' => 30000,
                'degree' => 'Mahasiswa Bimbingan Konseling',
                'expert_in' => 'Penanganan Masalah Belajar',
                'sessions' => 120,
                'helped' => 100,
                'bio' => "Saya adalah lulusan S2 Psikologi klinis tahun 2021 yang memiliki pengalaman menangani kasus pada klien anak-anak dan dewasa (praktek profesi di bawah supervisi Psikolog profesional secara online). Sejak menempuh masa studi S1 Psikologi, saya tertarik mendalami bidang minat psikologi klinis, khususnya tentang meningkatkan kesejahteraan manusia (well-being) dan penanganan kondisi emosi sedih yang mendalam (depresi).
                Selama kita hidup, kita tidak pernah lepas dari masalah. Saya percaya bahwa manusia sebagai pribadi yang unik memiliki potensi untuk menyelesaikan permasalahan dalam hidupnya, hanya saja seringkali kita tidak menyadari potensi itu. Oleh karena itu, bantuan dari kami tenaga profesional lulusan Psikologi Klinis Profesi akan membantu secara objektif menganalisis permasalahan klien.",
                'case' => "Pengasuhan dan perkembangan anak hingga remaja, pengelolaan stres, depresi, masalah relasional (attachment), pengelolaan rasa marah, trauma.",
                'status' => 'offline'


            ],
            [
                'consultant_id' => 6,
                'price_meet' => 80000,
                'price_online' => 25000,
                'degree' => 'Mahasiswa Psikologi',
                'expert_in' => 'Penanganan Anxiety',
                'sessions' => 400,
                'helped' => 380,
                'bio' => "Saya adalah lulusan S2 Psikologi klinis tahun 2021 yang memiliki pengalaman menangani kasus pada klien anak-anak dan dewasa (praktek profesi di bawah supervisi Psikolog profesional secara online). Sejak menempuh masa studi S1 Psikologi, saya tertarik mendalami bidang minat psikologi klinis, khususnya tentang meningkatkan kesejahteraan manusia (well-being) dan penanganan kondisi emosi sedih yang mendalam (depresi).
                Selama kita hidup, kita tidak pernah lepas dari masalah. Saya percaya bahwa manusia sebagai pribadi yang unik memiliki potensi untuk menyelesaikan permasalahan dalam hidupnya, hanya saja seringkali kita tidak menyadari potensi itu. Oleh karena itu, bantuan dari kami tenaga profesional lulusan Psikologi Klinis Profesi akan membantu secara objektif menganalisis permasalahan klien.",
                'case' => "Pengasuhan dan perkembangan anak hingga remaja, pengelolaan stres, depresi, masalah relasional (attachment), pengelolaan rasa marah, trauma.",
                'status' => 'online'


            ],
            [
                'consultant_id' => 7,
                'price_meet' => 90000,
                'price_online' => 30000,
                'degree' => 'Mahasiswa Psikologi',
                'expert_in' => 'Penanganan Konflik Interpersonal',
                'sessions' => 340,
                'helped' => 300,
                'bio' => "Saya adalah lulusan S2 Psikologi klinis tahun 2021 yang memiliki pengalaman menangani kasus pada klien anak-anak dan dewasa (praktek profesi di bawah supervisi Psikolog profesional secara online). Sejak menempuh masa studi S1 Psikologi, saya tertarik mendalami bidang minat psikologi klinis, khususnya tentang meningkatkan kesejahteraan manusia (well-being) dan penanganan kondisi emosi sedih yang mendalam (depresi).
                Selama kita hidup, kita tidak pernah lepas dari masalah. Saya percaya bahwa manusia sebagai pribadi yang unik memiliki potensi untuk menyelesaikan permasalahan dalam hidupnya, hanya saja seringkali kita tidak menyadari potensi itu. Oleh karena itu, bantuan dari kami tenaga profesional lulusan Psikologi Klinis Profesi akan membantu secara objektif menganalisis permasalahan klien.",
                'case' => "Pengasuhan dan perkembangan anak hingga remaja, pengelolaan stres, depresi, masalah relasional (attachment), pengelolaan rasa marah, trauma.",
                'status' => 'offline'


            ],
            [
                'consultant_id' => 8,
                'price_meet' => 180000,
                'price_online' => 50000,
                'degree' => 'S. Psi Psikologi',
                'expert_in' => 'Penanganan Anxiety',
                'sessions' => 400,
                'helped' => 370,
                'bio' => "Saya adalah lulusan S2 Psikologi klinis tahun 2021 yang memiliki pengalaman menangani kasus pada klien anak-anak dan dewasa (praktek profesi di bawah supervisi Psikolog profesional secara online). Sejak menempuh masa studi S1 Psikologi, saya tertarik mendalami bidang minat psikologi klinis, khususnya tentang meningkatkan kesejahteraan manusia (well-being) dan penanganan kondisi emosi sedih yang mendalam (depresi).
                Selama kita hidup, kita tidak pernah lepas dari masalah. Saya percaya bahwa manusia sebagai pribadi yang unik memiliki potensi untuk menyelesaikan permasalahan dalam hidupnya, hanya saja seringkali kita tidak menyadari potensi itu. Oleh karena itu, bantuan dari kami tenaga profesional lulusan Psikologi Klinis Profesi akan membantu secara objektif menganalisis permasalahan klien.",
                'case' => "Pengasuhan dan perkembangan anak hingga remaja, pengelolaan stres, depresi, masalah relasional (attachment), pengelolaan rasa marah, trauma.",
                'status' => 'online'


            ],
            [
                'consultant_id' => 9,
                'price_meet' => 1500000,
                'price_online' => 50000,
                'degree' => 'S. Pd Pendidikan',
                'expert_in' => 'Penanganan Depresi',
                'sessions' => 1000,
                'helped' => 980,
                'bio' => "Saya adalah lulusan S2 Psikologi klinis tahun 2021 yang memiliki pengalaman menangani kasus pada klien anak-anak dan dewasa (praktek profesi di bawah supervisi Psikolog profesional secara online). Sejak menempuh masa studi S1 Psikologi, saya tertarik mendalami bidang minat psikologi klinis, khususnya tentang meningkatkan kesejahteraan manusia (well-being) dan penanganan kondisi emosi sedih yang mendalam (depresi).
                Selama kita hidup, kita tidak pernah lepas dari masalah. Saya percaya bahwa manusia sebagai pribadi yang unik memiliki potensi untuk menyelesaikan permasalahan dalam hidupnya, hanya saja seringkali kita tidak menyadari potensi itu. Oleh karena itu, bantuan dari kami tenaga profesional lulusan Psikologi Klinis Profesi akan membantu secara objektif menganalisis permasalahan klien.",
                'case' => "Pengasuhan dan perkembangan anak hingga remaja, pengelolaan stres, depresi, masalah relasional (attachment), pengelolaan rasa marah, trauma.",
                'status' => 'sibuk'


            ],
            [
                'consultant_id' => 10,
                'price_meet' => 200000,
                'price_online' => 60000,
                'degree' => 'S. Psi Psikologi',
                'expert_in' => 'Penanganan Trauma',
                'sessions' => 650,
                'helped' => 500,
                'bio' => "Saya adalah lulusan S2 Psikologi klinis tahun 2021 yang memiliki pengalaman menangani kasus pada klien anak-anak dan dewasa (praktek profesi di bawah supervisi Psikolog profesional secara online). Sejak menempuh masa studi S1 Psikologi, saya tertarik mendalami bidang minat psikologi klinis, khususnya tentang meningkatkan kesejahteraan manusia (well-being) dan penanganan kondisi emosi sedih yang mendalam (depresi).
                Selama kita hidup, kita tidak pernah lepas dari masalah. Saya percaya bahwa manusia sebagai pribadi yang unik memiliki potensi untuk menyelesaikan permasalahan dalam hidupnya, hanya saja seringkali kita tidak menyadari potensi itu. Oleh karena itu, bantuan dari kami tenaga profesional lulusan Psikologi Klinis Profesi akan membantu secara objektif menganalisis permasalahan klien.",
                'case' => "Pengasuhan dan perkembangan anak hingga remaja, pengelolaan stres, depresi, masalah relasional (attachment), pengelolaan rasa marah, trauma.",
                'status' => 'sibuk'


            ],
            [
                'consultant_id' => 11,
                'price_meet' => 20000,
                'price_online' => 60000,
                'degree' => 'S. Psi Psikologi',
                'expert_in' => 'Penanganan Kedisiplinan',
                'sessions' => 900,
                'helped' => 800,
                'bio' => "Saya adalah lulusan S2 Psikologi klinis tahun 2021 yang memiliki pengalaman menangani kasus pada klien anak-anak dan dewasa (praktek profesi di bawah supervisi Psikolog profesional secara online). Sejak menempuh masa studi S1 Psikologi, saya tertarik mendalami bidang minat psikologi klinis, khususnya tentang meningkatkan kesejahteraan manusia (well-being) dan penanganan kondisi emosi sedih yang mendalam (depresi).
                Selama kita hidup, kita tidak pernah lepas dari masalah. Saya percaya bahwa manusia sebagai pribadi yang unik memiliki potensi untuk menyelesaikan permasalahan dalam hidupnya, hanya saja seringkali kita tidak menyadari potensi itu. Oleh karena itu, bantuan dari kami tenaga profesional lulusan Psikologi Klinis Profesi akan membantu secara objektif menganalisis permasalahan klien.",
                'case' => "Pengasuhan dan perkembangan anak hingga remaja, pengelolaan stres, depresi, masalah relasional (attachment), pengelolaan rasa marah, trauma.",
                'status' => 'online'


            ],
        ];

        $user = [
            'name' => 'gangguanjawa',
            'email' => 'jawa@gmail.com',
            'role_id' => '3',
            'password' => Bcrypt('kulonuwun')
        ];
        User::insert($user);
        User::insert($admin);
        User::insert($psikolog);
        consultantInfo::insert($psikolog_info);
    }
}
