<x-tests.app>
  <x-slot name="header">ヘッダー１</x-slot>
  コンポーネントテスト1

<x-tests.card title="タイトル1" content="本文" :message="$message"/>
<x-tests.card title="タイトル2"/>
</x-tests.app>