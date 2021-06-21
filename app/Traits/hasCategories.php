<?php

namespace App\Traits;

use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait HasCategories
{
    /**
     * @return \App\Models\Comment
     */
    public function categories()
    {
        return $this->categoriesRelation();
    }

    public function categoriesRelation(): MorphToMany
    {
        return $this->morphToMany(Category::class, 'categoriable');
    }

    public function syncCategories(array $categories)
    {
        $this->save();
        $this->categoriesRelation()->sync($categories);
    }


    // public function removeCategories()
    // {
    //     $this->CategoriesRelation()->detach();
    // }
}
