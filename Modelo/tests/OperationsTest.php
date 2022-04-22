<?php

    use PHPUnit\Framework\TestCase;

    require __DIR__ . '/../Entidades/peliculas.php';

    class OperationsTest extends TestCase {
        
        private $op;

        public function setUp():void{
            $this->op = new modeloPelicula();
        }

        public function testAgregarPelicula() {
            $nombre = 'LOTR 3';
            $clasificacion = 'PG-13';
            $duracion = '3:30';
            $sinopsis = 'Lorem';
            $img = 'example.png';
            $pelicula = new Pelicula($nombre, $clasificacion, $duracion, $sinopsis, $img);
            $this->assertEquals(true, $this->op->agregarPelicula($nombre, $clasificacion, $duracion, $sinopsis, $img));
        }
    }
    // ./vendor/bin/phpunit tests
?>