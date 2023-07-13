<x-tests.app>
    <x-slot name="header">ヘッダー2</x-slot>
  
    コンポーネントテスト2
{{-- Http>View>Components>TestClassBase.phpを呼び、その中に指定された（public function render()....で指定された）
    test-class-base-component.phpの記述内容が表示される --}}
    {{-- <x-test-class-base /> --}}

{{-- 属性（classBaseMessage="メッセージです）について、Http>View>Components>TestClassBase.phpのクラスにも設定する必要がある --}}
    <x-test-class-base classBaseMessage="メッセージです" />
    <div class="mb-4"></div>
    <x-test-class-base classBaseMessage="メッセージです" defaultMessage="初期値から変更しています" />
  
  </x-tests.app>