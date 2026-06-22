<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lga;
use App\Models\State;
use Carbon\Carbon;


class LgaSeeder extends Seeder
{
    public function run()
    {
        // Abia LGAs
        $abia = State::where('name', 'Abia')->first();
        $abiaLgas = [
            'Aba',
            'Umuaahia',
            'Arochukwu',
            'Ohafia',
            'Ini',
            'Obi Ngwa',
            'Umuahia South',
            'Umuahia North',
            'Ikwuano',
            'Isiukwato',
            'Aba South',
            'Aba North',
            'Isiala Ngwa North',
            'Isiala Ngwa South',
            'Obingwa',
            'Umunneochi',
            'Ugwunagbo',
            'Ukwa East'
        ];

        foreach ($abiaLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $abia->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }

        // Adamawa LGAs
        $adamawa = State::where('name', 'Adamawa')->first();
        $adamawaLgas = [
            'Yola',
            'Jimeta',
            'Mubi (town)',
            'Ganye',
            'Mayo Belwa',
            'Michika',
            'Guyuk',
            'Jada',
            'Mubi North',
            'Numan',
            'Hong',
            'Madagali',
            'Fufore',
            'Gombi',
            'Girei',
            'Yola South',
            'Yola North',
            'Lamurde',
            'Tungo Adamawa',
            'Demsa',
            'Song',
            'Shelleng',
            'Maiha',
            'Mubi South',
            'Mugulbu',
            'Belel',
            'Gashaka',
            'Toungo',
            'Alkalawa',
            'Labbare',
            'Mayo Lope',
            'Faro-et-Déo',
            'Djerem',
            'Mayo-Banyo',
            'Atani',
            'Orumba North'
        ];

        foreach ($adamawaLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $adamawa->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }



        // Akwa Ibom LGAs
        $akwaIbom = State::where('name', 'Akwa Ibom')->first();
        $akwaIbomLgas = [
            'Uyo',
            'Ikot Ekpene',
            'Eket',
            'Abak',
            'Oron',
            'Ibeno',
            'Ikot Abasi',
            'Itu',
            'Etinan',
            'Uruan',
            'Ibiono Ibom',
            'Mkpat Enin',
            'Ibesikpo Asutan',
            'Nsit Ubium',
            'Ukanafun',
            'Ikono',
            'Esit Eket',
            'Nsit Ibom',
            'Mbo',
            'Udung Uko',
            'Essien Udim',
            'Oruk Anam',
            'Etim Ekpo',
            'Obot Akara',
            'Okobo',
            'Urue Offong/Oruko',
            'Idu',
            'Onna',
            'Nsit Atai',
            'Ika',
            'Ikot Ukpong',
            'Ikot Ibritan',
            'Eastern Obolo',
            'Ikot Okoro',
            'Ekpene Ukim',
            'Ekparakwa',
            'Ikot Udo Abia',
            'Ini',
            'Eyofin',
            'Asanga',
            'Ikot Akpabio',
            'Ikot Afaha',
            'Adadia',
            'Ikot Udo',
            'Esuk Inwang',
            'Eyo Nsek',
            'Ikot Eba',
            'Ikot Mfon',
            'Eman Ikot Ebo'
        ];

        foreach ($akwaIbomLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $akwaIbom->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }



        // Anambra LGAs
        $anambra = State::where('name', 'Anambra')->first();
        $anambraLgas = [
            'Awka',
            'Onitsha',
            'Nnewi',
            'Aguleri',
            'Enugwu Ukwu',
            'Okija',
            'Abagana',
            'Agulu',
            'Obosi',
            'Ihiala',
            'Nkpor',
            'Nsugbe',
            'Nibo',
            'Anambra East',
            'Alor, Anambra',
            'Anambra West',
            'Ogidi, Anambra',
            'Ayamelum',
            'Amawbia',
            'Nzam',
            'Umuawulu',
            'Awka South',
            'Ogbaru',
            'Ekwulobia',
            'Oba, Anambra',
            'Oyi',
            'Umuleri',
            'Uli, Anambra',
            'Anaocha',
            'Idemili South',
            'Idemili North',
            'Onitsha North',
            'Dunukofia',
            'Otuocha',
            'Awka Etiti',
            'Oraukwu, Anambra',
            'Ekwusigo',
            'Aguata',
            'Adazi Nnukwu',
            'Ajalli',
            'Umudioka',
            'Abatete',
            'Okpoko',
            'Nanka',
            'Ozubulu',
            'Umunya',
            'Awka North',
            'Igbo Ukwu',
            'Katagum',
            'Ganjuwa'
        ];

        foreach ($anambraLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $anambra->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }


        // Baucho LGAs
        $bauchi = State::where('name', 'Bauchi')->first();
        $bauchiLgas = [
            'Bauchi',
            'Misau',
            'Jamaare',
            'Alkaleri',
            'Ningi',
            'Darazo',
            'Giade',
            'Kirfi',
            'Gamawa',
            'Bogoro',
            'Toro, Nigeria',
            'Tafawa Balewa',
            'Itas',
            'Gadau',
            'Warji',
            'Damban',
            'Shira, Nigeria',
            'Zaki, Nigeria',
            'Disina',
            'Faggo',
            'Zadawa',
            'Doguwa',
            'Taura Nigeria',
            'Lere',
            'Foggo',
            'Billiri',
            'Jos North',
            'Nafada'
        ];

        foreach ($bauchiLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $bauchi->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }


        // bayelsa lga
        // Anambra LGAs
        $bayelsa = State::where('name', 'Bayelsa')->first();
        $bayelsaLgas = [
            'Yenagoa',
            'Brass',
            'Southern Ijaw',
            'Nembe',
            'Ogbia',
            'Sagbama',
            'Twon-Brass',
            'Oloibiri',
            'Kolokuma/Opokuma',
            'Ekeremor',
            'Otuoke',
            'Brass, Nigeria',
            'Odioma',
            'Brass Island',
            'Ologi',
            'Kaiama',
            'Bomadi'
        ];

        foreach ($bayelsaLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $bayelsa->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }

        // benue
        $benue = State::where('name', 'Benue')->first();
        $benueLgas = [
            'Makurdi',
            'Katsina Ala',
            'Vande Ikya',
            'Gboko',
            'Otukpo',
            'Oju',
            'Igumale',
            'Buruku',
            'Agatu',
            'Gwer West',
            'Gwer East',
            'Oturkpo',
            'Ado, Nigeria',
            'Obi, Nigeria',
            'Guma, Nigeria',
            'Kwande',
            'Ohimini',
            'Konshisha',
            'Ushongo',
            'Okpokwu',
            'Logo, Nigeria',
            'Tarka',
            'Ukum',
            'Ogbadibo',
            'Wukari',
            'Otukpa',
            'Agbadi',
            'Mbaanku',
            'Lokoja'
        ];

        foreach ($benueLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $benue->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }

        // borno
        $borno = State::where('name', 'Borno')->first();
        $bornoLgas = [
            'Maiduguri',
            'Biu, Nigeria',
            'Damboa',
            'Chibok',
            'Kukawa',
            'Bama, Borno',
            'Konduga',
            'Gwoza',
            'Dikwa',
            'Monguno',
            'Ngala Borno',
            'Magumeri',
            'Shani, Nigeria',
            'Marte, Borno',
            'Askira/Uba',
            'Mafa Borno',
            'Gubio',
            'Wamdeo',
            'Doro Gowon',
            'Bayo, Nigeria',
            'Gambaru Borno',
            'Abadam',
            'Dalori',
            'Kaga, Nigeria',
            'Rann, Borno',
            'Mobbar',
            'Hawul',
            'Guzamala',
            'Nganzai',
            'Mandaragirau',
            'Kala/Balge',
            'Cross Kauwa',
            'Kwaya Kusar',
            'Bornu Yassa',
            'Jere, Borno',
            'Kogu, Biu',
            'Damasak',
            'Alarge',
            'Tarmua',
            'Lassa Borno, Nigeria',
            'Isoko North'
        ];

        foreach ($bornoLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $borno->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }




        $crivers = State::where('name', 'Cross River')->first();
        $criversLgas = [
            'Calabar',
            'Ogoja',
            'Obudu',
            'Akamkpa',
            'Ugep',
            'Obubra',
            'Odukpani',
            'Ikom',
            'Obanliku',
            'Biase',
            'Akpabuyo',
            'Boki, Nigeria',
            'Yala, Nigeria',
            'Etung',
            'Calabar South',
            'Bekwarra',
            'Abi, Cross River',
            'Akpap Okoyong',
            'Okuku, Cross River State',
            'Adadama',
            'Mkpani',
            'Usumutong',
            'Ediba',
            'Idomi',
            'Ababene',
            'Epenti',
            'Ekakpamre'
        ];

        foreach ($criversLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $crivers->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }


        $delta = State::where('name', 'Delta')->first();
        $deltaLgas = [
            'Warri',
            'Ughelli',
            'Sapele',
            'Asaba',
            'Abraka',
            'Burutu',
            'Effurun',
            'Oghara',
            'Ozoro',
            'Koko, Delta',
            'Obiariku',
            'Ovwian',
            'Orerokpe',
            'Orhuwhorun',
            'Ukwuani',
            'Patani, Delta',
            'Emevor',
            'Ogwashi-Ukwu',
            'Isoko South',
            'Aladja',
            'Arade Delta, Nigeria',
            'Agbarho',
            'Igbuku',
            'Udu, Nigeria',
            'Onicha-Ugbo',
            'Oyede',
            'Illah',
            'Agbara-Otor',
            'Emede',
            'Aviara Delta',
            'Ogbe-Ijoh',
            'Okwagbe',
            'Ofagbe',
            'Ubulu-uku',
            'Egini',
            'Osubi',
            'Igbuzo',
            'Evwreni',
            'Kwale',
            'Warri North',
            'Eku, Delta',
            'Obomkpa',
            'Igbodo',
            'Ika South',
            'Uvwie',
            'Oshimili South',
            'Ekrokpe',
            'Imode',
            'Asaba Assay'
        ];

        foreach ($deltaLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $delta->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }


        $ebonyi = State::where('name', 'Ebonyi')->first();
        $ebonyiLgas = [
            'Abakaliki',
            'Afikpo',
            'Afikpo North',
            'Ikwo',
            'Ishiagu',
            'Onueke',
            'Ezza North',
            'Onicha',
            'Ivo, Ebonyi',
            'Izzi (Ebonyi)',
            'Unwana',
            'Ohaozara',
            'Ishielu',
            'Ohaukwu',
            'Ezza South',
            'Ishieke',
            'Afikpo South',
            'Nkalagu',
            'Nkanu East'
        ];

        foreach ($ebonyiLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $ebonyi->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }


        $edo = State::where('name', 'Edo')->first();
        $edoLgas = [
            'Benin City',
            'Ekpoma',
            'Auchi',
            'Uromi',
            'Ibilo',
            'Okpekpe',
            'Ikpoba-Okha',
            'Egor',
            'Esan West',
            'Owan East',
            'Esan North-East',
            'Iguegben',
            'Esan Central',
            'Uzebba',
            'Agenebode',
            'Okpella',
            'Ewu Edo, Nigeria',
            'Ogwa',
            'Igbanke',
            'Oredo',
            'Ososo',
            'Akoko-Edo',
            'Orhionmwon',
            'Ovia South-West',
            'Ovia North-East',
            'Etsako Central',
            'Etsako West',
            'Etsako East',
            'Esan South-East',
            'Uhunmwonde',
            'Owan West',
            'Jattu',
            'Ughoton',
            'Obadan',
            'Iguododo',
            'Ohordua',
            'Uokha',
            'Iboa Rivers',
            'Ihievbe',
            'Iyamho'
        ];

        foreach ($edoLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $edo->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }


        $ekiti = State::where('name', 'Ekiti')->first();
        $ekitiLgas = [
            'Ado Ekiti',
            'Ijero Ekiti',
            'Ido-Osi',
            'Efon Alaaye',
            'Omuo',
            'Ilawe Ekiti',
            'Ekiti South-West',
            'Irepodun/Ifelodun',
            'Emure',
            'Ise/Orun',
            'Ise Ekiti',
            'Oye Ekiti',
            'Iyin Ekiti',
            'Ekiti West',
            'Ekiti East',
            'Ilejemeje',
            'Moba',
            'Ikoro (Ekiti State)',
            'Gbonyin',
            'Ire Ekiti',
            'Okemesi'
        ];

        foreach ($ekitiLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $ekiti->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }


        $enugu = State::where('name', 'Enugu')->first();
        $enuguLgas = [
            'Nsukka',
            'Udi Enugu',
            'Awgu',
            'Ngwo',
            'Oji River',
            'Eha Amufu',
            'Uzo-Uwani',
            'Ohum',
            'Achi, Enugu',
            'Enugu North',
            'Abor, Enugu',
            'Ezeagu',
            'Udenu',
            'Enugu East',
            'Aninri',
            'Aku, Enugu',
            'Ugbo Enugu',
            'Enugu South',
            'Nkanu West',
            'Isi-Uzo',
            'Igbo-Etiti',
            'Igbo-Eze-North',
            'Okpogho',
            'Igbo-Eze-South',
            'Umulokpa',
            'Umudim',
            'Ikolo',
            'Ozara',
            'Akpawfu',
            'Abi Nigeria'
        ];

        foreach ($enuguLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $enugu->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }

        $abuja = State::where('name', 'FCT')->first();
        $abujaLgas = [
            'Bamburu',
            'Gwarinpa',
            'Abuja Airport',
            'Gwagwalada',
            'Maitama',
            'Garki',
            'Asokoro',
            'Karu',
            'Kubwa',
            'Kurunduma',
            'Jikwoyi',
            'Masaka',
            'Karshi',
            'Yoba',
            'Zuba',
            'Wuse',
            'Jabi',
            'Three Arms Zone',
            'Utako',
            'Kwaba',
            'Gudu',
            'Zone E',
            'Durumi',
            'Kado',
            'Mabushi',
            'Wuye',
            'Central Business District',
            'Gwarinpa II',
            'Yar Kufoji',
            'Dakko'
        ];

        foreach ($abujaLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $abuja->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }


        $gombe = State::where('name', 'Gombe')->first();
        $gombeLgas = [
            'Akko',
            'Dukku',
            'Funakaye',
            'Gombe',
            'Kaltungo',
            'Kwami',
            'Yamaltu',
            'Deba',
            'Balanga',
            'Billiri',
            'Nafada',
            'Shongom',
            'Yamaltu/Deba'
        ];

        foreach ($gombeLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $gombe->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }


        $imo = State::where('name', 'Imo')->first();
        $imoLgas = [
            'Owerri',
            'Orlu',
            'Okigwe',
            'Oguta',
            'Nkwerre',
            'Ohaji/Egbema',
            'Ehime - Mbano',
            'Ezinihitte Mbaise',
            'Owerri North',
            'Aboh-Mbaise',
            'Emekuku',
            'Ihiagwa',
            'Ihitte-Uboma',
            'Umuagwo',
            'Ahiazu-Mbaise',
            'Ozara, Imo',
            'Isu',
            'Ahiara',
            'Ejemekwuru',
            'Ubomiri',
            'Umunoha',
            'Mbieri',
            'Nnarambia',
            'Amaimo',
            'Eziama Obiato',
            'Ogbaku',
            'Irete',
            'Ngugo',
            'Njaba',
            'Izombe',
            'Naze, Imo',
            'Obowo',
            'Owerri West',
            'Ideato North',
            'Umuaka',
            'Awo-Omamma',
            'Orodo',
            'Iho Imo',
            'Ikembara',
            'Amakohia',
            'Awaka',
            'Amatta',
            'Emii, Imo',
            'Akalovo',
            'Ogbe',
            'Ochicha',
            'Ihite',
            'Uzuaba',
            'Isuobiangwu'
        ];

        foreach ($imoLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $imo->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }



        $jigawa = State::where('name', 'Jigawa')->first();
        $jigawaLgas = [
            'Dutse',
            'Gumel',
            'Hadejia',
            'Birnin Kudu',
            'Ringim',
            'Kafin Hausa',
            'Gwaram',
            'Kazaure',
            'Maigatari',
            'Gagarawa',
            'Jahun',
            'Babura',
            'Kiyawa',
            'Biriniwa',
            'Gwiwa',
            'Kiri Kasama',
            'Auyo',
            'Kaugama',
            'Miga, Jigawa',
            'Sule Tankakar',
            'Roni, Jigawa',
            'Malam Maduri',
            'Taura, Jigawa',
            'Guri, Jigawa',
            'Yankwashi',
            'Buji',
            'Amaryawa',
            'Katanga'
        ];

        foreach ($jigawaLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $jigawa->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }


        $kaduna = State::where('name', 'Kaduna')->first();
        $kadunaLgas = [
            'Zaria',
            'Kaduna South',
            'Kafanchan',
            'Kachia',
            'Kaduna North',
            'Igabi',
            'Kaura Kaduna, Nigeria',
            'Kagoro',
            'Giwa Nigeria',
            'Chikun',
            'Birnin Gwari',
            'Sabon Gari',
            'Kagarko',
            'Zangon Kataf',
            'Ikara',
            'Jema\'a',
            'Jaba, Kaduna State',
            'Soba, Kaduna State',
            'Kwoi',
            'Kajuru',
            'Makarfi',
            'Kauru',
            'Sanga',
            'Jaji, Nigeria',
            'Zungeru',
            'Zonzon',
            'Nok Nigeria',
            'Kubau',
            'Samaru Kataf',
            'Badarawa',
            'Wusasa',
            'Rigasa',
            'Bafoi',
            'Rahama Pari',
            'Manchok',
            'Kubacha',
            'Kanai, Nigeria',
            'Saminaka'
        ];

        foreach ($kadunaLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $kaduna->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }



        $kano = State::where('name', 'Kano')->first();
        $kanoLgas = [
            'Gwale',
            'Gaya',
            'Fagge',
            'Karaye',
            'Dala, Kano',
            'Sumaila',
            'Dawakin Kudu',
            'Dawakin Tofa',
            'Ajingi',
            'Ungogo',
            'Gwarzo',
            'Dambatta',
            'Wudil',
            'Bichi',
            'Rano Kano, Nigeria',
            'Kumbotso',
            'Minjibir',
            'Kura',
            'Bagwai',
            'Bebeji',
            'Takai Kano',
            'Shanono Kano',
            'Tofa',
            'Bunkure',
            'Gezawa',
            'Tudun Wada',
            'Rimin Gado',
            'Makoda',
            'Rogo Kano',
            'Garko',
            'Albasu',
            'Kunchi',
            'Kabo',
            'Kiru',
            'Garum Mallam',
            'Tsanyawa',
            'Warawa',
            'Madobi',
            'Kibiya',
            'Gabasawa',
            'Gwanki',
            'Tamburawa',
            'Fulatan'
        ];

        foreach ($kanoLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $kano->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }

        $katsina = State::where('name', 'Katsina')->first();
        $katsinaLgas = [
            'Funtua',
            'Jibia',
            'Dutsin-Ma',
            'Daura',
            'Malumfashi',
            'Kankia',
            'Musawa',
            'Danja',
            'Dandume',
            'Baure',
            'Kankara',
            'Cheranchi',
            'Kaita',
            'Kusada',
            'Dan Musa',
            'Maiadua',
            'Sabuwa',
            'Faskari',
            'Dutsi',
            'Ingawa',
            'Kafur',
            'Bindawa',
            'Mashi',
            'Sandamu',
            'Mani',
            'Rimi',
            'Kurfi',
            'Safana',
            'Matazu',
            'Girka'
        ];

        foreach ($katsinaLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $katsina->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }

        $kebbi = State::where('name', 'Kebbi')->first();
        $kebbiLgas = [
            'Birnin Kebbi',
            'Baguda Kebbi',
            'Zuru',
            'Jega',
            'Maiyama',
            'Shanga Kebbi',
            'Koko',
            'Besse',
            'Wasagu',
            'Danko',
            'Yauri',
            'Bunza',
            'Gwandu',
            'Bin Yauri',
            'Kalgo',
            'Sakaba',
            'Aleiro',
            'Suru Kebbi',
            'Augie',
            'Ngaski',
            'Arewa Dandi',
            'Yelwa',
            'Fakai',
            'Illo Kebbi',
            'Gummi',
            'Aliero',
            'Dandi',
            'Magama',
            'Bakori',
            'Zango',
            'Batagarawa',
            'Batsari'
        ];

        foreach ($kebbiLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $kebbi->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }



        $kogi = State::where('name', 'Kogi')->first();
        $kogiLgas = [
            'Dekina',
            'Okene',
            'Kabba Kogi',
            'Ankpa',
            'Koton Karfe',
            'Ajaokuta',
            'Anyigba',
            'Mopa-Muro',
            'Kabba/Bunu',
            'Okehi',
            'Ijumu',
            'Ogaminan',
            'Ogidi',
            'Itakpe',
            'Obajana',
            'Ogori',
            'Magongo',
            'Mopa',
            'Kogi',
            'Bassa',
            'Ofu',
            'Yagba East',
            'Adavi',
            'Ibaji',
            'Omala',
            'Ejule',
            'Iyah Gbede',
            'Igalamela-Odolu',
            'Olamaboro',
            'Aiyetoro Gbede',
            'Okenyi',
            'Ayegunle',
            'Takete-Isao',
            'Ijagbe',
            'Amuro'
        ];

        foreach ($kogiLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $kogi->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }


        $kwara = State::where('name', 'Kwara')->first();
        $kwaraLgas = [
            'Ilorin',
            'Offa',
            'Pategi',
            'Jebba',
            'Esie',
            'Lafiagi',
            'Ajasse Ipo',
            'Oke Onigbin',
            'Edidi',
            'Isanlu Isin',
            'Omupo',
            'Aran-Orin',
            'Isin',
            'Ijara Isin',
            'Ilala',
            'Ilorin East',
            'Asa, Kwara',
            'Baruten',
            'Buari',
            'Moro',
            'Oke Ero',
            'Ekiti',
            'Edu',
            'Iloffa',
            'Oyun',
            'Erin-Ile',
            'Okanle',
            'Igbonla',
            'Babaloma',
            'Yagba West',
            'Egbe',
            'Oba-Igbomina',
            'Share'
        ];

        foreach ($kwaraLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $kwara->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }


        $lagos = State::where('name', 'Lagos')->first();
        $lagosLgas = [
            'Ikeja',
            'Badagry',
            'Lekki',
            'Epe',
            'Ikorodu',
            'Ebute Metta',
            'Ajeromi-Ifelodun',
            'Mushin',
            'Apapa',
            'Kosofe',
            'Somolu',
            'Yaba',
            'Makoko',
            'Ojo',
            'Alimosho',
            'Surulere',
            'Imota',
            'Amuwo Odofin',
            'Sagamu',
            'Irewe',
            'Akesan',
            'Agbado-Oke Odo',
            'Agboyi Ketu',
            'Apapa Iganmu',
            'Ayobo-Ipaja',
            'Badagry West',
            'Bariga',
            'Coker-Aguda',
            'Egbe-Idimu',
            'Ejigbo',
            'Eredo',
            'Eti-Osa East',
            'Iba',
            'Ifelodun',
            'Igando-Ikotun',
            'Igbogbo Baiyeku',
            'Ijede',
            'Ikorodu North',
            'Ikorodu West',
            'Ikosi Ejinrin',
            'Ikosi/Isheri',
            'Ikoyi/Obalende',
            'Iru, Victoria Island',
            'Isolo',
            'Itire-Ikate',
            'Lagos Island East',
            'Ojokoro',
            'Ojodu',
            'Odi-Olowo',
            'Mosan-Okunola',
            'Olorunda',
            'Onigbongbo',
            'Oriade',
            'Orile Agege',
            'Oto Awori',
            'Victoria Island',
            'Festac Town',
            'Ikotun',
            'Ipaja',
            'Ilupeju',
            'Gbagada',
            'Abule Egba',
            'University Of Lagos',
            'Ojota',
            'Alaba',
            'Ikoyi',
            'Ikeja GRA',
            'Akoka',
            'Oregun',
            'Idimu',
            'Opebi',
            'Ajao Estate',
            'Satellite Town',
            'Banana Island',
            'Alagbado',
            'Ayobo',
            'Ijegun',
            'Orile Iganmu',
            'Alakuko',
            'Maroko',
            'Ijora',
            'Mile 12',
            'Kirikiri',
            'Tincan Island',
            'Isheri',
            'Dopemu',
            'Jibowu',
            'Fadeyi',
            'Ikate',
            'Ijaiye',
            'Ilasamaja',
            'Amukoko',
            'Isheri Osun',
            'Igbobi',
            'Isheri Olofin',
            'Ikosi Ketu',
            'Mafoluku Oshodi',
            'Agidingbi',
            'Sabo Yaba',
            'Oke Ira',
            'Shogunle',
            'Abule Ijesha'
        ];

        foreach ($lagosLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $lagos->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }


        $nassarawa = State::where('name', 'Nasarawa')->first();
        $nassarawaLgas = [
            'Keffi',
            'Toto',
            'Doma',
            'Nassarawa Egon',
            'Mararaba',
            'Akwanga',
            'Wamba',
            'Lafia',
            'Keana',
            'New Nyanya',
            'Umaisha',
            'Alizaga',
            'Loko',
            'Laminga',
            'Obi',
            'Kokouna',
            'Awe',
            'Ohizi Ogabo',
            'Ara Town',
            'Ado',
            'Masaka',
            'New Karshi',
            'Marmara Town',
            'Nassarawa Egon'
        ];

        foreach ($nassarawaLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $nassarawa->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }


        $niger = State::where('name', 'Niger')->first();
        $nigerLgas = [
            'Niamey',
            'Zinder',
            'Maradi',
            'Tahoua',
            'Dosso',
            'Agadez',
            'Birnin Konni',
            'Tessaoua',
            'Dogondoutchi',
            'Gaya',
            'Diffa',
            'Arlit',
            'N\'Guigmi',
            'Madaoua',
            'Madarounfa',
            'Matameye',
            'Filingué',
            'Abalak',
            'Maine Soroa',
            'Tchin-Tabaraden',
            'Bilma',
            'Gouré',
            'Magaria',
            'Illela',
            'Dakoro',
            'Tanout',
            'Tillabéri',
            'Mayahi',
            'Aguié',
            'Ayorou',
            'Ouallam',
            'Say',
            'Mirriah',
            'Tibiri',
            'Kollo',
            'Ingall Tchirozerine',
            'Téra Department',
            'Bosso',
            'Iferouane',
            'Guidimouni',
            'Birnin Gaoure',
            'Keita',
            'Tera',
            'Timia',
            'Bouza',
            'Guidan Roumdji',
            'Djado',
            'Aberbissinat',
            'Malbaza',
            'Abala',
            'Ayourou',
            'Balléyara',
            'Birni Ngaouré',
            'Birni Nkonni',
            'Gazaoua',
            'Guidan Roumji',
            'Illéla',
            'Maïné-Soroa',
            'Mirria',
            'Nguigmi',
            'Tchintabaraden',
            'Téra',
            'Torodi'
        ];

        foreach ($nigerLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $niger->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }


        $ogun = State::where('name', 'Ogun')->first();
        $ogunLgas = [
            'Abeokuta',
            'Ijebu Ode',
            'Sagamu',
            'Ota',
            'Ifo',
            'Owode',
            'Ilaro',
            'Ikenne',
            'Ijebu Igbo',
            'Ayetoro',
            'Igbesa',
            'Iperu',
            'Ilishan',
            'Odogbolu',
            'Ado Odo',
            'Imeko',
            'Ikenne',
            'Odogbolu',
            'Ikenne',
            'Shagamu',
            'Ijebu East',
            'Ijebu North',
            'Ijebu North East',
            'Ijebu Waterside',
            'Ifo',
            'Ikenne',
            'Ogun Waterside'
        ];

        foreach ($ogunLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $ogun->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }


        $ondo = State::where('name', 'Ondo')->first();
        $ondoLgas = [
            'Akure',
            'Ondo City',
            'Owo',
            'Ikare',
            'Okitipupa',
            'Igbokoda',
            'Ile-Oluji',
            'Idanre',
            'Igbara Oke',
            'Ifon',
            'Ode Aye',
            'Irun Akoko',
            'Oka Akoko',
            'Akungba Akoko',
            'Ijare',
            'Igbara-Oke',
            'Ilara Mokin',
            'Igbara Odo',
            'Aiyede',
            'Okitipupa',
            'Ilutitun',
            'Igbokoda',
            'Erusu Akoko',
            'Ajue',
            'Ore',
            'Erunwon',
            'Odo Iranyin',
            'Oba Akoko',
            'Oke-Igbo',
            'Oba Ile',
            'Okeluse',
            'Emure-Ile',
            'Owena'
        ];

        foreach ($ondoLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $ondo->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }


        $osun = State::where('name', 'Osun')->first();
        $osunLgas = [
            'Osogbo',
            'Ilesa',
            'Ile-Ife',
            'Ede',
            'Ikirun',
            'Iwo',
            'Ejigbo',
            'Ila Orangun',
            'Ipetumodu',
            'Ibokun',
            'Oke Ila',
            'Ikire',
            'Iree',
            'Ifon Osun',
            'Otan Ayegbaju',
            'Odo Otin',
            'Iragbiji',
            'Esa Oke',
            'Modakeke',
            'Oke-Ila Orangun',
            'Iperindo',
            'Oriade',
            'Olorunda',
            'Ayedaade',
            'Boluwaduro',
            'Atakunmosa',
            'Ede South',
            'Obokun',
            'Orolu',
            'Osun',
            'Egbedore',
            'Odo Otin',
            'Boripe'
        ];

        foreach ($osunLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $osun->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }


        $oyo = State::where('name', 'Oyo')->first();
        $oyoLgas = [
            'Ibadan',
            'Oyo',
            'Ogbomoso',
            'Iseyin',
            'Saki',
            'Igboho',
            'Igbo Ora',
            'Okeho',
            'Fiditi',
            'Eruwa',
            'Otu',
            'Kisi',
            'Iroko',
            'Moniya',
            'Apata',
            'Ojoo',
            'Agbowo',
            'Dugbe',
            'Oje',
            'Idi Ayunre',
            'Oluyole',
            'Iyana Church',
            'Akobo',
            'Odo Ona',
            'Alakia',
            'Akinyele',
            'Lagelu',
            'Ona Ara',
            'Orire',
            'Irepo',
            'Olorunsogo',
            'Ogbomosho South',
            'Ogbomosho North',
            'Surulere',
            'Oluyole',
            'Egbeda',
            'Ido'
        ];

        foreach ($oyoLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $oyo->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }


        $plateau = State::where('name', 'Plateau')->first();
        $plateauLgas = [
            'Jos',
            'Bukuru',
            'Pankshin',
            'Shendam',
            'Langtang',
            'Mangu',
            'Bokkos',
            'Riyom',
            'Barikin Ladi',
            'Wase',
            'Mikang',
            'Kanke',
            'Kanam',
            'Qua’an Pan',
            'Langtang South',
            'Jos East',
            'Jos North',
            'Jos South',
            'Langtang North',
            'Riyom',
            'Pankshin'
        ];

        foreach ($plateauLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $plateau->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }



        $rivers = State::where('name', 'Rivers')->first();
        $riversLgas = [
            'Port Harcourt',
            'Obio-Akpor',
            'Okrika',
            'Ogoni',
            'Ahoada',
            'Bonny',
            'Bori',
            'Degema',
            'Opobo',
            'Eleme',
            'Oyigbo',
            'Omoku',
            'Ogu',
            'Akinima',
            'Nchia',
            'Rumuokoro',
            'Isiokpo',
            'Bodo',
            'Tai',
            'Erema',
            'Saakpenwa',
            'Kpor',
            'Andoni',
            'Akuku-Toru',
            'Abua/Odual',
            'Emuoha',
            'Ikwerre',
            'Etche',
            'Ogu/Bolo',
            'Khana',
            'Asari-Toru',
            'Gokana',
            'Elele',
            'Isiokpo',
            'Omerelu',
            'Elelenwo'
        ];

        foreach ($riversLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $rivers->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }

        $sokoto = State::where('name', 'Sokoto')->first();
        $sokotoLgas = [
            'Sokoto',
            'Gwadabawa',
            'Tambuwal',
            'Wurno',
            'Bodinga',
            'Illela',
            'Goronyo',
            'Wamakko',
            'Yabo',
            'Dange',
            'Shuni',
            'Binji',
            'Tureta',
            'Sabon Birni',
            'Gada',
            'Isa',
            'Kebbe',
            'Rabah',
            'Kware',
            'Tangaza',
            'Balle',
            'Gwadabawa',
            'Silame',
            'Sokoto North',
            'Sokoto South',
            'Wamakko',
            'Yabo'
        ];

        foreach ($sokotoLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $sokoto->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }


        $taraba = State::where('name', 'Taraba')->first();
        $tarabaLgas = [
            'Jalingo',
            'Wukari',
            'Gembu',
            'Bali',
            'Takum',
            'Ibi',
            'Mutum Biyu',
            'Karim Lamido',
            'Zing',
            'Lau',
            'Donga',
            'Serti',
            'Ardo Kola',
            'Ussa',
            'Gassol',
            'Yorro',
            'Kurmi',
            'Sunkani',
            'Beli',
            'Gembu',
            'Pantisawa',
            'Nyaja',
            'Chanchanji'
        ];

        foreach ($tarabaLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $taraba->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }


        $yobe = State::where('name', 'Yobe')->first();
        $yobeLgas = [
            'Damaturu',
            'Nguru',
            'Potiskum',
            'Geidam',
            'Gashua',
            'Gujba',
            'Fika',
            'Machina',
            'Bursari',
            'Bade',
            'Yunusari',
            'Jakusko',
            'Nangere',
            'Karasuwa',
            'Yusufari',
            'Tarmuwa',
            'Dapchi',
            'Bayamari',
            'Nguru',
            'Mumkiri',
            'Gumsa',
            'Bade',
            'Sabon Garin Nangere'
        ];

        foreach ($yobeLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $yobe->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }


        $zamfara = State::where('name', 'Zamfara')->first();
        $zamfaraLgas = [
            'Gusau',
            'Kaura Namoda',
            'Talata Mafara',
            'Anka',
            'Shinkafi',
            'Gummi',
            'Bukkuyum',
            'Zurmi',
            'Bungudu',
            'Maru',
            'Tsafe',
            'Birnin Magaji',
            'Bakura',
            'Maradun',
            'Dansadau',
            'Kanoma',
            'Moriki',
            'Gidangoga',
            'Rini',
            'Sabon Birni',
            'Tashar Karawo'
        ];

        foreach ($zamfaraLgas as $lga) {
            Lga::updateOrCreate(
                ['name' => $lga, 'state_name' => $zamfara->name],
                ['updated_at' => now(), 'created_at' => now()]
            );
        }





        // end of the run call
    }
}
