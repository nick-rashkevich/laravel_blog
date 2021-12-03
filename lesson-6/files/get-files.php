<?php


//Структура протокола определяет, что каждое HTTP-сообщение состоит из трёх частей (рис. 1), которые передаются в следующем порядке:

//Стартовая строка (англ. Starting line) — определяет тип сообщения;
//Заголовки (англ. Headers) — характеризуют тело сообщения, параметры передачи и прочие сведения;
//Тело сообщения (англ. Message Body) — непосредственно данные сообщения. Обязательно должно отделяться от заголовков пустой строкой.

//---------------------------Стартовая строка HTTP-----------------------------//
//Cтартовая строка является обязательным элементом, так как указывает на тип запроса/ответа, заголовки и тело сообщения могут отсутствовать.
//Стартовые строки различаются для запроса и ответа. Строка запроса выглядит так:

//--------------------------------//
//Метод URI HTTP/Версия протокола
//--------------------------------//

//Пример запроса:

//GET http://teachmeskills-1/lesson-6/
//Стартовая строка ответа сервера имеет следующий формат:

//HTTP/Версия КодСостояния [Пояснение]
//Например, на предыдущий наш запрос клиентом данной страницы сервер ответил строкой:

//HTTP/1.1 200 Ok


//редирект
//header("location: ../files/file-upload.php");


header("Accept-Language: ru-ru,ru;q=0.8,en-us;q=0.5,en;q=0.3");

//https://developer.mozilla.org/ru/docs/Web/HTTP/Headers/Content-Disposition подробно
//Первым параметром в контексте HTTP должен быть или inline (это значение по умолчанию, указывающее, что контент должен быть отображён внутри веб-страницы или как веб-страница) или attachment (указывает на скачиваемый контент; большинство браузеров отображают диалог "Сохранить как" с заранее заполненным именем файла из параметра filename, если он задан).


header("HTTP/1.0 201");
header('Content-Type: application/mp3');
header('Content-Disposition: attachment; filename="music.mp3"');
readfile('original.mp3');