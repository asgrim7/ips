<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <a class="navbar-brand" href="#"><b>PROAC</b></a>
           
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('univer')}}" ><b>Universidades</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('proac')}}"><b>Programas Academicos</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('depar')}}"><b>Departamentos</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('estad')}}"><b>Estadisticas</b></a>
                </li>
                </ul>
            </div>
        </nav>  
        <header class="grid-block" style="background-image: url('/images/unif.jpg'); width: 100%; height: 100vh; ">
            <div class="row justify-content-center"> 
                <div class="col-12 text-center">
                    <h1>PROGRAMAS ACADÉMICOS UNIVERSITARIOS</h1>
                </div>
                
                <div class="row justify-content-center" >
                    <div class="col-5 text-center mt-5">    
            
                        <img src="images/uni3.png" alt="imagen" width="220" height="150" class="border border-dark bg-light"/>
                        <div class="col">
                        <a href="{{route('univer')}}" class="h5 text-dark" style="background-color:white">Universidades</a>
                        </div>  
                                 
                    </div>
                    <div class="col-5 text-center mt-5"> 
                        
                        <img src="images/libro.png" alt="imagen" width="220" height="150" class="border border-dark bg-light"/>
                        <div class="col">
                        <a href="{{route('proac')}}"class="h5 text-dark" style="background-color:white">Programas academicos</a>
                        </div>      
                        
                    </div>
                    <div class="col-5 mt-5 text-center">
                        
                        <img src="images/dep.png" alt="imagen" width="220" height="150" class="border border-dark bg-light">
                        <div>
                            <a href="{{route('depar')}}"class="h5 text-dark" style="background-color:white">Departamentos</a><br>
                        </div>             
                        
                    </div>
                    <div class="col-5 mt-5 text-center ">
                       
                        <img src="images/est1.png" alt="imagen" width="220" height="150" class="border border-dark bg-light">
                        <div>
                        <a href="{{route('estad')}}"class="h5 text-dark"style="background-color:white">Estadisticas</a><br>
                        </div>      
                       
                    </div>   
                </div>             
            </div>
        </header>
        <section class="container-fluid">
            <div class="row "style="height: 200 px; background-color:#5CBD9D;" >
                <div class="col-12  text-center mt-3">
                    <h2 style="color:white"> Nosotros</h2>
                    <hr style=" width: 100px; border:3px solid white;">
                </div>
                <div class="col-12"  > 
                    <div class="col text-center mt-3 ">
                        <p style="color:white">Somos estudiantes de la universidad Nacional de san Agústin de Arequipa mostrando un proyecto web que tiene la finalidad de informar a los estudiantes sobre los programas academicos 
                    </div>
                </div>
             </div>
        
        </section>
    </body>
</html>