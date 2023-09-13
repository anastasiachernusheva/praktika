<div class="container">
<div class="row">
<div class="col-4"></div>
<div class="col-4">
    <div class="users">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="main/ins_user" role="form" class="form-inline">
                <h2>Регистрация</h2>
                <div class="mb-3">
                    <label for="fio" class="form-label">Ваше ФИО<font color="red">*</font></label>
                    <input type="text" class="form-control" id="fio"  required  name="fio" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email<font color="red">*</font></label>
                    <input type="email" class="form-control" id="email" name="email"  required  placeholder="">
                </div>
                <div class="mb-3">
                    <label for="login" class="form-label">Логин<font color="red">*</font></label>
                    <input type="text" class="form-control" id="login" name="login"  required  placeholder="">
                </div>
           
                <div class="mb-3">
                    <label for="pass" class="form-label">Пароль<font color="red">*</font></label>
                    <input type="password" class="form-control" name="password" id="pass"  required  placeholder="">
                </div>
                <div class="mb-3">
                    <label for="pas" class="form-label">Подвердите пароль<font color="red">*</font></label>
                    <input type="password" class="form-control" id="pas" name="pas" placeholder=""  required >
                </div>
                <div class="mb-3">
                <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="sogl">
  <label class="form-check-label" for="sogl">
  Согласны ли вы на обработку персональных данных?
  </label>
</div>      
                </div>
                <button type="button" id="reg" class="btn btn-primary">Зарегистрироваться</button>
                <p id="err" style="color:red"> </p>
                </form>   <div id="mass"></div>    
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-4"></div>
</div>
</div>
</section>
