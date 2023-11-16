<div>
    <label for="{{ $id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>
    <select name="{{ $name }}"
            id="{{ $id }}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white @error($name) border-red-500 @enderror">
        @if($empty)
            <option value="">{{ $empty_option_label }}</option>
        @endif
        @foreach($options as $option_label => $option_value)
            <option value="{{ $option_value }}" {{ (string) $option_value === (string) $value ? 'selected' : '' }}>{{ $option_label }}</option>
        @endforeach
    </select>
    @error($name)
    <span class="text-red-600 dark:text-red-500 mt-1 text-sm font-medium">{{ $message }}</span>
    @enderror
    @if($hint)
        <small class="form-text text-secondary mt-1 text-sm font-medium">{{ $hint }}</small>
    @endif
</div>
