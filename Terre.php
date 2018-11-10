<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <title>My first three.js app</title>
    <style>
        body { margin: 0; }
        canvas { width: 100%; height: 100% }
    </style>
</head>
<body>
<script src="three.js-dev/build/three.js"></script>
<script src="threex.planets-master/threex.planets.js"></script>
<script src="threex.planets-master/threex.atmospherematerial.js"></script>
<script src="three.js-dev/examples/js/controls/OrbitControls.js"></script>
<script>
    var scene = new THREE.Scene();
    var camera = new THREE.PerspectiveCamera(70, window.innerWidth / window.innerHeight, 0.1, 1000);
    var renderer = new THREE.WebGLRenderer();

    renderer.setSize( window.innerWidth, window.innerHeight );
    document.body.appendChild( renderer.domElement );

    var geometry = new THREE.SphereGeometry( 1.8, 20, 20 );
    var texture = new THREE.TextureLoader().load( 'images/3.jpg' );
    var material = new THREE.MeshBasicMaterial( {map: texture} );
    var terre = new THREE.Mesh( geometry, material );
    scene.add( terre );


    var geometry2 = new THREE.SphereGeometry( 0.9, 10, 10 );
    var texture2 = new THREE.TextureLoader().load( 'images/lune.jpg' );
    var material2 = new THREE.MeshBasicMaterial( {map: texture2} );
    var lune = new THREE.Mesh(geometry2,material2)
    lune.position.x = 4;
    scene.add(lune);

    camera.position.z = 5;
    var controls = new THREE.OrbitControls( camera );

    camera.position.set( 0, 0.2, 5 );
    controls.update();

    var pivot = new THREE.Object3D();
    scene.add(pivot);
    pivot.add(terre);
    pivot.add(lune);

    function animate() {
        requestAnimationFrame(animate);
        renderer.render(scene,camera);
        //sphere.rotation.y += 0.005;
        //lune.rotation.y += 0.0025;
        pivot.rotation.y += (1.2*(Math.PI / 180)) % 360;
        lune.rotation.y += ((2*Math.PI / 180)) % 360;
    }
    animate();
</script>
</body>
</html>