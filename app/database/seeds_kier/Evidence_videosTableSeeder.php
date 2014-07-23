<?php

class Evidence_videosTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('evidence_videos')->truncate();

        $evidence_videos = array(
            ["user_id" => 10930216, "id" => 1, "case_id" => 11, "details" => "Video footage of an American in Zamboanga", "owner" => "Tony Romas", "date_recorded" => "2013-01-22", "date_received" => "2013-04-01", "file_name" => "1.mp4"],
            ["user_id" => 10930216, "id" => 2, "case_id" => 12, "details" => "Video footage of a robbery gang in Manila", "owner" => "Daniel Sikat", "date_recorded" => "2013-02-11", "date_received" => "2013-04-11", "file_name" => "1.mp4"],
            ["user_id" => 10930216, "id" => 3, "case_id" => 13, "details" => "Video footage of shootout in Cotabato", "owner" => "Hazel Lalim", "date_recorded" => "2012-12-22", "date_received" => "2013-05-17", "file_name" => "1.mp4"],
            ["user_id" => 10930216, "id" => 4, "case_id" => 14, "details" => "Video footage of the suspect selling marijuana on street", "owner" => "Wendell Gusi", "date_recorded" => "2013-01-30", "date_received" => "2013-05-28", "file_name" => "1.mp4"],
            ["user_id" => 10930216, "id" => 5, "case_id" => 15, "details" => "Video footage of the actual NBI operation in the site", "owner" => "Pamela Ortize", "date_recorded" => "2013-02-12", "date_received" => "2013-07-11", "file_name" => "1.mp4"],
            ["user_id" => 10930216, "id" => 6, "case_id" => 16, "details" => "Video footage of the developers entering a building", "owner" => "Larry Jones", "date_recorded" => "2013-03-11", "date_received" => "2013-08-20", "file_name" => "1.mp4"],
            ["user_id" => 10930216, "id" => 7, "case_id" => 17, "details" => "Video footage of the actual crime scene", "owner" => "Inigo Joson", "date_recorded" => "2013-04-01", "date_received" => "2013-08-22", "file_name" => "1.mp4"],
            ["user_id" => 10930216, "id" => 8, "case_id" => 18, "details" => "Video footage of the drug dealers transaction", "owner" => "Carlo De Mesa", "date_recorded" => "2013-04-24", "date_received" => "2013-09-15", "file_name" => "1.mp4"],
            ["user_id" => 10930216, "id" => 9, "case_id" => 19, "details" => "Video footage of an Arabian national entering a hotel", "owner" => "Darlene Asenci", "date_recorded" => "2013-05-11", "date_received" => "2013-09-24", "file_name" => "1.mp4"],
            ["user_id" => 10930216, "id" => 10, "case_id" => 20, "details" => "Video footage of the gun used in the crime", "owner" => "Jas Santiago", "date_recorded" => "2013-05-12", "date_received" => "2013-10-11", "file_name" => "1.mp4"],
//*********************************************************************************************************************************************************                        
            ["user_id" => 10940445, "id" => 11, "case_id" => 131, "details" => "Video of Fr. Pops being brought down the ambulance", "owner" => "Adalberto Abraham", "date_recorded" => "2014-02-07", "date_received" => "2014-02-14", "file_name" => "101.mp4"],
            ["user_id" => 10940446, "id" => 12, "case_id" => 133, "details" => "Video of the buy bust operation", "owner" => "Alfonso Aguilar", "date_recorded" => "2012-03-20", "date_received" => "2012-03-29", "file_name" => "101.mp4"],
            ["user_id" => 10940447, "id" => 13, "case_id" => 148, "details" => "Video of NBI surveillance operation in Manila-Pavillon Casino", "owner" => "Buster Ayala", "date_recorded" => "2013-04-11", "date_received" => "2013-04-15", "file_name" => "101.mp4"],
            ["user_id" => 10940447, "id" => 14, "case_id" => 153, "details" => "Video of the rescue operation conducted June 17,2013", "owner" => "Dana Bautista", "date_recorded" => "2013-06-11", "date_received" => "2013-06-19", "file_name" => "101.mp4"],
            ["user_id" => 10940448, "id" => 15, "case_id" => 154, "details" => "Video presentation of how 'Toll By Pass' works", "owner" => "Dillon Benitez", "date_recorded" => "2013-06-24", "date_received" => "2013-07-01", "file_name" => "101.mp4"],
            ["user_id" => 10940448, "id" => 16, "case_id" => 156, "details" => "Video of the talent audition", "owner" => "Donte Bernard", "date_recorded" => "2013-07-22", "date_received" => "2013-07-29", "file_name" => "101.mp4"],
            ["user_id" => 10940446, "id" => 17, "case_id" => 157, "details" => "Video of the surveillance operation of NBI-CTD Operatives", "owner" => "Eldon Bivins", "date_recorded" => "2014-01-05", "date_received" => "2014-01-13", "file_name" => "101.mp4"],
            ["user_id" => 10940448, "id" => 18, "case_id" => 158, "details" => "Video of the victim giving money to the suspect at Jollibee T.M Kalaw", "owner" => "Elmer Blakely", "date_recorded" => "2014-03-06", "date_received" => "2014-03-12", "file_name" => "101.mp4"],
            ["user_id" => 10940446, "id" => 19, "case_id" => 159, "details" => "Video of the manhunt operation conducted by  NBI, ISAFP and PNP", "owner" => "Ernesto Bogan", "date_recorded" => "2014-01-15", "date_received" => "2014-02-02", "file_name" => "101.mp4"],
            ["user_id" => 10940447, "id" => 20, "case_id" => 170, "details" => "Video footage of the victim shot in the body", "owner" => "Jim Calderon", "date_recorded" => "2001-04-02", "date_received" => "2001-04-27", "file_name" => "101.mp4"],
            ["user_id" => 10940444, "id" => 21, "case_id" => 182, "details" => "Video of victim being brought to the ambulance", "owner" => "Rogelio Cruz", "date_recorded" => "2006-01-05", "date_received" => "2006-02-01", "file_name" => "101.mp4"],
            ["user_id" => 10930219, "id" => 22, "case_id" => 191, "details" => "CCTV video of the suspect entering the room and stealing money and jewelries worth 431,000", "owner" => "Troy Domingo", "date_recorded" => "1993-04-20", "date_received" => "1993-04-25", "file_name" => "101.mp4"],
            ["user_id" => 10930220, "id" => 23, "case_id" => 193, "details" => "Video footage of the crime", "owner" => "Ulysses Doran", "date_recorded" => "1996-03-20", "date_received" => "1996-03-21", "file_name" => "101.mp4"],
            ["user_id" => 10940446, "id" => 24, "case_id" => 195, "details" => "Video footage of the crime", "owner" => "Young Durant", "date_recorded" => "1998-05-23", "date_received" => "1998-05-26", "file_name" => "101.mp4"],
            ["user_id" => 10940445, "id" => 25, "case_id" => 196, "details" => "Video footage of the crime", "owner" => "Michael Torres", "date_recorded" => "2001-01-01", "date_received" => "2001-01-05", "file_name" => "101.mp4"],
            ["user_id" => 10940448, "id" => 26, "case_id" => 199, "details" => "CCTV footage of the crime", "owner" => "John Santos", "date_recorded" => "2003-09-02", "date_received" => "2003-09-11", "file_name" => "101.mp4"],
        );

        // Uncomment the below to run the seeder
        DB::table('evidence_videos')->insert($evidence_videos);
    }

}
