<?php 
	
	//error_reporting(0);

	session_start();

	@include 'config.php';
	
	$fname = $mname = $lname = $fatname = $fatlname = $moname = $grandname = "";

	if (isset($_POST['submit'])) {

// general details
		$fname = $_POST['firstname'];
		$mname = $_POST['middlename'];
		$lname = $_POST['lastname'];
		$fatname = $_POST['ffname'];
		$fatmname = $_POST['fmname'];
		$fatlname = $_POST['flname'];
		$moname = $_POST['mname'];
		$grandname = $_POST['gname'];
		$gender = $_POST['gender'];
		$mnum = $_POST['mnum'];
		$dob = $_POST['dob'];
		$agee = $_POST['age'];
		$ctzen_type = $_POST['citizen_type'];

		
		//String Validation  
	if (!preg_match("/^[a-zA-Z ]*$/",$fname)) { 

		 $error[] = 'Only alphabets and white space are allowed in name!';
		 
			
    }
    // mobile number validation
    elseif (!preg_match('/^[0-9]{10}+$/',$mnum)) {

    	$error[] = 'Mobile number shoud be integer and 10 digits!';

    }
    // age validation
    elseif ($agee<"16") {

    		$error[] = 'Your age is not eligible for citizenship';
    }
    else{
    	// last name of both parent and children validation

    	if ($lname!=$fatlname) {

    		 $error[] = 'Both father and child last name must be same!';

    	}else{

    		$sql = "INSERT INTO `general_details`(`firstname`, `middlename`, `lastname`, `ff_name`, `fm_name`, `fl_name`, `mother_name`, `grandfather_name`,`gender`,`mobile_no`,`DOB`,`age`,`citizenship_type`) VALUES ('$fname','$mname','$lname','$fatname','$fatmname','$fatlname','$moname','$grandname','$gender','$mnum','$dob','$agee','$ctzen_type')";
    		$sql_run = mysqli_query($conn, $sql);
				header('location:citizenship.php');
    	}
    }



	};

	mysqli_close($conn);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-----------------------Google font----------------------->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bitter&display=swap" rel="stylesheet">

	<!--************* fontawesome link------------------- -->
	<script src="https://kit.fontawesome.com/235f3b96aa.js" crossorigin="anonymous"></script>

	<!-- css -->
	<!-- <link rel="stylesheet" type="text/css" href="../css/citizenship.css"> -->
	<link rel="stylesheet" type="text/css" href="footer.css">

	<title>E-citizenship system</title>

<!-- internal css -->
<style type="text/css">
body{
	background-color: rgb(237, 240, 245);
	overflow-x: hidden;
	overflow-y: auto;
	margin: 0px;
	padding: 0px;
}
/*------------logo and title section-------------*/
 .navbg #logo img{
  transform: translate(550px);
  margin-top: 20px;
  width: 120px;
  background-color: transparent;
}
 .navbg span h4{
	transform: translate(2px,10px);
	font-family: 'Bitter', serif;
	text-transform: uppercase;
	letter-spacing: 1px;
	font-size: 20px;
	word-break:1px;
	overflow: hidden;
	color: blue;
	font-weight: bolder;
}
.navbg{
	background-image: url('eve.jpg');
	background-repeat: no-repeat;
	background-size: cover;
	height: 200px;
	position: relative;
	z-index: -1;
}
.navbg h4{
	text-align: center;
	color: blueviolet;
}
/*------------logo and title section end-------------*/
hr{
	opacity:1;
	color: rgb(63, 144, 181);
}

/*Registration form section*/
	.rform-heading h2{
		padding: 15px;
		text-transform: capitalize;
		text-align: center;
		font-weight: bold;
		color: blueviolet;
	}	
/*demographic details*/
	.demographic h4{
		text-align: center;
		background: rgb(146, 38, 221);
		color: #f5f8f8;
		letter-spacing: 1px;
		word-spacing: 10px;
	}

/*general info section*/

/*dob section*/
.geninfo .dob label{
	transform: translate(550px,-22px);		
}
.geninfo .dob input{
	transform: translate(590px,-25px);
	width: 120px;	
}
.geninfo .age label{
	transform: translate(0px,-10px);
}
.geninfo .age input{
	transform: translate(45px,-10px);
}

/*gender section*/
.geninfo .Gender{
	margin-left: 550px;
	transform: translate(0px,-50px);
}
.geninfo .Gender select{
	margin-left: 18px;
	transform: translate(0px,0px);
	width: 330px;
}
 .username input{
	width: 500px;
}
.username{
	font-family: 'Work Sans', sans-serif;
}
.dr{
	font-family: 'Work Sans', sans-serif;	
}
.error{
	color:  #FF0000;
	margin-left: 200px;
}
.error-msg{
	margin: auto;
	text-align: center;
	margin-left: 150px;
   display: block;
   background: crimson;
   color:#fff;
   border-radius: 5px;
   font-size: 20px;
   padding:5px;
   position: absolute;
   left: 40%;
   width: 550px;
}
</style>

<!-- js  -->

<script type="text/javascript">
	// age calculator
	
	// function calage(){  
	//     var userinput = document.getElementById("DOB").value;  
	//     var dob = new Date(userinput);  
	//     if(userinput==null || userinput=='') {  

	//     	alert(document.getElementById("message").innerHTML = "**Choose a date please!");
	        
	      
	//       return false; 
	     	
	//     } else {  
	      
	//     //calculate month difference from current date in time  
	//     var month_diff = Date.now() - dob.getTime();  
	      
	//     //convert the calculated difference in date format  
	//     var age_dt = new Date(month_diff);   
	      
	//     //extract year from date      
	//     var year = age_dt.getUTCFullYear();  
	      
	//     //now calculate the age of the user  
	//     var age = Math.abs(year - 1970);  
	      
	//     //display the calculated age  
	//     return document.getElementById("agee").innerHTML=age;  
	//     }  
	// } 

//permanent address
var subjectObject = {

 // pradesh no:1
  "Koshi(कोशी प्रदेश )": {
    "Bhojpur": [
          "Bhojpur Municipality", "Shadananda Municipality", "Temkemaiung Rural Municipality", "Ram Prasad Rai Rural Municipality","  Arun Rural Municipality","Pauwadungma Rural Municipality","Salpasilichho Rural Municipality","Amchok Rural Municipality","Hatuwagadhi Rural Municipality"
          ],

    "Dhankuta": [
          "Pakhribas Municipality", "Dhankuta Municipality", "Mahalakshmi Municipality", "Sangurigadhi Rural Municipality","Shahidbhumi Rural Municipality", "Chathar Jorpati Rural Municipality", "Chaubise Rural Municipality"
        ],
    
    
    "Ilam": [
        "Ilam Municipality", "Deumai Municipality", "Mai Municipality", "Suryodaya Municipality"
        ,"Fakphokthum Rural Municipality","Chulachuli Rural Municipality","Maijogmai Rural Municipality",
          "Mangsebung Rural Municipality","Rong Rural Municipality","Sandakpur Rural Municipality"
          ],

    "Jhapa" : [
        "Mechinagar Municipality","Damak Municipality","Kankai Municipality","Bhadrapur Municipality",
        "Arjundhara Municipality"," Shivshatakshi Municipality","Gauradaha Municipality","Birtamod Municipality",
        "Kamal Rural Municipality","Gauriganj Rural Municipality","Barhadashi Rural Municipality"," Jhapa Rural Municipality","Buddhashanti Rural Municipality","Haldiwari Rural Municipality","Kachankawal Rural Municipality"],

    
    "Khotang" : [
      "Halesi Tuwachung Municipality","Diktel Rupakot Majhuwagadhi Municipality","Aiselukharka Rural Municipality",
        "Rava Besi Rural Municipality","Jantedhunga Rural Municipality","Khotehang Rural Municipality","  Kepilasgadhi Rural Municipality","Diprung Chuichumma Rural Municipality","Sakela Rural Municipality","Varahapokhari Rural Municipality"
          ],

    "Morang" : [
          "Biratnagar Metropolitan City","Belwari Municipality","Letang Municipality","Pathri Sanischare Municipality","Rangeli Municipality","Ratuwamai Municipality",
        " Sunbarsha Municipality"," Urlawari Municipality","  Sundarharaicha Municipality","Budhiganga Rural Municipality",
        " Dhanpalthan Rural Municipality","Gramthan Rural Municipality"," Jahda Rural Municipality",
        "Kanepokhari Rural Municipality","Katahari Rural Municipality","Kerawari Rural Municipality","Miklajung Rural Municipality"
        ],

    "Okhaldhunga" : [
         " Siddicharan Municipality","Khijidemba Rural Municipality"," Champadevi Rural Municipality",
        "Chishankhugadhi Rural Municipality","  Manebhanjyang Rural Municipality",
        "Molung Rural Municipality","Likhu Rural Municipality","Sunkoshi Rural Municipality"
      ],

    "Panchthar" : [
      "Phidim Municipality","Phalelung Rural Municipality","Falgunanda Rural Municipality","  Hilihang Rural Municipality",
      "Kummayak Rural Municipality","Miklajung Rural Municipality","Tumbewa Rural Municipality",
      "Yangwarak Rural Municipality"
      ],

    "Sankhuwasabha" : [
    "Chainpur Municipality","Dharmadevi Municipality","Khandwari Municipality"," Madi Municipality","Panchkhapan Municipality","Bhotkhola Rural Municipality",
      " Chichila Rural Municipality","  Makalu Rural Municipality","  Sabhapokhari Rural Municipality",
    "Silichong Rural Municipality"
  ],

      "Solukhumbu" : [
        "Solududhkunda Municipality","Mapya Dudhkoshi Rural Municipality",
        "Khumbu Pasanglhamu Rural Municipality"," Thulung Dudhkoshi Rural Municipality"," Necha Salyan Rural Municipality","Mahakulung Rural Municipality",
          "Likhu Pike Rural Municipality","Sotang Rural Municipality"
        ],

    "Sunsari" : [
          "Itahari Sub-Metropolitan City","Dharan Sub-Metropolitan City","Inaruwa Municipality",
          "Duhabi Municipality","Ramdhuni Municipality","Barahkshetra Municipality"," Dewanganj Rural Municipality","Koshi Rural Municipality",
            "Gadhi Rural Municipality","Barju Rural Municipality"," Bhokraha Narsingh Rural Municipality",
            "Harinagar Rural Municipality"
            ],

     "Taplejung" : [
        "Phungling Municipality ", "Atharai Triveni Rural Municipality ","Sidingwa Rural Municipality","Maktanglung Rural Municipality", "Mikwakhola Rural Municipality" ,
          " Meringden Rural Municipality",  "Maiwakhola Rural Municipality","Pathibhara Yangwarak Rural Municipality  ","Sirijunga Rural Municipality" 
          ],

    "Tehrathum" : [
            "Myanglung Municipality","Laligurans Municipality","Athrai Rural Municipality",
          "Chathar Rural Municipality","Fedap Rural Municipalit","Menchayem Rural Municipality"
        ],

       
    "Udayapur" : [
            "Katari Municipality","Chaudandigadhi Municipality","Triyuga Municipality",
           "Velka Municipality","Udayapurgadhi Rural Municipality","Tapli Rural Municipality",
        "Rautamai Rural Municipality","Limchungbung Rural Municipality"
    ],  

  },

  // pradesh no:2
  "Madhesh(मधेश प्रदेश)": {
    "Bara": [
          "Kalaiya Sub-Metropolitan City", "	Jitpur Simara Sub-Metropolitan City", "	Kolhavi Municipality", "	Nijgadh Municipality","  Mahagadhimai Municipality","	Simraungadh Municipality","Pachrauta Municipality","Adarsha Kotwal Rural Municipality",
			"Karaiyamai Rural Municipality","Devtal Rural Municipality","Parwanipur Rural Municipality",
			"Prasauni Rural Municipality","	Feta Rural Municipality","	Baragadhi Rural Municipality",
			"Suvarna Rural Municipality","Bishrampur Rural Municipality"
			],

    "Dhanusa": [
          "	Janakpurdham Sub-Metropolitan City", "Kshireshwarnath Municipality", "	Ganeshman Charnath Municipality", 
"	Dhanusadham Municipality","	Nagarain Municipality",
 "Videh Municipality", "Mithila Municipality","	Shahidnagar Municipality","	Sabla Municipality",
"Kamala Municipality","Mithila Bihari Municipality","Hanspur Municipality",
"Janaknandini Rural Municipality","Bateshwor Rural Municipality","Mukhiyapatti Musaharmiya Rural Municipality",
"Laxminia Rural Municipality","Aurahi Rural Municipality","Dhanauji Rural Municipality"
        ],    
    
    "Mahottari": [
        "Jaleswar Municipality", "Bardibas Municipality", "Gaushala Municipality", "Loharpatti Municipality"
        ,"Ramgopalpur Municipality","Manara Shiswa Municipality","Matihani Municipality",
          "	Bhangaha Municipality","	Balwa Municipality","Aurahi Municipality","Ekdara Rural Municipality",
"Sonma Rural Municipality","Samsi Rural Municipality","Mahottari Rural Municipality",
"Pipara Rural Municipality"
          ],

  
  "Parsa" : [
        "Birgunj Municipal Corporation","Pokharia Municipality","Bahudarmai Municipality","Parsagadhi Municipality",
        "Thori Rural Municipality","Jagarnathpur Rural Municipality ","Dhobini Rural Municipality","	Chhipharamai Rural Municipality",
        "Pakaha Mainpur Rural Municipality","Bindbasini Rural Municipality","Sakhuwa Prasauni Rural Municipality","	Paterwa Sugauli Rural Municipality",
"Kalikamai Rural Municipality","Jira Bhawani Rural Municipality"
		],
    
   "Rautahat" : [
      "	Chandrapur Municipality","Garuda Municipality","	Gaur Municipality",
        "Boudhimai Municipality","Brindavan Municipal Corporation","Devahi Gonahi Municipality",
		" Gadhimai Municipality ","Gujra Municipality",
		"Kataharia Municipality","Madhav Narayan Municipality","Moulapur Municipality",	
		"Fatuwabijaipur Municipality","Ishnath Municipality","Paroha Municipality",
		"Rajpur Municipality","Rajdevi Municipality","Durga Bhagwati Rural Municipality",
		"Yamunamai Rural Municipality"
          ],

    "Saptari" : [
          "	Rajbiraj Municipality","Kanchanrup Municipality","	Dakneshwari Municipality",
			"Bodebarsain Municipality","Khadak Municipality","	Shambhunath Municipality",
        	"Surunga Municipality","Hanumannagar Kankalini Municipality","Saptakoshi Municipality",
			"Agnisair Krishnasarvan Rural Municipality",
        	"Chhinamasta Rural Municipality","Mahadeva Rural Municipality",
			"Tirhut Rural Municipality",
        	"Tilathi Koiladi Rural Municipality","Rupni Rural Municipality","Rajgarh Rural Municipality",
			"Bishnupur Rural Municipality","Balan-Bihul Rural Municipality"
        ],

   "Sarlahi" : [
         "Ishwarpur Municipality","Malangwa Municipality"," Lalbandi Municipality",
        "Haripur Municipality","  Haripurwa Municipality",
        "Harivan Municipality","Barhathwa Municipality","Balra Municipality","Godaita Municipality",
		"Bagmati Municipality","	Kabilasi Municipality","Chakraghatta Rural Municipality"	,
		"Chandranagar Rural Municipality","Dhankaul Rural Municipality","	Brahmapuri Rural Municipality",
		"Ramnagar Rural Municipality","Bishnu Rural Municipality","	Kaudena Rural Municipality","Parsa Rural Municipality",
		"Basbaria Rural Municipality"
      ],


    "Siraha" : [
      	"Small municipality","Dhangadhimai Municipality","Siraha Municipality"," Golbazar Municipality",
      	"Mirchaiya Municipality","	Kalyanpur Municipality","	Karjanha Municipality",
      	"Sukhipur Municipality","Bhagwanpur Rural Municipality","Aurahi Rural Municipality",
		"Bishnupur Rural Municipality","Bariyarpatti Rural Municipality","Laxmipur Patari Rural Municipality",
		"Narha Rural Municipality","	Sakhuwanankaratti Rural Municipality",
		"Arnama Rural Municipality","Nawarajpur Rural Municipality"
      ]
  },


// pradesh no:3
  "Bagmati(बागमती प्रदेश )": {
    
	"Bhaktapur": [
          "Changunarayan Municipality", "Bhaktapur Municipality", 
			"Madhyapur Thimi Municipality", "Suryabinayak Municipality"
          ],

    "Chitwan": [
          "	Bharatpur Metropolitan City", "Kalika Municipality", "Khairhani Municipality", "Madi Municipality",
			"Ratnanagar Municipality", "Rapti Municipality", "Ichchhakamana Rural Municipality"
        ],
    
    "Dhading": [
        "Dhunibenshi Municipality","Nilkantha Municipality","Khaniyabas Rural Municipality","Gajuri Rural Municipality","Galchhi Rural Municipality","Gangajamuna Rural Municipality","Jwalamukhi Rural Municipality","Thakre Rural Municipality","	Netrawati Dabjong Rural Municipality",
			"Benighat Rorang Rural Municipality","Ruby Valley Rural Municipality","Siddhalek Rural Municipality",
			"Tripurasundari Rural Municipality"
          ],

    "Dolakha" : [
        "Jiri Municipality","Bhimeshwar Municipality","Kalinchok Rural Municipality","Gaurishankar Rural Municipality",
        "Tamakoshi Rural Municipality","Melung Rural Municipality","Bigu Rural Municipality","Baiteshwor Rural Municipality",
        "Shylung Rural Municipality"
		],

    
    "Kathmandu" : [
      "Kathmandu Metropolitan City","Kageshwori Manohara Municipality",
      "Kirtipur Municipality",
        "Gokarneshwor Municipality","Chandragiri Municipality","Tokha Municipality","Tarakeshwar Municipality","	Dakshinkali Municipality","Nagarjuna Municipality","Budhanilkantha Municipality"
          ],

   "Kavrepalanchok" : [
          "	Dhulikhel Municipality","Banepa Municipality","	Panauti Municipality",
	"Panchkhal Municipality","	Namobuddha Municipality","	Mandandeupur Municipality",
        " Khanikhola Rural Municipality"," Chaurideurali Rural Municipality","Temal Rural Municipality",
	"Bethanchok Rural Municipality"
                ],
 
	"Lalitpur" : [
         "Lalitpur Metropolitan City","Godavari Municipality","Mahalakshmi Municipality",
        "Konjyosom Rural Municipality","Bagmati Rural Municipality",
        "Mahankal Rural Municipality"
      ],

   "Makwanpur" : [
      "	Hetauda Sub-Metropolitan City","Thaha Municipality","Indrasarobar Rural Municipality","Kailash Rural Municipality",
      "	Bakaiya Rural Municipality","Bagmati Rural Municipality","Bhimphedi Rural Municipality",
      "Makawanpurgadhi Rural Municipality","Manahari Rural Municipality","	Raxirang Rural Municipality"
      ],


    "Nuwakot" : [
    "Vidur Municipality","	Belkotgadhi Municipality","Kakani Rural Municipality","	Kispang Rural Municipality","Tadi Rural Municipality","Tarakeshwar Rural Municipality",
      "	Dupcheshwor Rural Municipality","Panchakanya Rural Municipality","Likhu Rural Municipality",
    "Myagang Rural Municipality"
  ],

   "Ramechhap" : [
        "Manthali Municipality","	Ramechhap Municipality",
        "Umakunda Rural Municipality","Khandadevi Rural Municipality"," Gokulganga Rural Municipality","Doramba Shylung Rural Municipality",
          "	Likhu Tamakoshi Rural Municipality","Sunapati Rural Municipality"
        ],

    "Rasuwa" : [
          "	Uttargaya Rural Municipality","Kalika Rural Municipality","Gosaikunda Rural Municipality",
          "	Naukunda Rural Municipality","Amachodingmo Rural Municipality"
            ],

     "Sindhuli" : [
        "Kamalamai Municipality", "Dudhauli Municipality","Golanjar Rural Municipality","Gyanglekh Rural Municipality", "	Tinpatan Rural Municipality" ,
          "Fikkal Rural Municipality",  "Marin Rural Municipality","Sunkoshi Rural Municipality","Hariharpurgadhi Rural Municipality" 
          ],

    "Sindhupalchok" : [
            "Chautara Sangachokgadhi Municipality","Barhabise Municipality","Melamchi Municipality",
          "Indrawati Rural Municipality","Jugal Rural Municipality","Panchpokhari Thangpal Rural Municipality",
		"Balefi Rural Municipality","Bhotekoshi Rural Municipality","Lisankhu Pakhar Rural Municipality","Sunkoshi Rural Municipality"
        ],

  },


 // pradesh no:4
  "Gandaki(गण्डकी प्रदेश )": {
    
    "Baglung": [
          "	Baglung Municipality", "Galkot Municipality", "Jamuni Municipality", "Dhorpatan Municipality",
		"Bareng Rural Municipality ","Kathekhola Rural Municipality","Tamankhola Rural Municipality","Tarakhola Rural Municipality","Nisikhola Rural Municipality"
		,"Wadigad Rural Municipality"
          ],

    "Gorkha": [
          "	Gorkha Municipality", "	Palungtar Municipality", "Barpak Sulikot Rural Municipality", "Siranchok Rural Municipality","	Ajirkot Rural Municipality", "Arughat Rural Municipality", "Gandaki Rural Municipality","Chumnubari Rural Municipality","Dharche Rural Municipality","Bhimsen Thapa Rural Municipality"
        ],
    
    
    "Kaski": [
        "	Pokhara Metropolitan City", "Annapurna Rural Municipality", "Machhapuchhre Rural Municipality", "	Madi Rural Municipality"
        ,"Rupa Rural Municipality"
          ],

    "Lamjung" : [
        "Besishahr Municipality","Central Nepal Municipality","Rainas Municipality","	Sundarbazar Municipality",
        "Kwolasothar Rural Municipality","Dudhpokhari Rural Municipality","	Dordi Rural Municipality","Marsyangdi Rural Municipality"
        ],

    
    "Manang" : [
      "Chame Rural Municipality","Narpa Bhumi Rural Municipality","	Nason Rural Municipality",
        "Manang Ngisyang Rural Municipality"
          ],

    "Mustang" : [
          "Gharpajhong Rural Municipality","Thasang Rural Municipality","Lo-Ghekar Damodarkunda Rural Municipality","Lomanthang Rural Municipality","Waragung Muktikshetra Rural Municipality"
        ],

    "Myagdi" : [
         " Beni Municipality","	Annapurna Rural Municipality","Dhawalagiri Rural Municipality",
        "Mangala Rural Municipality","Malika Rural Municipality",
        "Raghuganga Rural Municipality"
      ],

    "Nawalpur(Bardaghat Susta East)" : [
      "Kawasoti Municipality","Gaidakot Municipality","Devchuli Municipality","Madhyabindu Municipality",
      "Boudikali Rural Municipality","Bulingtar Rural Municipality","Vinayi Triveni Rural Municipality",
      "Hupsekot Rural Municipality"
      ],

    "Parbat" : [
    "	Kusma Municipality","Phalewas Municipality","Jaljala Rural Municipality","Paiyun Rural Municipality","Mahashila Rural Municipality","Modi Rural Municipality",
      "Vihadi Rural Municipality"
  ],

      "Syangja" : [
        "Galyang Municipality","	Chapakot Municipality",
        "	Putalibazar Municipality"," Bhirkot Municipality","Waling Municipality ","Arjun Chaupari Rural Municipality",
          "Andhikhola Rural Municipality","Kaligandaki Rural Municipality",
          "Fedikhola Rural Municipality","	Biruwa Rural Municipality"
        ],

    "Tanahun" : [
          "Bhanu Municipality","Bhimad Municipality","Vyas Municipality",
          "Shuklagandaki Municipality","Abukhaireni Rural Municipality","Rishing Rural Municipality","Ghiring Rural Municipality","	Devghat Rural Municipality",
            "Myagde Rural Municipality","Bandipur Rural Municipality"            ]

  },


 // pradesh no:5
  "Lumbini(लुम्बिनी प्रदेश)": {
   
    "Arghakhanchi": [
          "Sandhikharka Municipality", "Shitganga Municipality", "Role Location Municipality", "Chhatradev Rural Municipality","	Panini Rural Municipality","	Malarani Rural Municipality"
          ],

    "Banke	": [
          "Nepalgunj Sub-Metropolitan City", "	Kohalpur Municipality", "Narainapur Rural Municipality", "Rapti Sonari Rural Municipality","	Baijnath Rural Municipality", "Khajura Rural Municipality", "Duduwa Rural Municipality","Janaki Rural Municipality"
        ],
    
    
    "Bardiya": [
        "Gularia Municipality", "Madhuvan Municipality", "Rajapur Municipality", "Thakurbaba Municipality"
        ,"Bansgadhi Municipality","Barbardiya Municipality","Badaiyatal Rural Municipality",
          "Geruwa Rural Municipality"
          ],

    "Dang" : [
        "Tulsipur Sub-Metropolitan City	","Ghorahi Sub-Metropolitan City","Lamhi Municipality","Banglachuli Rural Municipality",
        "Dangisharan Rural Municipality","Gadhwa Rural Municipality","Rajpur Rural Municipality","Rapti Rural Municipality",
        "	Shantinagar Rural Municipality	","	Babai Rural Municipality"
        ],

    
    "Eastern Rukum" : [
      "	Putha Uttarganga Rural Municipality","Bhume Rural Municipality","Sisne Rural Municipality"
          ],

    "Gulmi" : [
          "	Musikot Municipality","	Resunga Municipality","Isma Rural Municipality","Kaligandaki Rural Municipality","Gulmi Durbar Rural Municipality","	Satyawati Rural Municipality",
        "Chandrakot Rural Municipality","Rurukshetra Rural Municipality","Chhatrakot Rural Municipality","Dhurkot Rural Municipality"
        ],

    "Kapilvastu" : [
         "Kapilvastu Municipality ","Buddhabhumi Municipality","Shivraj Municipality",
        "Maharajganj Municipality","Krishnanagar Municipality",
        "	Banganga Municipality","Mayadevi Rural Municipality","Yasodhara Rural Municipality","Sudhodhan Rural Municipality","Vijaynagar Rural Municipality"
      ],

    "Palpa" : [
      "	Rampur Municipality","	Tansen Municipality","Nisdi Rural Municipality","Purbakhola Rural Municipality",
      "Rambha Rural Municipality","Mathagadhi Rural Municipality","	Tinau Rural Municipality",
      "Bagnaskali Rural Municipality","	Ribdikot Rural Municipality","	Rainadevi Chhahra Rural Municipality"
      ],

    "Nawalparasi(Bardaghat Susta West)" : [
    "	Bardaghat Municipality","Ramgram Municipality","Sunawal Municipality","	Susta Rural Municipality","Palhinandan Rural Municipality","Pratappur Rural Municipality",
      "Sarawal Rural Municipality "
  ],

      "Pyuthan" : [
        "	Pyuthan Municipality","Swargadwari Municipality",
        "Gaumukhi Rural Municipality","Mandvi Rural Municipality ","Sarumarani Rural Municipality","Mallarani Rural Municipality",
          "Naubahini Rural Municipality","Jhimruk Rural Municipality","Airawati Rural Municipality"
        ],

    "Rolpa" : [
          "Rolpa Municipality","Triveni Rural Municipality","Parivartan Rural Municipality",
          "	Madi Rural Municipality","Runtigadhi Rural Municipality","	Lunggri Rural Municipality","	Gangadev Rural Municipality","Sunchhahari Rural Municipality",
            "	Sunil Smriti Rural Municipality","	Thawang Rural Municipality"
            ],

     "Rupandehi" : [
        "Butwal Sub-Metropolitan City ", "Devadaha Municipality ","	Lumbini Cultural Municipality","Sainamaina Municipality", "	Siddharthanagar Municipality" ,
          "Tilottama Municipality",  "Gaidhawa Rural Municipality","	Kanchan Rural Municipality  ","Kothimai Rural Municipality","Marchwari Rural Municipality" 
          ]

  },


 // pradesh no:6
  "Karnali(कर्णाली प्रदेश)": {
    "Dailekh": [
          "Narayan Municipality", "	Dullu Municipality", "Chamunda Bindrasaini Municipality", "Aath-Bish municipality","	Bhagwatimai Rural Municipality","Gurans Rural Municipality","Dungeshwor Rural Municipality","Naumule Rural Municipality","Mahavu Rural Municipality","Bhairavi Rural Municipality"
          ],

    "Dolpa": [
          "Thuli Bheri Municipality", "Tripurasundari Municipality", "Dolpo Buddha Rural Municipality", "Shey Phoksundo Rural Municipality","Jagdulla Rural Municipality", "	Mudkechula Rural Municipality", "Kaike Rural Municipality","	Charka Tangsong Rural Municipality"
        ],
    
    
    "Humla": [
        "Simkot Rural Municipality", "Namkha Rural Municipality", "Kharpunath Rural Municipality	", "Sarkegad Rural Municipality"
        ,"Chankheli Rural Municipality","	Adanchuli Rural Municipality","	Tanjakot Rural Municipality"
          ],

    "Jajarkot" : [
        "	Bheri Municipality","	Chhedagad Municipality","	Nalgad Municipality","	Barekot Rural Municipality",
        "Kuse Rural Municipality","Junichande Rural Municipality","Shivalaya Rural Municipality"
        ],

    
    "Jumla" : [
      "	Chandannath Municipality","	Kanakasundari Rural Municipality","	Sinja Rural Municipality",
        "Hima Rural Municipality","Tila Rural Municipality","Guthichaur Rural Municipality","	Tatopani Rural Municipality","	Patarasi Rural Municipality"
          ],

    "Kalikot" : [
          "Khandachakra Municipality","	Raskot Municipality","Tilagufa Municipality","Pachaljharna Rural Municipality",
        "Sanni Triveni Rural Municipality","	Naraharinath Rural Municipality","Shubh Kalika Rural Municipality","	Mahavai Rural Municipality",
        "Palata Rural Municipality"
        ],

    "Mugu" : [
         " 	Chhayanath Rara Municipality","Mugum Karmarong Rural Municipality	"," Soru Rural Municipality",
        "	Khatyad Rural Municipality"
      ],

    "Salyan" : [
      "	Sharda Municipality","	Bagchaur Municipality","Bangad Kupinde Municipality","	Kalimati Rural Municipality",
      "Triveni Rural Municipality","	Kapurkot Rural Municipality","Chhatrashwori Rural Municipality",
      "Siddha Kumakh Rural Municipality","	Kumakh Rural Municipality","Darma Rural Municipality"
      ],

    "Surkhet" : [
    "Birendranagar Municipality","	Bheriganga Municipality","Gurbhakot Municipality","Panchapuri Municipality","	Lekweshi Municipality","Chaukune Rural Municipality",
      "Barahatal Rural Municipality","	Chingad Rural Municipality","Simta Rural Municipality"
  ],

      "Western Rukum" : [
        "Musikot Municipality","Chaurjahari Municipality",
        "Athbiskot Municipality","Banfikot Rural Municipality","Triveni Rural Municipality","	Sani Bheri Rural Municipality"
        ] 
  },


 // pradesh no:7
  "Sudurpaschim( सुदूरपश्चिम प्रदेश)": {
    "Achham": [
          "Mangalsen Municipality", "	Kamalbazar Municipality", "Sanfebagar Municipality", "	Panchdeval Binayak Municipality","	Chaurpati Rural Municipality","	Mellekh Rural Municipality","Bannigadhi Jayagadh Rural Municipality","	Ramaroshan Rural Municipality","Dhakari Rural Municipality","	Turmakhand Rural Municipality"
          ],

    "Baitadi": [
          "Dashrathchand Municipality", "Patan Municipality", "Melauli Municipality", "Purchaudi Municipality","	Surnaya Rural Municipality", "Sigas Rural Municipality", "Shivnath Rural Municipality","	Pancheshwor Rural Municipality","Dogadakedar Rural Municipality","Dilasaini Rural Municipality"
        ],
    
    
    "Bajhang": [
        "Jayaprithvi Municipality", "Bungal Municipality", "Talkot Rural Municipality", "Masta Rural Municipality"
        ,"Khaptadchhanna Rural Municipality","	Thalara Rural Municipality","Vitthadachir Rural Municipality",
          "Surma Rural Municipality","Chhabispathibhera Rural Municipality","Durgathali Rural Municipality"
          ],

    "Bajura" : [
        "Badimalika Municipality","Triveni Municipality","Budhiganga Municipality","Budhinanda Municipality",
        "Gaumul Rural Municipality","	Jagannath Rural Municipality","Swamikartik Khapar Rural Municipality","Khaptad Chhededaha Rural Municipality",
        "Khaptad Chhededaha Rural Municipality"
        ],

    
    "Dadeldhura" : [
      "	Amargadhi Municipality","	Parshuram Municipality","	Alital Rural Municipality",
        "Bhageshwor Rural Municipality	","Navadurga Rural Municipality","Ajaymeru Rural Municipality","	Ganyapadhura Rural Municipality"
          ],

    "Darchula" : [
          "	Mahakali Municipality","Shailyashikhar Municipality","Malikarjun Rural Municipality","Apihimal Rural Municipality","	Duhu Rural Municipality","Naugad Rural Municipality",
        "Marma Rural Municipality","	Lekam Rural Municipality","	Byas Rural Municipality"
        ],

    "Doti" : [
         "	Dipayal Silgadhi Municipality","Shikhar Municipality","Purbichauki Rural Municipality",
        "Badikedar Rural Municipality","Jorayal Rural Municipality",
        "Sayal Rural Municipality","Adarsha Rural Municipality","	K.I.C. Rural Municipality","Bogatan Fudsil Rural Municipality	"
      ],

    "Kailali" : [
      "Dhangadhi Sub-Metropolitan City","Tikapur Municipality","	Ghodaghodi Municipality","Lamkichuha Municipality",
      "Bhajani Municipality","	Godavari Municipality","Gauriganga Municipality",
      "Janaki Rural Municipality","	Bardagoria Rural Municipality","Mohanyal Rural Municipality"
      ],

    "Kanchanpur" : [
    "	Bhimdutta Municipality","	Punawas Municipality","	Bedkot Municipality","Dodhara Chandani Municipality","Shuklaphanta Municipality","Belauri Municipality",
      " Krishnapur Municipality","Beldadi Rural Municipality","Laljhadi Rural Municipality"
  ]

  }

}
window.onload = function() {
  var subjectSel = document.getElementById("subject");
  var topicSel = document.getElementById("topic");
  var chapterSel = document.getElementById("chapter");
  for (var x in subjectObject) {
    subjectSel.options[subjectSel.options.length] = new Option(x, x);
  }
  subjectSel.onchange = function() {
   //empty Chapters- and Topics- dropdowns
          chapterSel.length = 1;
          topicSel.length = 1;
    //display correct values
    for (var y in subjectObject[this.value]) {
      topicSel.options[topicSel.options.length] = new Option(y, y);
    }
  }
  topicSel.onchange = function() {
 //empty Chapters dropdown
         chapterSel.length = 1;
    //display correct values
    var z = subjectObject[subjectSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
    }
  }
}
</script>

</head>

<body>

<!-- Logo and title -->
	<div class="navbg">
				<span id="logo">
					<img src="logo-2.png" width="130px" height="100px" alt="image couldn't load">
				</span>
				<span>	
					<h4>E-citizenship system</h4> 
				</span>
	</div>

	<!--<div class="container-title-50">
			<span>	
				<h4>E-citizenship system</h4> 
			</span>
		</div> -->

	<!-- registration form start -->
		<div class="rform-heading">
			<h2>E-citizenship registration form</h2>
			
			<p style="
				text-align: center;
				color: rgb(247, 34, 60);
			">Fields marked with * are mandatory </p>
		</div>
		 
		 <!-- Demographic details -->
		 <div class="demographic">
		 		<h4>General Details</h4>
		 </div>
		 <br>

<form method="POST" enctype="multipart/form-data" >  
	<!-- general info -->
<div class="generalinfo">
		
		<!-- left div -->
		<div class="dl" style=" float:left; position: absolute; margin-left: 50px;">

		<!-- <p><span class="error">* required field</span></p>	 -->
			
			<?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

				<br><br>
			<div class="username">
			  <label> First name: <span style="color: red;">* </span> 

				<input style=" transform: translate(100px); width: 250px; " type="text" name="firstname" placeholder= "Enter First name" required />

				<!-- <span class="error"><?php echo $nameErr;?></span> -->

			    </label>

				<br><br>
				
				<label >
				 Middle name: 
				<input style="transform: translate(93px); width: 250px;" type="text" name="middlename"  placeholder=" Enter Middle name"/>
				</label>   
				<br><br>

				<label> Last name:  <span style="color: red;">*</span> 
				<input style="transform: translate(100px); width: 250px;" type="text" name="lastname" placeholder="Enter Last name"required/>

				 </label>   

				 <br><br>
				 <label>
				 	Father first name:  <span style="color: red;">*</span> 
				 	<input style="transform: translate(52px); width: 250px;" type="text" name="ffname" placeholder="Enter father's first name" required>

				 	<br><br>
				 	
				 	Father middle name:
				 	<input style="transform: translate(40px); width: 250px;" type="text" name="fmname" placeholder="Enter father's middle name">
				 	
				 	<br><br>

				 	Father last name:  <span style="color: red;">*</span> 
				 	<input style="transform: translate(52px); width: 250px;" type="text" name="flname" placeholder="Enter father's lastname" required>

				 </label> 

				 <br><br>

				 <label>
				 	Mother name(full name): <span style="color: red;">*</span> 
				 	<input style="transform: translate(12px); width: 250px;" type="text" name="mname" placeholder="Enter mother's name" required>

				 	
				 
				 </label> 

				 <br><br>
				 
				 <label>
				 	Grandfather name (full name):  <span style="color: red;">*</span> 
				 	<input style="transform: translate(19px); width: 250px;" type="text" name="gname" placeholder="Enter grandfather's name" required >
				 </label> 

			</div>
			<br>
		</div>

		<br><br><br><br>

<!-- right div -->

<div class="dr" style="float: right; left: 800px; position: absolute;">

		<div class="dob">

				<!-- <label>DOB <span style="color: red;">*</span></label>
				<input  type="date" name="dob" id="DOB"> 
				<span id="message" style="color: red;"></span>
				 -->

				 <!-- method 2 -->
				 <label>DOB <span style="color: red;">*</span></label>
				 <input  type="text" name="dob" id="DOB" placeholder="month-day-year">
				<br><br>
		</div>	

			<div class="uage"> 
				<!--<label > Age<span style="color: red;">*</span> </label>    
					<span style="border:1px solid black;" name="age" id="agee">	</span> 
					<input type="" required  name="" onmouseover="calage()"/> -->
					<label >Age<span style="color: red;">*</span> </label>
					<input type="number" required  name="age" placeholder="Enter your age in digits" />
									
			</div>
				<br> 
				<div class="Gender">
					<label>Gender	<span style="color: red;">*</span></label>
					<select name="gender">
					<option value="">Select</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
					<option value="other">Other</option>
					<span class="error">*</span>
					</select>
				</div>

				<br>
			<div class="contact">
				<label	>Mobile no: <input type="text" name="mnum" maxlength="10"></label>
			</div>		
			<br>
			<div class="citizenship_type">
					<label>Citizenship type:</label>
					<select name="citizen_type">
						<option value="" disabled selected>select type</option>
						<option value="decent">Citizenship by decent</option>
						<option value="birth" disabled>Citizenship by Birth</option>
						<option value="naturalised" disabled>Naturalised citizenship</option>
					</select>	
			</div>
	</div>

	<br><br>
	<br><br><br>

	<input style="
	margin-left: 500px;
	transform: translate(100px,260px);
	padding:5px;
	" type="submit" name="submit" value="save details">

</div>
</form>


<!-- Address section -->
<form method="POST" accept="" action="address.php">
	<div class="address_Sec">
		<h4 style="margin-top: 300px;
			background-color: blueviolet;
			text-align: center;
			color: white;
			letter-spacing: 1px;
			text-transform: capitalize;


		">
			Address section
		</h4>
			<br>
			<h5 style="
			margin-left: 40px;
			font-size: 30px;
			font-family: 'Bitter', serif;
			font-weight: bold;
			color: dodgerblue;
			text-align: center;
			letter-spacing: 1px;

			">Permanent Address</h5>
				<br>
				<!-- left div -->
				<div class="dl" style=" float:left; position: absolute; margin-left: 200px;">

				<div class="province">
					  <label>Province(प्रदेश):</label>
   						<select name="subject" id="subject" required>
   						 	<option value="" selected="selected" disabled>Select province</option>
 						</select>
						 <br><br>		
				</div>

					<br><br>

						<div class="leftdiv">
							<label>Village/nagar:</label> 
								<select name="chapter" id="chapter" required>
						 			<option value="" selected="selected" disabled>Please select nagar</option>
								</select>
						</div>	
						<br><br>
				</div>
			
			<!-- right div -->
				<div class="dr" style=" float:right; position: absolute; left: 800px;">
						<div class="district container">
						<label> District : </label> &nbsp;&nbsp;
						<select name="topic" id="topic" required>
						    <option value="" selected="selected" disabled>Please select district</option>
						</select>	
						</div>

						<br><br>
						<label>
							Ward no : <input type="number" name="wno" required >
						</label>
						
				</div>
				
	</div>
	<input style="
	margin-left: 500px;
	transform: translate(100px,160px);
	padding: 5px;
	" type="submit" name="addss_sub" value="save address">
</form>

<!-- documents section -->


<div class="docSec">
		<h4 style="
			margin-top: 200px;
			text-align: center;
			background-color: blueviolet;
			color: white;
			letter-spacing: 1px;
			text-transform: capitalize;
		">Documents Section</h4>

		<!-- left div -->
				<div class="dl" style=" float:left; position: absolute; margin-left: 200px;">
					<br><br>
					<div class="documents">

							<?php if (isset($_GET['error'])): ?>
							<p><?php echo $_GET['error']; ?></p>
								<?php endif ?>


						<form action="birth_cert.php" method="POST" enctype="multipart/form-data">
								
							<!-- birth certificate number -->
								<label>
									Birth Certificates : <input type="file" name="my_image" required>
								</label><br>
								<input style="transform: translate(10px,5px);  font-size: 13px;" type="submit" name="bcerts" value="upload birth certificate">
						</form>

						<br><br>

							<form action="wardsipharis.php" method="POST" enctype="multipart/form-data">
										<!-- wada sipharis -->
											<label style="
												">
												Ward Sipharis : <input type="file" name="ward_sipharis" required> 
											</label><br>
											<input style="transform: translate(10px,5px);  font-size: 13px;" type="submit" name="wards" value="upload ward sipharis">
							</form>
							<br><br>
						
					</div>
				<br>
				</div>



<!-- right div -->

<form method="POST" action="file_upload.php" >
				<div class="dr" style=" position: absolute; float:right; left: 800px;">
					<br><br>
					<div class="documents">
						
						
						<!-- <label>
							Father's citizenship : <input type="file" name="fc_cert" required>
						</label>
						 -->

						<label>
							Birth Certificates no : <input type="number" name="bcert_no" placeholder="xx-xxxx" required>
						</label>
						<br><br>
						<label>
							Father's citizenship no : <input type="number" name="fc_certno" placeholder="xx-xx-xx-xxxxx" required>
						</label>
					</div>
					<br>
					
				<br>
				</div>

	<!-- wada sipharis 2 -->
				<!-- <p  style="
					margin-left: 350px;
					color: red;
				" >यदि बाबु र सन्तानको थर फरक पर्न गएको खण्डमा सम्बन्धित वडाको सिफारिस अपलोड गर्न तल क्लिक गर्नुहोस्  </p>
				
				<label style="
					margin-left: 500px;
				">
					Ward Sipharis : <input type="file" name="wsipharis"> 
				</label> -->
<br><br><br>
<br><br><br>
<br><br><br>
<hr>
<div id="submit" style="
		margin-left: 550px;
		">
			<label>
				<input style="
				 margin-left:-80px  ; 
				 transform: translate(-17px,4px);
				  width: 60px; 
				  height: 20px; 
				  color: blue; 
				  cursor: pointer;" type="checkbox" name="chkbox" required >
				
				<span style="
				color: blue;
				font-size: 17px;
				font-family: 'Bitter', serif;
				font-style: italic;
				margin-left: -35px;
				">All the above information are true and valid</span>
			</label>	
			<br><br>

			<input style="width: 90px; padding: 2px; " type="submit" value="Apply now" name="sub">

			<br><br>
		</div>
</form>

</div>





<!-- <script type="text/javascript" src="../htmlfile/dynamicDropdown.js"></script> -->



<!-- footer -->

  <footer >
  		<div style="
  			background-color: blueviolet ;
  			height: 80px;
  		">	<br>

  				<p
  				style="
  				text-align: center;
  				color: ghostwhite;
  				margin-top: 8px;	
  				"> E-citizenship system  |  @ 2023 All right reserved </p>
  		</div>
  </footer>
</body>
</html>