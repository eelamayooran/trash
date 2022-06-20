<?php

namespace MintPackages\Trash;

use App\Models\User;

class Trash
{
    /**
     * @return array
     */
    public static function showSoftDeletes(): array
    {
        $trashedItems = [];
        foreach (config('trash.models') as $className) {
            $object = new $className;
            $items = $object->onlyTrashed()->get();
            $trashedItems [$className] = $items;
        }

        return $trashedItems;
    }
}
