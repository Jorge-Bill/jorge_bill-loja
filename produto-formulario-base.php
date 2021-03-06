   <div class="container animated fadeInRight">
   <div class="form-group">
        <label>Nome: </label>  
        <input class="form-control m-b" type="text" name="nome" value="<?php print $produto[nome];?>" placeholder="Mestre Yoda">
    </div>
    <div class="form-group">
       <label>Preço: </label>
        <input class="form-control m-b" type="number" name="preco" value="<?php print $produto[preco];?>"placeholder="9999,000">
    </div>
    <div class="form-group">
        <label>Descrição: </label>
        <textarea class="form-control m-b" name="descricao" placeholder="That is why you fail."><?php print $produto[descricao];?></textarea>
    </div>
    <div class="form-group">
        <input type="checkbox" name="usado" <?php print $usado;?> value="true"> Usado 
    </div>
    
    <div class="form-group  m-l-n">
        <label>Categoria: </label>
         <select class="form-control m-b" name="categoria_id">
                    <?php foreach($categorias as $categoria) :
                        $essaEhACategoria = $produto[categoria_id] == $categoria['id'];
                        $selecao = $essaEhACategoria ? "selected='selected'" : "";
                    ?>
                        <option value="<?php print $categoria['id'];?>" <?php print $selecao;?> >
                                      <?php print $categoria['nome'];?>
                        </option>
                      <?php endforeach ?>
        </select>
    </div>  
	    
    <div class="form-group  m-l-n">
        <label>Imagem </label>
      <input type="file" class="form-control filestyle" data-input="false" data-buttonText="Escolha a Imagem" name="foto" id="foto" value="<?php print $produto['imagem']; ?>">
    </div>  
</div>
           