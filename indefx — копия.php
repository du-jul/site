<DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/style.css" crossorigin="anonymous"></script>
    <script src="js/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body>
<h1 align="center"><span class="badge badge-secondary">Регистрация</span></h1>
<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Example select</label>
        <select class="form-control" id="exampleFormControlSelect1">
            onChange= "javascript: changeCal(this)"
            <option value='1'>Январь</option>
            <option value='2'>Февраль</option>
            <option value='3'>Март</option>
            <option value='4'>Апрель</option>
            <option value='5'>Май</option>
            <option value='6'>Июнь</option>
            <option value='7'>Июль</option>
            <option value='8'>Август</option>
            <option value='9'>Сентябрь</option>
            <option value='10'>Октябрь</option>
            <option value='11'>Ноябрь</option>
            <option value='12'>Декабрьь</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect2">Выбор месяца</label>
        <select multiple class="form-control" id="exampleFormControlSelect2">
            <option value='1'>Январь</option>
            <option value='2'>Февраль</option>
            <option value='3'>Март</option>
            <option value='4'>Апрель</option>
            <option value='5'>Май</option>
            <option value='6'>Июнь</option>
            <option value='7'>Июль</option>
            <option value='8'>Август</option>
            <option value='9'>Сентябрь</option>
            <option value='10'>Октябрь</option>
            <option value='11'>Ноябрь</option>
            <option value='12'>Декабрьь</option>

        </select>
    </div>
<div id="cal">

</div>
</form>
<button type="button" class="btn btn-outline-primary">Primary</button>
<button type="button" class="btn btn-outline-secondary">Secondary</button>
<button type="button" class="btn btn-outline-success">Success</button>
<button type="button" class="btn btn-outline-danger">Danger</button>
<button type="button" class="btn btn-outline-warning">Warning</button>
<button type="button" class="btn btn-outline-info">Info</button>
<button type="button" class="btn btn-outline-light">Light</button>
<button type="button" class="btn btn-outline-dark">Dark</button>
</body>
</html>
