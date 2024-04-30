
<?php 
define('biblioteca',[]);

function añadirlibro(string $titulo, string $autor, string $ISBN, string $genero,int $paginas){
    $nuevolibro = new libro($titulo, $autor, $ISBN, $genero,$paginas);
array_push(biblioteca,$nuevolibro);
}
añadirlibro('a','a','a','a',2);
function eliminarlibro($ISBN){
for($i= 0;$i<count(biblioteca);$i++){
if (get_isbn(biblioteca[$i])=== $ISBN){
    biblioteca.splice($i);
    echo 'El libro ' . $ISBN . ' ha sido eliminado correctamente';
    break;
}
else if ( $i ==count(biblioteca) -1&& get_isbn(biblioteca[$i]) != $ISBN){
    echo 'No se ha encontrado el libro con ISBN: ' . $ISBN ;
}
}
}
function buscarlibroportitulo($titulo){
    echo 'Estos son todos los libros titulados '. $titulo. '<br/>';
    if (get_titulo(biblioteca[$i])=== $titulo){
        biblioteca[$i]->Tostring();
    }
}
function buscarlibroporgenero($genero){
    echo 'Estos son todos los libros del genero '. $genero. '<br/>';
    if (get_titulo(biblioteca[$i])=== $genero){
        biblioteca[$i]->Tostring();
    }
}
 function buscarlibroporISBN($ISBN){
    if (get_isbn(biblioteca[$i])=== $ISBN){
        biblioteca[$i]->Tostring();
       
    }
    else if ( $i ==count(biblioteca) -1&& get_isbn(biblioteca[$i]) != $ISBN){
        echo 'No se ha encontrado ningun libro con ISBN: ' . $ISBN . '<br/>' ;
    }
}
function buscarlibroporautor($autor){
    echo 'Estos son los libros con 500 paginas o más <br/>';
if (get_paginas(biblioteca[$i]) >= 500){
    biblioteca[$i]->Tostring();
}
}
 function mostrarlibroslargos(){

}
class libro{
public string $titulo;
public string $autor;
public string $ISBN;
public string $genero;
public int $paginas;
public function __construct(string $titulo, string $autor, string $ISBN, string $genero, int $paginas){
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->ISBN = $ISBN;
    $this->genero = $genero;
    $this->paginas = $paginas;
}

function get_titulo(){
return $this->titulo;
}
function get_autor(){
    return $this->autor;
}
function get_genero(){
    return $this->genero;
}
function get_isbn(){
    return $this->ISBN;
}
function get_paginas(){
    return $this->paginas;
}
function Tostring(){
    Echo 'Titulo: ' . $this->titulo . '<br/>';
    Echo 'Autor: ' . $this->autor . '<br/>';
    Echo 'ISBN: ' . $this->ISBN . '<br/>';
    Echo 'Genero: ' . $this->genero . '<br/>';
}
}
?>

