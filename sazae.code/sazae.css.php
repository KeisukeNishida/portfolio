h1 {

    font-family: "游明朝", YuMincho, "ヒラギノ明朝 ProN W3",
    "Hiragino Mincho ProN","HG明朝E","ＭＳ Ｐ明朝","ＭＳ 明朝",serif;
    -webkit-transform-origin: 0 0;
    -webkit-transform: scale(1, 1.01);
    -moz-transform-origin: 0 0;
    -moz-transform: scale(1, 1.01);
    -ms-transform-origin: 0 0;
    -ms-transform: scale(1, 1.02);
    -o-transform-origin: 0 0;
    -o-transform: scale(1, 1.01);


}


body{
  background:#F5D8EB;
  background-size:cover;
  font-family:sans-serif;
  text-align:center;
  padding-top:20%
}

.content {
    width: 400px;
    background: #fff;
    padding: 30px;
    text-align: center;
    z-index: 995;
  box-shadow:0 3px 36px 0 rgba(0, 0, 0, 0.6);
  display:inline-block;
  opacity:0.7;
  color:#666;
  text-decoration:none;
  transition:all 0.2s
}

.content:hover{
  box-shadow:0 3px 6px 0 rgba(0, 0, 0, 0.3);
  padding:40px;
  margin-top:-10px;
  color:#444
}

.btn-square-g {
  display: inline-block;
  padding: 0.5em 1em;
  text-decoration: none;
  background: #668ad8;/*ボタン色*/
  color: #FFF;
  border-bottom: solid 4px #627295;
  border-radius: 3px;
}

.btn-square-g:active {
  /*ボタンを押したとき*/
  -webkit-transform: translateY(4px);
  transform: translateY(4px);/*下に動く*/
  border-bottom: none;/*線を消す*/
}

.btn-square-c {
  display: inline-block;
  padding: 0.5em 1em;
  text-decoration: none;
  background: #D8668A ;/*ボタン色*/
  color:#FFF;
  border-bottom: solid 4px #627295;
  border-radius: 3px;
}

.btn-square-c:active {
  /*ボタンを押したとき*/
  -webkit-transform: translateY(4px);
  transform: translateY(4px);/*下に動く*/
  border-bottom: none;/*線を消す*/
}

.btn-square-p {
  display: inline-block;
  padding: 0.5em 1em;
  text-decoration: none;
  background: #66D87B  ;/*ボタン色*/
  color:#FFF;
  border-bottom: solid 4px #627295;
  border-radius: 3px;
}

.btn-square-p:active {
  /*ボタンを押したとき*/
  -webkit-transform: translateY(4px);
  transform: translateY(4px);/*下に動く*/
  border-bottom: none;/*線を消す*/
}

.btn-square-re {
  display: inline-block;
  padding: 0.5em 1em;
  text-decoration: none;
  background:#06080C    ;/*ボタン色*/
  color:#FFF;
  border-bottom: solid 4px #627295;
  border-radius: 3px;
}

.btn-square-re:active {
  /*ボタンを押したとき*/
  -webkit-transform: translateY(4px);
  transform: translateY(4px);/*下に動く*/
  border-bottom: none;/*線を消す*/
}




html {
  height:100%;
}

body {
  margin:0;
}

.bg {
  animation:slide 3s ease-in-out infinite alternate;
  background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
  bottom:0;
  left:-50%;
  opacity:.5;
  position:fixed;
  right:-50%;
  top:0;
  z-index:-1;
}

.bg2 {
  animation-direction:alternate-reverse;
  animation-duration:4s;
}

.bg3 {
  animation-duration:5s;
}

.content {
  background-color:rgba(255,255,255,.8);
  border-radius:.25em;
  box-shadow:0 0 .25em rgba(0,0,0,.25);
  box-sizing:border-box;
  left:50%;
  padding:10vmin;
  position:fixed;
  text-align:center;
  top:50%;
  transform:translate(-50%, -50%);
}

h1 {
  font-family:monospace;
}

@keyframes slide {
  0% {
    transform:translateX(-25%);
  }
  100% {
    transform:translateX(25%);
  }
}

body{
     background-color: #000000;
   padding: 0px;
   margin: 0px;
 }

#gradient
{
  width: 100%;
  height: 800px;
  padding: 0px;
  margin: 0px;
}




@import url('https://fonts.googleapis.com/css?family=Montserrat');
body {
    background-color: #111;
}

.title {
    font-family: "Montserrat";
    text-align: center;
    color: #FFF;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    letter-spacing: 1px;
}

h1 {
    background-image: url(https://media.giphy.com/media/26BROrSHlmyzzHf3i/giphy.gif);
    background-size: cover;
    color: transparent;
    -moz-background-clip: text;
    -webkit-background-clip: text;
    text-transform: uppercase;
    font-size: 100px;
    line-height: .90;
    margin: 10px 0;
}
/* styling my button */

.white-mode {
    text-decoration: none;
    padding: 7px 10px;
    background-color: #122;
    border-radius: 3px;
    color: #FFF;
    transition: .35s ease-in-out;
    position: absolute;
    left: 15px;
    bottom: 15px;
    font-family: "Montserrat";
}

.white-mode:hover {
    background-color: #FFF;
    color: #122;
}
