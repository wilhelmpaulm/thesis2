<?php

class Complaint_victimsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('complaint_victims')->truncate();

        $complaint_victims = array(
            ["complaint_id" => 1, "client_id" => 101],
            ["complaint_id" => 2, "client_id" => 102],
            ["complaint_id" => 3, "client_id" => 103],
            ["complaint_id" => 4, "client_id" => 104],
            ["complaint_id" => 5, "client_id" => 105],
            ["complaint_id" => 6, "client_id" => 106],
            ["complaint_id" => 6, "client_id" => 107],
            ["complaint_id" => 6, "client_id" => 108],
            ["complaint_id" => 7, "client_id" => 109],
            ["complaint_id" => 8, "client_id" => 110],
            ["complaint_id" => 9, "client_id" => 111],
            ["complaint_id" => 9, "client_id" => 112],
            //no victim for 10 (illegal gambling site lang)
            ["complaint_id" => 11, "client_id" => 113],
            ["complaint_id" => 11, "client_id" => 114],
            ["complaint_id" => 11, "client_id" => 115],
            ["complaint_id" => 11, "client_id" => 116],
            ["complaint_id" => 11, "client_id" => 117],
            //no victim for 12 (counterfeiting lang)
            ["complaint_id" => 13, "client_id" => 118],
            ["complaint_id" => 13, "client_id" => 119],
            ["complaint_id" => 13, "client_id" => 120],
            ["complaint_id" => 13, "client_id" => 121],
            ["complaint_id" => 13, "client_id" => 122],
            //no victim for 14 and 15 (drugs dealers spotted)
            ["complaint_id" => 16, "client_id" => 123],
            ["complaint_id" => 17, "client_id" => 124],
            ["complaint_id" => 18, "client_id" => 125],
            ["complaint_id" => 18, "client_id" => 126],
            ["complaint_id" => 19, "client_id" => 127],
            ["complaint_id" => 20, "client_id" => 128],
            ["complaint_id" => 20, "client_id" => 129],
            ["complaint_id" => 20, "client_id" => 130],
            //no victim for 21 (druglord released)
            ["complaint_id" => 22, "client_id" => 131],
            ["complaint_id" => 23, "client_id" => 132],
            ["complaint_id" => 24, "client_id" => 133],
            ["complaint_id" => 24, "client_id" => 134],
            ["complaint_id" => 25, "client_id" => 135],
            ["complaint_id" => 26, "client_id" => 136],
            ["complaint_id" => 27, "client_id" => 137],
            ["complaint_id" => 27, "client_id" => 138],
            ["complaint_id" => 27, "client_id" => 139],
            //no victim for 28 (caught drug dealing)
            ["complaint_id" => 29, "client_id" => 140],
            ["complaint_id" => 30, "client_id" => 141],
            ["complaint_id" => 31, "client_id" => 142],
            ["complaint_id" => 32, "client_id" => 143],
            //no victim for 33 phony license
            ["complaint_id" => 34, "client_id" => 144],
            ["complaint_id" => 35, "client_id" => 145],
            ["complaint_id" => 36, "client_id" => 146],
            ["complaint_id" => 37, "client_id" => 147],
            ["complaint_id" => 38, "client_id" => 148],
            ["complaint_id" => 39, "client_id" => 149],
            ["complaint_id" => 40, "client_id" => 150],
            ["complaint_id" => 41, "client_id" => 151],
            ["complaint_id" => 42, "client_id" => 152],
            ["complaint_id" => 43, "client_id" => 153],
            ["complaint_id" => 44, "client_id" => 154],
            ["complaint_id" => 45, "client_id" => 155],
            ["complaint_id" => 46, "client_id" => 156],
            //no victim for 47 (caught prosti+drugs)
            ["complaint_id" => 48, "client_id" => 157],
            ["complaint_id" => 49, "client_id" => 158],
            ["complaint_id" => 50, "client_id" => 159],
            ["complaint_id" => 51, "client_id" => 160],
            ["complaint_id" => 52, "client_id" => 161],
            ["complaint_id" => 52, "client_id" => 162],
            ["complaint_id" => 52, "client_id" => 163],
            ["complaint_id" => 53, "client_id" => 164],
            ["complaint_id" => 54, "client_id" => 165],
            ["complaint_id" => 55, "client_id" => 5], 
            //["complaint_id" => 56, "client_id" => 6], no victim because arson
            ["complaint_id" => 57, "client_id" => 2],
            ["complaint_id" => 58, "client_id" => 7],
            ["complaint_id" => 59, "client_id" => 8],
            //no victim for 60 (seen abduction)
            //no victim for 61 (abortion)
            ["complaint_id" => 62, "client_id" => 428],
            ["complaint_id" => 63, "client_id" => 430],
            ["complaint_id" => 64, "client_id" => 432],
            ["complaint_id" => 65, "client_id" => 434],
            ["complaint_id" => 66, "client_id" => 411],
            ["complaint_id" => 67, "client_id" => 413],
            ["complaint_id" => 68, "client_id" => 415],
            ["complaint_id" => 69, "client_id" => 417],
            ["complaint_id" => 70, "client_id" => 419],
            //no victim for 71 (abandoned building set on fire)
            ["complaint_id" => 72, "client_id" => 421],
            ["complaint_id" => 73, "client_id" => 22],
            ["complaint_id" => 74, "client_id" => 23],
            ["complaint_id" => 75, "client_id" => 27],
            ["complaint_id" => 76, "client_id" => 423],
            ["complaint_id" => 77, "client_id" => 424],
            //no victim for 78-79 (counterfeiting lang)
            ["complaint_id" => 80, "client_id" => 425],
            
            ["complaint_id" => 81, "client_id" => 166],
            ["complaint_id" => 82, "client_id" => 166],
            ["complaint_id" => 83, "client_id" => 167],
            ["complaint_id" => 84, "client_id" => 167],
            ["complaint_id" => 85, "client_id" => 168],
            ["complaint_id" => 86, "client_id" => 169],
            ["complaint_id" => 87, "client_id" => 170],
            ["complaint_id" => 88, "client_id" => 171],
            ["complaint_id" => 89, "client_id" => 172],
            ["complaint_id" => 90, "client_id" => 173],
            ["complaint_id" => 91, "client_id" => 174],
            ["complaint_id" => 92, "client_id" => 175],
            ["complaint_id" => 93, "client_id" => 176],
            ["complaint_id" => 94, "client_id" => 177],
            ["complaint_id" => 95, "client_id" => 178],
            ["complaint_id" => 96, "client_id" => 179],
            ["complaint_id" => 97, "client_id" => 180],
            ["complaint_id" => 98, "client_id" => 181],
            ["complaint_id" => 99, "client_id" => 182],
            ["complaint_id" => 100, "client_id" => 183],
            ["complaint_id" => 101, "client_id" => 184],
            ["complaint_id" => 102, "client_id" => 185],
            ["complaint_id" => 103, "client_id" => 186],
            ["complaint_id" => 104, "client_id" => 187],
            ["complaint_id" => 105, "client_id" => 188],
            ["complaint_id" => 106, "client_id" => 189],
            ["complaint_id" => 107, "client_id" => 190],
            ["complaint_id" => 108, "client_id" => 191],
            ["complaint_id" => 109, "client_id" => 192],
            ["complaint_id" => 110, "client_id" => 193],
            ["complaint_id" => 111, "client_id" => 194],
            ["complaint_id" => 112, "client_id" => 195],
            ["complaint_id" => 113, "client_id" => 196],
            ["complaint_id" => 114, "client_id" => 197],
            ["complaint_id" => 115, "client_id" => 198],
            ["complaint_id" => 116, "client_id" => 199],
            ["complaint_id" => 117, "client_id" => 200],
            ["complaint_id" => 118, "client_id" => 201],
            ["complaint_id" => 119, "client_id" => 202],
            ["complaint_id" => 120, "client_id" => 203],
            ["complaint_id" => 121, "client_id" => 204],
            ["complaint_id" => 122, "client_id" => 205],
            ["complaint_id" => 123, "client_id" => 206],
            ["complaint_id" => 124, "client_id" => 207],
            ["complaint_id" => 125, "client_id" => 208],
            ["complaint_id" => 126, "client_id" => 209],
            ["complaint_id" => 127, "client_id" => 210],
            ["complaint_id" => 128, "client_id" => 211],
            ["complaint_id" => 129, "client_id" => 212],
            ["complaint_id" => 130, "client_id" => 213],
        );

        // Uncomment the below to run the seeder
        DB::table('complaint_victims')->insert($complaint_victims);
    }

}
