<div>
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>
    <div class="flex items-center space-x-4">
        @foreach($options as $option_label => $option_value)
            <div class="flex items-center">
                <input type="radio"
                       name="{{ $name }}"
                       id="{{ $id . '_' . $loop->index }}"
                       class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 @error($name) border-red-500 @enderror"
                       value="{{ $option_value }}"
                        {{ $option_value == $value ? 'checked' : '' }}
                        {{ $disabled ? 'disabled' : '' }}>
                <label for="{{ $id . '_' . $loop->index }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $option_label }}</label>
            </div>
        @endforeach
    </div>
    @error($name)
    <span class="text-red-600 dark:text-red-500 mt-1 text-sm font-medium">{{ $message }}</span>
    @enderror
    @if($hint)
        <p class="mt-1 text-xs text-gray-500 dark:text-gray-300">{{ $hint }}</p>
    @endif
</div>
