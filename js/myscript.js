
  clikvxod=0;
  errorvxod=0;
  clikregistrat=0;
  errorregistrat=0;
   clikvac=0;
  errorvac=0;

// для входа 

//для кнопки
  function vxodin() {

if(formVx.loginvxod.value==""){ errorvxod=1;    formVx.loginvxod.style.color="red" ;      }
if(formVx.passvxod.value==""){  errorvxod=1;   formVx.passvxod.style.color="red" ;      }
 clikvxod=1;

 
if(errorvxod==1){alert("Не ввели Логин или Пароль");}




}

//для полей

function vxodpravc()
{

if(clikvxod==1)
{
if(formVx.loginvxod.value!=""){ errorvxod=0;    formVx.loginvxod.style.color="#6a5acd" ;      } else {errorvxod=1; formVx.loginvxod.style.color="red" ;}
if(formVx.passvxod.value!=""){  errorvxod=0;   formVx.passvxod.style.color="#6a5acd" ;      } else { errorvxod=1; formVx.passvxod.style.color="red" ; }
}
}
//для регестрайии
//для кнопки регистрации

function registrat()
{
if(formPeg.namerefistrat.value==""){ errorregistrat=1;    formPeg.namerefistrat.style.color="red" ;      }
if(formPeg.surnamerefistrat.value==""){  errorregistrat=1;   formPeg.surnamerefistrat.style.color="red" ;      }
if(formPeg.loginregistrat.value==""){ errorregistrat=1;    formPeg.loginregistrat.style.color="red" ;      }
if(formPeg.pass1.value==""){  errorregistrat=1;   formPeg.pass1.style.color="red" ;      }
if( (formPeg.pass2.value!=formPeg.pass1.value)||(formPeg.pass2.value=="") ){  errorregistrat=1;   formPeg.pass2.style.color="red" ;  

erpas.style.display = "block"
    }



if(errorregistrat==1)
{alert("Вы  не ввели данные ");}
}
//для кнопки отмена
function clossregistrat()
{
	formPeg.namerefistrat.style.color="#6a5acd" ; 
	formPeg.surnamerefistrat.style.color="#6a5acd" ; 
	formPeg.loginregistrat.style.color="#6a5acd" ; 
	formPeg.pass1.style.color="#6a5acd" ; 
	formPeg.pass2.style.color="#6a5acd" ; 
	clikregistrat=0;
	 erpas.style.display = "none";
}
//для полей
function registratpravc()
{

if(clikregistrat==0)
{
if(formPeg.namerefistrat.value!="")  { errorregistrat=0;    formPeg.namerefistrat.style.color="#6a5acd" ;      }  else { errorregistrat=1;    formPeg.namerefistrat.style.color="red" ;      }  
if(formPeg.surnamerefistrat.value==""){  errorregistrat=1;   formPeg.surnamerefistrat.style.color="red" ;      } else { errorregistrat=0;    formPeg.surnamerefistrat.style.color="#6a5acd" ;      }
if(formPeg.loginregistrat.value==""){ errorregistrat=1;    formPeg.loginregistrat.style.color="red" ;      } else { errorregistrat=0;    formPeg.loginregistrat.style.color="#6a5acd" ;      }
if(formPeg.pass1.value==""){  errorregistrat=1;   formPeg.pass1.style.color="red" ;      } else { errorregistrat=0;    formPeg.pass1.style.color="#6a5acd" ;      }
if( (formPeg.pass2.value!=formPeg.pass1.value)||(formPeg.pass2.value=="") ){  errorregistrat=1;   formPeg.pass2.style.color="red" ;    erpas.style.display = "block"; } else { errorregistrat=0;    formPeg.pass2.style.color="#6a5acd" ;   erpas.style.display = "none" ;  }
}
}

//для вакансии

//для кнопки отправить
function otprav()
{


if(formBak.surname.value==""){ errorvac=1;    formBak.surname.style.color="red" ;      }
if(formBak.name.value==""){ errorvac=1;    formBak.name.style.color="red" ;      }
if(formBak.maill.value==""){ errorvac=1;    formBak.maill.style.color="red" ;      }
if(formBak.age.value=="1"){ errorvac=1;    formBak.age.style.color="red" ;      }

if(formBak.citizenship.value==""){ errorvac=1;    formBak.citizenship.style.color="red" ;      }

if((formBak.age.value>18)&&(formBak.age.value<100)){ errorvac=0;    } else{ errorvac=1;  formBak.age.style.color="red" ;   }




 if(errorvac!=0)
{alert("Вы не ввели или ввели некоректные данные ");} 

  

clikvac=0;


	
}


//для кнопки сбросить
function sbros()
{
	  formBak.surname.style.color="#6a5acd" ;      
  formBak.name.style.color="#6a5acd" ;     
   formBak.age.style.color="#6a5acd" ;      

 formBak.citizenship.style.color="#6a5acd" ;      
   formBak.maill.style.color="#6a5acd" ; 

clikvac=0;
	
}
//для полей
function vacpravc()
{


	if(clikvac==0)
{
 



if(formBak.surname.value!="")  { errorvac=0;    formBak.surname.style.color="#6a5acd" ;      }  else { errorvac=1;    formBak.surname.style.color="red" ;      }  



if(formBak.name.value==""){  errorvac=1;   formBak.name.style.color="red" ;      } else { errorvac=0;    formBak.name.style.color="#6a5acd" ;      }
if(formBak.citizenship.value==""){  errorvac=1;   formBak.citizenship.style.color="red" ;      } else { errorvac=0;    formBak.citizenship.style.color="#6a5acd" ;      }
if( formBak.maill.value=="") {  errorvac=1;   formBak.maill.style.color="red" ;    } else { errorvac=0;    formBak.maill.style.color="#6a5acd" ;   }



if((formBak.age.value=0)||(formBak.age.value=1)){ errorvac=0;  formBak.age.style.color="#6a5acd" ;      } else{ errorvac=1;  formBak.age.style.color="red" ;   }

}
	
}
err=1;


//для формы покупки
//для полей
function oplatbil()
{
if (formoplat.surname.value=="") {formoplat.surname.style.color="red"; } else {formoplat.surname.style.color="#6a5acd" ;   }
if (formoplat.name.value=="") {formoplat.name.style.color="red" ;} else {formoplat.name.style.color="#6a5acd" ;     }
if (formoplat.cardcode1.value==""){formoplat.cardcode1.style.color="red"; } else {formoplat.cardcode1.style.color="#6a5acd" ;  }

if ((formoplat.surname.value!="")&&(formoplat.name.value!="")&&(formoplat.cardcode1.value!="")){err=0;}else {err=1;}

if (err==0)
{ formoplat.submit.disabled = 0;}
else {formoplat.submit.disabled = 0;}
 }






