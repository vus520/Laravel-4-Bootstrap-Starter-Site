<?php

use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\Confide;
use Zizaco\Entrust\HasRole;
use Robbo\Presenter\PresentableInterface;

class Profile extends Eloquent
{

    public function user()
    {
        return $this->belongsTo('User');
    }

}