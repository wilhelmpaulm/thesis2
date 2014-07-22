<?php

class KasesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('kases')->truncate();

        $kases = array(
//****************************************************************************************************************************************************************//
//****************************************************************************************************************************************************************//
            //CASES FROM THESIS1
            //1
            ["name" => "Theft at a high school in Marikina", "details" => "", "complaint_id" => 1, "agent_id" => 10930216, "complainant_id" => 1,
                "status" => "", "date_assigned" => "2014-01-25", "date_reported" => "2014-02-12", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //2        
            ["name" => "Rape in BGC Condominium", "details" => "", "complaint_id" => 2, "agent_id" => 10930216, "complainant_id" => 102,
                "status" => "", "date_assigned" => "2014-02-12", "date_reported" => "2014-02-10", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //3        
            ["name" => "Bulalo outbreak in Pedro Gil", "details" => "", "complaint_id" => 3, "agent_id" => 10930193, "complainant_id" => 3,
                "status" => "", "date_assigned" => "", "date_reported" => "2014-02-12", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //4        
            ["name" => "Prostitutes in Malate", "details" => "", "complaint_id" => 4, "agent_id" => 10930193, "complainant_id" => 4,
                "status" => "", "date_assigned" => "2009-03-11", "date_reported" => "2009-03-09", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //5        
            ["name" => "Woman stabbed in the heart, dead", "details" => "", "complaint_id" => 5, "agent_id" => 10930216, "complainant_id" => 5,
                "status" => "", "date_assigned" => "2013-04-23", "date_reported" => "2013-04-18", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //6        
            ["name" => "3 men dead during a shootout in Surigao", "details" => "", "complaint_id" => 6, "agent_id" => 10930216, "complainant_id" => 6,
                "status" => "", "date_assigned" => "2013-01-15", "date_reported" => "2013-01-02", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //7        
            ["name" => "Scholar dead upon leaping from the 25th floor of his condominium veranda", "details" => "", "complaint_id" => 7, "agent_id" => 10930216, "complainant_id" => 7,
                "status" => "", "date_assigned" => "2013-01-26", "date_reported" => "2013-01-11", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //8        
            ["name" => "Teacher of DLSU found dead and stabbed in the brain 6 times", "details" => "", "complaint_id" => 8, "agent_id" => 10930216, "complainant_id" => 8,
                "status" => "", "date_assigned" => "2013-02-07", "date_reported" => "2013-01-29", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //9
            ["name" => "Mother found dead, reported to have eaten her own children", "details" => "", "complaint_id" => 9, "agent_id" => 10930216, "complainant_id" => 9,
                "status" => "", "date_assigned" => "2013-03-05", "date_reported" => "2013-02-27", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //10        
            ["name" => "3 Americans reported in illegal gambling site", "details" => "", "complaint_id" => 10, "agent_id" => 10930216, "complainant_id" => 10,
                "status" => "", "date_assigned" => "2013-02-20", "date_reported" => "2013-02-03", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //11
            ["name" => "Bus conductor from Leyte planted atomic bomb on bus, casualties are five of his friends", "details" => "", "complaint_id" => 11, "agent_id" => 10930193, "complainant_id" => 11, "status" => "", "date_assigned" => "2013-03-30", "date_reported" => "2013-03-03", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //12        
            ["name" => "Counterfeiting in XYZ Company", "details" => "", "complaint_id" => 12, "agent_id" => 10930216, "complainant_id" => 12,
                "status" => "", "date_assigned" => "2013-04-01", "date_reported" => "2013-03-20", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //13        
            ["name" => "Businessman from China abducted 5 children", "details" => "", "complaint_id" => 13, "agent_id" => 10930216, "complainant_id" => 13,
                "status" => "", "date_assigned" => "2013-04-10", "date_reported" => "2013-04-01", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //14        
            ["name" => "2 marijuana dealers in Benguet", "details" => "", "complaint_id" => 14, "agent_id" => 10930193, "complainant_id" => 14,
                "status" => "", "date_assigned" => "2013-05-03", "date_reported" => "2013-04-01", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //15        
            ["name" => "Shabu lab in Taguig invaded, drug lord spotted to be high", "details" => "", "complaint_id" => 15, "agent_id" => 10930217, "complainant_id" => 15,
                "status" => "", "date_assigned" => "2013-05-22", "date_reported" => "2013-04-20", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //16        
            ["name" => "2 Serendra developers involved in 30 million dollar fraud deal", "details" => "", "complaint_id" => 16, "agent_id" => 10930193, "complainant_id" => 16,
                "status" => "", "date_assigned" => "2013-06-10", "date_reported" => "2013-04-12", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //17        
            ["name" => "Man shot in the head by a stray bullet", "details" => "", "complaint_id" => 17, "agent_id" => 10930193, "complainant_id" => 17,
                "status" => "", "date_assigned" => "2013-06-17", "date_reported" => "2013-05-12", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //18        
            ["name" => "Drug pusher dead, 2 injured in Caloocan City", "details" => "", "complaint_id" => 18, "agent_id" => 10930193, "complainant_id" => 18,
                "status" => "", "date_assigned" => "2013-07-07", "date_reported" => "2013-05-20", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //19        
            ["name" => "Pinay allegedly raped by boyfriend", "details" => "", "complaint_id" => 19, "agent_id" => 10930193, "complainant_id" => 19,
                "status" => "", "date_assigned" => "2013-07-27", "date_reported" => "2013-04-10", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //20        
            ["name" => "3 dead in shooting range", "details" => "", "complaint_id" => 20, "agent_id" => 10930193, "complainant_id" => 20,
                "status" => "", "date_assigned" => "2013-08-11", "date_reported" => "2013-05-20", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //21
            ["name" => "Top druglord of Zamboanga, released", "details" => "", "complaint_id" => 21, "agent_id" => 10930193, "complainant_id" => 21,
                "status" => "", "date_assigned" => "2013-08-29", "date_reported" => "2013-07-07", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //22
            ["name" => "Paramedic stabbed in roadside ambush", "agent_id" => 10930193, "details" => "", "complaint_id" => 22, "complainant_id" => 22,
                "status" => "", "date_assigned" => "2013-09-10", "date_reported" => "2013-04-22", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //23
            ["name" => "Drunk driver shoots civilian jogging", "details" => "", "complaint_id" => 23, "agent_id" => 10930217, "complainant_id" => 23,
                "status" => "", "date_assigned" => "2013-09-21", "date_reported" => "2013-07-12", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //24        
            ["name" => "5 men involved in robbery and homicide inside Security Bank Alabang", "details" => "", "complaint_id" => 24, "agent_id" => 10930193, "complainant_id" => 24,
                "status" => "", "date_assigned" => "2013-10-11", "date_reported" => "2013-09-22", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //25        
            ["name" => "Man committed suicide after vandalizing in Pasay", "details" => "", "complaint_id" => 25, "agent_id" => 10930193, "complainant_id" => 25,
                "status" => "", "date_assigned" => "2013-10-22", "date_reported" => "2013-08-12", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //26        
            ["name" => "Secretary raped by an American in boarding house", "details" => "", "complaint_id" => 26, "agent_id" => 10930193, "complainant_id" => 26,
                "status" => "", "date_assigned" => "2013-11-03", "date_reported" => "2013-09-09", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //27        
            ["name" => "3 prostitutes identified to be professors in well-known university", "details" => "", "complaint_id" => 27, "agent_id" => 10930217, "complainant_id" => 27,
                "status" => "", "date_assigned" => "2013-11-23", "date_reported" => "2013-10-22", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //28        
            ["name" => "2 Korean students in possession of drugs, caught dealing to high school students", "details" => "", "complaint_id" => 28, "agent_id" => 10930193, "complainant_id" => 28,
                "status" => "", "date_assigned" => "2013-12-01", "date_reported" => "2013-10-28", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //29        
            ["name" => "Girl raped by her own uncle on her birthday", "details" => "", "complaint_id" => 29, "agent_id" => 10930217, "complainant_id" => 29,
                "status" => "", "date_assigned" => "2013-12-18", "date_reported" => "2013-11-12", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //30        
            ["name" => "African-American businessmen counterfeiting cellular phones", "details" => "", "complaint_id" => 30, "agent_id" => 10930193, "complainant_id" => 30,
                "status" => "", "date_assigned" => "2013-12-27", "date_reported" => "2013-11-20", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //**AFAD**//
            //31
            ["name" => "Man shot dead while running from gunmen outside EGI apartment", "details" => "", "complaint_id" => 31, "agent_id" => 10916644, "complainant_id" => 31,
                "status" => "", "date_assigned" => "2013-01-02", "date_reported" => "2012-12-28", "division" => "AFAD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //32
            ["name" => "2 men involved in investment fraud case", "details" => "", "complaint_id" => 32, "agent_id" => 10930195, "complainant_id" => 32,
                "status" => "", "date_assigned" => "2013-07-04", "date_reported" => "2013-07-01", "division" => "AFAD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //33
            ["name" => "American fireman arrested for using phony license", "details" => "", "complaint_id" => 33, "agent_id" => 10930195, "complainant_id" => 33,
                "status" => "", "date_assigned" => "2014-01-13", "date_reported" => "2013-01-10", "division" => "AFAD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //34
            ["name" => "American manager charged with defrauding", "details" => "", "complaint_id" => 34, "agent_id" => 10930195, "complainant_id" => 34,
                "status" => "", "date_assigned" => "2014-02-04", "date_reported" => "2012-02-01", "division" => "AFAD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //35
            ["name" => "Gift card fraud leads to drug dealing, counterfeiting", "details" => "", "complaint_id" => 35, "agent_id" => 10916644, "complainant_id" => 35,
                "status" => "", "date_assigned" => "2014-03-05", "date_reported" => "2014-03-02", "division" => "AFAD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //36
            ["name" => "Criminal investment fraud case by wealthy businessman", "details" => "", "complaint_id" => 36, "agent_id" => 10916645, "complainant_id" => 36,
                "status" => "", "date_assigned" => "2014-01-27", "date_reported" => "2014-01-25", "division" => "AFAD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //37
            ["name" => "Chase with bank robbery suspects in Quezon City", "details" => "", "complaint_id" => 37, "agent_id" => 10916645, "complainant_id" => 37,
                "status" => "", "date_assigned" => "2014-03-18", "date_reported" => "2014-03-17", "division" => "AFAD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //38
            ["name" => "Woman shot dead after allegedly going into a police officer’s home", "details" => "", "complaint_id" => 38, "agent_id" => 10916645, "complainant_id" => 38,
                "status" => "", "date_assigned" => "2013-05-28", "date_reported" => "2013-05-26", "division" => "AFAD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //39
            ["name" => "Man sets woman's house on fire; woman dead", "details" => "", "complaint_id" => 39, "agent_id" => 10916644, "complainant_id" => 39,
                "status" => "", "date_assigned" => "2013-02-01", "date_reported" => "2013-01-27", "division" => "AFAD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //40
            ["name" => "Shots fired, customers forced to the ground during holdup of IT professional", "details" => "", "complaint_id" => 40, "agent_id" => 10930195, "complainant_id" => 40,
                "status" => "", "date_assigned" => "2013-07-16", "date_reported" => "2013-07-13", "division" => "AFAD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //**AGD**//
            //41
            ["name" => "Female mutilation case against Chinese newsreader", "details" => "", "complaint_id" => 41, "agent_id" => 10930197, "complainant_id" => 41,
                "status" => "", "date_assigned" => "2013-04-23", "date_reported" => "2013-04-18", "division" => "AGD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //42
            ["name" => "Battered wife suffered from serious physical injuries", "details" => "", "complaint_id" => 42, "agent_id" => 10930197, "complainant_id" => 42,
                "status" => "", "date_assigned" => "2013-01-15", "date_reported" => "2013-01-02", "division" => "AGD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //43
            ["name" => "Chinese plumber kidnapped Filipino kid", "details" => "", "complaint_id" => 43, "agent_id" => 10916646, "complainant_id" => 43,
                "status" => "", "date_assigned" => "2013-01-26", "date_reported" => "2013-01-11", "division" => "AGD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //44
            ["name" => "Chinese plumber raped UST medical student", "details" => "", "complaint_id" => 44, "agent_id" => 10916646, "complainant_id" => 44,
                "status" => "", "date_assigned" => "2013-02-07", "date_reported" => "2013-01-29", "division" => "AGD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //45
            ["name" => "Slavery case against Bing Ng", "details" => "", "complaint_id" => 45, "agent_id" => 10916647, "complainant_id" => 45,
                "status" => "", "date_assigned" => "2012-02-20", "date_reported" => "2012-02-03", "division" => "AGD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //46
            ["name" => "Abandonment of helpless person in Pasig river", "details" => "", "complaint_id" => 46, "agent_id" => 10930197, "complainant_id" => 46,
                "status" => "", "date_assigned" => "2013-03-05", "date_reported" => "2013-02-27", "division" => "AGD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //47    
            ["name" => "Japanese prostitute in possession of illegal drugs", "details" => "", "complaint_id" => 47, "agent_id" => 10916647, "complainant_id" => 47,
                "status" => "", "date_assigned" => "2013-03-30", "date_reported" => "2013-03-03", "division" => "AGD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //48
            ["name" => "Ex-singer from Japan trespass private property in Quezon City", "details" => "", "complaint_id" => 48, "agent_id" => 10930197, "complainant_id" => 48,
                "status" => "", "date_assigned" => "2013-04-01", "date_reported" => "2013-03-20", "division" => "AGD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //49
            ["name" => "Japanese nurse injecting illegal drug to patient", "details" => "", "complaint_id" => 49, "agent_id" => 10916647, "complainant_id" => 49,
                "status" => "", "date_assigned" => "2013-04-10", "date_reported" => "2013-04-01", "division" => "AGD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //50
            ["name" => "Child sex abuse suspect found in hotel", "details" => "", "complaint_id" => 50, "agent_id" => 10930197, "complainant_id" => 50,
                "status" => "", "date_assigned" => "2013-05-03", "date_reported" => "2013-04-01", "division" => "AGD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //**AHTRAD**//
            //51
            ["name" => "Bing Ng slaves his son", "details" => "", "complaint_id" => 51, "agent_id" => 10916648, "complainant_id" => 1,
                "status" => "", "date_assigned" => "2013-05-22", "date_reported" => "2013-04-20", "division" => "AHTRAD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //52
            ["name" => "Batsi gang brigandage in SM Sta. Mesa", "details" => "", "complaint_id" => 52, "agent_id" => 10916648, "complainant_id" => 2,
                "status" => "", "date_assigned" => "2013-06-10", "date_reported" => "2013-04-12", "division" => "AHTRAD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //53
            ["name" => "Brigandage case in Quezon City", "details" => "", "complaint_id" => 53, "agent_id" => 10916648, "complainant_id" => 3,
                "status" => "", "date_assigned" => "2013-06-17", "date_reported" => "2013-05-12", "division" => "AHTRAD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //54
            ["name" => "Theft case against Vietnamese Librarian", "details" => "", "complaint_id" => 54, "agent_id" => 10930199, "complainant_id" => 4,
                "status" => "", "date_assigned" => "2013-07-07", "date_reported" => "2013-05-20", "division" => "AHTRAD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //55
            ["name" => "Swindling case against Watanabe Mayu", "details" => "", "complaint_id" => 55, "agent_id" => 10930199, "complainant_id" => 5,
                "status" => "", "date_assigned" => "2013-07-27", "date_reported" => "2013-04-10", "division" => "AHTRAD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //56
            ["name" => "Arson case against Australian politician Jack Marshall", "details" => "", "complaint_id" => 56, "agent_id" => 10916649, "complainant_id" => 6,
                "status" => "", "date_assigned" => "2013-08-11", "date_reported" => "2013-05-20", "division" => "AHTRAD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //57
            ["name" => "Teenager gets pregnant by alleged rapist", "details" => "", "complaint_id" => 57, "agent_id" => 10916649, "complainant_id" => 2,
                "status" => "", "date_assigned" => "2013-08-29", "date_reported" => "2013-08-07", "division" => "AHTRAD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //58
            ["name" => "Anne Curtis-Smith raped in an inn", "details" => "", "complaint_id" => 58, "agent_id" => 10916649, "complainant_id" => 7,
                "status" => "", "date_assigned" => "2013-09-10", "date_reported" => "2013-08-22", "division" => "AHTRAD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //59
            ["name" => "Boy Abunda bribed for 10 million pesos", "details" => "", "complaint_id" => 59, "agent_id" => 10930199, "complainant_id" => 8,
                "status" => "", "date_assigned" => "2013-09-21", "date_reported" => "2013-07-12", "division" => "AHTRAD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //60
            ["name" => "Abduction case against Ming Li Chiu", "details" => "", "complaint_id" => 60, "agent_id" => 10916649, "complainant_id" => 9,
                "status" => "", "date_assigned" => "2013-10-11", "date_reported" => "2013-09-22", "division" => "AHTRAD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //**AOCD**//
            //61
            ["name" => "OFW aborted her daughter", "details" => "", "complaint_id" => 61, "agent_id" => 10930111, "complainant_id" => 10,
                "status" => "", "date_assigned" => "2013-10-12", "date_reported" => "2013-06-29", "division" => "AOCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //62
            ["name" => "Man killed his own son in their own house", "details" => "", "complaint_id" => 62, "agent_id" => 10916650, "complainant_id" => 11,
                "status" => "", "date_assigned" => "2013-10-12", "date_reported" => "2013-06-28", "division" => "AOCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //63
            ["name" => "High school exchange student raped his teacher", "details" => "", "complaint_id" => 63, "agent_id" => 10916650, "complainant_id" => 12,
                "status" => "", "date_assigned" => "2013-10-12", "date_reported" => "2013-06-04", "division" => "AOCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //64
            ["name" => "Theft in Makati Memorial Center", "details" => "", "complaint_id" => 64, "agent_id" => 10930111, "complainant_id" => 13,
                "status" => "", "date_assigned" => "2013-10-12", "date_reported" => "2013-06-04", "division" => "AOCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //65
            ["name" => "Teen charged with killing his father in Cebu", "details" => "", "complaint_id" => 65, "agent_id" => 10916650, "complainant_id" => 14,
                "status" => "", "date_assigned" => "2013-06-10", "date_reported" => "2013-02-04", "division" => "AOCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //66
            ["name" => "Welder from Surigao pushed co-welder off the roof, co-welder dead on arrival", "details" => "", "complaint_id" => 66, "agent_id" => 10930111, "complainant_id" => 15,
                "status" => "", "date_assigned" => "2013-06-10", "date_reported" => "2013-02-04", "division" => "AOCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //67
            ["name" => "Girl dead inside boyfriend's car", "details" => "", "complaint_id" => 67, "agent_id" => 10930111, "complainant_id" => 16,
                "status" => "", "date_assigned" => "2013-07-27", "date_reported" => "2013-01-05", "division" => "AOCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //68
            ["name" => "Father killed his son in exchange for drugs", "details" => "", "complaint_id" => 68, "agent_id" => 10916651, "complainant_id" => 17,
                "status" => "", "date_assigned" => "2013-07-27", "date_reported" => "2013-02-28", "division" => "AOCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //69
            ["name" => "Man arrested in bingo hall armed robbery", "details" => "", "complaint_id" => 69, "agent_id" => 10916651, "complainant_id" => 18,
                "status" => "", "date_assigned" => "2013-07-27", "date_reported" => "2013-06-10", "division" => "AOCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //70
            ["name" => "Libel case against Mass Communications student, Anthony Manalo", "details" => "", "complaint_id" => 70, "agent_id" => 10930111, "complainant_id" => 19,
                "status" => "", "date_assigned" => "2013-04-01", "date_reported" => "2013-02-04", "division" => "AOCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //**CCD**//
            //71
            ["name" => "Politician sets abandoned building on fire after having an affair", "details" => "", "complaint_id" => 71, "agent_id" => 10916652, "complainant_id" => 20,
                "status" => "", "date_assigned" => "2009-07-27", "date_reported" => "2009-06-10", "division" => "CCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //72
            ["name" => "Slander case against blogger about first amendment questions", "details" => "", "complaint_id" => 72, "agent_id" => 10930113, "complainant_id" => 21,
                "status" => "", "date_assigned" => "2013-04-01", "date_reported" => "2013-02-03", "division" => "CCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //73
            ["name" => "$60 million libel lawsuit case against politician", "details" => "", "complaint_id" => 73, "agent_id" => 10930113, "complainant_id" => 22,
                "status" => "", "date_assigned" => "2013-08-10", "date_reported" => "2013-06-03", "division" => "CCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //74
            ["name" => "Robbery inside Citibank Alabang", "details" => "", "complaint_id" => 74, "agent_id" => 10916652, "complainant_id" => 23,
                "status" => "", "date_assigned" => "2013-08-10", "date_reported" => "2013-06-03", "division" => "CCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //75
            ["name" => "American raped Korean student inside Malate boarding house", "details" => "", "complaint_id" => 75, "agent_id" => 10916652, "complainant_id" => 27,
                "status" => "", "date_assigned" => "2013-08-10", "date_reported" => "2013-06-03", "division" => "CCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //76
            ["name" => "Doctor cheated on his wife and raped his niece", "details" => "", "complaint_id" => 76, "agent_id" => 10930113, "complainant_id" => 24,
                "status" => "", "date_assigned" => "2013-09-13", "date_reported" => "2013-09-10", "division" => "CCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //77
            ["name" => "Korean drug dealer murdered high school student", "details" => "", "complaint_id" => 77, "agent_id" => 10916653, "complainant_id" => 25,
                "status" => "", "date_assigned" => "2010-01-13", "date_reported" => "2010-12-31", "division" => "CCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //78
            ["name" => "Fake iPhone 5S units in Greenhills counterfeited by African-Americans", "details" => "", "complaint_id" => 78, "agent_id" => 10916653, "complainant_id" => 26,
                "status" => "", "date_assigned" => "2010-12-29", "date_reported" => "2010-12-04", "division" => "CCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //79
            ["name" => "Counterfeit dollar bills printed for bank payment", "details" => "", "complaint_id" => 79, "agent_id" => 10916653, "complainant_id" => 28,
                "status" => "", "date_assigned" => "2010-12-03", "date_reported" => "2010-11-11", "division" => "CCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //80
            ["name" => "Chinese businessman kidnaps elementary school kid", "details" => "", "complaint_id" => 80, "agent_id" => 10916653, "complainant_id" => 29,
                "status" => "", "date_assigned" => "2009-12-23", "date_reported" => "2009-11-21", "division" => "CCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //EWPID
            //81-90
            ["name" => "Forgery case against Bea Puzon", "details" => "", "complaint_id" => 81, "agent_id" => 10930204, "complainant_id" => 61,
                "status" => "", "date_assigned" => "2008-12-11", "date_reported" => "2008-11-30", "division" => "EWPID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Gambling in the street case against Bernice Bassig", "details" => "", "complaint_id" => 82, "agent_id" => 10930204, "complainant_id" => 62,
                "status" => "", "date_assigned" => "2008-12-12", "date_reported" => "2008-11-01", "division" => "EWPID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Sexual Abuse case against Natasha Ocampo", "details" => "", "complaint_id" => 83, "agent_id" => 10930204, "complainant_id" => 63,
                "status" => "", "date_assigned" => "2008-12-13", "date_reported" => "2008-11-02", "division" => "EWPID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Grave Scandal against Katherine Pascual", "details" => "", "complaint_id" => 84, "agent_id" => 10930205, "complainant_id" => 64,
                "status" => "", "date_assigned" => "2010-12-14", "date_reported" => "2010-11-03", "division" => "EWPID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Public disorder against Timi Gatdula", "details" => "", "complaint_id" => 85, "agent_id" => 10930205, "complainant_id" => 65,
                "status" => "", "date_assigned" => "2010-12-15", "date_reported" => "2010-11-04", "division" => "EWPID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Direct Assault against Mia Serra", "details" => "", "complaint_id" => 86, "agent_id" => 10930205, "complainant_id" => 66,
                "status" => "", "date_assigned" => "2011-12-16", "date_reported" => "2011-11-05", "division" => "EWPID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Forgery against Elayssa Ferias", "details" => "", "complaint_id" => 87, "agent_id" => 10930205, "complainant_id" => 67,
                "status" => "", "date_assigned" => "2011-12-17", "date_reported" => "2011-11-06", "division" => "EWPID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Bribery against Pamela Mendiola", "details" => "", "complaint_id" => 88, "agent_id" => 10930206, "complainant_id" => 68,
                "status" => "", "date_assigned" => "2011-12-18", "date_reported" => "2011-11-07", "division" => "EWPID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Prohibited transaction case against Judith Pasay", "details" => "", "complaint_id" => 89, "agent_id" => 10930206, "complainant_id" => 69,
                "status" => "", "date_assigned" => "2011-12-19", "date_reported" => "2011-11-08", "division" => "EWPID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Infidelity against Mikaella Makati", "details" => "", "complaint_id" => 90, "agent_id" => 10930206, "complainant_id" => 70,
                "status" => "", "date_assigned" => "2013-12-20", "date_reported" => "2013-11-09", "division" => "EWPID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //DID
            //91-100
            ["name" => "Disobedience against Junelle Recto", "details" => "", "complaint_id" => 91, "agent_id" => 10930201, "complainant_id" => 71,
                "status" => "", "date_assigned" => "2011-12-21", "date_reported" => "2011-11-10", "division" => "DID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Relevance of secret case against Jesebel Osmena", "details" => "", "complaint_id" => 92, "agent_id" => 10930201, "complainant_id" => 722,
                "status" => "", "date_assigned" => "2011-12-22", "date_reported" => "2011-11-11", "division" => "DID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Maltreatment of Prisoner against SPO1. Michael Enriquez", "details" => "", "complaint_id" => 93, "agent_id" => 10930201, "complainant_id" => 73,
                "status" => "", "date_assigned" => "2012-12-23", "date_reported" => "2012-11-12", "division" => "DID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Usurpation againts Corazon Cojuangco", "details" => "", "complaint_id" => 94, "agent_id" => 10930201, "complainant_id" => 74,
                "status" => "", "date_assigned" => "2012-12-24", "date_reported" => "2012-11-13", "division" => "DID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Suicide committed by James Martinez", "details" => "", "complaint_id" => 95, "agent_id" => 10930202, "complainant_id" => 75,
                "status" => "", "date_assigned" => "2012-12-25", "date_reported" => "2012-11-14", "division" => "DID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Abortion against Lucila Criselda", "details" => "", "complaint_id" => 96, "agent_id" => 10930202, "complainant_id" => 76,
                "status" => "", "date_assigned" => "2012-12-26", "date_reported" => "2012-11-15", "division" => "DID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Infanticide against Fernando Amorsolo", "details" => "", "complaint_id" => 97, "agent_id" => 10930202, "complainant_id" => 77,
                "status" => "", "date_assigned" => "2013-12-27", "date_reported" => "2013-11-16", "division" => "DID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Serious illegal detention against Janet Lim Napoles", "details" => "", "complaint_id" => 98, "agent_id" => 10930202, "complainant_id" => 78,
                "status" => "", "date_assigned" => "2013-12-28", "date_reported" => "2013-11-17", "division" => "DID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Kidnapping against Darwin Daroy", "details" => "", "complaint_id" => 99, "agent_id" => 10930203, "complainant_id" => 79,
                "status" => "", "date_assigned" => "2013-12-29", "date_reported" => "2013-11-18", "division" => "DID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Slavery against Enrico Roco", "details" => "", "complaint_id" => 100, "agent_id" => 10930203, "complainant_id" => 80,
                "status" => "", "date_assigned" => "2013-12-30", "date_reported" => "2013-11-19", "division" => "DID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //IPRD
            //101-110
            ["name" => "Drunk driving case against Jonathan Ochoa", "details" => "", "complaint_id" => 101, "agent_id" => 10930207, "complainant_id" => 51,
                "status" => "", "date_assigned" => "2009-05-02", "date_reported" => "2009-05-01", "division" => "IPRD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Possession of dangerous drugs for sale against Ernesto Villamin", "details" => "", "complaint_id" => 102, "agent_id" => 10930207, "complainant_id" => 52,
                "status" => "", "date_assigned" => "2009-05-04", "date_reported" => "2009-05-02", "division" => "IPRD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Vandalism case against Armando Villena", "details" => "", "complaint_id" => 103, "agent_id" => 10930207, "complainant_id" => 53,
                "status" => "", "date_assigned" => "2010-05-05", "date_reported" => "2010-05-03", "division" => "IPRD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Robbery case against Carlo Sta. Cruz and Patrick Hubalde", "details" => "", "complaint_id" => 104, "agent_id" => 10930208, "complainant_id" => 54,
                "status" => "", "date_assigned" => "2010-05-06", "date_reported" => "2010-05-05", "division" => "IPRD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Treason case against Algeirn Cupido", "details" => "", "complaint_id" => 105, "agent_id" => 10930208, "complainant_id" => 55,
                "status" => "", "date_assigned" => "2011-05-10", "date_reported" => "2011-05-08", "division" => "IPRD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Espionage case against Joey Gutierrez", "details" => "", "complaint_id" => 106, "agent_id" => 10930208, "complainant_id" => 56,
                "status" => "", "date_assigned" => "2012-05-13", "date_reported" => "2012-05-10", "division" => "IPRD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Robbery case against Andy Kanto", "details" => "", "complaint_id" => 107, "agent_id" => 10930208, "complainant_id" => 57,
                "status" => "", "date_assigned" => "2012-05-18", "date_reported" => "2012-05-10", "division" => "IPRD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Rape case against Kevin Macatangay", "details" => "", "complaint_id" => 108, "agent_id" => 10930208, "complainant_id" => 58,
                "status" => "", "date_assigned" => "2013-05-20", "date_reported" => "2013-05-18", "division" => "IPRD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Domestic violence case against Juan Abadicio", "details" => "", "complaint_id" => 109, "agent_id" => 10930209, "complainant_id" => 59,
                "status" => "", "date_assigned" => "2013-05-25", "date_reported" => "2013-05-18", "division" => "IPRD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Petty Theft case against Abo Acleb", "details" => "", "complaint_id" => 110, "agent_id" => 10930209, "complainant_id" => 60,
                "status" => "", "date_assigned" => "2013-05-30", "date_reported" => "2013-05-18", "division" => "IPRD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //RAID
            //111-120
            ["name" => "Arbitrary detention case against Carlito Alupido ", "details" => "", "complaint_id" => 111, "agent_id" => 10930210, "complainant_id" => 81,
                "status" => "", "date_assigned" => "2010-02-02", "date_reported" => "2010-01-30", "division" => "RAID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Expulsion against Samuel Aglipay", "details" => "", "complaint_id" => 112, "agent_id" => 10930210, "complainant_id" => 82,
                "status" => "", "date_assigned" => "2010-02-03", "date_reported" => "2010-02-02", "division" => "RAID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Violation of domicile case against Ricardo Aglido", "details" => "", "complaint_id" => 113, "agent_id" => 10930210, "complainant_id" => 83,
                "status" => "", "date_assigned" => "2010-02-07", "date_reported" => "2010-02-02", "division" => "RAID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Prohibition, interruption, and dissolution of peaceful meetings case Benigno Afrilami", "details" => "", "complaint_id" => 114, "agent_id" => 10930210, "complainant_id" => 84,
                "status" => "", "date_assigned" => "2011-02-15", "date_reported" => "2011-02-10", "division" => "RAID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Rebellion case against Daniel Bercasio", "details" => "", "complaint_id" => 115, "agent_id" => 10930211, "complainant_id" => 85,
                "status" => "", "date_assigned" => "2011-02-17", "date_reported" => "2011-02-10", "division" => "RAID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Disloyalty case against Eclestio Borromeo", "details" => "", "complaint_id" => 116, "agent_id" => 10930211, "complainant_id" => 86,
                "status" => "", "date_assigned" => "2013-02-18", "date_reported" => "2013-02-16", "division" => "RAID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Disturbance of proceedings case against Mark Bermudez", "details" => "", "complaint_id" => 117, "agent_id" => 10930211, "complainant_id" => 87,
                "status" => "", "date_assigned" => "2013-02-20", "date_reported" => "2013-02-19", "division" => "RAID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Illegal Assemblies case against Dave Bermillo", "details" => "", "complaint_id" => 118, "agent_id" => 10930212, "complainant_id" => 88,
                "status" => "", "date_assigned" => "2013-02-22", "date_reported" => "2013-02-22", "division" => "RAID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Direct assault against Annete Cruz", "details" => "", "complaint_id" => 119, "agent_id" => 10930212, "complainant_id" => 89,
                "status" => "", "date_assigned" => "2014-02-27", "date_reported" => "2014-02-27", "division" => "RAID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Direct assault against Angela Criselda", "details" => "", "complaint_id" => 120, "agent_id" => 10930212, "complainant_id" => 90,
                "status" => "", "date_assigned" => "2014-02-28", "date_reported" => "2014-02-27", "division" => "RAID", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //VAWCD
            //121-130
            ["name" => "Public disorder case against Aubrey Catindig", "details" => "", "complaint_id" => 121, "agent_id" => 10930213, "complainant_id" => 91,
                "status" => "", "date_assigned" => "2009-10-01", "date_reported" => "2009-09-30", "division" => "VAWCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Forgery against Miley Cauricio", "details" => "", "complaint_id" => 122, "agent_id" => 10930213, "complainant_id" => 92,
                "status" => "", "date_assigned" => "2009-10-01", "date_reported" => "2009-10-01", "division" => "VAWCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Falsification case against Ashley Dagonoy", "details" => "", "complaint_id" => 123, "agent_id" => 10930213, "complainant_id" => 93,
                "status" => "", "date_assigned" => "2010-10-04", "date_reported" => "2010-10-02", "division" => "VAWCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Fraud case against Nicole Dalig", "details" => "", "complaint_id" => 124, "agent_id" => 10930214, "complainant_id" => 94,
                "status" => "", "date_assigned" => "2010-10-07", "date_reported" => "2010-10-06", "division" => "VAWCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Dereliction of duty case against Trixie Duterte", "details" => "", "complaint_id" => 125, "agent_id" => 10930214, "complainant_id" => 95,
                "status" => "", "date_assigned" => "2011-10-11", "date_reported" => "2011-10-10", "division" => "VAWCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Bribery against Rosanna Fernando", "details" => "", "complaint_id" => 126, "agent_id" => 10930214, "complainant_id" => 96,
                "status" => "", "date_assigned" => "2011-10-12", "date_reported" => "2011-10-12", "division" => "VAWCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Prohibited transaction case against Rosanne Fuentes", "details" => "", "complaint_id" => 127, "agent_id" => 10930214, "complainant_id" => 97,
                "status" => "", "date_assigned" => "2012-10-16", "date_reported" => "2012-10-15", "division" => "VAWCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Infidelity case against Reggie Faminial", "details" => "", "complaint_id" => 128, "agent_id" => 10930215, "complainant_id" => 98,
                "status" => "", "date_assigned" => "2012-10-22", "date_reported" => "2012-10-20", "division" => "VAWCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Disobedience case againt Lauren Marinias", "details" => "", "complaint_id" => 129, "agent_id" => 10930215, "complainant_id" => 99,
                "status" => "", "date_assigned" => "2012-10-23", "date_reported" => "2012-10-20", "division" => "VAWCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            ["name" => "Forgery against Lovely Bueno and Leslie Antonio", "details" => "", "complaint_id" => 130, "agent_id" => 10930215, "complainant_id" => 100,
                "status" => "", "date_assigned" => "2013-10-30", "date_reported" => "2013-10-29", "division" => "VAWCD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
//*********************************************************************************************************************************************************
//*********************************************************************************************************************************************************                
            //CASE FROM NBI PRESS RELEASE
            //131*****************************************************
            ["name" => "Jose and Dima Sampulna and Roberto and Jimmy Ato - Murder Case",
                "details" => "Four (4) suspects in the cold blooded murder of Italian missionary priest Fr. Fausto C. Tentorio were recommended for prosecution by the National Bureau of Investigation (NBI) before the Provincial Prosecutor of Kidapawan City, North Cotabato last week.

        		In a report submitted to NBI Officer-in-Charge, Atty. Nonnatus Caesar R. Rojas, the suspects were identified as:
				1.   JOSE SULTAN SAMPULNA, of Doroluman, Arakan, North Cotabato, who drove the black Yamaha DT motorbike ridden by the gunman;
				2.   DIMA MALIGUDAN SAMPULNA, of Purok Rang-ayan, Lower Paatan, Kabakan, North Cotabato;
				3.   ROBERT ATO, of Sitio Mahiwak-hiwak, Kulaman, Arakan, North Cotabato, was the driver of the blue Honda XRM motorbike ridden by JIMMY ATO;
				4.   JIMMY ATO, of Sitio Mahiwak-hiwak, Kulaman, Arakan, North Cotabato, who in his statement, admitted inter alia, as having acted as a 'look-out' for the team of SAMPULNA, who allegedly killed Fr. Pops",
                "complaint_id" => 131, "agent_id" => 10940445, "complainant_id" => 491,
                "status" => "Closed_Finished", "date_assigned" => "2014-02-18", "date_reported" => "2014-02-14", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //132******************************************************
            ["name" => "Bing Sye Poh - Illegal Possession of Dangerous Drugs Case",
                "details" => "The relentless crackdown against international drug syndicates scored anew following the arrest of a Malaysian drug courier or human mule, and the confiscation of P15 million worth of shabu during an operation by operatives of the National Bureau of Investigation (NBI) in Pasay City over the week-end.
				    The suspect was identified by NBI Officer-In-Charge Atty. Nonnatus Caesar R. Rojas as:
				    BING SYE POH, 37, Malaysian national, and a resident of 347 Jalan Bk 2/7 Bandar Kurara, Puchong, Kuala Lumpur, Malaysia.
				",
                "complaint_id" => 132, "agent_id" => 10940447, "complainant_id" => 492,
                "status" => "Closed_Finished", "date_assigned" => "2013-04-01", "date_reported" => "2013-03-26", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //133*******************************************************
            ["name" => "Minsuari Orogan and Salic Langco - Illegal Possession of Firearms Case",
                "details" => "Two Muslim members of a syndicate selling illegal firearms were arrested during a buy-bust operation by agents of the National Bureau of Investigation (NBI) in Quezon City the other day.
       				The suspects were identified by NBI Officer-In-Charge  Atty. Nonnatus Caesar R. Rojas as:
				     MINSUARI LANGCAP OROGAN, 34, security guard, and a resident of Lot 5, Block 25, Don Mariano St., North Fairview, Quezon City; and
				     SALIC MACADATO LANGCO, 39, security guard, and a resident of Block 38, Lot 12, Bayer St., North Fairview, Quezon City.
				",
                "complaint_id" => 133, "agent_id" => 10940446, "complainant_id" => 493,
                "status" => "Closed_Finished", "date_assigned" => "2012-04-03", "date_reported" => "2012-03-29", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //134*********************************************************
            ["name" => "Alfredo Micares Y Atud - Rape and Murder Case",
                "details" => "A construction worker allegedly responsible for the rape slay of a 25-year-old woman was arrested by the agents of the National Bureau Investigation (NBI) in coordination with the Philippine National Police (PNP) in Pasig City during the weekend.
      				 The suspect was identified by NBI Officer-In-Charge Atty. Nonnatus Caesar R. Rojas as ALFREDO MICARES Y ATUD, 35, construction worker and a resident of Teresa Compound, Pilar Village, Rosario, Pasig City.
				   The victim was Anna Ysabel Santos y Cordova, 25, single, and a resident of No. 27 Pearl Compound, Dona Juana Subdivision, Rosario, Pasig City.
				",
                "complaint_id" => 134, "agent_id" => 10940444, "complainant_id" => 494,
                "status" => "Closed_Finished", "date_assigned" => "2012-04-26", "date_reported" => "2012-04-24", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //135*********************************************************
            ["name" => "Warren and William Abulad - Murder Case",
                "details" => "A storekeeper who is a suspect in the brutal killing of a tricycle driver last year was arrested by the National Bureau of Investigation (NBI) in his residence in Lucena City last week.
      				The suspect was identified by NBI Officer-In-Charge Atty. Nonnatus Caesar R. Rojas as:
     				WILLIAM BARRAMEDA ABULAD, 55, a storekeeper, and a former tricycle driver, resident of Bgy. Ilayang Dupay. Lucena City. He was arrested by virtue of a Warrant of Arrest for murder, issued by RTC Presiding Judge Dinah Evangeline Belulia-Bandong, Branch 59, Lucena City docketed in Criminal Case No. 2012-48.
				     The other suspect, Warren Abulad, the son of William is at-large.
				     Victim was Lowell P. Glorioso, a father of four and a tricycle driver.
				",
                "complaint_id" => 135, "agent_id" => 10940445, "complainant_id" => 495,
                "status" => "Closed_Finished", "date_assigned" => "2012-04-29", "date_reported" => "2012-04-20", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //136****************************************************
            ["name" => "King 'Ike' Bautista - Illegal Possession of Dangerous Drugs Case",
                "details" => "In the relentless drive against illegal drugs, the National Bureau of Investigation (NBI) raided a known drug lair and arrested a notorious illegal drugs dealer during a raid in Bacolod City last week.
       				NBI Officer-In-Charge Atty. Nonnatus Caesar R. Rojas identified the arrested suspect as:
					KING BAUTISTA, alias 'Ike' who was convicted for violation of RA 6425 (Anti-Illegal Drugs Act), Robbery, and Attempted Homicide. He has a pending case of another robbery at a Regional Trial Court in Bacolod City.
					",
                "complaint_id" => 136, "agent_id" => 10940447, "complainant_id" => 496,
                "status" => "Closed_Finished", "date_assigned" => "2012-05-30", "date_reported" => "2012-05-23", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //137******************************************************
            ["name" => "Parviz Khaki - Fraud Case",
                "details" => "An Iranian national who was indicted in the United States for conspiracy to defraud the US government was arrested by the National Bureau of Investigation (NBI) agents at the Ninoy Aquino International Airport (NAIA).
       				In a report submitted to NBI Officer-In-Charge Atty. Nonnatus Caesar R. Rojas by the Foreign Liaison Division (FLD) headed by Atty. Claro De Castro, the subject was identified as:
  					PARVIZ KHAKI alias 'Martin', 43, and an Iranian businessman.
					",
                "complaint_id" => 137, "agent_id" => 10940448, "complainant_id" => 497,
                "status" => "Closed_Finished", "date_assigned" => "2012-05-30", "date_reported" => "2012-05-23", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //138*************************************************************
            ["name" => "Mario Reyes Ocampo - Estafa Case",
                "details" => "A member of a swindling syndicate who enticed prospective buyers of supposedly auctioned goods at the Customs bureau was arrested by operatives  of the National Bureau of Investigation (NBI) in an entrapment operation in Intramuros, Manila last Wednesday.
       				Atty. Nonnatus Caesar R. Rojas, Officer-in-Charge of the National Bureau of Investigation, identified the arrested suspect as MARIO REYES OCAMPO, 59, and residing at  of No. 362 Madrid St., Tondo, Manila.",
                "complaint_id" => 138, "agent_id" => 10940448, "complainant_id" => 498,
                "status" => "Closed_Finished", "date_assigned" => "2012-06-01", "date_reported" => "2012-06-01", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //139*************************************************************
            ["name" => "Valerie Santiago Von Such - Estafa Case",
                "details" => "National Bureau of Investigation (NBI) agents nabbed two long wanted fugitives in estafa cases involving millions of pesos in two separate operations conducted in Quezon City last Wednesday.
       				First to fall was VALERIE SANTIAGO VON SUCH alias Valerie Aquino y Such whose vehicle was intercepted by NBI operatives along 12th Avenue, Cubao, Quezon City. Von Such was served a Warrant of Arrest issued in May, 2008 by the Regional Trial Court Branch 85 of Quezon City for the crime of Estafa.",
                "complaint_id" => 139, "agent_id" => 10940448, "complainant_id" => 500,
                "status" => "Closed_Finished", "date_assigned" => "2008-05-16", "date_reported" => "2008-05-15", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //140************************************************************
            ["name" => "Patricio D. Notada - Estafa Case",
                "details" => "The National Bureau of Investigation (NBI) arrested the president of a closed savings and loan bank accused of estafa with several warrants of arrest during an entrapment operation in Quezon City this week.
       				The subject is identified as PATRICIO D. NOTADA, President of the Homeowners Savings & Loan Bank (formerly, Homeowners Savings & Loan Associations, Inc. (HOSLA).
					",
                "complaint_id" => 140, "agent_id" => 10940448, "complainant_id" => 501,
                "status" => "Closed_Finished", "date_assigned" => "2012-03-19", "date_reported" => "2012-03-15", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //141************************************************************
            ["name" => "Juliet Red Rempis - Illegal Recruitment and Estafa Case",
                "details" => "Induced by job opportunities abroad, 80 prospective overseas Filipino workers were duped of P3.2 million pesos by a labor recruiter and four (4) companions who were arrested by the National Bureau of Investigation (NBI) during an entrapment in Manila last Monday.
      				The subject is identified as JULIET RED REMPIS, alias Juliet Rempis Lopez, with postal address at 6/F Room 615, MBI Bldg., Escolta St., Sta. Cruz, Manila;
					   EVELYN AGUIRRE GUNDA;
					   EDGARDO MATA DARIA HONTIVEROS;
					   LEONCIA MACALINTAL FULGENCIO; and;
					   EDGARD RODELAS HONTIVEROS, staff assistants of Rempis.
					",
                "complaint_id" => 141, "agent_id" => 10940448, "complainant_id" => 503,
                "status" => "Closed_Finished", "date_assigned" => "2012-07-10", "date_reported" => "2012-07-06", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //142**************************************************************
            ["name" => "Huang Li Sin - Fraud Case",
                "details" => "Twenty-one Chinese and Taiwanese nationals allegedly involved in telephone fraud victimizing their compatriots were arrested by agents of the National Bureau of Investigation (NBI) during a raid of a resident in Angeles City last week-end.
			     	Investigation report disclosed that the suspects are:
			      	Huang Li Sin; Huang Shih-Ting; Teng Ya-Huei; Chang Shu-Chu; Lai Chao-Ming; Wu Shu-Lun; Lin Jen Chien; Cheng Chih-Lung; You Jiafu; Huang Cheng Hui; Chan Chih Hsien; Yang Yen Chun; and Wang Pai Lu; Lin Shia Hao; all Taiwanese nationals.
			      	Xiang Hong; Hong Xia Juan; Zhang Dongmei; Feng Jianbin; Li Wu Xiu; Luo Jia Xin; and Luo Shi You, all Chinese nationals.
			      	Mr. Shih Liang Shia alias Mr. Chen, the alleged leader of the syndicate, remains at-large.
					",
                "complaint_id" => 142, "agent_id" => 10940448, "complainant_id" => 504,
                "status" => "Closed_Finished", "date_assigned" => "2012-07-08", "date_reported" => "2012-07-05", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //143*************************************************************
            ["name" => "Fernando Del Rosario Geronimo - Falsification, Estafa and Illegal Recruitment Case",
                "details" => "Four members of a large syndicate who gypped over 50 prospective overseas workers of millions of pesos were arrested, including its mastermind, in two separate operations by agents of the National Bureau of Investigation (NBI) recently.
     				The subjects are identified as FERNANDO DEL ROSARIO GERONIMO, alias Fernando Geronimo Batungbakal Jr.; of Global Alliance Consultancy and Immigration Specialist Inc./ United Alliance Consultancy (Cebu City); ANNA LISA G. SAMSON, 45, of Gulod, Norzagaray, Bulacan; RONUALDO G. GERONIMO, 30, a resident of Sapang Palay, San Jose Del Monte, Bulacan; and EVANGELINE 'Van' LIWANAG.
      				At-large are: Cynthia G. Mateo, Alisha Batac, Jess Miniano and Daisy Ibarra.
					",
                "complaint_id" => 143, "agent_id" => 10940448, "complainant_id" => 505,
                "status" => "Closed_Finished", "date_assigned" => "2012-08-27", "date_reported" => "2012-08-17", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //144**************************************************************************
            ["name" => "Tita Cacayan - Illegal Recruitment Case",
                "details" => "A notorious illegal recruiter, Tita Cacayan, who had victimized several overseas Filipino workers (OFW) one of who was a drug courier executed in China, was re-arrested by the National Bureau of Investigation (NBI) in Isabela last Saturday.
     				The case of Cacayan caught much attention in the wake of the NBI's relentless drive against drug mules particularly the West African Drug Syndicate (WADS). The execution of Sally Ordinario Villanueva by Chinese authorities underscores the illegal drug trade which has escalated globally. Cacayan was principally responsible for the travel of Ordinario to China.
						",
                "complaint_id" => 144, "agent_id" => 10940448, "complainant_id" => 508,
                "status" => "Closed_Finished", "date_assigned" => "2012-10-03", "date_reported" => "2012-10-01", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //145**************************************************************************
            ["name" => "Atty. Manuel Jimenez Jr. - Murder Case",
                "details" => "One of the accused in the brutal slaying of Ruby Rose Barrameda-Jimenez was arrested by the National Bureau of Investigation (NBI) in Cauayan, Isabela yesterday afternoon.",
                "complaint_id" => 145, "agent_id" => 10940445, "complainant_id" => 509,
                "status" => "Closed_Finished", "date_assigned" => "2009-06-22", "date_reported" => "2009-06-20", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //146***************************************************************************
            ["name" => "Ronel 'Bryan Antos' Santiago - Kidnapping Case",
                "details" => "A seven year old boy who was abducted was rescued and his kidnappers arrested during an operation by National Bureau of Investigation (NBI) agents in a Manila mall recently.
     				Subjects are identified as: RONEL SANTIAGO aka 'BRYAN ANTOS', a resident of Malabon City ; and RONA SABROSO GADOR, with address at San Jose Del Monte and Malolos, Bulacan.
					",
                "complaint_id" => 146, "agent_id" => 10940447, "complainant_id" => 510,
                "status" => "Closed_Finished", "date_assigned" => "2012-12-22", "date_reported" => "2012-12-14", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //147************************************************************************
            ["name" => "Romar Geroleo and Cipriano Layco - Theft Case",
                "details" => "Two employees of a beauty products firm who stole and sold said merchandise were arrested by agents of the National Bureau of Investigation (NBI) in an entrapment in Makati City last June 2014.
    				The suspects were identified as:
     				ROMAR GEROLEO, driver, and CIPRIANO LAYCO, warehouseman of Beauty Lane Philippines.
					",
                "complaint_id" => 147, "agent_id" => 10940446, "complainant_id" => 511,
                "status" => "Closed_Finished", "date_assigned" => "2012-02-22", "date_reported" => "2013-02-22", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //148*************************************************************************
            ["name" => "Domingo, San Martin, De Jesus, De Castro, Benjie and Randy - Kidnapping Case",
                "details" => "Four members of a kidnap-for-ransom group were arrested while the victim rescued during a shootout between agents of the National Bureau of Investigation (NBI) and the suspects in Manila this morning.
     				The arrested suspects were identified as:
				     GERALD V. DOMINGO, 45, a former Overseas Filipino Worker, a resident of Hizon St., Sta. Cruz, Manila
				     MARY JANE SAN MARTIN, 29, a resident of NPC Village, Bgy. Pasong Tamo, Quezon City.
				     EMMANUEL YANCE DE JESUS.
				     Another suspect, EDWIN S. DE CASTRO, alias Orlando S. Sanchez alias Bong, was rushed to Jose Reyes Memorial Hospital due to gunshot wounds and is in critical condition.
				      The other suspects, one alias Benjie and one alias Randy eluded arrest.
						",
                "complaint_id" => 148, "agent_id" => 10940447, "complainant_id" => 512,
                "status" => "Closed_Finished", "date_assigned" => "2012-04-16", "date_reported" => "2013-04-15", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //149****************************************************************************
            ["name" => "Elias Garcia - Rape Case",
                "details" => "A father who had repeatedly abused his daughter since childhood was arrested by National Bureau of Investigation (NBI) operatives in Pangasinan early this week.
    			 The suspect was identified by NBI Director Nonnatus Caesar R. Rojas as ELIAS GARCIA, a resident of Bgy. Lokeb Norte, Malasique, Pangasinan.
					",
                "complaint_id" => 149, "agent_id" => 10940444, "complainant_id" => 513,
                "status" => "Closed_Finished", "date_assigned" => "2013-05-16", "date_reported" => "2013-05-10", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //150*****************************************************************************
            ["name" => "Humanitarian Migrant Management International Inc. - Fraud Case",
                "details" => "A job recruitment/consultancy firm that victimized a hundred prospective overseas job workers was raided by agents of the National Bureau of Investigation (NBI) and arrested a key official in Baguio City last week.
     				NBI Director Nonnatus Caesar R. Rojas identified the firm as:
				      Humanitarian Migrant Management International Inc. (HMMII), a consultancy agency processing tourist visas, with office address at Room 303, 3rd Floor, Jose Miguel Bldg. 2, #1 Yandoc St. cor. Naguilian Road, Baguio City.
				      The officers of the agency are:
				   1. SYDNEY ROCHE with aliases JOSEPH FERNANDEZ, JOSEPH CLIFFORD and KENNEY STEWART, founder and foreign principal of said agency;
				    2. MAYMA IMPERIAL, president and CEO;
				    3. GINA EBENG, personal assistant to the president and CEC; and
				    4. LIBERTY LEBENG, accounting and finance management officer/cashier.
					",
                "complaint_id" => 150, "agent_id" => 10940448, "complainant_id" => 514,
                "status" => "Closed_Finished", "date_assigned" => "2013-06-05", "date_reported" => "2013-05-28", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //151*****************************************************************************
            ["name" => "Alfredo Alejo Cabardo Jr. - Estafa Case",
                "details" => "A former employee of a closed rural bank who kept without authority dozens of land titles and demanded money for their redemption was apprehended by agents of the National Bureau of Investigation (NBI) during an entrapment in Bukidnon last week.
				     The suspects were identified by NBI Director Nonnatus Caesar R. Rojas as: ALFREDO ALEJO CABARDO JR., a resident of Puro 17-A, Valencia City, Bukidnon.
				",
                "complaint_id" => 151, "agent_id" => 10940447, "complainant_id" => 515,
                "status" => "Closed_Finished", "date_assigned" => "2013-06-14", "date_reported" => "2013-06-11", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //152*************************************************************************
            ["name" => "Rowell Valdez - Estafa Case",
                "details" => "A man who misrepresented himself as an architect and allegedly involved in a multi-million peso project was arrested by agents of the National Bureau of Investigation (NBI) during an entrapment in Baguio City recently.
				    The suspect was identified by NBI Director Nonnatus Caesar R. Rojas as: ROWELL VALDEZ, 21, single, a resident of #49 Sampaguita, Bgy. San Luis, Baguio City.
				",
                "complaint_id" => 152, "agent_id" => 10940447, "complainant_id" => 517,
                "status" => "Closed_Finished", "date_assigned" => "2013-06-18", "date_reported" => "2013-06-13", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //153*************************************************************************
            ["name" => "Ronel Martel Roble - Kidnapping Case",
                "details" => "A kidnapped Overseas Filipino Worker (OFW) was rescued while one of the abductors arrested, and another killed during an operation conducted by the National Bureau of Investigation (NBI) agents in Talisay City, Cebu.
				     The suspect was identified by NBI Director Nonnatus Caesar R. Rojas as:
				       RONELO MARTEL ROBLE, 47, married, of Kalinaw 2, San Rafael, Talisay, Cebu;
				      At-large are: PO3 Lee Colina, of PNP Cebu City, a John Doe and a Peter Doe.
				    Killed during the operation was Wane B. Tiano, a member of the kidnapping group.
					",
                "complaint_id" => 153, "agent_id" => 10940447, "complainant_id" => 518,
                "status" => "Closed_Finished", "date_assigned" => "2013-06-24", "date_reported" => "2013-06-19", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //154*************************************************************************
            ["name" => "Varona, Garcia, Bolivar and Dormiendo - Fraud Case",
                "details" => "Three cyber technology specialists engaged in unauthorized use of facilities belonging to a legitimate telephone company was arrested by the National Bureau of Investigation (NBI) agents in Makati City recently.
				     NBI Director Nonnatus Caesar R. Rojas identified the suspects as:
				       DANDIN CALVEZ VARONA, IT Specialist of East West Placement Center, Inc., and a resident of No. 11 Leonardo St., Tramo Lane, Pasay City;
				      ADRIAN JAY CARDENAS GARCIA, IT Technical Support of East West Placement Center Inc., and a resident of No. 7715 Coronado St., Guadalupe Viejo, Makati City; and
				   JEFFERSON MADRID BOLIVAR, Computer Technician, of East West Placement Center Inc., and a resident of No. 5 Calleja St., Signal Village, Taguig City.
				    At-large is Rizaline O. Dormiendo, President and CEO of East West Placement Center Inc.
					",
                "complaint_id" => 154, "agent_id" => 10940448, "complainant_id" => 519,
                "status" => "Closed_Finished", "date_assigned" => "2013-07-03", "date_reported" => "2013-07-01", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //155*************************************************************************
            ["name" => "Edgar 'Egay' Ramos and Rolando 'Juzzar' De Chavez - Rape and Murder Case",
                "details" => "A jobless man and his drinking companion who raped and killed a 6-year-old grade school pupil were arrested by agents of the National Bureau of Investigation (NBI) in Candelaria, Quezon last week.
                
				     The NBI identified the suspects as:
				     EDGAR “EGAY CULTURA RAMOS, 42; and
				     ROLANDO “JUZZAR” GUTLAY DE CHAVEZ, 46, carpenter and both residents of Barangay Pahinga Norte, 
				     Candelaria, Quezon.",
                "complaint_id" => 155, "agent_id" => 10940444, "complainant_id" => 520,
                "status" => "Closed_Finished", "date_assigned" => "2013-08-01", "date_reported" => "2013-07-29", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //156*************************************************************************
            ["name" => "Marcial Ronquillo Bernardo - Illegal Recruitment Case",
                "details" => "Four (4) illegal labor recruiters who promised to several women jobs as entertainers overseas were arrested by agents of the National Bureau of Investigation (NBI) in Bulacan last week.
			     The NBI identified the suspects as: MARCIAL RONQUILLO BERNARDO, of legal age, a resident of 126 Bgy. San Pablo, Hagonoy, Bulacan; MASAKAZI HIRATSUKA, in his 50s; NOBUHARU KOBATAKE, 67; and TEROO TSUDA, 48, all friends of Bernardo and from Tokyo, Japan.
			",
                "complaint_id" => 156, "agent_id" => 10940448, "complainant_id" => 521,
                "status" => "Closed_Finished", "date_assigned" => "2013-08-01", "date_reported" => "2013-07-29", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //157*************************************************************************
            ["name" => "Jarvis Guy Lopez - Robbery, Rape, Kidnapping and Serious Illegal Detention Case",
                "details" => "This pertains to a case involving a criminal elements led by a certain JARVIS GUY LOPEZ with residence address located at 20-C Saragoza Street, Brgy. Doña Imelda, Quezon City charged for series of Robbery with Intimidation, Robberry with Rape and Kidnapping and Serious Illegal Detention) before the National Prosecution Service, Quezon City.
	
					This stemmed from series of complaints of victims in the “escort service” whom the accused preyed upon in its criminal activities. The group was able to victimize a total of seven (7) females in its series of kidnapping and robbery activities.",
                "complaint_id" => 157, "agent_id" => 10940446, "complainant_id" => 522,
                "status" => "Closed_Finished", "date_assigned" => "2014-01-20", "date_reported" => "2014-01-13", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //158*************************************************************************
            ["name" => "Mary Jane Dela Concepcion - Illegal Recruitment Case",
                "details" => "An illegal recruiter who victimized applicants from different provinces with a promised of employment in Italy was arrested by agents of the National Bureau of Investigation (NBI).
      				NBI Director Virgilio L. Mendez identified the suspect as MARY JANE VALDEZ DELA CONCEPCION, of Block 1 Lot 16, Dona Fidela Village, San Roque, Sto. Tomas, Batangas
					",
                "complaint_id" => 158, "agent_id" => 10940448, "complainant_id" => 524,
                "status" => "Closed_Finished", "date_assigned" => "2014-03-13", "date_reported" => "2014-03-12", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //159*************************************************************************
            ["name" => "Cedric Lee and Simeon Raz - Serious Illegal Detention and Grave Coercions Case",
                "details" => "On April 26, 2014 (Saturday) at the town of Oras, Eastern Samar, accused CEDRIC CUA LEE and SIMEON PALMA RAZ were arrested by joint operatives of the NBI, ISAFP, and PNP by virtue of hereunder Warrants of Arrest as a result of the investigation of this Bureau and preliminary investigation conducted by the Department of Justice (DOJ) relative to the complaint of FERDINAND “VHONG” NAVARRO against CEDRIC LEE, ET AL. for Serious Illegal Detention and Grave Coercion.",
                "complaint_id" => 159, "agent_id" => 10940446, "complainant_id" => 525,
                "status" => "Closed_Finished", "date_assigned" => "2014-02-02", "date_reported" => "2014-02-02", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //160*************************************************************************
            ["name" => "Albert So - Illegal Possession of Dangerous Drugs Case",
                "details" => "A Chinese national was arrested by operatives of the National Bureau of Investigation – Anti Organized and Transnational Crime Division (NBI-AOTCD) agents during an operation in Binondo, Manila recently.
				     The suspect is identified by NBI Director Virgilio L. Mendez as:
				     ALBERT SO, legal age and a resident of 15B Lee Tower Condominium, Sabino Padilla Street, Binondo Manila.
				",
                "complaint_id" => 160, "agent_id" => 10940447, "complainant_id" => 526,
                "status" => "Closed_Finished", "date_assigned" => "2014-05-07", "date_reported" => "2014-05-02", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //161*************************************************************************
            ["name" => "Hadji Cader Ali Sarosong - Illegal Possession of Firearms Case",
                "details" => "An illegal manufacturer of firearms was arrested by a combined team of NBI–Iligan District Office (NBI-ILDO) agents and operatives from the Philippine Army (PA) and Philippine National Police (PNP) yesterday.
      				The suspect is identified by NBI Director Virgilio L. Mendez as:
    				HADJI CADER ALI SAROSONG, legal age of Unayan Street, Lumbaca Madaya, Marawi City.
					",
                "complaint_id" => 161, "agent_id" => 10940446, "complainant_id" => 527,
                "status" => "Closed_Finished", "date_assigned" => "2014-05-16", "date_reported" => "2014-05-13", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
//****************************************************************************************************************************************************************//
//****************************************************************************************************************************************************************//
            //CASE FROM WIKIPILIPINAS
            //162
            ["name" => "Roberto A. Albana - Illegal Recruitment Case",
                "details" => "Roberto Albaña y Alpajaro is included in the National Bureau of Investigation's(NBI) Most Wanted List for large scale illegal recruitment.",
                "complaint_id" => 162, "agent_id" => 10940448, "complainant_id" => 651,
                "status" => "Closed_Finished", "date_assigned" => "1995-08-15", "date_reported" => "1995-08-10", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //163
            ["name" => "Rodolfo Alcalde - Murder Case",
                "details" => "Rodolfo Alcalde, a former Patrolman, is included in the National Bureau of Investigation's Most Wanted List for the crime of murder.",
                "complaint_id" => 163, "agent_id" => 10940445, "complainant_id" => 652,
                "status" => "Closed_Finished", "date_assigned" => "1990-02-14", "date_reported" => "1990-02-11", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //164
            ["name" => "Narding Anzures - Murder Case",
                "details" => "Bernardo 'Narding' Anzures, a former child actor, was the leading man of Lilian Velez in several films. Anzures found out that Lilian was going to have another leading man, Jaime de la Rosa.

          On the night of June 26, 1948, he broke into Velez’s house and stabbed her and her housemaid to death. The only surviving witness was Velez’s four-year-old daughter.

          Anzures was tried and convicted of murder, and later died in prison of tuberculosis.",
                "complaint_id" => 164, "agent_id" => 10940445, "complainant_id" => 653,
                "status" => "Closed_Finished", "date_assigned" => "1948-07-01", "date_reported" => "1948-06-30", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //165
            ["name" => "Mario Azcarraga y Relebo - Robbery Case",
                "details" => "Mario Azcarraga y Relebo is on the National Bureau of Investigation's Most Wanted list.",
                "complaint_id" => 165, "agent_id" => 10940446, "complainant_id" => 606,
                "status" => "Closed_Finished", "date_assigned" => "1997-08-22", "date_reported" => "1997-08-20", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //166
            ["name" => "Veronico B. Bagamasbad - Murder, Direct Assault and Illegal Possession of Firearms, Ammunitions and Explosives Case",
                "details" => "Veronico Bagamasbad y Benjamin alias Kris Sarmiento/Onel/Dondon is on the National Bureau of Investigation's Most Wanted list.",
                "complaint_id" => 166, "agent_id" => 10940444, "complainant_id" => 654,
                "status" => "Closed_Finished", "date_assigned" => "1993-07-28", "date_reported" => "1993-07-25", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //167
            ["name" => "Amado Bucala - Murder and Espionage Case",
                "details" => "Amado Bucala (alias George Corpuz, Taba, Joven, Engineer Corpuz, Humilde Corpuz, and Botyog) is on the Philippine National Police's Most Wanted list. He was charged with murder and being the leader of a 50 million kidnap-for-ransom gang.",
                "complaint_id" => 167, "agent_id" => 10940444, "complainant_id" => 655,
                "status" => "Closed_Finished", "date_assigned" => "1999-07-25", "date_reported" => "1999-07-20", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //168
            ["name" => " Roberto Buenaventura - Rape Case",
                "details" => "Roberto Buenaventura is on the PNP's Most Wanted list for the rape of minors Helen Parchamento, Mylene Juliano, and Janet Castro.",
                "complaint_id" => 168, "agent_id" => 10940444, "complainant_id" => 611,
                "status" => "Closed_Finished", "date_assigned" => "1999-12-27", "date_reported" => "1999-12-23", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //169
            ["name" => "Victor Castigador - Murder Case",
                "details" => "Víctor Castigador was the perpetrator of an infamous grudge attack on an amusement arcade in London, which burned two security guards to death and badly injured two other people.",
                "complaint_id" => 169, "agent_id" => 10940445, "complainant_id" => 656,
                "status" => "Closed_Finished", "date_assigned" => "1989-11-16", "date_reported" => "1989-11-14", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //170
            ["name" => "Neil 'Jojo' Cutad - Kidnapping Case",
                "details" => "Neil Cutad alias Jojo is on the Philippine National Police's Most Wanted list.",
                "complaint_id" => 170, "agent_id" => 10940447, "complainant_id" => 657,
                "status" => "Closed_Finished", "date_assigned" => "2001-04-30", "date_reported" => "2001-04-27", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //171
            ["name" => "Corey Dickpus - Murder Case",
                "details" => "Corey Dickpus is a former vice mayor and politician and the younger brother of Mayor Johnny Dickpus of Lubuagan, Kalinga.",
                "complaint_id" => 171, "agent_id" => 10940444, "complainant_id" => 658,
                "status" => "Closed_Finished", "date_assigned" => "1994-07-30", "date_reported" => "1994-07-21", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //172
            ["name" => "Allan Estrada - Kidnapping Case",
                "details" => "Allan Estrada, a former policeman, is on the Philippine National Police's Most Wanted list.",
                "complaint_id" => 172, "agent_id" => 10940448, "complainant_id" => 659,
                "status" => "Closed_Finished", "date_assigned" => "1996-12-12", "date_reported" => "1996-12-06", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //173
            ["name" => "Tony De Leon and Ernie Velasco - Estafa Case",
                "details" => "Andre Lee Evangelista, also known as Tony de Leon and Ernie Velasco, is currently on the National Bureau of Investigation's Most Wanted List for 2 counts of estafa or swindling.",
                "complaint_id" => 173, "agent_id" => 10940447, "complainant_id" => 616,
                "status" => "Closed_Finished", "date_assigned" => "2003-07-26", "date_reported" => "2003-07-22", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //174
            ["name" => "Aldrin Bonobo Fajardo - Robbery Case",
                "details" => "Aldrin Bonobo Fajardo is on the Philippine National Police's Most Wanted list for robbery.",
                "complaint_id" => 174, "agent_id" => 10940446, "complainant_id" => 660,
                "status" => "Closed_Finished", "date_assigned" => "2002-04-05", "date_reported" => "2002-04-01", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //175
            ["name" => "Harold Fajardo - Kidnapping Case",
                "details" => "Harold Fajardo alias Harold, is on the Philippine National Police's Most Wanted list for the crime of kidnap for ransom and violation of R.A. 6539 (Anti-Carnapping Act).",
                "complaint_id" => 175, "agent_id" => 10930216, "complainant_id" => 661,
                "status" => "Non-viable", "date_assigned" => "2001-10-15", "date_reported" => "2001-10-12", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //176
            ["name" => "Rolando Fajardo - Kidnapping Case",
                "details" => "Rolando Fajardo is on the Philippine National Police's most wanted list for the crime of kidnap for ransom.",
                "complaint_id" => 176, "agent_id" => 10940448, "complainant_id" => 662,
                "status" => "Closed_Finished", "date_assigned" => "2004-01-30", "date_reported" => "2004-01-23", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //177
            ["name" => "Rolando Gobiana - Robbery Case",
                "details" => "Rolando Gobiana is on the National Bureau of Investigation's Most Wanted list for robbery.",
                "complaint_id" => 177, "agent_id" => 10930216, "complainant_id" => 620,
                "status" => "Closed_Unfinished", "date_assigned" => "1993-03-25", "date_reported" => "1993-03-21", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //178
            ["name" => "Jaime Gonzales - Robbery Case",
                "details" => "Jaime Gonzales is on the Philippine National Police's Most Wanted list for robbery.",
                "complaint_id" => 178, "agent_id" => 10930217, "complainant_id" => 621,
                "status" => "Non-viable", "date_assigned" => "1995-12-23", "date_reported" => "1995-12-22", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //179
            ["name" => "Eduardo 'Boy Muslim' Iran - Robbery, Kidnapping and Murder Case",
                "details" => "Eduardo Iran alias 'Boy Muslim', and 'Muklo', charged with robbery, holdup, kidnapping with murder, and attempted murder, is on the Philippine National Police's most wanted list. The cases were consolidated and raffled to Regional Trial Court, Branch 12, in Antique, presided over by Judge Bonifacio Sanz Maceda.",
                "complaint_id" => 179, "agent_id" => 10940446, "complainant_id" => 663,
                "status" => "Closed_Finished", "date_assigned" => "1985-01-03", "date_reported" => "1984-12-29", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //180
            ["name" => "Tigre Jakiri - Kidnapping Case",
                "details" => "Tigre Jakiri is on the Philippine National Police's Most Wanted list.",
                "complaint_id" => 180, "agent_id" => 10940447, "complainant_id" => 664,
                "status" => "Closed_Finished", "date_assigned" => "2002-03-23", "date_reported" => "2002-03-21", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //181
            ["name" => "Romeo Jalosjos - Rape and Child Abuse Case",
                "details" => "Romeo Jalosjos is a former Representative of the 1st District of Zamboanga del Norte to the 10th congress (1995-1998) and 11th congress (1998-2001). He is now confined at the national penitentiary.",
                "complaint_id" => 181, "agent_id" => 10940445, "complainant_id" => 624,
                "status" => "Closed_Finished", "date_assigned" => "1996-12-13", "date_reported" => "1996-12-10", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //182
            ["name" => "Sheik Reuben Omar Lavilla - Murder Case",
                "details" => "Sheik Reuben Omar Lavilla is on the Philippine National Police's Most Wanted list for multiple murder and multiple frustrated murder.",
                "complaint_id" => 182, "agent_id" => 10940444, "complainant_id" => 665,
                "status" => "Closed_Finished", "date_assigned" => "2006-02-05", "date_reported" => "2006-02-01", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //183
            ["name" => "Juan Manalo y Castro a.k.a Juancho - Rape and Child Abuse Case",
                "details" => "Juan Manalo y Castro alias Juancho, is on the National Bureau of Investigation's Most Wanted list.",
                "complaint_id" => 183, "agent_id" => 10940445, "complainant_id" => 666,
                "status" => "Closed_Finished", "date_assigned" => "1997-04-22", "date_reported" => "1997-04-22", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //184
            ["name" => "Joel P. Marcelo - Plunder Case",
                "details" => "Joel P. Marcelo, a former Special Collection Officer at the Bureau of Internal Revenue, is on the National Bureau of Investigation Most Wanted list for the crime of plunder.",
                "complaint_id" => 184, "agent_id" => 10940444, "complainant_id" => 667,
                "status" => "Ongoing", "date_assigned" => "1997-11-19", "date_reported" => "1997-11-12", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //185
            ["name" => "Ignacio Monteson Jr. a.k.a Pogito - Homicide and Murder Case",
                "details" => "Ignacio Monteson Jr. also known as Pogito, is on the Philippine National Police's Most Wanted list for homicide and frustrated murder.",
                "complaint_id" => 185, "agent_id" => 10940445, "complainant_id" => 668,
                "status" => "Closed_Finished", "date_assigned" => "1999-04-24", "date_reported" => "1999-04-21", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //186
            ["name" => "Jaime Moog - Kidnapping Case",
                "details" => "Jaime Moog is on the Philippine National Police's Most Wanted list for the crime of kidnap for ransom.",
                "complaint_id" => 186, "agent_id" => 10930219, "complainant_id" => 669,
                "status" => "Non-viable", "date_assigned" => "2005-05-30", "date_reported" => "2005-05-28", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //187
            ["name" => "Severino Narag - Grave Threats and Theft Case",
                "details" => "Severino M. Narag is a suspect charged with terroristic threatening and wanted for failing to appear for trial on May 30, 2002. On September 5, 2001, Narag allegedly got into an argument with his girlfriend and threatened to shoot her. He has six priors that include terroristic threatening and theft.",
                "complaint_id" => 187, "agent_id" => 10940444, "complainant_id" => 634,
                "status" => "Ongoing", "date_assigned" => "1995-04-25", "date_reported" => "1995-04-23", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //188
            ["name" => "Nestor Orollo - Murder Case",
                "details" => "Nestor Orollo is on the National Bureau of Investigation's Most Wanted list for the crime of murder. A warrant was issued for his arrest by Regional Trial Court Branch 76, Quezon City.",
                "complaint_id" => 188, "agent_id" => 10940444, "complainant_id" => 670,
                "status" => "Closed_Finished", "date_assigned" => "1997-02-13", "date_reported" => "1997-01-30", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //189
            ["name" => "Felizardo Pagulayan - Kidnapping Case",
                "details" => "Felizardo Pagulayan alias Boy, is on the Philippine National Police's Most Wanted list for kidnap for ransom.",
                "complaint_id" => 189, "agent_id" => 10930220, "complainant_id" => 671,
                "status" => "Closed_Unfinished", "date_assigned" => "1994-12-14", "date_reported" => "1994-12-12", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //190
            ["name" => "Jose Ma. 'Bong' Panlilio - Robbery and Homicide Case",
                "details" => "Jose Ma. 'Bong' Panlilio is a subdivision owner and is on the Philippine National Police's Most Wanted list for robbery with homicide. He was born September 4, 1953, the son of international jeweler Fe S. Panlilio. He is described as 5 feet 8 inches tall, with brown eyes and fair complexion.",
                "complaint_id" => 190, "agent_id" => 10930217, "complainant_id" => 672,
                "status" => "Closed_Unfinished", "date_assigned" => "2003-08-12", "date_reported" => "2003-08-03", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //191
            ["name" => "Eleazar Perez - Murder Case",
                "details" => "Eleazar Perez is a former policeman who is currently on the National Bureau of Investigation's Most Wanted List for multiple murder and double frustrated murder.",
                "complaint_id" => 191, "agent_id" => 10930219, "complainant_id" => 673,
                "status" => "Closed_Unfinished", "date_assigned" => "1993-04-29", "date_reported" => "1993-04-25", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //192
            ["name" => "Loreto Rodriguez - Murder Case",
                "details" => "Loreto Rodriguez is a former policeman who is on the National Bureau of Investigation's Most Wanted list for murder.",
                "complaint_id" => 192, "agent_id" => 10930221, "complainant_id" => 674,
                "status" => "Closed_Unfinished", "date_assigned" => "1994-03-08", "date_reported" => "1994-03-03", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //193
            ["name" => "Alice Rosero - Robbery Case",
                "details" => "Alice Rosero is on the National Bureau of Investigation's most wanted list for robbery.",
                "complaint_id" => 193, "agent_id" => 10930220, "complainant_id" => 641,
                "status" => "Non-viable", "date_assigned" => "1996-03-27", "date_reported" => "1996-03-21", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //194
            ["name" => "Ruben Ablaza - Kidnapping and Rape Case",
                "details" => "Ruben Ablaza is taxi driver who kidnapped and raped actress Annabelle Huggins along two men Lauro Ocampo and Jose Leoncio",
                "complaint_id" => 194, "agent_id" => 10940446, "complainant_id" => 675,
                "status" => "Closed_Finished", "date_assigned" => "1963-04-05", "date_reported" => "1963-03-28", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //195
            ["name" => "Fraser Salamon a.k.a Fraser and Abu Jarin - Robbery, Murder, and Kidnapping Case",
                "details" => "Fraser Salamon also known as Fraser and Abu Jarin, is on the Philippine National Police's Most Wanted list for murder, robbery, and kidnapping. Warrants for his arrest were issued by Regional Trial Courts in Isabela, Basilan, Tawi-tawi, Sulu and Pasig City. A reward of Php 825,000 is offered to any person who can give information on his whereabouts.",
                "complaint_id" => 195, "agent_id" => 10940446, "complainant_id" => 676,
                "status" => "Closed_Finished", "date_assigned" => "1998-05-29", "date_reported" => "1998-05-26", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //196
            ["name" => "Pedro Salik - Robbery and Homicide Case",
                "details" => "Pedro Salik is on the National Bureau of Investigation's Most Wanted list for the crime of robbery and homicide.",
                "complaint_id" => 196, "agent_id" => 10940445, "complainant_id" => 677,
                "status" => "Closed_Finished", "date_assigned" => "2001-01-10", "date_reported" => "2001-01-05", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //197
            ["name" => "Antonio Sanchez - Rape Case",
                "details" => "Antonio Sanchez was the mayor of Calauan, Laguna. He was convicted of being the mastermind behind the Aileen Sarmenta rape-slay in 1993.",
                "complaint_id" => 197, "agent_id" => 10940447, "complainant_id" => 678,
                "status" => "Closed_Finished", "date_assigned" => "1993-05-16", "date_reported" => "1993-05-12", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //198
            ["name" => "Alven Tura - Kidnapping Case",
                "details" => "Alven Tura is a criminal wanted for charges of kidnapping for ransom.",
                "complaint_id" => 198, "agent_id" => 10930221, "complainant_id" => 679,
                "status" => "Non-viable", "date_assigned" => "1997-09-14", "date_reported" => "1997-09-10", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //199
            ["name" => "Mario Valerio - Kidnapping Case",
                "details" => "Mario Valerio is on the Philippine National Police's Most Wanted list for the crime of kidnap for ransom.",
                "complaint_id" => 199, "agent_id" => 10940448, "complainant_id" => 680,
                "status" => "Closed_Finished", "date_assigned" => "2003-09-14", "date_reported" => "2003-09-11", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //200
            ["name" => "Raul Villar a.k.a Ka Drilon - Robbery and Homicide Case",
                "details" => "Raul Villar alias Ka Drilon was considered the number one most wanted criminal in Negros Oriental for the crime of robbery with multiple homicide.",
                "complaint_id" => 200, "agent_id" => 10940445, "complainant_id" => 681,
                "status" => "Closed_Finished", "date_assigned" => "2002-12-04", "date_reported" => "2002-12-03", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //201
            ["name" => "Eddie Zamora a.k.a Eddie Boy - Rape and Child Abuse Case",
                "details" => "Eddie Zamora also known as Eddie, Boy and Eddie Boy, is on the National Bureau of Investigation's Most Wanted list for the crime of rape.",
                "complaint_id" => 201, "agent_id" => 10940444, "complainant_id" => 682,
                "status" => "Closed_Finished", "date_assigned" => "1996-05-11", "date_reported" => "1996-05-11", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
//****************************************************************************************************************************************************************//
//****************************************************************************************************************************************************************//
            //CASE FROM DOJ MAJOR CASES
            //202
            ["name" => "Efrain Genuino - Malversation of Public Funds Case",
                "details" => "The Philippine Amusement and Gaming Corporation (PAGCOR) filed before the Department of Justice (DOJ) cases of malversation of public funds and violation of the Anti-Graft and Corrupt Practices Act against former PAGCOR officials and other individuals over the disbursement of public funds amounting to P26.7 million for the production of the movie “Baler” in 2008.",
                "complaint_id" => 202, "agent_id" => 10940444, "complainant_id" => 692,
                "status" => "Closed_Finished", "date_assigned" => "2011-10-20", "date_reported" => "2011-10-06", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //203
            ["name" => "Rolando Mendoza - Murder Case",
                "details" => "A former police officer took a busload of tourists hostage in downtown Manila on Monday morning, opening a 12-hour standoff that was broadcast live on television, including its end as police commandos stormed the bus before a watching crowd.

				 The tourists are all from Hong Kong, were killed, along with the hostage-taker. He was identified as Rolando Mendoza, a 55-year-old officer who had been accused of robbery and extortion and was fired last year.",
                "complaint_id" => 203, "agent_id" => 10940446, "complainant_id" => 698,
                "status" => "Closed_Finished", "date_assigned" => "2010-08-25", "date_reported" => "2010-08-24", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //204
            ["name" => "Carlos F. Garcia - Tax Evasion Case",
                "details" => "The Bureau of Internal Revenue (BIR) filed with the Department of Justice (DOJ) a complaint for tax evasion against Retired Major General Carlos F. Garcia and Spouse Clarita D. Garcia (Spouses Garcia) for willfully attempting to evade or defeat tax and for willfully failing to file their Income Tax Return (ITR) for taxable year 2004",
                "complaint_id" => 204, "agent_id" => 10940444, "complainant_id" => 696,
                "status" => "Closed_Finished", "date_assigned" => "2011-03-12", "date_reported" => "2011-03-10", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
            //205
            ["name" => "Romulo Luminarias Neri - Tax Evasion Case",
                "details" => "Already infamous for his part in the controversial ZTE broadband “moderate the greed” deal 
							during his term as National Economic Development Authority (NEDA) Chief, former Social 
							Security System (SSS) top honcho Romulo Luminarias Neri gained added notoriety after 
							Commissioner of Internal Revenue Kim S. Jacinto-Henares ordered the Bureau of Internal 
							Revenue (BIR) Run After Tax Evaders (RATE) team today to file charges of tax evasion 
							against him for his deliberate, willful, and repeated failure to supply correct and accurate 
							information in his income tax returns (ITRs) for taxable years 2008 and 2009, thru 
							substantial underdeclaration of his income or revenues earned from various corporations. 
							",
                "complaint_id" => 205, "agent_id" => 10940444, "complainant_id" => 696,
                "status" => "Closed_Finished", "date_assigned" => "2010-11-10", "date_reported" => "2010-11-04", "division" => "FLD", "user_rating" => "3", "user_priority" => "4", "chief_priority" => "2"],
        );

        // Uncomment the below to run the seeder
        DB::table('kases')->insert($kases);
    }

}
