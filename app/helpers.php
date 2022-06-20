<?php

function nice_date($date = null)
{
    if (!$date) {

        return null;
    }

    return $date->diffForHumans() . ' ' . $date->format('d. M Y H:i');
}
