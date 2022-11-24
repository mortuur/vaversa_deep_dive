const button = document.getElementById("button")

button.addEventListener("click", () =>{
    Notification.requestPermission().then(perm => {
        if (perm === "granted") {
            new Notification("test test"),{                
            }
        }
    })
})

// notification to mobile?
