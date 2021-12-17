//popup form (file index.blade.php)
btnOpen = document.querySelector("#popBtn");
btnClose = document.querySelector(".closeForm");
btnPizza = document.querySelector(".btnPizza")
windowClose = document.querySelector(".pop");

    btnOpen.addEventListener('click', function(){
        // if(event.target == x){
        document.querySelector('.pop').style.display="block";
        document.querySelector('#abc').classList.toggle("popAnimation");
        ;
        
        
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
    //submit
    

    