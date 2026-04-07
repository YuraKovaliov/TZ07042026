Как скачать и запустить :
1. Открыть терминал ,выбрать папку где будет проект 
2. Выполнить команду git clone https://github.com/YuraKovaliov/TZ07042026.git или git clone https://github.com/YuraKovaliov/TZ07042026
3. Установи зависимости composer install
4. Создать .env  командой cp .env.example .env
5. Сгенерировать ключ php artisan key:generate
6. запустить сервер php artisan serve
7. Открыть папку найти файл ngrok.exe запустить и открыть порт ngrok http 8000
8. Скопировать URL домена пример:https://diacidic-unitage-shirly.ngrok-free.dev открыть .env найти APP_URL=http://127.0.0.1:8000 замнить на
9. скопированый домен
10. Запустить миграцию командой php artisan migrate
11. все сохранить и перезапустить сервер командой php artisan serve
Что бы выполнить запросы Api :
1. установить Postman или использовать postman online
2. выбрать какой запрос будем отправлять Post , Get , Put , Delete
   Получить все посты :
   GET домен/api/posts

   Получить один пост:
   GET домен/api/posts/Id поста

   Создать пост:
   POST домен/api/posts выбираем Bady-> json и вставляем ->
   {
  "title": "Мой первый пост",
  "content": "мой текст"
   }

   Обновить пост:
   PUT /api/posts/Id поста выбираем Bady-> json и вставляем ->
   {
  "title": "Новый заголовок",
  "content": "Новый текст"
   }

   Удалить пост:
   DELETE /api/posts/Id поста
