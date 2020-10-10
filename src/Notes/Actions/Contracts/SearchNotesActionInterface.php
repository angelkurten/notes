<?php


namespace Notes\Notes\Actions\Contracts;


interface SearchNotesActionInterface
{

    public function make(string $findColumn = 'id', string $findValue = null): array;

}
