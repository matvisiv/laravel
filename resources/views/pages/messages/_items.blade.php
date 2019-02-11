    <div class="messages">
        @if ( ! $messeges->isEmpty() )
            @foreach ($messages as $message)
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span>{!! $message->name !!}</span>
                        <span class="pull-right label label-info">{!! $message->date !!}}</span>
                    </h3>
                </div>
                <div class="panel-body">
                    {!! $message->messages !!}
                    <hr/>
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
        </div>
        @endif
    </form>

