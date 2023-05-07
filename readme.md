## Doctor  
электронное расписание для врача  

### Документация  
__Единая точка входа__ какой бы адрес не набрал пользователь, он всегда будет находиться в корневом "index.php". Это обеспечивается блоком настроек в корневом файле ".htaccess"  

__$CORE__ переменная, в которую централизованно стекается вся информация (промежуточная и постояннная)

__Файл настроек__ расположен "/core/config.php", при развёртывании проекта генерируется из "/core/config.php.example".  
Содержит в себе:  
- 'DB' параметры подключения к базе данных  
- 'DEV_MODE' режим разработки.  
Влияет на вывод дебага (функция 'p()'),  
вывод ошибок (задаётся в "/core/index.php", в функции "ini_set('display_errors')")  

__Как работают маршруты__ В "/core/index.php" анализируется адрес в переменную $CORE['URL'], а в $CORE['ROUTES'] записаны все существующие на сайте адреса. Единая точка входа перенаправляет все адреса на корневой index.php, там происходит поиск текущего адреса в массиве маршрутов ($CORE['ROUTES']), каждый вложенный массив - это список блоков, подключаемых в текущей странице.

__Контроллер блока__ (/core/dev/название_блока/controller.php) запрашивает, подготавливает данные и передаёт её в "template.php" рядом

### TODO 
- в корневом идексе решить задачу по поиску маршрута  
+ в функции дебага завершить вывод сообщения без слова "строка"  
+ завершить вывод таблицы "история посещений"
+ вывести таблицу "библиотека пациентов"
+ сформировать ссылку на персональную страницу пациента /profile?id=1
- при создвнии нового пациента загружать фото профиля с попутным ресайзом