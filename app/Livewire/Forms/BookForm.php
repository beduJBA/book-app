<?php

namespace App\Livewire\Forms;

use App\Models\Book;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class BookForm extends Form
{
    public ?Book $book;

    #[Rule()]

    #[Rule('required')]
    public string $title = '';

    #[Rule('required')]
    public string $author = '';

    #[Rule('nullable')]
    public ?string $notes = '';

    public function setBook(Book $book)
    {
   
        $this->book = $book;
        
        $this->fill(
            $book->only('title','author','notes')
        );
    }

    public function create()
    {
        auth()->user()->books()->create(

             $this->only('title','author')
        );

        $this->reset();
    }

    public function update()
    {
        $this->book->update(
            $this->only('title','author')
        );
    }

    public function updateNotes()
    {
        $this->book->update(
            $this->only('notes')
        );
    }

}
