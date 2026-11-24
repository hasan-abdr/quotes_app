@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-200 bg-gray-50/60 text-gray-800 placeholder:text-gray-400 rounded-xl shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500']) }}>
