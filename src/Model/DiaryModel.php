<?php


namespace Model;


use mysqli;
use TexLab\MyDB\DbEntity;

class DiaryModel extends DbEntity
{

    public function getApplicationPage(int $page)
    {
        return $this
            ->reset()
->setSelect('`diary`.`id`, `diary`.`exercise`, `diary`.`lead_time`, `diary`.`date`,`diary`.`users_id`,  `users`.`login` AS users_id')
            //->setSelect(' `users`.`FIO`,`diary`.`exercise`, `diary`.`lead_time`, `diary`.`date`')
            ->setFrom('`users`,`diary`')
            ->setWhere('`users`.`id` = `diary`.`users_id`')
            ->setOrderBy('`diary`.`id`')
            ->getPage($page);
    }

    public function diaryUserFilter(int $page, int $user_id)
    {
        return $this
            ->reset()
            ->setSelect('`diary`.`id`, `diary`.`exercise`, `diary`.`lead_time`, `diary`.`date`,`diary`.`users_id`, `users`.`login` AS users_id')
            ->setFrom('`users`,`diary`')
            ->setWhere("`users`.`id` = `diary`.`users_id`  AND `diary` . `users_id` = $user_id")
            ->setOrderBy('`diary`.`id`')
            ->getPage($page);
    }

}
