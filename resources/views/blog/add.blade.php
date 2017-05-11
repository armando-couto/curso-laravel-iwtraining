@include('head')

<section class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <form method="post" action="salvar">
            <legend>Novo Post</legend>

            <label for="titulo">Título</label>
            <input name="titulo" type="text" class="form-control" placeholder="Digite o título">
            <br>

            <label for="categoria">Categoria</label>
            <select name="categoria" class="form-control">
                <option selected disabled>-- Selecione --</option>
                <option value="php">PHP</option>
                <option value="java">Java</option>
                <option value="ruby">Ruby</option>
                <option value="python">Python</option>
            </select>
            <br>

            <label for="conteudo">Conteúdo</label>
            <textarea name="conteudo" class="form-control" placeholder="Sobre o que?"></textarea>
            <br>

            <label for="data">Data de Publoicação</label>
            <input type="text" name="data" class="form-control" disabled value="{{ date('d/m/Y') }}">
            <br>

            <button class="btn btn-primary btn-block">Enviar</button>
        </form>
    </div>
</section>

@include('footer')