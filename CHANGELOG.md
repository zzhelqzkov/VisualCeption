# 1.0.0

Изменения:
* Удалена зависимость от jQuery, теперь скрытие элементов производится нативнымы методами JavaScript;
* В описании конфигурации отчета;
* Заменены таймауты на мягкие ожидания скрытия/появления элементов.
* Некоторые ошибки, недочеты и пожелания.

Добавлено:
* В функциях seeVisualChanges и dontSeeVisualChanges добавлен необязательны параметр $deviation, значением которого можно передать пороговый % различия, для случаев если нужно указать % отличный от заданного в конфигурации;
* Функция getReferenceImageDir которая возвращает полный путь к образцам изображений;
* Шаблон отчета templToJpg.php, который гененрирует отчет, где изображения хранятся в формате Jpeg с 75% сжатием (можно изменить по желанию в самом шаблоне) для уменьшения объема итогового отчета различий.

# 0.9.0

Released under Codeception organization. Changes:

* *Possible BC* Codeception 2.2+ Compatibility
* *Possible BC* `referenceImageDir` config is now relative to data directory of Codeception (`tests/_data`)
* *Possible BC* `currentImageDir` config is now relative to output directory of Codeception (`tests/_output`)
* *Possible BC*  VisualCeptionReport merged with VisualCeption module and can be enabled with `report: true` config option
