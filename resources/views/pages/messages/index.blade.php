     @extends('index')

    @section('content')
    @include('_common._form')
    <div class="text-right"><b>Всего сообщений:</b> <i class="badge">{{ $count }}</i></div>
    @include('pages.messages._items')

    @stop
