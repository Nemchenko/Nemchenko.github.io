<div class="col-md-6">
			
				<form method="post" >
				{{csrf_field()}}
					<fieldset>
						<div class="form-group">
							<label for="name">ФИО:</label>
							<input name="name" id="author" class="form-control" value="">
						</div>
						<div class="form-group">
							<label for="email">Email:</label>
							<input name="email" id="email" class="form-control" value="">
						</div>
						<div class="form-group">
							<label for="message">Сообщение:</label>
							<textarea name="message" id="content" class="form-control" rows="4">Напишите здесь свое сообщение...</textarea>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-success" value="Добавить">
						</div>
					</fieldset>
				</form>
			</div>