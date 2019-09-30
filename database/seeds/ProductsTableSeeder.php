<?php

use App\Product;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Macbook Pro 2019',
            'slug' => 'macbook-pro-2019',
            'detail' => '13 inch, 1TB SSD, 32GB RAM, Touch Bar and Touch ID',
            'price' => 33199000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptas pariatur, exercitationem repellat delectus veniam temporibus accusantium ullam, libero consectetur molestiae tenetur culpa perferendis possimus totam praesentium officiis unde nesciunt.',
            'category_id' => 1,
            'picture' => 'macbook.jpeg'
        ]);

        Product::create([
            'name' => 'iPhone XS',
            'slug' => 'iphone-xs',
            'detail' => '512 GB',
            'price' => 26599000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptas pariatur, exercitationem repellat delectus veniam temporibus accusantium ullam, libero consectetur molestiae tenetur culpa perferendis possimus totam praesentium officiis unde nesciunt.',
            'category_id' => 3,
            'picture' => 'iphone.jpg'
        ]);

        Product::create([
            'name' => 'ASUS ZenFone 6 ZS630KL',
            'slug' => 'asus-zenfone-6-zs630kl',
            'detail' => 'Snapdragon 855, 8GB RAM, 5000 mAh, 128GB',
            'price' => 7999000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptas pariatur, exercitationem repellat delectus veniam temporibus accusantium ullam, libero consectetur molestiae tenetur culpa perferendis possimus totam praesentium officiis unde nesciunt.',
            'category_id' => 3,
            'picture' => 'zenfone6.jpg'
        ]);

        Product::create([
            'name' => 'ASUS ROG Zephyrus GX501',
            'slug' => 'asus-rog-zephyrus-gx501',
            'detail' => 'Core i7, 1TB SSD, 24GB RAM, NVIDIA GeForce GTX 1080, Windows 10 Pro',
            'price' => 33199000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptas pariatur, exercitationem repellat delectus veniam temporibus accusantium ullam, libero consectetur molestiae tenetur culpa perferendis possimus totam praesentium officiis unde nesciunt.',
            'category_id' => 1,
            'picture' => 'zephyrus.jpg'
        ]);

        Product::create([
            'name' => 'MSI Prestige PS42',
            'slug' => 'msi-prestige-ps42',
            'detail' => 'Core i5-8265U, 512GB SSD NVMe, 8GB RAM, NVIDIA GeForce MX250, Windows 10 Home',
            'price' => 11999000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptas pariatur, exercitationem repellat delectus veniam temporibus accusantium ullam, libero consectetur molestiae tenetur culpa perferendis possimus totam praesentium officiis unde nesciunt.',
            'category_id' => 1,
            'picture' => 'msi-prestige-ps42.jpg'
        ]);

        Product::create([
            'name' => 'Razer Blade 15',
            'slug' => 'razer-blade-15',
            'detail' => 'Core i7-8750H, 512GB SSD NVMe, 16GB RAM, NVIDIA GeForce RTX 2080, Windows 10',
            'price' => 59799000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptas pariatur, exercitationem repellat delectus veniam temporibus accusantium ullam, libero consectetur molestiae tenetur culpa perferendis possimus totam praesentium officiis unde nesciunt.',
            'category_id' => 1,
            'picture' => 'razer-blade-15.jpg'
        ]);
        Product::create([
            'name' => 'ROG Phone 2',
            'slug' => 'rog-phone-2',
            'detail' => 'Snapdragon 855 Plus, 12GB RAM, 6000 mAh, 1TB',
            'price' => 17000000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptas pariatur, exercitationem repellat delectus veniam temporibus accusantium ullam, libero consectetur molestiae tenetur culpa perferendis possimus totam praesentium officiis unde nesciunt.',
            'category_id' => 3,
            'picture' => 'rog-phone-2.png'
        ]);

        Product::create([
            'name' => 'Samsung Galaxy S10 Plus',
            'slug' => 'samsung-galaxy-s10-plus',
            'detail' => 'Snapdragon 855, 12GB RAM, 4100 mAh, 128GB',
            'price' => 17000000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptas pariatur, exercitationem repellat delectus veniam temporibus accusantium ullam, libero consectetur molestiae tenetur culpa perferendis possimus totam praesentium officiis unde nesciunt.',
            'category_id' => 3,
            'picture' => 'samsung-s10-plus.jpeg'
        ]);

        Product::create([
            'name' => 'Samsung Galaxy Tab S4',
            'slug' => 'samsung-galaxy-tab-s4',
            'detail' => 'Snapdragon 835, 6GB RAM, 7300 mAh, 256GB',
            'price' => 12500000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptas pariatur, exercitationem repellat delectus veniam temporibus accusantium ullam, libero consectetur molestiae tenetur culpa perferendis possimus totam praesentium officiis unde nesciunt.',
            'category_id' => 4,
            'picture' => 'galaxy-tab-s4.jpg'
        ]);

        Product::create([
            'name' => 'iPad Mini 2019',
            'slug' => 'ipad-mini-2019',
            'detail' => 'Apple A12 Bionic, 3GB RAM, 5124 mAh, 256GB',
            'price' => 7500000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptas pariatur, exercitationem repellat delectus veniam temporibus accusantium ullam, libero consectetur molestiae tenetur culpa perferendis possimus totam praesentium officiis unde nesciunt.',
            'category_id' => 4,
            'picture' => 'ipad-mini.jpg'
        ]);

        Product::create([
            'name' => 'iPad Pro 11',
            'slug' => 'ipad-pro11',
            'detail' => 'Apple A12X Bionic, 6GB RAM, 7812 mAh, 1TB',
            'price' => 23950000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptas pariatur, exercitationem repellat delectus veniam temporibus accusantium ullam, libero consectetur molestiae tenetur culpa perferendis possimus totam praesentium officiis unde nesciunt.',
            'category_id' => 4,
            'picture' => 'ipad-pro-11.png'
        ]);

        Product::create([
            'name' => 'Huawei Mediapad M5',
            'slug' => 'huawei-mediapad-m5',
            'detail' => 'HiSilicon Kirin 960s, 4GB RAM, 5100 mAh, 128GB',
            'price' => 6000000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptas pariatur, exercitationem repellat delectus veniam temporibus accusantium ullam, libero consectetur molestiae tenetur culpa perferendis possimus totam praesentium officiis unde nesciunt.',
            'category_id' => 4,
            'picture' => 'mediapad-m5.png'
        ]);

        Product::create([
            'name' => 'MSI RTX 2080 Ti Lightning Z',
            'slug' => 'msi-rtx2080-ti-lightning-z',
            'detail' => '1770 Mhz Boost Clock, 14Gbps Memory Speed, 11GB VRAM GDDR6',
            'price' => 27499000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptas pariatur, exercitationem repellat delectus veniam temporibus accusantium ullam, libero consectetur molestiae tenetur culpa perferendis possimus totam praesentium officiis unde nesciunt.',
            'category_id' => 2,
            'picture' => 'msi-rtx2080-ti-lightning.jpg'
        ]);

        Product::create([
            'name' => 'AMD Ryzen 7 2700X',
            'slug' => 'ryzen7-2700x',
            'detail' => '3700 MHz Up To 4300 MHz Clock, 105 Watt, 16MB Cache',
            'price' => 4139000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptas pariatur, exercitationem repellat delectus veniam temporibus accusantium ullam, libero consectetur molestiae tenetur culpa perferendis possimus totam praesentium officiis unde nesciunt.',
            'category_id' => 2,
            'picture' => 'ryzen7-2700x.jpg'
        ]);

        Product::create([
            'name' => 'AMD Ryzen 5 3600',
            'slug' => 'ryzen5-3600',
            'detail' => '3600 MHz Up To 4200 MHz Clock, 65 Watt, 32MB Cache',
            'price' => 3145000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptas pariatur, exercitationem repellat delectus veniam temporibus accusantium ullam, libero consectetur molestiae tenetur culpa perferendis possimus totam praesentium officiis unde nesciunt.',
            'category_id' => 2,
            'picture' => 'ryzen5-3600.jpg'
        ]);

        Product::create([
            'name' => 'AMD Ryzen 3 3200G',
            'slug' => 'ryzen3-3200G',
            'detail' => '3600 MHz Up To 4000 MHz Clock, 65 Watt, 4MB Cache',
            'price' => 1569000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptas pariatur, exercitationem repellat delectus veniam temporibus accusantium ullam, libero consectetur molestiae tenetur culpa perferendis possimus totam praesentium officiis unde nesciunt.',
            'category_id' => 2,
            'picture' => 'ryzen3-3200G.jpg'
        ]);

        Product::create([
            'name' => 'HyperX Cloud Alpha White Purple',
            'slug' => 'hyperx-cloud-alpha-white-purple',
            'detail' => ' ',
            'price' => 1650000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptas pariatur, exercitationem repellat delectus veniam temporibus accusantium ullam, libero consectetur molestiae tenetur culpa perferendis possimus totam praesentium officiis unde nesciunt.',
            'category_id' => 5,
            'picture' => 'cloud-alpha-white.jpg'
        ]);

        Product::create([
            'name' => 'Zowie EC2-A White',
            'slug' => 'zowie-ec2a-white',
            'detail' => ' ',
            'price' => 900000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptas pariatur, exercitationem repellat delectus veniam temporibus accusantium ullam, libero consectetur molestiae tenetur culpa perferendis possimus totam praesentium officiis unde nesciunt.',
            'category_id' => 5,
            'picture' => 'ec2a-white.png'
        ]);

        Product::create([
            'name' => 'Corsair K70 RGB Mk.2 White',
            'slug' => 'corsair-k70-white',
            'detail' => ' ',
            'price' => 2500000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptas pariatur, exercitationem repellat delectus veniam temporibus accusantium ullam, libero consectetur molestiae tenetur culpa perferendis possimus totam praesentium officiis unde nesciunt.',
            'category_id' => 5,
            'picture' => 'k70-white.jpg'
        ]);

        Product::create([
            'name' => 'Razer Raiju White',
            'slug' => 'razer-raiju-white',
            'detail' => ' ',
            'price' => 2150000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptas pariatur, exercitationem repellat delectus veniam temporibus accusantium ullam, libero consectetur molestiae tenetur culpa perferendis possimus totam praesentium officiis unde nesciunt.',
            'category_id' => 5,
            'picture' => 'razer-raiju.jpg'
        ]);
    }
}
