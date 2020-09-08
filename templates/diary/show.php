<?php

use View\Html\Html;

/** @var int $pageCount Количество страниц
 * @var array $fields Список полей таблицы
 * @var array $comments Комментарии к полям таблицы
 * @var string $type Имя контроллера
 */


echo Html::create('TableEdited')
    ->setControllerType($type)
    ->setHeaders($comments)
    ->data($table)
    ->setClass('table')
    ->html();


$form = Html::create('Form')
    ->setMethod('POST')
    ->setAction("?action=add&type=$type")
    ->setClass('hidden')
    ->setId('addForm');


foreach ($fields as $field) {
    $form->addContent(Html::create('Label')->setFor($field)->setInnerText($comments[$field])->html());
   if($field == 'date'){
    $form->addContent(Html::create('input')->settype('datetime-local')->setName($field)->setId($field)->html());
   }else{
       $form->addContent(Html::create('input')->setName($field)->setId($field)->html());
   }

}

$form->addContent(
    Html::create('Input')
        ->setType('submit')
        ->setValue('OK')
        ->html()
);

echo $form->html();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a class="btn btn-primary" id="addButton">➕➕➕</a>
    <a  id="closeFormButton"></a>
    <div id="shadow" class="hidden"></div>

</body>

</html>
<?php
echo Html::create("Pagination")
->setClass('pagination')
->setControllerType($type)
->setPageCount($pageCount)
->html();
?>
