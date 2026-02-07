<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@extends('layouts.layout')

	@section('head')
		<title>Ваша корзина</title>
	@endsection

	<link rel="stylesheet" href="assets/css/style.css">

	<script>
		function minus(id) {
			n = document.getElementById(id);

			if(n.innerHTML <= 1) return;

			e = parseInt(n.innerHTML) - 1;

			n.innerHTML = e;

			return false;
		}

		function plus(id) {
			n = document.getElementById(id);

			e = parseInt(n.innerHTML) + 1;

			n.innerHTML = e;

			return false;
		}
	</script>
</head>
<body>
	@section('content')
	<form class="w100" method="POST">
		<div class="content">
	
			<div class="head">Ваша корзина</div>
		
			<div class="wrap">
				<div class="row">
					<div class="col">
						<img src="assets/images/logo/logo.png" alt="">
						<div class="row">
							<h3><a href="product.html">ФТовар</a></h3>
							<p>230$</p>
						</div>
						<div class="row">
							<p><a onclick="return minus('c1')">Убрать</a></p>
							<p id="c1">1</p>
							<p><a onclick="return plus('c1')">Добавить</a></p>
						</div>
						<p class="text-right"><a href="" class="text-small">Удалить из корзины</a></p>
					</div>
					<div class="col">
						<img src="assets/images/logo/logo.png" alt="">
						<div class="row">
							<h3><a href="product.html">АТовар</a></h3>
							<p>400$</p>
						</div>
						<div class="row">
							<p><a onclick="return minus('c2')">Убрать</a></p>
							<p id="c2">1</p>
							<p><a onclick="return plus('c2')">Добавить</a></p>
						</div>
						<p class="text-right"><a href="" class="text-small">Удалить из корзины</a></p>
					</div>
					<div class="col">
						<img src="assets/images/logo/logo.png" alt="">
						<div class="row">
							<h3><a href="product.html">БТовар</a></h3>
							<p>390$</p>
						</div>
						<div class="row">
							<p><a onclick="return minus('c3')">Убрать</a></p>
							<p id="c3">1</p>
							<p><a onclick="return plus('c3')">Добавить</a></p>
						</div>
						<p class="text-right"><a href="" class="text-small">Удалить из корзины</a></p>
					</div>
				</div>
				<hr>
				<div class="row">
					<p>Общая стоимость:</p>
					<h2>1020$</h2>
				</div>
	
				<input type="password" placeholder="Ваш пароль" name="password" required>
				<button>Сформировать заказ</button>
			</div>
		</div>
	</form>

@endsection

	
</body>
</html>