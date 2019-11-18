<?php


namespace App\Services;


class Slugify
{
    public function slugify($titre)
    {
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $titre)));
    }

}