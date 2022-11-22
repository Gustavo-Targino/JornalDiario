
    <h2>Fale Conosco</h2>
        <form id="contactForm" action="?pg=contatodb" method="post">

            <label>Nome:</label>
            <input type="text" class="form-control" name="nome" required="" data-validation-required-message="Por favor, insira seu nome.">

            <label>Idade:</label>
            <input type="number" class="form-control" name="idade" required="" data-validation-required-message="Por favor, insira sua idade." min="0" max="120">

            <label>E-mail:</label>
            <input type="email" class="form-control" name="email" required="" data-validation-required-message="Por favor, insira seu e-mail.">

            <label>Telefone:</label>
            <input type="tel" class="form-control" name="telefone" required="" data-validation-required-message="Por favor, insira seu telefone.">

            <label>Endereço:</label>
            <input type="text" class="form-control" name="endereco" required="" data-validation-required-message="Por favor, insira seu endereço.">

            <label>Mensagem:</label>
            <textarea name="mensagem" class="form-control" cols="10" rows="5"></textarea>
            
            <br>

            <button type="submit" class="btn">Enviar</button>

        </form>