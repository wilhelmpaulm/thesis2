<?php

class User_addressesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('user_addresses')->truncate();

        $user_addresses = array(
            
                ["user_id" => 10930193, "street" => "Diamond", "city" => "Las Pinas",
                "postal_code" => "1741", "province" => "", "barangay" => "Uno"],

                ["user_id" => 10930316, "street" => "Pearl", "city" => "Makati",
                "postal_code" => "1223", "province" => "", "barangay" => "Dos"],
                
                ["user_id" => 10930192, "street" => "Ruby", "city" => "Manila",
                "postal_code" => "1131", "province" => "", "barangay" => "Tres"],

                ["user_id" => 10930218, "street" => "Gold", "city" => "Makati",
                "postal_code" => "1224", "province" => "", "barangay" => "Kuatro"],

                ["user_id" => 10930216, "street" => "Silver", "city" => "Pasay",
                "postal_code" => "1551", "province" => "", "barangay" => "Singko"],

                ["user_id" => 10930217, "street" => "Sapphire", "city" => "Paanaque",
                "postal_code" => "1661", "province" => "", "barangay" => "Saix"],

                ["user_id" => 10930219, "street" => "Emerald", "city" => "Manila",
                "postal_code" => "1121", "province" => "", "barangay" => "Siyete"],

                ["user_id" => 10930220, "street" => "Amethyst", "city" => "Makati",
                "postal_code" => "1225", "province" => "", "barangay" => "Otso"],

                ["user_id" => 10930221, "street" => "Ivory", "city" => "Las Pinas",
                "postal_code" => "1742", "province" => "", "barangay" => "Nwebe"],

                ["user_id" => 10940444, "street" => "Jade", "city" => "Cavite",
                "postal_code" => "1881", "province" => "", "barangay" => "Dyis"],

                ["user_id" => 10940445, "street" => "Aquamarine", "city" => "Quezon",
                "postal_code" => "2117", "province" => "", "barangay" => "Onse"],

                ["user_id" => 10940446, "street" => "Topaz", "city" => "Manila",
                "postal_code" => "1122", "province" => "", "barangay" => "Dose"],

                ["user_id" => 10940447, "street" => "Bronze", "city" => "Makati",
                "postal_code" => "1223", "province" => "", "barangay" => "Trese"],

                ["user_id" => 10940448, "street" => "Metal", "city" => "Makati",
                "postal_code" => "1233", "province" => "", "barangay" => "Katorse"],        
            

        );

        // Uncomment the below to run the seeder
        DB::table('user_addresses')->insert($user_addresses);
    }

}
