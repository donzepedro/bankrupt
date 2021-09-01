<?php

?>
<style>
    .slide-area{
        width: 100%;
        
        background: yellow;
    }
.slider {
  position: relative;
  width: 200px;
  height: 200px;
  margin: 50px auto 0;
  /* Чтобы во время перетаскивания слайда ничего не выделить внутри него */
  user-select: none;
  /* Чтобы запретить скролл страницы, если мы начали двигать слайдер по оси X */
  touch-action: pan-y;
}

/* Если где-то внутри слайдера будут изображения,
то нужно задать им pointer-events: none,
чтобы они не перетаскивались мышью */

.slider img {
  poiner-events: none;
}

.slider-list {
  width: 200px;
  height: 200px;
  overflow: hidden;
}

.slider-list.grab {
  cursor: grab;
}

.slider-list.grabbing{
  cursor: grabbing;
}

.slider-track {
    transform: translate3d(0px,0px,0px); 
  display: flex;
}

.slide {
  width: 200px;
  height: 200px;
  /* Чтобы слайды не сжимались */
  flex-shrink: 0;
  /* Увеличиваем и центрируем цифру внутри слайда */
  font-size: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 1px solid #000;
}

.slider-arrows {
  margin-top: 15px;
  text-align: center;
}

.next,
.prev {
  background: none;
  border: none;
  margin: 0 10px;
  font-size: 30px;
  cursor: pointer;
}

.next.disabled,
.prev.disabled {
  opacity: .25;
  pointer-events: none;
}
</style>
<div class="slide-area" id="slide-area">
<div class="slider" id="slider">
  <div class="slider-list">
    <div class="slider-track">
      <div class="slide">1</div>
      <div class="slide">2</div>
      <div class="slide">3</div>
      <div class="slide">4</div>
      <div class="slide">5</div>
    </div>
  </div>
  <div class="slider-arrows">
    <button type="button" class="prev">&larr;</button>
    <button type="button" class="next">&rarr;</button>
  </div>
</div>
</div>