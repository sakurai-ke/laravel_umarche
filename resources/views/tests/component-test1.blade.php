<x-tests.app>
    <x-slot name="header">ヘッダー1</x-slot>
    コンポーネントテスト1


    {{-- 変数について、messageはComponentTestControllerからの値。頭にコロンをつけること、また変数名のには$を頭につけること
         title="タイトル1" content="本文1"は属性値--}}
    <x-tests.card title="タイトル1" content="本文1" :message="$message" />
    {{-- content,:messageについては指定していないのでcard.blade.phpのpropsで指定した初期値が設定される --}}
    <x-tests.card title="タイトル2" />
    {{-- <x-tests.card title="CSSを変更したい" class="bg-red-300" /> --}}
</x-tests.app>
