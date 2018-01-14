function checkfun()
{
    var x=document.forms["SignUpform"]["pwd"].value;
    var y=document.forms["SignUpform"]["repwd"].value;

    if(x!=y) {
        window.alert("Passwords donot match!!");
        document.forms["SignUpform"]["pwd"].value="";
        document.forms["SignUpform"]["repwd"].value="";
        return false;
    }
    else
    {
        if(x.length<6)
        {
            window.alert("Password length must be greater than 6 characters!!");
            document.forms["SignUpform"]["pwd"].value="";
            document.forms["SignUpform"]["repwd"].value="";
            return false;
        }
        else
            return true;
    }
}
