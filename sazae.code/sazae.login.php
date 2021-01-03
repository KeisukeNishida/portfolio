<?php
print "<h1></h1>";

function h($s){
  return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
}

session_start();
//ログイン済みの場合
if (isset($_SESSION['EMAIL'])) {
  echo 'ようこそ' .  h($_SESSION['EMAIL']) . "さん<br>";
  echo "<a href='/logout.php'>ログアウトはこちら。</a>";
  exit;
}

 ?>


<!DOCTYPE html>
<html lang="ja">

  <head>
      <script type="text/javascript" src="sazae.js"></script>
      <meta charset="UTF-8">

      <br />
      <br />
      <br />
      <h1>サザエさん　<br />ジャンケンゲーム</h1>
  </head>

      <link rel="stylesheet" type="text/css" href="sazae.css.php" >

        

            <div class="bg"></div>
            <div class="bg bg2"></div>
            <div class="bg bg3"></div>

      <link rel="stylesheet" type="text/css" href="sazae.css.php" >
        
        

          <div class="form-wrapper">
  <h1>Sign In</h1>
  <form>
    <div class="form-item">
      <label for="email"></label>
      <input type="email" name="email" required="required" placeholder="Email Address"></input>
    </div>
    <div class="form-item">
      <label for="password"></label>
      <input type="password" name="password" required="required" placeholder="Password"></input>
    </div>
    <div class="button-panel">
      <input type="submit" class="button" title="Sign In" value="Sign In"></input>
    </div>
  </form>
  <div class="form-footer">
    <p><a href="#">Create an account</a></p>
    <p><a href="#">Forgot password?</a></p>
  </div>
</div>



<!--test-->
<!-- threejs.org canvas lines example -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r67/three.min.js"></script>

<script>
  var mouseX = 0,
      mouseY = 0,
      windowHalfX = window.innerWidth / 2,
      windowHalfY = window.innerHeight / 2,
      SEPARATION = 200,
      AMOUNTX = 10,
      AMOUNTY = 10,
      camera,
      scene,
      renderer;
  
  init();
  animate();

  function init() {

    var container,
        separation = 100,
        amountX = 50,
        amountY = 50,
        particle;
    
    container = document.createElement( 'div' );
    document.body.appendChild( container );

    scene = new THREE.Scene();

    renderer = new THREE.CanvasRenderer({ alpha: true }); // gradient; this can be swapped for WebGLRenderer
    renderer.setSize( window.innerWidth, window.innerHeight );
    container.appendChild( renderer.domElement );
    
    camera = new THREE.PerspectiveCamera(
      75,
      window.innerWidth / window.innerHeight,
      1,
      10000
    );
    camera.position.z = 100;

    // particles
    var PI2 = Math.PI * 2;
    var material = new THREE.SpriteCanvasMaterial({
      color: 0xffffff,
      program: function ( context ) {
        context.beginPath();
        context.arc( 0, 0, 0.5, 0, PI2, true );
        context.fill();
      }
    });
    
    var geometry = new THREE.Geometry();

    for ( var i = 0; i < 100; i ++ ) {
      particle = new THREE.Sprite( material );
      particle.position.x = Math.random() * 2 - 1;
      particle.position.y = Math.random() * 2 - 1;
      particle.position.z = Math.random() * 2 - 1;
      particle.position.normalize();
      particle.position.multiplyScalar( Math.random() * 10 + 450 );
      particle.scale.x = particle.scale.y = 10;
      scene.add( particle );
      geometry.vertices.push( particle.position );
    }

    // lines
    var line = new THREE.Line( geometry, new THREE.LineBasicMaterial( { color: 0xffffff, opacity: 0.5 } ) );
    scene.add( line );

    // mousey
    document.addEventListener( 'mousemove', onDocumentMouseMove, false );
    document.addEventListener( 'touchstart', onDocumentTouchStart, false );
    document.addEventListener( 'touchmove', onDocumentTouchMove, false );
    
    window.addEventListener( 'resize', onWindowResize, false );

  } // end init();

  function onWindowResize() {

    windowHalfX = window.innerWidth / 2;
    windowHalfY = window.innerHeight / 2;

    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();

    renderer.setSize( window.innerWidth, window.innerHeight );

  }

  function onDocumentMouseMove(event) {

    mouseX = event.clientX - windowHalfX;
    mouseY = event.clientY - windowHalfY;

  }

  function onDocumentTouchStart( event ) {

    if ( event.touches.length > 1 ) {

      event.preventDefault();

      mouseX = event.touches[ 0 ].pageX - windowHalfX;
      mouseY = event.touches[ 0 ].pageY - windowHalfY;

    }
  }

  function onDocumentTouchMove( event ) {

    if ( event.touches.length == 1 ) {

      event.preventDefault();

      mouseX = event.touches[ 0 ].pageX - windowHalfX;
      mouseY = event.touches[ 0 ].pageY - windowHalfY;

    }
  }

  function animate() {
    
    requestAnimationFrame( animate );
    render();
    
  }

  function render() {
    
    camera.position.x += ( mouseX - camera.position.x ) * .05;
    camera.position.y += ( - mouseY + 200 - camera.position.y ) * .05;
    camera.lookAt( scene.position );

    renderer.render( scene, camera );
  
  }
</script>

 
</html>


  
