    <div class="text-right"><b>Всего сообщений:</b> <i class="badge">{{ $count }}</i></div>
    <br/>
    <div class="messages">
        @if ( ! $messages->isEmpty() )
            @foreach ($messages as $message)
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span>{!! $message->name !!}</span>
                        <span class="pull-right label label-info">{!! $message->date !!}</span>
                    </h3>
                </div>
                <div class="panel-body">
                    {!! $message->messages !!}
                    <hr/>
                    <span>{!! $message->email !!}</span>
                    <div class="pull-right">
                        <a class="btn btn-info" href="#">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        <button class="btn btn-danger">
                            <i class="glyphicon glyphicon-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="text-center">
                {!! $messages->render() !!}
            </div>
        </div>
        @endif

