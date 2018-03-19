<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>
<style>
    input:valid {
        color: green
    }

    input:invalid {
        border: red dashed 1px!important
    }
</style>

<body>
    <!-- 
Fullname: ít nhất 10 kí tự 
    [a-z\s]{10}

email: đúng định dạng 
    [a-z0-9._+-]+@[a-z0-9.-]+\.[a-z]{2,4}

url đúng định dạng 
    ^(https?:\/\/)?\w+

phone: không chưa text, được phép + -, 10-12 kí tư: 
    [\d-+\(\)]{10,20}

age: số
date time: đúng định dạng dd/mm/yyyy hh:ii:ss  
    ^([0-3]{2})-([0-3]{2})-(\d{4})\s([0-6]{2}):([0-6]{2}):([0-6]{2})$

date: đúng định dạng dd/mm/yyyy 
    ^([0-3]{2})-([0-3]{2})-(\d{4})$
password: có chưa hoa,thường, số, kí từ đăc biệt, ít nhất 6: 
    pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$"

(?=pattern), (?:pattern) and (?!pattern)

(?:pattern)
 -->
    <div class="container">
        <div class="col-8 offset-2">
            <h2>SIGN UP</h2>
            <form accept-charset="utf-8" method="POST" action="#">
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Fullname</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Artisanal kale" pattern="[a-z\s]{10,}" required title="Tên đầy đủ có thể bao gồm các ký tự chữ cái và khoảng trắng"
                            value="hhhhhhhhhhhhhh">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">Email</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="bootstrap@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" required
                            title="Email dung dinh dang">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-url-input" class="col-2 col-form-label">URL</label>
                    <div class="col-10">
                        <input class="form-control" type="url" name="url" placeholder="https://getbootstrap.com" pattern="^(https?:\/\/)?\w+" title="URL đúng định dạng"
                            required value="<?=@$_POST['url']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
                    <div class="col-10">
                        <input class="form-control" name="tel" pattern="^[\(\d\)\+-]{10,20}$" value="<?=@$_POST['tel']?>" id="example-tel-input"
                            required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-number-input" class="col-2 col-form-label">Age</label>
                    <div class="col-10">
                        <input class="form-control" type="text" name="age" placeholder="42" id="example-number-input" pattern="^[\d\+-]{1,3}$" required
                            value="<?=@$_POST['age']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
                    <div class="col-10">
                        <input class="form-control" type="text" name="datetime" id="example-datetime-local-input" required value="<?=@$_POST['datetime']?>"
                            pattern="^([0-3]{2})-([0-3]{2})-(\d{4})\s([0-6]{2}):([0-6]{2}):([0-6]{2})$">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-date-input" class="col-2 col-form-label">BirthDate</label>
                    <div class="col-10">
                        <input class="form-control" name="birthdate" type="text" placeholder="2011-08-19" id="example-date-input" pattern="^([0-3]{2})-([0-3]{2})-(\d{4})$"
                            value="<?=@$_POST['birthdate']?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-date-input" class="col-2 col-form-label">Gender</label>
                    <div class="col-10">
                        <label class="custom-control custom-radio">
                            <input value="radio1" name="radio" type="radio" class="custom-control-input" required>
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Nam</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input value="radio2" name="radio" type="radio" class="custom-control-input" required>
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Nữ</span>
                        </label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-password-input" class="col-2 col-form-label">Password</label>
                    <div class="col-10">
                        <input class="form-control" type="text" name="password" placeholder="hunter2" id="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$"
                            value="<?=@$_POST['password']?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-password-input" class="col-2 col-form-label">Password</label>
                    <div class="col-10">
                        <input class="form-control" type="password" placeholder="hunter2" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$" id="confirm_password">
                        <span id='message'></span>
                    </div>
                </div>
                <input class="btn btn-warning" type="submit" placeholder="Signup">
            </form>
        </div>
    </div>
    <script>
        var password = document.getElementById("password"),
            confirm_password = document.getElementById("confirm_password");
        //console.log(password)
        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword

        function checkInput(id, message) {
            input = document.getElementById(id);
            input.oninvalid = function (event) {
                event.target.setCustomValidity(message);
            }
        }
        checkInput('password', 'Vui lòng nhập password đúng định dạng')
        checkInput('email', 'Email phải sử dụng @ và . ')
        checkInput('title', 'Vui lòng nhập tiêu đề')
        checkInput('message', 'Vui lòng nhập nội dung.')
    </script>
</body>

</html>

