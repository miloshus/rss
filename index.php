<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Page Title</title>
<style>
			.post{
				width: 500px;
				height: 400px;
				background-color: lightblue;
				float: left;
				margin : 10px 10px 40px 5px;
				
				}
				
				.post img{
					
					width: 400px;
				height: 200px;
				}
		</style>		
				
				
				
			
</head>
<body>

<form action="index.php" method="POST">
<select name="rss">
<option value="http://www.b92.net/info/rss/sport.xml">b92
</option>

<option value="http://www.blic.rs/rss/Slobodno-vreme/Vesti">blic
</option>


<option value="http://www.kurir.rs/rss/sport/">kurir
</option>



</select>
<input type = "submit" value = "rss"/> 
</form>




<?php



					include_once 'getRSS.php';
					if(isset($_POST['rss'])){
						$link= $_POST['rss'];
						$posts = getRSS($link);
						
						foreach($posts as $post) {
							echo "<div class='post'>";
							echo "<h3>" . $post['title'] . "</h3>";
							echo "<p>" . $post['description'] . "</p>";
							echo "<p>" . $post['pubDate'] . "</p>";
							echo "<a href=' " . $post['link'] . " '>Opsirnije </a>";
							echo "</div>";
						}
						
					}

?>

<div class = "post">
</div>

</body>
</html>