@props(['title', 'name'])
<div x-data="{ visible: false, name: '{{ $name }}' }" x-show="visible"
    x-on:open-modal.window="visible = ($event.detail.name === name)"
    x-on:close-modal.window="visible = false" 
    x-on:keydown.escape.window="visible = false" 
    class="fixed z-50 inset-0"
    style="display: none"
    x-transition.duration.300ms
    >
    {{-- Background overlay --}}
    <div @click="visible = false" class="fixed inset-0 bg-gray-300 opacity-40"></div>

    {{-- Modal content --}}
    <div class="bg-white rounded m-auto fixed inset-0 max-w-2xl" style="max-height: 500px">
        <div>
            <button @click="$dispatch('close-modal')"
                class="float-right py-1 px-2.5 bg-red-600 text-white m-2 rounded">X</button>
        </div>
        @if (isset($title))
            <div class="py-3 flex items-center justify-center">
                {{ $title }}
            </div>
        @endif
        <div>
            {{ $body }}
        </div>
    </div>
</div>
