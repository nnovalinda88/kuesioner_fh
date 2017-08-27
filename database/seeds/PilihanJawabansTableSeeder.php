<?php

use Illuminate\Database\Seeder;

class PilihanJawabansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pilihan_jawabans = array(
            array('id' => '1','jawaban' => 'Laki - laki','id_pertanyaan' => '1'),
            array('id' => '2','jawaban' => 'Perempuan','id_pertanyaan' => '1'),
            array('id' => '3','jawaban' => 'Menikah','id_pertanyaan' => '3'),
            array('id' => '4','jawaban' => 'Bercerai','id_pertanyaan' => '3'),
            array('id' => '5','jawaban' => 'Lanjang/Tidak Menikah','id_pertanyaan' => '3'),
            array('id' => '6','jawaban' => 'Pisah Rumah','id_pertanyaan' => '3'),
            array('id' => '7','jawaban' => 'Tinggal Bersama','id_pertanyaan' => '3'),
            array('id' => '8','jawaban' => 'Janda/Duda','id_pertanyaan' => '3'),
            array('id' => '9','jawaban' => 'Lainnya','id_pertanyaan' => '3'),
            array('id' => '10','jawaban' => 'Negeri','id_pertanyaan' => '4'),
            array('id' => '11','jawaban' => 'Swasta','id_pertanyaan' => '4'),
            array('id' => '12','jawaban' => 'Lainnya','id_pertanyaan' => '4'),
            array('id' => '13','jawaban' => 'Tidak Sekolah','id_pertanyaan' => '13'),
            array('id' => '14','jawaban' => 'Tidak Lulus SD','id_pertanyaan' => '13'),
            array('id' => '15','jawaban' => 'Lulus SD','id_pertanyaan' => '13'),
            array('id' => '16','jawaban' => 'Tidak Lulus SLTP','id_pertanyaan' => '13'),
            array('id' => '17','jawaban' => 'Lulus SLTP','id_pertanyaan' => '13'),
            array('id' => '18','jawaban' => 'Tidak Lulus SLTA','id_pertanyaan' => '13'),
            array('id' => '19','jawaban' => 'Lulus SLTA','id_pertanyaan' => '13'),
            array('id' => '20','jawaban' => 'Tidak Lulus Diploma','id_pertanyaan' => '13'),
            array('id' => '21','jawaban' => 'Lulus Diploma','id_pertanyaan' => '13'),
            array('id' => '22','jawaban' => 'Tidak Lulus Sarjana(S1)','id_pertanyaan' => '13'),
            array('id' => '23','jawaban' => 'Lulus Sarjana(S1)','id_pertanyaan' => '13'),
            array('id' => '24','jawaban' => 'Tidak Lulus Pascasarjana','id_pertanyaan' => '13'),
            array('id' => '25','jawaban' => 'Lulus Pascasarjana','id_pertanyaan' => '13'),
            array('id' => '26','jawaban' => 'Tidak Tahu','id_pertanyaan' => '13'),
            array('id' => '27','jawaban' => 'Negara','id_pertanyaan' => '5'),
            array('id' => '28','jawaban' => 'Kota','id_pertanyaan' => '5'),
            array('id' => '29','jawaban' => 'Ilmu Alam','id_pertanyaan' => '6'),
            array('id' => '30','jawaban' => 'Ilmu Sosial','id_pertanyaan' => '6'),
            array('id' => '31','jawaban' => 'Bahasa','id_pertanyaan' => '6'),
            array('id' => '32','jawaban' => 'SMK','id_pertanyaan' => '6'),
            array('id' => '33','jawaban' => 'Madrasah Aliyah','id_pertanyaan' => '6'),
            array('id' => '34','jawaban' => 'WNI','id_pertanyaan' => '8'),
            array('id' => '35','jawaban' => 'Asing','id_pertanyaan' => '8'),
            array('id' => '36','jawaban' => 'Ya','id_pertanyaan' => '9'),
            array('id' => '37','jawaban' => 'Tidak','id_pertanyaan' => '9'),
            array('id' => '38','jawaban' => 'Pekerjaan yang berhubungan dengan pendidikan (misal: asisten laboratorium, mekanik, guru les, dll)','id_pertanyaan' => '10'),
            array('id' => '39','jawaban' => 'Pekerjaan yang tidak berhubungan dengan pendidikan (misal: SPG, pramugari, model, artis, dll)','id_pertanyaan' => '10'),
            array('id' => '40','jawaban' => 'Ya','id_pertanyaan' => '28'),
            array('id' => '41','jawaban' => 'Tidak','id_pertanyaan' => '28'),
            array('id' => '42','jawaban' => 'Gaji di daerah kecil','id_pertanyaan' => '29'),
            array('id' => '43','jawaban' => 'Karir sulit untuk berkembang','id_pertanyaan' => '29'),
            array('id' => '44','jawaban' => 'Fasilitas di daerah tidak memadai','id_pertanyaan' => '29'),
            array('id' => '45','jawaban' => 'Jauh dari keluarga','id_pertanyaan' => '29'),
            array('id' => '46','jawaban' => 'Keluarga/orangtua tidak mengijinkan','id_pertanyaan' => '29'),
            array('id' => '47','jawaban' => 'Risiko daerah rawan konflik','id_pertanyaan' => '29'),
            array('id' => '48','jawaban' => 'Saya tidak mau/tidak mencari kerja','id_pertanyaan' => '29'),
            array('id' => '49','jawaban' => 'Lainnya','id_pertanyaan' => '29'),
            array('id' => '50','jawaban' => 'Melalui iklan di koran/majalah, brosur ','id_pertanyaan' => '31'),
            array('id' => '51','jawaban' => 'Melamar ke perusahaan tanpa mengetahui lowongan yang ada ','id_pertanyaan' => '31'),
            array('id' => '52','jawaban' => 'Pergi ke bursa/pameran kerja ','id_pertanyaan' => '31'),
            array('id' => '53','jawaban' => 'Mencari lewat internet/iklan online/milis ','id_pertanyaan' => '31'),
            array('id' => '54','jawaban' => 'Dihubungi oleh perusahaan','id_pertanyaan' => '31'),
            array('id' => '55','jawaban' => 'Menghubungi Kemnakertrans','id_pertanyaan' => '31'),
            array('id' => '56','jawaban' => 'Menghubungi agen tenaga kerja komersiaI/swasta','id_pertanyaan' => '31'),
            array('id' => '57','jawaban' => 'Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas ','id_pertanyaan' => '31'),
            array('id' => '58','jawaban' => 'Menghubungi kantor kemahasiswaan/hubungan alumni ','id_pertanyaan' => '31'),
            array('id' => '59','jawaban' => 'Membangun network sejak masih kuliah ','id_pertanyaan' => '31'),
            array('id' => '60','jawaban' => 'Melalui relasi (misalnya dosen, orantua, saudara, teman, dll.)','id_pertanyaan' => '31'),
            array('id' => '61','jawaban' => 'Membangun bisnis sendiri','id_pertanyaan' => '31'),
            array('id' => '62','jawaban' => 'Melalui penempatan kerja atau magang','id_pertanyaan' => '31'),
            array('id' => '63','jawaban' => 'Bekerja di tempat yang sama dengan tempat kerja semasa kuliah ','id_pertanyaan' => '31'),
            array('id' => '64','jawaban' => 'Lainnya','id_pertanyaan' => '31'),
            array('id' => '65','jawaban' => 'Ya','id_pertanyaan' => '16'),
            array('id' => '66','jawaban' => 'Tidak','id_pertanyaan' => '16'),
            array('id' => '67','jawaban' => 'Sendiri di asrama ','id_pertanyaan' => '18'),
            array('id' => '68','jawaban' => 'Sendiri di tempat kos ','id_pertanyaan' => '18'),
            array('id' => '69','jawaban' => 'Bersama orangtua/keluarga','id_pertanyaan' => '18'),
            array('id' => '70','jawaban' => 'Bersama keluarga ','id_pertanyaan' => '18'),
            array('id' => '71','jawaban' => 'Berbagi kamar kos/apartemen ','id_pertanyaan' => '18'),
            array('id' => '72','jawaban' => 'Lainnya','id_pertanyaan' => '18'),

            array('id' => '75','jawaban' => 'Sendiri di asrama ','id_pertanyaan' => '18'),
            array('id' => '76','jawaban' => 'Sendiri di tempat kos ','id_pertanyaan' => '18'),
            array('id' => '77','jawaban' => 'Bersama orangtua/keluarga','id_pertanyaan' => '18'),
            array('id' => '78','jawaban' => 'Bersama keluarga ','id_pertanyaan' => '18'),
            array('id' => '79','jawaban' => 'Berbagi kamar kos/apartemen ','id_pertanyaan' => '18'),
            array('id' => '80','jawaban' => 'Lainnya','id_pertanyaan' => '18'),
            array('id' => '81','jawaban' => 'Beasiswa (misalnya dari pemerintah, universitas)','id_pertanyaan' => '19'),
            array('id' => '82','jawaban' => 'Sebagian beasiswa','id_pertanyaan' => '19'),
            array('id' => '83','jawaban' => 'Orangtua/keluarga','id_pertanyaan' => '19'),
            array('id' => '84','jawaban' => 'Biaya sendiri','id_pertanyaan' => '19'),
            array('id' => '85','jawaban' => 'Lainnya','id_pertanyaan' => '19'),
            array('id' => '86','jawaban' => 'Di dalam kampus','id_pertanyaan' => '90'),
            array('id' => '87','jawaban' => 'Di luar kampus','id_pertanyaan' => '90'),
            array('id' => '88','jawaban' => 'Di dalam dan luar kampus','id_pertanyaan' => '90'),
            array('id' => '89','jawaban' => 'Ya','id_pertanyaan' => '21'),
            array('id' => '90','jawaban' => 'Tidak','id_pertanyaan' => '21'),
            array('id' => '91','jawaban' => 'Ya','id_pertanyaan' => '23'),
            array('id' => '92','jawaban' => 'Tidak','id_pertanyaan' => '23'),
            array('id' => '93','jawaban' => 'Melalui iklan di koran/majalah, brosur ','id_pertanyaan' => '31'),
            array('id' => '94','jawaban' => 'Melamar ke perusahaan tanpa mengetahui lowongan yang ada ','id_pertanyaan' => '31'),
            array('id' => '95','jawaban' => 'Pergi ke bursa/pameran kerja ','id_pertanyaan' => '31'),
            array('id' => '96','jawaban' => 'Mencari lewat internet/iklan online/milis ','id_pertanyaan' => '31'),
            array('id' => '97','jawaban' => 'Dihubungi oleh perusahaan','id_pertanyaan' => '31'),
            array('id' => '98','jawaban' => 'Menghubungi Kemnakertrans','id_pertanyaan' => '31'),
            array('id' => '99','jawaban' => 'Menghubungi agen tenaga kerja komersiaI/swasta','id_pertanyaan' => '31'),
            array('id' => '100','jawaban' => 'Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas ','id_pertanyaan' => '31'),
            array('id' => '101','jawaban' => 'Menghubungi kantor kemahasiswaan/hubungan alumni ','id_pertanyaan' => '31'),
            array('id' => '102','jawaban' => 'Membangun network sejak masih kuliah ','id_pertanyaan' => '31'),
            array('id' => '103','jawaban' => 'Melalui relasi (misalnya dosen, orantua, saudara, teman, dll.)','id_pertanyaan' => '31'),
            array('id' => '104','jawaban' => 'Membangun bisnis sendiri','id_pertanyaan' => '31'),
            array('id' => '105','jawaban' => 'Melalui penempatan kerja atau magang','id_pertanyaan' => '31'),
            array('id' => '106','jawaban' => 'Bekerja di tempat yang sama dengan tempat kerja semasa kuliah ','id_pertanyaan' => '31'),
            array('id' => '107','jawaban' => 'Lainnya','id_pertanyaan' => '31'),
            array('id' => '108','jawaban' => 'Program studi','id_pertanyaan' => '32'),
            array('id' => '109','jawaban' => 'Spesialisasi ','id_pertanyaan' => '32'),
            array('id' => '110','jawaban' => 'IPK','id_pertanyaan' => '32'),
            array('id' => '111','jawaban' => 'Pengalaman kerja selama kuliah','id_pertanyaan' => '32'),
            array('id' => '112','jawaban' => 'Reputasi dari perguruan tinggi','id_pertanyaan' => '32'),
            array('id' => '113','jawaban' => 'Pengalaman ke luar negeri (untuk bekerja atau magang)','id_pertanyaan' => '32'),
            array('id' => '114','jawaban' => 'Kemampuan bahasa Inggris','id_pertanyaan' => '32'),
            array('id' => '115','jawaban' => 'Kemampuan bahasa asing lainnya','id_pertanyaan' => '32'),
            array('id' => '116','jawaban' => 'Pengoperasian komputer','id_pertanyaan' => '32'),
            array('id' => '117','jawaban' => 'Pengalaman berorganisasi','id_pertanyaan' => '32'),
            array('id' => '118','jawaban' => 'Rekomendasi dari pihak ketiga','id_pertanyaan' => '32'),
            array('id' => '119','jawaban' => 'Kepribadian dan ketrampilan antar personal','id_pertanyaan' => '32'),
            array('id' => '120','jawaban' => 'Lainnya','id_pertanyaan' => '32'),
            array('id' => '121','jawaban' => 'sebelum lulus','id_pertanyaan' => '30'),
            array('id' => '122','jawaban' => 'bulan setelah lulus','id_pertanyaan' => '30'),
            array('id' => '123','jawaban' => 'Saya tidak mencari kerja ','id_pertanyaan' => '30'),
            array('id' => '124','jawaban' => 'Ya','id_pertanyaan' => '39'),
            array('id' => '125','jawaban' => 'Tidak','id_pertanyaan' => '39'),
            array('id' => '127','jawaban' => 'Pengoperasian komputer (MS Office dan yang sejenis)','id_pertanyaan' => '40'),
            array('id' => '128','jawaban' => 'Piranti lunak aplikasi (Accurate, AutoCAD, dll.)','id_pertanyaan' => '40'),
            array('id' => '129','jawaban' => 'Bahasa Inggris ','id_pertanyaan' => '40'),
            array('id' => '130','jawaban' => 'Bahasa asing lainnya','id_pertanyaan' => '40'),
            array('id' => '131','jawaban' => 'Kepemimpinan','id_pertanyaan' => '40'),
            array('id' => '132','jawaban' => 'Kewirausahaan','id_pertanyaan' => '40'),
            array('id' => '133','jawaban' => 'Lainnya','id_pertanyaan' => '40'),
            array('id' => '141','jawaban' => 'Saya memulai bisnis sendiri','id_pertanyaan' => '36'),
            array('id' => '142','jawaban' => 'Saya sudah memeroleh pekerjaan sebelum lulus ','id_pertanyaan' => '36'),
            array('id' => '143','jawaban' => 'Saya melanjutkan kuliah','id_pertanyaan' => '36'),
            array('id' => '144','jawaban' => 'Saya belum mencari pekerjaan ','id_pertanyaan' => '36'),
            array('id' => '145','jawaban' => 'Lainnya','id_pertanyaan' => '36'),
            array('id' => '146','jawaban' => 'Melalui iklan di koran/majalah, brosur ','id_pertanyaan' => '37'),
            array('id' => '147','jawaban' => 'Melamar ke perusahaan tanpa mengetahui lowongan yang ada ','id_pertanyaan' => '37'),
            array('id' => '148','jawaban' => 'Pergi ke bursa/pameran kerja ','id_pertanyaan' => '37'),
            array('id' => '149','jawaban' => 'Mencari lewat internet/iklan online/milis ','id_pertanyaan' => '37'),
            array('id' => '150','jawaban' => 'Dihubungi oleh perusahaan','id_pertanyaan' => '37'),
            array('id' => '151','jawaban' => 'Menghubungi Kemnakertrans','id_pertanyaan' => '37'),
            array('id' => '152','jawaban' => 'Menghubungi agen tenaga kerja komersiaI/swasta','id_pertanyaan' => '37'),
            array('id' => '153','jawaban' => 'Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas ','id_pertanyaan' => '37'),
            array('id' => '154','jawaban' => 'Menghubungi kantor kemahasiswaan/hubungan alumni ','id_pertanyaan' => '37'),
            array('id' => '155','jawaban' => 'Membangun network sejak masih kuliah ','id_pertanyaan' => '37'),
            array('id' => '156','jawaban' => 'Melalui relasi (misalnya dosen, orantua, saudara, teman, dll.)','id_pertanyaan' => '37'),
            array('id' => '157','jawaban' => 'Membangun bisnis sendiri','id_pertanyaan' => '37'),
            array('id' => '158','jawaban' => 'Melalui penempatan kerja atau magang','id_pertanyaan' => '37'),
            array('id' => '159','jawaban' => 'Bekerja di tempat yang sama dengan tempat kerja semasa kuliah ','id_pertanyaan' => '37'),
            array('id' => '160','jawaban' => 'Lainnya','id_pertanyaan' => '37'),
            array('id' => '161','jawaban' => 'Ya','id_pertanyaan' => '43'),
            array('id' => '162','jawaban' => 'Tidak','id_pertanyaan' => '43'),
            array('id' => '163','jawaban' => 'Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana','id_pertanyaan' => '44'),
            array('id' => '164','jawaban' => 'Saya menikah ','id_pertanyaan' => '44'),
            array('id' => '165','jawaban' => 'Saya sibuk dengan keluarga dan anak-anak','id_pertanyaan' => '44'),
            array('id' => '166','jawaban' => 'Saya sekarang sedang mencari pekerjaan','id_pertanyaan' => '44'),
            array('id' => '167','jawaban' => 'Lainnya','id_pertanyaan' => '44'),
            array('id' => '168','jawaban' => 'Tidak','id_pertanyaan' => '45'),
            array('id' => '169','jawaban' => 'Tidak, tapi saya sedang menunggu hasil lamaran kerja','id_pertanyaan' => '45'),
            array('id' => '170','jawaban' => 'Ya, saya akan mulai bekerja dalam 2 minggu ke depan','id_pertanyaan' => '45'),
            array('id' => '171','jawaban' => 'Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan ','id_pertanyaan' => '45'),
            array('id' => '172','jawaban' => 'Lainnya','id_pertanyaan' => '45'),
            array('id' => '173','jawaban' => 'Instansi pemerintah (termasuk BUMN)','id_pertanyaan' => '47'),
            array('id' => '174','jawaban' => 'Organisasi non-profit/Lembaga Swadaya Masyarakat ','id_pertanyaan' => '47'),
            array('id' => '175','jawaban' => 'Perusahaan swasta','id_pertanyaan' => '47'),
            array('id' => '176','jawaban' => 'Wiraswasta/perusahaan sendiri','id_pertanyaan' => '47'),
            array('id' => '177','jawaban' => 'Lainnya','id_pertanyaan' => '47'),
            array('id' => '178','jawaban' => 'Saya memiliki/melayani kontraktor tunggal ','id_pertanyaan' => '53'),
            array('id' => '179','jawaban' => 'Saya mengambil alih/membeli perusahaan ','id_pertanyaan' => '53'),
            array('id' => '180','jawaban' => 'Saya membangun dari awal sebuah firma/kantor ','id_pertanyaan' => '53'),
            array('id' => '181','jawaban' => 'Saya diminta untuk membuka perusahaan sendiri oleh perusahaan tempat saya bekerja dulu ','id_pertanyaan' => '53'),
            array('id' => '182','jawaban' => 'Saya bekerja di rumah','id_pertanyaan' => '53'),
            array('id' => '183','jawaban' => 'Saya tidak mempunyai pegawai/bekerja sendiri','id_pertanyaan' => '53'),
            array('id' => '184','jawaban' => 'Saya bekerjasama dengan teman/saudara','id_pertanyaan' => '53'),
            array('id' => '185','jawaban' => 'Lainnya','id_pertanyaan' => '53'),
            array('id' => '186','jawaban' => 'Ya','id_pertanyaan' => '55'),
            array('id' => '187','jawaban' => 'Tidak','id_pertanyaan' => '55'),
            array('id' => '188','jawaban' => 'Setingkat lebih tinggi ','id_pertanyaan' => '228'),
            array('id' => '189','jawaban' => 'Tingkat yang sama ','id_pertanyaan' => '228'),
            array('id' => '190','jawaban' => 'Setingkat lebih rendah','id_pertanyaan' => '228'),
            array('id' => '191','jawaban' => 'Tidak perlu pendidikan tinggi','id_pertanyaan' => '228'),
            array('id' => '192','jawaban' => 'Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya. ','id_pertanyaan' => '229'),
            array('id' => '193','jawaban' => 'Saya belum mendapatkan pekerjaan yang lebih sesuai.','id_pertanyaan' => '229'),
            array('id' => '194','jawaban' => 'Di pekerjaan ini saya memeroleh prospek karir yang baik. ','id_pertanyaan' => '229'),
            array('id' => '195','jawaban' => 'Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya. ','id_pertanyaan' => '229'),
            array('id' => '196','jawaban' => 'Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya.','id_pertanyaan' => '229'),
            array('id' => '197','jawaban' => 'Saya dapat memeroleh pendapatn yang lebih tinggi di pekerjaan ini.  ','id_pertanyaan' => '229'),
            array('id' => '198','jawaban' => 'Pekerjaan saya saat ini lebih aman/terjamin/secure ','id_pertanyaan' => '229'),
            array('id' => '199','jawaban' => 'Pekerjaan saya saat ini lebih menarik ','id_pertanyaan' => '229'),
            array('id' => '200','jawaban' => 'Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.','id_pertanyaan' => '229'),
            array('id' => '201','jawaban' => 'Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya. ','id_pertanyaan' => '229'),
            array('id' => '202','jawaban' => 'Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya. ','id_pertanyaan' => '229'),
            array('id' => '203','jawaban' => 'Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya. ','id_pertanyaan' => '229'),
            array('id' => '204','jawaban' => 'Lainnya','id_pertanyaan' => '229'),
            array('id' => '205','jawaban' => 'Ya','id_pertanyaan' => '230'),
            array('id' => '206','jawaban' => 'Tidak','id_pertanyaan' => '230'),
            array('id' => '207','jawaban' => 'Bukan perguruan tinggi terbaik untuk bidang/program studi yang saya minati ','id_pertanyaan' => '231'),
            array('id' => '208','jawaban' => 'Tidak ada bidang/program studi yang sesuai minat saya','id_pertanyaan' => '231'),
            array('id' => '209','jawaban' => 'Biaya kuliah terlalu mahal','id_pertanyaan' => '231'),
            array('id' => '210','jawaban' => 'Biaya hidup terlalu mahal','id_pertanyaan' => '231'),
            array('id' => '211','jawaban' => 'Proses belajar mengajar kurang baik','id_pertanyaan' => '231'),
            array('id' => '212','jawaban' => 'Staf pengajar kurang profesional','id_pertanyaan' => '231'),
            array('id' => '213','jawaban' => 'Fasilitas kurang memadai','id_pertanyaan' => '231'),
            array('id' => '214','jawaban' => 'Standar nilai kelulusan terlalu tinggi','id_pertanyaan' => '231'),
            array('id' => '215','jawaban' => 'Lingkungan belajar kurang mendukung','id_pertanyaan' => '231'),
            array('id' => '216','jawaban' => 'Lainnya','id_pertanyaan' => '231'),
            array('id' => '217','jawaban' => 'ya','id_pertanyaan' => '232'),
            array('id' => '218','jawaban' => 'tidak','id_pertanyaan' => '232'),
            array('id' => '219','jawaban' => 'Bukan departemen/program studi terbaik untuk bidang yang saya minati','id_pertanyaan' => '233'),
            array('id' => '220','jawaban' => 'Tidak sesuai dengan minat saya','id_pertanyaan' => '233'),
            array('id' => '221','jawaban' => 'Biaya kuliah terlalu mahal','id_pertanyaan' => '233'),
            array('id' => '222','jawaban' => 'Biaya hidup terlalu mahal','id_pertanyaan' => '233'),
            array('id' => '223','jawaban' => 'Proses belajar mengajar kurang baik','id_pertanyaan' => '233'),
            array('id' => '224','jawaban' => 'Staf pengajar kurang profesional','id_pertanyaan' => '233'),
            array('id' => '225','jawaban' => 'Fasilitas kurang memadai','id_pertanyaan' => '233'),
            array('id' => '226','jawaban' => 'Standar nilai kelulusan terlalu tinggi','id_pertanyaan' => '233'),
            array('id' => '227','jawaban' => 'Lingkungan belajar kurang mendukung','id_pertanyaan' => '233'),
            array('id' => '228','jawaban' => 'Materi kuliah terlalu sulit ','id_pertanyaan' => '233'),
            array('id' => '229','jawaban' => 'Materi kuliah tidak update','id_pertanyaan' => '233'),
            array('id' => '230','jawaban' => 'Materi kuliah tidak sesuai dengan minat saya','id_pertanyaan' => '233'),
            array('id' => '231','jawaban' => 'Materi kuliah membosankan','id_pertanyaan' => '233'),
            array('id' => '232','jawaban' => 'Lainnya','id_pertanyaan' => '233'),
            array('id' => '233','jawaban' => 'YA','id_pertanyaan' => '234'),
            array('id' => '234','jawaban' => 'TIDAK','id_pertanyaan' => '234'),
            array('id' => '235','jawaban' => 'Bukan departemen/program studi terbaik untuk bidang yang saya minati','id_pertanyaan' => '235'),
            array('id' => '236','jawaban' => 'Tidak sesuai dengan minat saya','id_pertanyaan' => '235'),
            array('id' => '237','jawaban' => 'Biaya kuliah terlalu mahal','id_pertanyaan' => '235'),
            array('id' => '238','jawaban' => 'Biaya hidup terlalu mahal','id_pertanyaan' => '235'),
            array('id' => '239','jawaban' => 'Proses belajar mengajar kurang baik','id_pertanyaan' => '235'),
            array('id' => '240','jawaban' => 'Staf pengajar kurang profesional','id_pertanyaan' => '235'),
            array('id' => '241','jawaban' => 'Fasilitas kurang memadai','id_pertanyaan' => '235'),
            array('id' => '242','jawaban' => 'Standar nilai kelulusan terlalu tinggi','id_pertanyaan' => '235'),
            array('id' => '243','jawaban' => 'Lingkungan belajar kurang mendukung','id_pertanyaan' => '235'),
            array('id' => '244','jawaban' => 'Materi kuliah terlalu sulit ','id_pertanyaan' => '235'),
            array('id' => '245','jawaban' => 'Materi kuliah tidak update','id_pertanyaan' => '235'),
            array('id' => '246','jawaban' => 'Materi kuliah tidak sesuai dengan minat saya','id_pertanyaan' => '235'),
            array('id' => '247','jawaban' => 'Materi kuliah membosankan','id_pertanyaan' => '235'),
            array('id' => '248','jawaban' => 'Lainnya','id_pertanyaan' => '235')
          );

        foreach ($pilihan_jawabans as $pilihan):
            App\PilihanJawaban::create([
                'jawaban' => $pilihan['jawaban'],
                'pertanyaan_id' => $pilihan['id_pertanyaan']
            ]);
        endforeach;
    }
}