<?php

class Case_subjectsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('case_subjects')->truncate();

        $case_subjects = array(
            ["case_id" => 1, "client_id" => 231],
            ["case_id" => 2, "client_id" => 232],
            ["case_id" => 3, "client_id" => 104],
            ["case_id" => 4, "client_id" => 233],
            ["case_id" => 4, "client_id" => 234],
            ["case_id" => 5, "client_id" => 235],
            ["case_id" => 6, "client_id" => 236],
            ["case_id" => 6, "client_id" => 237],
            //no subject for 7 because suicide
            ["case_id" => 8, "client_id" => 238],
            ["case_id" => 9, "client_id" => 239],
            ["case_id" => 10, "client_id" => 240],
            ["case_id" => 10, "client_id" => 241],
            ["case_id" => 10, "client_id" => 242],
            ["case_id" => 11, "client_id" => 243],
            ["case_id" => 12, "client_id" => 244],
            ["case_id" => 12, "client_id" => 245],
            ["case_id" => 12, "client_id" => 246],
            ["case_id" => 13, "client_id" => 247],
            ["case_id" => 14, "client_id" => 248],
            ["case_id" => 14, "client_id" => 249],
            ["case_id" => 15, "client_id" => 250],
            ["case_id" => 16, "client_id" => 251],
            ["case_id" => 16, "client_id" => 252],
            ["case_id" => 17, "client_id" => 253],
            ["case_id" => 18, "client_id" => 254],
            ["case_id" => 19, "client_id" => 255],
            ["case_id" => 20, "client_id" => 256],
            ["case_id" => 21, "client_id" => 257],
            ["case_id" => 22, "client_id" => 258],
            ["case_id" => 23, "client_id" => 259],
            ["case_id" => 24, "client_id" => 260],
            ["case_id" => 24, "client_id" => 261],
            ["case_id" => 24, "client_id" => 262],
            ["case_id" => 24, "client_id" => 263],
            ["case_id" => 24, "client_id" => 264],
            //no subject for 25 because suicide
            ["case_id" => 26, "client_id" => 265],
            ["case_id" => 27, "client_id" => 266],
            ["case_id" => 27, "client_id" => 267],
            ["case_id" => 27, "client_id" => 268],
            ["case_id" => 28, "client_id" => 269],
            ["case_id" => 28, "client_id" => 270],
            ["case_id" => 29, "client_id" => 271],
            ["case_id" => 30, "client_id" => 272],
            ["case_id" => 30, "client_id" => 273],
            ["case_id" => 31, "client_id" => 274],
            ["case_id" => 32, "client_id" => 275],
            ["case_id" => 32, "client_id" => 276],
            ["case_id" => 33, "client_id" => 277],
            ["case_id" => 34, "client_id" => 278],
            ["case_id" => 35, "client_id" => 279],
            ["case_id" => 36, "client_id" => 280],
            ["case_id" => 37, "client_id" => 281],
            ["case_id" => 37, "client_id" => 282],
            ["case_id" => 38, "client_id" => 283],
            ["case_id" => 39, "client_id" => 284],
            ["case_id" => 40, "client_id" => 285],
            ["case_id" => 41, "client_id" => 286],
            ["case_id" => 42, "client_id" => 287],
            ["case_id" => 43, "client_id" => 288],
            ["case_id" => 44, "client_id" => 288],
            ["case_id" => 45, "client_id" => 289],
            ["case_id" => 46, "client_id" => 290],
            ["case_id" => 47, "client_id" => 291],
            ["case_id" => 48, "client_id" => 292],
            ["case_id" => 49, "client_id" => 293],
            ["case_id" => 50, "client_id" => 289],
            ["case_id" => 51, "client_id" => 289],
            ["case_id" => 52, "client_id" => 261],
            ["case_id" => 52, "client_id" => 262],
            ["case_id" => 52, "client_id" => 263],
            ["case_id" => 53, "client_id" => 264],
            ["case_id" => 53, "client_id" => 263],
            ["case_id" => 53, "client_id" => 262],
            ["case_id" => 54, "client_id" => 294],
            ["case_id" => 55, "client_id" => 295],
            ["case_id" => 56, "client_id" => 284],
            ["case_id" => 57, "client_id" => 232],
            ["case_id" => 58, "client_id" => 232],
            ["case_id" => 59, "client_id" => 262],
            ["case_id" => 60, "client_id" => 262],
            ["case_id" => 61, "client_id" => 426],
            ["case_id" => 62, "client_id" => 427],
            ["case_id" => 63, "client_id" => 429],
            ["case_id" => 64, "client_id" => 431],
            ["case_id" => 65, "client_id" => 433],
            ["case_id" => 66, "client_id" => 435],
            ["case_id" => 67, "client_id" => 412],
            ["case_id" => 68, "client_id" => 414],
            ["case_id" => 69, "client_id" => 416],
            ["case_id" => 70, "client_id" => 418],
            ["case_id" => 71, "client_id" => 284],
            ["case_id" => 72, "client_id" => 420],
            ["case_id" => 73, "client_id" => 283],
            ["case_id" => 74, "client_id" => 260],
            ["case_id" => 74, "client_id" => 261],
            ["case_id" => 75, "client_id" => 265],
            ["case_id" => 76, "client_id" => 422],
            ["case_id" => 77, "client_id" => 269],
            ["case_id" => 78, "client_id" => 272],
            ["case_id" => 78, "client_id" => 273],
            ["case_id" => 79, "client_id" => 246],
            ["case_id" => 80, "client_id" => 247],
            
            ["case_id" => 81, "client_id" => 296],
            ["case_id" => 82, "client_id" => 296],
            ["case_id" => 83, "client_id" => 297],
            ["case_id" => 84, "client_id" => 297],
            ["case_id" => 85, "client_id" => 298],
            ["case_id" => 86, "client_id" => 299],
            ["case_id" => 87, "client_id" => 300],
            ["case_id" => 88, "client_id" => 301],
            ["case_id" => 89, "client_id" => 302],
            ["case_id" => 90, "client_id" => 303],
            ["case_id" => 91, "client_id" => 304],
            ["case_id" => 92, "client_id" => 305],
            ["case_id" => 93, "client_id" => 306],
            ["case_id" => 94, "client_id" => 307],
            //no subject for 95 because suicide
            ["case_id" => 96, "client_id" => 309],
            ["case_id" => 97, "client_id" => 310],
            ["case_id" => 98, "client_id" => 311],
            ["case_id" => 99, "client_id" => 312],
            ["case_id" => 100, "client_id" => 313],
            ["case_id" => 101, "client_id" => 314],
            ["case_id" => 102, "client_id" => 315],
            ["case_id" => 103, "client_id" => 316],
            ["case_id" => 104, "client_id" => 317],
            ["case_id" => 105, "client_id" => 318],
            ["case_id" => 106, "client_id" => 319],
            ["case_id" => 107, "client_id" => 320],
            ["case_id" => 108, "client_id" => 321],
            ["case_id" => 109, "client_id" => 322],
            ["case_id" => 110, "client_id" => 323],
            ["case_id" => 111, "client_id" => 324],
            ["case_id" => 112, "client_id" => 325],
            ["case_id" => 113, "client_id" => 326],
            ["case_id" => 114, "client_id" => 327],
            ["case_id" => 115, "client_id" => 328],
            ["case_id" => 116, "client_id" => 329],
            ["case_id" => 117, "client_id" => 330],
            ["case_id" => 118, "client_id" => 331],
            ["case_id" => 119, "client_id" => 332],
            ["case_id" => 120, "client_id" => 333],
            ["case_id" => 121, "client_id" => 334],
            ["case_id" => 122, "client_id" => 335],
            ["case_id" => 123, "client_id" => 336],
            ["case_id" => 124, "client_id" => 337],
            ["case_id" => 125, "client_id" => 338],
            ["case_id" => 126, "client_id" => 339],
            ["case_id" => 127, "client_id" => 340],
            ["case_id" => 128, "client_id" => 341],
            ["case_id" => 129, "client_id" => 342],
            ["case_id" => 130, "client_id" => 343],

        );

        // Uncomment the below to run the seeder
        DB::table('case_subjects')->insert($case_subjects);
    }

}
