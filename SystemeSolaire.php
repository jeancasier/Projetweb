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
<div style='position:absolute'>
    <button onclick='switchValue(this.innerHTML);'>Fixe</button>
    <button onclick='switchValue(this.innerHTML);'>Rotation</button>

</div>
<script>
    var scene = new THREE.Scene();
    var camera = new THREE.PerspectiveCamera(70, window.innerWidth / window.innerHeight, 0.1, 1000);
    var renderer = new THREE.WebGLRenderer();

    renderer.setSize( window.innerWidth, window.innerHeight );
    document.body.appendChild( renderer.domElement );

    var geometry = new THREE.SphereGeometry( 1.8, 200, 1000 );
    var texture = new THREE.TextureLoader().load( 'images/soleil.jpg' );
    var material = new THREE.MeshBasicMaterial( {map: texture} );
    var soleil = new THREE.Mesh( geometry, material );
    scene.add( soleil );

    var geometry = new THREE.SphereGeometry( 0.9, 10, 10 );
    var texture = new THREE.TextureLoader().load( 'images/Mercure.jpg' );
    var material = new THREE.MeshBasicMaterial( {map: texture} );
    var mercure = new THREE.Mesh(geometry,material);
    mercure.position.x = 4;
    scene.add(mercure);

    var geometry = new THREE.SphereGeometry( 0.9, 10, 10 );
    var texture = new THREE.TextureLoader().load( 'images/Venus.jpg' );
    var material = new THREE.MeshBasicMaterial( {map: texture} );
    var venus = new THREE.Mesh(geometry,material);
    venus.position.x = 8;
    scene.add(venus);

    var geometry = new THREE.SphereGeometry( 0.9, 10, 10 );
    var texture = new THREE.TextureLoader().load( 'images/3.jpg' );
    var material = new THREE.MeshBasicMaterial( {map: texture} );
    var terre = new THREE.Mesh(geometry,material);
    terre.position.x = 12;
    scene.add(terre);

    var geometry = new THREE.SphereGeometry( 0.9, 10, 10 );
    var texture = new THREE.TextureLoader().load( 'images/mars.jpg' );
    var material = new THREE.MeshBasicMaterial( {map: texture} );
    var mars = new THREE.Mesh(geometry,material);
    mars.position.x = 16;
    scene.add(mars);

    var geometry = new THREE.SphereGeometry( 0.9, 10, 10 );
    var texture = new THREE.TextureLoader().load( 'images/Jupiter.jpg' );
    var material = new THREE.MeshBasicMaterial( {map: texture} );
    var jupiter = new THREE.Mesh(geometry,material);
    jupiter.position.x = 20;
    scene.add(jupiter);

    var geometry = new THREE.SphereGeometry( 0.9, 10, 10 );
    var texture = new THREE.TextureLoader().load( 'images/saturne.jpg' );
    var material = new THREE.MeshBasicMaterial( {map: texture} );
    var saturne = new THREE.Mesh(geometry,material);
    saturne.position.x = 24;
    scene.add(saturne);

    var geometry = new THREE.SphereGeometry( 0.9, 10, 10 );
    var texture = new THREE.TextureLoader().load( 'images/Uranus.jpg' );
    var material = new THREE.MeshBasicMaterial( {map: texture} );
    var uranus = new THREE.Mesh(geometry,material);
    uranus.position.x = 28;
    scene.add(uranus);

    var geometry = new THREE.SphereGeometry( 0.9, 10, 10 );
    var texture = new THREE.TextureLoader().load( 'images/neptune.jpg' );
    var material = new THREE.MeshBasicMaterial( {map: texture} );
    var neptune = new THREE.Mesh(geometry,material);
    neptune.position.x = 32;
    scene.add(neptune);

    var pivotmercure = new THREE.Object3D();
    scene.add(pivotmercure);
    pivotmercure.add(soleil);
    pivotmercure.add(mercure);

    var pivotvenus = new THREE.Object3D();
    scene.add(pivotvenus);
    pivotvenus.add(soleil);
    pivotvenus.add(venus);

    var pivotterre = new THREE.Object3D();
    scene.add(pivotterre);
    pivotterre.add(soleil);
    pivotterre.add(terre);

    var pivotmars = new THREE.Object3D();
    scene.add(pivotmars);
    pivotmars.add(soleil);
    pivotmars.add(mars);

    var pivotjupiter = new THREE.Object3D();
    scene.add(pivotjupiter);
    pivotjupiter.add(soleil);
    pivotjupiter.add(jupiter);

    var pivotsaturne = new THREE.Object3D();
    scene.add(pivotsaturne);
    pivotsaturne.add(soleil);
    pivotsaturne.add(saturne);

    var pivoturanus = new THREE.Object3D();
    scene.add(pivoturanus);
    pivoturanus.add(soleil);
    pivoturanus.add(uranus);

    var pivotneptune = new THREE.Object3D();
    scene.add(pivotneptune);
    pivotneptune.add(soleil);
    pivotneptune.add(neptune);

    var controls = new THREE.OrbitControls( camera );
    camera.position.set( 0, 7, 15 );
    controls.update();

    function animate() {
        requestAnimationFrame(animate);
        renderer.render(scene,camera);
        //sphere.rotation.y += 0.005;
        //lune.rotation.y += 0.0025;
        pivotmercure.rotation.y += (2*(Math.PI / 180)) % 360;
        mercure.rotation.y += ((2*Math.PI / 180)) % 360;

        pivotvenus.rotation.y += (1.6*(Math.PI / 180)) % 360;
        venus.rotation.y += ((2*Math.PI / 180)) % 360;

        pivotterre.rotation.y += (1.2*(Math.PI / 180)) % 360;
        terre.rotation.y += ((2*Math.PI / 180)) % 360;

        pivotmars.rotation.y += (1*(Math.PI / 180)) % 360;
        mars.rotation.y += ((2*Math.PI / 180)) % 360;

        pivotjupiter.rotation.y += (0.7*(Math.PI / 180)) % 360;
        jupiter.rotation.y += ((2*Math.PI / 180)) % 360;

        pivotsaturne.rotation.y += (0.5*(Math.PI / 180)) % 360;
        saturne.rotation.y += ((2*Math.PI / 180)) % 360;

        pivoturanus.rotation.y += (0.2*(Math.PI / 180)) % 360;
        uranus.rotation.y += ((2*Math.PI / 180)) % 360;

        pivotneptune.rotation.y += (0.1*(Math.PI / 180)) % 360;
        neptune.rotation.y += ((2*Math.PI / 180)) % 360;
    }

    animate();



</script>
</body>
</html>