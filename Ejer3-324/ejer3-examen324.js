var camera, scene, renderer;
var cameraControls;
var clock = new THREE.Clock();
var ambientLight, light;


function init() {
	var canvasWidth = window.innerWidth * 0.9;
	var canvasHeight = window.innerHeight * 0.9;

	// CAMARA

	camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 1, 80000 );
	camera.position.set(-1,1,40);
	camera.lookAt(0,0,0);

	// LUCES

	light = new THREE.DirectionalLight( 0xFFFFFF, 0.7 );
	light.position.set( -3, 1, 1 );
	light.target.position.set(0, 0, 0);
	light.target.updateMatrixWorld()

	var ambientLight = new THREE.AmbientLight( 0x111111 );

	// RENDERIZADO
	renderer = new THREE.WebGLRenderer( { antialias: true } );
	renderer.setSize( canvasWidth, canvasHeight );
	renderer.setClearColor( 0xAAAAAA, 1.0 );

	renderer.gammaInput = true;
	renderer.gammaOutput = true;

	// DOM
	var container = document.getElementById('container');
	container.appendChild( renderer.domElement );

	// CONTROLES
	cameraControls = new THREE.OrbitControls( camera, renderer.domElement );
	cameraControls.target.set(0, 0, 0);

	// OBJETO
	
	// ESCENARIO
	scene = new THREE.Scene();
	
	
	var juntar=new THREE.Geometry();
	var material = new THREE.MeshPhongMaterial( { color: 0xF0F8FF } );
	
	var geometry = new THREE.SphereGeometry( 1.5, 32, 32 );
	var sphere = new THREE.Mesh(geometry);
	sphere.position.set(0, 7, 0);
	juntar.mergeMesh(sphere);
	
	geometry = new THREE.SphereGeometry( 2, 32, 32 );
	sphere = new THREE.Mesh(geometry);
	sphere.position.set(0, 4, 0);
	juntar.mergeMesh(sphere);
	
	geometry = new THREE.SphereGeometry( 2.9, 32, 32 );
	sphere = new THREE.Mesh(geometry);
	sphere.position.set(0, 1, 0);
	juntar.mergeMesh(sphere);

	var cuerpo=new THREE.Mesh(juntar,material);
	scene.add(cuerpo);
	
	var juntar1=new THREE.Geometry();
	var material1 = new THREE.MeshPhongMaterial( { color: 0x111111 } );
	
	geometry = new THREE.CylinderGeometry(1.5, 1.5, 2, 32);
    cili = new THREE.Mesh(geometry);
	cili.position.set(0, 9, 0);
	juntar1.mergeMesh(cili);
	
	geometry = new THREE.CylinderGeometry(2, 2, 0.3, 32);
    cili = new THREE.Mesh(geometry);
	cili.position.set(0, 8, 0);
	juntar1.mergeMesh(cili);
	
	geometry = new THREE.SphereGeometry( 0.3, 32, 32 );
	cili = new THREE.Mesh(geometry);
	cili.position.set(-1, 7, 1.1);
	juntar1.mergeMesh(cili);
	geometry = new THREE.SphereGeometry( 0.3, 32, 32 );
	cili = new THREE.Mesh(geometry);
	cili.position.set(1, 7, 1.1);
	juntar1.mergeMesh(cili);
	geometry = new THREE.CylinderGeometry(0.05, 0.05, 2, 32);
    cili = new THREE.Mesh(geometry);
	cili.position.set(2.4, 4, 0);
	cili.rotateZ(0.7);
	juntar1.mergeMesh(cili);
	geometry = new THREE.CylinderGeometry(0.05, 0.05, 1.5, 32);
    cili = new THREE.Mesh(geometry);
	cili.position.set(2.8, 2.6, 0);
	cili.rotateZ(-0.3);
	juntar1.mergeMesh(cili);
	geometry = new THREE.CylinderGeometry(0.05, 0.05, 2, 32);
    cili = new THREE.Mesh(geometry);
	cili.position.set(-2.4, 4, 0);
	cili.rotateZ(-0.7);
	juntar1.mergeMesh(cili);
	geometry = new THREE.CylinderGeometry(0.05, 0.05, 1.5, 32);
    cili = new THREE.Mesh(geometry);
	cili.position.set(-2.8, 2.6, 0);
	cili.rotateZ(0.3);
	juntar1.mergeMesh(cili);
	geometry = new THREE.CubeGeometry( 0.6, 0.1, 0.3 );
	esf = new THREE.Mesh(geometry);
	esf.position.set(0, 6, 1);
	juntar1.mergeMesh(esf);
	geometry = new THREE.CubeGeometry( 0.3, 0.3, 0.3 );
	esf = new THREE.Mesh(geometry);
	esf.position.set(0, 5, 1.7);
	juntar1.mergeMesh(esf);
	geometry = new THREE.CubeGeometry( 0.3, 0.3, 0.3 );
	esf = new THREE.Mesh(geometry);
	esf.position.set(0, 4, 1.9);
	juntar1.mergeMesh(esf);
	material = new THREE.MeshPhongMaterial( { color: 0xFF8C00 } );
	geometry = new THREE.CylinderGeometry(0.01, 0.4, 1, 32);
    cili = new THREE.Mesh(geometry,material);
	cili.rotateX(1.6);
	cili.position.set(0, 6.6, 1.7);
	scene.add(cili);
	material = new THREE.MeshPhongMaterial( { color: 0x008000 } );
	geometry = new THREE.BoxGeometry(40, 0.1, 40);
    cili = new THREE.Mesh(geometry,material);
	cili.position.set(0, -1.5, 0);
	scene.add(cili);
	
	var cuerpo=new THREE.Mesh(juntar1,material1);
	scene.add(cuerpo);
	
	scene.add( light );
	scene.add( ambientLight );

}

function animate() {
	window.requestAnimationFrame( animate );
	render();
}

function render() {
	var delta = clock.getDelta();
	cameraControls.update(delta);
	renderer.render( scene, camera );
}

try {
	init();
	animate();
} catch(e) {
	var errorReport = "Error, no se puede dibujar en el canvas, causa de error: <br/><br/>";
	$('#container').append(errorReport+e);
}
