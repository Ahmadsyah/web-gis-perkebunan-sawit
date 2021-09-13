
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<style type="text/css">
            h1 {
            text-align: center;
            height: 100px;
            width: 100%;
            font-size: 28px;
            background: #18aa8d;
            color: white;
            line-height: 150%;
            border-radius: 3px 3px 0 0;
            box-shadow: 0 2px 5px 1px rgba(0, 0, 0, 0.2);
          }

          form {
            box-sizing: border-box;
            width: 360px;
            margin: 100px auto 0;
            box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.2);
            padding-bottom: 40px;
            border-radius: 3px;
          }
          form h1 {
            box-sizing: border-box;
            padding: 20px;
          }

          input {
            margin: 40px 25px;
            width: 300px;
            display: block;
            border: none;
            padding: 10px 0;
            border-bottom: solid 1px #1abc9c;
            -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
                    transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
            background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #1abc9c 4%);
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #1abc9c 4%);
            background-position: -300px 0;
            background-size: 300px 100%;
            background-repeat: no-repeat;
            color: #0e6252  ;
          }
          input:focus, input:valid {
            box-shadow: none;
            outline: none;
            background-position: 0 0;
          }
          input:focus::-webkit-input-placeholder, input:valid::-webkit-input-placeholder {
            color: #1abc9c;
            font-size: 11px;
            -webkit-transform: translateY(-20px);
                    transform: translateY(-20px);
            visibility: visible !important;
          }

          button {
            border: none;
            background: #1abc9c;
            cursor: pointer;
            border-radius: 3px;
            padding: 6px;
            width: 300px;
            color: white;
            margin-left: 25px;
            box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);
          }
          button:hover {
            -webkit-transform: translateY(-3px);
                -ms-transform: translateY(-3px);
                    transform: translateY(-3px);
            box-shadow: 0 6px 6px 0 rgba(0, 0, 0, 0.2);
          }
           
          /* The magic happens in a few lines of code for the input:focus and input:valid. The CSS transform property plays a crucial role to achieve this little instant feedback effect. */

          input:focus::-webkit-input-placeholder, input:valid::-webkit-input-placeholder {
            color: #1abc9c;
            font-size: 11px;
            -webkit-transform: translateY(-20px);
                    transform: translateY(-20px);
            visibility: visible !important;
          }
</style>
<body>

  <form method="post" action="<?= base_url('login') ?>">
  <h1>Login please...</h1>
  <input placeholder="Username"  type="text" required="" name="username" >
  <input placeholder="Password" type="password" required="" name="password">
  <button>Submit</button>
  </form>
 

</body>
</html>