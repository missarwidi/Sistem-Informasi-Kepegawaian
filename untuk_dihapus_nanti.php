<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <meta name="description" content="Demo Contoh Script Tutorial Ajax Chat Online Support" />
 <meta name="keyword" content="tutorial ajax,script ajax,ajax,tutorial,script,contoh,php,javascript" />
 <meta name="author" content="bobybibbob - catment.blogspot.com" />
 <title>Tutorial Javascript Validasi Form (Javascript Form Validation) - catment.blogspot.com</title>
 <script type="text/javascript">
 <!--
 /*validate*/
 function isValid(form)
 {
 var valid=true;
 var message='';
 if(!form.alnum.value.match(/^[a-z]+$/i))
 {
 message='-Please insert alfanumerik with alfanumeric characters only.';
 valid=false;
 }
 if(!form.digit.value.match(/^[0-9]+$/))
 {
 message+='\n-Please insert digit with numbers only.';
 valid=false;
 }
 if(!form.username.value.match(/^[a-z0-9._]+$/i))
 {
 message+='\n-Please insert username with a-z, 0-9, _ and . charachters only.';
 valid=false;
 }
 if(!form.email.value.match(/^([a-z0-9_]+[.])*[a-z0-9_]+@([a-z0-9_-]+[.])+[a-z]+$/i))
 {
 message+='\n-Please insert email with valid email address.';
 valid=false;
 }
 if(form.pass.value=='' || form.pass.value.length<6)
 {
 message+='\n-Please insert password (Min. 6 Chars).';
 valid=false;
 }
 if(form.pass_conf.value!=form.pass.value)
 {
 message+='\n-Confirm password not equal with password.';
 valid=false;
 }
 if(form.combo.value=='')
 {
 message+='\n-Please select combo box.';
 valid=false;
 }
 var valid_check=false;
 for(i=0;i<form.check.length;i++)
 {
 if(form.check[i].checked==true)
 {valid_check=true;}
 }
 message+=((valid_check==false)?'\n-Please select check box.':'');
 var valid_radio=false;
 for(i=0;i<form.radio.length;i++)
 {
 if(form.radio[i].checked==true)
 {valid_radio=true;}
 }
 message+=((valid_radio==false)?'\n-Please select radio.':'');
 if(form.textarea.value=='')
 {
 message+='\n-Please insert textarea.';
 valid=false;
 }
 if(valid==false)
 {alert(message);}
 return valid;
 }
 /*--------*/
 //-->
 </script>
 </head>
 <body>
 <form method="post" onsubmit="return isValid(this);">
 <table>
 <tr>
 <td>Alfanumerik [A-Za-z0-9]</td>
 <td><input type="text" name="alnum" /></td>
 </tr>
 <tr>
 <td>Digit [0-9]</td>
 <td><input type="text" name="digit" /></td>
 </tr>
 <tr>
 <td>Username [A-Za-z0-9()._]</td>
 <td><input type="text" name="username" /></td>
 </tr>
 <tr>
 <td>Email</td>
 <td><input type="text" name="email" /></td>
 </tr>
 <tr>
 <td>Password (Min. 6 Chars)</td>
 <td><input type="text" name="pass" /></td>
 </tr>
 <tr>
 <td>Confirm Password</td>
 <td><input type="text" name="pass_conf" /></td>
 </tr>
 <tr>
 <td>Combo box</td>
 <td>
 <select name="combo">
 <option value="">--Select Combo Box--</option>
 <option value="1">Opt 1</option>
 <option value="2">Opt 2</option>
 </select>
 </td>
 </tr>
 <tr>
 <td>Check Box</td>
 <td>
 <input type="checkbox" name="check" value="1" /> Opt 1
 <input type="checkbox" name="check" value="2" /> Opt 2
 </td>
 </tr>
 <tr>
 <td>Radio</td>
 <td>
 <input type="radio" name="radio" value="1" /> Opt 1
 <input type="radio" name="radio" value="2" /> Opt 2
 </td>
 </tr>
 <tr>
 <td>Text Area</td>
 <td><textarea name="textarea"></textarea></td>
 </tr>
 </table>
 <input type="submit" value="Submit" />
 </form>
 </body>
 </html>