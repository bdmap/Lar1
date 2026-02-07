<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@extends('layouts.layout')

	@section('head')
		<title>Заказы</title>
	@endsection

	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

@section('content')
<div class="content">
	<div class="head" style="margin-bottom: 10px">Мои заказы</div>
	<div class="wrap">
		<div class="row">
			<h2>Заказ 23134</h2>
			<p class="text-right">
			<form>
				<button type="submit" class="text-small btnForm">Удалить заказ</button>
			</form>
			</p>
		</div>
		<div class="row">
			<p>Статус: <b>Новый</b></p>
			<p>Количество товаров: <b>7</b></p>
			<p>Общая стоимость: <b>2320$</b></p>
		</div>
		<hr>
		<div class="row">
			<div class="col">
				<div class="row">
					<h3><a href="product.html">АТовар</a></h3>
					<p>400$</p>
				</div>
				<div class="row">
					<p>Количество:</p>
					<b>2</b>
				</div>
			</div>
			<div class="col">
				<div class="row">
					<h3><a href="product.html">БТовар</a></h3>
					<p>390$</p>
				</div>
				<div class="row">
					<p>Количество:</p>
					<b>1</b>
				</div>
			</div>
			<div class="col">
				<div class="row">
					<h3><a href="product.html">ВТовар</a></h3>
					<p>380$</p>
				</div>
				<div class="row">
					<p>Количество:</p>
					<b>3</b>
				</div>
			</div>
			<div class="col">
				<div class="row">
					<h3><a href="product.html">ГТовар</a></h3>
					<p>370$</p>
				</div>
				<div class="row">
					<p>Количество:</p>
					<b>1</b>
				</div>
			</div>
		</div>
	</div><br>

	<div class="wrap">
		<div class="row">
			<h2>Заказ 34233</h2>
		</div>
		<div class="row">
			<p>Статус: <b>Подтверждённый</b></p>
			<p>Количество товаров: <b>3</b></p>
			<p>Общая стоимость: <b>1190$</b></p>
		</div>
		<hr>
		<div class="row">
			<div class="col">
				<div class="row">
					<h3><a href="product.html">АТовар</a></h3>
					<p>400$</p>
				</div>
				<div class="row">
					<p>Количество:</p>
					<b>2</b>
				</div>
			</div>
			<div class="col">
				<div class="row">
					<h3><a href="product.html">БТовар</a></h3>
					<p>390$</p>
				</div>
				<div class="row">
					<p>Количество:</p>
					<b>1</b>
				</div>
			</div>
		</div>
	</div><br>

	<div class="wrap">
		<div class="row">
			<h2>Заказ 34233</h2>
		</div>
		<div class="row">
			<p>Статус: <b>Отменённый</b></p>
			<p>Количество товаров: <b>3</b></p>
			<p>Общая стоимость: <b>1170$</b></p>
		</div>
		<div class="row">
			<p>Причина отмены:</p>
			<p><b>Количество товаров превышает имеющееся на складе</b></p>
		</div>
		<hr>
		<div class="row">
			<div class="col">
				<div class="row">
					<h3><a href="product.html">АТовар</a></h3>
					<p>400$</p>
				</div>
				<div class="row">
					<p>Количество:</p>
					<b>1</b>
				</div>
			</div>
			<div class="col">
				<div class="row">
					<h3><a href="product.html">БТовар</a></h3>
					<p>390$</p>
				</div>
				<div class="row">
					<p>Количество:</p>
					<b>1</b>
				</div>
			</div>
			<div class="col">
				<div class="row">
					<h3><a href="product.html">ВТовар</a></h3>
					<p>380$</p>
				</div>
				<div class="row">
					<p>Количество:</p>
					<b>1</b>
				</div>
			</div>
		</div>
	</div>
</div>
@endconten
	
</body>
</html>