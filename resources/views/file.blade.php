<div class="w-full">
    <label for="{{ $id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>
    <input type="file"
           name="{{ $name }}"
           id="{{ $id }}"
           class="w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error($name) border-red-500 @enderror"
           aria-describedby="{{ $id }}_help"
            {{ $multiple ? 'multiple' : '' }}
            {{ $disabled ? 'disabled' : '' }}>
    @error($name)
    <p class="mt-1 text-xs text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
    @if($hint)
        <p class="mt-1 text-xs font-normal text-gray-500 dark:text-gray-300" id="{{ $id }}_help">{{ $hint }}</p>
    @endif
</div>
