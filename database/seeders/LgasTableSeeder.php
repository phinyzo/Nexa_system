<?php

namespace Database\Seeders;

use App\Models\Lga;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LgasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('lgas')->delete();

        // Kenyan counties (states) and their sub-counties (LGAs)
        $kenyanData = [
            // County 1: Mombasa
            1 => ["Changamwe", "Jomvu", "Kisauni", "Likoni", "Mvita", "Nyali"],
            
            // County 2: Kwale
            2 => ["Kinango", "Lunga Lunga", "Matuga", "Msambweni"],
            
            // County 3: Kilifi
            3 => ["Ganze", "Kaloleni", "Kilifi North", "Kilifi South", "Magarini", "Malindi", "Rabai"],
            
            // County 4: Tana River
            4 => ["Bura", "Galole", "Garsen"],
            
            // County 5: Lamu
            5 => ["Lamu East", "Lamu West"],
            
            // County 6: Taita-Taveta
            6 => ["Mwatate", "Taveta", "Voi", "Wundanyi"],
            
            // County 7: Garissa
            7 => ["Daadab", "Fafi", "Garissa Township", "Hulugho", "Ijara", "Lagdera"],
            
            // County 8: Wajir
            8 => ["Eldas", "Tarbaj", "Wajir East", "Wajir North", "Wajir South", "Wajir West"],
            
            // County 9: Mandera
            9 => ["Banissa", "Lafey", "Mandera East", "Mandera North", "Mandera South", "Mandera West"],
            
            // County 10: Marsabit
            10 => ["Laisamis", "Moyale", "North Horr", "Saku"],
            
            // County 11: Isiolo
            11 => ["Isiolo", "Merti", "Garbatulla"],
            
            // County 12: Meru
            12 => ["Buuri", "Igembe Central", "Igembe North", "Igembe South", "Imenti Central", "Imenti North", "Imenti South", "Tigania East", "Tigania West"],
            
            // County 13: Tharaka-Nithi
            13 => ["Chuka", "Maara", "Tharaka"],
            
            // County 14: Embu
            14 => ["Embu East", "Embu North", "Embu West", "Mbeere North", "Mbeere South"],
            
            // County 15: Kitui
            15 => ["Kitui Central", "Kitui East", "Kitui Rural", "Kitui South", "Kitui West", "Mwingi Central", "Mwingi North", "Mwingi West"],
            
            // County 16: Machakos
            16 => ["Kathiani", "Machakos Town", "Masinga", "Matungulu", "Mwala", "Yatta"],
            
            // County 17: Makueni
            17 => ["Kibwezi East", "Kibwezi West", "Kilome", "Makueni", "Mbooni", "Nguu/Masumba"],
            
            // County 18: Nyandarua
            18 => ["Kinangop", "Kipipiri", "Ndaragwa", "Ol Kalou", "Ol Jorok"],
            
            // County 19: Nyeri
            19 => ["Kieni East", "Kieni West", "Mathira East", "Mathira West", "Mukurweini", "Nyeri Central", "Nyeri South", "Tetu"],
            
            // County 20: Kirinyaga
            20 => ["Gichugu", "Kirinyaga Central", "Kirinyaga East", "Kirinyaga West", "Mwea East", "Mwea West"],
            
            // County 21: Murang'a
            21 => ["Gatanga", "Kahuro", "Kandara", "Kangema", "Kigumo", "Kiharu", "Mathioya", "Murang'a East", "Murang'a South"],
            
            // County 22: Kiambu
            22 => ["Gatundu North", "Gatundu South", "Githunguri", "Juja", "Kabete", "Kiambaa", "Kiambu", "Kikuyu", "Limuru", "Ruiru", "Thika Town", "Lari"],
            
            // County 23: Turkana
            23 => ["Kibish", "Loima", "Turkana Central", "Turkana East", "Turkana North", "Turkana South", "Turkana West"],
            
            // County 24: West Pokot
            24 => ["Central Pokot", "North Pokot", "Pokot South", "West Pokot"],
            
            // County 25: Samburu
            25 => ["Samburu East", "Samburu North", "Samburu West"],
            
            // County 26: Trans-Nzoia
            26 => ["Cherangany", "Endebess", "Kiminini", "Kwanza", "Saboti"],
            
            // County 27: Uasin Gishu
            27 => ["Ainabkoi", "Kapseret", "Kesses", "Moiben", "Soy", "Turbo"],
            
            // County 28: Elgeyo-Marakwet
            28 => ["Keiyo North", "Keiyo South", "Marakwet East", "Marakwet West"],
            
            // County 29: Nandi
            29 => ["Aldai", "Chesumei", "Emgwen", "Mosop", "Nandi Hills", "Tinderet"],
            
            // County 30: Baringo
            30 => ["Baringo Central", "Baringo North", "Baringo South", "Eldama Ravine", "Mogotio", "Tiaty"],
            
            // County 31: Laikipia
            31 => ["Laikipia Central", "Laikipia East", "Laikipia North", "Laikipia West", "Nyahururu"],
            
            // County 32: Nakuru
            32 => ["Bahati", "Gilgil", "Kuresoi North", "Kuresoi South", "Molo", "Naivasha", "Nakuru Town East", "Nakuru Town West", "Njoro", "Rongai", "Subukia"],
            
            // County 33: Narok
            33 => ["Narok East", "Narok North", "Narok South", "Narok West", "Transmara East", "Transmara West"],
            
            // County 34: Kajiado
            34 => ["Isinya", "Kajiado Central", "Kajiado East", "Kajiado North", "Kajiado West", "Loitokitok", "Mashuuru"],
            
            // County 35: Kericho
            35 => ["Ainamoi", "Belgut", "Bureti", "Kipkelion East", "Kipkelion West", "Soin/Sigowet"],
            
            // County 36: Bomet
            36 => ["Bomet Central", "Bomet East", "Chepalungu", "Konoin", "Sotik"],
            
            // County 37: Kakamega
            37 => ["Butere", "Kakamega Central", "Kakamega East", "Kakamega North", "Kakamega South", "Khwisero", "Lugari", "Lukuyani", "Lurambi", "Matungu", "Mumias East", "Mumias West", "Navakholo"],
            
            // County 38: Vihiga
            38 => ["Emuhaya", "Hamisi", "Luanda", "Sabatia", "Vihiga"],
            
            // County 39: Bungoma
            39 => ["Bumula", "Kabuchai", "Kanduyi", "Kimilili", "Mt. Elgon", "Sirisia", "Tongaren", "Webuye East", "Webuye West"],
            
            // County 40: Busia
            40 => ["Budalangi", "Butula", "Funyula", "Nambale", "Teso North", "Teso South"],
            
            // County 41: Siaya
            41 => ["Alego Usonga", "Bondo", "Gem", "Rarieda", "Ugenya", "Ugunja"],
            
            // County 42: Kisumu
            42 => ["Kisumu Central", "Kisumu East", "Kisumu West", "Muhoroni", "Nyakach", "Nyando", "Seme"],
            
            // County 43: Homa Bay
            43 => ["Homa Bay Town", "Kabondo Kasipul", "Karachuonyo", "Kasipul", "Mbita", "Ndhiwa", "Rangwe", "Suba"],
            
            // County 44: Migori
            44 => ["Awendo", "Kuria East", "Kuria West", "Mabera", "Ntimaru", "Rongo", "Suna East", "Suna West", "Uriri"],
            
            // County 45: Kisii
            45 => ["Bobasi", "Bomachoge Borabu", "Bomachoge Chache", "Bonchari", "Kitutu Chache North", "Kitutu Chache South", "Nyaribari Chache", "Nyaribari Masaba", "South Mugirango"],
            
            // County 46: Nyamira
            46 => ["Borabu", "Manga", "Masaba North", "Nyamira North", "Nyamira South"],
            
            // County 47: Nairobi
            47 => ["Dagoretti North", "Dagoretti South", "Embakasi Central", "Embakasi East", "Embakasi North", "Embakasi South", "Embakasi West", "Kamukunji", "Kasarani", "Kibra", "Lang'ata", "Makadara", "Mathare", "Roysambu", "Ruaraka", "Starehe", "Westlands"]
        ];

        // Seed the data
        foreach ($kenyanData as $countyId => $subCounties) {
            foreach ($subCounties as $subCounty) {
                Lga::create([
                    'state_id' => $countyId,
                    'name' => $subCounty
                ]);
            }
        }
    }
}