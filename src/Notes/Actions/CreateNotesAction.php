<?php


namespace Notes\Notes\Actions;


use Notes\Notes\Actions\Contracts\CreateNotesActionInterface;
use Notes\Notes\Repositories\Contracts\NoteRepositoryInterface;

class CreateNotesAction implements CreateNotesActionInterface
{
    /**
     * @var NoteRepositoryInterface
     */
    private $noteRepository;

    public function __construct(NoteRepositoryInterface $noteRepository)
    {
        $this->noteRepository = $noteRepository;
    }

    public function make(array $data): bool
    {
        if(isset($data['title'])){
            $this->noteRepository->create($data);
            return true;
        }
        return false;
    }
}
