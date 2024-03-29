<div x-data="{
    edit: false,
    edited: false,
    init() {
        window.livewire.on('fieldEdited', (id) => {
            if (id === '{{ $rowId }}') {
                this.edited = true
                setTimeout(() => {
                    this.edited = false
                }, 5000)
            }
        })
    }
}" x-init="init()" :key="{{ $rowId }}">
    <button class="w-full text-left hover:bg-blue-100 dark:hover:bg-gray-700 px-2 py-1 -mx-2 -my-1 rounded focus:outline-none" x-bind:class="{ 'text-green-600 dark:text-green-400': edited }" x-show="!edit"
        x-on:click="edit = true; $nextTick(() => { $refs.input.focus() })">{!! $value !!}</button>
    <span x-cloak x-show="edit">
        <input class="border-blue-400 bg-transparent px-2 py-1 -mx-2 -my-1 rounded focus:outline-none focus:border" x-ref="input" value="{!! strip_tags($value) !!}"
            wire:change="edited($event.target.value, '{{ $table }}', '{{ $column }}', '{{ $rowId }}')"
            x-on:click.away="edit = false" x-on:blur="edit = false" x-on:keydown.enter="edit = false" />
    </span>
</div>