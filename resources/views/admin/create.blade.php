@extends('layout')

@section('content')
<body>
<div id="wrapper-container">
    <br>
<form class="contact_form" action="lesson" method="post" name="contact_form">
    <ul>
             <h2>Добавить урок</h2>
        <hr>
        <li>
            <label for="name">Название видео</label>
            <input type="text" name="name"  placeholder="Короткое название" required />
        </li>
        <li>
            <label for="email">Категория</label>
            <input type="text" name="category" placeholder="Категория" required />
        </li>
        <li>
            <label for="website">Ссылка на Youtube</label>
            <input type="text" name="link" placeholder="http://youtube.com/..." />
        </li>
        <li>
            <label for="description">Описание к видео</label>
            <textarea name="description" cols="40" rows="6" required ></textarea>
        </li>
        	<button class="submit" type="submit">Сохранить</button>
    </ul>
    <br>
    @csrf
</form>
</body>
</html>
@endsection

