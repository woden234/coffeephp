<?php
namespace App\Models;

/**
 * 回复投票模型
 * @author jsyzchenchen@gmail.com
 * @date 2017/04/19
 */
class RepliesVotes extends ModelBase
{
    public $replies_id;
    public $users_id;

    public function initialize()
    {
        parent::initialize();

        $this->belongsTo(
            "users_id",
            "App\\Models\\Users",
            "id",
            [
                "alias" => "users"
            ]
        );
    }

}