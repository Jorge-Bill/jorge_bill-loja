   <div class="container animated fadeInRight">
   <div class="form-group">
        <label>Nome: </label>  
        <input class="form-control m-b" type="text" name="nome" value="<?=$produto['nome']?>" placeholder="Mestre Yoda">
    </div>
    <div class="form-group">
       <label>Preço: </label>
        <input class="form-control m-b" type="number" name="preco" value="<?=$produto['preco']?>"placeholder="9999,000">
    </div>
    <div class="form-group">
        <label>Descrição: </label>
        <textarea class="form-control m-b" name="descricao" placeholder="That is why you fail."><?=$produto['descricao']?></textarea>
    </div>
    <div class="form-group">
        <input type="checkbox" name="usado" <?=$usado?> value="true"> Usado 
    </div>
    
    <div class="form-group  m-l-n">
        <label>Categoria: </label>
         <select class="form-control m-b" name="categoria_id">
                    <?php foreach($categorias as $categoria) :
                        $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                        $selecao = $essaEhACategoria ? "selected='selected'" : "";
                    ?>
                        <option value="<?=$categoria['id']?>" <?=$selecao?> >
                                      <?=$categoria['nome']?>
                        </option>
                      <?php endforeach ?>
        </select>
    </div>  
</div>
           