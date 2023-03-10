IN Site Identity -- Управление логотипом сайта
==============================================

Версия 0.0.1

Небольшой плагин, который управляет логотипом сайта. Используется изображение сайта в
[визуальной настройке темы](https://developer.wordpress.org/themes/functionality/custom-logo/). (Тема должна поддерживать эту возможность!).

Для настройки основного логотипа сайта, фавиконки, логотипа на странице входа, установите 
изображение в кастомайзере:  
Внешний вид → Настроить → Основы → Свойства сайта → Иконка сайта

Настоятельно рекомендуется использовать изображение размером 512px x 512px с прозрачным фоном.

Если этого пункта нет, проверьте, в файле `functions.php` должен присутствовать примерно такой код, как указано ниже. Если ничего похожего нет, просто добавьте строчку:
```
add_theme_support( 'custom-logo' );
```

Плагин на основе установленного изображения `get_theme_mod( 'custom_logo' )` формирует:
* Логотип на странице входа `wp-login.php`

Планируется:
* Правильное формирование webmanifest
* Правильное отображение в Яндекс.Табло