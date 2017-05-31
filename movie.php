<?php

define('DB_NAME','mini-project');
define('DB_USER','root');
define('DB_HOST','localhost');
define('DB_PASS','mysql2016');

    function connect()
	{
	  mysql_connect(DB_HOST,DB_USER,DB_PASS) or die('Could not  connect to server' .mysql_error());
	  mysql_select_db(DB_NAME); 
	}
	
    function query1()
	{
	$myData=mysql_query("SELECT * from movies");
	while($record=mysql_fetch_array($myData)){
	echo '<option value="' . $record['m_id'] . '">' . $record['m_name'] . '</option>';
	}
	}
?>

<!DOCTYPE HTML>
<html>
<head>
<style>
#select_heading{
border:dotted 2.2px gray;
background-color:orange;
color:black;
}

.dropbtn {
    background-color: #4CAF50;
    color: black;
    font-size: 16px;
    border:0px solid green;
}

</style>

</head>
<body >
<h2 style="font-family:Brushed; color:blue;"> MINI PROJECT -> ONLINE MOVIE TICKET BOOKING </h2>
<marquee behavior="scroll" scrollamount="7.3" scrolldelay="60" direction="left">
<img src="pic1.jpg" width="500" height="500" alt="update your browser" id="movie_1" onclick="movie_1()"/>
<img src="pic2.jpg" width="500" height="500" alt="update your browser" id="movie_2" onclick="movie_2()"/>
<img src="pic3.jpg" width="500" height="500" alt="update your browser" id="movie_3" onclick="movie_3()"/>
<img src="pic4.jpg" width="500" height="500" alt="update your browser" id="movie_4" onclick="movie_4()"/>
<img src="pic5.png" width="500" height="500" alt="update your browser" id="movie_5" onclick="movie_5()"/>
<img src="pic6.jpg" width="500" height="500" alt="update your browser" id="movie_6" onclick="movie_6()"/>
<img src="pic7.jpg" width="500" height="500" alt="update your browser" id="movie_7" onclick="movie_7()"/>
<img src="pic8.jpg" width="500" height="500" alt="update your browser" id="movie_8" onclick="movie_8()"/>
<img src="pic9.jpg" width="400" height="500" alt="update your browser" id="movie_9" onclick="movie_9()"/>
<img src="pic10.jpg" width="600" height="500" alt="update your browser" id="movie_10" onclick="movie_10()"/>
<img src="pic11.jpg" width="450" height="500" alt="update your browser" id="movie_11" onclick="movie_11()"/>
</marquee>

<script>
function movie_1() {
    var image = document.getElementById('movie_1');
    var str1="PLOT:-";
	document.write("<h2>" + str1.fontsize(7)+ "</h2>");
	var str2="Two young American couples (Jeff and Amy, and Eric and Stacy) enjoy their vacation in Mexico. They meet Mathias, a German tourist, who is looking for his brother Heinrich. His last known location is an archaeological dig at a remote Mayan ruin in the jungle. They are also joined by Dimitri, Mathias's friend. The group reaches the ruins of a Mayan temple, and are confronted by Mayan villagers with guns and bows. Mathias tries to explain their purpose, but the villagers do not understand Spanish or English. When Amy accidentally touches some shrubbery growing on the ruin, the villagers become increasingly agitated. Dimitri approaches the villagers, hoping to appease them, but they shoot and kill him. The rest of the group flees up the steps of the ruins";
	document.write("<p>" + str2.fontsize(5) + "</p>");
	var str3="At the top, they find an abandoned camp and a shaft in the center. The group cannot call for help since Eric's phone has no signal. They hear a cell phone ringing from somewhere inside the ruins. Believing it is Heinrich's phone ringing, the rest of the group lowers Mathias down the shaft with a rope. The rope breaks and Mathias falls, becoming completely paralyzed. Amy and Jeff descend the temple steps hoping to reason with the Mayans, but to no success. In anger, Amy throws a clump of vines at them and hits a young boy, whom the Mayans promptly kill. They realize the Mayans are afraid of the vines, and won't let them go since they have touched them. Later, Stacy and Amy descend the shaft to help Mathias and to find the phone. Jeff and Eric rig a backboard and bring Mathias out of the shaft.";	
	document.write("<p>" + str3.fontsize(5) + "</p>");
	document.body.style.background = "#f3f3f3 url('movie-plot3.jpg') no-repeat";		
}

function movie_2() {
    var image = document.getElementById('movie_2');
    var str1="PLOT:-";
	document.write("<h2>" + str1.fontsize(7)+ "</h2>");
	var str2="Raees (English: Wealthy) is an upcoming Indian Crime Drama film directed by Rahul Dholakia and produced by Gauri Khan, Ritesh Sidhwani and Farhan Akhtar under their banners Red Chillies Entertainment and Excel Entertainment. It stars Shah Rukh Khan, Nawazuddin Siddiqui and Mahira Khan. Sunny Leone has been roped in for a special song in the film. Raees is scheduled to be released on 6 July 2016.";
	document.write("<p>" + str2.fontsize(5) + "</p>");
	var str3="The film is set in 1980s Gujarat. It tells the story of the bootlegger Raees Khan (Shah Rukh Khan) whose business is highly challenged and eventually thwarted by a police officer (Nawazuddin Siddiqui).";	
	document.write("<p>" + str3.fontsize(5) + "</p>");
	document.body.style.background = "#f3f3f3 url('movie-plot3.jpg') no-repeat";		
}

function movie_3() {
    var image = document.getElementById('movie_3');
    var str1="PLOT:-";
	document.write("<h2>" + str1.fontsize(7)+ "</h2>");
	var str2="In the Chinese Spirit Realm, Master Oogway (Randall Duk Kim) fights against an adversary named Kai, (J. K. Simmons) who has defeated other kung fu masters in the realm and taken their chi, turning them into small jade charms. Oogway willingly gives in and also has his chi stolen, but not before warning Kai that the Dragon Warrior, Po (Jack Black), will stop him. Kai takes this as a challenge to steal the chi from the Dragon Warrior and returns to the mortal world using the masters' chi. Meanwhile, Master Shifu (Dustin Hoffman) announces his retirement from teaching to begin his 30 years training to master chi and passes the role of teacher to Po. Po is excited at first, but discovers that teaching kung fu is not as easy as he expected, as the Furious Five members Tigress (Angelina Jolie), Crane (David Cross), Mantis (Seth Rogen), Viper (Lucy Liu), and Monkey (Jackie Chan) are injured as a result. Po is demoralized as a teacher, which makes him question who he really is and whether he is the Dragon Warrior. In response, Shifu advises Po that instead of trying to be a teacher, he should try to be himself.";
	document.write("<p>" + str2.fontsize(5) + "</p>");
	var str3="In an ethereal golden pond, Grand Master Oogway appears to Po, and informs him his journey has come full circle, revealing his role by selecting Po as Dragon Warrior because of his descent from the ancient pandas, and his embodiment of the yin-yang. He also reveals his role in alerting Li to Po's survival, and declares Po his true successor. By choice, Po wields a mystic green yin-yang staff bestowed by Oogway to return to the mortal world. He and his extended family all return to the Valley, where they continue practicing their chi, as Po proudly gazes upon his legacy in the spot where his journey began.";	
	document.write("<p>" + str3.fontsize(5) + "</p>");
	document.body.style.background = "#f3f3f3 url('movie-plot3.jpg') no-repeat";		
}

function movie_4() {
    var image = document.getElementById('movie_4');
    var str1="PLOT:-";
	document.write("<h2>" + str1.fontsize(7)+ "</h2>");
	var str2="The Transporter Refueled (French: Le Transporteur : Héritage) is a 2016 French action thriller film directed by Camille Delamarre and written by Bill Collage, Adam Cooper, and Luc Besson. It is the fourth film in the Transporter franchise and the first film to be distributed by EuropaCorp in North America, but features a new cast, with Ed Skrein replacing Jason Statham as the title role of Frank Martin. It is the first installment of a planned Transporter reboot trilogy.";
	document.write("<p>" + str2.fontsize(5) + "</p>");
	var str3="Former special-operations mercenary Frank Martin is living a less perilous lifestyle than he had previously, transporting classified packages for questionable people. Then he took the contract from Anna following his 3 rules of no names, no questions and no renegotiations. According to the contract, he should be near the bank for her and her two packages. However, he finds himself thrust into danger again when prostitute Anna and her accomplices Gina, Maria, and Qiao orchestrate a bank robbery and kidnap Martin's father to confront and kill Arkady Karasov, a human trafficker who had victimized Anna years earlier. Anna's whole team robbed the friends of Arkady and framed his friends against him.";	
	document.write("<p>" + str3.fontsize(5) + "</p>");
	document.body.style.background = "#f3f3f3 url('movie-plot3.jpg') no-repeat";		
}

function movie_5() {
    var image = document.getElementById('movie_5');
    var str1="PLOT:-";
	document.write("<h2>" + str1.fontsize(7)+ "</h2>");
	var str2="The Conjuring 2 is an upcoming American supernatural horror film directed by James Wan. The film was written by Carey Hayes, Chad Hayes, Wan, and David Leslie Johnson. It is the sequel to the horror film The Conjuring, which was released on July 19, 2013. Patrick Wilson and Vera Farmiga reprise their roles as paranormal investigators and authors Ed and Lorraine Warren, who travel to England to investigate poltergeist activity at a council house in Enfield.The film is scheduled to be released in the United States on June 10, 2016 by Warner Bros. Pictures and New Line Cinema.";
	document.write("<p>" + str2.fontsize(5) + "</p>");
	var str3="In July 2013, prior to The Conjuring's release, Variety reported that New Line Cinema was already in the early stages of development of a sequel, following the positive test screenings and reviews of the first film. The initial screenplay for the sequel was by The Conjuring writers Chad and Carey Hayes and director James Wan, which was revised by Eric Heisserer. It was reported in January 2015 that David Leslie Johnson had been enlisted to provide additional script rewrites. The film deals with the case of the Enfield Poltergeist, which took place in the London Borough of Enfield from 1977 to 1979, and involved the alleged haunting of two sisters, aged 13 and 11, at their mother's council house.";	
	document.write("<p>" + str3.fontsize(5) + "</p>");
	document.body.style.background = "#f3f3f3 url('movie-plot3.jpg') no-repeat";		
}

function movie_6() {
    var image = document.getElementById('movie_6');
    var str1="PLOT:-";
	document.write("<h2>" + str1.fontsize(7)+ "</h2>");
	var str2="Warcraft (to be released internationally as Warcraft: The Beginning) is an upcoming American epic fantasy film directed by Duncan Jones and written by Jones, Charles Leavitt, and Chris Metzen. It is based on the Warcraft video game series and novels set in the world of Azeroth. The film stars Travis Fimmel, Paula Patton, Ben Foster, Dominic Cooper, Toby Kebbell, Ben Schnetzer, Robert Kazinsky, Daniel Wu, Ruth Negga, Anna Galvin and Clancy Brown. The film portrays the initial encounters between the humans and the orcs and takes place in a variety of locations established in the video game series.The film was first announced in 2006 as a project partnership between Legendary Pictures and the game's developer, Blizzard Entertainment.The film is set to be released by Universal Pictures on June 10, 2016.";
	document.write("<p>" + str2.fontsize(5) + "</p>");
	var str3="Azeroth stands on the brink of war as its civilization, led by the humans, faces a fearsome race of invaders: orc warriors fleeing their dying world of Draenor to find their place in another. As a gateway known as the Dark Portal opens to connect the two worlds, the humans face destruction while the orcs face extinction. Anduin Lothar (Travis Fimmel), leader of the humans, and Durotan (Toby Kebbell), leader of the orcs, are then sent on a collision course that will decide the fate of their families, their people and their home.";	
	document.write("<p>" + str3.fontsize(5) + "</p>");
	document.body.style.background = "#f3f3f3 url('movie-plot3.jpg') no-repeat";		
}

function movie_7() {
    var image = document.getElementById('movie_7');
    var str1="PLOT:-";
	document.write("<h2>" + str1.fontsize(7)+ "</h2>");
	var str2="Looper is a 2016 American science fiction action thriller film written and directed by Rian Johnson and starring Bruce Willis, Joseph Gordon-Levitt, and Emily Blunt. In the film, time travel is invented by the year 2074 (although it is immediately outlawed) and is used by criminal organizations to send those they want killed into the past where they are killed by loopers – assassins paid with silver bars strapped to the victims' backs. Joe, a looper, encounters himself when his older self is sent back in time to be killed.";
	document.write("<p>" + str2.fontsize(5) + "</p>");
	var str3="In 2044, 25-year-old Joe works for a Kansas City crime syndicate as a 'looper.' Since technology in the future has made it almost impossible to dispose of murdered bodies, the syndicate uses time travel which was invented in 2074 and subsequently outlawed. Managed by a man sent from the future named Abe, loopers kill and dispose of victims sent back in time whose faces are hidden by a bag. They are paid with bars of silver strapped to the target. To prevent connections to the use of illegal time travel, when a looper retires, his future self is sent back to 2044 as a target for his younger self, but with gold bars as a payment. This event is referred to as 'closing the loop' and signals the end of a looper's contract. Failing to close the loop is punishable by execution.";	
	document.write("<p>" + str3.fontsize(5) + "</p>");
	document.body.style.background = "#f3f3f3 url('movie-plot3.jpg') no-repeat";		
}

function movie_8() {
    var image = document.getElementById('movie_8');
    var str1="PLOT:-";
	document.write("<h2>" + str1.fontsize(7)+ "</h2>");
	var str2="Fast 8 (alternatively known as Fast & Furious 8 or Furious 8) is an upcoming American action film directed by F. Gary Gray and written by Chris Morgan. It is the eighth installment in The Fast and the Furious franchise. The cast currently consists of Vin Diesel, Dwayne Johnson, Michelle Rodriguez, Tyrese Gibson, Chris Bridges, Eva Mendes, Lucas Black, Kurt Russell, Charlize Theron and Jason Statham.";
	document.write("<p>" + str2.fontsize(5) + "</p>");
	var str3="Fast 8 marks the first film of the franchise other than The Fast and the Furious: Tokyo Drift (2006) not to star Paul Walker, who died in a single-vehicle crash on November 30, 2013, with filming of Furious 7 only half-completed.[1] The film is scheduled to be released on April 14, 2017.";	
	document.write("<p>" + str3.fontsize(5) + "</p>");
	document.body.style.background = "#f3f3f3 url('movie-plot3.jpg') no-repeat";		
}

function movie_9() {
    var image = document.getElementById('movie_9');
    var str1="PLOT:-";
	document.write("<h2>" + str1.fontsize(7)+ "</h2>");
	var str2="Jason Bourne (previously known as Bourne 5) is an upcoming American action spy thriller film directed by Paul Greengrass and written by Greengrass, Matt Damon and Christopher Rouse. It is the fifth film in the Bourne film series and the sequel to the 2012 film The Bourne Legacy. The film stars Damon, Julia Stiles, Alicia Vikander, Vincent Cassel and Tommy Lee Jones.Principal photography on the film commenced on September 8, 2015. The film is set to be released on July 29, 2016 by Universal Pictures. The title of the film was officially announced as Jason Bourne on February 7, 2016 during Super Bowl 50.";
	document.write("<p>" + str2.fontsize(5) + "</p>");
	var str3="Several years after his disappearance at the conclusion of The Bourne Ultimatum, Jason Bourne unexpectedly resurfaces at a time when the world is faced with unprecedented instability.";	
	document.write("<p>" + str3.fontsize(5) + "</p>");
	document.body.style.background = "#f3f3f3 url('movie-plot3.jpg') no-repeat";		
}

function movie_10() {
    var image = document.getElementById('movie_10');
    var str1="PLOT:-";
	document.write("<h2>" + str1.fontsize(7)+ "</h2>");
	var str2="Star Wars: The Force Awakens (also known as Star Wars: Episode VII – The Force Awakens) is a 2015 American epic space opera film directed, co-produced, and co-written by J. J. Abrams. The seventh installment in the main Star Wars film series, it stars Harrison Ford, Mark Hamill, Carrie Fisher, Adam Driver, Daisy Ridley, John Boyega, Oscar Isaac, Lupita Nyong'o, Andy Serkis, Domhnall Gleeson, Anthony Daniels, Peter Mayhew, and Max von Sydow. Produced by Lucasfilm and Abrams' Bad Robot Productions and distributed worldwide by Walt Disney Studios Motion Pictures, The Force Awakens is set 30 years after Return of the Jedi; it follows Rey, Finn, and Poe Dameron's search for Luke Skywalker and their fight alongside the Resistance, led by veterans of the Rebel Alliance, against Kylo Ren and the First Order, a successor group to the Galactic Empire.";
	document.write("<p>" + str2.fontsize(5) + "</p>");
	var str3="Approximately 30 years after the destruction of the second Death Star, Luke Skywalker, the last Jedi, has disappeared. The First Order has risen from the fallen Galactic Empire and seeks to eliminate Luke and the New Republic. The Resistance, backed by the Republic and led by Luke's twin sister, General Leia Organa, opposes them while searching for Luke to enlist his aid.Resistance pilot Poe Dameron meets village elder Lor San Tekka on the planet Jakku to obtain a map to Luke's location. Stormtroopers commanded by Kylo Ren destroy the village and capture Poe. Poe's droid BB-8 escapes with the map, and encounters the scavenger Rey near a junkyard settlement. Ren tortures Poe using the Force, and learns of BB-8. Stormtrooper FN-2187, unable to bring himself to kill for the First Order, frees Poe, and they escape in a stolen TIE fighter; Poe dubs FN-2187 'Finn'. They crash on Jakku, Finn appearing to be the only survivor. He encounters Rey and BB-8, but the First Order tracks them and launches an airstrike. Finn, Rey, and BB-8 flee the planet in a stolen, rundown ship, the Millennium Falcon.";	
	document.write("<p>" + str3.fontsize(5) + "</p>");
	document.body.style.background = "#f3f3f3 url('movie-plot3.jpg') no-repeat";		
}

function movie_11() {
    var image = document.getElementById('movie_11');
    var str1="PLOT:-";
	document.write("<h2>" + str1.fontsize(7)+ "</h2>");
	var str2="Tamasha (English: Spectacle) is a 2015 Indian romantic drama film written and directed by Imtiaz Ali and produced by Sajid Nadiadwala under his banner, Nadiadwala Grandson Entertainment. It features Ranbir Kapoor and Deepika Padukone in lead roles. The film score and soundtrack album was composed by A. R. Rahman, with lyrics from Irshad Kamil.";
	document.write("<p>" + str2.fontsize(5) + "</p>");
	var str3="The film opens with Ved Vardhan Sahni (Ranbir Kapoor) as an adult and Tara Maheshwari (Deepika Padukone), who are in a spectacle which shows of the monotonous life of a person in the corporate world.A scene in the spectacle turns to a flashback in Shimla where younger Ved Vardhan Sahni (Yash Sehgal) and his father (Javed Sheikh) return to home from school. As a child, Ved is fascinated by the stories narrated by a road side story teller (Piyush Mishra) who keeps mixing up his characters.In the present, the film moves to Corsica where Tara meets adult Ved. However, they have a verbal pact to keep their real identities undisclosed. They explore the island together. They make conversations as 'Don' and 'Mona Darling'. Running out of money, they put up a spectacle at an expensive restaurant. As Tara is set to leave for India, she is lovelorn despite a romantic friendship with Ved. The story flashes back to young Ved who questions the story-teller about the reason for happy times ending up quickly.";	
	document.write("<p>" + str3.fontsize(5) + "</p>");
	document.body.style.background = "#f3f3f3 url('movie-plot3.jpg') no-repeat";		
}



</script>

<?php connect() ?>
<form method="POST" action="theatre.php">
<h2 id="select_heading"><b><i>Which Movie Do You Want To Watch?</i><b></h2>
<div style="float:left;">
<select name="movies" style="width:200px;" >
<?php query1() ?>
  </select><br />
  <input type="submit"  value="Continue">
</div>
<div style="float:right;">
  <a href="admin.htm" class="dropbtn">ADMINISTRATOR (Click Here)</a>
  </div>
  </form>
  </form>
</body>
</html>