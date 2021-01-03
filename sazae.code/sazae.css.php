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



HTML CSSResult Skip Results Iframe
EDIT ON
/* Fonts */
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400);

/* fontawesome */
@import url(http://weloveiconfonts.com/api/?family=fontawesome);
[class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif;
}

/* Simple Reset */
* { margin: 0; padding: 0; box-sizing: border-box; }

/* body */
body {
  background: #e9e9e9;
  color: #5e5e5e;
  font: 400 87.5%/1.5em 'Open Sans', sans-serif;
}

/* Form Layout */
.form-wrapper {
  background: #fafafa;
  margin: 3em auto;
  padding: 0 1em;
  max-width: 370px;
}

form {
  padding: 0 1.5em;
}

.form-item {
  margin-bottom: 0.75em;
  width: 100%;
}

.form-item input {
  background: #fafafa;
  border: none;
  border-bottom: 2px solid #e9e9e9;
  color: #666;
  font-family: 'Open Sans', sans-serif;
  font-size: 1em;
  height: 50px;
  transition: border-color 0.3s;
  width: 100%;
}

.form-item input:focus {
  border-bottom: 2px solid #c0c0c0;
  outline: none;
}

.button-panel {
  margin: 2em 0 0;
  width: 100%;
}

.button-panel .button {
  background: #f16272;
  border: none;
  color: #fff;
  cursor: pointer;
  height: 50px;
  font-family: 'Open Sans', sans-serif;
  font-size: 1.2em;
  letter-spacing: 0.05em;
  text-align: center;
  text-transform: uppercase;
  transition: background 0.3s ease-in-out;
  width: 100%;
}

.button:hover {
  background: #ee3e52;
}

.form-footer {
  font-size: 1em;
  padding: 2em 0;
  text-align: center;
}

.form-footer a {
  color: #8c8c8c;
  text-decoration: none;
  transition: border-color 0.3s;
}

.form-footer a:hover {
  border-bottom: 1px dotted #8c8c8c;
}


<!--test-->


body {
  background-color: red;
  
  /* SVG fallback for IE 9 (could be data URI, or could use filter) */
  background-image: url(fallback-gradient.svg);
  
  /* Safari 4, Chrome 1-9, iOS 3.2-4.3, Android 2.1-3.0 */
  background-image: -webkit-gradient(linear, left top, right top, from(red), to(#f06d06));
  
  /* Safari 5.1, iOS 5.0-6.1, Chrome 10-25, Android 4.0-4.3 */
  background-image: -webkit-linear-gradient(left, red, #f06d06);
  
  /* Firefox 3.6 - 15 */
  background-image: -moz-linear-gradient(left, red, #f06d06);
  
  /* Opera 11.1 - 12 */
  background-image: -o-linear-gradient(left, red, #f06d06);
  
  /* Opera 15+, Chrome 25+, IE 10+, Firefox 16+, Safari 6.1+, iOS 7+, Android 4.4+ */
  background-image: linear-gradient(to right, red, #f06d06);
  margin: 0px;
  overflow: hidden;
}