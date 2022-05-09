<?php

function systemDetails()
{
    $system['name'] = 'jobsintro';
    $system['version'] = '1.1';
    return $system;
}

function get_image($image, $clean = '')
{
    return file_exists($image) && is_file($image) ? asset($image) . $clean : asset('assets/images/default.png');
}

function activeTemplate($asset = false)
{

    $gs = App\Models\WuasGeneralSetting::first(['active_template']);

    $template = $gs->active_template;

    $sess = session()->get('template');
    if (trim($sess) != null) {
        $template = $sess;
        dd($template);
    }
    if ($asset) return 'wuas-content/upload/themes/' . $template . '/';
    return 'templates.' . $template . '.';
}

function activeTemplateName()
{
    $gs = App\Models\WuasGeneralSetting::first(['active_template']);
    $template = $gs->active_template;
    $sess = session()->get('template');
    if (trim($sess) != null) {
        $template = $sess;
    }
    return $template;
}

function site_name()
{
    $general = App\Models\WuasGeneralSetting::first();
    $sitname = str_word_count($general->sitename);
    $sitnameArr = explode(' ', $general->sitename);
    if ($sitname > 1) {
        $title = "<span>$sitnameArr[0] </span> " . str_replace($sitnameArr[0], '', $general->sitename);
    } else {
        $title = "<span>$general->sitename</span>";
    }

    return $title;
}