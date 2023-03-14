<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'full_name' => 'Iemaduddin',
                'short_name' => 'Didin',
                'nim' => '2141720055',
                'absen' => 14,
                'class' => 'TI-2F',
                'prodi' => 'D4 Teknik Informatika',
                'jurusan' => 'Jurusan Teknologi Informasi',
                'kampus' => 'Politeknik Negeri Malang',
                'email' => 'iemaduddin17@gmail.com',
                'nohp' => '082331311947',
                'ig' => 'https://www.instagram.com/didinn_id/',
                'story' => 'Hallo, aku didin dari bangkalan madura. Seorang anak muda yang ingin mencari ilmu di luar pulaunya sendiri.
                Beberapa hal yang menjadi alasanku untuk kuliah di Polinema ini, yakni dikarenakan Jurusannya dan juga karena
                ada di Kota Malang. Kota ini juga merupakan kota yang banyak ingin disinggahi dengan berbagai macam wisata
                dan lokasi yang indah tentunya. Kuliah di Polinema ini pada awalnya sedikit kaget dan beda dikarenakan dahulunya
                aku adalah seorang siswa SMA, sedangkan basic dari polinema sendiri ialah 60% Praktek dan 40% Teori. Tetapi, dengan
                berjalannya waktu semuanya mulai terbiasa dan sudah beradaptasi dengan keaadan dan lingkungan juga. Semester 1
                sudah mulai bergabung di dalam organisasi, yaitu di HMTI. Dengan mengikuti organisasi, maka tentunya waktu kuliah terbagi dengan
                organisasi. Namun, hal tersebut menjadi tantangan tersendiri untuk bisa membagi waktu antara kuliah yang merupakan tujuan utama
                dengan organisasi yang hanya menjadi sarana pengembangan diri saja. Setelah hampir 2 tahun di Polinema ini, aku mendapatkan 
                banyak pembelajaran, diantaranya cara membagi waktu dengan baik, bersikap professional, dsb. Kuliah di Politeknik merupakan sebuah
                kesibukann yang cukup sibuk, apalagi juga ikut organisasi, tentunya sedikit sekali waktu kosong selama ini. Namun, hal tersebut cukup
                seru dan menantang. Kurang lebih 2 tahun ini, softskill dan hardskill ku, lumayan meningkat dari pada sebelumnya. Jadi, hal ini merupakan
                dampak positif dari itu semua.'
            ],
            [
                'full_name' => 'Moh. Endar Darmawan',
                'short_name' => 'Endar',
                'nim' => '2141720160',
                'absen' => 18,
                'class' => 'TI-2F',
                'prodi' => 'D4 Teknik Informatika',
                'jurusan' => 'Jurusan Teknologi Informasi',
                'kampus' => 'Politeknik Negeri Malang',
                'email' => '2141720160@student.polinema.ac.id',
                'nohp' => '089516824205',
                'ig' => 'https://www.instagram.com/muhammad_endar/',
                'story' => '
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est consequatur recusandae magnam doloribus in facere, 
                libero possimus nesciunt mollitia totam laborum unde officia molestiae facilis odio aspernatur ea id quo repellat!
                 Modi aliquid voluptates non, vitae, quam repellat blanditiis distinctio dicta optio consequatur eos quia repellendus, 
                 quis itaque amet veniam accusantium expedita sed corrupti laborum iste impedit laboriosam debitis! Optio quam tempora iure
                  non voluptatum deleniti recusandae beatae accusamus ut, mollitia consequuntur, fuga reprehenderit id sapiente aspernatur eligendi impedit odio. 
                  Earum animi laboriosam eum voluptate ab optio rem cupiditate exercitationem aspernatur perspiciatis voluptatem totam doloribus magni, repudiandae
                   nostrum pariatur a perferendis magnam. Sint veritatis aspernatur suscipit commodi eum qui. Porro reprehenderit sapiente corrupti iste exercitationem 
                   ducimus? Quos, dolores. Accusamus repudiandae, voluptates vitae sed iure nobis in eos cumque officiis rerum animi temporibus repellendus perspiciatis!
                    Voluptatum, quaerat. Labore dolorem vero ut, exercitationem officia, excepturi laboriosam facere commodi ad error.'
            ]
        ];

        DB::table('contents')->insert($data);
    }
}
