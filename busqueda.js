document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");
    const searchButton = document.getElementById("searchButton");
    const drinks = document.querySelectorAll(".drink");

    // Agrega un evento al botón de búsqueda
    searchButton.addEventListener("click", function () {
        const searchTerm = searchInput.value.toLowerCase().trim();

        drinks.forEach((drink) => {
            const name = drink.getAttribute("data-name").toLowerCase();

            if (name.includes(searchTerm)) {
                drink.style.display = "block";
            } else {
                drink.style.display = "none";
            }
        });
    });

    // Restaura la visualización de todas las bebidas al borrar el campo de búsqueda
    searchInput.addEventListener("input", function () {
        if (searchInput.value.trim() === "") {
            drinks.forEach((drink) => {
                drink.style.display = "block";
            });
        }
    });
});