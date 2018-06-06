function insertZero()
{
	return 0.5 > Math.random();
}
function onloadfunction()
{
	var solution = "726493815315728946489651237852147693673985124941362758194836572567214389238579461";

	var i,j, game = "";
	for(i=0; i<9; i++)
	{
		game += "<div class='row'>";
		for(j=0; j<9; j++)
		{
			var ans = i*9+j;
			ans = solution[ans];
			if (insertZero())
			{
				ans = 0;
			}
			game += "<input class='cell' type='number' min=1 max=9 required pattern=[1-9] value="+ ans +">";
		}
		game += "</div>";
	}
	document.getElementById("sudoku").innerHTML = game;
}

function checkSudoku()
{
	var solution = "726493815315728946489651237852147693673985124941362758194836572567214389238579461";
	var x = '';
	for(i=0; i<9; i++)
	{
		for(j=0; j<9; j++)
		{
			var ans = i*9+j;
			x += document.getElementsByClassName("cell")[ans].value;
		}
	}
	if (x == solution)
	{
		alert("Great, you solved the sudoku puzzle! :)");
	}
	else
	{
		alert("Sorry, that's not the right answer to the puzzle.\n\nHint: Click the 'solve sudoku' button");
	}
}

function solveSudoku()
{
	var solution = "726493815315728946489651237852147693673985124941362758194836572567214389238579461";
	for(i=0; i<9; i++)
	{
		for(j=0; j<9; j++)
		{
			var ans = i*9+j;
			document.getElementsByClassName("cell")[ans].value = solution[ans];
		}
	}
}


function checkForm()
{
	var login = document.getElementsByClassName("login").value;
	var pass = document.getElementsByClassName("pass").value;
	var pass2 = document.getElementsByClassName("pass2").value;
	var extra = document.getElementsByClassName("extra").value;
	
	var rlogin = RegExp("^(?=.*[A-Za-z0-9]$)[A-Za-z][A-Za-z\d.-]{0,19}$");
	
	console.log(rlogin(login));
}

window.onload = onloadfunction;