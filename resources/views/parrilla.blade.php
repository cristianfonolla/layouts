<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<style>

	.row {
		display: flex;
	}

	.row, .col {
		border: 1px black solid;
		background: lightseagreen;
		text-align: center;
		margin: 10px;
	}

	.col {
		background: lightgreen;
		flex: 1 1 20%;
	}

	.col:nth-child(2) {
		flex: 1 1 50%;
	}

</style>

<body>

<div class="container">
	<div class="row">
		<div class="col">1</div>
		<div class="col">2</div>
		<div class="col">3</div>
		<div class="col">4</div>
		<div class="col">5</div>
		<div class="col">6</div>
	</div>
	<div class="row">
		<div class="col">1</div>
		<div class="col">2</div>
		<div class="col">3</div>
	</div>
	<div class="row">
		<div class="col">1</div>
	</div>
	<div class="row">
		<div class="col">1</div>
		<div class="col">2</div>
	</div>

</div>

</body>
</html>