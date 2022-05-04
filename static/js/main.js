document.querySelector(".menu-btn").addEventListener('click', () =>{
    document.querySelector(".nav-menu").classList.toggle('show')
});


function functionLogin() {    
    windowObjectReference = window.open("templates/login.php", "_self");
  }


/* collapsible */
document.querySelector("#plus").addEventListener('click', () =>{
    //document.querySelector(".nav-menu").classList.toggle('show')    
    document.getElementById("collapsible").style.display = 'block';
    document.getElementById("less").style.display = 'block';
    document.getElementById("plus").style.display = 'none';    
});

document.querySelector("#less").addEventListener('click', () =>{
    //document.querySelector(".nav-menu").classList.toggle('show')    
    document.getElementById("collapsible").style.display = 'none';
    document.getElementById("less").style.display = 'none';
    document.getElementById("plus").style.display = 'block';    
});