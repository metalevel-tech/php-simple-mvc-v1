<?php

class Blog extends Controller
{
    public static function queryPosts() {
        return self::query("SELECT * FROM posts");
    }
}
