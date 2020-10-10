<?php


namespace Notes\Notes\Repositories\Contracts;


use App\Models\Note;

interface NoteRepositoryInterface
{

    public function getModel(): Note;

    public function all();

    public function create(array $data);

    public function update(int $id, array $data);

    public function delete(int $id);

    public function find(string $column, string $value);
}
