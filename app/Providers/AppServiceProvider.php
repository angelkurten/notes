<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Notes\Notes\Actions\Contracts\CreateNotesActionInterface;
use Notes\Notes\Actions\Contracts\SearchNotesActionInterface;
use Notes\Notes\Actions\CreateNotesAction;
use Notes\Notes\Actions\SearchNotesAction;
use Notes\Notes\Repositories\Contracts\NoteRepositoryInterface;
use Notes\Notes\Repositories\NoteRepository;

class AppServiceProvider extends ServiceProvider
{

    public $bindings = [
        CreateNotesActionInterface::class => CreateNotesAction::class,
        SearchNotesActionInterface::class => SearchNotesAction::class,

        NoteRepositoryInterface::class => NoteRepository::class
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
