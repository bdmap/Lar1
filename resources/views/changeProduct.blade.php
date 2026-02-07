<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@extends('layouts.layout')

	@section('head')
		<title>Изменение товара</title>
	@endsection

	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

@section('content')
		<div class="content">

			<div class="head">Изменить товар</div>
			<form method="POST">
				<input type="text" placeholder="Название" name="name" required value="Название из базы">
				<input type="number" placeholder="Цена" name="price" required value="Цена из базы">
				<input type="text" placeholder="Страна производитель" name="country" required value="Страна из базы">
				<input type="number" placeholder="Год выпуска" name="year" required value="Год из базы">
				<input type="text" placeholder="Модель" name="model" required value="Модель из базы">
				<select name="category" required>
					<option value selected disabled>Категория</option>
				</select>
				<input type="number" placeholder="Количество на складе" name="count" required value="Количество из базы">
				<p class="text-left">Фотография товара</p>
				<img src="assets/images/logo/logo.png" alt="product">
				<input type="file" name="image" required>
				<button>Изменить</button>
			</form>
		</div>
@endsection
</body>
</html>