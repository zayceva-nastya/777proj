<?php

use TexLab\Html\Select;
use View\Html\Html;

/** @var int $id
 * @var string $type
 * @var array $fields
 * @var array $comments
 *  @var array $usersList
 */

?>

<form action="?action=edit&type=<?= $type ?>" method="post" class="guestbookform">

    <input type="hidden" name="id" value="<?= $id ?>">

    <label> <?= $comments['caption'] ?>
        <input type="tel" name="caption" value="<?= $fields['caption'] ?>">
    </label>
    <label> <?= $comments['content'] ?>
        <textarea name="content" cols="50" rows="10"><?=$fields['content'] ?></textarea>
    </label>
    <label> <?= $comments['image'] ?>
        <input type="file" name="image" >
    </label>

<!--    <input type="hidden" name="users_id" value="--><?//= $user_id ?><!--">-->

<!--    <label> --><?//= $comments['users_id'] ?>
<!--        --><?//= (new Select())->setName('users_id')->setId('users_id')->setData($usersList)->setSelectedValues([(string) $fields['users_id']])->html() ?>
<!--    </label>-->

    <input type="submit" value="Отправить">
</form>
