<?php

use View\Html\Html;

/** @var int $pageCount Количество страниц
 * @var array $fields Список полей таблицы
 * @var array $comments Комментарии к полям таблицы
 * @var string $type Имя контроллера
 */
//print_r($table);




foreach ($table as &$row) {
//    $row['gifs'] = $row['id'];
    $ext = pathinfo($row['gifs'], PATHINFO_EXTENSION);
    $row['gifs'] = "<img src='public/gifs/$row[gifs]' class='img'>";
}
//echo Html::create('Table')
//    //->setHeaders($comments)
//    ->data($table)
//    ->setClass('table')
//    ->html();

echo TexLab\Html\Html::table()
    ->setData($table)
    ->setClass('tableworkots')
    ->removeColumns([1=>'id',2=>'group_id'])
    ->html();

echo Html::create("Pagination")
    ->setClass('pagination')
    ->setControllerType($type)
    ->setPageCount($pageCount)
    ->html();


//$form = Html::create('Form')
//    ->setMethod('POST')
//    ->setAction("?action=add&type=$type")
//    ->setClass('form');
//
//
//foreach ($fields as $field) {
//    $form->addContent(Html::create('Label')->setFor($field)->setInnerText($comments[$field])->html());
//    $form->addContent(Html::create('input')->setName($field)->setId($field)->html());
//}
//
//$form->addContent(
//    Html::create('Input')
//        ->setType('submit')
//        ->setValue('OK')
//        ->html()
//);
//
//echo $form->html();
?>
<!-- <form action="?action=add&type=<?=$type?>" method="post" class="guestbookform">
    <label> <?= $comments['text'] ?>
        <textarea name="text" cols="50" rows="10"></textarea>
    </label>
    <label> <?= $comments['phonenumber'] ?>
        <input type="tel" name="phonenumber">
    </label>
    <label> <?= $comments['email'] ?>
        <input type="email" name="email">
    </label>
    <label> <?= $comments ['name'] ?>
        <input type="text" name="name">
    </label>
    <input type="submit" value="Отправить">
</form> -->