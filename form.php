<?php
$titulo = "Formulario";

?>
<html>
<head>
    <title><?php echo $titulo ?></title>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            border:0px;
            margin:0px;
            background: #f7f7f7;
        }
        .ctn-form{
            position: fixed;
            top:calc(50% - 190px);
            left:calc(50% - 150px);
            width:300px;
            height:380px;
            background: #ffffff;
            border-radius:10px;
            box-shadow:0px 0px 10px rgba(0,0,0,0.5);
        }
        .form-header{
            position:absolute;
            top:-40px;
            left:40px;
            width:calc(100% - 80px);
            height:80px;
            background: #222222;
            border-radius:10px;
        }
        .form-header .form-ico{
            position: absolute;
            top:15px;
            left:15px;
            width:50px;
            height:50px;
            background: #ffffff;
            border-radius:8px;
        }
        .form-header .form-title{
            position: absolute;
            left:80px;
            top:30px;
            font-family:arial;
            font-size:16px;
            color:#ffffff;
            line-height:20px;
        }
        .form-content{
            padding:80px 20px 20px 20px;
        }
        input[type='text']{
            margin-top:5px;
            margin-bottom:5px;
            width:100%;
            height:40px;
            border:1px solid #777777;
            border-bottom:3px solid #777777;
            outline: none;
            border-radius:10px 0px 10px 0px;
            padding-left:10px;
            padding-right:10px;
        }
        input[type='text']:focus{
            border:1px solid #b7a204;
            border-bottom:3px solid #b7a204;
        }

        input[type='password']{
            margin-top:5px;
            margin-bottom:5px;
            width:100%;
            height:40px;
            border:1px solid #777777;
            border-bottom:3px solid #777777;
            outline: none;
            border-radius:10px 0px 10px 0px;
            padding-left:10px;
            padding-right:10px;
        }
        input[type='password']:focus{
            border:1px solid #b7a204;
            border-bottom:3px solid #b7a204;
        }

        select{
            margin-top:5px;
            margin-bottom:5px;
            width:100%;
            height:40px;
            border:1px solid #777777;
            border-bottom:3px solid #777777;
            outline: none;
            border-radius:10px 0px 10px 0px;
            padding-left:10px;
            padding-right:10px;
        }
        select:focus{
            border:1px solid #b7a204;
            border-bottom:3px solid #b7a204;
        }

        input[type='submit']{
            margin-top:15px;
            margin-bottom:0px;
            width:100%;
            height:40px;
            background:#777777;
            cursor:pointer;
            outline: none;
            color:#ffffff;
        }
        input[type='submit']:hover{
            background:#b7a204;
        }
    </style>
</head>
<body>

<div class='ctn-form'>
    <div class='form-header'>
        <div class='form-ico'></div>
        <div class='form-title'><?php echo $titulo ?></div>
    </div>
    <div class='form-content'>
        <form action='request.php' method='POST' >
            <input type='text' name='nom' placeholder='Escriba su nombre' />
            <input type='password' name='telefono' placeholder="Escriba su nro de tel" />
            <select name='grupo'>
                <option>A+</option>
                <option>A-</option>
                <option>O+</option>
                <option>O-</option>
            </select>
            <input type='submit' value='Enviar'>
        </form>
    </div>
</div>

</body>
</html>