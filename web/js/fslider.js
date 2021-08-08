let commentsAmount = document.getElementById('commentsAmount').textContent;
var dispamount=3;
switchstyle = "height:20px;width:20px; background-color:#d7d7d7; border-radius:100px;cursor: pointer"
bootstrap = "fordel mb-5 mx-2"
let switches = [];

showslider()
//createSwitches();
//switchcomments(0);

$(window).on("resize",()=>{
    showslider()
})

function createSwitches(){
        $('.fordel').detach();
   
    for (let i = 0; i < Math.ceil(commentsAmount / dispamount); i++) {
        $('#switches').append("<div class='" + bootstrap + "' style='" + switchstyle + "'" + "id=" + ('switch' + i) + "></div>");
        switches[i] = document.getElementById('switch' + i).addEventListener("click", function () {
            switchcomments(i)
        }, false)
    }
    
}

function switchcomments(switch_number){
//    console.log('switch_number'+switch_number)
    for (let j=0;j<commentsAmount;j++){
        $('#slide' + j).css("display", "none");
    }
    for(let j=0;j<commentsAmount/dispamount;j++){
        $('#switch'+j).css("background-color",'#d7d7d7')
    }
    $('#switch'+switch_number).css("background-color",'#3951d2')
    for (let j=switch_number*dispamount;j<switch_number*dispamount+dispamount;j++){
//        console.log('num of slide'+j)
        $('#slide' + j).css("display", "block");
    }
    $('#slide')
}
function showslider(){
    if(window.innerWidth > 1690){
        dispamount=3;
        createSwitches();
        switchcomments(0);
    }else if (window.innerWidth > 1000){
        dispamount=2;
        createSwitches();
        switchcomments(0);
    }else{
        dispamount=1;
        createSwitches();
        switchcomments(0);
    }
}

