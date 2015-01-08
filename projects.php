<?php 
require_once('inc/config.php');
$pageTitle = "My Projects"; 
$section ="projects";
include('inc/header.php'); ?>


<div class="section projects">
	<div class="container-fluid">
		<div class="head">
			<h1>My Projects</h1>
			<ul class="proj nav nav-pills">

				<li role="presentation"><a href="#hackRPI">Hack RPI</a></li>
				<li role="presentation"><a href="#treehousePHP">Team Treehouse</a></li>
                <li role="presentation"><a href="#website">First Website</a></li>
			</ul>
		</div>


		<div class = "projects">
			<div class = "project" id="hackRPI">
				<div class="proj first">
					<h2>HackRPI</h2>
					<p>Competed in my first hackathon ever at RPI in November, 2014.
						My team used the Myo, a device that you wear around your wrist 
						that monitors your movement and allows you to interact with applications
						through C++ and though Lua, as well as a user-made framework that allowed
						the myo to be read with javascript directly into a website. This was a huge
						learning experience for me as a programmer in the fields of javascript, lua,
						c++, and most importantly, how to opterate with a team of programmers
						who are a lot smarter than I am.
					</p>
				</div>	

				<div class="proj second"> 
					<img class="hackrpipic" src="<?php echo BASEURL.'img/hackRPI.png';?>">
				</div>			

			</div>
			<div class = "project" id="treehousePHP">
				<div class="proj first">
					<h2>Treehouse PHP</h2>
					<p>Completed entire HTML, CSS, PHP and Javascript course, 
						which included popular frameworks such as JQuery and Sass.
						I also completely overhauled the CSS to make it 
						responsive with mobile devices, without the use of bootstrap, 
						for practice on CSS and styling, as well as further PHP customization.
					</p>
				</div>

				<div class="proj second"> 
					<a href="/treehousephp/"><img class="treehousepic" src="<?php echo BASEURL.'img/treehousePHP.png';?>"></a>
				</div>	
			</div>
            <div class = "project" id="website">
				<div class="proj first">
					<h2>First Live Website</h2>
					<p>The website youre currently on is my very first live website that I built
                        from scratch!
					</p>
				</div>
				<div class="proj second"> 
				</div>	
			</div>
		</div>
	</div>
</div>


<?php include('inc/footer.php'); ?>