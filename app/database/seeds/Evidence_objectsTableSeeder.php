<?php

class Evidence_objectsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('evidence_objects')->truncate();

        $evidence_objects = array(
            //1
            ["user_id" => 10930216, "owner" => "Mike Jones", "case_id" => 5, "details" => "Parrying dagger with the victim's blood", "length" => "12 in.", "width" => "2 in.",
                "height" => "12 in.", "date_received" => "2014-05-01"],
            ["user_id" => 10930216, "owner" => "JJ Santos", "case_id" => 6, "details" => "Mendoza C-1934 machine gun", "length" => "10 in.", "width" => "3 in.",
                "height" => "4 in.", "date_received" => "2013-02-22"],
            ["user_id" => 10930216, "owner" => "Larry Torres", "case_id" => 6, "details" => "Mendoza C-1934 machine gun", "length" => "10 in.", "width" => "3 in.",
                "height" => "4 in.", "date_received" => "2013-02-22"],
            ["user_id" => 10930216, "owner" => "Larry Torres", "case_id" => 6, "details" => "Mauser Cartridge (full)", "length" => "7 mm.", "width" => "57 mm.",
                "height" => "3 in.", "date_received" => "2013-02-22"],
            ["user_id" => 10930216, "owner" => "JJ Santos", "case_id" => 6, "details" => "Mauser Cartridge (almost empty)", "length" => "7 mm.", "width" => "57 mm.",
                "height" => "3 in.", "date_received" => "2013-02-22"],
            ["user_id" => 10930216, "owner" => "JJ Santos", "case_id" => 6, "details" => "5 Mendoza C-1934 bullets", "length" => "10 mm.", "width" => "60 mm.",
                "height" => "1 in.", "date_received" => "2013-02-22"],
            ["user_id" => 10930216, "owner" => "Larry Torres", "case_id" => 6, "details" => "10 Mendoza C-1934 bullets", "length" => "10 mm.", "width" => "60 mm.",
                "height" => "1 in.", "date_received" => "2013-02-22"],
            ["user_id" => 10930216, "owner" => "Gong Wai", "case_id" => 8, "details" => "Knightly dagger", "length" => "5 in.", "width" => "2 in.",
                "height" => "6 in.", "date_received" => "2013-03-09"],
            ["user_id" => 10930216, "owner" => "Kristina Gacutan", "case_id" => 9, "details" => "Bloody balisong", "length" => "30 in.", "width" => "4 in.",
                "height" => "4 in.", "date_received" => "2013-03-09"],
            ["user_id" => 10930216, "owner" => "Lebron Anthony, Terrence Williams, Shawn Kristy", "case_id" => 10, "details" => "2 packets of ecstacy", "length" => "", "width" => "",
                "height" => "", "date_received" => "2013-02-25"],
            //11
            ["user_id" => 10930216, "owner" => "Lebron Anthony, Terrence Williams, Shawn Kristy", "case_id" => 10, "details" => "3 packets of cocaine", "length" => "", "width" => "",
                "height" => "4 in.", "date_received" => "2013-02-25"],
            ["user_id" => 10930216, "owner" => "Maynard Plumlee", "case_id" => 15, "details" => "Shabu samples from Taguig lab", "length" => "", "width" => "",
                "height" => "18 in.", "date_received" => "2013-05-30"],
            ["user_id" => 10930216, "owner" => "Victorio Ricardo", "case_id" => 17, "details" => "Astra A-80 bullet", "length" => "8 mm.", "width" => "10 mm.",
                "height" => "1 in.", "date_received" => "2013-06-19"],
            ["user_id" => 10930216, "owner" => "Veronica Co", "case_id" => 20, "details" => "Beretta 21 Bobcat pistol", "length" => "5 in.", "width" => "2 in.",
                "height" => "4 in.", "date_received" => "2013-08-12"],
            ["user_id" => 10930216, "owner" => "Veronica Co", "case_id" => 20, "details" => "7 Beretta 21 Bobcat bullets", "length" => "8 mm.", "width" => "10 mm.",
                "height" => "1 in.", "date_received" => "2013-08-12"],
            ["user_id" => 10930216, "owner" => "Mariz Tamboa", "case_id" => 22, "details" => "Hunting dagger with the victim's blood", "length" => "10 in.", "width" => "2 in.",
                "height" => "8 in.", "date_received" => "2013-09-11"],
            ["user_id" => 10930216, "owner" => "Monica Velasco", "case_id" => 23, "details" => "Caracal pistol", "length" => "5 in.", "width" => "4 in.",
                "height" => "7 in.", "date_received" => "2013-09-22"],
            ["user_id" => 10930216, "owner" => "Paulo Arcilla", "case_id" => 24, "details" => "2 AK-47 bullets", "length" => "2 in.", "width" => "2 in.",
                "height" => "4 in.", "date_received" => "2013-10-12"],
            ["user_id" => 10930216, "owner" => "Samson Sanqui", "case_id" => 24, "details" => "1 AMD-65 bullet", "length" => "2 in.", "width" => "2 in.",
                "height" => "4 in.", "date_received" => "2013-10-13"],
            ["user_id" => 10930216, "owner" => "Sungyeol Choi, Myungsoo Choi", "case_id" => 28, "details" => "1 packet of heroin", "length" => "", "width" => "",
                "height" => "", "date_received" => "2013-12-01"],
            //21
            ["user_id" => 10930216, "owner" => "Sean William Parker", "case_id" => 31, "details" => "Carbon 15 Type 21 bullet", "length" => "8 mm.", "width" => "10 mm.",
                "height" => "1 in.", "date_received" => "2013-01-04"],
            ["user_id" => 10930216, "owner" => "Jackson Kelly", "case_id" => 35, "details" => "15 fake gift certificates from Starbucks", "length" => "", "width" => "",
                "height" => "", "date_received" => "2013-03-06"],
            ["user_id" => 10930216, "owner" => "Landon Jordan", "case_id" => 38, "details" => "Glock 17 pistol", "length" => "6 in.", "width" => "4 in.",
                "height" => "4 in.", "date_received" => "2013-05-30"],
            ["user_id" => 10930216, "owner" => "Minami Takahashi", "case_id" => 47, "details" => "2 packets of coke", "length" => "", "width" => "",
                "height" => "", "date_received" => "2013-04-02"],
            ["user_id" => 10930216, "owner" => "Minami Takahashi", "case_id" => 47, "details" => "3 packets of cocaine", "length" => "", "width" => "",
                "height" => "", "date_received" => "2013-04-02"],
            ["user_id" => 10930216, "owner" => "Marc Payawal", "case_id" => 52, "details" => "16 Nikonov bullets", "length" => "12 mm.", "width" => "7 mm.",
                "height" => "2 in.", "date_received" => "2013-06-12"],
            ["user_id" => 10930216, "owner" => "Anton Saley", "case_id" => 62, "details" => "Cricket bat with Andrew Saley's blood", "length" => "30 in.", "width" => "5 in.",
                "height" => "5 in.", "date_received" => "2013-10-13"],
            ["user_id" => 10930216, "owner" => "Justin Tomawis", "case_id" => 65, "details" => "Glock 17 bullet", "length" => "6 mm.", "width" => "10 mm.",
                "height" => "1 in.", "date_received" => "2013-06-24"],
            ["user_id" => 10930216, "owner" => "Aldrich Cabello", "case_id" => 67, "details" => "Empty cartridge of Parabellum pistol", "length" => "9 mm.", "width" => "19 mm.",
                "height" => "2 in.", "date_received" => "2013-07-29"],
            ["user_id" => 10930216, "owner" => "Julio Macaraeg", "case_id" => 68, "details" => "Beretta Cheetah bullet", "length" => "10 mm.", "width" => "3 mm.",
                "height" => "1 in.", "date_received" => "2013-07-30"],
            //31
            ["user_id" => 10930216, "owner" => "Julio Macaraeg", "case_id" => 68, "details" => "Beretta Cheetah pistol", "length" => "6 in.", "width" => "4 in.",
                "height" => "5 in.", "date_received" => "2013-07-30"],
            ["user_id" => 10930216, "owner" => "Julio Macaraeg", "case_id" => 68, "details" => "1 packet of marijuana", "length" => "", "width" => "",
                "height" => "", "date_received" => "2013-07-31"],
            ["user_id" => 10930216, "owner" => "Jack Marshall", "case_id" => 71, "details" => "Montblanc lighter", "length" => "3 in.", "width" => "1 in.",
                "height" => "3 in.", "date_received" => "2009-07-30"],
            ["user_id" => 10930216, "owner" => "Sungyeol Choi", "case_id" => 77, "details" => "Assorted pill capsules", "length" => "", "width" => "",
                "height" => "", "date_received" => "2010-01-15"],
            ["user_id" => 10930216, "owner" => "Rita Castillo", "case_id" => 78, "details" => "60 iPhone 5S imitation units", "length" => "5 in.", "width" => "3 in.",
                "height" => "0.30 in.", "date_received" => "2011-01-10"],
            //36 KIER
            ["user_id" => 10930216, "owner" => "Bea Puzon", "case_id" => 81, "details" => "Ballpen used in the Forgery case", "length" => "7 in.", "width" => "0.5 in.",
                "height" => "7 in.", "date_received" => "2008-11-30"],
            ["user_id" => 10930216, "owner" => "Bernice Bassig", "case_id" => 82, "details" => "Gambling dice", "length" => "2 in.", "width" => "1 in.",
                "height" => "2 in.", "date_received" => "2008-11-10"],
            ["user_id" => 10930216, "owner" => "Bernice Bassig", "case_id" => 82, "details" => "Gambling cards", "length" => "5 in.", "width" => "0.2 in.",
                "height" => "5 in.", "date_received" => "2008-11-10"],
            ["user_id" => 10930216, "owner" => "ABC Motel", "case_id" => 83, "details" => "Bedsheet found at the crimescene", "length" => "100 in.", "width" => "80 in.",
                "height" => "100 in.", "date_received" => "2008-11-05"],
            ["user_id" => 10930216, "owner" => "Government Property", "case_id" => 85, "details" => "Broken object resulting to public disorder of the subject", "length" => "50 in.", "width" => "40 in.",
                "height" => "50 in.", "date_received" => "2010-11-04"],
            ["user_id" => 10930216, "owner" => "Elayssa Ferias", "case_id" => 87, "details" => "Ballpen used in the Forgery case", "length" => "7 in.", "width" => "0.5 in.",
                "height" => "7 in.", "date_received" => "2011-11-06"],
            ["user_id" => 10930216, "owner" => "Pamela Mendiola", "case_id" => 88, "details" => "Money used in the case was obtained", "length" => "5 in.", "width" => "1 in.",
                "height" => "5 in.", "date_received" => "2011-11-07"],
            ["user_id" => 10930216, "owner" => "James Martinez", "case_id" => 95, "details" => "Maong pants of James Martinez who commit suicide", "length" => " in.", "width" => " in.",
                "height" => " in.", "date_received" => "2012-11-16"],
            ["user_id" => 10930216, "owner" => "James Martinez", "case_id" => 95, "details" => "Polo shirt of James Martinez who commit suicide", "length" => " in.", "width" => " in.",
                "height" => " in.", "date_received" => "2012-11-16"],
            ["user_id" => 10930216, "owner" => "Joanthan Ochoa", "case_id" => 101, "details" => "The car of the Jonathan Ochoa was obtained by the investigator", "length" => "300 in.", "width" => "250 in.",
                "height" => "300 in.", "date_received" => "2009-05-06"],
            //46
            ["user_id" => 10930216, "owner" => "Ernesto Villamin", "case_id" => 102, "details" => "Drug paraphernalia found", "length" => "35 in.", "width" => "22 in.",
                "height" => "35 in.", "date_received" => "2009-05-04"],
            ["user_id" => 10930216, "owner" => "Ernesto Villamin", "case_id" => 102, "details" => "Shabu found in the bag of Ernesto Villamin", "length" => "1 in.", "width" => "1 in.",
                "height" => "1 in.", "date_received" => "2009-05-02"],
            ["user_id" => 10930216, "owner" => "Armando Villena", "case_id" => 103, "details" => "Spray paint used by Armando Villena that was obtained by the investigator", "length" => "10 in.", "width" => "3 in.",
                "height" => "10 in.", "date_received" => "2009-05-03"],
            ["user_id" => 10930216, "owner" => "Mauro Lumba", "case_id" => 104, "details" => "Bag of the victim found at the house of Carlo Sta. Cruz", "length" => "24 in.", "width" => "12 in.",
                "height" => "24 in.", "date_received" => "2009-05-10"],
            ["user_id" => 10930216, "owner" => "Jason Delaroca", "case_id" => 107, "details" => "Car of the victim found at the basement parking", "length" => "600 in.", "width" => "400 in.",
                "height" => "600 in.", "date_received" => "2012-05-28"],
            ["user_id" => 10930216, "owner" => "Queenie Amulong", "case_id" => 108, "details" => "Underwear of the victim", "length" => "12 in.", "width" => "9 in.",
                "height" => "12 in.", "date_received" => "2013-05-20"],
            ["user_id" => 10930216, "owner" => "Abo Acleb", "case_id" => 110, "details" => "Money involved in the case", "length" => "10 in.", "width" => "1 in.",
                "height" => "10 in.", "date_received" => "2013-05-22"],
            ["user_id" => 10930216, "owner" => "Dave Bermillo", "case_id" => 118, "details" => "Tool used for assembling", "length" => "7 in.", "width" => "2 in.",
                "height" => "7 in.", "date_received" => "2013-02-30"],
            ["user_id" => 10930216, "owner" => "James Calleja", "case_id" => 119, "details" => "Shirt full of blood stain was obtained by the investigator", "length" => "20 in.", "width" => "12 in.",
                "height" => "20 in.", "date_received" => "2014-02-27"],
            ["user_id" => 10930216, "owner" => "James Calleja", "case_id" => 119, "details" => "Shorts full of blood stain was obtained by the investigator", "length" => "28 in.", "width" => "15 in.",
                "height" => "28 in.", "date_received" => "2014-02-27"],
            //56
            ["user_id" => 10930216, "owner" => "Angela Criselda", "case_id" => 120, "details" => "Gun used by Angela Criselda was obtained by the investigator", "length" => "11 in.", "width" => "3 in.",
                "height" => "11 in.", "date_received" => "2014-02-27"],
            //57
            ["user_id" => 10930216, "owner" => "Miley Cauricio", "case_id" => 122, "details" => "Ballpen used by Miley Cauricio was obtained by the investigator", "length" => "7 in.", "width" => "2 in.",
                "height" => "7 in.", "date_received" => "2009-10-04"],
            //58        
            ["user_id" => 10930216, "owner" => "Rosanna Fernando", "case_id" => 126, "details" => "Money used in the case was obtained by the investigator", "length" => "10 in.", "width" => "2 in.",
                "height" => "10 in.", "date_received" => "2011-10-13"],
            //59
            ["user_id" => 10930216, "owner" => "Lovely Bueno", "case_id" => 130, "details" => "Forgery device was founded at the house of the subject", "length" => "46 in.", "width" => "12 in.",
                "height" => "46 in.", "date_received" => "2013-10-31"],
            //60
            ["user_id" => 10930216, "owner" => "Gary Michael Waters", "case_id" => 29, "details" => "50 Samsung S4 imitation units", "length" => "5 in.", "width" => "2 in.",
                "height" => "0.35 in.", "date_received" => "2013-12-30"],
            //61
            ["user_id" => 10930216, "owner" => "Gary Michael Waters", "case_id" => 29, "details" => "23 Nokia Lumia 620 imitation units", "length" => "5 in.", "width" => "2.5in.",
                "height" => "0.45 in.", "date_received" => "2013-12-30"],
//*********************************************************************************************************************************************************            
            //62
            ["user_id" => 10940445, "owner" => "Adalberto Abraham", "case_id" => 131, "details" => "Yamaha DT Motorcycle", "length" => "300 in.", "width" => "100 in.",
                "height" => "200 in.", "date_received" => "2014-02-14"],
            //63
            ["user_id" => 10940445, "owner" => "Adalberto Abraham", "case_id" => 131, "details" => "Honda XRM Motorcycle", "length" => "300 in.", "width" => "100 in.",
                "height" => "200 in.", "date_received" => "2014-02-14"],
            //64
            ["user_id" => 10940445, "owner" => "Adalberto Abraham", "case_id" => 131, "details" => "Gun used to shoot the victim", "length" => "10 in.", "width" => "5 in.",
                "height" => "15 in.", "date_received" => "2014-02-14"],
            //65
            ["user_id" => 10940447, "owner" => "Agustin Acosta", "case_id" => 132, "details" => "Brown leather suitcase", "length" => "50 in.", "width" => "30 in.",
                "height" => "60 in.", "date_received" => "2013-03-26"],
            //66
            ["user_id" => 10940446, "owner" => "Alfonso Aguilar", "case_id" => 133, "details" => ".45 caliber pistol", "length" => "13 in.", "width" => "13 in.",
                "height" => "13 in.", "date_received" => "2012-03-29"],
            //67
            ["user_id" => 10940446, "owner" => "Alfonso Aguilar", "case_id" => 133, "details" => "9mm sub-machine gun", "length" => "9 in.", "width" => "9 in.",
                "height" => "9 in.", "date_received" => "2012-03-29"],
            //68
            ["user_id" => 10940446, "owner" => "Alfonso Aguilar", "case_id" => 133, "details" => "Magazines", "length" => "4 in.", "width" => "4 in.",
                "height" => "4 in.", "date_received" => "2012-03-29"],
            //69
            ["user_id" => 10940446, "owner" => "Alfonso Aguilar", "case_id" => 133, "details" => "Ammunitions", "length" => "6 in.", "width" => "6 in.",
                "height" => "6 in.", "date_received" => "2012-03-29"],
            //70
            ["user_id" => 10940444, "owner" => "Alfred Aguirre", "case_id" => 134, "details" => "Victim car", "length" => "1000 in.", "width" => "800 in.",
                "height" => "900 in.", "date_received" => "2012-04-24"],
            //71
            ["user_id" => 10940444, "owner" => "Alfred Aguirre", "case_id" => 134, "details" => "Blood samples of the victim ", "length" => "5 in.", "width" => "8 in.",
                "height" => "10 in.", "date_received" => "2012-04-24"],
            //72
            ["user_id" => 10940444, "owner" => "Alfred Aguirre", "case_id" => 134, "details" => "Kitchen knife", "length" => "25 in.", "width" => "5 in.",
                "height" => "15 in.", "date_received" => "2012-04-24"],
            //73
            ["user_id" => 10940444, "owner" => "Alfred Aguirre", "case_id" => 134, "details" => "Valuables inside a paper bag", "length" => "200 in.", "width" => "100 in.",
                "height" => "300 in.", "date_received" => "2012-04-24"],
            //74
            ["user_id" => 10940447, "owner" => "Andrew Aldrich", "case_id" => 136, "details" => "Unlicensed caliber .45 firearm", "length" => "25 in.", "width" => "14 in.",
                "height" => "27 in.", "date_received" => "2012-05-23"],
            //75
            ["user_id" => 10940447, "owner" => "Andrew Aldrich", "case_id" => 136, "details" => "Drug paraphernalia", "length" => "16 in.", "width" => "8 in.",
                "height" => "12 in.", "date_received" => "2012-05-23"],
            //76
            ["user_id" => 10940447, "owner" => "Andrew Aldrich", "case_id" => 136, "details" => "Plastic sachet containing methamphetamine hydrochloride or shabu", "length" => "24 in.", "width" => "12 in.",
                "height" => "14 in.", "date_received" => "2012-05-23"],
            //77
            ["user_id" => 10940448, "owner" => "Armando Alonzo", "case_id" => 138, "details" => "Auctioned goods", "length" => "20 in.", "width" => "10 in.",
                "height" => "14 in.", "date_received" => "2012-06-01"],
            //78
            ["user_id" => 10940448, "owner" => "Armando Alonzo", "case_id" => 138, "details" => "Marked money", "length" => "27 in.", "width" => "40 in.",
                "height" => "20 in.", "date_received" => "2012-06-01"],
            //79
            ["user_id" => 10940448, "owner" => "Aron Alvarez", "case_id" => 139, "details" => "Credit and Postdated checks", "length" => "44 in.", "width" => "21 in.",
                "height" => "16 in.", "date_received" => "2008-05-15"],
            //80
            ["user_id" => 10940448, "owner" => "Aron Alvarez", "case_id" => 139, "details" => "Nissan Patrol", "length" => "4000 in.", "width" => "2000 in.",
                "height" => "3000 in.", "date_received" => "2008-05-15"],
            //81
            ["user_id" => 10940448, "owner" => "Aron Alvarez", "case_id" => 139, "details" => "Nissan X-Trail", "length" => "3000 in.", "width" => "1000 in.",
                "height" => "2000 in.", "date_received" => "2008-05-15"],
            //82
            ["user_id" => 10940448, "owner" => "Benito Anthony", "case_id" => 141, "details" => "Visa card", "length" => "5 in.", "width" => "8 in.",
                "height" => "3 in.", "date_received" => "2012-07-06"],
            //83
            ["user_id" => 10940448, "owner" => "Bernie Aranda", "case_id" => 142, "details" => "Laptop", "length" => "13 in.", "width" => "13 in.",
                "height" => "", "date_received" => "2012-07-05"],
            //84
            ["user_id" => 10940448, "owner" => "Bernie Aranda", "case_id" => 142, "details" => "Telephone", "length" => "12 in.", "width" => "12 in.",
                "height" => "13 in.", "date_received" => "2012-07-05"],
            //85
            ["user_id" => 10940448, "owner" => "Bernie Aranda", "case_id" => 142, "details" => "Router", "length" => "19 in.", "width" => "14 in.",
                "height" => "15 in.", "date_received" => "2012-07-05"],
            //86
            ["user_id" => 10940448, "owner" => "Bernie Aranda", "case_id" => 142, "details" => "Modem", "length" => "17 in.", "width" => "12 in.",
                "height" => "11 in.", "date_received" => "2012-07-05"],
            //87
            ["user_id" => 10940448, "owner" => "Blaine Arevalo", "case_id" => 144, "details" => "Travelling bag containing illegal drugs", "length" => "27 in.", "width" => "30 in.",
                "height" => "35 in.", "date_received" => "2012-10-01"],
            //88
            ["user_id" => 10940445, "owner" => "Ruby Rose Barrameda-Jimenez", "case_id" => 145, "details" => "Body of Ruby Rose Barrameda-Jimenez", "length" => "178 in.", "width" => "100 in.",
                "height" => "190 in.", "date_received" => "2009-06-20"],
            //89
            ["user_id" => 10940445, "owner" => "Bradley Arroyo", "case_id" => 145, "details" => "Cemeted Steel drum", "length" => "200 in.", "width" => "300 in.",
                "height" => "200 in.", "date_received" => "2009-06-20"],
            //90
            ["user_id" => 10940447, "owner" => "Bruce Atkins", "case_id" => 146, "details" => "Exchange of cellphone messages", "length" => "7 in.", "width" => "4 in.",
                "height" => "5 in.", "date_received" => "2012-12-14"],
            //91
            ["user_id" => 10940447, "owner" => "Bruce Atkins", "case_id" => 146, "details" => "Ransom money", "length" => "12 in.", "width" => "12 in.",
                "height" => "12 in.", "date_received" => "2012-12-14"],
            //92
            ["user_id" => 10940446, "owner" => "Burton Aviles", "case_id" => 147, "details" => "Undelivered beauty products", "length" => "22 in.", "width" => "22 in.",
                "height" => "22 in.", "date_received" => "2013-02-22"],
            //93
            ["user_id" => 10940446, "owner" => "Burton Aviles", "case_id" => 147, "details" => "Marked money", "length" => "11 in.", "width" => "11 in.",
                "height" => "11 in.", "date_received" => "2013-02-22"],
            ["user_id" => 10940447, "owner" => "Clifton Baron", "case_id" => 151, "details" => "SOP amount of P3000", "length" => "23 in.", "width" => "23 in.",
                "height" => "23 in.", "date_received" => "2013-06-11"],
            //95
            ["user_id" => 10940447, "owner" => "Dallas Bauer", "case_id" => 152, "details" => "PRF Professional Identification Card", "length" => "7 in.", "width" => "7 in.",
                "height" => "7 in.", "date_received" => "2013-06-13"],
            ["user_id" => 10940447, "owner" => "Dana Bautista", "case_id" => 153, "details" => "Ransom money of 50000", "length" => "12 in.", "width" => "12 in.",
                "height" => "12 in.", "date_received" => "2013-06-19"],
            //97
            ["user_id" => 10940447, "owner" => "Dana Bautista", "case_id" => 153, "details" => "Cellphone", "length" => "6 in.", "width" => "6 in.",
                "height" => "6 in.", "date_received" => "2013-06-19"],
            ["user_id" => 10940447, "owner" => "Dana Bautista", "case_id" => 153, "details" => "Motorcycles", "length" => "30 in.", "width" => "30 in.",
                "height" => "30 in.", "date_received" => "2013-06-19"],
            //99
            ["user_id" => 10940447, "owner" => "Dana Bautista", "case_id" => 153, "details" => ".45 caliber pistol", "length" => "24 in.", "width" => "24 in.",
                "height" => "24 in.", "date_received" => "2013-06-19"],
            ["user_id" => 10940447, "owner" => "Dana Bautista", "case_id" => 153, "details" => "Wallet with assorted cards", "length" => "16 in.", "width" => "16 in.",
                "height" => "16 in.", "date_received" => "2013-06-19"],
            //101
            ["user_id" => 10940448, "owner" => "Dillon Benitez", "case_id" => 154, "details" => "Computer", "length" => "44 in.", "width" => "44 in.",
                "height" => "44 in.", "date_received" => "2013-07-01"],
            ["user_id" => 10940448, "owner" => "Dillon Benitez", "case_id" => 154, "details" => "SIM boxes", "length" => "4 in.", "width" => "4 in.",
                "height" => "4 in.", "date_received" => "2013-07-01"],
            //103
            ["user_id" => 10940448, "owner" => "Dillon Benitez", "case_id" => 154, "details" => "SIM cards", "length" => "2 in.", "width" => "2 in.",
                "height" => "2 in.", "date_received" => "2013-07-01"],
            ["user_id" => 10940448, "owner" => "Dillon Benitez", "case_id" => 154, "details" => "Switching equipments", "length" => "29 in.", "width" => "29 in.",
                "height" => "29 in.", "date_received" => "2013-07-01"],
            //105
            ["user_id" => 10940444, "owner" => "Don Berger", "case_id" => 155, "details" => "Lead pipe", "length" => "41 in.", "width" => "41 in.",
                "height" => "41 in.", "date_received" => "2013-07-29"],
            ["user_id" => 10940448, "owner" => "Donte Bernard", "case_id" => 156, "details" => "Passport", "length" => "14 in.", "width" => "14 in.",
                "height" => "14 in.", "date_received" => "2013-07-29"],
            //107
            ["user_id" => 10940448, "owner" => "Elmer Blakely", "case_id" => 158, "details" => "Cellphone call logs and textmessage of the suspect", "length" => "8 in.", "width" => "8 in.",
                "height" => "8 in.", "date_received" => "2013-03-12"],
            ["user_id" => 10940446, "owner" => "Ernesto Bogan", "case_id" => 159, "details" => "Isuzu Alterra", "length" => "2500 in.", "width" => "2500 in.",
                "height" => "2500 in.", "date_received" => "2014-02-02"],
            //109
            ["user_id" => 10940447, "owner" => "Eugenio Bolen", "case_id" => 160, "details" => "Plastic containing white crystalline substances", "length" => "10 in.", "width" => "10 in.",
                "height" => "10 in.", "date_received" => "2014-05-02"],
            ["user_id" => 10940447, "owner" => "Eugenio Bolen", "case_id" => 160, "details" => "Drug paraphernalia", "length" => "9 in.", "width" => "9 in.",
                "height" => "9 in.", "date_received" => "2014-05-02"],
            //111
            ["user_id" => 10940447, "owner" => "Eugenio Bolen", "case_id" => 160, "details" => "Weighing scale", "length" => "31 in.", "width" => "31 in.",
                "height" => "31 in.", "date_received" => "2014-05-02"],
            ["user_id" => 10940446, "owner" => "Fabian Bond", "case_id" => 161, "details" => ".50 caliber rifle", "length" => "50 in.", "width" => "50 in.",
                "height" => "50 in.", "date_received" => "2014-05-13"],
            //113
            ["user_id" => 10940446, "owner" => "Fabian Bond", "case_id" => 161, "details" => "MOO Machine gun", "length" => "40 in.", "width" => "40 in.",
                "height" => "40 in.", "date_received" => "2014-05-13"],
            ["user_id" => 10940446, "owner" => "Fabian Bond", "case_id" => 161, "details" => " M79 grenade launcher", "length" => "77 in.", "width" => "77 in.",
                "height" => "77 in.", "date_received" => "2014-05-13"],
            //115
            ["user_id" => 10940446, "owner" => "Fabian Bond", "case_id" => 161, "details" => "M14 replica", "length" => "28 in.", "width" => "28 in.",
                "height" => "28 in.", "date_received" => "2014-05-13"],
            ["user_id" => 10940446, "owner" => "Fabian Bond", "case_id" => 161, "details" => "Rifle mini 14", "length" => "14 in.", "width" => "14 in.",
                "height" => "14 in.", "date_received" => "2014-05-13"],
            //117
            ["user_id" => 10940446, "owner" => "Fabian Bond", "case_id" => 161, "details" => "Ammunitions of 50 caliber", "length" => "35 in.", "width" => "35 in.",
                "height" => "35 in.", "date_received" => "2014-05-13"],
            ["user_id" => 10940446, "owner" => "Fabian Bond", "case_id" => 161, "details" => "Assorted barrel", "length" => "33 in.", "width" => "33 in.",
                "height" => "33 in.", "date_received" => "2014-05-13"],
            //119
            ["user_id" => 10940446, "owner" => "Fabian Bond", "case_id" => 161, "details" => "Revolver .38 caliber", "length" => "38 in.", "width" => "38 in.",
                "height" => "38 in.", "date_received" => "2014-05-13"],
            ["user_id" => 10940446, "owner" => "Fabian Bond", "case_id" => 161, "details" => "Optical scope", "length" => "12 in.", "width" => "12 in.",
                "height" => "12 in.", "date_received" => "2014-05-13"],
            //121
            ["user_id" => 10940446, "owner" => "Fabian Bond", "case_id" => 161, "details" => "Crossbow with scope", "length" => "47 in.", "width" => "47 in.",
                "height" => "47 in.", "date_received" => "2014-05-13"],
            ["user_id" => 10940446, "owner" => "Fabian Bond", "case_id" => 161, "details" => "Hand guard of M60", "length" => "60 in.", "width" => "60 in.",
                "height" => "60 in.", "date_received" => "2014-05-13"],
            //123
            ["user_id" => 10940446, "owner" => "Fabian Bond", "case_id" => 161, "details" => "Generator set", "length" => "100 in.", "width" => "100 in.",
                "height" => "100 in.", "date_received" => "2014-05-13"],
            ["user_id" => 10940446, "owner" => "Fabian Bond", "case_id" => 161, "details" => "Portable handgrill", "length" => "66 in.", "width" => "66 in.",
                "height" => "66 in.", "date_received" => "2014-05-13"],
            //125
            ["user_id" => 10940446, "owner" => "Fabian Bond", "case_id" => 161, "details" => "Portable grinder", "length" => "44 in.", "width" => "44 in.",
                "height" => "44 in.", "date_received" => "2014-05-13"],
            ["user_id" => 10940446, "owner" => "Fabian Bond", "case_id" => 161, "details" => "Bench drilling machine", "length" => "33 in.", "width" => "33 in.",
                "height" => "33 in.", "date_received" => "2014-05-13"],
            //127
            ["user_id" => 10940446, "owner" => "Fabian Bond", "case_id" => 161, "details" => "Portable welding machine", "length" => "120 in.", "width" => "120 in.",
                "height" => "120 in.", "date_received" => "2014-05-13"],
            ["user_id" => 10940445, "owner" => "Harris Briseno", "case_id" => 163, "details" => "Gun", "length" => "6 in.", "width" => "6 in.",
                "height" => "6 in.", "date_received" => "1990-02-11"],
            //129
            ["user_id" => 10940445, "owner" => "Harris Briseno", "case_id" => 163, "details" => "Solicited shirt", "length" => "12 in.", "width" => "12 in.",
                "height" => "12 in.", "date_received" => "1990-02-11"],
            ["user_id" => 10940445, "owner" => "Hugo Bryant", "case_id" => 164, "details" => "Kitchen knife", "length" => "9 in.", "width" => "9 in.",
                "height" => "9 in.", "date_received" => "1948-06-30"],
            //131
            ["user_id" => 10940445, "owner" => "Hugo Bryant", "case_id" => 164, "details" => "Blood stain on shirt", "length" => "6 in.", "width" => "6 in.",
                "height" => "6 in.", "date_received" => "1948-06-30"],
            ["user_id" => 10940444, "owner" => "Jacob Burge", "case_id" => 166, "details" => "Firearms", "length" => "18 in.", "width" => "18 in.",
                "height" => "18 in.", "date_received" => "1993-07-25"],
            //133
            ["user_id" => 10940444, "owner" => "Jacob Burge", "case_id" => 166, "details" => "Ammunitions", "length" => "22 in.", "width" => "22 in.",
                "height" => "22 in.", "date_received" => "1993-07-25"],
            ["user_id" => 10940444, "owner" => "Jacob Burge", "case_id" => 166, "details" => "Explosive devices", "length" => "24 in.", "width" => "24 in.",
                "height" => "24 in.", "date_received" => "1993-07-25"],
            //135
            ["user_id" => 10940444, "owner" => "Jerry Cabrera", "case_id" => 168, "details" => "Slippers of the victim", "length" => "10 in.", "width" => "10 in.",
                "height" => "10 in.", "date_received" => "1999-12-23"],
            ["user_id" => 10940444, "owner" => "Jerry Cabrera", "case_id" => 168, "details" => "Dress of the victim", "length" => "26 in.", "width" => "26 in.",
                "height" => "26 in.", "date_received" => "1999-12-23"],
            //137
            ["user_id" => 10940445, "owner" => "Jewell Calabrese", "case_id" => 169, "details" => "Gun", "length" => "8 in.", "width" => "8 in.",
                "height" => "8 in.", "date_received" => "1989-11-14"],
            ["user_id" => 10940445, "owner" => "Jewell Calabrese", "case_id" => 169, "details" => "Money", "length" => "3 in.", "width" => "3 in.",
                "height" => "3 in.", "date_received" => "1989-11-14"],
            //139
            ["user_id" => 10940445, "owner" => "Jewell Calabrese", "case_id" => 169, "details" => "Security vault", "length" => "66 in.", "width" => "66 in.",
                "height" => "66 in.", "date_received" => "1989-11-14"],
            ["user_id" => 10940447, "owner" => "Jim Calderon", "case_id" => 170, "details" => "Shirt full of bloodstain", "length" => "25 in.", "width" => "25 in.",
                "height" => "25 in.", "date_received" => "2001-04-27"],
            //141
            ["user_id" => 10940447, "owner" => "Jim Calderon", "case_id" => 170, "details" => "Wallet with cash and cards", "length" => "30 in.", "width" => "30 in.",
                "height" => "30 in.", "date_received" => "2001-04-27"],
            ["user_id" => 10940447, "owner" => "Jim Calderon", "case_id" => 170, "details" => "Car key", "length" => "2 in.", "width" => "2 in.",
                "height" => "2 in.", "date_received" => "2001-04-27"],
            //143
            ["user_id" => 10940444, "owner" => "Johnathan Camacho", "case_id" => 171, "details" => "Exchange of cellphone messages", "length" => "9 in.", "width" => "9 in.",
                "height" => "9 in.", "date_received" => "1994-07-21"],
            ["user_id" => 10940444, "owner" => "Johnathan Camacho", "case_id" => 171, "details" => "Ransom money", "length" => "11 in.", "width" => "11 in.",
                "height" => "11 in.", "date_received" => "1994-07-21"],
            //145
            ["user_id" => 10940448, "owner" => "Johnathon Camarillo", "case_id" => 172, "details" => "Shirt full of blood", "length" => "16 in.", "width" => "16 in.",
                "height" => "16 in.", "date_received" => "1996-12-06"],
            ["user_id" => 10940448, "owner" => "Johnathon Camarillo", "case_id" => 172, "details" => "Wallet with cash and cards", "length" => "22 in.", "width" => "22 in.",
                "height" => "22 in.", "date_received" => "1996-12-06"],
            //147
            ["user_id" => 10940447, "owner" => "Jonathan Canales", "case_id" => 173, "details" => "Professional Identification Card", "length" => "11 in.", "width" => "11 in.",
                "height" => "11 in.", "date_received" => "2003-07-22"],
            ["user_id" => 10940446, "owner" => "Josiah Caraballo", "case_id" => 174, "details" => "Identification card", "length" => "9 in.", "width" => "9 in.",
                "height" => "9 in.", "date_received" => "2002-04-01"],
            //149
            ["user_id" => 10940446, "owner" => "Josiah Caraballo", "case_id" => 174, "details" => "Coins", "length" => "2 in.", "width" => "2 in.",
                "height" => "2 in.", "date_received" => "2002-04-01"],
            ["user_id" => 10930216, "owner" => "Julian Cardona", "case_id" => 175, "details" => "Wallet with cash and cards", "length" => "7 in.", "width" => "7 in.",
                "height" => "7 in.", "date_received" => "2001-10-12"],
            //151
            ["user_id" => 10940448, "owner" => "Julio Cardoza", "case_id" => 176, "details" => "Wallet with cash and cards", "length" => "7 in.", "width" => "7 in.",
                "height" => "7 in.", "date_received" => "2004-01-23"],
            ["user_id" => 10940448, "owner" => "Julio Cardoza", "case_id" => 176, "details" => "Rifle bullets", "length" => "1 in.", "width" => "1 in.",
                "height" => "1 in.", "date_received" => "2004-01-23"],
            //153
            ["user_id" => 10930216, "owner" => "Keneth Caro", "case_id" => 177, "details" => "Identification card", "length" => "6 in.", "width" => "6 in.",
                "height" => "6 in.", "date_received" => "1993-03-21"],
            ["user_id" => 10930216, "owner" => "Keneth Caro", "case_id" => 177, "details" => "Body bag of the victim", "length" => "19 in.", "width" => "19 in.",
                "height" => "19 in.", "date_received" => "1993-03-21"],
            //155
            ["user_id" => 10930217, "owner" => "Kirk Caruso", "case_id" => 178, "details" => "Identification card", "length" => "7 in.", "width" => "7 in.",
                "height" => "7 in.", "date_received" => "1995-12-22"],
            ["user_id" => 10940446, "owner" => "Laverne Castro", "case_id" => 179, "details" => "Wallet with cash and cards", "length" => "", "width" => "",
                "height" => "", "date_received" => "1984-12-29"],
            //157
            ["user_id" => 10940446, "owner" => "Laverne Castro", "case_id" => 179, "details" => "Bullets", "length" => "2 in.", "width" => "2 in.",
                "height" => "2 in.", "date_received" => "1984-12-29"],
            ["user_id" => 10940447, "owner" => "Leo Cecil", "case_id" => 180, "details" => "Shirt and shorts with blood stains", "length" => "14 in.", "width" => "14 in.",
                "height" => "14 in.", "date_received" => "2002-03-21"],
            //159
            ["user_id" => 10940445, "owner" => "Leonarda Cerda", "case_id" => 181, "details" => "Torn dress", "length" => "25 in.", "width" => "25 in.",
                "height" => "25 in.", "date_received" => "1996-12-10"],
            ["user_id" => 10940444, "owner" => "Rogelio Cruz", "case_id" => 182, "details" => "Ducati KT motorcycle", "length" => "64 in.", "width" => "64 in.",
                "height" => "64 in.", "date_received" => "2006-02-01"],
            //161
            ["user_id" => 10940444, "owner" => "Rogelio Cruz", "case_id" => 182, "details" => "Suzuki Raider motorcycle", "length" => "75 in.", "width" => "75 in.",
                "height" => "75 in.", "date_received" => "2006-02-01"],
            ["user_id" => 10940444, "owner" => "Rogelio Cruz", "case_id" => 182, "details" => "Rifle gun", "length" => "24 in.", "width" => "24 in.",
                "height" => "24 in.", "date_received" => "2006-02-01"],
            //163
            ["user_id" => 10940445, "owner" => "Salvadora Damron", "case_id" => 183, "details" => "Handkerchief of the victim", "length" => "5 in.", "width" => "5 in.",
                "height" => "5 in.", "date_received" => "1997-04-22"],
            ["user_id" => 10940445, "owner" => "Salvadora Damron", "case_id" => 183, "details" => "Torn dress", "length" => "24 in.", "width" => "24 in.",
                "height" => "24 in.", "date_received" => "1997-04-22"],
            //165
            ["user_id" => 10930219, "owner" => "Sherman Delacruz", "case_id" => 186, "details" => "House keys", "length" => "3 in.", "width" => "3 in.",
                "height" => "3 in.", "date_received" => "2005-05-02"],
            ["user_id" => 10940444, "owner" => "Spencer Delossantos", "case_id" => 188, "details" => "MOO Machine Gun", "length" => "18 in.", "width" => "18 in.",
                "height" => "18 in.", "date_received" => "1997-01-30"],
            //167
            ["user_id" => 10940444, "owner" => "Spencer Delossantos", "case_id" => 188, "details" => "M79 Grenade launcher", "length" => "33 in.", "width" => "33 in.",
                "height" => "33 in.", "date_received" => "1997-01-30"],
            ["user_id" => 10940444, "owner" => "Spencer Delossantos", "case_id" => 188, "details" => "M14 Replica", "length" => "24 in.", "width" => "24 in.",
                "height" => "24 in.", "date_received" => "1997-01-30"],
            //169
            ["user_id" => 10930221, "owner" => "Truman Dominguez", "case_id" => 192, "details" => "Shirt used to gagged the mouth", "length" => "13 in.", "width" => "13 in.",
                "height" => "13 in.", "date_received" => "1994-03-03"],
            ["user_id" => 10930221, "owner" => "Truman Dominguez", "case_id" => 192, "details" => "Wire used to strangled the neck of the victim", "length" => "20 in.", "width" => "20 in.", "height" => "20 in.", "date_received" => "1994-03-03"],
            //171
            ["user_id" => 10940446, "owner" => "Winston Dupont", "case_id" => 194, "details" => "Notebook that contained a sketch of a face", "length" => "10 in.", "width" => "10 in.",
                "height" => "10 in.", "date_received" => "1963-03-28"],
            ["user_id" => 10940446, "owner" => "Winston Dupont", "case_id" => 194, "details" => "Underwear", "length" => "7 in.", "width" => "7 in.",
                "height" => "7 in.", "date_received" => "1963-03-28"],
            //173
            ["user_id" => 10940446, "owner" => "Young Durant", "case_id" => 195, "details" => "Bags with valuables", "length" => "14 in.", "width" => "14 in.",
                "height" => "14 in.", "date_received" => "1998-05-26"],
            ["user_id" => 10940446, "owner" => "Young Durant", "case_id" => 195, "details" => ".45 caliber pistol", "length" => "19 in.", "width" => "19 in.",
                "height" => "19 in.", "date_received" => "1998-05-26"],
            //175
            ["user_id" => 10940445, "owner" => "Michael Torres", "case_id" => 196, "details" => ".45 caliber pistol", "length" => "18 in.", "width" => "18 in.",
                "height" => "18 in.", "date_received" => "2001-01-05"],
            ["user_id" => 10940445, "owner" => "Michael Torres", "case_id" => 196, "details" => "Shirt with blood stains", "length" => "12 in.", "width" => "12 in.",
                "height" => "12 in.", "date_received" => "2001-01-05"],
            //177
            ["user_id" => 10940447, "owner" => "Kevin Gomez", "case_id" => 197, "details" => "Clothes", "length" => "8 in.", "width" => "8 in.",
                "height" => "8 in.", "date_received" => "1993-05-12"],
            ["user_id" => 10940447, "owner" => "Kevin Gomez", "case_id" => 197, "details" => "Bed linens", "length" => "23 in.", "width" => "23 in.",
                "height" => "23 in.", "date_received" => "1993-05-12"],
            //179
            ["user_id" => 10940447, "owner" => "Kevin Gomez", "case_id" => 197, "details" => "Blood stains in the underwear", "length" => "12 in.", "width" => "12 in.",
                "height" => "12 in.", "date_received" => "1993-05-12"],
            ["user_id" => 10930221, "owner" => "Mark Reyes", "case_id" => 198, "details" => "Notebook that contained a sketch of a face", "length" => "15 in.", "width" => "15 in.",
                "height" => "15 in.", "date_received" => "1997-09-10"],
            //181
            ["user_id" => 10940447, "owner" => "John Santos", "case_id" => 199, "details" => "Bags with valuables", "length" => "16 in.", "width" => "16 in.",
                "height" => "16 in.", "date_received" => "2003-09-11"],
            ["user_id" => 10940447, "owner" => "John Santos", "case_id" => 199, "details" => ".50 caliber rifle", "length" => "12 in.", "width" => "12 in.",
                "height" => "12 in.", "date_received" => "2003-09-11"],
            //183
            ["user_id" => 10940444, "owner" => "Simon Albaniel", "case_id" => 201, "details" => "Clothes", "length" => "17 in.", "width" => "17 in.",
                "height" => "17 in.", "date_received" => "1996-05-11"],
            ["user_id" => 10940444, "owner" => "Simon Albaniel", "case_id" => 201, "details" => "Bed linens", "length" => "28 in.", "width" => "28 in.",
                "height" => "28 in.", "date_received" => "1996-05-11"],
            //185
            ["user_id" => 10940444, "owner" => "Simon Albaniel", "case_id" => 201, "details" => "Wallet", "length" => "4 in.", "width" => "4 in.",
                "height" => "4 in.", "date_received" => "1996-05-11"],
        );

        // Uncomment the below to run the seeder
        DB::table('evidence_objects')->insert($evidence_objects);
    }

}
