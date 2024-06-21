<button
   {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2'
])  }}

>
    {{ $slot }}
</button>
