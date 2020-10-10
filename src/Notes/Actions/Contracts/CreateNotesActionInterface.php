<?php


namespace Notes\Notes\Actions\Contracts;


interface CreateNotesActionInterface
{

    public function make(array $data): bool;

}
