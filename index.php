<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>

    <link rel="stylesheet" href="log.css">
</head>
<body><h4>
   <center>
       <div  id="box">
          <form action="/login.php" method="POST" >
        <center><h1>Регистрация</h1></center>

           <nav > 

           <div >
     <input type="text" name="first_name" placeholder="Фамилия">
            </div>
            <div >
   <input type="text" name="last_name" placeholder="Имя">
            </div>
           </nav>
            <div>
    <input type="email" name="email" placeholder="Почта">
              </div>
          <div>
    <input type="password" name="password" placeholder="пароль">
            </div>
            <div>
            <input type="password" name="password_confirm" placeholder="подтвердить пароль">
              </div>

             <div>
 
               <select name="gender" id="pol"  >
                <option>    Пол     </option>
                <option>male</option>
                 <option>female</option>
               </select>
                </div>
                 <p>
                 <label>
                  <input type="checkbox" name="terms">
                       Я согласен с <a href="/terms">условиями использования</a>
                         </label>
                     </p>
                         <p>

                      <input type="submit" value="Зарегистрироваться" id="bat">
      
                      </p>
    </form>
</div>
   </center></h4>
</body>
</html>
