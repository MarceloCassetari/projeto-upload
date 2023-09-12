document.addEventListener('DOMContentLoaded', function() {
    var copiarBotao = document.getElementById('copiarBotao');
    var linkInput = document.querySelector('input[type="text"]');

    copiarBotao.addEventListener('click', function() {
        linkInput.select();
        document.execCommand('copy');
        copiarBotao.textContent = 'Link Copiado!';
        setTimeout(function() {
            copiarBotao.textContent = 'Copiar Link';
        }, 2000); // Reset do texto após 2 segundos
    });
});
