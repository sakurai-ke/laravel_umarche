{{-- propsについて変数の初期値を設定する場合は全部設定すること。
    初期値を設定したくないキーについては、valueを空に設定すること --}}
@props([
  'title',
  'message' => '初期値です。',
  'content' => '本文初期値です'
 ])

{{-- <div {{ $attributes->merge([
  'class' => 'border-2 shadow-md w-1/4 p-2'
  ]) }} > --}}

<div class="border-2 shadow-md w-1/4 p-2">
    <div>{{ $title }}</div>
    <div>画像</div>
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
</div>
