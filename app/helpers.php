<?php

use App\Models\PostsCategory;

function menuSelect($menu, $parent = 0, $level = 0)
{

    if ($menu->count() > 0) {
        $result = [];
        foreach ($menu as $key => $category) {
            if ($category['parent_id'] == $parent) {
                $category['level'] = $level;
                $result[] = $category;
                $child = menuSelect($menu, $category['id'], $level + 1);
                $result = array_merge($result, $child);
            }
        }
        return $result;
    }
}
function getAllCategories()
{
    return PostsCategory::all();
}
