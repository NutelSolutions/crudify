<div class="flex items-center">
    <input type="hidden" name="{{ $name }}" value="0">
    <input type="checkbox"
           name="{{ $name }}"
           id="{{ $id }}"
           class="w-4 h-4 text-primary-600 bg-gray-100 rounded border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 @error($name) border-red-500 @enderror"
           value="1"
            {{ $value ? 'checked' : '' }}
            {{ $disabled ? 'disabled' : '' }}>
    <label for="{{ $id }}" class="ml-2 text-sm text-gray-500 dark:text-gray-300">{{ $checkbox_label }}</label>
    @error($name)
    <span class="text-red-600 dark:text-red-500 mt-1 text-sm font-medium">{{ $message }}</span>
    @enderror
    @if($hint)
        <p class="mt-1 text-xs text-gray-500 dark:text-gray-300">{{ $hint }}</p>
    @endif
</div>
