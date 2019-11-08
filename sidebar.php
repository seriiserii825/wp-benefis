<?php
	/**
	 * The sidebar containing the main widget area
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package benefis
	 */
?>


<div class="bs-sidebar">
    <aside>
        <div class="left-category-menu">
            <div class="left-product-cat">
                <!-- category-menu-list start -->
                <div class="category-menu-list">
					<?php
						wp_nav_menu(array(
							'menu' => '',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
							// чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
							'container' => '',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
							'container_class' => '',              // (string) class контейнера (div тега)
							'container_id' => '',              // (string) id контейнера (div тега)
							'menu_class' => '',          // (string) class самого меню (ul тега)
							'menu_id' => '',              // (string) id самого меню (ul тега)
							'echo' => true,            // (boolean) Выводить на экран или возвращать для обработки
							'fallback_cb' => '',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
							'before' => '',              // (string) Текст перед <a> каждой ссылки
							'after' => '',              // (string) Текст после </a> каждой ссылки
							'link_before' => '',              // (string) Текст перед анкором (текстом) ссылки
							'link_after' => '',              // (string) Текст после анкора (текста) ссылки
							'depth' => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
							'walker' => new Child_Wrap(),              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
							'theme_location' => 'catmenu'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
						));
					?>
                    <!-- category-menu-list end -->
                </div>
            </div>
        </div>
    </aside>
</div><!--col-md-3-->




              