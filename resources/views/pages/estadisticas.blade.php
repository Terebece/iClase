@extends('layouts.default_tutor')

@section('content')

<style>
@-webkit-keyframes bake-pie {
  from {
    transform: rotate(0deg) translate3d(0, 0, 0);
  }
}

@keyframes bake-pie {
  from {
    transform: rotate(0deg) translate3d(0, 0, 0);
  }
}
.pie-chart {
  font-family: "Open Sans", Arial;
}
.pie-chart--wrapper {
  width: 400px;
  margin: 30px auto;
  text-align: center;
}
.pie-chart__pie, .pie-chart__legend {
  display: inline-block;
  vertical-align: top;
}
.pie-chart__pie {
  position: relative;
  height: 200px;
  width: 200px;
  margin: 10px auto 35px;
}
.pie-chart__pie::before {
  content: "";
  display: block;
  position: absolute;
  z-index: 1;
  width: 100px;
  height: 100px;
  background: #EEE;
  border-radius: 50%;
  top: 50px;
  left: 50px;
}
.pie-chart__pie::after {
  content: "";
  display: block;
  width: 120px;
  height: 2px;
  background: rgba(0, 0, 0, 0.1);
  border-radius: 50%;
  box-shadow: 0 0 3px 4px rgba(0, 0, 0, 0.1);
  margin: 220px auto;
}

.slice {
  position: absolute;
  width: 200px;
  height: 200px;
  clip: rect(0px, 200px, 200px, 100px);
  -webkit-animation: bake-pie 1s;
          animation: bake-pie 1s;
}
.slice span {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  background-color: black;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  clip: rect(0px, 200px, 200px, 100px);
}

.pie-chart__legend {
  display: block;
  list-style-type: none;
  padding: 0;
  margin: 0 auto;
  background: #FFF;
  padding: 0.75em 0.75em 0.05em;
  font-size: 13px;
  box-shadow: 1px 1px 0 #DDD, 2px 2px 0 #BBB;
  text-align: left;
  width: 65%;
}
.pie-chart__legend li {
  height: 1.25em;
  margin-bottom: 0.7em;
  padding-left: 0.5em;
  border-left: 1.25em solid black;
}
.pie-chart__legend em {
  font-style: normal;
}
.pie-chart__legend span {
  float: right;
}

.pie-charts {
  display: flex;
  flex-direction: row;
}
@media (max-width: 500px) {
  .pie-charts {
    flex-direction: column;
  }
}
</style>

<div class="contenedor_f7">
  <div class="wrapper">
    <h1 class="text-center">Estadísticas</h1>
    <div class="pie-charts">
      <div class="pieID--micro-skills pie-chart--wrapper">
        <h2>Progreso de actividades escolares</h2>
        <div class="pie-chart">
          <div class="pie-chart__pie"></div>
          <ul class="pie-chart__legend">
            <li><em>Terminadas</em><span>242</span></li>
            <li><em>No terminadas</em><span>12</span></li>
          </ul>
        </div>
      </div>
      <div class="pieID--categories pie-chart--wrapper">
        <h2>Progreso de actividades extraescolares</h2>
        <div class="pie-chart">
          <div class="pie-chart__pie"></div>
          <ul class="pie-chart__legend">
            <li><em>Karate</em><span>768</span></li>
            <li><em>Pintura</em><span>534</span></li>
          </ul>
        </div>
      </div>
      <div class="pieID--operations pie-chart--wrapper">
        <h2>Progreso por materias</h2>
        <div class="pie-chart">
          <div class="pie-chart__pie"></div>
          <ul class="pie-chart__legend">
            <li><em>Español</em><span>286</span></li>
            <li><em>Geografía</em><span>156</span></li>
            <li><em>Historia</em><span>215</span></li>
            <li><em>Matemáticas</em><span>143</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>

  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

<script id="rendered-js" >
function sliceSize(dataNum, dataTotal) {
  return dataNum / dataTotal * 360;
}

function addSlice(id, sliceSize, pieElement, offset, sliceID, color) {
  $(pieElement).append("<div class='slice " + sliceID + "'><span></span></div>");
  var offset = offset - 1;
  var sizeRotation = -179 + sliceSize;

  $(id + " ." + sliceID).css({
    "transform": "rotate(" + offset + "deg) translate3d(0,0,0)" });


  $(id + " ." + sliceID + " span").css({
    "transform": "rotate(" + sizeRotation + "deg) translate3d(0,0,0)",
    "background-color": color });

}

function iterateSlices(id, sliceSize, pieElement, offset, dataCount, sliceCount, color) {
  var
  maxSize = 179,
  sliceID = "s" + dataCount + "-" + sliceCount;

  if (sliceSize <= maxSize) {
    addSlice(id, sliceSize, pieElement, offset, sliceID, color);
  } else {
    addSlice(id, maxSize, pieElement, offset, sliceID, color);
    iterateSlices(id, sliceSize - maxSize, pieElement, offset + maxSize, dataCount, sliceCount + 1, color);
  }
}

function createPie(id) {
  var
  listData = [],
  listTotal = 0,
  offset = 0,
  i = 0,
  pieElement = id + " .pie-chart__pie";
  dataElement = id + " .pie-chart__legend";

  color = [
  "cornflowerblue",
  "olivedrab",
  "orange",
  "tomato",
  "crimson",
  "purple",
  "turquoise",
  "forestgreen",
  "navy"];


  color = shuffle(color);

  $(dataElement + " span").each(function () {
    listData.push(Number($(this).html()));
  });

  for (i = 0; i < listData.length; i++) {if (window.CP.shouldStopExecution(0)) break;
    listTotal += listData[i];
  }window.CP.exitedLoop(0);

  for (i = 0; i < listData.length; i++) {if (window.CP.shouldStopExecution(1)) break;
    var size = sliceSize(listData[i], listTotal);
    iterateSlices(id, size, pieElement, offset, i, 0, color[i]);
    $(dataElement + " li:nth-child(" + (i + 1) + ")").css("border-color", color[i]);
    offset += size;
  }window.CP.exitedLoop(1);
}

function shuffle(a) {
  var j, x, i;
  for (i = a.length; i; i--) {if (window.CP.shouldStopExecution(2)) break;
    j = Math.floor(Math.random() * i);
    x = a[i - 1];
    a[i - 1] = a[j];
    a[j] = x;
  }window.CP.exitedLoop(2);

  return a;
}

function createPieCharts() {
  createPie('.pieID--micro-skills');
  createPie('.pieID--categories');
  createPie('.pieID--operations');
}

createPieCharts();
//# sourceURL=pen.js
    </script>