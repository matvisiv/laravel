    @extends('index')

    @section('content')
	    <form method="POST" action="{{URL::to('/edit')}}" id="id-form_edit">
	        <div class="form-group">
	            <label for="name">Имя: *</label>
	            <input class="form-control" placeholder="Имя" value="{{ $data->name }}" name="name" type="text" id="name">
	        </div>

	        <div class="form-group">
	            <label for="email">E-mail:</label>
	            <input class="form-control" value="{{ $old->email }}" name="email" type="email" id="email">
	        </div>

	        <div class="form-group">
	            <label for="messages">Сообщение: *</label>
	            <textarea class="form-control" rows="5" value="{{ $old->messages }}" name="messages" cols="50"  id="messages"></textarea>
	        </div>
	        <input type="hidden" name="_token" value="{{ csrf_token() }}">
	        <div class="form-group">
	            <input class="btn btn-primary" type="submit" value="Добавить">
	        </div>
	        <hr>

   		 </form>

    @stop