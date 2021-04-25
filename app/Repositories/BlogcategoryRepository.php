<?php

namespace App\Repositories;

    use App\Models\BlogCategory as Model;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class BlogcategoryRepository.
 */
class BlogcategoryRepository extends CoreRepository
{
    /**
     * Get model for edit in admin panel
     *
     * @param int $id
     *
     *  @return Model
     */
    public function getEdit($id)
    {
        return $this->startConditions()->find($id);
    }

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }
    /**
     * Get category list for return
     *
     * @return Collection
     */
    public function getForComboBox()
    {
        $columns = implode(', ', ['id', 'CONCAT (id, ". ", title) AS title ']);

        $result = $this
        ->startConditions()
        ->selectRaw($columns)
        ->toBase()
        ->get();

        return $result;
    }

    /**
     *
     */
    public function getAllWithPaginate($perPage = null) {
        $fields = ['id', 'title', 'parent_id'];

        $result = $this
        ->startConditions()
        ->paginate($perPage, $fields);

        return $result;
    }
}
