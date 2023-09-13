<div class="row">
        <div class="col-4"></div>
            <div class="col-4"> 
                <h1 style="text-align: center;">Авторизация</h1>
                <h6 style="text-align:center;">Войдите в свой аккаунт</h6>
                    <h6 style="text-align:center;">Добро пожаловать! Если вы не зарегистрированы, пройдите <a href="main/registr">регистрацию</a> на сайте.</h6>
<form method="POST"action="main/avtorizaciya"   role="form" class="form-inline" style="border: 1px solid gray;
    padding: 10px;">  
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Логин <font color="red">*</font></label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="login" placeholder="Введите логин" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Пароль <font color="red">*</font></label>
              <input type="password" class="form-control" id="exampleInputPassword1"  name="password"placeholder="Введите пароль">
            </div>
            <div class="button"><button type="submit" class="btn btn-warning"><font color="white">Войти</font></button></div>
            <p><?=$message?></p>
        </form>
 </div>
        <div class="col-4"></div>
    </div>

