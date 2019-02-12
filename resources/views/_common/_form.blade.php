    {{ Form::open(array('url'=>'/../resources/views/_common/_form')) }}
    
    {{ Form::label('name','Имя: *',array('id'=>'','class'=>'')) }}
    {{ Form::textarea('name','Pavlo',array('id'=>'','class'=>'')) }}

    {{ Form::label('email','Email',array('id'=>'','class'=>'')) }}
    {{ Form::email('email','hello@clivern.com',array('id'=>'','class'=>'')) }}

    {{ Form::label('message','Сообщение: *',array('id'=>'','class'=>'')) }}
    {{ Form::textarea('message','Текст сообщения',array('id'=>'','class'=>'')) }}

    {{ Form::submit('Save') }}
    
    <form method="POST" id="id-form_messages">

        <div class="form-group">
            <label for="name">Имя: *</label>
            <input class="form-control" placeholder="Имя" name="name" type="text" id="name">
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input class="form-control" placeholder="E-mail" name="email" type="email" id="email">
        </div>

        <div class="form-group">
            <label for="message">Сообщение: *</label>
            <textarea class="form-control" rows="5" placeholder="Текст сообщения" name="message" cols="50"  id="message"></textarea>
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Добавить">
        </div>
        <hr>

    </form>
    {{ Form::close() }}