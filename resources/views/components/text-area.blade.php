@props(['disabled' => false])
<textarea {{ $disabled ? 'disabled' : ''  }} {!! $attributes->merge(['class' =>
  'border-gray-300 focus:border-zinc-900 focus:ring focus:ring-zinc-400 focus:ring-opacity-50 rounded-md shadow-sm'

]) !!}></textarea>
                                            name="message" data-error="Por favor escriba su mensaje" required="required"></textarea>


<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 
  'border-gray-300 focus:border-zinc-900 focus:ring
  focus:ring-zinc-400 focus:ring-opacity-50
  rounded-md shadow-sm']) !!}>