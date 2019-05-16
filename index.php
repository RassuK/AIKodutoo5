
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

	<script type="text/javascript" src="dygraph.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
	<a class="navbar-brand" href="#">Asjade Internet</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Graafikud</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="blog.php">Blogi</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">
					Rühma liikmed
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">Rasmus Kello</a>
					<a class="dropdown-item" href="#">Tim Jaanson</a>
					<a class="dropdown-item" href="#">Jaroslava Koger</a>
				</div>
			</li>
		</ul>
	</div>
</div>
</nav>

<div class="container">
<hr>
<form method="POST" enctype="multipart/form-data" action="save.php" id="myForm" >
	<input type="hidden" name="img_val" id="img_val" value="" />
</form>

<br>
<br>
<select id="drop">
  <option value="stats">Lauamäng</option>
  <option value="mootmed">Taimekasvatus II</option>
	<option value="mullaniiskus_temperatuur">Mulla niiskus ja temp</option>
	<option value="valgus_pikkus">Valgus ja pikkus</option>

</select>
<br>

<button onclick="updateGraph()" class="btn btn-primary">uuenda graafi</button>
<hr>
	<div id="target3">
		<div id="graphdiv4"	style="width:500px; height:300px;"></div>
		<br>
		Kommentaar:<br> <textarea rows="4" cols="50"></textarea>
	</div>
	<input type="submit" value="Salvesta graafik" class="btn btn-primary" onclick="capture3();" />

<script type="text/javascript">

	function capture3() {
		$('#target3').html2canvas({
			onrendered: function (canvas) {
				$('#img_val').val(canvas.toDataURL("image/png"));
				document.getElementById("myForm").submit();
			}
		});
	}

  g2 = new Dygraph(
    document.getElementById("graphdiv2"),
    "valgus_pikkus.csv", 
    { showRangeSelector:true,
			title : 'Valgus ja pikkus',
    });

   g3 = new Dygraph(
    document.getElementById("graphdiv3"),
    "mullaniiskus_temperatuur.csv", 
    { showRangeSelector:true,
			title : 'Mulla niiskus ja temperatuur'
		}    
  );

g4 = new Dygraph(
    document.getElementById("graphdiv4"),
    document.getElementById("drop").value+".csv",
    { showRangeSelector:true

    });

  function updateGraph()
{
	g4 = new Dygraph(
    document.getElementById("graphdiv4"),
    document.getElementById("drop").value+".csv",
    { showRangeSelector:true

    });
}

</script>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/html2canvas.js"></script>
	<script type="text/javascript" src="js/jquery.plugin.html2canvas.js"></script>
</body>
</html>
