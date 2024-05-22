<div x-data="{ visible: false }" x-show="visible" x-on:open-modal.window="visible = true"
    x-on:close-modal.window="visible = false" x-on:keydown.escape.window="visible = false" class="fixed z-50 inset-0">
    {{-- Background overlay --}}
    <div @click="visible = false" class="fixed inset-0 bg-gray-300 opacity-40"></div>
    
    {{-- Modal content --}}
    <div class="bg-white rounded m-auto fixed inset-0 max-w-2xl" style="max-height: 500px">
        <div>
            Header
        </div>
        <div>
            Body
        </div>
    </div>
</div>
