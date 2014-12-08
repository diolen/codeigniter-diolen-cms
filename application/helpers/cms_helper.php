<?php

function btn_edit($url)
{
    return anchor($url, '<i class="icon-edit"></i>');
}

function btn_delete($url)
{
    return anchor($url, '<i class="icon-remove"></i>', array(
        'onclick' => "return confirm('You are about to delete a record. This cannot be undone. Are you sure?')"
    ));
}