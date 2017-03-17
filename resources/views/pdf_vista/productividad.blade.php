<!-- <style type="text/css">

	table, th, td{
	    border: 1px solid black;
	    border-collapse: collapse;
	    padding-right: 30px;
	    padding-bottom: 30px;
	    padding-top: 40px;
	    padding-left: 30px;
    }


    th, td {
    	padding: 5px;
    	text-align: center;
    
    }

    th{
    	text-align: center;
    }

    th.linea_div{
    	text-align: left;
    	/*padding-left: 60px; */
    }
    th.encabeza{
    	text-align: left;
    }

	p.sansserif {
	    font-family: Arial, Helvetica, sans-serif;
	    text-align: justify;
	    text-justify: inter-word;
    }

    p.titulo{
    	font-family:sans-serif; 
    	font-size: 1.7em;
    	text-align: center;
    	margin-top:10px;
    	margin-bottom: 3px;      	
    }

    hr.linea {
        display: block;
	    margin-top: 0.1em;
	    margin-bottom: 0.5em;
	    margin-left: auto;
	    margin-right: auto;
	    border-style: inset;
	    border-width: 0.5px;
	    border-color: rgb(0,0,255);
    }

</style> 
 -->
@extends('layouts.admin')

@section('content')
		<?php  
				$año = array('2010', '2011', '2012', '2013', '2014','2015', '2016' );
		 ?>  
		<div style="width: 100%">
			<p class="titulo"> Concentrado de Productos Académicos por Docente </p>
			<hr class="linea">
		<h4>Nombre del docente: 
		<select name="opcDoc"> 
			@foreach ($profesors as $profesor)
				<option selected="selected" value="000">{{$profesor -> nombre_prof}}</option>
			@endforeach
		</select></h4>
		</br>
		<p class="sansserif">
			La información que se pide a continuación es necesaria para cubrir uno de los puntos que pide la
			renovación del PNPC de la Maestría en Ciencias Nucleares de la Unidad Académica de Estudios
			Nucleares de la Universidad Autónoma de Zacatecas. Son la productividad total anual por docente
			en la publicación de Artículos en Revistas Indexadas Nacional e Internacional y la publicación de
			Artículos en Revistas Arbitradas Nacional e Internacional en la página web de esta institución.
		</p>
		<p>
		<strong>Enviar la Inforación al Dr. Ignacio Davila Rangel al correo: <em>idavilara@gmail.com</em></strong>
		</p>
		<table>
		  <tr>
		    <th class="encabeza">Productos Academicos</th>
			    		@for ($i = 0; $i<7; $i++)
			    		<th colspan="2"><?php  echo "$año[$i]" ?></th> 
			    		@endfor   
		  </tr>
		  <tr>
		    <td><strong>Artículo Publicados</strong></td>
		    @for($i = 0; $i < 7; $i++)
			    <td>N</td>
			    <td>I</td>
		    @endfor 
		  </tr>
		  <tr>
		  	<td><em>Revitas Indexadas</em></td>  
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td> 
		  </tr>
		  <tr> 
		  	<td><em>Revitas Arbitradas</em></td> 
		  	@for($i = 0; $i < 7; $i++)
			    <td></td>
			    <td></td>
		    @endfor    
		  </tr>
		  <tr>
		  	<th class="linea_div" colspan="15">Tutorías:</th>

		  </tr>
		  <tr>
		  	<td><strong>Dirección de Tesis <br>	Licenciatura</strong></td>
		  	@for ($i = 0; $i<7; $i++)
			    		<th colspan="2"><?php  echo "$año[$i]" ?></th> 
			@endfor  
		  </tr>
		  <tr>
		  	<td><em>Concluidas</em></td>  
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td> 
		  </tr>
		  <tr>
		  	<td><em>En Proceso</em></td>  
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td> 
		  </tr>
		  <tr>
		  	<td><strong>Dirección de Tesis <br>	Maestría en Ciencias</strong></td>
		  	@for ($i = 0; $i<7; $i++)
			    		<th colspan="2"><?php  echo "$año[$i]" ?></th> 
			@endfor  
		  </tr>
		  <tr>
		  	<td><em>Concluidas</em></td>  
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td> 
		  </tr>
		  <tr>
		  	<td><em>En Proceso</em></td>  
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td> 
		  </tr>
		  <tr>
		  	<td><strong>Dirección de Tesis <br>	Doctorado en Ciencias</strong></td>
		  	@for ($i = 0; $i<7; $i++)
			    		<th colspan="2"><?php  echo "$año[$i]" ?></th> 
			@endfor  
		  </tr>
		  <tr>
		  	<td><em>Concluidas</em></td>  
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td> 
		  </tr>
		  <tr>
		  	<td><em>En Proceso</em></td>  
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td> 
		  </tr>
		</table>
		</div>

 @stop
