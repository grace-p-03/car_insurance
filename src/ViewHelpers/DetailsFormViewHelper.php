<?php

namespace App\ViewHelpers;

class DetailsFormViewHelper
{

    public static function displayNameInput(): string
    {

        $result = '<form action="/Quote/" method="post">';
        $result .= '<label for="name">Name</label>';
        $result .= '<input type="text" id="name" name="name">';
        return $result;

    }
}
