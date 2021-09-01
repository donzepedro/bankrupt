let commentsAmount = document.getElementById('commentsAmount').textContent;
var dispamount=3;
switchstyle = "height:20px;width:20px; background-color:#d7d7d7; border-radius:100px;cursor: pointer; margin: 10px 10px 50px 0px"
bootstrap = "fordel";
let switches = [];

showslider()
//createSwitches();
//switchcomments(0);

$(window).on("resize",()=>{
    showslider()
})

function createSwitches(){
        
        let switchNode = document.getElementById('switches');
        while(switchNode.firstChild){
            switchNode.removeChild(switchNode.firstChild);
        }
        
        console.log(Math.ceil(commentsAmount / dispamount));
    for (let i = 0; i < Math.ceil(commentsAmount / dispamount); i++) {
        $('#switches').append("<div style='" + switchstyle + "'" + "id=" + ('switch' + i) + "></div>");
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


//===========new testing=====================

//$(".slidearea").mousedown(function (e){
//    let elem_pos = $(this).offset();
//    
//    let X = e.pageX - elem_pos.left;
//    let Y = e.pageY - elem_pos.top;
//           console.log('X:=' + X + " Y:=" + Y)
//   })
//    slideIndex = 0;
//    let active = true
//    let area = document.getElementById('slide-area');
//    area.addEventListener('mousedown', function () {
////        let elem_pos = $(this).offset();
//    let X = event.pageX
//    let Y = event.pageY
//    console.log(active)
//    console.log('X:=' + X + " Y:=" + Y)
//    area.addEventListener('mouseup', function () {
////        let elem_pos = $(this).offset();
//        active = false
//        console.log(active)
//    })
//    
//})
    
//  sliderList = slider.querySelector('.slider-list'),
//  sliderTrack = slider.querySelector('.slider-track'),
//  slides = slider.querySelectorAll('.slide'),
//  arrows = slider.querySelector('.slider-arrows'),
//  prev = arrows.children[0],
//  next = arrows.children[1],
//  slideWidth = slides[0].offsetWidth,
//  slideIndex = 0,
//  posInit = 0,
//  posX1 = 0,
//  posX2 = 0,
//  posY1 = 0,
//  posY2 = 0,
//  posFinal = 0,
//  isSwipe = false,
//  isScroll = false,
//  allowSwipe = true,
//  transition = true,
//  nextTrf = 0,
//  prevTrf = 0,
//  lastTrf = --slides.length * slideWidth,
//  posThreshold = slides[0].offsetWidth * 0.35,
//  trfRegExp = /([-0-9.]+(?=px))/,
//  getEvent = function() {
//    return (event.type.search('touch') !== -1) ? event.touches[0] : event;
//  },
//  slide = function() {
//    if (transition) {
//      sliderTrack.style.transition = 'transform .5s';
//    }
//    sliderTrack.style.transform = `translate3d(-${slideIndex * slideWidth}px, 0px, 0px)`;
//
//    prev.classList.toggle('disabled', slideIndex === 0);
//    next.classList.toggle('disabled', slideIndex === --slides.length);
//  },
//  swipeStart = function() {
//    let evt = getEvent();
//
//    if (allowSwipe) {
//
//      transition = true;
//
//      nextTrf = (slideIndex + 1) * -slideWidth;
//      prevTrf = (slideIndex - 1) * -slideWidth;
//
//      posInit = posX1 = evt.clientX;
//      posY1 = evt.clientY;
//
//      sliderTrack.style.transition = '';
//
//      document.addEventListener('touchmove', swipeAction);
//      document.addEventListener('mousemove', swipeAction);
//      document.addEventListener('touchend', swipeEnd);
//      document.addEventListener('mouseup', swipeEnd);
//
//      sliderList.classList.remove('grab');
//      sliderList.classList.add('grabbing');
//    }
//  },
//  swipeAction = function() {
//
//    let evt = getEvent(),
//      style = sliderTrack.style.transform,
//      transform = +style.match(trfRegExp)[0];
//
//    posX2 = posX1 - evt.clientX;
//    posX1 = evt.clientX;
//
//    posY2 = posY1 - evt.clientY;
//    posY1 = evt.clientY;
//
//    // определение действия свайп или скролл
//    if (!isSwipe && !isScroll) {
//      let posY = Math.abs(posY2);
//      if (posY > 7 || posX2 === 0) {
//        console.log('is scroll');
//        isScroll = true;
//        allowSwipe = false;
//      } else if (posY < 7) {
//        console.log('is swipe');
//        isSwipe = true;
//      }
//    }
//
//    if (isSwipe) {
//      // запрет ухода влево на первом слайде
//      if (slideIndex === 0) {
//        if (posInit < posX1) {
//          setTransform(transform, 0);
//          return;
//        } else {
//          allowSwipe = true;
//        }
//      }
//
//      // запрет ухода вправо на последнем слайде
//      if (slideIndex === --slides.length) {
//        if (posInit > posX1) {
//          setTransform(transform, lastTrf);
//          return;
//        } else {
//          allowSwipe = true;
//        }
//      }
//
//      // запрет протаскивания дальше одного слайда
//      if (posInit > posX1 && transform < nextTrf || posInit < posX1 && transform > prevTrf) {
//        console.log(transform, prevTrf);
//        reachEdge();
//        return;
//      }
//
//      // двигаем слайд
//      sliderTrack.style.transform = `translate3d(${transform - posX2}px, 0px, 0px)`;
//    }
//
//  },
//  swipeEnd = function() {
//    posFinal = posInit - posX1;
//
//    isScroll = false;
//    isSwipe = false;
//
//    document.removeEventListener('touchmove', swipeAction);
//    document.removeEventListener('mousemove', swipeAction);
//    document.removeEventListener('touchend', swipeEnd);
//    document.removeEventListener('mouseup', swipeEnd);
//
//    sliderList.classList.add('grab');
//    sliderList.classList.remove('grabbing');
//
//    if (allowSwipe) {
//      if (Math.abs(posFinal) > posThreshold) {
//        if (posInit < posX1) {
//          slideIndex--;
//        } else if (posInit > posX1) {
//          slideIndex++;
//        }
//      }
//
//      if (posInit !== posX1) {
//        allowSwipe = false;
//        slide();
//      } else {
//        allowSwipe = true;
//      }
//
//    } else {
//      allowSwipe = true;
//    }
//
//  },
//  setTransform = function(transform, comapreTransform) {
//    if (transform >= comapreTransform) {
//      if (transform > comapreTransform) {
//        sliderTrack.style.transform = `translate3d(${comapreTransform}px, 0px, 0px)`;
//      }
//    }
//    allowSwipe = false;
//  },
//  reachEdge = function() {
//    transition = false;
//    swipeEnd();
//    allowSwipe = true;
//  };
//
//sliderTrack.style.transform = 'translate3d(0px, 0px, 0px)';
//sliderList.classList.add('grab');
//
//sliderTrack.addEventListener('transitionend', () => allowSwipe = true);
//slider.addEventListener('touchstart', swipeStart);
//slider.addEventListener('mousedown', swipeStart);
//
//arrows.addEventListener('click', function() {
//  let target = event.target;
//
//  if (target.classList.contains('next')) {
//    slideIndex++;
//  } else if (target.classList.contains('prev')) {
//    slideIndex--;
//  } else {
//    return;
//  }
//
//  slide();
//});