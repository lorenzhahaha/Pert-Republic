<?php

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
        $serial_code = array(str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10), str_random(10));
        $product_name = array("Spore", "Player Unknown's Battlegrounds", "Overwatch", "The Witcher 3: Wild Hunt", "Star Wars Battlefront II", "Destiny 2", "Grand Theft Auto V", "Minecraft", "Diablo 3", "Counter-Strike: Global Offensive", "Towerfall Ascension", "Unreal Tournament", "Worms", "Rocket League", "Quake III Arena", "Wolfenstein 2: The New Colossus", "Rainbow Six Siege", "Arma 3", "Battlefield 1", "Assassin's Creed: Origins", "Call of Duty: WWII", "Dusk", "Sea of Thieves", "Metal Gear Survive", "The Evil Within 2", "Rising Storm 2: Vietnam", "Vanquish", "Observer", "Starcraft Remastered", "Rakuen", "Hollow Knight", "Final Fantasy XIV: Stormblood", "Project Cars 2", "Hellblade: Senua's Sacrifice", "Galactic Civilization III: Crusade", "Divinity: Original Sin II", "Lone Echo", "Bayonetta");
        $developed_by = array("Maxis", "Bluehole Studio Inc.", "Blizzard Entertainment", "CD Projekt RED", "EA Dice", "Bungie", "Rockstar Games", "Mojang", "Blizzard Entertainment", "Valve", "Matt Thorson", "Epic Games", "Team17", "Psyonix", "Bullfrog Productions", "MachineGames", "Ubisoft Montreal", "Bohemia Interactive", "EA Dice", "Ubisoft Montreal", "Raven Software", "David Szymanski", "Rare", "Konami Digital Entertainment", "Tango Gameworks", "Tripwire Interactive", "Platinum Games", "Bloober Team", "Blizzard Entertainment", "Laura Shigihara", "Team Cherry", "Square Enix", "Bandai Namco Games", "Ninja Theory", "Stardock", "Larian Studios", "Ready at Dawn", "Sega");
        $product_price = array("400", "1620", "1510", "1340", "1620", "1620", "800", "450", "960", "600", "400", "900", "230", "710", "900", "800", "400", "1100", "750", "500", "300", "670", "1200", "300", "900", "400", "820", "370", "250", "350", "1200", "615", "790", "500", "895", "260", "470");
        $product_picture = array("http://firsthour.net/screenshots/spore/spore-cover.jpg", "http://cdn.images.dailystar.co.uk/dynamic/122/photos/985000/900x738/880985.jpg", "http://gamepreorders.com/wp-content/uploads/2016/03/overwatch-cover.jpg", "https://upload.wikimedia.org/wikipedia/en/0/0c/Witcher_3_cover_art.jpg", "https://vignette.wikia.nocookie.net/starwars/images/d/da/Battlefront_2.jpg/revision/latest?cb=20170415201655", "https://www.goombastomp.com/wp-content/uploads/2017/05/destiny-2-cover.png", "http://i.huffpost.com/gen/1066330/thumbs/o-ROCKSTAR-570.jpg?6", "http://www.mobygames.com/images/covers/l/319702-minecraft-playstation-4-edition-minecraft-plastic-texture-pack-playstation-4-front-cover.jpg", "https://upload.wikimedia.org/wikipedia/en/8/80/Diablo_III_cover.png", "http://vignette1.wikia.nocookie.net/cswikia/images/1/1e/Csgo_steam_store_header_latest.jpg/revision/latest?cb=20161208032134", "https://upload.wikimedia.org/wikipedia/en/5/5f/Tf2_standalonebox.jpg", "http://cdn.videogamesblogger.com/wp-content/uploads/2008/06/unreal-tournament-3-pc-boxart.jpg", "https://upload.wikimedia.org/wikipedia/en/d/d7/Worms-win-cover.jpg", "https://images.g2a.com/images/211x289/1x1x1/1548ccfc8f71/591311205bafe31cbf5cd2db", "http://theisozone.com/images/cover/windows_1493.jpg", "https://vignette1.wikia.nocookie.net/wolfenstein/images/e/e1/WolfensteinII_.jpg/revision/latest?cb=20170612090954", "https://pre00.deviantart.net/7464/th/pre/i/2015/330/9/7/rainbow_six_siege_fanart__alternative_promo_banner_by_ricardofx-d9i1aji.jpg", "https://s.blogcdn.com/www.joystiq.com/media/2013/03/arma-3-cover.jpg", "https://images.g2a.com/images/211x289/1x1x1/ecd246a93b71/5912c535ae653a75ea0db4e9", "https://i.redd.it/eyh5xojw9p2z.png", "https://upload.wikimedia.org/wikipedia/en/1/18/Call_of_Duty_WWII_Cover_Art.jpg", "https://vignette.wikia.nocookie.net/halomachinima/images/9/97/DUSK_Banner.jpg/revision/latest/scale-to-width-down/2000?cb=20130812093141", "https://upload.wikimedia.org/wikipedia/en/7/77/Sea_of_thieves_cover_art.jpg", "http://i0.kym-cdn.com/entries/icons/original/000/021/147/gamenews1471456404.jpg", "https://images.g2a.com/images/211x289/1x1x1/efd5f4342521/59df73605bafe3edd70abea0", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL5xmcxUVyMhgNaEdq_wFcdS8lbSijol5nl33Q7eDzAhYceyIh", "https://orig00.deviantart.net/6d06/f/2015/363/c/2/vanquish__cover__by_victor_125-d9lwi9c.jpg", "https://s2.gaming-cdn.com/images/products/2230/orig/2230.jpg", "https://i.ytimg.com/vi/1BzNM2pyzW8/maxresdefault.jpg", "https://f4.bcbits.com/img/a2523822730_16.jpg", "http://oceanofgames.com/wp-content/uploads/2017/02/Hollow-Knight-Free-Download.png", "https://static-ca.ebgames.ca/images/products/729195/3max.jpg", "https://www.btgames.co.za/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/P/R/PR19194BI13873_N010112408011049_PC_PROJECT_CARS_2_SZ1_1.jpg", "http://www.hellblade.com/wp-content/uploads/2016/03/HB_Poster_March_2016_Final.jpg", "https://upload.wikimedia.org/wikipedia/ru/4/46/Galactic_Civilizations_3.jpg", "https://upload.wikimedia.org/wikipedia/en/4/48/Divinity_Original_Sin_2_cover_art.jpg", "https://f4.bcbits.com/img/a3445577338_10.jpg", "https://vignette4.wikia.nocookie.net/devilmaycry/images/1/11/Bayo_Series_-_Bayo2.png/revision/latest?cb=20160302072730");

        $x = 0;
        while ($x < 36) {
            DB::table('products')->insert([
                'serial_code' => $serial_code[$x],
                'product_name' => $product_name[$x],
                'developed_by' => $developed_by[$x],
                'product_price' => $product_price[$x],
                'product_picture' => $product_picture[$x],
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),    
            ]);
            $x++;
        }

        DB::table('product_to_categories')->insert([
            'category_id' => '2',
            'serial_code' => $serial_code[0],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),            
        ]);

        DB::table('product_to_categories')->insert([
            'category_id' => '4',
            'serial_code' => $serial_code[0],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),            
        ]);

        DB::table('product_to_categories')->insert([
            'category_id' => '1',
            'serial_code' => $serial_code[1],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),            
        ]);

        DB::table('product_to_categories')->insert([
            'category_id' => '6',
            'serial_code' => $serial_code[1],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),            
        ]);

        DB::table('product_to_categories')->insert([
            'category_id' => '1',
            'serial_code' => $serial_code[2],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),            
        ]);

        DB::table('product_to_categories')->insert([
            'category_id' => '6',
            'serial_code' => $serial_code[2],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),            
        ]);

        DB::table('product_to_categories')->insert([
            'category_id' => '6',
            'serial_code' => $serial_code[3],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),            
        ]);

        DB::table('product_to_categories')->insert([
            'category_id' => '11',
            'serial_code' => $serial_code[3],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),            
        ]);

        DB::table('product_to_categories')->insert([
            'category_id' => '6',
            'serial_code' => $serial_code[4],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),            
        ]);

        DB::table('product_to_categories')->insert([
            'category_id' => '1',
            'serial_code' => $serial_code[5],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),            
        ]);

        DB::table('product_to_categories')->insert([
            'category_id' => '6',
            'serial_code' => $serial_code[5],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),            
        ]);

        DB::table('product_to_categories')->insert([
            'category_id' => '6',
            'serial_code' => $serial_code[6],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),            
        ]);

        DB::table('product_to_categories')->insert([
            'category_id' => '3',
            'serial_code' => $serial_code[6],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),            
        ]);

        DB::table('product_to_categories')->insert([
            'category_id' => '11',
            'serial_code' => $serial_code[7],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),            
        ]);

        DB::table('product_to_categories')->insert([
            'category_id' => '2',
            'serial_code' => $serial_code[7],
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),            
        ]);
    }
}
