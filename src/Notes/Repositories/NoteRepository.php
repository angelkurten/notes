<?php


namespace Notes\Notes\Repositories;


use App\Models\Note;

class NoteRepository implements Contracts\NoteRepositoryInterface
{

    public function getModel(): Note
    {
        return new Note();
    }

    public function all()
    {
       return $this->getModel()->all()->toArray();
    }

    public function create(array $data)
    {
        return $this->getModel()->create($data);
    }

    public function update(int $id, array $data)
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }

    public function find(string $column, string $value)
    {
        return $this->getModel()->where($column, '=', $value)->get()->toArray();
    }


}
