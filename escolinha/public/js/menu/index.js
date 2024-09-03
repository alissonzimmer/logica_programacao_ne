document.getElementById('cadastros-trigger').addEventListener('click', function() {
    const menu = document.getElementById('cadastros-menu');
    const isVisible = !menu.classList.contains('hidden');
    menu.classList.toggle('hidden', isVisible);
});