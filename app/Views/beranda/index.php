<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="">
    <title>Beranda | SMKN 1 GUNUNG SINDUR</title>
    <link rel="stylesheet" href="<?= base_url("font-awesome/all.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("bootstrap.css") ?>">
    <link rel="stylesheet" href="<?= base_url("beranda.css") ?>">
    <link rel="stylesheet" href="<?= base_url("style.css") ?>">

</head>
<body>

    <?= $this->include("components/main_components.php") ?>
    <?= $this->renderSection("navbar") ?>

    <div class="hero container-fluid">
        <div class="hero--grid row no-gutters">
            <div class="hero--content col-12 col-lg-6">
                <div>
                    <h1 class="display-1">SMKN 1 <br> GUNUNG SINDUR</h1>
                    <p class="display-6">Sekolah Pusat Keunggulan 2024</p>
                    <p class="display-6">Disiplin, Religius, dan Bersih</p>
                </div>
            </div>
            <div class="hero--img col-12 col-lg-6" id="container">
                <img src="https://upload.wikimedia.org/wikipedia/id/1/1d/Logo_SMKN_1_Gunung_Sindur.jpg" alt="Logo SMKN 1 GUNUNG SINDUR" style="display: none;">
            </div>
        </div>
    </div>

    <script type="importmap">
        {
            "imports": {
                "three": "<?= base_url() ?>three-js/three.webgpu.js",
                "three/webgpu": "<?= base_url() ?>three-js/three.webgpu.js",
                "three/tsl": "<?= base_url() ?>three-js/three.tsl.js",
                "three/addons/": "<?= base_url() ?>three-js/jsm/"
            }
        }
    </script>

    <script type="module">

        import * as THREE from 'three';

        import Stats from 'three/addons/libs/stats.module.js';

        import { GUI } from 'three/addons/libs/lil-gui.module.min.js';
        import { OrbitControls } from 'three/addons/controls/OrbitControls.js';
        import { WaterMesh } from 'three/addons/objects/WaterMesh.js';
        import { SkyMesh } from 'three/addons/objects/SkyMesh.js';

        let container, stats;
        let camera, scene, renderer;
        let controls, water, sun, mesh;

        init();

        function init() {

            container = document.getElementById( 'container' );

            //

            renderer = new THREE.WebGPURenderer();
            renderer.setPixelRatio( window.devicePixelRatio );
            renderer.setSize( window.innerWidth, window.innerHeight );
            renderer.setAnimationLoop( animate );
            renderer.toneMapping = THREE.ACESFilmicToneMapping;
            renderer.toneMappingExposure = 0.5;
            container.appendChild( renderer.domElement );

            //

            scene = new THREE.Scene();

            camera = new THREE.PerspectiveCamera(55, window.innerWidth / window.innerHeight, 1, 20000);
            camera.position.set(50, 10, 100);

            //

            sun = new THREE.Vector3();

            // Water

            const waterGeometry = new THREE.PlaneGeometry( 10000, 10000 );
            const loader = new THREE.TextureLoader();
            const waterNormals = loader.load( 'textures/waternormals.jpg' );
            waterNormals.wrapS = waterNormals.wrapT = THREE.RepeatWrapping;

            water = new WaterMesh(
                waterGeometry,
                {
                    waterNormals: waterNormals,
                    sunDirection: new THREE.Vector3(),
                    sunColor: 0xffffff,
                    // waterColor: 0x001e0f,
                    waterColor: 0x000000,
                    distortionScale: 3.7
                }
            );

            water.rotation.x = - Math.PI / 2;

            scene.add( water );

            // Skybox

            const sky = new SkyMesh();
            sky.scale.setScalar( 10000 );
            scene.add( sky );

            sky.turbidity.value = 10;
            sky.rayleigh.value = 2;
            sky.mieCoefficient.value = 0.005;
            sky.mieDirectionalG.value = 0.8;

            const parameters = {
                elevation: 45,
                azimuth: 90
            };

            const pmremGenerator = new THREE.PMREMGenerator( renderer );
            const sceneEnv = new THREE.Scene();

            let renderTarget;

            function updateSun() {

                const phi = THREE.MathUtils.degToRad( 90 - parameters.elevation );
                const theta = THREE.MathUtils.degToRad( parameters.azimuth );

                sun.setFromSphericalCoords( 1, phi, theta );

                sky.sunPosition.value.copy( sun );
                water.sunDirection.value.copy( sun ).normalize();

                if ( renderTarget !== undefined ) renderTarget.dispose();

                sceneEnv.add( sky );
                renderTarget = pmremGenerator.fromScene( sceneEnv );
                scene.add( sky );

                scene.environment = renderTarget.texture;

            }

            renderer.init().then( updateSun );

            //

            const geometry = new THREE.BoxGeometry( 30, 30, 3 );
            const material = new THREE.MeshStandardMaterial( { roughness: 0 , color: 0x1500ff} );

            mesh = new THREE.Mesh( geometry, material );
            mesh.position.set(0, 20, 0);
            scene.add( mesh );

            //

            window.addEventListener( 'resize', onWindowResize );

        }

        function onWindowResize() {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize( window.innerWidth, window.innerHeight );
        }

        function animate() {
            render();
        }

        function render() {
            renderer.render( scene, camera );
        }

    </script>

    <?= $this->renderSection("footer") ?>

</body>
</html>