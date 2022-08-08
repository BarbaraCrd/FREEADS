<?php

function getBuyerName($buyer_id)
{
    $user=App\Models\User::find($buyer_id);
    return $user->name;
}

function getAdTitle($ad_id)
{
    $ad=App\Models\Post::find($ad_id);
    return $ad->title;
}

function getSellerName($user_id)
{
    $seller=App\Models\User::find($user_id);
    return $seller->name;
}

function getSellerAvatar($user_id)
{
    $seller=App\Models\User::find($user_id);
    return $seller->avatar;
}


function getBuyerAvatar($user_id)
{
    $buyer=App\Models\User::find($user_id);
    return $buyer->avatar;
}
