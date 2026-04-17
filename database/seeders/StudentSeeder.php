<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            ['name' => 'Aditya Pratama', 'nim' => 'G1F023001', 'email' => 'aditya.p@example.com', 'phone' => '081273849501', 'address' => 'Jl. Mahakam No. 12, Gading Cempaka, Bengkulu'],
            ['name' => 'Bagas Saputra', 'nim' => 'G1F023002', 'email' => 'bagas.s@example.com', 'phone' => '082183746502', 'address' => 'Perumahan Unib Permai Blok B, Bengkulu'],
            ['name' => 'Chika Safitri', 'nim' => 'G1F023003', 'email' => 'chika.s@example.com', 'phone' => '085273645103', 'address' => 'Jl. Merapi Raya No. 45, Ratu Agung, Bengkulu'],
            ['name' => 'Dedi Kurniawan', 'nim' => 'G1F023004', 'email' => 'dedi.k@example.com', 'phone' => '081373645204', 'address' => 'Jl. Salak No. 9, Lingkar Timur, Bengkulu'],
            ['name' => 'Eka Putri Lestari', 'nim' => 'G1F023005', 'email' => 'eka.p@example.com', 'phone' => '082273645305', 'address' => 'Jl. Kedondong No. 21, Pasar Minggu, Bengkulu'],
            ['name' => 'Fadel Muhammad', 'nim' => 'G1F023006', 'email' => 'fadel.m@example.com', 'phone' => '085373645406', 'address' => 'Jl. Jati No. 5, Padang Jati, Bengkulu'],
            ['name' => 'Gita Permatasari', 'nim' => 'G1F023007', 'email' => 'gita.p@example.com', 'phone' => '081173645507', 'address' => 'Jl. Cempaka No. 8, Kebun Kenanga, Bengkulu'],
            ['name' => 'Hendra Wijaya', 'nim' => 'G1F023008', 'email' => 'hendra.w@example.com', 'phone' => '082373645608', 'address' => 'Jl. Belimbing No. 14, Panorama, Bengkulu'],
            ['name' => 'Indah Rahmawati', 'nim' => 'G1F023009', 'email' => 'indah.r@example.com', 'phone' => '085173645709', 'address' => 'Jl. Kenanga No. 30, Kebun Lely, Bengkulu'],
            ['name' => 'Jaka Pratama', 'nim' => 'G1F023010', 'email' => 'jaka.p@example.com', 'phone' => '081273645810', 'address' => 'Jl. Flamboyan No. 17, Skip, Bengkulu'],
            ['name' => 'Kevin Sanjaya', 'nim' => 'G1F023011', 'email' => 'kevin.s@example.com', 'phone' => '082173645911', 'address' => 'Jl. Nusa Indah No. 22, Ratu Samban, Bengkulu'],
            ['name' => 'Lutfi Hakim', 'nim' => 'G1F023012', 'email' => 'lutfi.h@example.com', 'phone' => '085273645012', 'address' => 'Jl. Bali No. 55, Teluk Segara, Bengkulu'],
            ['name' => 'Melati Sukma', 'nim' => 'G1F023013', 'email' => 'melati.s@example.com', 'phone' => '081373645113', 'address' => 'Jl. Kalimantan No. 10, Kampung Kelawi, Bengkulu'],
            ['name' => 'Nurul Hidayah', 'nim' => 'G1F023014', 'email' => 'nurul.h@example.com', 'phone' => '082273645214', 'address' => 'Jl. Sumatera No. 4, Sukamerindu, Bengkulu'],
            ['name' => 'Oki Setiana', 'nim' => 'G1F023015', 'email' => 'oki.s@example.com', 'phone' => '085373645315', 'address' => 'Jl. Bangka No. 7, Penurunan, Bengkulu'],
            ['name' => 'Putra Ramadhan', 'nim' => 'G1F023016', 'email' => 'putra.r@example.com', 'phone' => '081173645416', 'address' => 'Jl. Veteran No. 12, Pasar Melintang, Bengkulu'],
            ['name' => 'Qonita Azahra', 'nim' => 'G1F023017', 'email' => 'qonita.a@example.com', 'phone' => '082373645517', 'address' => 'Jl. Gereja No. 9, Malabero, Bengkulu'],
            ['name' => 'Rizky Fauzi', 'nim' => 'G1F023018', 'email' => 'rizky.f@example.com', 'phone' => '085173645618', 'address' => 'Jl. Ahmad Yani No. 15, Kampung Cina, Bengkulu'],
            ['name' => 'Siti Aminah', 'nim' => 'G1F023019', 'email' => 'siti.a@example.com', 'phone' => '081273645719', 'address' => 'Jl. Suprapto No. 2, Pasar Jitra, Bengkulu'],
            ['name' => 'Taufik Ismail', 'nim' => 'G1F023020', 'email' => 'taufik.i@example.com', 'phone' => '082173645820', 'address' => 'Jl. S. Parman No. 25, Tanah Patah, Bengkulu'],
        ];

        foreach ($students as $student) {
            \App\Models\Student::create($student);
        }
    }
}
