<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Part;

class PartSeeder extends Seeder
{
    public function run(): void
    {
        $parts = [
            [
                'name' => 'AMD Ryzen 5 5600X',
                'category' => 'CPU',
                'brand' => 'AMD',
                'price' => 650,
                'specification' => '6 cores, 12 threads, 3.7GHz base clock, AM4 socket',
                'stock' => 10,
                'image_url' => ''
            ],
            [
                'name' => 'Intel Core i5-12400F',
                'category' => 'CPU',
                'brand' => 'Intel',
                'price' => 580,
                'specification' => '6 cores, 12 threads, LGA1700 socket',
                'stock' => 12,
                'image_url' => ''
            ],
            [
                'name' => 'AMD Ryzen 7 5800X',
                'category' => 'CPU',
                'brand' => 'AMD',
                'price' => 900,
                'specification' => '8 cores, 16 threads, 3.8GHz base clock',
                'stock' => 7,
                'image_url' => ''
            ],
            [
                'name' => 'NVIDIA GeForce RTX 4060',
                'category' => 'GPU',
                'brand' => 'NVIDIA',
                'price' => 1300,
                'specification' => '8GB GDDR6 graphics card',
                'stock' => 6,
                'image_url' => ''
            ],
            [
                'name' => 'NVIDIA GeForce RTX 4070',
                'category' => 'GPU',
                'brand' => 'NVIDIA',
                'price' => 2400,
                'specification' => '12GB GDDR6X graphics card',
                'stock' => 4,
                'image_url' => ''
            ],
            [
                'name' => 'AMD Radeon RX 7600',
                'category' => 'GPU',
                'brand' => 'AMD',
                'price' => 1200,
                'specification' => '8GB GDDR6 graphics card',
                'stock' => 5,
                'image_url' => ''
            ],
            [
                'name' => 'Corsair Vengeance LPX 16GB',
                'category' => 'RAM',
                'brand' => 'Corsair',
                'price' => 250,
                'specification' => '16GB DDR4 3200MHz memory kit',
                'stock' => 20,
                'image_url' => ''
            ],
            [
                'name' => 'Kingston Fury Beast 32GB',
                'category' => 'RAM',
                'brand' => 'Kingston',
                'price' => 430,
                'specification' => '32GB DDR4 3200MHz memory kit',
                'stock' => 15,
                'image_url' => ''
            ],
            [
                'name' => 'G.Skill Trident Z RGB 16GB',
                'category' => 'RAM',
                'brand' => 'G.Skill',
                'price' => 320,
                'specification' => '16GB DDR4 RGB memory kit',
                'stock' => 9,
                'image_url' => ''
            ],
            [
                'name' => 'Samsung 970 EVO Plus 1TB',
                'category' => 'Storage',
                'brand' => 'Samsung',
                'price' => 350,
                'specification' => '1TB NVMe M.2 SSD',
                'stock' => 18,
                'image_url' => ''
            ],
            [
                'name' => 'WD Blue SN570 1TB',
                'category' => 'Storage',
                'brand' => 'Western Digital',
                'price' => 300,
                'specification' => '1TB NVMe SSD',
                'stock' => 14,
                'image_url' => ''
            ],
            [
                'name' => 'Crucial BX500 480GB',
                'category' => 'Storage',
                'brand' => 'Crucial',
                'price' => 150,
                'specification' => '480GB SATA SSD',
                'stock' => 22,
                'image_url' => ''
            ],
            [
                'name' => 'ASUS Prime B550M-A',
                'category' => 'Motherboard',
                'brand' => 'ASUS',
                'price' => 420,
                'specification' => 'Micro-ATX motherboard, AM4 socket, DDR4 support',
                'stock' => 8,
                'image_url' => ''
            ],
            [
                'name' => 'MSI B550 Tomahawk',
                'category' => 'Motherboard',
                'brand' => 'MSI',
                'price' => 650,
                'specification' => 'ATX motherboard, AM4 socket, PCIe 4.0 support',
                'stock' => 6,
                'image_url' => ''
            ],
            [
                'name' => 'Gigabyte B660M DS3H',
                'category' => 'Motherboard',
                'brand' => 'Gigabyte',
                'price' => 480,
                'specification' => 'Micro-ATX motherboard, LGA1700 socket',
                'stock' => 10,
                'image_url' => ''
            ],
            [
                'name' => 'Corsair CV650',
                'category' => 'Power Supply',
                'brand' => 'Corsair',
                'price' => 280,
                'specification' => '650W 80 Plus Bronze power supply',
                'stock' => 13,
                'image_url' => ''
            ],
            [
                'name' => 'Cooler Master MWE 750',
                'category' => 'Power Supply',
                'brand' => 'Cooler Master',
                'price' => 390,
                'specification' => '750W 80 Plus Bronze power supply',
                'stock' => 9,
                'image_url' => ''
            ],
            [
                'name' => 'EVGA 600 W1',
                'category' => 'Power Supply',
                'brand' => 'EVGA',
                'price' => 230,
                'specification' => '600W power supply',
                'stock' => 11,
                'image_url' => ''
            ],
            [
                'name' => 'NZXT H510',
                'category' => 'Case',
                'brand' => 'NZXT',
                'price' => 350,
                'specification' => 'Mid tower ATX case with tempered glass',
                'stock' => 7,
                'image_url' => ''
            ],
            [
                'name' => 'Cooler Master MasterBox Q300L',
                'category' => 'Case',
                'brand' => 'Cooler Master',
                'price' => 220,
                'specification' => 'Micro-ATX case with magnetic dust filters',
                'stock' => 12,
                'image_url' => ''
            ],
            [
                'name' => 'Corsair 4000D Airflow',
                'category' => 'Case',
                'brand' => 'Corsair',
                'price' => 430,
                'specification' => 'ATX airflow case with tempered glass side panel',
                'stock' => 8,
                'image_url' => ''
            ],
            [
                'name' => 'Cooler Master Hyper 212',
                'category' => 'Cooling',
                'brand' => 'Cooler Master',
                'price' => 180,
                'specification' => 'Air CPU cooler with 120mm fan',
                'stock' => 16,
                'image_url' => ''
            ],
            [
                'name' => 'DeepCool AK400',
                'category' => 'Cooling',
                'brand' => 'DeepCool',
                'price' => 160,
                'specification' => 'Single tower CPU air cooler',
                'stock' => 14,
                'image_url' => ''
            ],
            [
                'name' => 'Logitech G Pro X Keyboard',
                'category' => 'Peripheral',
                'brand' => 'Logitech',
                'price' => 450,
                'specification' => 'Mechanical gaming keyboard',
                'stock' => 10,
                'image_url' => ''
            ],
            [
                'name' => 'Razer DeathAdder V2',
                'category' => 'Peripheral',
                'brand' => 'Razer',
                'price' => 230,
                'specification' => 'Wired optical gaming mouse',
                'stock' => 17,
                'image_url' => ''
            ]
        ];

        foreach ($parts as $part) {
            Part::create($part);
        }
    }
}