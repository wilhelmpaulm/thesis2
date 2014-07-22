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

            // VICTIMS FROM NBI PRESS RELEASE ***********************************************************************************

            ["complaint_id" => 131, "client_id" => 528],
            ["complaint_id" => 132, "client_id" => 529],
            ["complaint_id" => 133, "client_id" => 530],
            ["complaint_id" => 134, "client_id" => 531],
            ["complaint_id" => 135, "client_id" => 532],
            // NO VICTIMS 136-137
            ["complaint_id" => 138, "client_id" => 499],
            ["complaint_id" => 139, "client_id" => 533],
            ["complaint_id" => 140, "client_id" => 534],
            ["complaint_id" => 141, "client_id" => 535],
            ["complaint_id" => 142, "client_id" => 536],
            ["complaint_id" => 143, "client_id" => 537],
            ["complaint_id" => 144, "client_id" => 538],
            ["complaint_id" => 145, "client_id" => 539],
            ["complaint_id" => 146, "client_id" => 540],
            ["complaint_id" => 147, "client_id" => 541],
            ["complaint_id" => 148, "client_id" => 542],
            ["complaint_id" => 149, "client_id" => 543],
            ["complaint_id" => 150, "client_id" => 544],
            ["complaint_id" => 151, "client_id" => 545],
            ["complaint_id" => 152, "client_id" => 546],
            ["complaint_id" => 153, "client_id" => 547],
            ["complaint_id" => 154, "client_id" => 548],
            ["complaint_id" => 155, "client_id" => 549],
            ["complaint_id" => 156, "client_id" => 550],
            ["complaint_id" => 157, "client_id" => 551],
            ["complaint_id" => 158, "client_id" => 552],
            ["complaint_id" => 159, "client_id" => 558],
            ["complaint_id" => 160, "client_id" => 559],
            ["complaint_id" => 161, "client_id" => 560],



            //VICTIMs FROM WIKIPILIPINAS **************************************************************************************

           
            ["complaint_id" => 162, "client_id" => 602],

            ["complaint_id" => 163, "client_id" => 603],
            ["complaint_id" => 163, "client_id" => 604],

            ["complaint_id" => 164, "client_id" => 605],
            ["complaint_id" => 165, "client_id" => 606],
            ["complaint_id" => 166, "client_id" => 607],
            ["complaint_id" => 167, "client_id" => 608],

            ["complaint_id" => 168, "client_id" => 609],
            ["complaint_id" => 168, "client_id" => 610],
            ["complaint_id" => 168, "client_id" => 611],

            ["complaint_id" => 169, "client_id" => 612],
            ["complaint_id" => 170, "client_id" => 613],
            ["complaint_id" => 171, "client_id" => 614],
            ["complaint_id" => 172, "client_id" => 615],
            ["complaint_id" => 173, "client_id" => 616],
            ["complaint_id" => 174, "client_id" => 617],
            ["complaint_id" => 175, "client_id" => 618],
            ["complaint_id" => 176, "client_id" => 619],
            ["complaint_id" => 177, "client_id" => 620],
            ["complaint_id" => 178, "client_id" => 621],
            ["complaint_id" => 179, "client_id" => 622],
            ["complaint_id" => 180, "client_id" => 623],
            ["complaint_id" => 181, "client_id" => 624],
            ["complaint_id" => 182, "client_id" => 625],

            ["complaint_id" => 183, "client_id" => 626],
            ["complaint_id" => 183, "client_id" => 627],

            ["complaint_id" => 184, "client_id" => 628],
            ["complaint_id" => 184, "client_id" => 629],
            ["complaint_id" => 184, "client_id" => 630],
            ["complaint_id" => 184, "client_id" => 631],

            ["complaint_id" => 185, "client_id" => 632],
            ["complaint_id" => 186, "client_id" => 633],
            ["complaint_id" => 187, "client_id" => 634],
            ["complaint_id" => 188, "client_id" => 635],
            ["complaint_id" => 189, "client_id" => 636],

            ["complaint_id" => 190, "client_id" => 637],
            ["complaint_id" => 190, "client_id" => 638],

            ["complaint_id" => 191, "client_id" => 639],
            ["complaint_id" => 192, "client_id" => 640],
            ["complaint_id" => 193, "client_id" => 641],
            ["complaint_id" => 194, "client_id" => 642],
            ["complaint_id" => 195, "client_id" => 643],
            ["complaint_id" => 196, "client_id" => 644],

            ["complaint_id" => 197, "client_id" => 645],
            ["complaint_id" => 197, "client_id" => 646],

            ["complaint_id" => 198, "client_id" => 647],
            ["complaint_id" => 199, "client_id" => 648],
            ["complaint_id" => 200, "client_id" => 649],
            ["complaint_id" => 201, "client_id" => 650],


//**************************************************************************************************************************************************  

            //VICTIMS FROM DOJ MAJOR CASES    
            ["complaint_id" => 202, "client_id" => 692],

            ["complaint_id" => 203, "client_id" => 693],
            ["complaint_id" => 203, "client_id" => 694], 
            ["complaint_id" => 203, "client_id" => 695],   

            ["complaint_id" => 204, "client_id" => 696], 
            ["complaint_id" => 204, "client_id" => 697],      

            ["complaint_id" => 205, "client_id" => 696], 
        );

        // Uncomment the below to run the seeder
        DB::table('complaint_victims')->insert($complaint_victims);
    }

}
