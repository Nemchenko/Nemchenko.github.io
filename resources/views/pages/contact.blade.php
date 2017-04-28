@extends('layouts.app')


@section('content')
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1>Контактная форма</h1>
				<hr>
				<form action="send" method="post">
				{{csrf_field()}}
					<div class="form-group">
						<label for="name">ФИО:</label>
						<input name="name" id="name" class="form-control" required>
						<span id="valid2"></span>
					</div>
					<div class="form-group">
						<label for="phone">Телефон:</label>
						<input name="phone" id="phone" class="form-control" required >
						<span id="valid1"></span>
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input name="email" id="email" class="form-control" required>
						<span id="valid"></span>
					</div>
					<div class="form-group">
						<label for="message">Сообщение:</label>
						<textarea name="message" id="message" class="form-control" min="10" required>Напишите здесь свое сообщение...</textarea>
						<span id="valid3"></span>
					</div>
					<div class="form-group">
              <label for=""></label>
              <img src="{{ captcha_src() }}" alt="captcha" class="captcha-img" data-refresh-config="default"><a href="#" id="refresh"><span class="glyphicon glyphicon-refresh"></span></a></p>
          </div>
          <div class="form-group">
              <label>Капча</label>
              <input class="form-control" type="text" id="captcha" name="captcha" required/>
          </div>
					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Отправить сообщение">
					</div>
				</form>
			</div>
		</div>
		<script type="text/javascript">
			
		</script>
@endsection