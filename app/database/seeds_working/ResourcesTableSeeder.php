<?php

class ResourcesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('resources')->truncate();

        $resources = array(
            ["category" => "Gadget", "name" => "Canon Camera", "division" => "AFAD", "details" => "Canon EOS 6D", "amount" => "4", "status" => "Available"],
            ["category" => "Gadget", "name" => "Sony Video Recorder", "division" => "AFAD", "details" => "Sony Handycam Camcorder", "amount" => "3", "status" => "Available"],
            ["category" => "Gadget", "name" => "Philips Voice Recorder", "division" => "AFAD", "details" => "Philips SpeechMike Premium LFH3500", "amount" => "5", "status" => "Available"],
            ["category" => "Equipment", "name" => "Bullet-proof Vest", "division" => "AFAD", "details" => "", "amount" => "20", "status" => "Available"],
            ["category" => "Gadget", "name" => "Fingerprint Scanner", "division" => "AFAD", "details" => "", "amount" => "3", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Innova", "division" => "AFAD", "details" => "White, SGG 481", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Innova", "division" => "AFAD", "details" => "Silver, STY 190", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Corolla", "division" => "AFAD", "details" => "Red, SEE 342", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Corolla", "division" => "AFAD", "details" => "Red, SLG 909", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Mitsubishi L300", "division" => "AFAD", "details" => "White, SBY 284", "amount" => "1", "status" => "Available"],
            //11
            ["category" => "Vehicle", "name" => "Mitsubishi L300", "division" => "AFAD", "details" => "White, SPP 102", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Photographer - Jessica Soho", "division" => "AFAD", "details" => "Age: 47, Specialization: Underwater Photography, Landscape Photography", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Translator - Sooyoung Choi", "division" => "AFAD", "details" => "Age: 24, Specialization: Korean, Japanese, Vietnamese, Thai", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Consultant - Sherlock Holmes", "division" => "AFAD", "details" => "Age: 48, Specialization: Engineering, Process, Human Resources, Biotechnology", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Programmer - Albert Einstein", "division" => "AFAD", "details" => "Age: 59, Specialization: C++, C#, Java, Python", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Programmer - Galileo Galilei", "division" => "AFAD", "details" => "Age: 34, Specialization: Javascript, Ruby, PHP, Python", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Analyst - Ada Byron", "division" => "AFAD", "details" => "Age: 40, Specialization: Compensation, Data, Financial", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Fingerprint Operator", "division" => "AFAD", "details" => "A person who records fingerprint of someone", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Polygraph Operator", "division" => "AFAD", "details" => "A person who  detects and records changes in physiological characteristics, such as a person's pulse and breathing rates", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Publisher", "division" => "AFAD", "details" => "A person who prepares and issues books, journals, music, or other works", "amount" => "1", "status" => "Available"],
            //21
            ["category" => "Gadget", "name" => "Canon Camera", "division" => "AGD", "details" => "Canon EOS 6D", "amount" => "4", "status" => "Available"],
            ["category" => "Gadget", "name" => "Sony Video Recorder", "division" => "AGD", "details" => "Sony Handycam Camcorder", "amount" => "3", "status" => "Available"],
            ["category" => "Gadget", "name" => "Philips Voice Recorder", "division" => "AGD", "details" => "Philips SpeechMike Premium LFH3500", "amount" => "5", "status" => "Available"],
            ["category" => "Equipment", "name" => "Bullet-proof Vest", "division" => "AGD", "details" => "", "amount" => "35", "status" => "Available"],
            ["category" => "Gadget", "name" => "Fingerprint Scanner", "division" => "AGD", "details" => "", "amount" => "4", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Innova", "division" => "AGD", "details" => "Gold, STF 576", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Innova", "division" => "AGD", "details" => "Silver, SGT 472", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Corolla", "division" => "AGD", "details" => "Blue, SWE 293", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Mitsubishi L300", "division" => "AGD", "details" => "Black, SAA 384", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Photographer - Nigel Barker", "division" => "AGD", "details" => "Age: 39, Specialization: Aerial Photography, Nature Photography, Architecture Photography", "amount" => "1", "status" => "Available"],
            //31
            ["category" => "Person", "name" => "Translator - Taeyeon Kim", "division" => "AGD", "details" => "Age: 25, Specialization: Korean, Portuguese, Swedish", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Consultant - Miguel Torres", "division" => "AGD", "details" => "Age: 55, Specialization: Foreclosure, Politics, Statistics", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Analyst - Demi Lovato", "division" => "AGD", "details" => "Age: 45, Specialization: Digital Business, Business Process", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Fingerprint Operator", "division" => "AGD", "details" => "A person who records fingerprint of someone", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Polygraph Operator", "division" => "AGD", "details" => "A person who  detects and records changes in physiological characteristics, such as a person's pulse and breathing rates", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Publisher", "division" => "AGD", "details" => "A person who prepares and issues books, journals, music, or other works", "amount" => "1", "status" => "Available"],
            ["category" => "Gadget", "name" => "Canon Camera", "division" => "AHTRAD", "details" => "Canon EOS 6D", "amount" => "4", "status" => "Available"],
            ["category" => "Gadget", "name" => "Sony Video Recorder", "division" => "AHTRAD", "details" => "Sony Handycam Camcorder", "amount" => "3", "status" => "Available"],
            ["category" => "Gadget", "name" => "Philips Voice Recorder", "division" => "AHTRAD", "details" => "Philips SpeechMike Premium LFH3500", "amount" => "5", "status" => "Available"],
            ["category" => "Equipment", "name" => "Bullet-proof Vest", "division" => "AHTRAD", "details" => "", "amount" => "25", "status" => "Available"],
            //41
            ["category" => "Gadget", "name" => "Fingerprint Scanner", "division" => "AHTRAD", "details" => "", "amount" => "5", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Innova", "division" => "AHTRAD", "details" => "Silver, SFT 576", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Corolla", "division" => "AHTRAD", "details" => "Silver, SLO 790", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Corolla", "division" => "AHTRAD", "details" => "Red, STE 292", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Mitsubishi L300", "division" => "AHTRAD", "details" => "White, SOP 213", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Photographer - John Watson", "division" => "AHTRAD", "details" => "Age: 40, Specialization: Corporate Photography, Photojournalism Photography", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Translator - Tiffany Hwang", "division" => "AHTRAD", "details" => "Age: 25, Specialization: Spanish, Welsh", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Consultant - Jack Santos", "division" => "AHTRAD", "details" => "Age: 32, Specialization: IT, Process, Immigration, Biotechnology", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Fingerprint Operator", "division" => "AHTRAD", "details" => "A person who records fingerprint of someone", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Polygraph Operator", "division" => "AHTRAD", "details" => "A person who  detect and record changes in physiological characteristics, such as a person's pulse and breathing rates", "amount" => "1", "status" => "Available"],
            //51
            ["category" => "Person", "name" => "Publisher", "division" => "AHTRAD", "details" => "A person who prepares and issues books, journals, music, or other works", "amount" => "1", "status" => "Available"],
            ["category" => "Gadget", "name" => "Canon Camera", "division" => "AOCD", "details" => "Canon EOS 6D", "amount" => "4", "status" => "Available"],
            ["category" => "Gadget", "name" => "Sony Video Recorder", "division" => "AOCD", "details" => "Sony Handycam Camcorder", "amount" => "3", "status" => "Available"],
            ["category" => "Gadget", "name" => "Philips Voice Recorder", "division" => "AOCD", "details" => "Philips SpeechMike Premium LFH3500", "amount" => "5", "status" => "Available"],
            ["category" => "Equipment", "name" => "Bullet-proof Vest", "division" => "AOCD", "details" => "", "amount" => "20", "status" => "Available"],
            ["category" => "Gadget", "name" => "Fingerprint Scanner", "division" => "AOCD", "details" => "", "amount" => "4", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Innova", "division" => "AOCD", "details" => "Gold, SDD 453", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Innova", "division" => "AOCD", "details" => "Gold, SID 342", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Innova", "division" => "AOCD", "details" => "Gold, SXC 453", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Corolla", "division" => "AOCD", "details" => "Red, SVV 446", "amount" => "1", "status" => "Available"],
            //61
            ["category" => "Vehicle", "name" => "Toyota Corolla", "division" => "AOCD", "details" => "Black, SOR 898", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Mitsubishi L300", "division" => "AOCD", "details" => "White, SPQ 662", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Mitsubishi L300", "division" => "AOCD", "details" => "White, SDA 229", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Photographer - Sooman Lee", "division" => "AOCD", "details" => "Age: 45, Specialization: Editorial Photography", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Translator - Kymmie Lee", "division" => "AOCD", "details" => "Age: 32, Specialization: Chinese, French, Japanese", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Consultant - Peter Block", "division" => "AOCD", "details" => "Age: 38, Specialization: Insurance, Accounts, Management", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Programmer - Taylor Swift", "division" => "AOCD", "details" => "Age: 26, Specialization: Objective C, Ruby, Ajax", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Analyst - Celine Dion", "division" => "AOCD", "details" => "Age: 56, Specialization: Marketing, Research, Management", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Fingerprint Operator", "division" => "AOCD", "details" => "A person who records fingerprint of someone", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Polygraph Operator", "division" => "AOCD", "details" => "A person who  detect and record changes in physiological characteristics, such as a person's pulse and breathing rates", "amount" => "1", "status" => "Available"],
            //71
            ["category" => "Person", "name" => "Publisher", "division" => "AOCD", "details" => "A person who prepares and issues books, journals, music, or other works", "amount" => "1", "status" => "Available"],
            ["category" => "Gadget", "name" => "Canon Camera", "division" => "CCD", "details" => "Canon EOS 6D", "amount" => "4", "status" => "Available"],
            ["category" => "Gadget", "name" => "Sony Video Recorder", "division" => "CCD", "details" => "Sony Handycam Camcorder", "amount" => "3", "status" => "Available"],
            ["category" => "Gadget", "name" => "Philips Voice Recorder", "division" => "CCD", "details" => "Philips SpeechMike Premium LFH3500", "amount" => "5", "status" => "Available"],
            ["category" => "Equipment", "name" => "Bullet-proof Vest", "division" => "CCD", "details" => "", "amount" => "40", "status" => "Available"],
            ["category" => "Gadget", "name" => "Fingerprint Scanner", "division" => "CCD", "details" => "", "amount" => "2", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Innova", "division" => "CCD", "details" => "Silver, SXX 342", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Corolla", "division" => "CCD", "details" => "Black, SAD 423", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Corolla", "division" => "CCD", "details" => "White, SLK 334", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Mitsubishi L300", "division" => "CCD", "details" => "White, SJH 668", "amount" => "1", "status" => "Available"],
            //81
            ["category" => "Person", "name" => "Photographer - Jay Park", "division" => "CCD", "details" => "Age: 36, Specialization: Marine Photography, Panorama Photography", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Translator - Kalle Knudsen", "division" => "CCD", "details" => "Age: 38, Specialization: Dutch, German, French, Latin", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Consultant - Stephanie Young", "division" => "CCD", "details" => "Age: 29, Specialization: Civil, Human Resources, Media", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Programmer - Jaime Lontoc", "division" => "CCD", "details" => "Age: 44, Specialization: Java, ASP", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Analyst - Lydia Go", "division" => "CCD", "details" => "Age: 59, Specialization: Fingerprint, Intelligence", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Fingerprint Operator", "division" => "CCD", "details" => "A person who records fingerprint of someone", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Polygraph Operator", "division" => "CCD", "details" => "A person who  detect and record changes in physiological characteristics, such as a person's pulse and breathing rates", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Publisher", "division" => "CCD", "details" => "A person who prepares and issues books, journals, music, or other works", "amount" => "1", "status" => "Available"],
            ["category" => "Gadget", "name" => "Canon Camera", "division" => "DID", "details" => "Canon EOS 6D", "amount" => "4", "status" => "Available"],
            ["category" => "Gadget", "name" => "Sony Video Recorder", "division" => "DID", "details" => "Sony Handycam Camcorder", "amount" => "3", "status" => "Available"],
            //91
            ["category" => "Gadget", "name" => "Philips Voice Recorder", "division" => "DID", "details" => "Philips SpeechMike Premium LFH3500", "amount" => "5", "status" => "Available"],
            ["category" => "Equipment", "name" => "Bullet-proof Vest", "division" => "DID", "details" => "", "amount" => "35", "status" => "Available"],
            ["category" => "Gadget", "name" => "Fingerprint Scanner", "division" => "DID", "details" => "", "amount" => "3", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Innova", "division" => "DID", "details" => "Silver, SUY 867", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Corolla", "division" => "DID", "details" => "Silver, SOO 931", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Mitsubishi L300", "division" => "DID", "details" => "White, STQ 441", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Photographer - Ailee Young", "division" => "DID", "details" => "Age: 28, Specialization: Environmental Photography, HDRI Photography", "amount" => "1", "status" => "Available"],
            ["category" => "Gadget", "name" => "Canon Camera", "division" => "DID", "details" => "Canon EOS 6D", "amount" => "4", "status" => "Available"],
            ["category" => "Gadget", "name" => "Sony Video Recorder", "division" => "DID", "details" => "Sony Handycam Camcorder", "amount" => "3", "status" => "Available"],
            ["category" => "Gadget", "name" => "Philips Voice Recorder", "division" => "DID", "details" => "Philips SpeechMike Premium LFH3500", "amount" => "5", "status" => "Available"],
            //111
            ["category" => "Person", "name" => "Translator - Lyndon Wade", "division" => "DID", "details" => "Age: 47, Specialization: Indian, Arabian, Russian", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Consultant - Andrea Goodwin", "division" => "DID", "details" => "Age: 40, Specialization: Engineering, Corporate, Psychology", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Fingerprint Operator", "division" => "DID", "details" => "A person who records fingerprint of someone", "amount" => "1", "status" => "Available"],
            ["category" => "Gadget", "name" => "Canon Camera", "division" => "EWPID", "details" => "Canon EOS 6D", "amount" => "4", "status" => "Available"],
            ["category" => "Gadget", "name" => "Sony Video Recorder", "division" => "EWPID", "details" => "Sony Handycam Camcorder", "amount" => "3", "status" => "Available"],
            ["category" => "Gadget", "name" => "Philips Voice Recorder", "division" => "EWPID", "details" => "Philips SpeechMike Premium LFH3500", "amount" => "5", "status" => "Available"],
            ["category" => "Equipment", "name" => "Bullet-proof Vest", "division" => "EWPID", "details" => "", "amount" => "25", "status" => "Available"],
            ["category" => "Gadget", "name" => "Fingerprint Scanner", "division" => "EWPID", "details" => "", "amount" => "4", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Innova", "division" => "EWPID", "details" => "Silver, SCD 446", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Innova", "division" => "EWPID", "details" => "Silver, SDX 036", "amount" => "1", "status" => "Available"],
            //121
            ["category" => "Vehicle", "name" => "Mitsubishi L300", "division" => "EWPID", "details" => "White, SLG 449", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Mitsubishi L300", "division" => "EWPID", "details" => "White, SPW 346", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Photographer - Amber Liu", "division" => "EWPID", "details" => "Age: 21, Specialization: Environmental Photography", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Translator - Hyoyeon Kim", "division" => "EWPID", "details" => "Age: 25, Specialization: Chinese, Cantonese, Italian", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Consultant - Allen Manansala", "division" => "EWPID", "details" => "Age: 28, Specialization: Environment, Biotechnology", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Programmer - Allen Valdez", "division" => "EWPID", "details" => "Age: 23, Specialization: Ruby, C#, C++, Java", "amount" => "1", "status" => "Available"],
            ["category" => "Gadget", "name" => "Canon Camera", "division" => "FLD", "details" => "Canon EOS 6D", "amount" => "4", "status" => "Available"],
            ["category" => "Gadget", "name" => "Sony Video Recorder", "division" => "FLD", "details" => "Sony Handycam Camcorder", "amount" => "3", "status" => "Available"],
            ["category" => "Gadget", "name" => "Philips Voice Recorder", "division" => "FLD", "details" => "Philips SpeechMike Premium LFH3500", "amount" => "5", "status" => "Available"],
            ["category" => "Equipment", "name" => "Bullet-proof Vest", "division" => "FLD", "details" => "", "amount" => "35", "status" => "Available"],
            //131
            ["category" => "Gadget", "name" => "Fingerprint Scanner", "division" => "FLD", "details" => "", "amount" => "3", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Innova", "division" => "FLD", "details" => "Gold, SFT 567", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Innova", "division" => "FLD", "details" => "Red, SNB 511", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Innova", "division" => "FLD", "details" => "Gold, SIK 711", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Corolla", "division" => "FLD", "details" => "Gold, SMM 871", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Mitsubishi L300", "division" => "FLD", "details" => "White, SPM 923", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Photographer - Michael Santos", "division" => "FLD", "details" => "Age: 42, Specialization: Conceptual Photography, Photojournalism Photography", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Translator - Rino Nakasone", "division" => "FLD", "details" => "Age: 37, Specialization: Japanese, Chinese, Korean", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Consultant - Tao Zhou", "division" => "FLD", "details" => "Age: 22, Specialization: Insurance, Process, Civil", "amount" => "1", "status" => "Available"],
            ["category" => "Gadget", "name" => "Canon Camera", "division" => "IPRD", "details" => "Canon EOS 6D", "amount" => "4", "status" => "Available"],
            //141
            ["category" => "Gadget", "name" => "Sony Video Recorder", "division" => "IPRD", "details" => "Sony Handycam Camcorder", "amount" => "3", "status" => "Available"],
            ["category" => "Gadget", "name" => "Philips Voice Recorder", "division" => "IPRD", "details" => "Philips SpeechMike Premium LFH3500", "amount" => "5", "status" => "Available"],
            ["category" => "Equipment", "name" => "Bullet-proof Vest", "division" => "IPRD", "details" => "", "amount" => "20", "status" => "Available"],
            ["category" => "Gadget", "name" => "Fingerprint Scanner", "division" => "IPRD", "details" => "", "amount" => "4", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Innova", "division" => "IPRD", "details" => "Gold, SER 451", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Innova", "division" => "IPRD", "details" => "Gold, SXZ 996", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Corolla", "division" => "IPRD", "details" => "White, SPB 706", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Corolla", "division" => "IPRD", "details" => "Blue, SGH 993", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Photographer - Ciril Jazbec", "division" => "IPRD", "details" => "Age: 31, Specialization: Digital Photography", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Translator - Andi Manzano", "division" => "IPRD", "details" => "Age: 43, Specialization: Welsh, Urdu, Spanish, Portuguese", "amount" => "1", "status" => "Available"],
            //151
            ["category" => "Person", "name" => "Consultant - Ramon Bautista", "division" => "IPRD", "details" => "Age: 36, Specialization: Social Media, Politics, Human Resources, Media", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Programmer - Luis Corpuz", "division" => "IPRD", "details" => "Age: 22, Specialization: Javascript, PHP, Visual C#, Visual Basic .NET", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Analyst - Lucy Fernando", "division" => "IPRD", "details" => "Age: 30, Specialization: Intelligence, Data, Accounts", "amount" => "1", "status" => "Available"],
            ["category" => "Gadget", "name" => "Canon Camera", "division" => "RAID", "details" => "Canon EOS 6D", "amount" => "4", "status" => "Available"],
            ["category" => "Gadget", "name" => "Sony Video Recorder", "division" => "RAID", "details" => "Sony Handycam Camcorder", "amount" => "3", "status" => "Available"],
            ["category" => "Gadget", "name" => "Philips Voice Recorder", "division" => "RAID", "details" => "Philips SpeechMike Premium LFH3500", "amount" => "5", "status" => "Available"],
            ["category" => "Equipment", "name" => "Bullet-proof Vest", "division" => "RAID", "details" => "", "amount" => "30", "status" => "Available"],
            ["category" => "Gadget", "name" => "Fingerprint Scanner", "division" => "RAID", "details" => "", "amount" => "6", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Innova", "division" => "RAID", "details" => "White, SFR 557", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Corolla", "division" => "RAID", "details" => "White, SDC 283", "amount" => "1", "status" => "Available"],
            //161
            ["category" => "Vehicle", "name" => "Toyota Corolla", "division" => "RAID", "details" => "White, SFG 385", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Mitsubishi L300", "division" => "RAID", "details" => "White, SLL 209", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Photographer - Lee Towndrow", "division" => "RAID", "details" => "Age: 26, Specialization: Adventure Photography, Travel Photography, Editorial Photography", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Translator - Edlo Kawa", "division" => "RAID", "details" => "Age: 55, Specialization: Russian, Swedish, French", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Consultant - Tamar Kuman", "division" => "RAID", "details" => "Age: 24, Specialization: Strategy, Performance, Public Relations", "amount" => "1", "status" => "Available"],
            ["category" => "Gadget", "name" => "Canon Camera", "division" => "VAWCD", "details" => "Canon EOS 6D", "amount" => "4", "status" => "Available"],
            ["category" => "Gadget", "name" => "Sony Video Recorder", "division" => "VAWCD", "details" => "Sony Handycam Camcorder", "amount" => "3", "status" => "Available"],
            ["category" => "Gadget", "name" => "Philips Voice Recorder", "division" => "VAWCD", "details" => "Philips SpeechMike Premium LFH3500", "amount" => "5", "status" => "Available"],
            ["category" => "Equipment", "name" => "Bullet-proof Vest", "division" => "VAWCD", "details" => "", "amount" => "25", "status" => "Available"],
            ["category" => "Gadget", "name" => "Fingerprint Scanner", "division" => "VAWCD", "details" => "", "amount" => "4", "status" => "Available"],
            //171
            ["category" => "Vehicle", "name" => "Toyota Innova", "division" => "VAWCD", "details" => "Red, SDE 192", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Innova", "division" => "VAWCD", "details" => "Red, SDA 104", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Toyota Corolla", "division" => "VAWCD", "details" => "Red, SDE 339", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Mitsubishi L300", "division" => "VAWCD", "details" => "White, SJG 410", "amount" => "1", "status" => "Available"],
            ["category" => "Vehicle", "name" => "Mitsubishi L300", "division" => "VAWCD", "details" => "White, SKK 999", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Photographer - Yuri Yasuda", "division" => "VAWCD", "details" => "Age: 40, Specialization: Urban Photography, stock Photography", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Translator - Jose Gonzales", "division" => "VAWCD", "details" => "Age: 55, Specialization: Slovak, Mongolian, French, Chinese", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Consultant - Rey Valdez", "division" => "VAWCD", "details" => "Age: 51, Specialization: Public Relations, Process, Human Resources", "amount" => "1", "status" => "Available"],
            ["category" => "Person", "name" => "Publisher", "division" => "VAWCD", "details" => "A person who prepares and issues books, journals, music, or other works", "amount" => "1", "status" => "Available"],
            
    
            ["category" => "Money", "name" => "Marked money", "division" => "FLD", "details" => "Marked money used for entrapment operations", "amount" => "999999999", "status" => "Available"],
            ["category" => "Money", "name" => "Reimbursement Money", "division" => "FLD", "details" => "Reembursement money for miscellaneous fees", "amount" => "999999999999", "status" => "Available"],
//            //GADGET
//            //GADGET
//            //GADGET
//            ["name" => "Metal Detector", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
//                "category" => "Gadget", "amount" => "20", "status" => "Available"],
//            ["name" => "Batton", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
//                "category" => "Gadget", "amount" => "20", "status" => "Available"],
//            ["name" => "Goggles", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
//                "category" => "Gadget", "amount" => "20", "status" => "Available"],
//            ["name" => "Plastic shields", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
//                "category" => "Gadget", "amount" => "20", "status" => "Available"],
//            ["name" => "Microwave", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
//                "category" => "Gadget", "amount" => "20", "status" => "Available"],
//            ["name" => "Chairs", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
//                "category" => "Gadget", "amount" => "20", "status" => "Available"],
//            ["name" => "Handcuffs", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
//                "category" => "Gadget", "amount" => "20", "status" => "Available"],
//            //PERSON
//            //PERSON
//            //PERSON
//            ["name" => "Translator - Wilhelm Paul", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
//                "category" => "Person", "amount" => "1", "status" => "Available"],
//            ["name" => "Analyst - Janine Kau", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
//                "category" => "Person", "amount" => "1", "status" => "Available"],
//            ["name" => "Navigator - Marco Polo", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
//                "category" => "Person", "amount" => "1", "status" => "Available"],
//            ["name" => "Inventor - Leonardo Da Vinci", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
//                "category" => "Person", "amount" => "1", "status" => "Available"],
//            ["name" => "Illustrator - Michael Angelo", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
//                "category" => "Person", "amount" => "1", "status" => "Available"],
//            ["name" => "Programmer - Bill Gates", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
//                "category" => "Person", "amount" => "1", "status" => "Available"],
//            //CAR
//            //CAR
//            //CAR
//            ["name" => "L300 WER345", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
//                "category" => "Vehicle", "amount" => "1", "status" => "Available"],
//            ["name" => "L300 MNB123", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
//                "category" => "Vehicle", "amount" => "1", "status" => "Available"],
//            ["name" => "Lancer LKJ687", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
//                "category" => "Vehicle", "amount" => "1", "status" => "Available"],
//            ["name" => "Land Rover QSE", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
//                "category" => "Vehicle", "amount" => "1", "status" => "Available"],
        );

        // Uncomment the below to run the seeder
        DB::table('resources')->insert($resources);
    }

}