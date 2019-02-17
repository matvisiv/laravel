    @extends('index')
    @section('content')
	    <form method="POST" route action="{{URL::to('/$oldd->id/edit')}}" id="id-form_edit">
	        <div class="form-group">
	            <label for="name">Имя: *</label>
	            <input class="form-control" value="{!! $oldd->name !!}" type="text" id="name">
	        </div>

	        <div class="form-group">
	            <label for="email">E-mail:</label>
	            <input class="form-control" value="{!! $oldd->email !!}" name="email" type="email" id="email">
	        </div>

	        <div class="form-group">
	            <label for="messages">Сообщение: *</label>
	            <textarea class="form-control" rows="5" value="" name="messages" cols="50"  id="messages">{!! $oldd->messages !!}</textarea>
	        </div>
	        <input type="hidden" name="id" value="{!! $oldd->id !!}">
	        <input type="hidden" name="_token" value="{{ csrf_token() }}">
	        <div class="form-group">
	            <input class="btn btn-primary" type="submit" value="Зберегти">
	        </div>
	        <hr>

   		 </form>
    @stop