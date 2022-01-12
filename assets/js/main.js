// renvoie les données à researche.php
const name = document.getElementById("name")

name.addEventListener("keyup", (event) => {
    let val = event.target.value
    fetch('/research/process.php?q='+ val)
        .then(function(response) {
            response.text().then(function(data){
                document.getElementById("result").innerHTML = data
                console.log(data)
            })

        })
    } 
)  
