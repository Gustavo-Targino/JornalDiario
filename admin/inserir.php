  <h2>Inserir Matéria</h2> 
  <form  id="contactForm" action="?pg=inserirdb" method="post">
     
	 <label>Título da matéria:</label> 
     <input type="text" class="form-control" name="titulo" required="" ><br>
	 Subtítulo: <input type="text" class="form-control" name="subtitulo" required><br>
	 Corpo da matéria:<textarea class="form-control" name="materia" rows="5" cols="10"
      required></textarea><br>
    Fonte: <input type="text" class="form-control" name="fonte" required><br>
	 <button type="submit" class="btn">Enviar</button>
  </form>
