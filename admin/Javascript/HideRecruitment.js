var a;
function show_hide()

{

  if(a==1)
        {
          document.getElementById("contact_form").style.display="inline";
          return a=0;

        }
        else{
          document.getElementById("contact_form").style.display="none";
          return a=1;
        }

}