<?php

class ComplaintsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('complaints')->truncate();

        $complaints = array(
            //TEMPLATE
            ["date_commited" => "", "date_reported" => "",
                "narration" => "",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
//****************************************************************************************************************************************************************//
//****************************************************************************************************************************************************************//
            //COMPLAINTS FROM THESIS1
            //1
            ["date_commited" => "2014-02-10", "date_reported" => "2014-02-12",
                "narration" => "Funds worth Php 100,000 which covers Marikina High School's miscellaneous fees and operating costs for the whole year have been stolen by a Canadian exchange student named Justin Bieber. Elizabeth Aguas, principal of the said school, keeps the funds in her vault. Bieber, who has been Aguas' personal student assistant, is suspected to be the robber and has not reported to school since the day of the incident. According to Aguas, she allowed him entry into her office and took hold of the keys to her vault. Bieber left his belongings inside the office that day and left her a note that he 'hates working for her'.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The funds have been stolen, and the complainant is a concerned niece for her aunt Elizabeth.",
                "img_signature" => "1.jpg", "img_right_thumb" => "1.jpg"],
            //2
            ["date_commited" => "2014-01-22", "date_reported" => "2014-02-10",
                "narration" => "Maria Aguilar claims that Chris Brown forced her to perform oral sex on him and tried to insert his penis in her vagina on January 22, the night the group of businessman Cedric Lee allegedly came to her rescue. Brown denied this, saying he was set up by Aguilar for an extortion attempt allegedly led by Lee. The doctor said he was blindfolded, tied up and attacked by at least six men inside Aguilar’s condominium unit in Taguig.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The victim has been feeling uncomfortable from the day of the incident.",
                "img_signature" => "2.jpg", "img_right_thumb" => "2.jpg"],
            //3
            ["date_commited" => "2014-02-10", "date_reported" => "2014-02-12",
                "narration" => "Logan Alpay  and Natalie Domingo fought about cup noodles. Alpay happened to pass on a cafe asking the Domingo, lady vendor how much the noodles are and she said 'We are only selling breads here, sir.' Alpay continued saying bad words about the lady and he finally ordered a bulalo. Domingo said that they are only selling cup noodles, so she served the cup noodles. Alpay began complaining about the cup noodles because he said that he ordered a Bulalo which the shop doesn't serve. The fight grew big and another man tried to stop Alpay and they fought each other. Finally, the man got beat and began telling the man who beat him that he should leave him alone.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "3.jpg", "img_right_thumb" => "3.jpg"],
            //4
            ["date_commited" => "2009-03-01", "date_reported" => "2009-03-09",
                "narration" => "Waitresses Kris Aquino and Claire Baclayan have been charged with misdemeanor prostitution after Logan Alpay alleged they agreed to perform sexual acts in exchange for money. After receiving community complaints, Alpay visited the bar and approached them. It has been proven that an agreement was made to perform a sex act in exchange for money.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Logan Alpay got bankrupt after testing his plan out and wanted the women to return his money.",
                "img_signature" => "4.jpg", "img_right_thumb" => "4.jpg"],
            //5
            ["date_commited" => "2013-04-14", "date_reported" => "2013-04-18",
                "narration" => "Engineer Penelope Balata was stabbed in the heart multiple times at 6am on April 14 by a garbage collector named Mike Jones in the area of Quezon City after an argument inside a Northwest apartment. Jones was charged with first degree murder in the death of Balata. The victim was found stabbed to death shortly before 7 p.m. April 15 inside an apartment in the 3600 block of Seven Mile Lane in Quezon. The complainant claims Jones stabbed Balata multiple times.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The complainant is Balata's cousin and she grieves for her family's loss.",
                "img_signature" => "5.jpg", "img_right_thumb" => "5.jpg"],
            //6
            ["date_commited" => "2013-12-26", "date_reported" => "2013-01-02",
                "narration" => "2 engineers and 1 principal were shot dead during a shootout in Surigao at around 9pm yesterday. Their bodies are seriously wounded with the principal’s head shattered and tattered limbs for the engineers. Suspects are believed to be two men from Cotabato City, who mistakenly left their firearms and name tags along the way.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "6.jpg", "img_right_thumb" => "6.jpg"],
            //7
            ["date_commited" => "2013-01-02", "date_reported" => "2013-01-11",
                "narration" => "Raymond Cadang, a college student from FEU allegedly leapt from the 25th floor of Red Condominum in U-belt at around 1:30am because of not being able to maintain his scholarship. Cadang has also been reported by his schoolmate to be failing in his classes because of financial problems. Therefore, he committed suicide.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The complainant is concerned about the victim and is also experiencing the terrible loss of her nephew.",
                "img_signature" => "7.jpg", "img_right_thumb" => "7.jpg"],
            //8
            ["date_commited" => "2013-01-23", "date_reported" => "2013-01-29",
                "narration" => "Assistant lecturer from De La Salle University found at Agno gate at 6am yesterday was reported to have been stabbed in the head multiple times by a Korean. Sources say she owed the Korean money and she refused to give in to his offers of intimacy. After smoking at the back of EGI around 2am yesterday, a student heard him say so and he also heard cries of a woman but he hurriedly went back to his condo.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Justice for the DLSU professor.",
                "img_signature" => "8.jpg", "img_right_thumb" => "8.jpg"],
            //9
            ["date_commited" => "2013-02-14", "date_reported" => "2013-02-27",
                "narration" => "Upon eating two of her sons because of hunger and temptation, Kristina Gacutan suffered intense pain, shivering and epilepsy. She was found dead after her door has been busted open. Their neighbors reported to have seen the incident from her window and tried to stop Gacutan from doing so but she had already locked up her house and gave them threats. Gacutan was allegedly suffering from depression and anxiety disorder, which might have triggered the urge to eat her children.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The complainant is suffering from a post-traumatic attack and is scarred for the rest of her life.",
                "img_signature" => "9.jpg", "img_right_thumb" => "9.jpg"],
            //10
            ["date_commited" => "2013-01-25", "date_reported" => "2013-02-03",
                "narration" => "3 Americans have allegedly been participating in an illegal association involving gambling, betting and drugs in San Juan City. The course held no league activity for two weeks after the announcement. The gang has since started to play again under the condition they do not have entry fees designed to reward winners with a pot at the end of play. But, these have been going on for months now and the barangay captain is complaining about the noise and drugs wrappers found scattered around the community.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Drug dealing is illegal and the complainant is a concerned citizen for their community.",
                "img_signature" => "10.jpg", "img_right_thumb" => "10.jpg"],
            //11
            ["date_commited" => "2013-02-27", "date_reported" => "2013-03-03",
                "narration" => "Bus conductor from Leyte plotted a plan against his friends during a trip to the farm where they were supposed to tend to some of their crops, according to one of the victims who survived. The suspect is reported to have brain damage, but they did not think he would do that. He told his bus driver friend to stop the bus because he needed to pee somewhere so he got off the bus, but the next thing they knew, they heard a loud explosion and things fell apart.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The bus conductor has to be stopped.",
                "img_signature" => "11.jpg", "img_right_thumb" => "11.jpg"],
            //12
            ["date_commited" => "2013-01-02", "date_reported" => "2013-03-20",
                "narration" => "2 businessmen and 1 house husband were found to be makers of custom coins who were found guilty of counterfeiting charges for minting and distributing a form of private money called the Liberty Dollar in XYZ company: Christopher Sese, Gong Wai See and Karlo Martinez. The trio claims that the money was a private voluntary currency for those conducting business outside the government's purview and was not meant to be used as legal tender.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "12.jpg", "img_right_thumb" => "12.jpg"],
            //13
            ["date_commited" => "2013-01-05", "date_reported" => "2013-04-01",
                "narration" => "Businessman from China abducted 5 children, 2 of which were American to slave them for his selfish purposes. He would pick up the kids from school pretending to buy them something nice and afterwards kidnaps them. A witness said he recognizes his face around because he frequents visiting this school when it is dismissal time.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "13.jpg", "img_right_thumb" => "13.jpg"],
            //14
            ["date_commited" => "2013-03-10", "date_reported" => "2013-04-01",
                "narration" => "2 drug dealers have been found to be dealing marijuana in Benguet on Thursday and have been disguising themselves as garbage collectors in order to hand out the drugs.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "14.jpg", "img_right_thumb" => "14.jpg"],
            //15
            ["date_commited" => "2013-04-18", "date_reported" => "2013-04-20",
                "narration" => "Top drug lord in possession of shabu has been spotted in a lab in Taguig getting high. The drug was everywhere from the tables to the floors and he laid there on center of the room laughing and holding a few of them while talking to himself.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "15.jpg", "img_right_thumb" => "15.jpg"],
            //16
            ["date_commited" => "2013-01-10", "date_reported" => "2013-04-12",
                "narration" => "Serendra developers were convicted of laundering thousands of dollars from a state grant for a job-training program in Serendra. The developers, which are close friends of the victim, took as much as $11,000 from checks worth more than $30,000,000 that were supposed to be for work related to the grant. About $20,000 was deposited back into accounts controlled by the victim.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "16.jpg", "img_right_thumb" => "16.jpg"],
            //17
            ["date_commited" => "2013-04-30", "date_reported" => "2013-05-12",
                "narration" => "A gym instructor was jogging at 4am in the morning when he was shot by a stray bullet, puncturing his head in the process. The suspect is believed to be a janitor named Miguel Camiguin in the gym that the instructor has been working at. He has been suspected of multiple attempts to kill Camiguin.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "17.jpg", "img_right_thumb" => "17.jpg"],
            //18
            ["date_commited" => "2013-05-03", "date_reported" => "2013-05-20",
                "narration" => "A known drug pusher has been found dead in Caloocan City after convincing 2 women to take drugs from him. The women, as a defense mechanism, attacked him which led to him bumping his head on a metal tube. The women gained a few scratches in the head and bruises on their limbs.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "18.jpg", "img_right_thumb" => "18.jpg"],
            //19
            ["date_commited" => "2013-03-29", "date_reported" => "2013-04-10",
                "narration" => "Rape victim advocates hope a guilty verdict in the case of a man charged with sexually assaulting eight women in the past. Pinay has been allegedly coerced by her boyfriend to have sex with her but she resisted. He instead held it against her and raped her, even threatening her. She knew of his sexual relations in the past, but only now did she take action about this matter when it happened to her.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "19.jpg", "img_right_thumb" => "19.jpg"],
            //20
            ["date_commited" => "2013-05-01", "date_reported" => "2013-05-20",
                "narration" => "In a shooting range arena in Manila, four friends have been enjoying a peaceful afternoon practicing when one of their friends accidentally fired the trigger at three of them. The accused, Veronica Co is a medical technologist who shot her co-medical technologists and a therapist unknowingly. She attempted to escape the area after doing so because she couldn’t believe what she did, broke down really bad, and did not know what to do.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "20.jpg", "img_right_thumb" => "20.jpg"],
            //21
            ["date_commited" => "2013-07-02", "date_reported" => "2013-07-07",
                "narration" => "Top druglord of Zamboanga, Sylvia Ang, has been released from jail and is probably starting to wreak havoc in the streets of Manila once again. Concerned citizens have been frightened about her return as her drug dealings always lead to murder.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "21.jpg", "img_right_thumb" => "21.jpg"],
            //22
            ["date_commited" => "2013-01-15", "date_reported" => "2013-04-22",
                "narration" => "Michael Gonzales, a paramedic, was stabbed by a woman named Mariz Tamboa while taking a leak on the roadside of Makati City. He was taking a break from is shift when Tamboa stabbed him from his behind. He died on arrival to the hospital. Tamboa has been found out to be related to him in the past, one of his ex-girlfriends.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "22.jpg", "img_right_thumb" => "22.jpg"],
            //23
            ["date_commited" => "2013-06-28", "date_reported" => "2013-07-12",
                "narration" => "Drunk driver Monica Velasco shot a bypasser jogging on the roadside for unknown reasons. The victim is identified to be a student named Celine Bacaycay, who was believed to be working out in the wee hours of the morning, around 5:30am.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "23.jpg", "img_right_thumb" => "23.jpg"],
            //24
            ["date_commited" => "2013-09-24", "date_reported" => "2013-09-22",
                "narration" => "5 robbers threatened the staff of Security Bank in Alabang, stuffed a four-figure sum of money into an orange Tesco bag and were then driven away in the a taxi cab which they had arrived. They were all wearing a black beanie hat, a dark waist-length jacket and brown trousers.  Two tellers of the said bank, Isabel Balana and Scott Balisacan, were shot when the robbers entered. The suspects are identified to be Paulo Arcilla, Samson Sanqui, Christian Tiangco, Gabriel Lantin and Leonardo Liamzon, 4 of which are unemployed and one, a nurse.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "24.jpg", "img_right_thumb" => "24.jpg"],
            //25
            ["date_commited" => "2013-08-10", "date_reported" => "2013-08-12",
                "narration" => "Jack Baloaloa, an architect, committed suicide after being reported to have vandalized in Pasay City. Colleagues say his floor plans failed, so that must have caused him to commit the act. He was on the verge of getting fired from work as well.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "25.jpg", "img_right_thumb" => "25.jpg"],
            //26
            ["date_commited" => "2013-09-07", "date_reported" => "2013-09-09",
                "narration" => "Richmond Collins, an American accountant, came up to Clarissa Mae Caganap and asked how she was doing, came across all nice and concerned about her. They talked for an hour or so, and then he offered to give her a lift home. Caganap was still messed up in the head about her ex-boyfriend leaving so she said yes. They started in the right direction, but then Collins took a wrong turn and forced her into his boarding house in Manila – he raped her in his room, and it was disgusting according to her. She kept pushing him and telling him to leave her alone but he wouldn’t. Then Collins drove her home. She couldn’t believe it, as if nothing had happened. She was numb and got into her flat and just cried. It was really late when the incident happened, around 3:30am already.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "26.jpg", "img_right_thumb" => "26.jpg"],
            //27
            ["date_commited" => "2013-10-20", "date_reported" => "2013-10-22",
                "narration" => "Professors Tyrone Tecson, Eun Hyuk Park and Bert Lee from De La Salle University have been reported to be prostitutes giving their service to clients in pubs at Pedro Gil. Two accountants, Claudine Calalang and Marcella Diwa and one student, Jackie Calalo were able to identify them as one of them is a DLSU student. All three were victimized by seduction by the three professors.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "27.jpg", "img_right_thumb" => "27.jpg"],
            //28
            ["date_commited" => "2013-10-20", "date_reported" => "2013-10-28",
                "narration" => "2 Korean students named Sungyeol Choi and Myungsoo Choi were caught to have been dealing drugs to high school students illegally at one of their hideout sites in Quezon City. The Chois are twins and have been known to be drug pushers in Korea.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "28.jpg", "img_right_thumb" => "28.jpg"],
            //29
            ["date_commited" => "2013-10-12", "date_reported" => "2013-11-12",
                "narration" => "Shania Dolap, niece of Gary Michael Waters has been raped by her own uncle on her birthday. Waters was on vacation and visited the family. During her party in their home, Waters forced himself on the girl and she has had nightmares ever since. Her family took action and kicked Waters out of their home for good upon knowing of the incident.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "29.jpg", "img_right_thumb" => "29.jpg"],
            //30
            ["date_commited" => "2013-11-01", "date_reported" => "2013-11-20",
                "narration" => "African-American businessmen, Johnson Smith and Simon Davis have been providing shops fake cellular phones and mobile phone equipment. The contents include Fujitsu-branded phone chargers and other accessories through to the newest smartphones from Samsung, Sony and Microsoft. Many are suspected of being fake and are subjected to detailed examination by representatives of the brands who have joined the raid. Danica Dahlia Gonong, a student, has been one of the owners of the shops and has been victimized for the first time by these businessmen.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "30.jpg", "img_right_thumb" => "30.jpg"],
            //31
            ["date_commited" => "2012-12-18", "date_reported" => "2012-12-28",
                "narration" => "Gino Haparam, a DLSU student, was shot dead while running away from gunmen outside EGI apartment in Manila. One of the gunmen and considered as a suspect is Sean William Parker, an American butcher. The shooting occurred at about 2:40am when he just returned from drinking in Sherwood place.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "31.jpg", "img_right_thumb" => "31.jpg"],
            //32
            ["date_commited" => "2013-06-08", "date_reported" => "2013-07-01",
                "narration" => "Butcher, Mark Anthony Collins and Fireman, Jacob Reed have been indicted on fraud charges for allegedly failing to disclose to a research company owned by Jasper Ilog where they applied for overlapping grants totaling $1.2 million from two different federal agencies.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "32.jpg", "img_right_thumb" => "32.jpg"],
            //33
            ["date_commited" => "2013-12-03", "date_reported" => "2013-01-10",
                "narration" => "American fireman named Matthew Morgan has been accused of using a phony contractor's license and fraudulent use of funds. Sources say he took people's money, but didn't complete the work. He was originally sentenced in 2008 on similar charges in the US, but they say he continued the same scheme after his release from jail.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "33.jpg", "img_right_thumb" => "33.jpg"],
            //34
            ["date_commited" => "2012-01-10", "date_reported" => "2012-02-01",
                "narration" => "American manager, Liam Morgan from Maryland is to be sentenced in court to 12 years in prison for defrauding Filipino businessman Duane Kalilo by telling him and his subordinates to stop paying their mortgages.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "34.jpg", "img_right_thumb" => "34.jpg"],
            //35
            ["date_commited" => "2014-02-10", "date_reported" => "2014-03-02",
                "narration" => "An alleged attempt to use fraudulent gift cards of Jackson Kelly in a supermarket led to a bizarre escapade of drug dealing and counterfeiting more gift certificates from establishments such as Starbucks. Kelly victimized a businessman named Duke Labao and was able to acquire his credit cards.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "35.jpg", "img_right_thumb" => "35.jpg"],
            //36
            ["date_commited" => "2014-01-20", "date_reported" => "2014-01-25",
                "narration" => "Ed Lico said that he’s the victim of a multi-billion dollar fraud at the hands of an American businessman named Ryan Dylan Wood known as Giraffe when his company bought it last year and lied about its finances. Lico said executives at Autonomy Corporation PLC, Wood’s company, willfully boosted the company's figures through various accounting tricks, which convinced him to pay $9.7 billion for the company.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The victim has been threatened and is trying to cope with the trauma.",
                "img_signature" => "36.jpg", "img_right_thumb" => "36.jpg"],
            //37
            ["date_commited" => "2014-03-09", "date_reported" => "2014-03-17",
                "narration" => "2 masked men armed with guns walked through an open ceiling vent at RCBC in Quezon City after threatening Enrique Macalino, a welder working on the renovation of the office after work hours at around 10pm. The men allegedly went straight to the cash box and made off with an undisclosed amount of money. They have been identified later on as Ryan Hayes, an Australian taxi driver, and Joseph Sullivan, a translator, reported to be using their foreign identities every now and then as inquirers for the bank, thus they might have found their way in.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "37.jpg", "img_right_thumb" => "37.jpg"],
            //38
            ["date_commited" => "2013-05-18", "date_reported" => "2013-05-26",
                "narration" => "Landon Jordan, an Australian politician has been charged with multiple counts in the road rage shooting death of a female nurse named Kris Magbuhat. Jordan followed her into a gated apartment complex which is reported to be Magbuhat’s policeman uncle’s where he shot her to death.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "38.jpg", "img_right_thumb" => "38.jpg"],
            //39
            ["date_commited" => "2013-01-15", "date_reported" => "2013-01-27",
                "narration" => "Jack Marshall, an Australian politician has been reported to set an elementary school teacher’s house on fire. The elementary school teacher who is Ailee Jane Magtanggol suffered third degree burns which later resulted to her death.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "39.jpg", "img_right_thumb" => "39.jpg"],
            //40
            ["date_commited" => "2013-07-10", "date_reported" => "2013-07-13",
                "narration" => "Connor Charles Hunter, an Australian pilot, has been accused of robbing an IT professional named Michael James Maramba in a supermarket in Sta. Mesa. Customers buying were forced to the ground in Hunter’s attempt to get to Maramba. Hunter got away after the incident and Maramba says he owed him some money.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "40.jpg", "img_right_thumb" => "40.jpg"],
            //41
            ["date_commited" => "2013-04-04", "date_reported" => "2013-04-18",
                "narration" => "Clarice Ona, a student from San Beda had her clitoris was removed and had no idea what was about to happen to her. The alleged suspect is a Chinese Newsreader named Lay Zhang. Ona claims that they got into his car, thinking they’d do a run through of the school newspaper. They started driving and ended up in a bush instead, she said. Zhang came at her with a knife, one of those knives that hasn't seen water or anything good for a while. He led her to a room and the next thing she knew he was pinning her down. Ona didn't know what was planned but then Zhang took hold of her clitoris and started cutting it inch by inch while holding her down.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "41.jpg", "img_right_thumb" => "41.jpg"],
            //42
            ["date_commited" => "2014-12-28", "date_reported" => "2013-01-02",
                "narration" => "Hannah Wu, a housewife was battered by his husband Yi Wu, better known as Kris. After being stabbed and chopped more than 10 times about the body, Hannah says she is prepared to leave her husband of 14 years and hopes that he is jailed for his actions. Hannah was allegedly attacked by the man on after yet another domestic brawl. When this newspaper visited her in hospital yesterday her hair was visibly still blood soaked. She hugged her elderly mother who had also come to visit her. Her face bore a long chop wound and even though it was surgically closed, blood was still oozing from the wound. Her face was swollen fat and her eyes were blood shot, clear signs of the beating she received.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "42.jpg", "img_right_thumb" => "42.jpg"],
            //43
            ["date_commited" => "2013-01-02", "date_reported" => "2013-01-11",
                "narration" => "Ming Chiu, a Chinese plumber has been charged of kidnapping and enslaving a 10-year-old boy named Salvador Felipe. According to Felipe, he was left with his legs and arms tied for three days (after the criminal incidents) until he managed to untie himself.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "43.jpg", "img_right_thumb" => "43.jpg"],
            //44
            ["date_commited" => "2013-01-20", "date_reported" => "2013-01-29",
                "narration" => "Ming Chiu, a Chinese plumber has been charged of raping Jana Hogay, a business student. Hogay was consulting Chiu for her thesis about the economy when he started to do things to help her get comfortable. Then one time he just started to have sex with her without her consent, said Hogay. She cried out for him to stop but he kept going and she felt ashamed that she didn’t feel comfortable about sex. She also felt angry that he didn’t stop when she asked him to.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "44.jpg", "img_right_thumb" => "44.jpg"],
            //45
            ["date_commited" => "2012-01-29", "date_reported" => "2012-02-03",
                "narration" => "Jasper Hans Chua was one of the kids abducted by Chinese photographer Bing Ng. Ng would make him pose for him during photo shoots and sometimes made him his personal assistant. Chua slept on the floor and woke up at 5 each morning to clean the house, fetch water and wash dishes. He says he was beaten daily with electrical cords. Chua was allowed no contact with her family. Once, he says, he tried to run away but was caught and beaten. At school, he often cried, and he had scars on his arms and legs from beatings.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "45.jpg", "img_right_thumb" => "45.jpg"],
            //46
            ["date_commited" => "2013-02-10", "date_reported" => "2013-02-27",
                "narration" => "Paul Palabay, a librarian was suffering from an attack in near Pasig river when the not so good Samaritan Chuan Tsui, a Chinese newsreader, abandoned him to die. A witness has identified Tsui to have been linked to Palabay as he copyreads some articles in Palabay’s library.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "46.jpg", "img_right_thumb" => "46.jpg"],
            //47
            ["date_commited" => "2013-02-27", "date_reported" => "2013-03-03",
                "narration" => "Japanese prostitute named Takahashi Minami, better known as Takamina (her stage name) was seen in possession of drugs such as coke and cocaine, offering it to her customers when she works in the wee hours in the morning at Diamond Bar in Pedro Gil.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "47.jpg", "img_right_thumb" => "47.jpg"],
            //48
            ["date_commited" => "2013-03-10", "date_reported" => "2013-03-20",
                "narration" => "Atsuko Maeda, ex-singer of the Japanese group AKB48, allegedly trespassed a private property in Quezon City owned by Angelica Panay, a librarian in FEU. Maeda did not steal anything, claiming that she needed a ‘place to crash’ and she found the property suitable to her tastes.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "48.jpg", "img_right_thumb" => "48.jpg"],
            //49
            ["date_commited" => "2013-03-30", "date_reported" => "2013-04-01",
                "narration" => "Sakura Yamamoto, a Japan-based nurse injected an illegal drug to the dextrose of patient Ricardo Castro after speculations that the two called it quits in their relationship. Ricardo, a janitor of the hospital Yamamoto works in, broke off the relationship with Yamamoto a week before, and let her treat him during one of his panic attacks in hopes of reconciliation. Yamamoto was reported to be very depressed and angry, not being able to cope with their separation. Thus, she was accused of seeking revenge by injecting the drug into Castro’s system, which later on resulted to complications and death.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "49.jpg", "img_right_thumb" => "49.jpg"],
            //50
            ["date_commited" => "2013-03-28", "date_reported" => "2013-04-01",
                "narration" => "Chinese photographer Bing Ng has been reported to be found in a hotel after abusing a Filipino-American child named Jasmine Brown. Brown was sexually assaulted and kidnapped the night before. She was threatened that if she told anyone about it, Ng would kill her. Brown was lured with clothes and sweets on the way home from school, and was eventually kidnapped.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "50.jpg", "img_right_thumb" => "50.jpg"],
            //51
            ["date_commited" => "2013-04-10", "date_reported" => "2013-04-20",
                "narration" => "Chinese photographer Bing Ng has been reported to have been enslaving his son, Bo Ng at home. According to his son, he was not allowed to rest. If he did something wrong or it was not what he wanted, his father hit him with an electrical cord. If he wanted to sit down for a bit because he was so tired, he would scream at him. Bo was never allowed to leave the house, so he didn't realize that he was his son or even a human being, he said.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "51.jpg", "img_right_thumb" => "51.jpg"],
            //52
            ["date_commited" => "2013-03-15", "date_reported" => "2013-04-12",
                "narration" => "Three nurses namely: Marc Payawal, Kenneth Rafal and Charles Rafanan were attacked by three men who were identified to be part of the Batsi Gang (Samson Sanqui, Christian Tiangco and Gabriel Lantin) in SM Sta. Mesa when they were eating lunch at the food court at 1:30pm. The robbers fired shots but no one was hit and demanded the nurses in particular to get down and give their money. No other customers were attacked. The men knew they needed something from them and then got away with an undisclosed amount of money. They wore green camouflage fatigues, masks and matching caps.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "52.jpg", "img_right_thumb" => "52.jpg"],
            //53
            ["date_commited" => "2013-05-10", "date_reported" => "2013-05-12",
                "narration" => "The robbery of Rafael Lazo, a businessman took place in an unknown bank in Quezon City which happened at about 6:00 a.m. Lazo was there to check on a couple of files for his meeting later that day when a man suspected to be a part of Batsi Gang went inside the bank and demanded money from him. Money was taken, but Lazo is not disclosing the amount. There were no customers inside the bank at the time and no injuries were reported as it was early in the morning. The robbers left the area in a taxi.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "53.jpg", "img_right_thumb" => "53.jpg"],
            //54
            ["date_commited" => "2013-05-19", "date_reported" => "2013-05-20",
                "narration" => "A Vietnamese woman stole an antique jar from Richard Rabago, a businessman.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "54.jpg", "img_right_thumb" => "54.jpg"],
            //55
            ["date_commited" => "2013-04-03", "date_reported" => "2013-04-10",
                "narration" => "Jose Marie Viceral, more known as Vice Ganda was robbed of over 150 million yen after being swindled by a Japanese woman named Mayu Watanabe. A woman called him claiming to be working for a legitimate food manufacturing and distribution company, and she told him that her company had the opportunity to issue bonds from the Ministry of Agriculture at an annual interest rate of 15%. She even went as far as to send him an information packet explaining the loan opportunity. Having convinced Viceral of the legitimacy of her offer, for three months following the phone call, the conwoman visited his house over 14 times and in all, received over 150 million yen in payments from the Viceral.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "55.jpg", "img_right_thumb" => "55.jpg"],
            //56
            ["date_commited" => "2013-05-12", "date_reported" => "2013-05-20",
                "narration" => "Australian politician Jack Marshall has been suspected of arson attacks that destroyed parked cars, scorched buildings and rattled much of the nation's second-largest city over the weekend. The onslaught of intentionally set fires left residents on edge over the weekend in some of the most densely populated areas of the city. Even long-time firefighters struggled to recall an arson outbreak involving so many fires. The fires left behind a trail of smoldering debris. Police urged residents to check their cars for any signs of tampering and to take simple precautions such as locking vehicles, keeping garage and carport lights on at night and reporting suspicious activity.	",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "56.jpg", "img_right_thumb" => "56.jpg"],
            //57
            ["date_commited" => "2013-08-01", "date_reported" => "2013-08-07",
                "narration" => "Chris Brown, alleged rapist, impregnated Stephanie Germanotta, commonly known as Lady Gaga. According to Germanotta, when the time came to put the condom on, Brown said he didn’t want to – she said ‘well let’s not go there then, we can just keep doing what we were doing’. But he got angry and said that she couldn’t stop him. He forced himself on her anyway. Germanotta was so upset, as soon as he was finished she got dressed and went home straight away. After a couple of weeks, news broke out that Lady Gaga was pregnant.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "57.jpg", "img_right_thumb" => "57.jpg"],
            //58
            ["date_commited" => "2013-07-30", "date_reported" => "2013-08-22",
                "narration" => "Anne Curtis-Smith, actress, went to a party with Chris Brown, a friend she grew up with. They met some of his friends at the party and everything seemed to be going well. Smith had a couple of drinks but not that many. She didn’t remember much, but she remembered thinking ‘I feel really out of it’ when both of them were in the taxi on the way home. She woke up in a bed in an inn in Pasay City. She said she didn’t know how she got there, felt horrible and really scared and confused. Her head was thumping, and her body felt sticky. Her doctor said it’s best not to shower or anything, so he helped her get to the hospital where they did some tests and gave her the morning after pill, and antibiotics in case of infections. She had had sex and had been raped. She knew she didn’t want to or agree to it, but couldn’t remember a lot.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "58.jpg", "img_right_thumb" => "58.jpg"],
            //59
            ["date_commited" => "2013-07-10", "date_reported" => "2013-07-12",
                "narration" => "Eugenio Abunda, AKA Boy Abunda has been bribed to pay 10 million pesos in exchange for the release of a number of scoops in showbiz, as well as giving up his relationship with his partner. The suspect was identified to be Christian Tiangco, a member of Batsi Gang. Abunda, of course, did not agree to his offer.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "59.jpg", "img_right_thumb" => "59.jpg"],
            //60
            ["date_commited" => "2013-09-15", "date_reported" => "2013-09-22",
                "narration" => "Ming Li Chiu, alleged plumber and kidnapper, along with his unscrupulous men abduct kids and come into their homes when parents are away working at the tea gardens and lure young girls with new clothes and sweets. Before they know it, they are on a train to a big city at the mercy of these greedy men.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The complainant is a concerned citizen and wants to spare kids from these atrocities.",
                "img_signature" => "60.jpg", "img_right_thumb" => "60.jpg"],
            //61
            ["date_commited" => "2013-06-25", "date_reported" => "2013-06-29",
                "narration" => "OFW Sabel Sadural aborted her baby girl and used Twitter to tell the story of her abortion. In the tweets, she explains how the ‘pale, serious faces’ of three women on the flight made her suspect they were there for the same thing. After waking from the anaesthetic, she explains how she ‘cried from relief and sadness’. ‘There are so many of us who have had an abortion, but the shame and stigma has kept us silenced for too long,’ she tweeted.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "61.jpg", "img_right_thumb" => "61.jpg"],
            //62
            ["date_commited" => "2013-06-15", "date_reported" => "2013-06-28",
                "narration" => "Architect Anton Saley killed his son following cricket practice in their home. Andrew Saley, his son, was beaten, reportedly with a cricket bat to the head, soon after training with his junior team on Wednesday evening at the Sports Stadium in Makati City. Andrew suffered significant injuries and died at the scene. Reports said he was also stabbed, although this could not be confirmed. Police said they arrived to find the father, armed with a knife.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "62.jpg", "img_right_thumb" => "62.jpg"],
            //63
            ["date_commited" => "2013-06-03", "date_reported" => "2013-06-04",
                "narration" => "Japanese exchange student Yamato Akitsuki attempted and successfully raped his professor, Arlene Taclas after school hours at the parking lot of their school. Akitsuki has been fancying Taclas, according to other students and have been hitting on her since his entry in school.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "63.jpg", "img_right_thumb" => "63.jpg"],
            //64
            ["date_commited" => "2013-02-10", "date_reported" => "2013-06-04",
                "narration" => "Karla Talaba, a nurse in Makati Memorial Center has been suspected of having stolen a shipment of highly radioactive cobalt-60 released from co-nurse Yvonne Viray. Cobalt-60 emits strong gamma rays and poses a significant threat of radiation sickness and skin burns in the short term and causes cancer of the liver, kidneys and bones.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "64.jpg", "img_right_thumb" => "64.jpg"],
            //65
            ["date_commited" => "2013-02-01", "date_reported" => "2013-02-04",
                "narration" => "Justin Tomawis, a high school student, killed his father while he was driving him to school at 7am on February 1. The son has been tired of his father’s liabilities and wanted him to handle the problems himself when the father said Tomawis should stop schooling.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "65.jpg", "img_right_thumb" => "65.jpg"],
            //66
            ["date_commited" => "2013-02-01", "date_reported" => "2013-02-04",
                "narration" => "Welders Albert Agonoy and Carlo Agsalud got into an argument in the afternoon of February 1 when the former pushed the latter off the roof of the building they were working on. Agsalud suffered from severe blood loss and died accordingly.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "66.jpg", "img_right_thumb" => "66.jpg"],
            //67
            ["date_commited" => "2012-12-28", "date_reported" => "2013-01-05",
                "narration" => "Aldrich Cabello, boyfriend of Mica Reyes, has been suspected of killing his girlfriend in her car after their date for their 5th anniversary together three days after Christmas.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "67.jpg", "img_right_thumb" => "67.jpg"],
            //68
            ["date_commited" => "2013-02-10", "date_reported" => "2013-02-28",
                "narration" => "Julio Macaraeg, father of MJ Macaraeg has been reported of murdering his son in exchange for marijuana. The father has been summoned by drug lords to surrender his son in order to claim his ‘prize’. He loves his son dearly but drugs were also a part of his life, and that must have caused an effect in his brain to kill MJ.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "68.jpg", "img_right_thumb" => "68.jpg"],
            //69
            ["date_commited" => "2013-06-01", "date_reported" => "2013-06-10",
                "narration" => "Australian Sebastian Hastings suspected of twice targeting a bingo hall and robbing a particular person, Myla Monica Sumalin, a nursing student at CEU at gunpoint, according to the witness. In one of the robberies, Sumalin was struck several times in the head with a handgun in the parking lot of the Shoe Salon bingo hall.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The victim has been in a coma for months now. The complainant sympathizes and decided to take action.",
                "img_signature" => "69.jpg", "img_right_thumb" => "69.jpg"],
            //70
            ["date_commited" => "2013-01-21", "date_reported" => "2013-02-04",
                "narration" => "Mass Communication student, Anthony Manalo spread false accusation about Jim Dwyer, a known newsreader, that he had condoned prostitution in publication houses around the country. Manalo had been spreading rumors about Dwyer’s prostitution cases and exposed them to the public using his radio shows in school.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "70.jpg", "img_right_thumb" => "70.jpg"],
            //71
            ["date_commited" => "2009-05-28", "date_reported" => "2009-06-10",
                "narration" => "After having an affair with an Asian woman, politician Jack Marshall (commonly known as Jack The Black) set an abandoned building on fire at around 2am in the Makati City. Sources say his affair with the woman did not turn out well, thus his arson case.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "71.jpg", "img_right_thumb" => "71.jpg"],
            //72
            ["date_commited" => "2013-01-10", "date_reported" => "2013-02-03",
                "narration" => "For over six years, Philips Agumbay has hounded figures of the state legal and political establishment on his blog, Legal Schnauzer, a hothouse of furious but often fuzzily sourced allegations of deep corruption and wide-ranging conspiracy. Some of these allegations he has tested in court, having sued his neighbor, his neighbor’s lawyer and now his former employer, Allan Cardona among others. Mostly, he has lost.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Mr. Agumbay is no stranger to defamation suits, as one might surmise from reading his blog.",
                "img_signature" => "72.jpg", "img_right_thumb" => "72.jpg"],
            //73
            ["date_commited" => "2013-05-30", "date_reported" => "2013-06-03",
                "narration" => "Landon Jordan, an Australian politician is being sued by Allan Cardona, a newsreader, for defamation and malicious prosecution after his acquittal on criminal charges in a maternity ward scuffle. Cardona said that Jordan damaged his reputation and led to his prosecution.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "73.jpg", "img_right_thumb" => "73.jpg"],
            //74
            ["date_commited" => "2013-05-30", "date_reported" => "2013-06-03",
                "narration" => "Paulo Arcilla and Samson Sanqui have been charged with trying to steal card numbers and PINs of customers at Citibank Alabang branch. The pair is charged with burglary and criminal possession of forgery device. They placed a skimming machine over the card reader on ATM machine after dark, stuck a couple of cameras above the keypads on the cash machines inside and waited to collect the numbers from unsuspecting customers. Patrick Yalung, a messenger, has been one of the victims of this act as he lost P70,000 worth of money in his account in one night.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "74.jpg", "img_right_thumb" => "74.jpg"],
            //75
            ["date_commited" => "2013-05-29", "date_reported" => "2013-06-03",
                "narration" => "American accountant Richmond Collins raped Korean-American student Krystal Jung inside a boarding house in Malate, Manila. According to Jung, she was raped by a stranger late at night while delivering a letter to an ex-boyfriend. She had little recollection of the actual rape, but it was confirmed during an exam at a local hospital. Bits and pieces of the experience still linger. She told him to leave and then he kissed her and shoved his hand in between her legs. Jung tried to yell, but he was kissing her so hard she couldn't. She tried to fight him, but it just happened so quick, and her struggling did little. After it was over he said he would call her, and then he got up and left. She just sat there on the bed and couldn't even cry.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "75.jpg", "img_right_thumb" => "75.jpg"],
            //76
            ["date_commited" => "2013-09-02", "date_reported" => "2013-09-10",
                "narration" => "Doctor Lance Kurtis Alipio has allegedly cheated on his wife and raped his niece, Aliyah Arroyo in his house when Arroyo came over to interview his uncle for a project. Arroyo said the first time his uncle touched her inappropriately, she was mortified. His hand was under her chest and the other between her legs. She could feel the warmth of his hand on her privates through the fabric of her underwear. She remembered her face going bright red with embarrassment and had tears in her eyes. She couldn’t resist as he continued his ministrations until Alipio’s wife saw them in bed together.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "76.jpg", "img_right_thumb" => "76.jpg"],
            //77
            ["date_commited" => "2010-12-21", "date_reported" => "2010-12-31",
                "narration" => "Sungyeol Choi, a Korean student has dealt drugs to a high school student named Gio Balaba. When Balaba did not want to buy drugs from him anymore, Choi was reported to have killed him by hitting him on the head and on other parts of the body.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "77.jpg", "img_right_thumb" => "77.jpg"],
            //78
            ["date_commited" => "2010-10-24", "date_reported" => "2010-12-04",
                "narration" => " A witness reported that cases where products belonging to popular Indian brands like Natraj Pencil, Boroplus antiseptic cream, Raymond, Onida etc., and more importantly iPhone 5S units are being copied and sold in Greenhills. African-Americans have been speculated to be suspects of this counterfeiting.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "78.jpg", "img_right_thumb" => "78.jpg"],
            //79
            ["date_commited" => "2010-03-10", "date_reported" => "2010-11-11",
                "narration" => "Gong Wai See, China man from Korea has been suspected of printing $1.1 million in fake $50 bills, after months of detective work and use of confidential informer in bank payments; See, who apparently manipulated scanners and printers to create money, appears to be part of one of larger counterfeit rings in the South.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "79.jpg", "img_right_thumb" => "79.jpg"],
            //80
            ["date_commited" => "2009-11-01", "date_reported" => "2009-11-21",
                "narration" => "Chinese businessman Xiong Chua kidnapped Anne Balangay, a 7-year old student from St. Scholastica College and allegedly enslaved her. Balangay’s parents who were in their garage at the time said a man in a pickup truck pulled up next to their daughter and asked for directions. She turned to walk away but he called her over and when she took a couple of steps closer, he lunged out of the vehicle, grabbed the girl with his left hand and threw her into the truck like a rag doll, they say. The couple gave the truck's license number, while other witnesses gave chase on foot and one tried to follow in a car but lost the truck.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "80.jpg", "img_right_thumb" => "80.jpg"],
            //EWPID
            ["date_commited" => "2008-10-09", "date_reported" => "2008-11-30", "narration" => "The nature of crime which is Forgery  was committed by the subject last October 9,2008.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "A signature was forged by the subject", "img_signature" => "81.jpg", "img_right_thumb" => "81.jpg"],
            ["date_commited" => "2008-10-10", "date_reported" => "2008-11-01", "narration" => "The nature of crime which is Gambling  was committed by the subject last October 10,2008.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Gambling were reported on a certain place", "img_signature" => "82.jpg", "img_right_thumb" => "82.jpg"],
            ["date_commited" => "2008-10-11", "date_reported" => "2008-11-02", "narration" => "The nature of crime which is Sexual Abuse  was committed by the subject last October 11,2008.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The victim was sexually abused by the subject", "img_signature" => "83.jpg", "img_right_thumb" => "83.jpg"],
            ["date_commited" => "2010-10-12", "date_reported" => "2010-11-03", "narration" => "The nature of crime which is Grave Scandal  was committed by the subject last October 12,2010.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Highly untolerable act done by the subject", "img_signature" => "84.jpg", "img_right_thumb" => "84.jpg"],
            ["date_commited" => "2010-10-13", "date_reported" => "2010-11-04", "narration" => "The nature of crime which is  Public Disorder was committed by the subject last October 13,2010.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Act of disrespect was showned in public by the subject", "img_signature" => "85.jpg", "img_right_thumb" => "85.jpg"],
            ["date_commited" => "2011-10-14", "date_reported" => "2011-11-05", "narration" => "The nature of crime which is Direct Assault  was committed by the subject last October 14,2011.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The subject punched the victim in the face", "img_signature" => "86.jpg", "img_right_thumb" => "86.jpg"],
            ["date_commited" => "2011-10-15", "date_reported" => "2011-11-06", "narration" => "The nature of crime which is Forgery  was committed by the subject last October 15,2011.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The signature of the president was forged by the subject", "img_signature" => "87.jpg", "img_right_thumb" => "87.jpg"],
            ["date_commited" => "2011-10-17", "date_reported" => "2011-11-07", "narration" => "The nature of crime which is Bribery  was committed by the subject last October 17,2011.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The subject offers alot of money for the victim to do something he do not want to do", "img_signature" => "88.jpg", "img_right_thumb" => "88.jpg"],
            ["date_commited" => "2011-10-18", "date_reported" => "2011-11-08", "narration" => "The nature of crime which is Prohibited transaction  was committed by the subject last October 18,2011.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "A drug transaction were done in a public place by the subject", "img_signature" => "89.jpg", "img_right_thumb" => "89.jpg"],
            ["date_commited" => "2013-10-19", "date_reported" => "2013-11-09", "narration" => "The nature of crime which is Infidelity  was committed by the subject last October 19,2013.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Trust issue that leads to a war", "img_signature" => "90.jpg", "img_right_thumb" => "90.jpg"],
            //DID
            ["date_commited" => "2011-12-02", "date_reported" => "2011-12-10", "narration" => "The nature of crime which is Disobedience  was committed by the subject last December 2, 2011.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The subject did not obey the president as the president enters the room", "img_signature" => "91.jpg", "img_right_thumb" => "91.jpg"],
            ["date_commited" => "2011-12-04", "date_reported" => "2011-12-11", "narration" => "The nature of crime which is Relevance of Secret  was committed by the subject last December 4, 2011.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The subject revealed a top secret of the victim", "img_signature" => "92.jpg", "img_right_thumb" => "92.jpg"],
            ["date_commited" => "2012-12-05", "date_reported" => "2012-12-12", "narration" => "The nature of crime which is  Maltreatment of Prisoner was committed by the subject last December 5, 2012.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The subject punched the victim prisoner in the face", "img_signature" => "93.jpg", "img_right_thumb" => "93.jpg"],
            ["date_commited" => "2012-12-07", "date_reported" => "2012-12-13", "narration" => "The nature of crime which is Usurpation  was committed by the subject last December 7,2012.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The subject did not let the victim to enter a public place", "img_signature" => "94.jpg", "img_right_thumb" => "94.jpg"],
            ["date_commited" => "2012-12-09", "date_reported" => "2012-12-14", "narration" => "The nature of crime which is Suicide  was committed by the subject last December 9,2012.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The victim jumped in the 21st floor of the building", "img_signature" => "95.jpg", "img_right_thumb" => "95.jpg"],
            ["date_commited" => "2012-12-10", "date_reported" => "2012-12-15", "narration" => "The nature of crime which is Abortion  was committed by the subject last December 10,2012.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Aborted child was found in the garbage can", "img_signature" => "96.jpg", "img_right_thumb" => "96.jpg"],
            ["date_commited" => "2013-12-11", "date_reported" => "2013-12-16", "narration" => "The nature of crime which is Infanticide  was committed by the subject last December 11,2013.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The subject maltreated the new infant", "img_signature" => "97.jpg", "img_right_thumb" => "97.jpg"],
            ["date_commited" => "2013-12-13", "date_reported" => "2013-12-17", "narration" => "The nature of crime which is  Serious Illegal Detention was committed by the subject last December 13,2013.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The subject killed many people", "img_signature" => "98.jpg", "img_right_thumb" => "98.jpg"],
            ["date_commited" => "2013-12-15", "date_reported" => "2013-12-18", "narration" => "The nature of crime which is Kidnapping  was committed by the subject last December 15,2013.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "An infant was stolen by the subject", "img_signature" => "99.jpg", "img_right_thumb" => "99.jpg"],
            ["date_commited" => "2013-12-16", "date_reported" => "2013-12-19", "narration" => "The nature of crime which is Slavery  was committed by the subject last December 16,2013.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The subject do not give rights to the victim", "img_signature" => "100.jpg", "img_right_thumb" => "100.jpg"],
            //IPRD
            ["date_commited" => "2009-04-25", "date_reported" => "2009-05-01", "narration" => "The nature of crime which is Drunk Driving  was committed by the subject last April 26,2009 .", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The car of the victim was hit by the car of the subject", "img_signature" => "101.jpg", "img_right_thumb" => "101.jpg"],
            ["date_commited" => "2009-05-01", "date_reported" => "2009-05-02", "narration" => "The nature of crime which is Possession of Dangerous Drugs  was committed by the subject last May 1, 2009.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The subject was caught selling prohibited drugs to a minor", "img_signature" => "102.jpg", "img_right_thumb" => "102.jpg"],
            ["date_commited" => "2010-05-02", "date_reported" => "2010-05-03", "narration" => "The nature of crime which is Vandalism was committed by the subject last May 2, 2010.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The subject was caught writing on a public wall", "img_signature" => "103.jpg", "img_right_thumb" => "103.jpg"],
            ["date_commited" => "2010-05-03", "date_reported" => "2010-05-05", "narration" => "The nature of crime which is Robbery was committed by the subject last May 3, 2010.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The subject stole the bag of the victim", "img_signature" => "104.jpg", "img_right_thumb" => "104.jpg"],
            ["date_commited" => "2011-05-07", "date_reported" => "2011-05-08", "narration" => "The nature of crime which is Treason  was committed by the subject last May 7,2011.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The subject betrayed his own country", "img_signature" => "105.jpg", "img_right_thumb" => "105.jpg"],
            ["date_commited" => "2012-05-09", "date_reported" => "2012-05-10", "narration" => "The nature of crime which is Espionage  was committed by the subject last May 9,2012.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The subject revealed a military secret of action in order to obtain a top criminal", "img_signature" => "106.jpg", "img_right_thumb" => "106.jpg"],
            ["date_commited" => "2012-05-08", "date_reported" => "2012-05-10", "narration" => "The nature of crime which is Robbery  was committed by the subject last May 8, 2012.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The car of the victim was stolen 10 days ago", "img_signature" => "107.jpg", "img_right_thumb" => "107.jpg"],
            ["date_commited" => "2012-05-15", "date_reported" => "2012-05-18", "narration" => "The nature of crime which is Rape  was committed by the subject last May 15,2012.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The victim was in really traumatized due to the act done by the subject", "img_signature" => "108.jpg", "img_right_thumb" => "108.jpg"],
            ["date_commited" => "2012-05-16", "date_reported" => "2012-05-18", "narration" => "The nature of crime which is Domestic Violence  was committed by the subject last May 16, 2012.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Abusive act done by the subject to the victim", "img_signature" => "109.jpg", "img_right_thumb" => "109.jpg"],
            ["date_commited" => "2012-05-17", "date_reported" => "2012-05-18", "narration" => "The nature of crime which is Petty Theft was committed by the subject last May 17,2012.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "The subject gets money in the wallet of the victim without permission", "img_signature" => "110.jpg", "img_right_thumb" => "110.jpg"],
            //RAID
            ["date_commited" => "2010-01-27", "date_reported" => "2010-01-30", "narration" => "The nature of crime which is Arbitrary Detention  was committed by the subject last January 27, 2010.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Possible arbitrary detention case against the suspect", "img_signature" => "111.jpg", "img_right_thumb" => "111.jpg"],
            ["date_commited" => "2010-02-01", "date_reported" => "2010-02-02", "narration" => "The nature of crime which is Expulsion  was committed by the subject last February 1,2010.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Possible explusion case against the suspect", "img_signature" => "112.jpg", "img_right_thumb" => "112.jpg"],
            ["date_commited" => "2010-02-01", "date_reported" => "2010-02-02", "narration" => "The nature of crime which is Violation of Domicile  was committed by the subject last February 1,2010.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Possible violation of domicile case against the suspect", "img_signature" => "113.jpg", "img_right_thumb" => "113.jpg"],
            ["date_commited" => "2011-02-08", "date_reported" => "2011-02-10", "narration" => "The nature of crime which is Prohibition, interruption, and dissolution of peaceful meetings  was committed by the subject last February 8,2011.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Possible Prohibition, interruption, and dissolution of peaceful meetings case against the suspect", "img_signature" => "114.jpg", "img_right_thumb" => "114.jpg"],
            ["date_commited" => "2011-02-09", "date_reported" => "2011-02-10", "narration" => "The nature of crime which is Rebellion  was committed by the subject last February 9,2011.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Possible Rebellion case against the suspect", "img_signature" => "115.jpg", "img_right_thumb" => "115.jpg"],
            ["date_commited" => "2011-02-15", "date_reported" => "2011-02-16", "narration" => "The nature of crime which is Disloyalty  was committed by the subject last February 15,2011.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Possible disloyalty case against the suspect", "img_signature" => "116.jpg", "img_right_thumb" => "116.jpg"],
            ["date_commited" => "2013-02-18", "date_reported" => "2013-02-19", "narration" => "The nature of crime which is  Disturbance of Proceedings was committed by the subject last February 18,2013.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Possible disturbance of proceedings case against the suspect", "img_signature" => "117.jpg", "img_right_thumb" => "117.jpg"],
            ["date_commited" => "2013-02-20", "date_reported" => "2013-02-22", "narration" => "The nature of crime which is Illegal Assemblies  was committed by the subject last February 20,2013.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Possible Illegal assemblies case against the suspect", "img_signature" => "118.jpg", "img_right_thumb" => "118.jpg"],
            ["date_commited" => "2013-02-21", "date_reported" => "2013-02-27", "narration" => "The nature of crime which is Direct Assault   was committed by the subject last February 21, 2013.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Possible Direct Assault case against the suspect", "img_signature" => "119.jpg", "img_right_thumb" => "119.jpg"],
            ["date_commited" => "2014-02-25", "date_reported" => "2014-02-27", "narration" => "The nature of crime which is Direct Assault  was committed by the subject last February 25,2014.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Possible Direct Assault case against the suspect", "img_signature" => "120.jpg", "img_right_thumb" => "120.jpg"],
            //VAWCD
            ["date_commited" => "2009-09-26", "date_reported" => "2009-09-30", "narration" => "The nature of crime which is Public Disorder  was committed by the subject last September 26,2009.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Possible Public disorder case against the suspect", "img_signature" => "121.jpg", "img_right_thumb" => "121.jpg"],
            ["date_commited" => "2009-09-28", "date_reported" => "2009-10-01", "narration" => "The nature of crime which is Forgery  was committed by the subject last September 28,2009.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Possible Forgery case against the suspect", "img_signature" => "122.jpg", "img_right_thumb" => "122.jpg"],
            ["date_commited" => "2010-10-01", "date_reported" => "2010-10-02", "narration" => "The nature of crime which is Falsification  was committed by the subject last October 1,2010.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Possible Falsification case against the suspect", "img_signature" => "123.jpg", "img_right_thumb" => "123.jpg"],
            ["date_commited" => "2010-10-05", "date_reported" => "2010-10-06", "narration" => "The nature of crime which is Fraud  was committed by the subject last October 5,2010.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Possible Fraud case against the suspect", "img_signature" => "124.jpg", "img_right_thumb" => "124.jpg"],
            ["date_commited" => "2011-10-09", "date_reported" => "2011-10-10", "narration" => "The nature of crime which is Dereliction  was committed by the subject last October 9,2011.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Possible Dereliction case against the suspect", "img_signature" => "125.jpg", "img_right_thumb" => "125.jpg"],
            ["date_commited" => "2011-10-10", "date_reported" => "2011-10-12", "narration" => "The nature of crime which is Bribery  was committed by the subject last October 10,2011.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Possible Bribery case against the suspect", "img_signature" => "126.jpg", "img_right_thumb" => "126.jpg"],
            ["date_commited" => "2012-10-12", "date_reported" => "2012-10-15", "narration" => "The nature of crime which is Prohibited transaction  was committed by the subject last October 12,2012.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Possible Prohibited transaction case against the suspect", "img_signature" => "127.jpg", "img_right_thumb" => "127.jpg"],
            ["date_commited" => "2012-10-16", "date_reported" => "2012-10-20", "narration" => "The nature of crime which is Infidelity  was committed by the subject last October 16,2012.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Possible Infidelity case against the suspect", "img_signature" => "128.jpg", "img_right_thumb" => "128.jpg"],
            ["date_commited" => "2012-10-18", "date_reported" => "2012-10-20", "narration" => "The nature of crime which is Disobedience  was committed by the subject last October 18,2013.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Possible Disobedience case against the suspect", "img_signature" => "129.jpg", "img_right_thumb" => "129.jpg"],
            ["date_commited" => "2013-10-26", "date_reported" => "2013-10-29", "narration" => "The nature of crime which is Forgery  was committed by the subject last October 26,2013.", "agency_reported" => "",
                "agency_report_details" => "", "agency_report_status" => "", "court_action_details" => "",
                "considerations" => "Possible Forgery case against the suspect", "img_signature" => "130.jpg", "img_right_thumb" => "130.jpg"],
//********************************************************************************************************************************************************
//********************************************************************************************************************************************************                
            //CASE FROM NBI PRESS RELEASE
            //131******************************************************************
            ["date_commited" => "2011-10-17", "date_reported" => "2014-02-14",
                "narration" => "Fausto disclosed that at about 7:20 in the morning of October 17, 2011, Fr. FAUSTO C. TENTORIO was found lying in the parking area inside the church compound.

                     At the time of the incident, Fr. Pops (an Italian Priest) as he was fondly called, was the Parish Priest of Our Lady of Perpetual Help Catholic Church in Arakan, North Cotabato. It was later discovered that Fr. Pops was murdered by unknown assasins for unknown reasons.

                     Minutes after the shooting, an ambulance arrived at the crime scene and immediately brought Fr. TENTORIO to the Antipas Medical Specialists, where Fr. Pops was declared 'Dead-on-Arrival'.
",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //132******************************************************************
            ["date_commited" => "2012-03-23", "date_reported" => "2013-03-26",
                "narration" => "At 12:00 noon of March 23, 2012, Poh was spotted en route to the said hotel. He checked-in using the name Bing Sye Poh 'David.' Minutes after checking-in, NBI operatives saw him leaving the hotel and boarded a taxi without any luggage. NBI agents discreetly trailed him. Poh alighted along Buendia corner Harrison St., Pasay City and was seen entering a private compound.

                    Minutes later, Poh came out carrying a brown leather luggage/suitcase and boarded a taxi not knowing that the driver is an NBI agent. Poh instructed him to proceed to the hotel. However, while traversing along Taft Avenue before reaching the intersection of EDSA, Rotonda, Pasay City, Poh alighted from the taxi. He placed his luggage at the sidewalk and started running in the middle of the road towards EDSA prompting the NBI operatives and gave chase. He was eventually caught inside a supermarket along EDSA, Pasay City.

                    When questioned, Poh disowned the luggage and allegedly was only requested by his friend 'Pepe', also a Malaysian national to come to the Philippines and pick up a luggage from a certain person with codename '666' and bring it to Malaysia in consideration of US$1,500.
",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //133******************************************************************
            ["date_commited" => "2012-03-02", "date_reported" => "2012-03-29",
                "narration" => "NBI undercover operatives were able to trace the source in Bgy. Samasapi, North Fairview, Quezon City and bought from suspects a .45 caliber pistol on March 2, 2012 and a 9 mm sub-machine gun on March 15, 2012, with magazines and ammunitions. After the initial purchases, 

                NBI operatives conducted a buy-bust operation near their residence on March 27, 2012 resulting to the arrest of the suspects, Orogan and Langco. It is also believed that they were among those responsible for the proliferation of loose firearms in the streets which are being used by the 'riding in tandem' robbery/hold-up gang.
      
                Recovered from them were three (3) .45 caliber pistols and a 9mm sub-machine gun (SMG) with magazines and ammunitions.
",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //134******************************************************************
            ["date_commited" => "2012-03-21", "date_reported" => "2012-04-24",
                "narration" => "Kristine Camille Santos, victim's sister saw Anna's car in front of the residence and thought that she was already in her room. At 5:30 pm that day, Kristine received a call from one Kristin Tanyag requesting the whereabouts of Anna who allegedly missed her flight to Boracay at noon of that day. Kristin rushed to Anna's room and found in the pool of her blood lying a top her bed. 

                    Found near the sink of the dirty kitchen is a kitchen knife which when submitted for forensic examination yielded positive for blood samples of victim, ANNA YSABEL SANTOS.

                    Using an improvised tool, he made his way to victim ANNA's room and found her asleep. He took her personal belongings such as (IPAD 2, BLACKBERRY CP, ITOUCH, SONY VAIO, DIGICAM with an estimated amount of Php 130,000.00). Victim was roused from sleep and gave a fight with her knife hidden underneath the bed, but was overpowered during the scuffle, Anna was stabbed several times by Micares which caused her death. She was also raped by Micares. After placing the valuables inside a paper bag, he sneaked out of the house and passed through Gate 2 and went home to his residence in Las Piñas.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //135******************************************************************
            ["date_commited" => "2011-08-22", "date_reported" => "2012-04-20",
                "narration" => "While victim Glorioso was on his way home collecting 'lino' or left over from restaurants for their hogs' meal, when suspect William, his son Warren, and a certain PJ Rabe blocked the victim's path and shot him that caused his death. Suspects fled.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //136******************************************************************
            ["date_commited" => "2011-11-19", "date_reported" => "2012-05-23",
                "narration" => "An unlicensed caliber .45 firearm was recovered from him during the operation. The raid was in cooperation of the PNP-Bacolod City who helped in securing the area. However, King tried to shoot it out with the operatives who raided his house.
                 The raid yielded several drugs paraphernalia, proceeds of the sale of illegal drugs and two (2) plastic sachets containing white crystalline substance believed to be methamphetamine hydrochloride or shabu. Also seized were documents and bank records which may be evidence of the illegal drugs transactions.
                    ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //137******************************************************************
            ["date_commited" => "2012-03-22", "date_reported" => "2012-05-23",
                "narration" => "The Department of Justice transmitted to the NBI Director thru the Chief, FLD, a letter request of the United States Department of Justice with the enclosed copy of 'indictment' and 'warrant of arrest' issued by the United States District of Columbia. On the same day, NBI FLD agents applied for an Urgent Ex-Parte Application for Provisional Arrest of Khaki. Thereafter, it was served to Parvis Khaki as prelude to a formal request of his extradition to the US issued by the Manila RTC Branch 31.

                    The Order was served to Khaki before his departure at the Ninoy Aquino International Airport Terminal I to Qatar via Qatar Airways Flight QR 649. Khaki was immediately brought to the NBI where he is presently detained.
",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //138******************************************************************
            ["date_commited" => "2012-05-30", "date_reported" => "2012-06-01",
                "narration" => "The case arose from a complaint of Oliver Fabio and Louie Ongpauco who were victimized by a group of swindlers who misrepresented themselves as employees of the Bureau of Customs. They were induced to buy supposed goods being auctioned at the Bureau of Customs at much lower prices than the prevailing costs in the market.

                The modus operandi of the group starts by contacting prospective victims through cellular phones and they only personally appear to the victims when they receive the money as payment for the goods on sale.

                During an entrapment Ocampo was arrested by NBI agents after receiving marked money from the complainants inside a fastfood parlor in Intramuros, Manila.
                ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //139******************************************************************
            ["date_commited" => "2008-01-30", "date_reported" => "2008-05-15",
                "narration" => "Von Such was the subject of complaint by the general manager of Nissan Gallery of Libis, Quezon City for defrauding the firm of more than P19 million about an order and purchase by suspect of twelve (12) Nissan Sentra X-Trail Sports Utility Vehicle (SUV) and two (2) Nissan Sentra Patrol vehicles. Subject paid the said firm through a letter of credit and postdated checks which later proved spurious.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //140******************************************************************
            ["date_commited" => "2011-11-19", "date_reported" => "2012-03-15",
                "narration" => "The Office of Special Investigation, Bangko Sentral ng Pilipinas sought the assistance of the NBI-BSP Taskforce on Bank Fraud Investigation for the arrest of PATRICIO D. NOTADA, President of the closed Homeowners Savings & Loan Bank {formerly, Homeowners Savings & Loan Association, Inc. (HOSLA).
                    
                    NOTADA was charged for three (3) counts of Estafa through Falsification of Commercial Documents under Article 315, par. 2 (a) in relation to Articles 172 and 171 of the Revised Penal Code for rediscounting to the Bangko Sentral ng Pilipinas (BSP) the fictitious loan accounts of Nancy Manicsic, Erlinda Tablang and Bayani Batac.
                    
                    Similarly, Notada was charged for two (2) counts each of Estafa defined and penalized under Art. 315 par. 2 (a) of the Revised Penal Code and violation of Sec. 21 of R. A. No. 7906 (Thrift Banks Act of 1995) for overvaluing the collaterals of the loan accounts of Arturo Castillo and Minardo Salvosa and subsequently rediscounting these loan accounts to the Bangko Sentral ng Pilipinas (BSP).
                    
                    It involved the total amount of Php 17.440 million released by the BSP to HOSLA, for which HOSLA executed in BSP's favor a promissory note and Deed of Assignment over the promissory notes and collateral land titles of HOSLA's borrowers. Thus, he stands accused for CriminalCases Nos. Q-10-165255 to 61, entitled People of the Philippines vs. Garcia et.al., pending before the Quezon City RTC Br. 217.
                    ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //141******************************************************************
            ["date_commited" => "2012-04-22", "date_reported" => "2012-07-06",
                "narration" => "A complaint from Christian Salamat and several others was received by the NBI about the illegal recruitment activity of the subject Rempis.
                    
                    Complainants said that they paid Rempis the amount of P40,000 each as placement and processing fees for their visas for deployment to New Zealand as fruit pickers, and other jobs.
                    
                     Suspect promised the victims they will be deployed within 1 ½ months after paying the processing fees. But after the lapse of two months, victims failed to receive any visa as well as supposedly processed papers by the Philippine Overseas Employment Administration (POEA).
                    
                    Verification with the POEA shows that Rempis is not licensed and authorized to engage in overseas labor recruitment.
                    ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //142******************************************************************
            ["date_commited" => "2012-06-25", "date_reported" => "2012-07-05",
                "narration" => "The NBI received a letter-request from Mr. Beny Chen, Senior Assistant, Taipei Economic and Cultural Office (TECO) requesting for an investigative intervention relative to the intelligence report of the Ministry of Justice Investigation Bureau (MJIB) regarding the telephone fraud activities of some Taiwanese nationals suspected as syndicate members. They are believed to be operating in the National Capital Region and Luzon.
                    
                    The said fraud syndicate are using high-technology equipment in their operations and have successfully defrauded millions of New Taiwan Dollar (NT$) from Taiwanese and Chinese nationals.

                    An informant who is a computer technician, said that he was contacted by a certain Shih-Liang Shia alias Mr. Chen, a Taiwanese, the leader of the syndicate, to install expanded internet connections of his premises located at Nos. 16-10 and 16-12 Grande St., Riverside Subdivision, Bgy. Anunas, Friendship, Angeles City, Pampanga. During the installation, he observed the fully functional workstations manned by Taiwanese and Chinese nationals as call center agents.

                    Seized were laptops, telephones, routers, modems, and other apparatus. These are being used as access devices which are unauthorized to obtain money to initiate transfer of funds other than the use of paper instruments.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //143******************************************************************
            ["date_commited" => "2012-02-01", "date_reported" => "2012-08-17",
                "narration" => "The case arose from complaints of around 50 overseas job applicants who trooped to the NBI Central Visayas Regional Office (CEVRO) in Cebu City who are victims of Illegal Recruitment and Estafa commited by the suspects. They alleged that Geronimo and his staff recruited them for non-existing jobs in the United States and demanded an average of P200,000 as placement and other service fees.
                
                 The syndicate allegedly falsified documents, such as income tax receipts (ITRs), DTI permit, and bank account certification, land titles, and others in support of visa application of the victims.
                    ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //144******************************************************************
            ["date_commited" => "2011-03-20", "date_reported" => "2012-10-01",
                "narration" => "The NBI investigated accused TITA CACAYAN last year for the recruitment and deployment of Sally Ordinario Villanueva. Cacayan allegedly provided the travelling bag containing illegal drugs to Ordinario-Villanueva who was intercepted and arrested upon arrival in China. ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //145******************************************************************
            ["date_commited" => "2007-03-01", "date_reported" => "2009-06-20",
                "narration" => "The body of Ruby Rose Barrameda-Jimenez, who has been missing since March 2007 was found inside a cemented steel drum recovered in the murky water of Navotas Fish Port. Murder charges were filed against Atty. Manuel Jimenez Jr., Lope Jimenez, Manuel Jimenez III, Manuel Montero, Eric Fernandez, Leonard Descalso, and Robert Ponce before the Malabon Regional Trial Court, and warrants of arrest were issued by Acting Presiding Judge Hector B. Almeyda of the Regional Trial Court of Malabon City, Br 170 against Lope Jimenez, Robert Ponce alias Obet, Eric Fernandez, and Leonard Descalso.

                The photographs of Subject were shown to him and he positively identified the same as Robert Ponce alias “Obet”, one of the accused in the brutal killing of Ruby Rose Barrameda-Jimenez.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //146******************************************************************
            ["date_commited" => "2012-12-13", "date_reported" => "2012-12-14",
                "narration" => "NBI received a complaint from the mother of the kidnapped victim informing that the day before, December 13, her son JC was kidnapped from the residence in Marilao, Bulacan. The kidnapper is allegedly a friend of the victim's father who introduced himself as a certain Kuya Jason. He demanded P20,000.00 for the release of her son and a threat of possible harm or death.
                
                 The victim's mother relayed to the NBI of several exchange of cellphone messages between the mother and the subject. It was demanded that the ransom money be through money transfer via Cebuana Lhuillier. Subsequently, a rescue operation was planned, in which the money through wire transfer will be sent to the kidnapper with a tracking or claim number.
                    
                On the night of December 14, 2012, an informant called the NBI and said that he saw a boy resembling the kidnap-victim based on the photos given to informants. The boy was in the company of a man and a woman who entered the Cebuana Lluillier branch inside the Odeon Mall located at the corner of C.M. Recto and Rizal Avenue Sta. Cruz Manila. NBI operatives rushed to the place and they saw the duo in the company of a boy waiting for their turn to be serviced.
                    ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //147******************************************************************
            ["date_commited" => "2013-02-11", "date_reported" => "2013-02-22",
                "narration" => "An employee of Beauty Lane said that while hitching a ride in one of their delivery panel, she noticed some undelivered products. She inquired from driver Geroleo on the excess of undelivered products. He alleged that he would temporarily keep it for safekeeping in their house as it might cause some problems when returned to the warehouse.
                
                 Sometime in February 2013, a client of Beauty Lane revealed that an unidentified person, later identified as Geroleo, was selling Brazillian Blowout products to them at discounted price. This prompted the client to inform Beauty Lane management about this development.
                
                To stop this illegal activity, the management arranged with said client to act in their behalf and continued negotiating for the purchase of their products at much lower price.
                
                On February 18, 2013, the client and Geroleo met at a mall in Makati for the purchase of the products at a much lower cost. Top management sought NBI assistance and an entrapment was planned.
                
                 In the afternoon of the same day, NBI agents accompanied the clients and certain top management personnel for the entrapment of Geroleo. At 3:00 P.M. suspect came with Layco on board a motorcycle. When Geroleo and the client met, the latter gave the marked money representing the cost of the agreed cost of the merchandise purchased. However, Geroleo sensed the unusual presence of the Bureau agents and attempted to escape in their motorcycle. Immediately alert NBI agents prevented their escape.
                
                Found and seized were the beauty products and the marked money in the possession of Geroleo. The duo were brought to the NBI for detention.
                    ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //148******************************************************************
            ["date_commited" => "2013-04-15", "date_reported" => "2013-04-15",
                "narration" => "The case stemmed from an intelligence report that a kidnap-for-ransom group headed by a certain “Gerald” is planning to kidnap Flor Ty, a casino financier at the Manila Pavillion-Casino located in United Nations Avenue, Ermita, Manila. Said group will demand P20 million ransom.
                    
                    A surveillance operation was conducted on the group’s movements. It was found out that Gerald’s group will abduct victim Ty, between 2:00 AM – 3:00 AM of April 15, 2013 on her way home in Sta. Cruz, Manila.
                    
                    At around 3:00 A.M. this morning, the PAGCOR black Ford Chrysler carrying the victim was suddenly blocked by a red Ford Lynx Sedan with Plate Number XSV-574 while traversing said road. Three men armed with pistols jumped out of the vehicle and pointed their guns at the PAGCOR driver and ordered him to open the door as one of the gunman boarded the car.
                    
                    At this juncture, NBI agents who were strategically positioned in the area shouted at the suspects introducing themselves. However, the gunman who was pointing his gun at the driver, instead fired his gun at the NBI operatives starting a gunfight. The suspects boarded their vehicle and sped off but NBI agents gave chase.
                        ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //149******************************************************************
            ["date_commited" => "2013-05-06", "date_reported" => "2013-05-10",
                "narration" => "The victim’s mother was preparing the family’s breakfast in the kitchen when he took the chance to fondle his daughter’s sex organ and engaged in solo sex.
                
                 Upon learning of this bastardly act, the mother, on the pretext of visiting a relative in a neighboring barangay, accompanied her daughter to seek NBI investigative assistance.
                    ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //150******************************************************************
            ["date_commited" => "2013-05-24", "date_reported" => "2013-05-28",
                "narration" => "The jobs in Australia includes welders, butchers, mechanics, office workers and miners with a placement fee of P280,000.00. In Canada, the jobs are cooks and care giver with the placement fee of P280,000.00. The jobs in Singapore are nursing assistants with a placement fee of P180,000.00. Accordingly, they were promised jobs and after collecting the placement fees they promised that the applicant’s visas would be processed. So far, the agency have recruited 72 overseas job applicants from Benguet, Mountain Province, Ifugao and Baguio City.
                    
                     With this information, an NBI operative posed as an applicant and on May 24, 2013 went to the HMMII to apply as welder for Australia. He was oriented by GiNA EBENG, personal assistant to MAYMA IMPERIAL. The amount of P100,000.00 was asked from him which the poseur promised to pay upon his return on May 28, 2013.
                    
                    Accused ROCHE had shifted his illegal operation in Baguio City when he conned many victims in Metro Manila and so several cases against him and his cohorts were filed at different Metro Manila courts. Likewise, verification with the POEA revealed that ROCHE, IMPERIAL, EBENG and LEBENG and the HMMII are not licensed nor authorized to recruit overseas workers.
                        ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //151******************************************************************
            ["date_commited" => "2013-06-04", "date_reported" => "2013-06-11",
                "narration" => "Complainants Cerilo D. Espelita and Mary Ann C. Crisostomo, an official of the Philippine Deposit Insurance Corporation (PDIC) filed a complaint against suspect Cabardo.
                
                 In 2000, Espelita obtained a loan of P303,500 for a reconditioned truck from Southeast Asia Motors Corp. (SAMC) in Valencia City, Bukidnon. As security for the loan, Espelita and his wife executed a blank real estate mortgage over a property covered by Original Certificate of Title (OCT) No. AO-1554 registered under the complainant’s deceased father, Jose C. Espelita in favor of Philippine Farmers Bank (PFB).
                
                 The PFB was ordered closed by Bangko Sentral ng Pilipinas on 17 September 2009 and was under the receivership of the Philippine Deposit Insurance Corporation (PDIC). Thereafter, complainant learned from PDIC that he has still outstanding loan balance which he needs to pay in order that the Official Receipt (OR) and Certificate of Registration (CR) of this truck will be given to him. However, he was also informed that OCT No. AO-1554 was marked “missing on file” and was not included in the inventory of titles which were turned-over to the PDIC.
                
                 On May 26, 2013, Cabardo visited Espelita in his residence in Kalilangan, Bukidnon and informed him that OCT No. A-1554 is in their possession. Cabardo then asked the complainant to redeem it for P6,000, the amount allegedly he still owed from the PFB including the so-called “SOP” amount of P3,000.
                
                Due to suspicion of irregularity, Espelita sought the advice of the Bangko Sentral ng Pilipinas (BSP) who endorsed the case to the NBI-AFAD because Cabardo has no authority to possess, transact nor convey the said OCT since all assets including collateral titles of borrowers of PFBI are deemed in custodia legis and should be turned over to the PDIC as statutory receiver.
                
                On June 4, 2013, Cabardo called Espelita to meet him in Valencia City, Bukidnon the next day if he is really keen in getting back the OCT. With this information, an entrapment was planned. The following day, NBI agents proceeded to the Manada Café in Sayre Highway, Poblacion, Valencia City, Bukidnon and positioned themselves strategically in the place. After a while, Cabardo arrived and sat in a table with Espelita.
                
                Thereafter, Cabardo handed to Espelita the receipt and copy of OCT at the same time Espelita gave the marked money to him. At this juncture, while the suspect was counting the marked money, complainant gave the pre-assigned signal to the operatives. They immediately approach Cabardo, and after introducing themselves, NBI agents placed Cabardo under arrest.
                
                En route to the NBI-NEMRO, Cabardo informed the complainant that he is still in possession of several titles which were allegedly mortgaged to PFB and was willing to surrender them. He then requested to call somebody who will deliver the titles. Eventually, a man arrived and gave a plastic envelope containing several land titles.
                ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //152******************************************************************
            ["date_commited" => "2013-06-05", "date_reported" => "2013-06-13",
                "narration" => "    Valdez said he needed money to acquire a bank certificate as one of the requirements needed by GoshenLand. He then approached and convinced Sotalbo to open for him a savings and checking accounts at the PNB, Session Road Branch, Baguio City.
                
                Valdez also said that once a bank certificate is issued to him, he would immediately return the complainant’s money. If complainant will help him in his financial need, he will be the one to sub-contract the project.
                
                Eventually, Sotalbo deposited P362,000 in the name of the suspect Valdez on June 3 and 4, 2013, respectively. But unknown to the former, Valdez immediately started withdrawing money from his account on June 5, 2013. On the other hand, complainant Sotalbo later became suspicious when he could not contact the suspect for several days.
                
                Thereafter, he found out that Valdez’s PRC Professional Identification Card, Transcript of Records and diploma from the University of the Cordilleras were all fake. Likewise, the GosheLand project he allegedly won in the bidding is non-existing. This prompted him to seek NBI investigative assistance.
                
                Later that day, suspect was again asking money from the complainant for another project. Sotalbo learned that Valdez was about to withdraw again from suspect’s own account at the said bank on June 10, 2013. An entrapment operation was planned.
                    ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //153******************************************************************
            ["date_commited" => "2013-06-07", "date_reported" => "2013-06-19",
                "narration" => "The victim was forcibly taken by five (5) unidentified men at about 9:00 AM of the same date at the junction of Rabaya St., Talisay City, Cebu and Highway of Cebu South Road Properties (SRP). Later, the kidnappers called up Laborada and demanded P50,000 ransom for Agraviador’s release.
                
                Acting with dispatch, a rescue operation was planned. The complainant and the kidnappers agreed to meet at noon of the same day, June 17, 2013, near the Evergreen Cemetery located at SRP, Talisay City, Cebu.
                
                On the appointed time and place, NBI agents discreetly accompanied complainant Laborada. While the pay-off was in progress, NBI agents immediately moved in and rescued Agraviador.
                
                A shoot-out between the kidnappers and NBI operatives ensued injuring one of the NBI’s assets. One of the kidnappers, Tiano, was shot dead while Roble was arrested. However, the three other suspects, escaped prompting the NBI to launch a nationwide manhunt operation.
                
                Meanwhile, the victim identified PO3 Colina as having participated in the kidnapping and identified by NBI agents during the shoot out.
                
                Recovered from the suspects were the ransom money amounting to P50,000; a cell phone recovered from the body of Tiano used in communication during the negotiation; two motorcycles, one owned by the victim, Agraviador; .45 caliber; wallet with assorted cards; and other personal belongings.
                ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //154******************************************************************
            ["date_commited" => "2013-06-17", "date_reported" => "2013-07-01",
                "narration" => "The Smart Communications, Inc. through its counsel sought NBI investigative assistance about the illegal international simple resale (ISR) activities, known as “Toll By Pass” against the suspects.
                                        
                    With this illegal activity, the ISR operator is able to evade payment of IGF fees and taxes due the Philippine government by routing the international calls directly to an unauthorized device and thereby gaining undue advantage over legitimate networks and operators because they can charge lower fees.
                    A series of test calls was conducted by Smart representative and was confirmed that ISR activity is being committed at the suspects’ office, East West Placement Center Inc. located at No. 1059 Metropolitan Avenue, Rizz Building, San Antonio Village, Makati City.
                    A certification from Bala shows that Smart Communications Inc. has incurred losses during the service of the said search warrant. Consequently, articles subject of the offense were seized such as computer, SIM boxes, SIM cards, switching equipment and among others.
                    ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //155******************************************************************
            ["date_commited" => "2013-07-23", "date_reported" => "2013-07-29",
                "narration" => "The father of the victim, Renato Lopez, sought NBI investigative assistance regarding her 6-year-old daughter who was found dead floating in a canal.
                  
                  He said that his daughter arrived home from school in the afternoon of July 22, 2013 and went out to play. But after several hours, she failed to arrive home. This prompted him to seek help from his neighbors and other barangay officials for the whereabouts of his daughter.
               
                After eight (8) hours, the body was found floating in a canal partly covered with debris with only her cycling shorts on.
                
                Suspects said that his group were having a drinking spree since July 21, and the next day, being the birthday of Ramos. Around 2:00 PM, of July 22, their companions went home. When the victim passed by the house of suspect Ramos, De Chavez, who returned, snatched the victim and brought her inside. When the victim started to cry and shout, suspects began hitting her on the head using a lead pipe. While the victim lay motionless, they also took turns in sexually abusing her.
               
                Afterwards, and under the cover of darkness, they dumped her lifeless body into the canal hoping that the strong current brought about by the heavy rain will carry her to the distant river. They also tried to rid the house of bloodstains.
                    ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //156******************************************************************
            ["date_commited" => "2013-07-25", "date_reported" => "2013-07-29",
                "narration" => "NBI received a complaint from Diane V. Bernal and companion that suspect Bernardo has been recruiting models and other entertainers bound for Malaysia and Japan.
                
                When they went to Bernardo’s residence in Hagonoy, Bulacan on July 25, 2012, to audition, they were asked to come back on July 30, 2013. He said his Japanese friends who would want to see them and choose who would be sent to Japan for employment hasn’t arrived. There other women who were apparently being recruited for the same job.
                
                 The complainants doubted Bernardo’s capability to send them abroad as he has no office to show and just holds audition for talents at his house in Hagonoy, Bulacan. Verification made with the Philippine Overseas Employment Administration (POEA) disclosed that Bernardo is not licensed to recruit nor deploy workers/talents abroad. This prompted the victims to seek NBI assistance.
                
                There were at least ten (10) other women who were being recruited by Bernardo and the said three (3) Japanese nationals at the time of the raid. During the cursory search conducted, pictures of applicants, employment contract, passports and schedule of payments to Bernardo were found.
                    ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //157******************************************************************
            ["date_commited" => "2013-12-02", "date_reported" => "2014-01-13",
                "narration" => "Complainants reported the alleged robbery and kidnapping in the office of the Counter Terrorism Division (NBI-CTD) by unidentified male individuals in Manila.
                    
                    Thereafter, through continuous and discreet inquiries, the NBI-CTD Operatives were able to locate and interview another victim, wherein she was able to shed light on the identity of Accused during her captivity. It was disclosed that in her captivity, the name “JARVIS GUY LOPEZ” was given by a woman alleged to be the common-law-wife of Accused.
                    
                    Subsequent verification with the Land Transportation Office, East Avenue Diliman Quezon City yielded a information for a certain “JARVIS GUY LOPEZ” with an address at No. 20 Saragoza Street Brgy Doña Imelda, Quezon City. Immediately thereafter, NBI-CTD Operatives conducted a surveillance operation together with another Complainant on the said address. During the surveillance operation, Complainant recognized Accused’s house as No. 20-C Saragoza Street, Brgy. Imelda Quezon City, as the place where she was brought by the Accused.
                    
                     Subsequently, on January 13, 2014, upon showing of the pictures of the Accused’s house and the photo from the LTO of one “JARVIS GUY LOPEZ”, Complainant was able to recognize “JANVIC” as “JARVIS GUY LOPEZ”.
                    ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //158******************************************************************
            ["date_commited" => "2013-07-01", "date_reported" => "2014-03-12",
                "narration" => "Mary Jane was able to convinced Mariebel Alejandra Esteban, Nida D. Saguitan, Gemma S. Butac, Gladys G. Foronda, Prosefina D. Camangeg and Michelle D. Balatico, all residents of Solsona and Pasuquin, Ilocos Norte to apply for the job. Subject, Mary Jane demanded payment of Forty Thousand Pesos (P40,000.00) each as processing fee with a promise that they will be deployed within two (2) to three (3) months.
                
                Dela Concepcion was able to collect a total of One Hundred Thirty Two Thousand (P132,000.00) pesos as partial payments from the six applicants.
                
                From March 8 to 11, 2014, Dela Concepcion continuously called and texted victims demanding full payment of their processing fees, which suspect will get from them in Laoag City.
                
                On the last minute, Dela Concepcion changed the venue of the pay-off and the victims were told to meet her instead at Jollibee T. M. Kalaw, Manila branch at 6 A.M. on March 12, 2014 and hand over their full payment. Hence, an entrapment operation was planned.
                
                On March 12, 2014, at about 6:30 a.m. at the designated place, operatives of the NBI-LADO arrested Mary Jane V. Dela Concepcion while in the act of receiving the marked money from the six complainants.
                ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //159******************************************************************
            ["date_commited" => "2014-01-23", "date_reported" => "2014-02-02",
                "narration" => "Prior to the arrest of the aforesaid accused, the presence of said accused were monitored and confirmed at Japitan Beach Resort in the town of Dolores, Eastern Samar on the evening of April 25, 2014 (Friday) with the assistance of some locals from said town. Said accused travelled to the Province of Samar onboard an Isuzu Alterra with Plate No. ZES-989.
                
                Accused CEDRIC CUA LEE and SIMEON PALMA RAZ immediately fled from Japitan Beach Resort when they detected the presence of law enforcement officers. On the next day (Saturday), April 26, 2014, Accused left with no choice because of the manhunt, voluntarily surrendered to the operatives of NBI, ISAFP, and PNP in the town of Oras, Eastern Samar after which they were placed under arrest.
                    ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //160******************************************************************
            ["date_commited" => "2014-05-01", "date_reported" => "2014-05-02",
                "narration" => "Agents from the Anti Organized and Transnational Crime Division – Anti-Illegal Drugs Unit (AOTCD-AIDU) implemented a warrant of arrest against certain JAIME CHUA who resides at 15B Sabino Padilla Street, Binondo, Manila. The said warrant was in connection with criminal case number 14-302510 issued by Judge Sarah Alma M. Lim.

                Upon arrival at the area, Subject Chua was not around. Instead, five (5) plastic containing white crystalline substances, drug paraphernalia, weighing scales and other drug equipment were seen in the area. ALBERT SO, the occupant in the unit was placed under arrest after it was confirmed by NBI chemists that the items in his possession are dangerous drugs. 
                ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //161******************************************************************
            ["date_commited" => "2014-05-12", "date_reported" => "2014-05-13",
                "narration" => "On May 12, 2014, at around 11:30 a.m., joint team of NBI-ILDO, Philippine Army and Marawi City PNP raided a place in Marawi City commonly called in the area as “LUMBER” located at Unayan St., Lumbaca Madaya, Marawi City. They were able to arrest the owner of the place, Hadji Cader Ali Sarosong, who is skilled with the “know how” in repairing and manufacturing of firearms and explosives.
                    
                     Found and seized were: three (3) pcs. 50 caliber rifle; two (2) pcs. MOO machine gun; one (1) pc. M79 Grenade Launcher; one (1) pc. M14 Replica; one (1) pc. Rifle Mini 14; five (5) pcs. ammunitions of 50 caliber; four (4) pcs. assorted barrel; one (1) pc. Revolver .38 caliber; one (1) pc. Optical scope; one (1) pc. Crossbow with scope; one (1) pc. hand-guard of M60; one (1) unit generator set; (1) pc. portable handgrill; one (1) portable grinder; two (2) pcs. bench drilling machines; one (1) pc. portable wielding machine.
                        ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
//****************************************************************************************************************************************************************//
//****************************************************************************************************************************************************************//
            //COMPLAINTS FROM WIKIPILIPINAS
            //162
            ["date_commited" => "1995-06-25", "date_reported" => "1995-08-10",
                "narration" => "Sometime in June 1995, complainants went to the office of Albaña located at the LPL Business Center, 130 Alfaro St., Salcedo Village, Makati City wherein they were promised by Roberto and his wife, Racquel Albaña to give them jobs as caregivers in Canada after their training in a selected training center and also after they pay him the 'processing fee'. The complainants paid the couple a total of Php 217,000.00. However,the couple failed to fulfill their promise. Albaña's warrant of arrest was issued by Judge Herminio I. Benito of Regional Trial Court Branch 132, Makati City. His wife Racquel was also included in the warrant of arrest issued.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //163
            ["date_commited" => "1989-12-12", "date_reported" => "1990-02-11",
                "narration" => "Alcalde along with Pat. Roberto Barrera shot George Go, a Filipino-Chinese businessman, and his Taiwanese friend Shi Shu Yang found several times along Timothy St., Multinational Village in Parañaque on the 28th of December 1989. It was reported that the killing was stimulated by the explosion of firecrackers done by Barrera and was then imitated by his neighbor, Go. Barrera's rage was intensified when he received only Php 20.00 and two shirts when he had solicited Christmas gifts from the businessman. The killing was witnessed by Cristina Winterhalter who was standing by the gate of her house.
                
                No bail was recommended for the two (2) suspects and a warrant for their arrest was issued by Associate Justice Romeo M. Escareal of Sandiganbayan, 2nd Division.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //164
            ["date_commited" => "1948-06-26", "date_reported" => "1948-06-30",
                "narration" => "After the success of Sa Kabukiran, LVN Pictures decided to cast Jaime de la Rosa as Velez's leading man in her next film. The decision caused distress on the part of Anzures, who had seemingly become obsessed with the married Velez.

                On the night of June 26, 1948, Anzures paid an unexpected visit to the Quezon City home of Velez. Upon his arrival, he stabbed Velez to death and a housemaid who had come to her mistress's assistance. The crime was committed within view of Velez's toddler-daughter Vivian, who was unharmed during the incident.

                Anzures was promptly arrested, tried and convicted for the murders. The crime and the subsequent trial was cause celebre in Manila. Anzures later died in jail from tuberculosis; his exact motives for the murder were never fully determined.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //165
            ["date_commited" => "1997-08-09", "date_reported" => "1997-08-20",
                "narration" => "Mario Azcarraga y Relebo is on the National Bureau of Investigation's Most Wanted list. His warrant of arrest was issued by Judge Leticia P. Morales of Regional Trial Court Br. 275, in Las Piñas, Metro Manila, for robbery.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //166
            ["date_commited" => "1993-07-13", "date_reported" => "1993-07-25",
                "narration" => " He is a suspected former NPA member and the main suspect in the slaying of his spouse Zialcita of Multinational Village in Parañaque City. He has been charged with double murder and direct assault upon an agent of a person in authority & illegal possession of firearms, ammunitions and explosives. No bail is recommended.
                    
                    Bagamasbad's last known address was Matthew St., Sarneville Compound, Multinational Village, Parañaque, Metro Manila.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //167
            ["date_commited" => "1999-07-10", "date_reported" => "1999-07-20",
                "narration" => "He used to be under the care of 'police handlers' as he espied on communist rebels. Now the police, in their renewed campaign against kidnappings, are hot on his trail.

                The target of the manhunt is Amado Bucala, alleged leader of a notorious kidnap-for-ransom syndicate which, police records show, raked in P121.6 million in ransom from mostly Chinese-Filipino victims before 1999, and P83 million more in early 1999.

                He began his 'criminal career' in 1987. While he guarded several banks in Quezon City, he also allegedly traded 'inside info' with bank robbers, mostly with the notorious Red Scorpion gang.

                That year, law enforcers nearly nailed him in an alleged robbery-holdup. The Quezon City police filed charges against him, but the prosecutors office subsequently dismissed the case.

                The reason: key witnesses, mostly bank tellers, declined to testify because they feared for their lives, recalled Chief Inspector Rodolfo Jaraza, homicide chief of the Central Police District Criminal Investigation Division.

                Bucala, Jaraza believes, is still alive despite persistent yet unconfirmed reports that he had been liquidated by his own henchmen.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //168
            ["date_commited" => "1999-12-05", "date_reported" => "1999-12-23",
                "narration" => " PNP's Most Wanted list for the rape of minors Helen Parchamento, 6 years old, Mylene Juliano, 7 years old, and Janet Castro, in December 1999 in Barangay Dagupan, Aglipay, Quirino. He was charged with two counts of statutory rape in the Regional Trial Court Br. 31, in Cabarroguis, Quirino, Quirino. His last known address was Cabarroguis, Quirino.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //169
            ["date_commited" => "1989-08-02", "date_reported" => "1989-11-14",
                "narration" => "Castigador entered the UK illegally in 1985 and eventually got a job at an amusement arcade in Soho, London. Although he continued to work there, he and the arcade's proprietor developed a rift and Castigador, feeling a grudge, decided to concoct a plan to rob the arcade.

                    With four younger accomplices, Castigador broke into the arcade in the late hours of August 2nd, 1989. The arcade had just closed and the relief manager and cashier were going through the evening's takings when guns were pointed at their heads. The safe was duly emptied of cash.

                    The manager and cashier, along with two security guards from Sri Lanka, were then forced at gunpoint into the inner cage of the arcade's security vault. At this point, three of the robbers withdrew, but Castigador and teenage accomplice Paul Clinton stayed behind. They tied the hostages up, poured white spirit over them and tossed in lit matches before leaving, locking the door behind them.

                    The two security guards died of burns and asphyixiation but the manager and cashier were still alive and badly injured - with 30 per cent burns - when more staff arrived the next morning and raised the alarm. They identified Castigador as the chief culprit and he was arrested, along with Clinton and three others.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //170
            ["date_commited" => "2001-01-23", "date_reported" => "2001-04-27",
                "narration" => "Philippine National Police's Most Wanted list. He was charged with kidnap for ransom docketed at Regional Trial Court Br. 119, Pasay City.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //171
            ["date_commited" => "1994-07-14", "date_reported" => "1994-07-21",
                "narration" => "He has been charged with multiple murder. He was the alleged mastermind behind the bloody attack against members of the Special Action Forces in 2006, resulting in the death of three policemen, including an office.
                
                He was put on the Philippine National Police's Most Wanted list after he reportedly ordered the murder of six Pangasinan traders in 1994.
                
                The government has put up a one million peso reward for Dickpus, dead or alive.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //172
            ["date_commited" => "1996-10-19", "date_reported" => "1996-12-06",
                "narration" => "He was charged with Kidnap for Ransom Case. Estrada's last known address was Matina, Davao City.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //173
            ["date_commited" => "2003-03-12", "date_reported" => "2003-07-22",
                "narration" => "Allegedly, Evangelista's strategic approach is to introduce himself as a businessman engaged in garments. He is very fluent in English and can easily sweet talk his victims, who are usually businessmen. He would order several valuable items with a promise to pay on a certain date. As soon as he gets the goods he will disappear.
                    
                    The subject has already victimized several persons using the same modus operandi. His warrant for arrest was issued by Judge Leonardo F. Quiñanola of Manila Trial Court, San Pedro, Laguna.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //174
            ["date_commited" => "2002-03-21", "date_reported" => "2002-04-01",
                "narration" => "Aldrin Bonobo Fajardo is on the Philippine National Police's Most Wanted list for robbery, handled by RTC BR.47, Manila, under Honorable Judge Lorenzo P. Veneracion.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //175
            ["date_commited" => "2001-10-10", "date_reported" => "2001-10-12",
                "narration" => " Philippine National Police's Most Wanted list for the crime of kidnap for ransom and violation of R.A. 6539 (Anti-Carnapping Act), at Regional Trial Court (RTC) Br 89, in Bacoor, Cavite. His last known address was Barangay Suplang, Tanauan, Batangas.
                    
                    The reward offer for Fajardo's whereabouts is one million pesos.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //176
            ["date_commited" => "2004-01-19", "date_reported" => "2004-01-23",
                "narration" => "He was last seen in Bgy. Suplang, Tanauan, Batangas. The reward for those who can give information regarding his whereabout is one million pesos.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //177
            ["date_commited" => "1993-02-10", "date_reported" => "1993-03-21",
                "narration" => "The subject still remain at large.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //178
            ["date_commited" => "1995-12-21", "date_reported" => "1995-12-22",
                "narration" => "He an alleged member of the 'Bonnet Gang' and is charged with robbery hold-up, robbery in band, and robbery.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //179
            ["date_commited" => "1984-12-23", "date_reported" => "1984-12-29",
                "narration" => "The cases were consolidated and raffled to Regional Trial Court, Branch 12, in Antique, presided over by Judge Bonifacio Sanz Maceda.
                
                Subject was convicted for killing ex-Msgt Sesbreño on Dec. 23, 1984. A reward of 1 million pesos is offered to those who can give information on his whereabouts.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //180
            ["date_commited" => "2002-02-02", "date_reported" => "2002-03-21",
                "narration" => "He is a suspect in the kidnapping of Jae Keon Yoon, a Korean national, along with Filipino businessman Cesar Belonio and several others on Feb. 2, 2002 at Palimbang, Sultan Kudarat. A reward of Php700,000 is offered to anyone who can give information on his whereabouts.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //181
            ["date_commited" => "1996-11-01", "date_reported" => "1996-12-10",
                "narration" => "In 1996, 11-year-old Rosilyn Delantar accused Jalosjos of molesting her many times on different occasions. The Regional Trial Court of Makati, Branch 62, in Criminal Case nos. 96-1985 and 96-1986, convicted Jalosjos of two counts of statutory rape, and in Criminal Case nos. 96-1987, 96-1988, 96-1989, 96-1990, 96-1992, and 96-1993, for six counts of acts of lasciviousness defined and penalized under Article 336 of the Revised Penal Code, in relation to Section 5(b) of Republic Act no. 7610, also known as the Child Abuse Law.

                    There were six other cases (Criminal Case nos. 96-1991, 96-1994, 96-1995, 96-1996, 96-1997, and 96-1998) where the accused-appellant was acquitted of the charges of acts of lasciviousness for failure of the prosecution to prove his guilt beyond reasonable doubt.
                    
                    On December 16, 1996, two pieces of information for the crime of statutory rape and twelve for acts of lasciviousness (defined and penalized under Article 336 of the Revised Penal Code, in relation to Section 5(b) of Republic Act no. 7610) were filed against Jalosjos.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //182
            ["date_commited" => "2005-11-15", "date_reported" => "2006-02-01",
                "narration" => "The arrests of its key leaders and the disruption of its funding activities from 2005-2006 have significantly affected the capability of RSIM to launch terrorist operations. 
                            However, the potential for the groups’ revival is still there due to the active networking of several radical Balik-Islam personalities- former leaders, preachers and support networks of the RSIM said to be based in the Middle East. The arrest of Ruben Lavilla alias Sheikh Omar is seen as a significant boost for the counter-terrorism campaign of the Philippine government and could be a major deterrent for the RSIM to regroup and reconsolidate its ranks.

                           Sheikh Omar is the only Islamic leader in the Philippines who can issue a verdict pertaining to punishment “in the service of Islam”. He is considered as one of the top ideologues of the RSIM which claimed affiliation with the Al Qaeda linked regional terrorist groups Jemaah Islamiyah and the Abu Sayyaf Group.
                            
                            He is said to be the brains behind the 2004 Super Ferry bombing in Manila which left 116 people dead and is believed to have been involved in the planning and execution of the 2005 Valentine’s Day bombings. Authorities also said that Sheikh Omar may have been involved in the planning of several bomb attacks on the United States Embassy in Manila, all of which were disrupted by the Philippine National Police. 
                            ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //183
            ["date_commited" => "1996-05-15", "date_reported" => "1997-04-22",
                "narration" => "He received the death sentence for the crime of rape. 
          
                 Juancho, residing at Brgy. Ilat South, San Pascual, Batangas, was charged with eight counts of rape on April 22, 1997 in separate complaints brought before the Batangas City Regional Trial Court. He was accused of sexually abusing his two nieces (ages 7 and 6 years old) during four different occasions in the months of May, June and December 1996.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //184
            ["date_commited" => "1997-09-18", "date_reported" => "1997-11-12",
                "narration" => "Allegedly, Marcelo, a resident of 124 V. Luna Road, Sikatuna Village, Quezon City, in conspiracy with Dominga S. Manalili, Norma Solomon, Luis Se Jr., Gil R. Erencio and Reynaldo S. Enriquez, formulated an unlawful plan to embezzle checks amounting Php 197,921,792.83 payable to the Bureau of Internal Revenue for taxes. They fraudulently set up a bank account wherein they deposited the said amount and also withdrew a total sum of Php 193,565,079.64.
                    
                    A warrant for his arrest was issued by the Sandiganbayan. He still remains at large.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //185
            ["date_commited" => "1999-02-11", "date_reported" => "1999-04-21",
                "narration" => "A warrant for his arrest was issued at Tayug, Pangasinan.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //186
            ["date_commited" => "2005-05-17", "date_reported" => "2005-05-28",
                "narration" => "The subject was filed by kidnapping case",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //187
            ["date_commited" => "1995-04-22", "date_reported" => "1995-04-23",
                "narration" => "Narag is described as a Filipino, male, 33 years of age, 5 feet 4 inches in height, weighing 140 pounds, with black hair and brown eyes. He has tattoos on his upper right and upper left arms, the Playboy bunny with 'HAWAII' and 'POISON respectively. He frequents the Kahili area.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //188
            ["date_commited" => "1997-01-20", "date_reported" => "1997-01-30",
                "narration" => "According to witnesses, Orollo shot Brgy. Captain Arturo Ison while the latter was conducting a meeting at the Barangay Hall at Batasan Hills, Quezon City on January 20, 1997. Orollo's whereabouts remain unknown up to the present.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //189
            ["date_commited" => "1994-11-11", "date_reported" => "1994-12-12",
                "narration" => "Felizardo Pagulayan alias Boy, is on the Philippine National Police's Most Wanted list for kidnap for ransom. Kidnapping case against him is pending at RTC Br 171, Valenzuela City. His last known address is Muntinlupa City.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //190
            ["date_commited" => "2003-07-15", "date_reported" => "2003-08-03",
                "narration" => "Panlilio is charged before the Regional Trial Court of Calamba City, Laguna, under Criminal Case no. 11564-2003-c, for the killing of brothers Albert C. Gutierrez and Ariel C. Real in Barangay Makiling, Calamba City, Laguna on July 15, 2003. He is still at large and is also currently wanted by the US Federal Bureau of Investigation and the International Criminal Police Organization (Interpol).
                    
                    The reward for his arrest is Php 4,050,000.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //191
            ["date_commited" => "1993-04-21", "date_reported" => "1993-04-25",
                "narration" => "Perez, along with another man named Darwin delos Santos, went to the victim's house in Cainta, Rizal on April 21, 1993 at around 9 pm. After rummaging through the drawers and stealing money and jewelry with a total value of Php 431,000. The two brought Eric Cabral and Edwina Mutuc to the terrace and stabbed them to death. Marites Garardo was also found dead inside the comfort room. Fortunately, Danilo Mutuc and Regino Garardo, though both severely wounded, survived.
                    
                    No bail was recommended for Perez. He is believed to be armed and dangerous.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //192
            ["date_commited" => "1994-02-19", "date_reported" => "1994-03-03",
                "narration" => "Reports say that the murder happened on February 19, 1994 in Valenzuela, Metro Manila, committed by Rodriguez and his companions. The body of the victim, identified as Angelito Maniaol alias 'Marlo', was found lying in a pool of blood from a gaping head wound, resulting from multiple blows by Rodriguez using his .45 caliber and a piece of wood. Both the victim's hands were tied, his mouth was gagged with a piece of shirt, and his neck was strangled with a wire.
                    
                    The primary witness, Lenita Dominguez, pointed to Loreto Rodriguez as one of the primary suspects of the murder. He was allegedly having a drinking spree together with other men named Froilan Reyes, Michael Simon and Domingo Atienza. Dominguez, a balut vendor, lives in the same compound as the victim, where the killing took place.
                    
                    Five men were accused in this case but only two were tried before the court. The others including Rodriguez have remained at large. It was reported that Rodriguez is hiding in Valenzuela.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //193
            ["date_commited" => "1996-02-12", "date_reported" => "1996-03-21",
                "narration" => "National Bureau of Investigation's most wanted list for robbery. Robbery against Rosero is docketed at RTC BR. 32, Manila.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //194
            ["date_commited" => "1963-03-22", "date_reported" => "1963-03-28",
                "narration" => "A taxi driver who kidnapped and raped actress Annabelle Huggins along with two men Lauro Ocampo and Jose Leoncio in March 1963. Later he claimed that he was Annabelle's ex-boyfriend. Ruben was plead guilty for kidnapping and raping Huggins.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //195
            ["date_commited" => "1998-05-26", "date_reported" => "1998-05-26",
                "narration" => " Philippine National Police's Most Wanted list for murder, robbery, and kidnapping. Warrants for his arrest were issued by Regional Trial Courts in Isabela, Basilan, Tawi-tawi, Sulu and Pasig City. A reward of Php 825,000 is offered to any person who can give information on his whereabouts.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //196
            ["date_commited" => "2001-01-02", "date_reported" => "2001-01-05",
                "narration" => " National Bureau of Investigation's Most Wanted list for the crime of robbery and homicide. He is presently at large.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //197
            ["date_commited" => "1993-02-19", "date_reported" => "1993-05-12",
                "narration" => "In 1993, Kit Alqueza, son of Gen. Alqueza, was charged with being the mastermind in the rape-murder of Aileen Sarmenta and the murder of Allan Gomez. Invited to a one-on-one dialogue with then Vice President and Presidential Anti-Crime Commission (PACC) Chief Joseph Estrada, he was led to a roomful of media people and accused before national television of the crime, without the benefit of a legal counsel and without being given the chance to defend himself. Even as PACC witnesses stated categorically that the allegations were false, Estrada and CISC's Chief Supt. Angel Quizon held on to their story. It has been suggested by observers and opinion writers that the contrivance was aimed to divert the focus from Calauan Mayor Antonio Sanchez who had been identified by witnesses as the principal suspect in the UPLB case. The cover-up was said to be motivated by PACC Task Force Habagat chief Panfilo Lacson and Estrada's links with Mayor Sanchez through jueteng payolas, cars supplied by the duo to Sanchez, and policemen identified with Sanchez who were with PACC).
                    
                    According to talks in the Upsilonian circle, PACC's Ike Gutierrez confided to a prominent Upsilonian that Sanchez had released P10 Million to Estrada, P10 Million to Lacson and P10 Million to media to draw the 'heat' away from him. Lacson has attempted to foist fabricated evidence on the case. This was rejected by the UP group which closed ranks and vigilantly insisted on the pursuit of justice; especially the parents of the murder victims, who rallied support for the Alqueza family. Despite recantation of PACC's two witnesses Corcolon and Lavadia who claimed to have been tortured to extract false testimony against Alqueza, vehement denial by third witness Rose Molina of PACC's love triangle theory, and statement by Centeno, driver of Sanchez, who pointed at Sanchez as the first to rape Sarmenta, Estrada and Lacson insisted that 19-year old Alqueza masterminded the crime by paying Lavadia the puny sum of P21,000 to carry out the murder.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //198
            ["date_commited" => "1991-07-03", "date_reported" => "1997-09-10",
                "narration" => "A criminal wanted for charges of kidnapping for ransom, with warrant of arrest issued at RTC Br 11, Malolos, Bulacan. He is on the PNP's list of most wanted criminals.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //199
            ["date_commited" => "2003-09-09", "date_reported" => "2003-09-11",
                "narration" => " Philippine National Police's Most Wanted list for the crime of kidnap for ransom. A warrant for his arrest was issued by the Regional Trial Court in Angeles City.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //200
            ["date_commited" => "2002-11-30", "date_reported" => "2002-12-03",
                "narration" => "A suspected New People's Army member, he allegedly murdered four employees of Santa Catalina local government while riding the local government's ambulance in May 2002. The victims were on their way back to Santa Catalina after withdrawing money from Land Bank Bayawan branch. The subject's group robbed and killed the four persons. He was finally arrested on January 2007 in Siaton, Dumaguete.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //201
            ["date_commited" => "1996-04-22", "date_reported" => "1996-05-11",
                "narration" => "Zamora, a resident of Santiago, Iligan City, reportedly sexually abused his 12 year old stepdaughter from April of 1996 until July of the same year. A warrant for his arrest was issued by Branch 3, Regional Trial Court, 12th Judicial Region, Iligan City, Lanao Del Norte and service of warrant was referred to CRID-IS, NBI. Subject is still at large.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
//********************************************************************************************************************************************************
//********************************************************************************************************************************************************
            //CASES FROM DOJ MAJOR CASES
            //202
            ["date_commited" => "2008-11-14", "date_reported" => "2011-10-06",
                "narration" => "PAGCOR said the charges filed against the respondents stemmed from the joint movie production of “Baler” between VIVA and BIDA Productions. Baler was one of the official entries in the 2008 Metro Manila Film Festival (MMFF). The Executive Producers of the film were Vicente Del Rosario, Jr. for VIVA and Erwin Genuino for BIDA.
 
                    Based on information obtained by PAGCOR, Baler’s production cost was pegged at P40 million. Under the joint movie production agreement between VIVA and BIDA, the latter was supposed to shoulder 2/3 of the total production cost which amounts to P26.7 million while the remaining 1/3 was for the account of VIVA.

                    Erwin Genuino, at the time that he participated as Executive Producer of the movie Baler, was a PAGCOR and Bida officer at the same time.",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //203
            ["date_commited" => "2010-08-23", "date_reported" => "2010-08-24",
                "narration" => "Throughout the day, the gunman wrote his demands for the return of his job and benefits on cardboard and pasted them on the windshield of the bus. One message read, “Big mistake to correct a big wrong decision.” Late in the afternoon, he posted a message saying, “Media now,” apparently telling journalists to come to him. But by then the police prevented reporters from even getting near the bus.

                Mr. Mendoza gave an interview to Radio Mindanao Network, a Manila station, in which he admitted shooting two of the hostages and threatened to kill more. “I shot two Chinese,” he told the station in Tagalog, “I will finish them all if they do not stop.” The commandos struck after the bus driver jumped through a window and ran from the bus screaming, “Everybody is dead!”",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //204
            ["date_commited" => "2004-03-20", "date_reported" => "2011-03-10",
                "narration" => "Investigation by the BIR of Spouses Garcia for probable tax evasion cases disclosed that they failed to file their ITR for 2004. They also failed to declare with the BIR income earned in 2004 amounting to P273,235,534.08 which they used to acquire properties and to make deposits in several bank accounts and financial instruments. Details of the investigation showed that in 2004, Retired General Garcia, by himself or through his 
                    children, who were minors with no visible means of income, deposited P102,765,849.35 in several bank accounts and financial instruments. 

                    In the same year, Retired General Garcia, through his son Ian Carl, who was then a minor with no visible means of income, also purchased a property in Iloilo for P459,609.00. 
                    Likewise in 2004, his wife Clarita or through her children, who were minors with no visible means of income, deposited in several bank accounts and financial instruments P170,010,075.73. 
                    ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
            //205
            ["date_commited" => "2007-06-23", "date_reported" => "2010-11-04",
                "narration" => "Neri, it can be recalled, was one of four (4) SSS top honchos who were the subject of a Senate inquiry after it became public that they received excessive and unwarranted bonuses and allowances, including the exercise of stock options, of more than P127M as board members of Philex Mining Corp. from 2007 to 2010. Another of those four, Thelmo Y. Cunanan, was also charged separately today before the Department of Justice (DOJ). 
                         
                        The said inquiry triggered the BIR to look into his financial transactions aided by documents from the Senate Committee on Finance (SCF), the SSS, and the companies where the SSS has invested its members’ trust fund namely: Philex Mining Corp. (PMC) and Union Bank of the Philippines (UBP). 
                         
                        Neri, it was gathered, is a Filipino Citizen with residential address at 28 Palali Street, Sta. Mesa Heights, Quezon City. As a Filipino citizen deriving income from within the Philippines, he is subject to income tax and is mandated to declare all his income for each taxable year and pay the corresponding taxes due thereon. 
                         
                        A comparison made by BIR investigators of the gross income or revenues declared by Neri in his ITRs for taxable years 2008 and 2009 as against the income payments he received from various corporations for the same years revealed that he deliberately failed to declare his correct tax base by substantially underdeclaring his income for two (2) consecutive taxable years. 
                        ",
                "agency_reported" => "", "agency_report_details" => "", "agency_report_status" => "",
                "court_action_details" => "",
                "considerations" => "",
                "img_signature" => "", "img_right_thumb" => ""],
        );

        // Uncomment the below to run the seeder
        DB::table('complaints')->insert($complaints);
    }

}
