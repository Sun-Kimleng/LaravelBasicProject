//popup form (file index.blade.php)
var btnOpen = document.querySelector("#popBtn");
var btnClose = document.querySelector(".closeForm");
var btnPizza = document.querySelector(".btnPizza");
var windowClose = document.querySelector(".pop");
var windowClose2 = document.querySelector(".wrappedDrop");



    btnOpen.addEventListener('click', function(){
        // if(event.target == x){
        document.querySelector('.pop').style.display="block";
        document.querySelector('#abc').classList.toggle("popAnimation");
        
    });
    btnClose.addEventListener('click', function(){
        // if(event.target == x){
        
        document.querySelector('#abc').classList.toggle("popAnimation");
        document.querySelector('.pop').style.display="none";
        
    });

    window.addEventListener('click', function(event){
        if(event.target == windowClose){
            document.querySelector('.pop').style.display="none";
            document.querySelector('#abc').classList.toggle("popAnimation");
        }
        
        
    });

    
    function showw(){
        document.querySelector('.Dropmenu').classList.toggle('showw');
    }

    window.onclick = function(e){
    if(!e.target.matches('.hh')){
        var myDropdown = querySelector("#Dropmenu");
        if(myDropdown.classList.contains('showw')){
            document.querySelector('.Dropmenu').classList.remove('showw');
            }
        }
    } 

//pop up dropdown menu (layout.blade.php)













