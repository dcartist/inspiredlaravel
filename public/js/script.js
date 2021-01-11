function changeToLowerCase(strInput)
{
strInput.value=strInput.value.toLowerCase();
}


function PullQuote(){
fetch('https://zenquotes.io/api/today')
.then(res=>res.json())
.then( results=>console.log("results")
)
}
