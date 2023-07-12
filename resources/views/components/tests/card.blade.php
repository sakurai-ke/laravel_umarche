{{-- propsについて変数の初期値を設定する場合は全部設定すること。
    初期値を設定したくないキーについては、valueを空に設定すること --}}
@props([
  'title',
  'message' => '初期値です。',
  'content' => '本文初期値です'
 ])


{{-- <div class="border-2 shadow-md w-1/4 p-2"> --}}
{{-- <div {{ $attributes}}  class = "border-2 shadow-md w-1/4 p-2"> --}}

    {{-- viewファイルでtailwindcssでclass=***を記述するだけでは表示が反映されない。  
    viewファイルで設定したtailwindcssの設定を有効とするには、上記のように{{ $attributes}} の追記が必要だが
    それではviewファイル側のcssだけ反映される。（componentファイルのcssが反映されない）
    componentファイル、viewファイルどちらも反映させる場合は下記のように-$attributes->merge([***])
    と記述する必要がある --}}

    <div {{ $attributes->merge([
  'class' => 'border-2 shadow-md w-1/4 p-2'
  ]) }} >

    <div>{{ $title }}</div>
    <div>画像</div>
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
</div>
