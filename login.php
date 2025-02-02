<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box
        }

        .container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #eee
        }

        .card {
            height: 380px;
            width: 350px;
            background-color: #fff;
            position: relative;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            font-family: 'Poppins', sans-serif;
            border-radius: 10px;
            padding: 20px
        }

        .text {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center
        }

        .text p {
            font-size: 13px;
            color: #bac4d4;
            font-weight: 700
        }

        .input-text {
            position: relative;
            margin-top: 30px
        }

        input[type="text"] {
            height: 45px;
            width: 100%;
            border: none;
            border-radius: 9px;
            border: 1px solid #e0e3e9;
            padding: 0 10px;
            padding-left: 30px;
            outline: 0;
            font-size: 13px
        }

        input[type="password"] {
            height: 45px;
            width: 100%;
            border: none;
            border-radius: 9px;
            border: 1px solid #e0e3e9;
            padding: 0 10px;
            padding-left: 30px;
            padding-right: 27px;
            outline: 0
        }

        .fa-envelope {
            position: absolute;
            left: 10px;
            cursor: pointer;
            top: 15px
        }

        .fa-lock {
            position: absolute;
            left: 12px;
            top: 15px;
            cursor: pointer;
            font-size: 15px
        }

        .input-text .fa-eye-slash {
            position: absolute;
            right: 10px;
            top: 15px;
            font-size: 15px;
            cursor: pointer
        }

        .fa-eye {
            position: absolute;
            right: 10px;
            top: 15px;
            font-size: 15px;
            cursor: pointer
        }

        .buttons {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .buttons button {
            height: 45px;
            width: 100%;
            border: none;
            background-color: #267fff;
            border-radius: 9px;
            font-size: 12px;
            outline: 0;
            color: #fff;
            cursor: pointer;
            transition: all 0.5s
        }

        .buttons button:hover {
            background-color: #083c87
        }

        .forgot {
            margin-top: 30px;
            font-size: 10px;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .forgot a {
            text-decoration: none
        }

        .warning {
            border: 1px solid red !important
        }

        .type_password {
            border: 1px solid red !important
        }
    </style>
</head>

<body>
    <div id="root"></div>
</body>
<script src="https://unpkg.com/react@17/umd/react.development.js"></script>
<script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>
<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

    const Form=()=>{

const{useState}=React;
const[inputtext,setinputtext]=useState({
email:"",
password:""
});

const[warnemail,setwarnemail]=useState(false);
const[warnpassword,setwarnpassword]=useState(false);

const[eye,seteye]=useState(true);
const[password,setpassword]=useState("password");
const[type,settype]=useState(false);

const inputEvent=(event)=>{
const name=event.target.name;
const value=event.target.value;
setinputtext((lastValue)=>{
return{
...lastValue,
[name]:value
}
});

}



const submitForm=(e)=>{   
e.preventDefault();
setwarnemail(false);
setwarnpassword(false);
if(inputtext.email==""){
setwarnemail(true);
}
else if(inputtext.password==""){
setwarnpassword(true);
} 
else{
alert("form submitted"); 
}

}

const Eye=()=>{
    if(password=="password"){
        setpassword("text");
        seteye(false);
        settype(true);
    }
    else{
        setpassword("password");
        seteye(true);
        settype(false);
    }
}


return(
<>
    <div className="container">
        <div className="card">
            <div className="text">
                <h3>Welcome Back</h3>
                <p>Enter your credentials to access your account.</p>
            </div>
            <form onSubmit={submitForm}>
                <div className="input-text">
                    <input type="text" className={` ${warnemail ? "warning" : "" }`} placeholder="Enter your email" value={inputtext.email} onChange={inputEvent} name="email" />
                    <i className="fa fa-envelope"></i>

                </div>
                <div className="input-text">
                    <input type={password} className={` ${warnpassword ? "warning" : "" } ${type ? "type_password" : "" }`} placeholder="Enter your password" value={inputtext.password} onChange={inputEvent} name="password" />
                    <i className="fa fa-lock"></i>
                    <i onClick={Eye} className={`fa ${eye ? "fa-eye-slash" : "fa-eye" }`}></i>
                </div>
                <div className="buttons">
                    <button type="submit">Sign in</button>
                </div>
                <div className="forgot">
                     <p>Forgot your password? <a href="#">Reset Password</a></p>
                </div>
            </form>
        </div>
    </div>

</>

);
}
ReactDOM.render(
<Form />,document.getElementById("root"));
</script>

asdaksdkaw22211234567890=-asssw

</html>