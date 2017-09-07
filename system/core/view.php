<?php
class View
{
    function generate($content, $template, $data = null)
    {
        include 'system/view/' . template;
    }
}