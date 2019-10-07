function validatecheck(e)
{
    var email=document.querySelector("#email").value
    var password=document.querySelector("#password").value
    var shipping=document.getElementsByName('opd')
    var one=document.querySelector("#firstit").value
    var two=document.querySelector("#secondit").value
    var three=document.querySelector("#thirdit").value
    var four=document.querySelector("#fithit").value
    var flag=false
    if(password.length==0)
    {
        alert("Password is Empty!")
        
        e.preventDefault()
        return false
    }
    if(email.length==0)
    {
        alert("Username is Empty!")
        e.preventDefault()
        return false
    }
    if(one<0||two<0||three<0||four<0)
    {
        alert("Please enter right amont of iteam")
        e.preventDefault()
        return false
    }
    for(let i=0;i<3;i++)
    {
        if(shipping[i].checked==true)
        {
            flag=true
        }
    }
    if(flag==false)
    {
         alert("Place choice a shipping method!")
         e.preventDefault()
        return false
    }
    
    return true
}
