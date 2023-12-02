function redirect() {
    // Obtém o valor digitado na barra de pesquisa
    var searchTerm = document.getElementById('busca').value;
    // Substitui espaços por hífens para criar uma URL amigável
    var formattedTerm = searchTerm.replace(/\s+/g, '-').toLowerCase();
    window.location.href = formattedTerm + ".php";
}