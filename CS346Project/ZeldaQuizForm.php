<?php
error_reporting(E_ALL | E_STRICT);
session_start();
?>
<!DOCTYPE HTML>
<html lang = "en">
	<head>
		<title> The Great Zelda Personality Inventory </title>
	    <!-- Zelda Personality Inventory -->
	    <meta charset = "UTF-8">
	    <meta name = "description" content = "Zelda Personality Inventory">
	    <meta name = "keywords" content = "legend_of_zelda, personality, character, quiz">
	    <meta name="author" content="Mayo" >
		<link rel = "stylesheet" type = "text/css" href = "ZeldaQuiz.css">
		<script src = "ZeldaQuiz.js" type = "text/javascript"></script>
	</head>
	<body>
		<a href = "ZeldaQuizHome.html" class = "headAnchor">
			<h1 id = "homeHead">
				The Great Zelda Personality Inventory
			</h1>
		</a>
		<p id = "quizPar">
			The quiz consists of 12 questions, each with 10 options. As of now the quiz results consist of
			<br />
			arguably the 10 most significant characters in The Legend of Zelda: Ocarina of Time.
			<br />
			<br />
			** Be sure to look over your answers before you submit! If any question 
			is left unanswered, you will be rerouted back to this page and all answers 
			will be reset! **
			<br />
			<br />
			Happy Quizzing!
		</p>
		<div>
			<form id = "quizForm" action = "QuizResult.php" method = "post" onsubmit = "allChecked()">
				<!-- Question #1 -->
				<p>
					<span class = "questionHeader">#1 For starters, everyone's favorite quiz question: Which of these colors/shades most appeals to you?</span>
					<br />
					<br />
					 <input type = "radio" name = "question1" value = "saria"> Pine Green
					 <br />
					 <br />
					 <input type = "radio" name = "question1" value = "darunia"> Red
					 <br />
					 <br />
					 <input type = "radio" name = "question1" value = "ruto"> Aqua Blue
					 <br />
					 <br />
					 <input type = "radio" name = "question1" value = "ganondorf"> Black
					 <br />
					 <br />
					 <input type = "radio" name = "question1" value = "nabooru"> Orange
					 <br />
					 <br />
					 <input type = "radio" name = "question1" value = "link"> Forest Green
					 <br />
					 <br />
					 <input type = "radio" name = "question1" value = "zelda"> White
					 <br />
					 <br />
					 <input type = "radio" name = "question1" value = "navi"> Sky Blue
					 <br />
					 <br />
					 <input type = "radio" name = "question1" value = "impa"> Purple
					 <br />
					 <br />
					 <input type = "radio" name = "question1" value = "rauru"> Yellow
					 <br />	
				</p>
				<!-- Question #2 -->
				<p>
					<span class = "questionHeader">#2 Next, how would people describe your personality?</span>
					<br />
					<br />
					 <input type = "radio" name = "question2" value = "darunia"> Gutsy, proud, and passionate
					 <br />
					 <br />
					 <input type = "radio" name = "question2" value = "ganondorf"> Cunning and ambitious
					 <br />
					 <br />
					 <input type = "radio" name = "question2" value = "zelda"> Quick-witted and dutiful
					 <br />
					 <br />
					 <input type = "radio" name = "question2" value = "navi"> Clingy, but kind and caring
					 <br />
					 <br />
					 <input type = "radio" name = "question2" value = "saria"> Sensitive and friendly
					 <br />
					 <br />
					 <input type = "radio" name = "question2" value = "impa"> Staunch and hard-nosed, but loyal and selfless
					 <br />
					 <br />
					 <input type = "radio" name = "question2" value = "link"> Brave, determined, selfless
					 <br />
					 <br />
					 <input type = "radio" name = "question2" value = "rauru"> Wise, knowledgeable, and protective
					 <br />
					 <br />
					 <input type = "radio" name = "question2" value = "ruto"> A little bit arrogant, but assertive and dutiful
					 <br />
					 <br />
					 <input type = "radio" name = "question2" value = "nabooru"> Bold, crafty, and rebellious
					 <br />	
				</p>
				<!-- Question #3 -->
				<p>
					<span class = "questionHeader">#3 What sort of locale would you prefer to live in ?</span>
					<br />
					<br />
					 <input type = "radio" name = "question3" value = "zelda"> In the middle of a big, bustling city
					 <br />
					 <br />
					 <input type = "radio" name = "question3" value = "rauru"> In a monastery
					 <br />
					 <br />
					 <input type = "radio" name = "question3" value = "nabooru"> Someplace warm and sandy
					 <br />
					 <br />
					 <input type = "radio" name = "question3" value = "link"> Somewhere out in the country, away from the noise of the city
					 <br />
					 <br />
					 <input type = "radio" name = "question3" value = "ruto"> In a coastal town overlooking the sea
					 <br />
					 <br />
					 <input type = "radio" name = "question3" value = "ganondorf"> In a city of my own design
					 <br />
					 <br />
					 <input type = "radio" name = "question3" value = "saria"> In a nice cabin in the middle of the woods
					 <br />
					 <br />
					 <input type = "radio" name = "question3" value = "darunia"> Somewhere high up in the mountains
					 <br />
					 <br />
					 <input type = "radio" name = "question3" value = "navi"> Wherever the guy out in the country is
					 <br />
					 <br />
					 <input type = "radio" name = "question3" value = "impa"> In a secluded suburb of a city
					 <br />	
				</p>
				<!-- Question #4 -->
				<p>
					<span class = "questionHeader">#4 Out of the following, what is your favorite movie genre or sub-genre?</span>
					<br />
					<br />
					 <input type = "radio" name = "question4" value = "navi"> Fantasy
					 <br />
					 <br />
					 <input type = "radio" name = "question4" value = "impa"> Horror
					 <br />
					 <br />
					 <input type = "radio" name = "question4" value = "ruto"> Romantic comedy
					 <br />
					 <br />
					 <input type = "radio" name = "question4" value = "saria"> Nature documentaries
					 <br />
					 <br />
					 <input type = "radio" name = "question4" value = "nabooru"> Spy films
					 <br />
					 <br />
					 <input type = "radio" name = "question4" value = "zelda"> Political drama
					 <br />
					 <br />
					 <input type = "radio" name = "question4" value = "link"> Swashbuckler
					 <br />
					 <br />
					 <input type = "radio" name = "question4" value = "rauru"> Hard science-fiction
					 <br />
					 <br />
					 <input type = "radio" name = "question4" value = "darunia"> Action thriller
					 <br />
					 <br />
					 <input type = "radio" name = "question4" value = "ganondorf"> Snuff films
					 <br />	
				</p>
				<!-- Question #5 -->
				<p>
					<span class = "questionHeader">#5 Which of these would you have for a pet?</span>
					<br />
					<br />
					 <input type = "radio" name = "question5" value = "nabooru"> A fennec fox
					 <br />
					 <br />
					 <input type = "radio" name = "question5" value = "link"> A horse
					 <br />
					 <br />
					 <input type = "radio" name = "question5" value = "ganondorf"> A hellhound
					 <br />
					 <br />
					 <input type = "radio" name = "question5" value = "impa"> A chameleon
					 <br />
					 <br />
					 <input type = "radio" name = "question5" value = "saria"> The animals in the forest are like my pets
					 <br />
					 <br />
					 <input type = "radio" name = "question5" value = "zelda"> A saluki (elegant Middle-Eastern hunting dog)
					 <br />
					 <br />
					 <input type = "radio" name = "question5" value = "ruto"> A beautiful, exotic fish
					 <br />
					 <br />
					 <input type = "radio" name = "question5" value = "navi"> I am a pet!
					 <br />
					 <br />
					 <input type = "radio" name = "question5" value = "rauru"> A great-horned owl
					 <br />
					 <br />
					 <input type = "radio" name = "question5" value = "darunia"> A pet rock
					 <br />	
				</p>
				<!-- Question #6 -->
				<p>
					<span class = "questionHeader">#6 Which of these locations piques your interest the most?</span>
					<br />
					<br />
					 <input type = "radio" name = "question6" value = "rauru"> A sacred brick temple eternally bathed in sunlight
					 <br />
					 <br />
					 <input type = "radio" name = "question6" value = "ganondorf"> A sinister yet regal-looking castle floating over a lake of lava
					 <br />
					 <br />
					 <input type = "radio" name = "question6" value = "saria"> A beautiful but eerie stronghold deep in the woods, haunted by spirits and undead
					 <br />
					 <br />
					 <input type = "radio" name = "question6" value = "zelda"> A magnificent castle with lush gardens and many running waterways
					 <br />
					 <br />
					 <input type = "radio" name = "question6" value = "nabooru"> An enchanting, mystical stone temple set far out in the desert
					 <br />
					 <br />
					 <input type = "radio" name = "question6" value = "navi"> Inside of a giant, personified tree
					 <br />
					 <br />
					 <input type = "radio" name = "question6" value = "impa"> An ominous crypt and execution ground, haunted by all manner of dark creatures
					 <br />
					 <br />
					 <input type = "radio" name = "question6" value = "darunia"> A brilliant, trap-filled temple built into a series of volcanic caverns
					 <br />
					 <br />
					 <input type = "radio" name = "question6" value = "link"> A peaceful, wide-open horse ranch
					 <br />
					 <br />
					 <input type = "radio" name = "question6" value = "ruto"> A serene, complex temple submerged in water and built into a lake bed
					 <br />	
				</p>
				<!-- Question #7 -->
				<p>
					<span class = "questionHeader">#7 Which set of equipment most appeals to you?</span>
					<br />
					<br />
					 <input type = "radio" name = "question7" value = "saria"> Bow and arrows and a grappling hook
					 <br />
					 <br />
					 <input type = "radio" name = "question7" value = "link"> A legendary sword and a magical instrument that can manipulate the flow of time
					 <br />
					 <br />
					 <input type = "radio" name = "question7" value = "impa"> A mystical artifact that lets one see through deception and boots that let one float over air
					 <br />
					 <br />
					 <input type = "radio" name = "question7" value = "darunia"> Flame-resistant clothing and a powerful hammer that can cause tremors and smash boulders
					 <br />
					 <br />
					 <input type = "radio" name = "question7" value = "navi"> Nothing
					 <br />
					 <br />
					 <input type = "radio" name = "question7" value = "ganondorf"> Black magic and a horde of evil followers
					 <br />
					 <br />
					 <input type = "radio" name = "question7" value = "ruto"> A diving suit and a longer grappling hook
					 <br />
					 <br />
					 <input type = "radio" name = "question7" value = "zelda"> Holy magic and ninja training
					 <br />
					 <br />
					 <input type = "radio" name = "question7" value = "nabooru"> Gauntlets that give one incredible physical strength and a shield that deflects magic
					 <br />
					 <br />
					 <input type = "radio" name = "question7" value = "rauru"> Arrows of light
					 <br />	
				</p>
				<!-- Question #8 -->
				<p>
					<span class = "questionHeader">#8 Complete this statement: A man walks into a bar and...</span>
					<br />
					<br />
					 <input type = "radio" name = "question8" value = "nabooru"> Eyes the cutie at the other side of the bar
					 <br />
					 <br />
					 <input type = "radio" name = "question8" value = "zelda"> Orders a cold one
					 <br />
					 <br />
					 <input type = "radio" name = "question8" value = "link"> Walks right back out
					 <br />
					 <br />
					 <input type = "radio" name = "question8" value = "rauru"> Pulls out a book
					 <br />
					 <br />
					 <input type = "radio" name = "question8" value = "ruto"> Compares it to the last bar he walked into
					 <br />
					 <br />
					 <input type = "radio" name = "question8" value = "saria"> Says "Ow!"
					 <br />
					 <br />
					 <input type = "radio" name = "question8" value = "ganondorf"> Threatens to buy the place out
					 <br />
					 <br />
					 <input type = "radio" name = "question8" value = "darunia"> Has one with the guys
					 <br />
					 <br />
					 <input type = "radio" name = "question8" value = "navi"> Is too young to go into a bar
					 <br />
					 <br />
					 <input type = "radio" name = "question8" value = "impa"> Nobody realizes it
					 <br />	
				</p>
				<!-- Question #9 -->
				<p>
					<span class = "questionHeader">#9 Time for some role-playing! If you were on an adventure, how would you most likely meet your end, if ever?</span>
					<br />
					<br />
					 <input type = "radio" name = "question9" value = "link"> Dying while fighting valiantly in battle
					 <br />
					 <br />
					 <input type = "radio" name = "question9" value = "ganondorf"> Purged by holy light
					 <br />
					 <br />
					 <input type = "radio" name = "question9" value = "navi"> Crushed like an insect
					 <br />
					 <br />
					 <input type = "radio" name = "question9" value = "darunia"> Incinerated
					 <br />
					 <br />
					 <input type = "radio" name = "question9" value = "impa"> Falling down a bottomless pit
					 <br />
					 <br />
					 <input type = "radio" name = "question9" value = "zelda"> Swallowed by darkness
					 <br />
					 <br />
					 <input type = "radio" name = "question9" value = "ruto"> Trapped under a frozen lake
					 <br />
					 <br />
					 <input type = "radio" name = "question9" value = "saria"> Eaten by a monster in lurking the woods
					 <br />
					 <br />
					 <input type = "radio" name = "question9" value = "nabooru"> Drowning in quicksand
					 <br />
					 <br />
					 <input type = "radio" name = "question9" value = "rauru"> Dying of old age
					 <br />	
				</p>
				<!-- Question #10 -->
				<p>
					<span class = "questionHeader">#10 What do you spend your time doing when you're not busy saving/conquering the world?</span>
					<br />
					<br />
					 <input type = "radio" name = "question10" value = "zelda"> Bombchu bowling (crawling bomb that looks like a mouse)
					 <br />
					 <br />
					 <input type = "radio" name = "question10" value = "saria"> Playing my favorite instrument in my special place
					 <br />
					 <br />
					 <input type = "radio" name = "question10" value = "impa"> Going to the town shooting gallery
					 <br />
					 <br />
					 <input type = "radio" name = "question10" value = "link"> Riding my horse
					 <br />
					 <br />
					 <input type = "radio" name = "question10" value = "darunia"> Playing bomb-sketball
					 <br />
					 <br />
					 <input type = "radio" name = "question10" value = "ganondorf"> Plotting to conquer the world
					 <br />
					 <br />
					 <input type = "radio" name = "question10" value = "navi"> Nagging my friends
					 <br />
					 <br />
					 <input type = "radio" name = "question10" value = "ruto"> Waterfall diving
					 <br />
					 <br />
					 <input type = "radio" name = "question10"  value = "nabooru"> Horseback archery
					 <br />
					 <br />
					 <input type = "radio" name = "question10" value = "rauru"> Waiting for something
					 <br />	
				</p>
				<!-- Question #11 -->
				<p>
					<span class = "questionHeader">#11 You're about to be attacked by a flock of angry chickens! What do you do!?</span>
					<br />
					<br />
					 <input type = "radio" name = "question11" value = "nabooru"> Face them head-on, I'm too strong to be taken down by a bunch of chickens!
					 <br />
					 <br />
					 <input type = "radio" name = "question11" value = "link"> Run like hell until they give up the chase
					 <br />
					 <br />
					 <input type = "radio" name = "question11" value = "ruto"> Coerce someone else into distracting them while you run away
					 <br />
					 <br />
					 <input type = "radio" name = "question11" value = "saria"> They won't be angry for long, they just need someone to sooth them
					 <br />
					 <br />
					 <input type = "radio" name = "question11" value = "navi"> Hide under someone's hat
					 <br />
					 <br />
					 <input type = "radio" name = "question11" value = "rauru"> Transform into a bird and fly to safety
					 <br />
					 <br />
					 <input type = "radio" name = "question11" value = "darunia"> I'm solid as a rock! They can't hurt me!
					 <br />
					 <br />
					 <input type = "radio" name = "question11" value = "ganondorf"> Use magic to fry them all and eat them afterward
					 <br />
					 <br />
					 <input type = "radio" name = "question11" value = "zelda"> Cast a barrier spell to keep them at bay
					 <br />
					 <br />
					 <input type = "radio" name = "question11" value = "impa"> Lose them with stealth and agility
					 <br />	
				</p>
				<!-- Question #12 -->
				<p>
					<span class = "questionHeader">#12 Congrats! You made it to the end! So... did you enjoy taking the quiz?</span>
					<br />
					<br />
					 <input type = "radio" name = "question12" value = "link"> Yeah, it was pretty fun!
					 <br />
					 <br />
					 <input type = "radio" name = "question12" value = "ganondorf"> You will make another quiz, even greater than the last! I command it!
					 <br />
					 <br />
					 <input type = "radio" name = "question12" value = "ruto"> Hmph. I suppose I enjoyed it a little. Don't, get the wrong idea.
					 <br />
					 <br />
					 <input type = "radio" name = "question12" value = "zelda"> Yes, it was most enlightening.
					 <br />
					 <br />
					 <input type = "radio" name = "question12" value = "rauru"> I'm getting too old for these things...
					 <br />
					 <br />
					 <input type = "radio" name = "question12" value = "impa"> I have more important things to do than taking silly quizzes.
					 <br />
					 <br />
					 <input type = "radio" name = "question12" value = "darunia"> You bet, brother!
					 <br />
					 <br />
					 <input type = "radio" name = "question12" value = "navi"> Hey! Listen! Yes I did!!
					 <br />
					 <br />
					 <input type = "radio" name = "question12" value = "saria"> Indeed I did! Thank you very much!
					 <br />
					 <br />
					 <input type = "radio" name = "question12" value = "nabooru"> Do YOU think I enjoyed it?
					 <br />	
				</p>
				<input type = "submit" class = "butt" value = "Get Your Result!"/>
			</form>
		</div>
		<br />
		<a href = "ZeldaQuizHome.html"> Home </a>
		<br />
		<br />
		<span class = "backgroundCredit"> *Background by wallrun@deviantart.com </span>
		<br />
		<br />
		<a href = "http://validator.w3.org/check/referer">Validate Me</a>
		<br />
		<br />
	</body>
</html>
<?php unset($_SESSION); ?>