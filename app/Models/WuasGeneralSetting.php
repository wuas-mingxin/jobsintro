<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WuasGeneralSetting extends Model
{
    use HasFactory;

    public function scopeSitename($query, $page_title)
    {
        $pageTitle = empty($page_title) ? '' : $page_title . ' &lsaquo; ';
        return $page_title . $this->sitename;
    }
}
