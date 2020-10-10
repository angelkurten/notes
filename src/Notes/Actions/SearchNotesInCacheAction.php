<?php


namespace Notes\Notes\Actions;


use Notes\Notes\Repositories\Contracts\NoteRepositoryInterface;

class SearchNotesInCacheAction implements Contracts\SearchNotesActionInterface
{

    /**
     * @var NoteRepositoryInterface
     */
    private $noteRepository;

    public function __construct(NoteRepositoryInterface $noteRepository)
    {
        $this->noteRepository = $noteRepository;
    }

    public function make(string $findColumn = 'id', string $findValue = null): array
    {
        return [];
    }
}
