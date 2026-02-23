<div>


    <div class="space-y-4" id="books">

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <label for="quert" class="sr-only">Search</label>
                <input type="text" id="quey" wire:model.live.debounce.300ms="query"
                    placeholder="Search your books..." class="w-full border border-slate-300 rounded-lg">
            </div>
        </div>

        @if ($books->count())

            <div class="space-y-2 ">
                @foreach ($books as $book)
                    <livewire:book-item :book=$book wire:key="{{ $book->id }}" />
                @endforeach
            </div>

            <div>
                {{ $books->links(data: ['scrollTo' => '#books']) }}

            </div>
        @endif

    </div>

</div>
