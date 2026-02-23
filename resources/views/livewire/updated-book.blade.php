<form wire:submit.prevent="submit">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">


            <div class="flex items-start space-x-3">
                <div class="grow">
                    <label for="title" class="sr-only">Book title</label>
                    <input type="text" id="title" wire:model="form.title" placeholder="Book title"
                        class="w-full border border-slate-300 rounded-lg">
                    @error('form.title')
                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="grow">
                    <label for="form.author" class="sr-only">Book author</label>
                    <input type="text" id="author" wire:model="form.author" placeholder="Book author"
                        class="w-full border border-slate-300 rounded-lg">
                    @error('form.author')
                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="bg-blue-500 px-4 py-2 text-white rounded-lg font-medium">Save</button>

            </div>

        </div>

    </div>
</form>
