<div x-data="{ editing: false }" x-on:book-updated-{{ $book->id }}.window="editing = false">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 space-y-4">
            <div x-show="editing">
                <livewire:updated-book :book=$book />
            </div>
            <div>
                <h2 class="text-xl font-medium leading-snug">{{ $book->title }}</h2>

                <div>by {{ $book->author }}</div>
            </div>

            <div>
                <label for="notes" class="sr-only">Notes</label>
                <textarea id="notes" wire:model.live.debounce.500ms="form.notes" rows="4"
                    class="w-full border border-slate-300 rounded-lg resize-none" placeholder="Your notes for this book"></textarea>

            </div>

            <ul class="flex space-x-2">

                <li x-show="editing" x-cloak><button
                        class="px-3 py-1.5 text-white font-medium rounded-lg hover:bg-slate-600 transition-colors duration-300 bg-slate-500"
                        x-on:click="editing = false">Cancel</button>
                </li>
                <li x-show="!editing" x-cloak><button
                        class="px-3 py-1.5 text-white font-medium rounded-lg hover:bg-blue-600 transition-colors duration-300 bg-blue-500"
                        x-on:click="editing = true">Edit</button>
                </li>
                <li x-show="!editing" x-cloak><button
                        class="px-3 py-1.5 text-white font-medium rounded-lg hover:bg-red-600 transition-colors duration-300 bg-red-500"
                        x-on:click="
                        if(confirm('Are you sure')){
                            $wire.$parent.deleteBook({{ $book->id }})
                            }
                            ">Delete</button>
                </li>
                </>
                </template>
            </ul>
        </div>
    </div>
</div>
