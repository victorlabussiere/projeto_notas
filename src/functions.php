<?php

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}
function renderList($notes)
{
    foreach ($notes as $note) {
        echo
        "<a class='block text-lime-600 hover:text-lime-700 hover:underline' href='/note?id={$note['id']}'>
            {$note['body']}
        </a>";
    }
}
