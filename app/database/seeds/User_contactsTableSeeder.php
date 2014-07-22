<?php

class User_contactsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('user_contacts')->truncate();

        $user_contacts = array(
            
            //CHIEF
            ["user_id" => 10930193, "type" => "Email", "contact" => "kieruntalan@nbi.com"],
            ["user_id" => 10930193, "type" => "Mobile", "contact" => "09278173141"],

            //EXECUTIVE OFFICER
            ["user_id" => 10930316, "type" => "Email", "contact" => "jongabarra@nbi.com"],
            ["user_id" => 10930316, "type" => "Mobile", "contact" => "09178754571"],

            //SECRETARY
            ["user_id" => 10930192, "type" => "Email", "contact" => "janinekau@nbi.com"],
            ["user_id" => 10930218, "type" => "Email", "contact" => "maryjoyvillacorta@nbi.com"],

            ["user_id" => 10930192, "type" => "Mobile", "contact" => "09068254612"],
            ["user_id" => 10930218, "type" => "Mobile", "contact" => "09157471241"],

            //AGENTS
            ["user_id" => 10930216, "type" => "Email", "contact" => "wilhelmpaulmartinez@nbi.com"],
            ["user_id" => 10930217, "type" => "Email", "contact" => "enricoespenesin@nbi.com"],
            ["user_id" => 10930219, "type" => "Email", "contact" => "bonbernales@nbi.com"],
            ["user_id" => 10930220, "type" => "Email", "contact" => "stanlee@nbi.com"],
            ["user_id" => 10930221, "type" => "Email", "contact" => "alberteinstein@nbi.com"],
            ["user_id" => 10940444, "type" => "Email", "contact" => "maximorivera@nbi.com"],
            ["user_id" => 10940445, "type" => "Email", "contact" => "jeffreysantos@nbi.com"],
            ["user_id" => 10940446, "type" => "Email", "contact" => "jamesmanahan@nbi.com"],
            ["user_id" => 10940447, "type" => "Email", "contact" => "aldrinsy@nbi.com"],
            ["user_id" => 10940448, "type" => "Email", "contact" => "chesterritualo@nbi.com"],

            ["user_id" => 10930216, "type" => "Mobile", "contact" => "09178374512"],
            ["user_id" => 10930217, "type" => "Mobile", "contact" => "09069184721"],
            ["user_id" => 10930219, "type" => "Mobile", "contact" => "09174612842"],
            ["user_id" => 10930220, "type" => "Mobile", "contact" => "09067281321"],
            ["user_id" => 10930221, "type" => "Mobile", "contact" => "09173741231"],
            ["user_id" => 10940444, "type" => "Mobile", "contact" => "09279450037"],
            ["user_id" => 10940445, "type" => "Mobile", "contact" => "09278554627"],
            ["user_id" => 10940446, "type" => "Mobile", "contact" => "09065574312"],
            ["user_id" => 10940447, "type" => "Mobile", "contact" => "09178908876"],
            ["user_id" => 10940448, "type" => "Mobile", "contact" => "09276579645"],
            

        );

        // Uncomment the below to run the seeder
        DB::table('user_contacts')->insert($user_contacts);
    }

}
