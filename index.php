<!DOCTYPE html>
	<?php
		require('head.php');
	?>
	<body>
		<div class="wrapper">
			<header class="main-head">My awesome website under construction</header>
			<nav class="main-nav">
				<ul>
					<li><a href="">Nav 1</a></li>
					<li><a href="">Nav 2</a></li>
					<li><a href="">Nav 3</a></li>
				</ul>
			</nav>
			<article class="content">
				<h1>This is some random article</h1>
				<p>Mauris pretium nisi condimentum, vulputate lorem sit amet, euismod leo. Aliquam erat volutpat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus ornare dolor quis ante aliquam, at ultricies nibh lacinia. Sed semper dui est, ut hendrerit leo auctor ac. Praesent at dictum orci. Aliquam tempus, metus at dictum egestas, enim enim sagittis tellus, sit amet faucibus dolor massa non diam. Phasellus consequat purus et diam faucibus pretium. Mauris consectetur euismod ex vel pulvinar. </p>
				<br/><br/>
				<div>
					<form>
					<table>
						<thead>
							<tr>
								<th>Add</th>
								<th>Values</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<td>Extras:</td>
								<td><textarea rows="4" cols="50" name="comment" class="extra">Enter text here...</textarea></td>
							</tr>
						</tfoot>
						<tbody>
							<tr>
								<td>Login:</td>
								<td><input type="text" class="login"></td>
							</tr>
							<tr>
								<td>Password:</td>
								<td><input type="text" class="pass"></td>
							</tr>
							<tr>
								<td>Repeat Password:</td>
								<td><input type="text" class="pass2"></td>
							</tr>
							</tbody>
						</table> 
					</form>
				</div>
				<div>
				<div id="fb-root"></div>
				  <script>(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1";
					fjs.parentNode.insertBefore(js, fjs);
				  }(document, 'script', 'facebook-jssdk'));</script>

				  <!-- Your like button code -->
				  <div class="fb-like" 
					data-href="https://www.your-domain.com/your-page.html" 
					data-layout="standard" 
					data-action="like" 
					data-show-faces="true">
				  </div>
				</div>
				<br/><br/>
				<h1>Fill in the sudoku puzzle!</h1>
				<br/>
				<p>INSTRUCTION: Red cells have invalid input - try to insert numbers from range 1 to 9 inclusive and hit the 'check' button to see if the puzzle is filled in correctly.</p>
				<br/>
				<div id="sudoku">
				</div>
				<input class="prettybutton" type='submit' value="check" onClick="checkSudoku()"/>
				<input class="prettybutton" type='submit' value="solve sudoku" onClick="solveSudoku()"/>
			</article>
			<aside class="side">Sidebar</aside>
			<div class="ad">Advertising</div>
			<footer class="main-footer">The footer</footer>
		</div>

	</body>
</html>