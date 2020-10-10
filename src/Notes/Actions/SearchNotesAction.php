<?php


namespace Notes\Notes\Actions;


use Notes\Notes\Repositories\Contracts\NoteRepositoryInterface;

class SearchNotesAction implements Contracts\SearchNotesActionInterface
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
        if(is_null($findValue)) {
            return $this->noteRepository->all();
        }

        return $this->noteRepository->find($findColumn, $findValue);
    }
}
