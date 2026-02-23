<div class="bg-green-500 text-white text-sm font-semibold px-3 py-2 rounded-lg" x-data="{ body: null }" x-show="body"
    x-on:alert.window="
    
        body = $event.detail

        setTimeout(() => {
        
            body = null

        },2000)

    ">
    <span x-text="body"></span>
</div>
